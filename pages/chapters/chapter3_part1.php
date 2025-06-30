<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الأول: القيمة الزمنية للمال - ' . SITE_NAME;
$page_description = 'الفصل الثالث الجزء الأول: القيمة الزمنية للمال - فهم القيمة الزمنية للنقود وحسابات الفائدة';
$page_keywords = 'القيمة الزمنية للمال, الفائدة, القيمة الحالية, القيمة المستقبلية';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter3_part1.php');
$chapter_title = 'الفصل الثالث: حساب الأداء الاستثماري - الجزء الأول: القيمة الزمنية للمال';
$current_page = 'chapter3_part1';

// Navigation links
$prev_chapter = get_chapter_url('chapter2.php');
$next_chapter = get_chapter_url('chapter3_part2.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class="highlight-box">
    <h3><i class="fas fa-star me-2"></i>مقدمة الفصل الثالث</h3>
    <p>يقدم هذا الفصل المفاهيم الحسابية الأساسية التي تستخدم في مجال التمويل المالي، والتي يعتمد عليها المحترفون لمقارنة أدائهم بأداء الآخرين. وسوف نحاول ألا يكون هذا الفصل ثقيلاً على القارئ بقدر الإمكان.</p>
</div>

<h2><i class="fas fa-question-circle me-2"></i>الأسئلة الأساسية التي يجيب عليها هذا الفصل</h2>
<div class="questions-box">
    <h3><i class="fas fa-list me-2"></i>الأسئلة الرئيسية</h3>
    <ul>
        <li>ما هي الطرق المناسبة لقياس أداء الشخص الاستثماري؟</li>
        <li>ما المقصود بالقيمة الزمنية لمبلغ من المال؟ وكيف نقوم بحساب نمو رأس المال حسب القيمة الزمنية؟</li>
        <li>كيف تقوم بحساب العائد على المحفظة الاستثمارية؟</li>
        <li>كم مقدار العائد المعقول للاستثمار؟</li>
    </ul>
</div>

<p class="lead">
    لن نتطرق لأي من الطرق الحسابية المعقدة. وسوف نخلص في نهاية كل طريقة حسابية إلى عرض معادلة بسيطة تفي بالمطلوب، وتمكن المستثمر من استخدامها بواسطة آلة حاسبة بسيطة.
</p>

<h2><i class="fas fa-clock me-2"></i>القيمة الزمنية للمال</h2>
<p>من أكبر الأخطاء التي يقع فيها عامة الناس عدم إدراك المقصود بالقيمة الزمنية للمال. فتجد البعض يحتفظ بجزء كبير من مدخراته بشكل نقدي، إما في حساب جار في البنك أو بشكل نقدي في منزله، غير مدرك أن الزمن يأكل من نقوده مثلما تأكل دودة الأرضة من صوف الحصيرة.</p>

<div class="info-box">
    <h4><i class="fas fa-exclamation-triangle me-2"></i>العاملان الرئيسيان المؤثران على النقود الراكدة</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-danger"><i class="fas fa-chart-line me-2"></i>التضخم</h5>
            <p>يقلل من القوة الشرائية للنقود مع مرور الوقت</p>
        </div>
        <div class="col-md-6">
            <h5 class="text-warning"><i class="fas fa-clock me-2"></i>الفرص الضائعة</h5>
            <p>عدم الاستفادة من فرص الاستثمار المتاحة</p>
        </div>
    </div>
</div>

<h2><i class="fas fa-calculator me-2"></i>مثال عملي على القيمة الزمنية للمال</h2>
<p>لنفترض أن لديك 10,000 دولار في حساب جار يدفع فائدة 2% سنوياً. بعد 10 سنوات، ستصبح قيمة المال حوالي 12,190 دولار. لكن إذا استثمرت نفس المبلغ في سوق الأسهم بمتوسط عائد 10% سنوياً، ستصبح القيمة حوالي 25,937 دولار.</p>

<div class="stats-section">
    <h3><i class="fas fa-chart-line me-2"></i>مقارنة العوائد</h3>
    <div class="stats-grid">
        <div class="stat-item">
            <span class="stat-number">$12,190</span>
            <span class="stat-label">بعد 10 سنوات (2% سنوياً)</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">$25,937</span>
            <span class="stat-label">بعد 10 سنوات (10% سنوياً)</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">$13,747</span>
            <span class="stat-label">الفرق في القيمة</span>
        </div>
        <div class="stat-item">
            <span class="stat-number">113%</span>
            <span class="stat-label">نسبة الفرق</span>
        </div>
    </div>
</div>

<h2><i class="fas fa-formula me-2"></i>معادلة القيمة المستقبلية</h2>
<p>القيمة المستقبلية = القيمة الحالية × (1 + معدل العائد)^عدد السنوات</p>

<div class="formula-box">
    <h4><i class="fas fa-code me-2"></i>المعادلة الرياضية</h4>
    <p><strong>FV = PV × (1 + r)^n</strong></p>
    <p>حيث:</p>
    <ul>
        <li>FV = القيمة المستقبلية (Future Value)</li>
        <li>PV = القيمة الحالية (Present Value)</li>
        <li>r = معدل العائد السنوي</li>
        <li>n = عدد السنوات</li>
    </ul>
</div>

<h2><i class="fas fa-chart-bar me-2"></i>أمثلة على القيمة الزمنية للمال</h2>
<div class="row">
    <div class="col-md-6">
        <div class="info-box">
            <h4><i class="fas fa-1 me-2"></i>مثال 1: الاستثمار المبكر</h4>
            <p>إذا استثمرت 1,000 دولار سنوياً من عمر 25 إلى 35 (10 سنوات فقط) بمعدل 8% سنوياً، ستصبح القيمة حوالي 1.5 مليون دولار عند التقاعد.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="info-box">
            <h4><i class="fas fa-2 me-2"></i>مثال 2: التأخير في الاستثمار</h4>
            <p>إذا بدأت الاستثمار من عمر 35 بدلاً من 25، ستحتاج لاستثمار 2,000 دولار سنوياً لمدة 30 سنة للحصول على نفس النتيجة.</p>
        </div>
    </div>
</div>

<div class="warning-box">
    <h4><i class="fas fa-exclamation-triangle me-2"></i>نصيحة مهمة</h4>
    <p>الوقت هو أهم عامل في الاستثمار. كلما بدأت مبكراً، كلما كانت النتائج أفضل. لا تؤجل الاستثمار إلى الغد، ابدأ اليوم!</p>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?>