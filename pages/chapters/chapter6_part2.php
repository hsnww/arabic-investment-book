<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل السادس: العملات الأجنبية - الجزء الثاني: تحليل العملات - ' . SITE_NAME;
$page_description = 'الفصل السادس الجزء الثاني: تحليل العملات - تحليل العوامل المؤثرة على أسعار العملات';
$page_keywords = 'تحليل العملات, أسعار الصرف, العوامل الاقتصادية';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter6_part2.php');
$chapter_title = 'الفصل السادس: العملات الأجنبية - الجزء الثاني: تحليل العملات';
$current_page = 'chapter6_part2';

// Navigation links
$prev_chapter = get_chapter_url('chapter6_part1.php');
$next_chapter = get_chapter_url('chapter6_part3.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>تحليل العملات</h3>
    <p>في هذا الجزء نتعلم التحليل الأساسي والتقني للعملات والمؤشرات الاقتصادية.</p>
</div>

<h2><i class=\"fas fa-chart-line me-2\"></i>التحليل الأساسي</h2>
<p>التحليل الأساسي يركز على العوامل الاقتصادية والسياسية المؤثرة على العملات.</p>

<div class=\"info-box\">
    <h4><i class=\"fas fa-list me-2\"></i>المؤشرات الاقتصادية المهمة</h4>
    <ul>
        <li>معدل البطالة</li>
        <li>معدل التضخم</li>
        <li>الناتج المحلي الإجمالي</li>
        <li>أسعار الفائدة</li>
    </ul>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>