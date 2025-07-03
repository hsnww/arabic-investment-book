<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الباب السادس: الأسهم السعودية - الجزء الثالث: أسباب صعود السوق السعودي - ' . SITE_NAME;
$page_description = 'الباب السادس الجزء الثالث: أسباب صعود السوق السعودي - العوامل التي ساهمت في النمو القوي للسوق';
$page_keywords = 'صعود السوق السعودي, أسباب النمو, رؤية 2030, الاستثمارات الأجنبية, التطوير الاقتصادي';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter20_part3.php');
$chapter_title = 'الباب السادس: الأسهم السعودية - الجزء الثالث: أسباب صعود السوق السعودي';
$current_page = 'chapter20_part3';

// Navigation links
$prev_chapter = get_chapter_url('chapter20_part2.php');
$next_chapter = get_chapter_url('chapter20_part4.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<h2><i class="fas fa-rocket me-2"></i>أسباب صعود السوق السعودي</h2>
<p>شهد السوق السعودي صعوداً قوياً ومستمراً في السنوات الأخيرة، ويمكن إرجاع هذا الصعود إلى عدة عوامل أساسية:</p>

<div class="highlight-box">
    <h3><i class="fas fa-star me-2"></i>العوامل الرئيسية للصعود</h3>
    <p>هناك مجموعة من العوامل الاقتصادية والسياسية والتقنية التي ساهمت في هذا التطور الإيجابي للسوق السعودي.</p>
</div>

<h2><i class="fas fa-eye me-2"></i>رؤية 2030 وتأثيرها على السوق</h2>
<p>تعد رؤية 2030 من أهم العوامل التي ساهمت في تحسين معنويات المستثمرين وتوجيه الاستثمارات نحو السوق السعودي:</p>

<div class="info-box">
    <h4><i class="fas fa-target me-2"></i>أهداف رؤية 2030</h4>
    <div class="row">
        <div class="col-md-4">
            <h5 class="text-primary"><i class="fas fa-industry me-2"></i>التنويع الاقتصادي</h5>
            <p>تقليل الاعتماد على النفط وتطوير قطاعات اقتصادية جديدة.</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-success"><i class="fas fa-chart-line me-2"></i>تطوير السوق المالي</h5>
            <p>جعل السوق السعودي من أكبر الأسواق المالية في العالم.</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-warning"><i class="fas fa-globe me-2"></i>جذب الاستثمارات</h5>
            <p>فتح السوق للمستثمرين الأجانب وزيادة الشفافية.</p>
        </div>
    </div>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> حققت رؤية 2030 نجاحات كبيرة في تطوير البنية التحتية وجذب الاستثمارات الأجنبية، مما انعكس إيجاباً على أداء السوق المالي.</p>
</div>

<h2><i class="fas fa-dollar-sign me-2"></i>ارتفاع أسعار النفط</h2>
<p>يعد ارتفاع أسعار النفط من أهم العوامل التي ساهمت في صعود السوق السعودي:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>آلية التأثير</h4>
    <ul>
        <li><strong>زيادة الإيرادات الحكومية:</strong> ارتفاع أسعار النفط يعني زيادة في إيرادات الدولة</li>
        <li><strong>زيادة الإنفاق الحكومي:</strong> المزيد من المشاريع والاستثمارات الحكومية</li>
        <li><strong>تحسن معنويات المستثمرين:</strong> ثقة أكبر في الاقتصاد السعودي</li>
        <li><strong>زيادة السيولة:</strong> المزيد من الأموال المتاحة للاستثمار</li>
    </ul>
</div>

<div class="stats-section">
    <h3><i class="fas fa-chart-line me-2"></i>تطور أسعار النفط</h3>
    <div class="stats-grid">
        <div class="stat-item">
            <span class="stat-number">$80+</span>
            <span class="stat-label">سعر البرميل 2024</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">$100+</span>
            <span class="stat-label">أعلى سعر 2022</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">$20</span>
            <span class="stat-label">أدنى سعر 2020</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">10M+</span>
            <span class="stat-label">الإنتاج اليومي</span>
        </div>
    </div>
</div>

<h2><i class="fas fa-globe me-2"></i>فتح السوق للمستثمرين الأجانب</h2>
<p>كان فتح السوق السعودي للمستثمرين الأجانب المؤهلين من أهم العوامل التي ساهمت في تطوير السوق:</p>

<div class="info-box">
    <h4><i class="fas fa-users me-2"></i>مزايا فتح السوق</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-plus me-2"></i>الفوائد</h5>
            <ul>
                <li>زيادة السيولة في السوق</li>
                <li>تحسين الشفافية والحوكمة</li>
                <li>زيادة الاهتمام الدولي بالسوق</li>
                <li>تحسين تقنيات التداول</li>
                <li>زيادة التنافسية</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-warning"><i class="fas fa-exclamation-triangle me-2"></i>التحديات</h5>
            <ul>
                <li>زيادة التقلبات في السوق</li>
                <li>تأثر السوق بالعوامل الخارجية</li>
                <li>زيادة المنافسة للمستثمرين المحليين</li>
                <li>الحاجة لتحسين الإفصاح</li>
            </ul>
        </div>
    </div>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> وصلت نسبة ملكية المستثمرين الأجانب في السوق السعودي إلى أكثر من 10% من القيمة السوقية الإجمالية، مما يعكس الثقة الدولية المتزايدة في السوق السعودي.</p>
</div>

<h2><i class="fas fa-cogs me-2"></i>التطوير التقني والتنظيمي</h2>
<p>ساهمت التحسينات التقنية والتنظيمية في جعل السوق السعودي أكثر جاذبية:</p>

<div class="info-box">
    <h4><i class="fas fa-laptop me-2"></i>التحسينات التقنية</h4>
    <ul>
        <li><strong>منصة تداول متطورة:</strong> نظام إلكتروني متقدم للتداول</li>
        <li><strong>تطبيق الهاتف المحمول:</strong> إمكانية التداول من أي مكان</li>
        <li><strong>تحسين سرعة المعاملات:</strong> تنفيذ الصفقات خلال ثوان</li>
        <li><strong>زيادة الشفافية:</strong> معلومات فورية ودقيقة</li>
        <li><strong>تحسين الأمان:</strong> حماية متقدمة للمعاملات</li>
    </ul>
</div>

<div class="info-box">
    <h4><i class="fas fa-shield-alt me-2"></i>التحسينات التنظيمية</h4>
    <ul>
        <li><strong>تحسين الإفصاح:</strong> متطلبات أكثر صرامة للإفصاح</li>
        <li><strong>حماية المستثمرين:</strong> قوانين وتشريعات محسنة</li>
        <li><strong>تحسين الحوكمة:</strong> معايير أعلى لحوكمة الشركات</li>
        <li><strong>زيادة الشفافية:</strong> معلومات أكثر وضوحاً</li>
    </ul>
</div>

<h2><i class="fas fa-building me-2"></i>تطوير الشركات المدرجة</h2>
<p>ساهمت التحسينات في أداء الشركات المدرجة في صعود السوق:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-line me-2"></i>تحسينات أداء الشركات</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-primary"><i class="fas fa-arrow-up me-2"></i>التحسينات المالية</h5>
            <ul>
                <li>زيادة الأرباح</li>
                <li>تحسين الإيرادات</li>
                <li>زيادة الكفاءة التشغيلية</li>
                <li>تحسين الهيكل المالي</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-cog me-2"></i>التحسينات التشغيلية</h5>
            <ul>
                <li>تحسين الإدارة</li>
                <li>زيادة الشفافية</li>
                <li>تحسين الحوكمة</li>
                <li>زيادة الابتكار</li>
            </ul>
        </div>
    </div>
</div>

<h2><i class="fas fa-chart-pie me-2"></i>تنويع القطاعات</h2>
<p>ساهم تنويع القطاعات في السوق السعودي في تقليل المخاطر وزيادة الجاذبية:</p>

<div class="stats-section">
    <h3><i class="fas fa-chart-bar me-2"></i>توزيع القطاعات في السوق السعودي</h3>
    <div class="stats-grid">
        <div class="stat-item">
            <span class="stat-number">25%</span>
            <span class="stat-label">البنوك</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">20%</span>
            <span class="stat-label">المواد الأساسية</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">15%</span>
            <span class="stat-label">الطاقة</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">40%</span>
            <span class="stat-label">قطاعات أخرى</span>
        </div>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-list me-2"></i>القطاعات الجديدة</h4>
    <ul>
        <li><strong>التكنولوجيا:</strong> شركات التقنية والاتصالات</li>
        <li><strong>الرعاية الصحية:</strong> المستشفيات والخدمات الطبية</li>
        <li><strong>التجزئة:</strong> مراكز التسوق والبيع بالتجزئة</li>
        <li><strong>الخدمات المالية:</strong> شركات التأمين والتمويل</li>
        <li><strong>الطاقة المتجددة:</strong> الطاقة الشمسية والطاقة الخضراء</li>
    </ul>
</div>

<h2><i class="fas fa-users me-2"></i>زيادة عدد المستثمرين</h2>
<p>ساهمت زيادة عدد المستثمرين في السوق في زيادة السيولة والاهتمام:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-area me-2"></i>تطور عدد المستثمرين</h4>
    <ul>
        <li><strong>2000:</strong> أقل من 100 ألف مستثمر</li>
        <li><strong>2010:</strong> حوالي 500 ألف مستثمر</li>
        <li><strong>2020:</strong> أكثر من 800 ألف مستثمر</li>
        <li><strong>2024:</strong> أكثر من مليون مستثمر</li>
    </ul>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> زاد عدد المستثمرين الأجانب بشكل ملحوظ، حيث وصل عدد المستثمرين الأجانب المؤهلين إلى أكثر من 50 ألف مستثمر.</p>
</div>

<h2><i class="fas fa-lightbulb me-2"></i>الخلاصة</h2>
<p>صعود السوق السعودي في السنوات الأخيرة كان نتيجة لمجموعة من العوامل المتكاملة: رؤية 2030، ارتفاع أسعار النفط، فتح السوق للمستثمرين الأجانب، التطوير التقني والتنظيمي، تحسين أداء الشركات، تنويع القطاعات، وزيادة عدد المستثمرين.</p>

<div class="highlight-box">
    <h3><i class="fas fa-arrow-right me-2"></i>في الجزء التالي</h3>
    <p>سنتعرف على التحليل الفني للسوق السعودي، وكيفية تطبيق أدوات التحليل الفني على الأسهم السعودية.</p>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?> 