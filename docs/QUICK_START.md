# دليل البدء السريع - النشر على DigitalOcean

## 🚀 النشر السريع في 5 دقائق

### الخطوة 1: إعداد SSH Key

```bash
# إنشاء SSH Key (إذا لم يكن موجود)
ssh-keygen -t rsa -b 4096 -C "your-email@example.com"

# نسخ المفتاح العام إلى DigitalOcean
cat ~/.ssh/id_rsa.pub
# انسخ المحتوى وأضفه في DigitalOcean > Settings > Security > SSH Keys
```

### الخطوة 2: إنشاء Droplet

1. اذهب إلى [DigitalOcean](https://digitalocean.com)
2. انقر على "Create" > "Droplets"
3. اختر:
    - **Image**: Ubuntu 22.04 LTS
    - **Size**: Basic Plan (1GB RAM, 1 vCPU) - $6/شهر
    - **SSH Key**: اختر المفتاح الذي أنشأته
4. انقر "Create Droplet"

### الخطوة 3: النشر التلقائي

```bash
# تشغيل السكريبت
./digitalocean-deploy.sh

# اختر:
# 1. إعداد Droplet جديد
# 2. نشر المشروع
```

### الخطوة 4: إعداد النطاق (اختياري)

```bash
# في السكريبت، اختر:
# 3. إعداد SSL/HTTPS
```

---

## 📋 المتطلبات

-   ✅ حساب DigitalOcean
-   ✅ SSH Key
-   ✅ نطاق (اختياري للـ SSL)

---

## 💰 التكلفة

-   **Droplet**: $6/شهر (1GB RAM)
-   **نطاق**: $12/سنة (اختياري)
-   **إجمالي**: $6-7/شهر

---

## 🔄 النشر المستمر

### الطريقة الأولى: GitHub Actions

```bash
# إنشاء ملف .github/workflows/deploy.yml
# راجع DEPLOYMENT_ALTERNATIVES.md للتفاصيل
```

### الطريقة الثانية: السكريبت المحسن

```bash
# تحديث الإعدادات
nano deploy.env

# تشغيل النشر
./deploy.sh
```

---

## 🛠️ الأوامر المفيدة

```bash
# مراقبة الخادم
./digitalocean-deploy.sh
# اختر: 4. مراقبة الخادم

# إنشاء نسخة احتياطية
./digitalocean-deploy.sh
# اختر: 5. إنشاء نسخة احتياطية

# استعادة نسخة احتياطية
./digitalocean-deploy.sh
# اختر: 6. استعادة نسخة احتياطية
```

---

## 🔧 استكشاف الأخطاء

### مشكلة في الاتصال

```bash
# فحص SSH
ssh -T root@your-server-ip

# إعادة إنشاء SSH Key
ssh-keygen -t rsa -b 4096
```

### مشكلة في الصلاحيات

```bash
# على الخادم
sudo chown -R www-data:www-data /var/www/investment-book
sudo chmod -R 755 /var/www/investment-book
```

### مشكلة في Apache

```bash
# فحص الحالة
sudo systemctl status apache2

# إعادة تشغيل
sudo systemctl restart apache2
```

---

## 📞 الدعم

-   📧 البريد الإلكتروني: support@your-domain.com
-   📱 الواتساب: +966-xxx-xxx-xxx
-   🌐 الموقع: https://your-domain.com

---

## 🎯 المميزات

✅ **سهولة الاستخدام**: واجهة تفاعلية باللغة العربية  
✅ **الأمان**: SSL تلقائي + جدار حماية  
✅ **النسخ الاحتياطية**: تلقائية يومية  
✅ **المراقبة**: أدوات مراقبة مدمجة  
✅ **التكلفة**: أقل من Laravel Forge بـ 80%  
✅ **التحكم**: تحكم كامل في الخادم

---

## 🚀 البدء الآن

```bash
# 1. تأكد من وجود SSH Key
ls ~/.ssh/id_rsa

# 2. شغل السكريبت
./digitalocean-deploy.sh

# 3. اتبع التعليمات على الشاشة
```

**مدة النشر الكاملة: 5-10 دقائق فقط!** ⚡
