<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الباب السادس: الأسهم السعودية - الجزء الثاني: الاقتصاد السعودي وأداء السوق - ' . SITE_NAME;
$page_description = 'الباب السادس الجزء الثاني: الاقتصاد السعودي وأداء السوق - المؤشرات الاقتصادية وتأثيرها على الأسهم السعودية';
$page_keywords = 'الاقتصاد السعودي, المؤشر العام, سعر البترول, الناتج المحلي, التضخم, البطالة';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter20_part2.php');
$chapter_title = 'الباب السادس: الأسهم السعودية - الجزء الثاني: الاقتصاد السعودي وأداء السوق';
$current_page = 'chapter20_part2';

// Navigation links
$prev_chapter = get_chapter_url('chapter20_part1.php');
$next_chapter = get_chapter_url('chapter20_part3.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<h2><i class="fas fa-chart-line me-2"></i>أداء السوق السعودي التاريخي</h2>
<p>شهد السوق السعودي تطوراً كبيراً في السنوات الأخيرة، حيث ارتفع المؤشر العام من مستويات متدنية في بداية الألفية إلى مستويات قياسية. دعنا نستعرض هذا التطور:</p>

<div class="timeline-section">
    <h3><i class="fas fa-history me-2"></i>التطور التاريخي للمؤشر العام</h3>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <h4>2000-2005</h4>
                <p>كان المؤشر العام يتداول حول مستوى 4000 نقطة، مع تقلبات محدودة نسبياً.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <h4>2006-2008</h4>
                <p>شهد السوق صعوداً قوياً ليصل إلى مستوى 21000 نقطة في فبراير 2006، ثم تراجع حاد.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <h4>2009-2014</h4>
                <p>فترة استقرار نسبي مع تداول المؤشر حول مستوى 7000-8000 نقطة.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <h4>2015-2020</h4>
                <p>تأثر السوق بانخفاض أسعار النفط، لكنه استعاد عافيته تدريجياً.</p>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <h4>2021-2024</h4>
                <p>صعود قوي ومستمر ليصل المؤشر إلى مستويات قياسية جديدة.</p>
            </div>
        </div>
    </div>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> وصل المؤشر العام للسوق السعودي إلى مستوى 12000 نقطة في نهاية 2023، محققاً نمواً بنسبة 14% خلال العام.</p>
</div>

<h2><i class="fas fa-oil-can me-2"></i>علاقة سعر البترول بالأسهم السعودية</h2>
<p>يعد سعر البترول من أهم العوامل المؤثرة على الاقتصاد السعودي وبالتالي على أداء السوق المالي. هذه العلاقة تتجلى في عدة جوانب:</p>

<div class="info-box">
    <h4><i class="fas fa-link me-2"></i>آلية التأثير</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-primary"><i class="fas fa-arrow-up me-2"></i>ارتفاع سعر البترول</h5>
            <ul>
                <li>زيادة الإيرادات الحكومية</li>
                <li>زيادة الإنفاق الحكومي</li>
                <li>تحسن معنويات المستثمرين</li>
                <li>زيادة السيولة في السوق</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-danger"><i class="fas fa-arrow-down me-2"></i>انخفاض سعر البترول</h5>
            <ul>
                <li>تراجع الإيرادات الحكومية</li>
                <li>تقليل الإنفاق الحكومي</li>
                <li>تراجع معنويات المستثمرين</li>
                <li>انخفاض السيولة في السوق</li>
            </ul>
        </div>
    </div>
</div>

<div class="warning-box">
    <h4><i class="fas fa-exclamation-triangle me-2"></i>ملاحظة مهمة</h4>
    <p>رغم أن سعر البترول يؤثر على السوق السعودي، إلا أن هذا التأثير ليس مباشراً أو فورياً. فالسوق السعودي أصبح أكثر تنوعاً وتطوراً، وأصبحت هناك عوامل أخرى تؤثر على أدائه.</p>
</div>

<h2><i class="fas fa-calculator me-2"></i>كيف يحسب المؤشر العام؟</h2>
<p>المؤشر العام للسوق السعودي هو مؤشر مرجح بالقيمة السوقية، مما يعني أن الشركات الأكبر حجماً لها تأثير أكبر على حركة المؤشر.</p>

<div class="formula-box">
    <h4><i class="fas fa-calculator me-2"></i>معادلة حساب المؤشر</h4>
    <div class="formula">
        <p><strong>المؤشر العام =</strong></p>
        <p>Σ (سعر السهم × عدد الأسهم المتداولة × معامل الترجيح) ÷ القيمة الأساسية × 1000</p>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-info-circle me-2"></i>مكونات المعادلة</h4>
    <ul>
        <li><strong>سعر السهم:</strong> آخر سعر تداول للسهم</li>
        <li><strong>عدد الأسهم المتداولة:</strong> عدد الأسهم المتاحة للتداول</li>
        <li><strong>معامل الترجيح:</strong> نسبة ملكية المستثمرين الأجانب (إذا كان مسموحاً)</li>
        <li><strong>القيمة الأساسية:</strong> قيمة مرجعية ثابتة</li>
    </ul>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> تم إطلاق مؤشرات جديدة مثل "تداول 30" و "تداول 100" لتوفير مؤشرات أكثر دقة لقطاعات محددة من السوق.</p>
</div>

<h2><i class="fas fa-chart-bar me-2"></i>المؤشرات الاقتصادية المؤثرة</h2>
<p>هناك عدة مؤشرات اقتصادية تؤثر على أداء السوق السعودي:</p>

<div class="stats-section">
    <h3><i class="fas fa-chart-line me-2"></i>المؤشرات الرئيسية</h3>
    <div class="stats-grid">
        <div class="stat-item">
            <span class="stat-number">$1.1T</span>
            <span class="stat-label">الناتج المحلي الإجمالي</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">2.5%</span>
            <span class="stat-label">معدل التضخم</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">5.8%</span>
            <span class="stat-label">معدل البطالة</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">$500B+</span>
            <span class="stat-label">احتياطيات النقد الأجنبي</span>
        </div>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-list me-2"></i>العوامل المؤثرة على السوق</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-plus me-2"></i>عوامل إيجابية</h5>
            <ul>
                <li>ارتفاع أسعار النفط</li>
                <li>زيادة الإنفاق الحكومي</li>
                <li>تحسن النمو الاقتصادي</li>
                <li>زيادة الاستثمارات الأجنبية</li>
                <li>تحسن معنويات المستثمرين</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-danger"><i class="fas fa-minus me-2"></i>عوامل سلبية</h5>
            <ul>
                <li>انخفاض أسعار النفط</li>
                <li>تقليل الإنفاق الحكومي</li>
                <li>تباطؤ النمو الاقتصادي</li>
                <li>عدم الاستقرار السياسي</li>
                <li>تراجع معنويات المستثمرين</li>
            </ul>
        </div>
    </div>
</div>

<h2><i class="fas fa-money-bill-wave me-2"></i>السيولة في السوق السعودي</h2>
<p>السيولة هي أحد أهم العوامل التي تحدد نجاح أي سوق مالي. السوق السعودي يتميز بمستوى سيولة جيد نسبياً:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-area me-2"></i>مؤشرات السيولة</h4>
    <ul>
        <li><strong>حجم التداول اليومي:</strong> يتجاوز 5 مليارات ريال في الأيام النشطة</li>
        <li><strong>عدد الصفقات:</strong> يتراوح بين 200-500 ألف صفقة يومياً</li>
        <li><strong>عدد المستثمرين النشطين:</strong> أكثر من مليون مستثمر</li>
        <li><strong>نسبة السيولة:</strong> حوالي 0.5% من القيمة السوقية الإجمالية</li>
    </ul>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> زادت السيولة في السوق السعودي بشكل ملحوظ مع دخول المستثمرين الأجانب المؤهلين، حيث وصل حجم التداول اليومي إلى أكثر من 8 مليارات ريال في بعض الأيام.</p>
</div>

<h2><i class="fas fa-users me-2"></i>فئات المستثمرين في السوق السعودي</h2>
<p>يمكن تقسيم المستثمرين في السوق السعودي إلى عدة فئات:</p>

<div class="info-box">
    <h4><i class="fas fa-user-friends me-2"></i>أنواع المستثمرين</h4>
    <div class="row">
        <div class="col-md-4">
            <h5 class="text-primary"><i class="fas fa-user me-2"></i>المستثمرون الأفراد</h5>
            <p>يمثلون النسبة الأكبر من المستثمرين، ويقومون بالتداول من خلال منصات التداول الإلكترونية.</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-success"><i class="fas fa-building me-2"></i>المؤسسات المالية</h5>
            <p>تشمل البنوك وشركات التأمين والصناديق الاستثمارية، وتمثل استثمارات طويلة المدى.</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-warning"><i class="fas fa-globe me-2"></i>المستثمرون الأجانب</h5>
            <p>دخلوا السوق بعد فتحه للمستثمرين الأجانب المؤهلين، ويركزون على الشركات الكبيرة.</p>
        </div>
    </div>
</div>

<h2><i class="fas fa-lightbulb me-2"></i>الخلاصة</h2>
<p>السوق السعودي يتأثر بشكل كبير بالاقتصاد المحلي وبخاصة سعر النفط، لكنه أصبح أكثر تنوعاً وتطوراً. المؤشر العام يعكس أداء السوق ككل، والسيولة جيدة نسبياً مما يجعل السوق جذاباً للمستثمرين.</p>

<div class="highlight-box">
    <h3><i class="fas fa-arrow-right me-2"></i>في الجزء التالي</h3>
    <p>سنتعرف على أسباب صعود السوق السعودي في السنوات الأخيرة، والعوامل التي ساهمت في هذا التطور الإيجابي.</p>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?> 