<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الثالث: قياس الأداء - ' . SITE_NAME;
$page_description = 'الفصل الثالث الجزء الثالث: قياس الأداء - مؤشرات قياس أداء الاستثمارات';
$page_keywords = 'قياس الأداء, مؤشرات الأداء, تقييم الاستثمارات';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter3_part3.php');
$chapter_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الثالث: قياس الأداء';
$current_page = 'chapter3_part3';

// Navigation links
$prev_chapter = get_chapter_url('chapter3_part2.php');
$next_chapter = get_chapter_url('chapter3_part4.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>قياس الأداء</h3>
    <p>في هذا الجزء نتعلم كيفية قياس أداء الاستثمارات ومقارنتها بمعايير السوق.</p>
</div>

<h2><i class=\"fas fa-chart-bar me-2\"></i>مؤشرات الأداء</h2>
<p>هناك عدة مؤشرات تستخدم لقياس أداء الاستثمارات.</p>

<div class=\"info-box\">
    <h4><i class=\"fas fa-list me-2\"></i>المؤشرات الرئيسية</h4>
    <ul>
        <li>العائد السنوي</li>
        <li>مخاطر الاستثمار</li>
        <li>نسبة شارب</li>
        <li>الحد الأقصى للخسارة</li>
    </ul>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>