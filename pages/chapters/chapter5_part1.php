<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الخامس: السندات - الجزء الأول: أساسيات السندات - ' . SITE_NAME;
$page_description = 'الفصل الخامس الجزء الأول: أساسيات السندات - فهم السندات وأنواعها';
$page_keywords = 'السندات, أنواع السندات, سوق السندات';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter5_part1.php');
$chapter_title = 'الفصل الخامس: السندات - الجزء الأول: أساسيات السندات';
$current_page = 'chapter5_part1';

// Navigation links
$prev_chapter = get_chapter_url('chapter4_part3.php');
$next_chapter = get_chapter_url('chapter5_part2.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>السندات</h3>
    <p>في هذا الجزء نتعلم أساسيات السندات وأنواعها ومزايا وعيوب الاستثمار فيها.</p>
</div>

<h2><i class=\"fas fa-file-contract me-2\"></i>ما هي السندات؟</h2>
<p>السند هو أداة دين تصدرها الشركات أو الحكومات لجمع الأموال.</p>

<div class=\"info-box\">
    <h4><i class=\"fas fa-info-circle me-2\"></i>خصائص السندات</h4>
    <ul>
        <li>قيمة اسمية</li>
        <li>معدل فائدة ثابت</li>
        <li>تاريخ استحقاق</li>
        <li>مخاطر ائتمانية</li>
    </ul>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>