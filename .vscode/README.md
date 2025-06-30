# VS Code Configuration

هذا المجلد يحتوي على إعدادات VS Code المخصصة لمشروع كتاب المال والاستثمار.

## 📁 الملفات

### `extensions.json`
يحتوي على قائمة الإضافات الموصى بها للمشروع:

#### **PHP Development**
- `bmewburn.vscode-intelephense-client` - IntelliSense متقدم لـ PHP
- `xdebug.php-debug` - تصحيح الأخطاء في PHP
- `neilbrayfield.php-docblocker` - إنشاء DocBlocks تلقائياً
- `junstyle.php-cs-fixer` - تنسيق الكود حسب PSR12

#### **Frontend Development**
- `bradlc.vscode-tailwindcss` - دعم Tailwind CSS
- `esbenp.prettier-vscode` - تنسيق الكود
- `formulahendry.auto-rename-tag` - إعادة تسمية العلامات تلقائياً

#### **Docker & DevOps**
- `ms-azuretools.vscode-docker` - إدارة Docker
- `ms-vscode.makefile-tools` - دعم Makefile

### `settings.json`
إعدادات المحرر المخصصة:

- **تنسيق تلقائي** عند الحفظ
- **تمييز syntax** لجميع أنواع الملفات
- **إعدادات PHP** محسنة
- **إعدادات Git** متقدمة
- **إعدادات Docker** مخصصة

### `tasks.json`
مهام سريعة للمشروع:

- `Install Dependencies` - تثبيت التبعيات
- `Build Assets` - بناء الأصول
- `Start Dev Server` - تشغيل خادم التطوير
- `Docker Up/Down` - إدارة Docker
- `PHP Code Sniffer` - فحص جودة الكود
- `Git Operations` - عمليات Git

### `launch.json`
إعدادات التصحيح:

- **PHP Debugging** مع Xdebug
- **JavaScript Debugging**
- **Docker Debugging**
- **Webpack Debugging**

### `snippets.code-snippets`
قوالب كود سريعة:

- `phpclass` - إنشاء class PHP
- `htmlpage` - صفحة HTML كاملة
- `bscard` - بطاقة Bootstrap
- `jsfunc` - دالة JavaScript
- `gitcommit` - تسلسل Git

## 🚀 الاستخدام

### تثبيت الإضافات
1. افتح المشروع في VS Code
2. ستظهر رسالة تطلب تثبيت الإضافات الموصى بها
3. اضغط "Install All"

### تشغيل المهام
1. `Ctrl+Shift+P` (أو `Cmd+Shift+P` على Mac)
2. اكتب "Tasks: Run Task"
3. اختر المهمة المطلوبة

### التصحيح
1. اضغط `F5` لبدء التصحيح
2. اختر إعداد التصحيح المناسب
3. ضع breakpoints في الكود

### استخدام القوالب
1. اكتب prefix القالب (مثل `phpclass`)
2. اضغط `Tab` أو `Enter`
3. املأ الحقول المطلوبة

## ⚙️ الإعدادات المخصصة

### PHP
- تنسيق تلقائي حسب PSR12
- IntelliSense متقدم
- تصحيح أخطاء في الوقت الفعلي

### Frontend
- تنسيق تلقائي مع Prettier
- دعم SCSS كامل
- IntelliSense للـ JavaScript

### Git
- عرض التغييرات في الوقت الفعلي
- عمليات Git سريعة
- دعم GitLens

### Docker
- إدارة الحاويات مباشرة
- بناء وتشغيل images
- تصحيح في الحاويات

## 🎨 المظهر

- **Material Icon Theme** - أيقونات جميلة
- **Material Theme** - مظهر عصري
- **RTL Support** - دعم اللغة العربية

## 🔧 الأوامر السريعة

| الأمر | الوصف |
|-------|--------|
| `Ctrl+Shift+P` | لوحة الأوامر |
| `F5` | بدء التصحيح |
| `Ctrl+Shift+B` | تشغيل المهام |
| `Ctrl+Space` | اقتراحات الكود |
| `Ctrl+Shift+F` | البحث في الملفات |

## 📝 ملاحظات

- جميع الإعدادات محفوظة في المشروع
- يمكن تخصيص الإعدادات حسب الحاجة
- الإضافات الموصى بها تحسن الإنتاجية بشكل كبير
- القوالب تسرع عملية التطوير

## 🔄 التحديثات

- تحديث الإضافات بانتظام
- إضافة قوالب جديدة حسب الحاجة
- تحسين الإعدادات بناءً على الاستخدام 