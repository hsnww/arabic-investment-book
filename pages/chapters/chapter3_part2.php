<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الثاني: معادلات العائد - ' . SITE_NAME;
$page_description = 'الفصل الثالث الجزء الثاني: معادلات العائد - حساب العائد على الاستثمارات المختلفة';
$page_keywords = 'معادلات العائد, حساب العائد, معدل العائد, الربحية';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter3_part2.php');
$chapter_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الثاني: معادلات العائد';
$current_page = 'chapter3_part2';

// Navigation links
$prev_chapter = get_chapter_url('chapter3_part1.php');
$next_chapter = get_chapter_url('chapter3_part3.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>معادلات العائد</h3>
    <p>في هذا الجزء نتعلم كيفية حساب العائد البسيط والمركب، ومقارنة الأداء بين الاستثمارات المختلفة.</p>
</div>

<h2><i class=\"fas fa-calculator me-2\"></i>العائد البسيط</h2>
<p>العائد البسيط هو أبسط طريقة لحساب العائد على الاستثمار.</p>

<div class=\"formula-box\">
    <h4><i class=\"fas fa-code me-2\"></i>معادلة العائد البسيط</h4>
    <p><strong>العائد البسيط = (القيمة النهائية - القيمة الأولية) / القيمة الأولية × 100%</strong></p>
</div>

<h2><i class=\"fas fa-chart-line me-2\"></i>العائد المركب</h2>
<p>العائد المركب يعتبر أكثر دقة لأنه يأخذ في الاعتبار إعادة استثمار الأرباح.</p>

<div class=\"info-box\">
    <h4><i class=\"fas fa-info-circle me-2\"></i>مثال على العائد المركب</h4>
    <p>إذا استثمرت 1,000 دولار بمعدل 10% سنوياً لمدة 3 سنوات، ستصبح القيمة 1,331 دولار.</p>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>