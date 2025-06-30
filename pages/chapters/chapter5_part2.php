<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الخامس: السندات - الجزء الثاني: تقييم السندات - ' . SITE_NAME;
$page_description = 'الفصل الخامس الجزء الثاني: تقييم السندات - حساب قيمة السندات والعائد عليها';
$page_keywords = 'تقييم السندات, عائد السندات, قيمة السندات';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter5_part2.php');
$chapter_title = 'الفصل الخامس: السندات - الجزء الثاني: تقييم السندات';
$current_page = 'chapter5_part2';

// Navigation links
$prev_chapter = get_chapter_url('chapter5_part1.php');
$next_chapter = get_chapter_url('chapter5_part3.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>تقييم السندات</h3>
    <p>في هذا الجزء نتعلم كيفية تقييم السندات وحساب العائد عليها.</p>
</div>

<h2><i class=\"fas fa-calculator me-2\"></i>حساب عائد السند</h2>
<p>عائد السند يعتمد على سعر السوق والقيمة الاسمية ومعدل الفائدة.</p>

<div class=\"formula-box\">
    <h4><i class=\"fas fa-code me-2\"></i>معادلة العائد الحالي</h4>
    <p><strong>العائد الحالي = (الفائدة السنوية / سعر السوق) × 100%</strong></p>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>