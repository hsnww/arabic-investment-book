# دليل النشر - Investment Book

## نظرة عامة على الملفات

### 🔗 العلاقة بين الملفات

1. **`composer.json`** - إدارة تبعيات PHP
2. **`package.json`** - إدارة تبعيات JavaScript/Frontend
3. **`Dockerfile`** - بناء صورة Docker للتطبيق
4. **`docker-compose.yml`** - إدارة الخدمات المتعددة
5. **`deploy.sh`** - سكريبت النشر التلقائي

## الإعدادات المطلوبة

### 1. إعدادات الخادم

```bash
# نسخ ملف الإعدادات
cp deploy.env.example deploy.env

# تحديث القيم في deploy.env
nano deploy.env
```

### 2. إعدادات SSH

```bash
# إنشاء مفتاح SSH
ssh-keygen -t rsa -b 4096 -C "your-email@example.com"

# نسخ المفتاح إلى الخادم
ssh-copy-id your-username@your-server.com
```

### 3. إعدادات قاعدة البيانات

```sql
-- إنشاء قاعدة البيانات
CREATE DATABASE investment_book CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- إنشاء المستخدم
CREATE USER 'bookuser'@'localhost' IDENTIFIED BY 'bookpass';
GRANT ALL PRIVILEGES ON investment_book.* TO 'bookuser'@'localhost';
FLUSH PRIVILEGES;
```

## عملية النشر

### النشر التلقائي

```bash
# تشغيل سكريبت النشر
./deploy.sh
```

### النشر اليدوي

```bash
# 1. بناء الأصول الأمامية
npm run build

# 2. تثبيت تبعيات PHP
composer install --no-dev --optimize-autoloader

# 3. رفع الملفات
rsync -avz --delete ./ user@server:/var/www/html/investment-book/

# 4. تعيين الصلاحيات
chmod -R 755 /var/www/html/investment-book
chmod -R 777 /var/www/html/investment-book/logs
chmod -R 777 /var/www/html/investment-book/cache
```

## استخدام Docker

### التطوير المحلي

```bash
# تشغيل البيئة المحلية
docker-compose up -d

# الوصول للتطبيق
http://localhost:8080

# إدارة قاعدة البيانات
http://localhost:8081 (phpMyAdmin)
```

### النشر مع Docker

```bash
# بناء الصورة
docker build -t investment-book .

# تشغيل الحاوية
docker run -d -p 80:80 investment-book
```

## مراقبة النشر

### السجلات

```bash
# سجلات التطبيق
tail -f logs/app.log

# سجلات الخادم
tail -f /var/log/apache2/error.log
```

### النسخ الاحتياطية

```bash
# موقع النسخ الاحتياطية
/var/www/backups/investment-book/

# استعادة نسخة احتياطية
cp -r /var/www/backups/investment-book/backup-20231201-143022 /var/www/html/investment-book
```

## استكشاف الأخطاء

### مشاكل شائعة

1. **خطأ في الصلاحيات**

    ```bash
    sudo chown -R www-data:www-data /var/www/html/investment-book
    ```

2. **خطأ في Composer**

    ```bash
    composer install --no-dev --optimize-autoloader --no-interaction
    ```

3. **خطأ في قاعدة البيانات**
    ```bash
    mysql -u bookuser -p investment_book < database/migrations.sql
    ```

### فحص الحالة

```bash
# فحص حالة الخدمات
systemctl status apache2
systemctl status mysql

# فحص المساحة المتاحة
df -h

# فحص الذاكرة
free -h
```

## الأمان

### إعدادات الأمان المطلوبة

1. **تحديث كلمات المرور**
2. **إعداد SSL/HTTPS**
3. **تكوين جدار الحماية**
4. **تحديث النظام بانتظام**

### مراقبة الأمان

```bash
# فحص الملفات المشبوهة
find /var/www/html/investment-book -name "*.php" -exec grep -l "eval\|base64_decode" {} \;

# فحص الصلاحيات
find /var/www/html/investment-book -type f -perm 777
```

## الدعم

للمساعدة في النشر، راجع:

-   [دليل Docker](https://docs.docker.com/)
-   [دليل Apache](https://httpd.apache.org/docs/)
-   [دليل Composer](https://getcomposer.org/doc/)
