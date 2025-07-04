<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الأول - الجزء الثالث: مخاطر الاستثمار في الأسهم - ' . SITE_NAME;
$page_description = 'الفصل الأول الجزء الثالث: مخاطر الاستثمار في الأسهم - مخاطر الاستثمار عبر الإنترنت، طرق الاحتيال والاحتياطات، الأمان في التداول الإلكتروني';
$page_keywords = 'مخاطر الاستثمار في الأسهم, مخاطر التداول عبر الإنترنت, الاحتيال في التداول, الأمان في التداول الإلكتروني';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter1_part3.php');
$chapter_title = 'الفصل الأول: الاستثمار في الأسهم - الجزء الثالث: مخاطر الاستثمار في الأسهم';
$current_page = 'chapter1_part3';

// Navigation links
$prev_chapter = get_chapter_url('chapter1_part2.php');
$next_chapter = get_chapter_url('chapter1_part4.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#general-risks">المخاطر العامة للاستثمار في الأسهم</a></li>
    <li><a href="#management-risks">مخاطر إدارة الشركات</a></li>
    <li><a href="#enron-example">مثال على التلاعب المحاسبي: شركة إنرون</a></li>
    <li><a href="#online-risks">مخاطر الاستثمار عبر الإنترنت</a></li>
    <li><a href="#price-risks">مخاطر الأسعار الخاطئة</a></li>
    <li><a href="#scam-risks">مخاطر العروض المغرية</a></li>
    <li><a href="#fraud-methods">طرق الاحتيال على الإنترنت</a></li>
    <li><a href="#security">الأمان في التداول الإلكتروني</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<div class="highlight-box">
    <h3><i class="fas fa-exclamation-circle me-2"></i>مخاطر الاستثمار في الأسهم</h3>
    <p>في هذا الجزء نستكشف المخاطر المختلفة المرتبطة بالاستثمار في الأسهم، سواء المخاطر العامة أو المخاطر الخاصة بالاستثمار عبر الإنترنت، مع التركيز على طرق الحماية والاحتياطات المطلوبة.</p>
</div>

<div id="general-risks" class="mb-4">
    <h2><i class="fas fa-shield-alt me-2"></i>المخاطر العامة للاستثمار في الأسهم</h2>
    <p>بلا شك إن الاستثمار في الأسهم له مخاطر كثيرة. منها ما تحتمه طبيعة الاستثمار التجاري بجميع أشكاله، نتيجة وجود عنصر المخاطرة متى ما أقدم الشخص على الاستثمار في تجارة معينة؛ ومنها ما هو خاص بالأسهم ذاتها.</p>
    
    <div class="warning-box">
        <h4><i class="fas fa-chart-line me-2"></i>طبيعة الأسواق المالية</h4>
        <p>ومن المعروف أن تداول الأسهم بشكل عام يعتبر أكثر خطراً من بعض سبل الاستثمار الأخرى كونه يمر بمراحل صعود وهبوط من الصعب التنبؤ بها. كما إن الاستثمار في الأسهم يتطلب من المستثمر الثقة في قدرة غيره على التصرف برأس ماله!</p>
    </div>
</div>

<div id="management-risks" class="mb-4">
    <h2><i class="fas fa-users me-2"></i>مخاطر إدارة الشركات</h2>
    <p>فعند شرائك لأسهم شركة ما فأنت في واقع الأمر تضع ثقتك في إدارة هذه الشركة على أنها سوف تتصرف بأحسن الطرق لتحقق العائد المالي الذي تطمح به. وإن كنت تستثمر عن طريق وسيط متخصص فأنت تثق في قدرة ذلك الوسيط على حسن التصرف وعلى توفر المعرفة الكافية لديه.</p>
    
    <div class="danger-box">
        <h4><i class="fas fa-exclamation-triangle me-2"></i>مخاطر سوء الإدارة</h4>
        <p>هذه التوقعات قد لا تكون دائماً في محلها، فليست كل إدارات الشركات ناجحة أو حتى نزيهة، بل إنه نظراً لطبيعة الشركات المساهمة، والتي تخلي مسؤولية إدارتها من عواقب سوء الإدارة، فقد لا يكون لدى إدارة الشركة الدافع القوي لحسن التصرف بما لديها من أموال.</p>
    </div>
    
    <div class="risks-grid">
        <div class="risk-card">
            <h4><i class="fas fa-project-diagram me-2"></i>مخاطر المشاريع</h4>
            <ul>
                <li>إقحام الشركة في مشاريع غير واقعية</li>
                <li>عدم تناسب المشاريع مع طبيعة الشركة</li>
                <li>فشل المشاريع الجديدة</li>
                <li>خسارة رأس المال المستثمر</li>
            </ul>
        </div>
        
        <div class="risk-card">
            <h4><i class="fas fa-chart-pie me-2"></i>مخاطر الإدارة المالية</h4>
            <ul>
                <li>عدم التحكم الجيد في المصروفات</li>
                <li>سوء إدارة التدفقات النقدية</li>
                <li>الديون المفرطة</li>
                <li>الإفلاس المحتمل</li>
            </ul>
        </div>
        
        <div class="risk-card">
            <h4><i class="fas fa-file-alt me-2"></i>مخاطر التقارير المالية</h4>
            <ul>
                <li>تقارير مالية خاطئة</li>
                <li>تقارير كاذبة عن مكانة الشركة</li>
                <li>إخفاء الخسائر الحقيقية</li>
                <li>التلاعب المحاسبي</li>
            </ul>
        </div>
    </div>
</div>

<div id="enron-example" class="mb-4">
    <h2><i class="fas fa-building me-2"></i>مثال على التلاعب المحاسبي: شركة إنرون</h2>
    <p>ويعتبر ما حدث لشركة إنرون (Enron) والتلاعب المحاسبي الذي قامت به الشركة واحداً من أكبر حالات الإفلاس في تاريخ الولايات المتحدة.</p>
    
    <div class="info-box">
        <h4><i class="fas fa-history me-2"></i>قصة شركة إنرون</h4>
        <p>كانت إنرون واحدة من أكبر شركات الطاقة في الولايات المتحدة، لكنها انهارت في عام 2001 بسبب التلاعب المحاسبي والاحتيال المالي. فقد قامت الإدارة بإخفاء الديون وإظهار أرباح وهمية، مما أدى إلى خسارة المستثمرين مليارات الدولارات.</p>
    </div>
</div>

<div id="online-risks" class="mb-4">
    <h2><i class="fas fa-network-wired me-2"></i>مخاطر الاستثمار عبر الإنترنت</h2>
    <p>هناك بعض المخاطر المصاحبة للاستثمار عبر الإنترنت، علاوة على مخاطر الاستثمار بشكل عام وهي تأتي نتيجة اعتماد المستثمر على تقنية جديدة لا تخلو من مشاكلها الخاصة بها.</p>
    
    <div class="risks-grid">
        <div class="risk-card">
            <h4><i class="fas fa-user-tie me-2"></i>مخاطر اختيار الوسيط</h4>
            <ul>
                <li>كثرة الوسطاء الإلكترونيين</li>
                <li>صعوبة اختيار الوسيط المناسب</li>
                <li>عدم كفاية الرقابة الحكومية</li>
                <li>احتمال استغلال العملاء</li>
            </ul>
        </div>
        
        <div class="risk-card">
            <h4><i class="fas fa-wifi me-2"></i>مخاطر التقنية</h4>
            <ul>
                <li>انقطاع خطوط الاتصال</li>
                <li>خلل في أجهزة الوسيط</li>
                <li>عدم توفر الإنترنت</li>
                <li>الحاجة لوسائل بديلة</li>
            </ul>
        </div>
        
        <div class="risk-card">
            <h4><i class="fas fa-keyboard me-2"></i>مخاطر الأخطاء البشرية</h4>
            <ul>
                <li>إدخال أوامر خاطئة</li>
                <li>أخطاء في الكميات</li>
                <li>أخطاء في نوع الأمر (شراء/بيع)</li>
                <li>عدم تحمل الوسيط المسؤولية</li>
            </ul>
        </div>
    </div>
</div>

<div id="price-risks" class="mb-4">
    <h2><i class="fas fa-chart-line me-2"></i>مخاطر الأسعار الخاطئة</h2>
    <p>قد يحدث أحياناً أن يكون هناك خلل في الأسعار المعروضة (لسبب أو آخر وهي نادرة بأي حال من الأحوال)؛ فيتخذ الشخص قراره بناء على أسعار خاطئة، أو غير فورية. ولو أن هذا الخطأ حدث عن طريق الوسيط وجهاً لوجه أو من خلال الهاتف لتحمل الوسيط الخطأ.</p>
</div>

<div id="scam-risks" class="mb-4">
    <h2><i class="fas fa-hand-holding-usd me-2"></i>مخاطر العروض المغرية</h2>
    <p>هناك العديد من العروض المغرية للدخول في استثمارات معينة ممن يدّعي أصحابها إمكانية الحصول على عوائد غير معقولة؛ والتي يجب على المستثمر تجنبها.</p>
    
    <div class="warning-box">
        <h4><i class="fas fa-exclamation-circle me-2"></i>قاعدة مهمة</h4>
        <p>ويجب بشكل عام تجنب العروض التي تدّعي عدم وجود أي نوع من المخاطرة، حيث لا يوجد أي استثمار خال من المخاطرة. ويجب عدم الاندفاع واتخاذ قرار الاستثمار بشكل سريع مهما كان الأمر وهو عادة ما يسعى إليه محتالو الإنترنت.</p>
    </div>
</div>

<div id="fraud-methods" class="mb-4">
    <h2><i class="fas fa-user-secret me-2"></i>طرق الاحتيال على الإنترنت</h2>
    <p>هناك طرق كثيرة للاحتيال. منها ما يعرف بالطرق الهرمية (Pyramid Schemes) والتي تعتمد على تعاون عدد كبير من الناس في بث معلومة ما أو جمع مبلغ معين.</p>
    
    <div class="danger-box">
        <h4><i class="fas fa-bullhorn me-2"></i>طريقة "Pump and Dump"</h4>
        <p>ومنها كذلك طرق تعتمد على الإشهار بأسهم معينة لاستقطاب عدد كبير من المستثمرين. الأمر الذي يؤدي إلى ارتفاع سعر السهم؛ وبالتالي قيام من قام بالإشهار ببيع ما لديه من أسهم. تعرف هذه الطريقة بطريقة "Pump and Dump".</p>
    </div>
</div>

<div id="security" class="mb-4">
    <h2><i class="fas fa-lock me-2"></i>الأمان في التداول الإلكتروني</h2>
    <p>يجب التأكد من أن الاتصال بالوسيط يتم عن طريق آمن، وذلك بواسطة استخدام متصفح لديه القدرة على الاتصال الآمن. كذلك التأكد من أن الوسيط يقدم خدمة آمنة.</p>
    
    <div class="info-box">
        <h4><i class="fas fa-shield-alt me-2"></i>معايير الأمان المطلوبة</h4>
        <ul>
            <li>استخدام HTTPS بدلاً من HTTP</li>
            <li>تشفير 128 بت أو أكثر</li>
            <li>شهادات أمان موثوقة</li>
            <li>عدم إرسال بيانات الحساب عبر البريد الإلكتروني</li>
            <li>استخدام كلمات مرور قوية</li>
            <li>تفعيل المصادقة الثنائية</li>
        </ul>
    </div>
    
    <div class="highlight-box">
        <h3><i class="fas fa-lightbulb me-2"></i>نصيحة مهمة</h3>
        <p>يجب عدم إرسال رقم الحساب للوسيط عن طريق البريد الإلكتروني على الإطلاق. حيث بإمكان أي شخص أن يقرأ الرسالة ويعرف رقم الحساب. استخدم دائماً القنوات الآمنة للتواصل مع الوسيط.</p>
    </div>
</div>';

// Include template
include get_template_path('chapter_template.php');
?>