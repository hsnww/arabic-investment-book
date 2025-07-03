<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الباب السادس: الأسهم السعودية - الجزء الرابع: التحليل الفني للسوق السعودي - ' . SITE_NAME;
$page_description = 'الباب السادس الجزء الرابع: التحليل الفني للسوق السعودي - تطبيق أدوات التحليل الفني على الأسهم السعودية';
$page_keywords = 'التحليل الفني, المؤشرات الفنية, الرسوم البيانية, الاتجاهات, الدعم والمقاومة';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter20_part4.php');
$chapter_title = 'الباب السادس: الأسهم السعودية - الجزء الرابع: التحليل الفني للسوق السعودي';
$current_page = 'chapter20_part4';

// Navigation links
$prev_chapter = get_chapter_url('chapter20_part3.php');
$next_chapter = get_chapter_url('chapter20_part5.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<h2><i class="fas fa-chart-line me-2"></i>التحليل الفني للسوق السعودي</h2>
<p>التحليل الفني هو دراسة حركة الأسعار والحجم بهدف التنبؤ بالاتجاهات المستقبلية. في السوق السعودي، يمكن تطبيق نفس مبادئ التحليل الفني المستخدمة في الأسواق العالمية.</p>

<div class="highlight-box">
    <h3><i class="fas fa-star me-2"></i>أساسيات التحليل الفني</h3>
    <p>يعتمد التحليل الفني على فكرة أن التاريخ يعيد نفسه، وأن أنماط الأسعار السابقة يمكن أن تساعد في التنبؤ بالحركات المستقبلية.</p>
</div>

<h2><i class="fas fa-chart-bar me-2"></i>أنواع الرسوم البيانية</h2>
<p>هناك عدة أنواع من الرسوم البيانية المستخدمة في التحليل الفني:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-area me-2"></i>الرسوم البيانية الأساسية</h4>
    <div class="row">
        <div class="col-md-4">
            <h5 class="text-primary"><i class="fas fa-chart-line me-2"></i>الرسم البياني الخطي</h5>
            <p>يعرض سعر الإغلاق فقط، ويستخدم لتحديد الاتجاه العام للسهم.</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-success"><i class="fas fa-chart-bar me-2"></i>الرسم البياني بالشموع اليابانية</h5>
            <p>يعرض سعر الافتتاح والإغلاق والحد الأعلى والأدنى، ويوفر معلومات أكثر تفصيلاً.</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-warning"><i class="fas fa-chart-bar me-2"></i>الرسم البياني بالأعمدة</h5>
            <p>يعرض نطاق التداول اليومي، ويستخدم لتحديد مستويات الدعم والمقاومة.</p>
        </div>
    </div>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> أصبحت منصة "تداول" توفر رسوم بيانية متقدمة مع مؤشرات فنية متعددة، مما سهل تطبيق التحليل الفني على الأسهم السعودية.</p>
</div>

<h2><i class="fas fa-arrow-up me-2"></i>الاتجاهات وأنواعها</h2>
<p>الاتجاه هو الاتجاه العام لحركة السعر خلال فترة زمنية معينة:</p>

<div class="info-box">
    <h4><i class="fas fa-trending-up me-2"></i>أنواع الاتجاهات</h4>
    <div class="row">
        <div class="col-md-4">
            <h5 class="text-success"><i class="fas fa-arrow-up me-2"></i>الاتجاه الصاعد</h5>
            <p>يتميز بارتفاع مستمر في الأسعار مع قمم وقيعان متصاعدة.</p>
            <ul>
                <li>قمة أعلى من سابقتها</li>
                <li>قاع أعلى من سابقه</li>
                <li>مؤشر على قوة المشترين</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5 class="text-danger"><i class="fas fa-arrow-down me-2"></i>الاتجاه الهابط</h5>
            <p>يتميز بانخفاض مستمر في الأسعار مع قمم وقيعان منخفضة.</p>
            <ul>
                <li>قمة أقل من سابقتها</li>
                <li>قاع أقل من سابقه</li>
                <li>مؤشر على قوة البائعين</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5 class="text-warning"><i class="fas fa-arrows-alt-h me-2"></i>الاتجاه الجانبي</h5>
            <p>يتميز بحركة أفقية في الأسعار دون اتجاه واضح.</p>
            <ul>
                <li>أسعار متذبذبة</li>
                <li>عدم وضوح الاتجاه</li>
                <li>فترة ترقب</li>
            </ul>
        </div>
    </div>
</div>

<h2><i class="fas fa-shield-alt me-2"></i>مستويات الدعم والمقاومة</h2>
<p>مستويات الدعم والمقاومة هي من أهم مفاهيم التحليل الفني:</p>

<div class="info-box">
    <h4><i class="fas fa-level-up-alt me-2"></i>مستويات المقاومة</h4>
    <p>هي المستويات التي يواجه عندها السعر صعوبة في الارتفاع، حيث يزداد عرض البائعين:</p>
    <ul>
        <li><strong>المقاومة التاريخية:</strong> مستويات ارتفع عندها السعر سابقاً ثم تراجع</li>
        <li><strong>المقاومة النفسية:</strong> مستويات رقمية مثل 100، 1000، 10000</li>
        <li><strong>المقاومة التقنية:</strong> مستويات مشتقة من المؤشرات الفنية</li>
    </ul>
</div>

<div class="info-box">
    <h4><i class="fas fa-level-down-alt me-2"></i>مستويات الدعم</h4>
    <p>هي المستويات التي يواجه عندها السعر صعوبة في الانخفاض، حيث يزداد طلب المشترين:</p>
    <ul>
        <li><strong>الدعم التاريخي:</strong> مستويات انخفض عندها السعر سابقاً ثم ارتفع</li>
        <li><strong>الدعم النفسي:</strong> مستويات رقمية مهمة للمستثمرين</li>
        <li><strong>الدعم التقني:</strong> مستويات مشتقة من المؤشرات الفنية</li>
    </ul>
</div>

<div class="warning-box">
    <h4><i class="fas fa-exclamation-triangle me-2"></i>ملاحظة مهمة</h4>
    <p>مستويات الدعم والمقاومة ليست ثابتة، بل تتغير مع تغير ظروف السوق. قد يصبح مستوى الدعم مقاومة والعكس صحيح.</p>
</div>

<h2><i class="fas fa-chart-line me-2"></i>المؤشرات الفنية الأساسية</h2>
<p>هناك العديد من المؤشرات الفنية التي يمكن استخدامها في تحليل الأسهم السعودية:</p>

<div class="info-box">
    <h4><i class="fas fa-calculator me-2"></i>المتوسطات المتحركة</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-primary"><i class="fas fa-chart-line me-2"></i>المتوسط المتحرك البسيط</h5>
            <p>يتم حسابه بجمع أسعار الإغلاق لفترة معينة وقسمتها على عدد الفترات.</p>
            <ul>
                <li>المتوسط المتحرك 20 يوم</li>
                <li>المتوسط المتحرك 50 يوم</li>
                <li>المتوسط المتحرك 200 يوم</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-chart-line me-2"></i>المتوسط المتحرك الأسي</h5>
            <p>يعطي وزناً أكبر للأسعار الحديثة، مما يجعله أكثر حساسية للتغيرات.</p>
            <ul>
                <li>أسرع في الاستجابة</li>
                <li>أقل تأخراً</li>
                <li>مناسب للمضاربة</li>
            </ul>
        </div>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-tachometer-alt me-2"></i>مؤشر القوة النسبية (RSI)</h4>
    <p>مؤشر يتراوح بين 0 و 100، ويستخدم لتحديد حالات التشبع الشرائي والبيعي:</p>
    <ul>
        <li><strong>أعلى من 70:</strong> تشبع شرائي، احتمال انخفاض السعر</li>
        <li><strong>أقل من 30:</strong> تشبع بيعي، احتمال ارتفاع السعر</li>
        <li><strong>بين 30-70:</strong> منطقة محايدة</li>
    </ul>
</div>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>مؤشر الماكد (MACD)</h4>
    <p>مؤشر يجمع بين المتوسطات المتحركة والحجم، ويستخدم لتحديد نقاط الدخول والخروج:</p>
    <ul>
        <li><strong>إشارة شراء:</strong> عندما يتجاوز خط الماكد خط الإشارة من الأسفل</li>
        <li><strong>إشارة بيع:</strong> عندما ينخفض خط الماكد عن خط الإشارة من الأعلى</li>
        <li><strong>التباعد:</strong> عندما يختلف اتجاه السعر عن اتجاه المؤشر</li>
    </ul>
</div>

<h2><i class="fas fa-shapes me-2"></i>أنماط الرسوم البيانية</h2>
<p>هناك أنماط معينة في الرسوم البيانية يمكن أن تساعد في التنبؤ بالحركات المستقبلية:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-area me-2"></i>الأنماط الانعكاسية</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-arrow-up me-2"></i>أنماط الانعكاس الصاعد</h5>
            <ul>
                <li><strong>القاع المزدوج:</strong> قاعين متساويين تقريباً</li>
                <li><strong>القاع الثلاثي:</strong> ثلاثة قيعان متساوية</li>
                <li><strong>الرأس والكتفين المقلوب:</strong> نمط يشبه الرأس والكتفين مقلوباً</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-danger"><i class="fas fa-arrow-down me-2"></i>أنماط الانعكاس الهابط</h5>
            <ul>
                <li><strong>القمة المزدوجة:</strong> قمتين متساويتين تقريباً</li>
                <li><strong>القمة الثلاثية:</strong> ثلاث قمم متساوية</li>
                <li><strong>الرأس والكتفين:</strong> نمط يشبه الرأس والكتفين</li>
            </ul>
        </div>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-chart-line me-2"></i>الأنماط الاستمرارية</h4>
    <ul>
        <li><strong>المثلث الصاعد:</strong> قمم أفقية وقيعان متصاعدة</li>
        <li><strong>المثلث الهابط:</strong> قمم منخفضة وقيعان أفقية</li>
        <li><strong>المثلث المتماثل:</strong> قمم منخفضة وقيعان متصاعدة</li>
        <li><strong>المستطيل:</strong> قمم وقيعان أفقية متوازية</li>
    </ul>
</div>

<h2><i class="fas fa-volume-up me-2"></i>أهمية الحجم في التحليل الفني</h2>
<p>الحجم هو عدد الأسهم المتداولة في فترة معينة، وهو مؤشر مهم على قوة الحركة:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>تفسير الحجم</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-arrow-up me-2"></i>حجم مرتفع مع صعود</h5>
            <p>يدعم الاتجاه الصاعد ويشير إلى قوة المشترين.</p>
        </div>
        <div class="col-md-6">
            <h5 class="text-danger"><i class="fas fa-arrow-down me-2"></i>حجم مرتفع مع هبوط</h5>
            <p>يدعم الاتجاه الهابط ويشير إلى قوة البائعين.</p>
        </div>
    </div>
</div>

<div class="warning-box">
    <h4><i class="fas fa-exclamation-triangle me-2"></i>تحذير مهم</h4>
    <p>التحليل الفني ليس علماً دقيقاً، ولا يمكن الاعتماد عليه بشكل كامل. يجب استخدامه مع التحليل الأساسي وإدارة المخاطر.</p>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> أصبح التحليل الفني أكثر شعبية في السوق السعودي مع تطور منصات التداول وتوفر المؤشرات الفنية المتقدمة.</p>
</div>

<h2><i class="fas fa-lightbulb me-2"></i>الخلاصة</h2>
<p>التحليل الفني أداة مفيدة في تحليل الأسهم السعودية، لكن يجب استخدامه بحذر وبالتزامن مع التحليل الأساسي. الأنماط والمؤشرات الفنية يمكن أن تساعد في تحديد نقاط الدخول والخروج المناسبة.</p>

<div class="highlight-box">
    <h3><i class="fas fa-arrow-right me-2"></i>في الجزء التالي</h3>
    <p>سنتعرف على التحليل الأساسي للأسهم السعودية، وكيفية تقييم الشركات بناءً على البيانات المالية والمؤشرات الأساسية.</p>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?> 