# دليل خريطة الموقع (Sitemap Guide)

## نظرة عامة

تم إنشاء خريطة موقع شاملة لكتاب "المال والاستثمار في الأسواق المالية" لتحسين ظهور الموقع في محركات البحث (SEO).

## الملفات المطلوبة

### 1. sitemap.xml

-   **الموقع**: `/sitemap.xml`
-   **الغرض**: خريطة موقع XML لمحركات البحث
-   **المحتوى**: جميع صفحات الموقع مع أولويات وتواريخ التحديث

### 2. pages/sitemap.php

-   **الموقع**: `/pages/sitemap.php`
-   **الغرض**: خريطة موقع HTML للمستخدمين
-   **المحتوى**: دليل تفاعلي لجميع صفحات الموقع

### 3. robots.txt

-   **الموقع**: `/robots.txt`
-   **الغرض**: توجيه محركات البحث
-   **المحتوى**: إعدادات الزحف والملفات المسموح/الممنوع

### 4. generate_sitemap.php

-   **الموقع**: `/generate_sitemap.php`
-   **الغرض**: تحديث خريطة الموقع تلقائياً
-   **الاستخدام**: يمكن تشغيله من سطر الأوامر أو عبر الويب

## كيفية الاستخدام

### 1. إرسال خريطة الموقع إلى Google

1. انتقل إلى [Google Search Console](https://search.google.com/search-console)
2. اختر موقعك أو أضفه إذا لم يكن موجوداً
3. في القائمة الجانبية، اختر "Sitemaps"
4. أضف `https://zajwal.com/sitemap.xml`
5. اضغط "Submit"

### 2. إرسال خريطة الموقع إلى Bing

1. انتقل إلى [Bing Webmaster Tools](https://www.bing.com/webmasters)
2. اختر موقعك
3. اختر "Sitemaps" من القائمة
4. أضف `https://zajwal.com/sitemap.xml`
5. اضغط "Submit"

### 3. تحديث خريطة الموقع

#### الطريقة الأولى: عبر سطر الأوامر

```bash
php generate_sitemap.php
```

#### الطريقة الثانية: عبر المتصفح

```
https://zajwal.com/generate_sitemap.php
```

## هيكل خريطة الموقع

### الصفحات الرئيسية (الأولوية: 1.0 - 0.9)

-   الصفحة الرئيسية (الأولوية: 1.0)
-   فهرس الكتاب (الأولوية: 0.9)
-   خريطة الموقع (الأولوية: 0.8)
-   صفحات المقدمة (الأولوية: 0.8)

### فصول الكتاب (الأولوية: 0.7)

-   19 فصل مقسمة إلى أجزاء
-   كل جزء له صفحة منفصلة
-   إجمالي 57 صفحة فصل

## إعدادات SEO

### 1. أولويات الصفحات

-   **1.0**: الصفحة الرئيسية
-   **0.9**: فهرس الكتاب
-   **0.8**: صفحات المقدمة وخريطة الموقع
-   **0.7**: جميع فصول الكتاب

### 2. تكرار التحديث

-   **weekly**: الصفحة الرئيسية
-   **monthly**: جميع الصفحات الأخرى

### 3. الملفات المحمية

تم حماية الملفات التالية من الزحف:

-   `/includes/` - ملفات النظام
-   `/cache/` - ملفات التخزين المؤقت
-   `/logs/` - ملفات السجلات
-   `/templates/` - قوالب النظام
-   `/text/` - ملفات النصوص الخام
-   `/pdf-book/` - ملفات PDF الأصلية
-   `/docker/` - ملفات Docker
-   `/docs/` - ملفات التوثيق

## مراقبة الأداء

### 1. Google Search Console

-   مراقبة فهرسة الصفحات
-   تحليل الأخطاء
-   مراقبة الأداء في البحث

### 2. Bing Webmaster Tools

-   مراقبة فهرسة الصفحات
-   تحليل حركة المرور
-   مراقبة الكلمات المفتاحية

### 3. ملفات السجلات

-   `logs/sitemap.log` - سجل تحديثات خريطة الموقع

## نصائح للتحسين

### 1. تحديث منتظم

-   حدث خريطة الموقع شهرياً
-   تأكد من صحة جميع الروابط
-   أضف الصفحات الجديدة

### 2. تحسين المحتوى

-   استخدم عناوين وصفية
-   أضف meta descriptions
-   استخدم الكلمات المفتاحية المناسبة

### 3. مراقبة الأداء

-   راقب معدل الفهرسة
-   حل مشاكل الزحف
-   حسّن سرعة الموقع

## استكشاف الأخطاء

### مشكلة: خريطة الموقع لا تظهر في Google

**الحل:**

1. تأكد من إرسال خريطة الموقع في Search Console
2. انتظر 24-48 ساعة للفهرسة
3. تحقق من ملف robots.txt

### مشكلة: صفحات لا تظهر في البحث

**الحل:**

1. تحقق من وجود الصفحات في خريطة الموقع
2. تأكد من عدم حظرها في robots.txt
3. استخدم "Request Indexing" في Search Console

### مشكلة: أخطاء في خريطة الموقع

**الحل:**

1. تحقق من صحة XML
2. تأكد من صحة جميع الروابط
3. أعد إنشاء خريطة الموقع

## روابط مفيدة

-   [Google Search Console](https://search.google.com/search-console)
-   [Bing Webmaster Tools](https://www.bing.com/webmasters)
-   [XML Sitemap Protocol](https://www.sitemaps.org/protocol.html)
-   [Google SEO Guide](https://developers.google.com/search/docs/beginner/seo-starter-guide)

## الدعم

إذا واجهت أي مشاكل مع خريطة الموقع، يمكنك:

1. مراجعة ملفات السجلات
2. التحقق من إعدادات الخادم
3. التواصل مع فريق الدعم التقني
