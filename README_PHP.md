# PHP Website - المال والاستثمار في الأسواق المالية

## نظرة عامة

تم تحويل الموقع من HTML إلى PHP مع نظام قوالب متقدم وإدارة مركزية للمسارات والروابط.

## الميزات الجديدة

### 1. نظام المسارات المطلقة
- **المشكلة السابقة**: كانت المسارات النسبية تسبب مشاكل عند التنقل بين المجلدات
- **الحل الجديد**: استخدام ثوابت مطلقة في `config.php`

```php
// في config.php
define('BASE_URL', 'http://localhost:8000'); // تغيير للخادم الإنتاجي
define('CHAPTERS_URL', BASE_URL . '/pages/chapters');
define('ASSETS_URL', BASE_URL . '/assets');
define('JS_URL', BASE_URL . '/js');
```

### 2. دوال مساعدة للمسارات
```php
// دوال مساعدة في config.php
get_page_url('index.php')           // http://localhost:8000/index.php
get_chapter_url('chapter1_part1.php') // http://localhost:8000/pages/chapters/chapter1_part1.php
get_asset_url('css/styles.css')     // http://localhost:8000/assets/css/styles.css
get_js_url('analytics.js')          // http://localhost:8000/js/analytics.js
```

### 3. تكوين مركزي للفصول والتنقل
```php
// تكوين الفصول في config.php
$chapters = [
    'chapter1' => [
        'title' => 'الفصل الأول: الاستثمار في الأسهم',
        'parts' => [
            'chapter1_part1' => [
                'title' => 'الجزء الأول: مقدمة الاستثمار',
                'url' => get_chapter_url('chapter1_part1.php')
            ]
        ]
    ]
];
```

## هيكل المشروع

```
html-book/
├── includes/
│   ├── config.php          # التكوين المركزي والثوابت
│   ├── header.php          # رأس الصفحة
│   ├── navigation.php      # شريط التنقل
│   └── footer.php          # تذييل الصفحة
├── templates/
│   └── chapter_template.php # قالب الفصول
├── pages/
│   ├── toc.php             # فهرس الكتاب
│   └── chapters/           # صفحات الفصول
│       ├── chapter1_part1.php
│       ├── chapter1_part2.php
│       └── ...
├── assets/
│   └── css/
│       └── additional-styles.css
├── js/
│   └── analytics.js
└── index.php               # الصفحة الرئيسية
```

## كيفية الاستخدام

### 1. إنشاء صفحة فصل جديدة
```php
<?php
// في pages/chapters/chapter_new.php
require_once __DIR__ . '/../../includes/config.php';

$page_title = 'عنوان الفصل - ' . SITE_NAME;
$page_description = 'وصف الفصل';
$chapter_title = 'عنوان الفصل';
$chapter_content = 'محتوى الفصل هنا...';
$prev_chapter = get_chapter_url('chapter_prev.php');
$next_chapter = get_chapter_url('chapter_next.php');

include get_template_path('chapter_template.php');
?>
```

### 2. إضافة فصل جديد للتكوين
```php
// في includes/config.php
$chapters['chapter_new'] = [
    'title' => 'عنوان الفصل الجديد',
    'parts' => [
        'chapter_new' => [
            'title' => 'عنوان الجزء',
            'url' => get_chapter_url('chapter_new.php')
        ]
    ]
];
```

## إصلاح مشاكل المسارات

### المشاكل السابقة:
1. **روابط مكررة**: `pages/chapters/pages/chapters/chapter1_part2.php`
2. **مسارات نسبية خاطئة**: `../assets/css/styles.css`
3. **روابط HTML في صفحات PHP**: `introduction.html`

### الحلول المطبقة:
1. **مسارات مطلقة**: جميع الروابط تستخدم `BASE_URL`
2. **دوال مساعدة**: `get_chapter_url()`, `get_page_url()`
3. **تكوين مركزي**: جميع الروابط في `config.php`

## التكوين للخوادم المختلفة

### التطوير المحلي
```php
define('SITE_URL', 'http://localhost:8000');
```

### الخادم الإنتاجي
```php
define('SITE_URL', 'https://yourdomain.com');
```

### الخادم الفرعي
```php
define('SITE_URL', 'https://yourdomain.com/book');
```

## الأمان

### 1. حماية من الوصول المباشر
```php
if (!defined('SECURE_ACCESS')) {
    define('SECURE_ACCESS', true);
}
```

### 2. تنظيف المخرجات
```php
echo sanitize_output($user_input);
```

### 3. التحقق من الروابط
```php
if (validate_url($url)) {
    // استخدام الرابط
}
```

## الأداء

### 1. التخزين المؤقت
```php
// حفظ البيانات
cache_set('key', $data, 3600);

// استرجاع البيانات
$data = cache_get('key');
```

### 2. تسجيل الأخطاء
```php
log_error('رسالة الخطأ', __FILE__, __LINE__);
```

## التشغيل

### 1. الخادم المحلي
```bash
php -S localhost:8000
```

### 2. الوصول للموقع
- الصفحة الرئيسية: `http://localhost:8000`
- فهرس الكتاب: `http://localhost:8000/pages/toc.php`
- الفصول: `http://localhost:8000/pages/chapters/chapter1_part1.php`

## الصيانة

### 1. إضافة فصل جديد
1. إنشاء ملف PHP في `pages/chapters/`
2. إضافة التكوين في `config.php`
3. تحديث الروابط في `toc.php`

### 2. تغيير التصميم
1. تعديل `includes/header.php` للرأس
2. تعديل `includes/footer.php` للتذييل
3. تعديل `assets/css/additional-styles.css` للأنماط

### 3. تحديث المحتوى
1. تعديل متغيرات المحتوى في ملفات الفصول
2. تحديث `$chapter_content` في كل فصل

## المزايا

✅ **مسارات موحدة**: جميع الروابط تستخدم نظام موحد  
✅ **صيانة سهلة**: تغيير واحد في `config.php` يحدث جميع الروابط  
✅ **أمان محسن**: حماية من الوصول المباشر وتنظيف المدخلات  
✅ **أداء أفضل**: نظام تخزين مؤقت وتسجيل أخطاء  
✅ **قابلية التوسع**: إضافة فصول جديدة بسهولة  
✅ **دعم متعدد الخوادم**: يعمل على أي خادم بتغيير `SITE_URL`  

## الدعم

للمساعدة أو الإبلاغ عن مشاكل، يرجى مراجعة:
- `SECURITY.md` - سياسة الأمان
- `CONTRIBUTING.md` - دليل المساهمة
- `SUPPORT.md` - الدعم والمساعدة 