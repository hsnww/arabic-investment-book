<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الرابع: العائد المعقول - ' . SITE_NAME;
$page_description = 'الفصل الثالث الجزء الرابع: العائد المعقول - تحديد العائد المتوقع والمقبول';
$page_keywords = 'العائد المعقول, العائد المتوقع, تقييم المخاطر';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter3_part4.php');
$chapter_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الرابع: العائد المعقول';
$current_page = 'chapter3_part4';

// Navigation links
$prev_chapter = get_chapter_url('chapter3_part3.php');
$next_chapter = get_chapter_url('chapter4_part1.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>العائد المعقول</h3>
    <p>في هذا الجزء نتعلم كيفية تحديد العائد المناسب وإدارة التوقعات.</p>
</div>

<h2><i class=\"fas fa-target me-2\"></i>تحديد العائد المناسب</h2>
<p>العائد المعقول يختلف حسب نوع الاستثمار ومستوى المخاطر.</p>

<div class=\"stats-section\">
    <h3><i class=\"fas fa-chart-line me-2\"></i>معدلات العائد المتوقعة</h3>
    <div class=\"stats-grid\">
        <div class=\"stat-item\">
            <span class=\"stat-number\">3-5%</span>
            <span class=\"stat-label\">الحسابات البنكية</span>
        </div>
        <div class=\"stat-item\">
            <span class=\"stat-number\">8-12%</span>
            <span class=\"stat-label\">الأسهم</span>
        </div>
        <div class=\"stat-item\">
            <span class=\"stat-number\">4-6%</span>
            <span class=\"stat-label\">السندات</span>
        </div>
    </div>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>