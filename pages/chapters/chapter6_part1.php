<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل السادس: العملات الأجنبية - الجزء الأول: أساسيات تداول العملات - ' . SITE_NAME;
$page_description = 'الفصل السادس الجزء الأول: أساسيات تداول العملات - مقدمة في سوق العملات الأجنبية';
$page_keywords = 'العملات الأجنبية, تداول العملات, سوق الفوركس';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter6_part1.php');
$chapter_title = 'الفصل السادس: العملات الأجنبية - الجزء الأول: أساسيات تداول العملات';
$current_page = 'chapter6_part1';

// Navigation links
$prev_chapter = get_chapter_url('chapter5_part3.php');
$next_chapter = get_chapter_url('chapter6_part2.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class=\"highlight-box\">
    <h3><i class=\"fas fa-star me-2\"></i>العملات الأجنبية</h3>
    <p>في هذا الجزء نتعلم أساسيات تداول العملات وأزواج العملات والعوامل المؤثرة عليها.</p>
</div>

<h2><i class=\"fas fa-globe me-2\"></i>أساسيات تداول العملات</h2>
<p>تداول العملات هو شراء وبيع العملات الأجنبية بهدف الربح من تغيرات أسعار الصرف.</p>

<div class=\"info-box\">
    <h4><i class=\"fas fa-info-circle me-2\"></i>أزواج العملات الرئيسية</h4>
    <ul>
        <li>EUR/USD (اليورو/الدولار الأمريكي)</li>
        <li>GBP/USD (الجنيه الإسترليني/الدولار الأمريكي)</li>
        <li>USD/JPY (الدولار الأمريكي/الين الياباني)</li>
        <li>USD/CHF (الدولار الأمريكي/الفرنك السويسري)</li>
    </ul>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>