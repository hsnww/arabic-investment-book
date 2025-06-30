<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل السابع: الخلاصة والتوصيات - الجزء الثاني: الخلاصة والتوصيات - ' . SITE_NAME;
$page_description = 'الفصل السابع الجزء الثاني: الخلاصة والتوصيات - التوصيات النهائية للمستثمرين';
$page_keywords = 'التوصيات النهائية, نصائح للمستثمرين, الخلاصة';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter7_part2.php');
$chapter_title = 'الفصل السابع: الخلاصة والتوصيات - الجزء الثاني: الخلاصة والتوصيات';
$current_page = 'chapter7_part2';

// Navigation links
$prev_chapter = get_chapter_url('chapter7_part1.php');
$next_chapter = get_chapter_url('chapter8_part1.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>الخلاصة والتوصيات</h3>
    <p>في هذا الجزء الأخير نقدم ملخصاً شاملاً وتوصيات للمستثمرين والنصائح النهائية.</p>
</div>

<h2><i class=\"fas fa-summary me-2\"></i>ملخص شامل</h2>
<p>لقد تعلمنا في هذا الكتاب أساسيات الاستثمار في الأسواق المالية.</p>

<div class=\"info-box\">
    <h4><i class=\"fas fa-list me-2\"></i>النقاط الرئيسية</h4>
    <ul>
        <li>أساسيات الاستثمار في الأسهم</li>
        <li>حساب الأداء الاستثماري</li>
        <li>صناديق الاستثمار</li>
        <li>السندات والعملات</li>
    </ul>
</div>

<h2><i class=\"fas fa-lightbulb me-2\"></i>التوصيات النهائية</h2>
<div class=\"warning-box\">
    <h4><i class=\"fas fa-exclamation-triangle me-2\"></i>نصائح مهمة</h4>
    <ul>
        <li>ابدأ الاستثمار مبكراً</li>
        <li>نوع استثماراتك</li>
        <li>ادرس قبل الاستثمار</li>
        <li>تحكم في مخاطرك</li>
    </ul>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>