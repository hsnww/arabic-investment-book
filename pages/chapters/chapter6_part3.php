<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل السادس: العملات الأجنبية - الجزء الثالث: استراتيجيات تداول العملات - ' . SITE_NAME;
$page_description = 'الفصل السادس الجزء الثالث: استراتيجيات تداول العملات - استراتيجيات التداول في سوق العملات';
$page_keywords = 'استراتيجيات تداول العملات, إدارة المخاطر, التحليل الفني';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter6_part3.php');
$chapter_title = 'الفصل السادس: العملات الأجنبية - الجزء الثالث: استراتيجيات تداول العملات';
$current_page = 'chapter6_part3';

// Navigation links
$prev_chapter = get_chapter_url('chapter6_part2.php');
$next_chapter = get_chapter_url('chapter7_part1.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>استراتيجيات تداول العملات</h3>
    <p>في هذا الجزء نتعلم استراتيجيات التداول وإدارة المخاطر في سوق العملات.</p>
</div>

<h2><i class=\"fas fa-chess me-2\"></i>استراتيجيات التداول</h2>
<p>هناك عدة استراتيجيات يمكن استخدامها في تداول العملات.</p>

<div class=\"info-box\">
    <h4><i class=\"fas fa-list me-2\"></i>الاستراتيجيات الرئيسية</h4>
    <ul>
        <li>التداول اليومي</li>
        <li>التداول المتأرجح</li>
        <li>التداول الموضعي</li>
        <li>التداول الآلي</li>
    </ul>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>