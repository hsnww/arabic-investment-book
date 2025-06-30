<?php
echo "اختبار من مجلد pages<br>";

// محاولة تضمين config.php
try {
    require_once __DIR__ . '/../includes/config.php';
    echo "✅ تم تضمين config.php بنجاح<br>";
    echo "اسم الموقع: " . SITE_NAME . "<br>";
} catch (Exception $e) {
    echo "❌ خطأ في تضمين config.php: " . $e->getMessage() . "<br>";
}

// محاولة تضمين header.php
try {
    include __DIR__ . '/../includes/header.php';
    echo "✅ تم تضمين header.php بنجاح<br>";
} catch (Exception $e) {
    echo "❌ خطأ في تضمين header.php: " . $e->getMessage() . "<br>";
}

echo "نهاية الاختبار";
?> 