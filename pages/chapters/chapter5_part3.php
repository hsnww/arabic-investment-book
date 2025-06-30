<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الخامس: السندات - الجزء الثالث: استراتيجيات الاستثمار في السندات - ' . SITE_NAME;
$page_description = 'الفصل الخامس الجزء الثالث: استراتيجيات الاستثمار في السندات - طرق الاستثمار في السندات';
$page_keywords = 'استراتيجيات السندات, محفظة السندات, إدارة المخاطر';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter5_part3.php');
$chapter_title = 'الفصل الخامس: السندات - الجزء الثالث: استراتيجيات الاستثمار في السندات';
$current_page = 'chapter5_part3';

// Navigation links
$prev_chapter = get_chapter_url('chapter5_part2.php');
$next_chapter = get_chapter_url('chapter6_part1.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>استراتيجيات الاستثمار في السندات</h3>
    <p>في هذا الجزء نتعلم استراتيجيات الشراء والبيع وإدارة المخاطر في السندات.</p>
</div>

<h2><i class=\"fas fa-chess me-2\"></i>استراتيجيات التداول</h2>
<p>هناك عدة استراتيجيات يمكن استخدامها في تداول السندات.</p>

<div class=\"info-box\">
    <h4><i class=\"fas fa-list me-2\"></i>الاستراتيجيات الرئيسية</h4>
    <ul>
        <li>شراء وحفظ</li>
        <li>التداول النشط</li>
        <li>سلم السندات</li>
        <li>قبة السندات</li>
    </ul>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>