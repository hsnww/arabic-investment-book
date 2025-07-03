<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الباب السادس: الأسهم السعودية - الجزء السادس: الاكتتاب ورفع رأس المال - ' . SITE_NAME;
$page_description = 'الباب السادس الجزء السادس: الاكتتاب ورفع رأس المال - كيفية المشاركة في الاكتتابات الجديدة';
$page_keywords = 'الاكتتاب, رفع رأس المال, الاكتتاب العام, الاكتتاب الخاص, حقوق الأولوية';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter20_part6.php');
$chapter_title = 'الباب السادس: الأسهم السعودية - الجزء السادس: الاكتتاب ورفع رأس المال';
$current_page = 'chapter20_part6';

// Navigation links
$prev_chapter = get_chapter_url('chapter20_part5.php');
$next_chapter = get_chapter_url('chapter20_part7.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<h2><i class="fas fa-handshake me-2"></i>الاكتتاب ورفع رأس المال</h2>
<p>الاكتتاب هو عملية طرح أسهم جديدة للبيع على الجمهور أو المساهمين الحاليين. في السوق السعودي، هناك عدة أنواع من الاكتتابات التي يمكن للمستثمرين المشاركة فيها.</p>

<div class="highlight-box">
    <h3><i class="fas fa-star me-2"></i>أهمية الاكتتاب</h3>
    <p>الاكتتابات هي وسيلة مهمة للشركات لجمع رأس المال وتوسيع أعمالها، كما أنها فرصة للمستثمرين للدخول في شركات جديدة أو زيادة حصصهم في الشركات الموجودة.</p>
</div>

<h2><i class="fas fa-list me-2"></i>أنواع الاكتتابات</h2>
<p>هناك عدة أنواع من الاكتتابات في السوق السعودي:</p>

<div class="info-box">
    <h4><i class="fas fa-building me-2"></i>الاكتتاب العام الأولي (IPO)</h4>
    <p>هو طرح أسهم شركة جديدة لم تكن مدرجة من قبل في السوق:</p>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-plus me-2"></i>المزايا</h5>
            <ul>
                <li>فرصة الدخول في شركة جديدة</li>
                <li>إمكانية تحقيق أرباح سريعة</li>
                <li>تنويع المحفظة الاستثمارية</li>
                <li>المشاركة في نمو الشركة من البداية</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-warning"><i class="fas fa-exclamation-triangle me-2"></i>المخاطر</h5>
            <ul>
                <li>عدم وجود تاريخ تداول سابق</li>
                <li>صعوبة تقييم السعر العادل</li>
                <li>مخاطر أعلى من الأسهم المدرجة</li>
                <li>تقلبات سعرية كبيرة</li>
            </ul>
        </div>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-chart-line me-2"></i>رفع رأس المال</h4>
    <p>هو إصدار أسهم جديدة من شركة مدرجة بالفعل:</p>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-primary"><i class="fas fa-arrow-up me-2"></i>أسباب رفع رأس المال</h5>
            <ul>
                <li>تمويل مشاريع جديدة</li>
                <li>توسيع الأعمال</li>
                <li>سداد الديون</li>
                <li>زيادة رأس المال العامل</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-info"><i class="fas fa-users me-2"></i>أنواع رفع رأس المال</h5>
            <ul>
                <li><strong>حقوق الأولوية:</strong> للمساهمين الحاليين</li>
                <li><strong>الاكتتاب العام:</strong> لجميع المستثمرين</li>
                <li><strong>الاكتتاب الخاص:</strong> لمستثمرين محددين</li>
            </ul>
        </div>
    </div>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> شهد السوق السعودي زيادة في عدد الاكتتابات العامة، حيث تم طرح أكثر من 20 شركة جديدة في السوق خلال السنوات الأخيرة.</p>
</div>

<h2><i class="fas fa-cogs me-2"></i>آلية الاكتتاب</h2>
<p>تتم عملية الاكتتاب في السوق السعودي وفق خطوات محددة:</p>

<div class="info-box">
    <h4><i class="fas fa-clipboard-list me-2"></i>خطوات الاكتتاب</h4>
    <ol>
        <li><strong>الإعلان عن الاكتتاب:</strong> تعلن الشركة عن نيتها في الاكتتاب</li>
        <li><strong>إعداد نشرة الإصدار:</strong> تحضير الوثائق المطلوبة</li>
        <li><strong>الموافقة من الهيئة:</strong> موافقة هيئة السوق المالية</li>
        <li><strong>فتح باب الاكتتاب:</strong> بدء استقبال طلبات الاكتتاب</li>
        <li><strong>إغلاق الاكتتاب:</strong> انتهاء فترة الاكتتاب</li>
        <li><strong>تحديد سعر الاكتتاب:</strong> بناءً على الطلب والعرض</li>
        <li><strong>توزيع الأسهم:</strong> توزيع الأسهم على المكتتبين</li>
        <li><strong>بدء التداول:</strong> بدء تداول الأسهم في السوق</li>
    </ol>
</div>

<div class="info-box">
    <h4><i class="fas fa-calendar me-2"></i>فترة الاكتتاب</h4>
    <ul>
        <li><strong>فترة الاكتتاب:</strong> عادة 10-15 يوم عمل</li>
        <li><strong>فترة التخصيص:</strong> 2-3 أيام بعد الإغلاق</li>
        <li><strong>فترة التسوية:</strong> 3-5 أيام للتسوية</li>
        <li><strong>بدء التداول:</strong> عادة بعد أسبوع من الإغلاق</li>
    </ul>
</div>

<h2><i class="fas fa-user-plus me-2"></i>كيفية المشاركة في الاكتتاب</h2>
<p>للمشاركة في الاكتتاب، يجب اتباع خطوات محددة:</p>

<div class="info-box">
    <h4><i class="fas fa-clipboard-check me-2"></i>متطلبات المشاركة</h4>
    <ul>
        <li><strong>حساب تداول:</strong> حساب تداول نشط في أحد البنوك</li>
        <li><strong>الهوية الوطنية:</strong> أو إقامة للمقيمين</li>
        <li><strong>الحد الأدنى:</strong> عادة 10 أسهم</li>
        <li><strong>الحد الأقصى:</strong> يحدد حسب نوع الاكتتاب</li>
    </ul>
</div>

<div class="info-box">
    <h4><i class="fas fa-mobile-alt me-2"></i>طرق الاكتتاب</h4>
    <div class="row">
        <div class="col-md-4">
            <h5 class="text-primary"><i class="fas fa-phone me-2"></i>الهاتف المصرفي</h5>
            <p>الاتصال بالبنك والاكتتاب عبر الهاتف</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-success"><i class="fas fa-laptop me-2"></i>الإنترنت</h5>
            <p>الاكتتاب عبر موقع البنك الإلكتروني</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-warning"><i class="fas fa-building me-2"></i>الفرع</h5>
            <p>الاكتتاب في فرع البنك مباشرة</p>
        </div>
    </div>
</div>

<h2><i class="fas fa-calculator me-2"></i>تحديد سعر الاكتتاب</h2>
<p>يتم تحديد سعر الاكتتاب بعدة طرق:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>طرق تحديد السعر</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-primary"><i class="fas fa-search me-2"></i>الكتاب المفتوح</h5>
            <p>يتم تحديد السعر بناءً على طلبات المكتتبين:</p>
            <ul>
                <li>يحدد المستثمرون السعر الذي يرغبون في الاكتتاب به</li>
                <li>يتم تجميع الطلبات وتحديد السعر الأمثل</li>
                <li>يتم تخصيص الأسهم بناءً على الطلبات</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-dollar-sign me-2"></i>السعر المحدد</h5>
            <p>يتم تحديد السعر مسبقاً من قبل الشركة:</p>
            <ul>
                <li>تحدد الشركة سعر الاكتتاب مسبقاً</li>
                <li>يتم الاكتتاب بالسعر المحدد</li>
                <li>إذا زاد الطلب، يتم التخصيص بالتناسب</li>
            </ul>
        </div>
    </div>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> معظم الاكتتابات في السوق السعودي تستخدم نظام الكتاب المفتوح، مما يضمن تحديد سعر عادل بناءً على الطلب الفعلي.</p>
</div>

<h2><i class="fas fa-percentage me-2"></i>تخصيص الأسهم</h2>
<p>بعد إغلاق الاكتتاب، يتم تخصيص الأسهم للمكتتبين:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-pie me-2"></i>آلية التخصيص</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-check me-2"></i>إذا كان الطلب أقل من العرض</h5>
            <ul>
                <li>يحصل جميع المكتتبين على طلباتهم كاملة</li>
                <li>يتم إلغاء الاكتتاب إذا كان الطلب ضعيف جداً</li>
                <li>قد يتم تخفيض سعر الاكتتاب</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-warning"><i class="fas fa-exclamation-triangle me-2"></i>إذا كان الطلب أكبر من العرض</h5>
            <ul>
                <li>يتم التخصيص بالتناسب</li>
                <li>الأولوية للمكتتبين الأفراد</li>
                <li>قد يتم تحديد حد أقصى للتخصيص</li>
            </ul>
        </div>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-users me-2"></i>أولويات التخصيص</h4>
    <ul>
        <li><strong>الأولوية الأولى:</strong> المكتتبون الأفراد (المواطنون والمقيمون)</li>
        <li><strong>الأولوية الثانية:</strong> المؤسسات المالية المحلية</li>
        <li><strong>الأولوية الثالثة:</strong> المستثمرون الأجانب المؤهلون</li>
        <li><strong>الأولوية الرابعة:</strong> المؤسسات المالية الأجنبية</li>
    </ul>
</div>

<h2><i class="fas fa-chart-line me-2"></i>أداء الأسهم بعد الاكتتاب</h2>
<p>عادة ما تشهد الأسهم الجديدة تقلبات كبيرة في الأسعار بعد الاكتتاب:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-area me-2"></i>المراحل الأساسية</h4>
    <div class="row">
        <div class="col-md-4">
            <h5 class="text-success"><i class="fas fa-rocket me-2"></i>المرحلة الأولى: الصعود السريع</h5>
            <p>عادة ما ترتفع الأسعار بسرعة في الأيام الأولى</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-warning"><i class="fas fa-arrow-down me-2"></i>المرحلة الثانية: التصحيح</h5>
            <p>قد تنخفض الأسعار بعد الصعود الأولي</p>
        </div>
        <div class="col-md-4">
            <h5 class="text-primary"><i class="fas fa-chart-line me-2"></i>المرحلة الثالثة: الاستقرار</h5>
            <p>تستقر الأسعار عند مستويات واقعية</p>
        </div>
    </div>
</div>

<div class="warning-box">
    <h4><i class="fas fa-exclamation-triangle me-2"></i>تحذيرات مهمة</h4>
    <ul>
        <li><strong>التقلبات الكبيرة:</strong> الأسهم الجديدة عادة ما تكون متقلبة</li>
        <li><strong>عدم ضمان الربح:</strong> الاكتتاب لا يضمن الربح</li>
        <li><strong>الحاجة للصبر:</strong> قد يحتاج السهم وقتاً للاستقرار</li>
        <li><strong>أهمية البحث:</strong> يجب دراسة الشركة قبل الاكتتاب</li>
    </ul>
</div>

<h2><i class="fas fa-search me-2"></i>كيفية تقييم الاكتتاب</h2>
<p>قبل المشاركة في أي اكتتاب، يجب تقييم عدة عوامل:</p>

<div class="info-box">
    <h4><i class="fas fa-clipboard-list me-2"></i>عوامل التقييم</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-primary"><i class="fas fa-building me-2"></i>عوامل الشركة</h5>
            <ul>
                <li><strong>القطاع:</strong> نوع النشاط والآفاق المستقبلية</li>
                <li><strong>الأداء المالي:</strong> الأرباح والإيرادات والنمو</li>
                <li><strong>الإدارة:</strong> خبرة وقدرة فريق الإدارة</li>
                <li><strong>المنافسة:</strong> وضع الشركة في السوق</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-chart-bar me-2"></i>عوامل الاكتتاب</h5>
            <ul>
                <li><strong>سعر الاكتتاب:</strong> مقارنة مع الشركات المماثلة</li>
                <li><strong>حجم الاكتتاب:</strong> نسبة الأسهم المطروحة</li>
                <li><strong>الغرض:</strong> سبب رفع رأس المال</li>
                <li><strong>التوقيت:</strong> توقيت الاكتتاب في السوق</li>
            </ul>
        </div>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-lightbulb me-2"></i>نصائح للاكتتاب</h4>
    <ul>
        <li><strong>اقرأ نشرة الإصدار:</strong> تحتوي على معلومات مهمة</li>
        <li><strong>قارن مع الشركات المماثلة:</strong> لتقييم السعر</li>
        <li><strong>لا تضع كل أموالك:</strong> وزع استثماراتك</li>
        <li><strong>كن مستعداً للصبر:</strong> قد يحتاج السهم وقتاً</li>
        <li><strong>تابع الأخبار:</strong> للتأكد من عدم وجود مشاكل</li>
    </ul>
</div>

<h2><i class="fas fa-lightbulb me-2"></i>الخلاصة</h2>
<p>الاكتتابات فرصة جيدة للمستثمرين للدخول في شركات جديدة أو زيادة استثماراتهم، لكنها تتطلب دراسة دقيقة وتقييماً شاملاً. يجب أن يكون المستثمر مستعداً للتقلبات وأن يضع استراتيجية واضحة للمشاركة في الاكتتابات.</p>

<div class="highlight-box">
    <h3><i class="fas fa-arrow-right me-2"></i>في الجزء التالي</h3>
    <p>سنتعرف على الصناديق الاستثمارية في السوق السعودي، وأنواعها ومزاياها وكيفية الاستثمار فيها.</p>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?> 