<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الثاني: معادلات العائد وقياس الأداء - ' . SITE_NAME;
$page_description = 'الفصل الثالث الجزء الثاني: معادلات العائد وقياس الأداء والعائد المعقول - حساب العائد على الاستثمارات المختلفة وتقييم الأداء';
$page_keywords = 'معادلات العائد, حساب العائد, معدل العائد, الربحية, قياس الأداء, مؤشرات الأداء, العائد المعقول';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter3_part2.php');
$chapter_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الثاني: معادلات العائد وقياس الأداء';
$current_page = 'chapter3_part2';

// Navigation links
$prev_chapter = get_chapter_url('chapter3_part1.php');
$next_chapter = get_chapter_url('chapter4_part1.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class="highlight-box">
    <h3><i class="fas fa-star me-2"></i>معادلات العائد</h3>
    <p>في هذا الجزء نتعلم كيفية حساب العائد البسيط والمركب، ومقارنة الأداء بين الاستثمارات المختلفة.</p>
</div>

<h2><i class="fas fa-calculator me-2"></i>العائد البسيط</h2>
<p>العائد البسيط هو أبسط طريقة لحساب العائد على الاستثمار.</p>

<div class="formula-box">
    <h4><i class="fas fa-code me-2"></i>معادلة العائد البسيط</h4>
    <p><strong>العائد البسيط = (القيمة النهائية - القيمة الأولية) / القيمة الأولية × 100%</strong></p>
</div>

<h2><i class="fas fa-chart-line me-2"></i>العائد المركب</h2>
<p>العائد المركب يعتبر أكثر دقة لأنه يأخذ في الاعتبار إعادة استثمار الأرباح.</p>

<div class="info-box">
    <h4><i class="fas fa-info-circle me-2"></i>مثال على العائد المركب</h4>
    <p>إذا استثمرت 1,000 دولار بمعدل 10% سنوياً لمدة 3 سنوات، ستصبح القيمة 1,331 دولار.</p>
</div>

<h2><i class="fas fa-chart-bar me-2"></i>قياس الأداء</h2>
<p>في هذا الجزء نتعلم كيفية قياس أداء الاستثمارات ومقارنتها بمعايير السوق.</p>

<div class="info-box">
    <h4><i class="fas fa-list me-2"></i>المؤشرات الرئيسية</h4>
    <ul>
        <li>العائد السنوي</li>
        <li>مخاطر الاستثمار</li>
        <li>نسبة شارب</li>
        <li>الحد الأقصى للخسارة</li>
    </ul>
</div>

<h2><i class="fas fa-target me-2"></i>العائد المعقول</h2>
<p>في هذا الجزء نتعلم كيفية تحديد العائد المناسب وإدارة التوقعات.</p>

<div class="stats-section">
    <h3><i class="fas fa-chart-line me-2"></i>معدلات العائد المتوقعة</h3>
    <div class="stats-grid">
        <div class="stat-item">
            <span class="stat-number">3-5%</span>
            <span class="stat-label">الحسابات البنكية</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">8-12%</span>
            <span class="stat-label">الأسهم</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">4-6%</span>
            <span class="stat-label">السندات</span>
        </div>
    </div>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>