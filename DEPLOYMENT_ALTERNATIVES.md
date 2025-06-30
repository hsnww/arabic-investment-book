# طرق النشر البديلة لـ Laravel Forge على DigitalOcean

## نظرة عامة

هذا الدليل يشرح طرق نشر بديلة لـ Laravel Forge عند استخدام DigitalOcean، مع التركيز على الأدوات المتاحة في مشروعك.

---

## الطريقة الأولى: النشر باستخدام Docker

### 1. إعداد Droplet على DigitalOcean

```bash
# إنشاء Droplet جديد
# اختيار Ubuntu 22.04 LTS
# حجم: Basic Plan (1GB RAM, 1 vCPU)
# إضافة SSH Key
```

### 2. إعداد الخادم

```bash
# الاتصال بالخادم
ssh root@your-server-ip

# تحديث النظام
apt update && apt upgrade -y

# تثبيت Docker
curl -fsSL https://get.docker.com -o get-docker.sh
sh get-docker.sh

# تثبيت Docker Compose
apt install docker-compose -y

# إضافة المستخدم إلى مجموعة Docker
usermod -aG docker $USER
```

### 3. رفع المشروع

```bash
# إنشاء مجلد المشروع
mkdir -p /var/www/investment-book
cd /var/www/investment-book

# رفع الملفات (من جهازك المحلي)
rsync -avz --exclude 'node_modules' --exclude '.git' ./ root@your-server-ip:/var/www/investment-book/
```

### 4. تشغيل المشروع

```bash
# على الخادم
cd /var/www/investment-book

# بناء وتشغيل الحاويات
docker-compose up -d --build

# فحص الحالة
docker-compose ps
```

### 5. إعداد Nginx Reverse Proxy

```bash
# تثبيت Nginx
apt install nginx -y

# إنشاء ملف التكوين
nano /etc/nginx/sites-available/investment-book
```

```nginx
server {
    listen 80;
    server_name your-domain.com www.your-domain.com;

    location / {
        proxy_pass http://localhost:8080;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
```

```bash
# تفعيل الموقع
ln -s /etc/nginx/sites-available/investment-book /etc/nginx/sites-enabled/
nginx -t
systemctl reload nginx
```

---

## الطريقة الثانية: النشر التقليدي مع Apache

### 1. إعداد الخادم

```bash
# تثبيت Apache
apt install apache2 -y

# تثبيت PHP
apt install php8.1 php8.1-mysql php8.1-curl php8.1-gd php8.1-mbstring php8.1-xml php8.1-zip -y

# تثبيت Composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# تثبيت Node.js
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
apt install nodejs -y
```

### 2. إعداد قاعدة البيانات

```bash
# تثبيت MySQL
apt install mysql-server -y

# تأمين MySQL
mysql_secure_installation

# إنشاء قاعدة البيانات
mysql -u root -p
```

```sql
CREATE DATABASE investment_book CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'bookuser'@'localhost' IDENTIFIED BY 'strong_password';
GRANT ALL PRIVILEGES ON investment_book.* TO 'bookuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

### 3. رفع المشروع

```bash
# إنشاء مجلد المشروع
mkdir -p /var/www/investment-book
cd /var/www/investment-book

# رفع الملفات
rsync -avz --exclude 'node_modules' --exclude '.git' ./ root@your-server-ip:/var/www/investment-book/

# تعيين الصلاحيات
chown -R www-data:www-data /var/www/investment-book
chmod -R 755 /var/www/investment-book
chmod -R 777 /var/www/investment-book/logs
chmod -R 777 /var/www/investment-book/cache
```

### 4. تثبيت التبعيات

```bash
# تثبيت تبعيات PHP
composer install --no-dev --optimize-autoloader

# تثبيت تبعيات Node.js
npm install --production
npm run build
```

### 5. إعداد Apache

```bash
# إنشاء ملف التكوين
nano /etc/apache2/sites-available/investment-book.conf
```

```apache
<VirtualHost *:80>
    ServerName your-domain.com
    ServerAlias www.your-domain.com
    DocumentRoot /var/www/investment-book

    <Directory /var/www/investment-book>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/investment-book_error.log
    CustomLog ${APACHE_LOG_DIR}/investment-book_access.log combined
</VirtualHost>
```

```bash
# تفعيل الموقع
a2ensite investment-book.conf
a2enmod rewrite
systemctl reload apache2
```

---

## الطريقة الثالثة: النشر باستخدام سكريبت deploy.sh المحسن

### 1. إعداد الخادم

```bash
# إنشاء مستخدم للنشر
adduser deploy
usermod -aG sudo deploy

# إعداد SSH Key
mkdir -p /home/deploy/.ssh
cp ~/.ssh/authorized_keys /home/deploy/.ssh/
chown -R deploy:deploy /home/deploy/.ssh
chmod 700 /home/deploy/.ssh
chmod 600 /home/deploy/.ssh/authorized_keys
```

### 2. إعداد ملف الإعدادات

```bash
# على جهازك المحلي
cp deploy.env.example deploy.env
nano deploy.env
```

```bash
# تحديث القيم
REMOTE_HOST=your-server-ip
REMOTE_USER=deploy
REMOTE_PATH=/var/www/investment-book
BACKUP_PATH=/var/www/backups/investment-book
DB_HOST=localhost
DB_NAME=investment_book
DB_USER=bookuser
DB_PASSWORD=your_strong_password
ENVIRONMENT=production
```

### 3. تشغيل النشر

```bash
# جعل السكريبت قابل للتنفيذ
chmod +x deploy.sh

# تشغيل النشر
./deploy.sh
```

---

## الطريقة الرابعة: النشر باستخدام GitHub Actions

### 1. إنشاء ملف Workflow

```bash
# إنشاء مجلد
mkdir -p .github/workflows

# إنشاء ملف النشر
nano .github/workflows/deploy.yml
```

```yaml
name: Deploy to DigitalOcean

on:
    push:
        branches: [main]

jobs:
    deploy:
        runs-on: ubuntu-latest

        steps:
            - uses: actions/checkout@v3

            - name: Setup Node.js
              uses: actions/setup-node@v3
              with:
                  node-version: '18'
                  cache: 'npm'

            - name: Install dependencies
              run: npm ci

            - name: Build assets
              run: npm run build

            - name: Deploy to server
              uses: appleboy/ssh-action@v0.1.5
              with:
                  host: ${{ secrets.HOST }}
                  username: ${{ secrets.USERNAME }}
                  key: ${{ secrets.SSH_KEY }}
                  script: |
                      cd /var/www/investment-book
                      git pull origin main
                      composer install --no-dev --optimize-autoloader
                      npm ci --production
                      npm run build
                      chown -R www-data:www-data /var/www/investment-book
                      chmod -R 755 /var/www/investment-book
                      systemctl reload apache2
```

### 2. إعداد Secrets في GitHub

```bash
# في GitHub Repository > Settings > Secrets
HOST=your-server-ip
USERNAME=deploy
SSH_KEY=your-private-ssh-key
```

---

## الطريقة الخامسة: النشر باستخدام Ansible

### 1. إنشاء ملف Playbook

```bash
# إنشاء ملف
nano deploy-playbook.yml
```

```yaml
---
- hosts: webservers
  become: yes
  tasks:
      - name: Update apt cache
        apt:
            update_cache: yes

      - name: Install required packages
        apt:
            name: '{{ item }}'
            state: present
        loop:
            - apache2
            - php8.1
            - php8.1-mysql
            - php8.1-curl
            - php8.1-gd
            - php8.1-mbstring
            - php8.1-xml
            - php8.1-zip
            - composer
            - nodejs
            - npm

      - name: Create project directory
        file:
            path: /var/www/investment-book
            state: directory
            owner: www-data
            group: www-data
            mode: '0755'

      - name: Copy project files
        synchronize:
            src: ./
            dest: /var/www/investment-book/
            delete: yes
            exclude:
                - node_modules
                - .git
                - logs
                - cache

      - name: Install PHP dependencies
        command: composer install --no-dev --optimize-autoloader
        args:
            chdir: /var/www/investment-book

      - name: Install Node.js dependencies
        command: npm ci --production
        args:
            chdir: /var/www/investment-book

      - name: Build assets
        command: npm run build
        args:
            chdir: /var/www/investment-book

      - name: Set permissions
        file:
            path: /var/www/investment-book
            owner: www-data
            group: www-data
            recurse: yes
            mode: '0755'

      - name: Restart Apache
        service:
            name: apache2
            state: restarted
```

### 2. تشغيل Ansible

```bash
# إنشاء ملف inventory
nano inventory.ini
```

```ini
[webservers]
your-server-ip ansible_user=root ansible_ssh_private_key_file=~/.ssh/id_rsa
```

```bash
# تشغيل Playbook
ansible-playbook -i inventory.ini deploy-playbook.yml
```

---

## الطريقة السادسة: النشر باستخدام CI/CD Pipeline

### 1. إعداد GitLab CI/CD

```bash
# إنشاء ملف
nano .gitlab-ci.yml
```

```yaml
stages:
    - build
    - deploy

build:
    stage: build
    image: node:18
    script:
        - npm ci
        - npm run build
    artifacts:
        paths:
            - assets/css/
            - assets/js/

deploy:
    stage: deploy
    image: alpine:latest
    before_script:
        - apk add --no-cache openssh-client
        - eval $(ssh-agent -s)
        - echo "$SSH_PRIVATE_KEY" | tr -d '\r' | ssh-add -
        - mkdir -p ~/.ssh
        - chmod 700 ~/.ssh
    script:
        - ssh -o StrictHostKeyChecking=no $USER@$HOST "
          cd /var/www/investment-book &&
          git pull origin main &&
          composer install --no-dev --optimize-autoloader &&
          chown -R www-data:www-data /var/www/investment-book &&
          systemctl reload apache2
          "
    only:
        - main
```

---

## مقارنة الطرق

| الطريقة         | السهولة    | السرعة   | الأمان     | التكلفة  | الصيانة  |
| --------------- | ---------- | -------- | ---------- | -------- | -------- |
| Docker          | ⭐⭐⭐     | ⭐⭐⭐⭐ | ⭐⭐⭐⭐   | ⭐⭐     | ⭐⭐⭐   |
| Apache التقليدي | ⭐⭐⭐⭐   | ⭐⭐⭐   | ⭐⭐⭐     | ⭐⭐⭐⭐ | ⭐⭐⭐⭐ |
| deploy.sh       | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐ | ⭐⭐⭐⭐   | ⭐⭐⭐⭐ | ⭐⭐⭐⭐ |
| GitHub Actions  | ⭐⭐⭐     | ⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ | ⭐⭐⭐   | ⭐⭐⭐   |
| Ansible         | ⭐⭐       | ⭐⭐⭐   | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐ | ⭐⭐⭐   |
| GitLab CI/CD    | ⭐⭐⭐     | ⭐⭐⭐⭐ | ⭐⭐⭐⭐   | ⭐⭐⭐   | ⭐⭐⭐   |

---

## نصائح مهمة

### 🔒 الأمان

1. **تحديث كلمات المرور بانتظام**
2. **استخدام SSH Keys بدلاً من كلمات المرور**
3. **إعداد جدار الحماية**
4. **تحديث النظام بانتظام**

### 📊 المراقبة

```bash
# مراقبة استخدام الموارد
htop
df -h
free -h

# مراقبة السجلات
tail -f /var/log/apache2/error.log
tail -f /var/www/investment-book/logs/app.log
```

### 🔄 النسخ الاحتياطية

```bash
# إنشاء نسخة احتياطية يومية
0 2 * * * /usr/bin/rsync -avz /var/www/investment-book/ /var/backups/investment-book/$(date +\%Y\%m\%d)/
```

### 🚀 التحسينات

1. **تفعيل Gzip Compression**
2. **إعداد Browser Caching**
3. **تحسين الصور**
4. **استخدام CDN**

---

## استكشاف الأخطاء

### مشاكل شائعة وحلولها

1. **خطأ في الصلاحيات**

    ```bash
    sudo chown -R www-data:www-data /var/www/investment-book
    sudo chmod -R 755 /var/www/investment-book
    ```

2. **خطأ في Composer**

    ```bash
    composer install --no-dev --optimize-autoloader --no-interaction
    ```

3. **خطأ في قاعدة البيانات**

    ```bash
    mysql -u bookuser -p investment_book < database/migrations.sql
    ```

4. **خطأ في Apache**
    ```bash
    apache2ctl configtest
    systemctl status apache2
    ```

---

## الخلاصة

أفضل طريقة للنشر تعتمد على:

-   **للبداية**: استخدم `deploy.sh` المحسن
-   **للإنتاج**: استخدم Docker مع Nginx
-   **للأتمتة**: استخدم GitHub Actions
-   **للمشاريع الكبيرة**: استخدم Ansible

جميع الطرق تتفوق على Laravel Forge من حيث:

-   ✅ التكلفة الأقل
-   ✅ المرونة العالية
-   ✅ التحكم الكامل
-   ✅ إمكانية التخصيص
