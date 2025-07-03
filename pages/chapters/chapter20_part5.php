<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الباب السادس: الأسهم السعودية - الجزء الخامس: التحليل الأساسي للأسهم السعودية - ' . SITE_NAME;
$page_description = 'الباب السادس الجزء الخامس: التحليل الأساسي للأسهم السعودية - تقييم الشركات بناءً على البيانات المالية';
$page_keywords = 'التحليل الأساسي, المؤشرات المالية, الربحية, السيولة, النمو, تقييم الشركات';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter20_part5.php');
$chapter_title = 'الباب السادس: الأسهم السعودية - الجزء الخامس: التحليل الأساسي للأسهم السعودية';
$current_page = 'chapter20_part5';

// Navigation links
$prev_chapter = get_chapter_url('chapter20_part4.php');
$next_chapter = get_chapter_url('chapter20_part6.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '
<h2><i class="fas fa-calculator me-2"></i>التحليل الأساسي للأسهم السعودية</h2>
<p>التحليل الأساسي هو دراسة البيانات المالية والاقتصادية للشركة لتحديد قيمتها الحقيقية. في السوق السعودي، يمكن تطبيق نفس مبادئ التحليل الأساسي المستخدمة عالمياً.</p>

<div class="highlight-box">
    <h3><i class="fas fa-star me-2"></i>أساسيات التحليل الأساسي</h3>
    <p>يعتمد التحليل الأساسي على فكرة أن سعر السهم يجب أن يعكس القيمة الحقيقية للشركة، وأن السوق قد يخطئ في تقييم بعض الأسهم.</p>
</div>

<h2><i class="fas fa-chart-line me-2"></i>المؤشرات المالية الأساسية</h2>
<p>هناك عدة مؤشرات مالية مهمة يجب مراجعتها عند تحليل أي سهم:</p>

<div class="info-box">
    <h4><i class="fas fa-percentage me-2"></i>معدل السعر إلى الأرباح (P/E)</h4>
    <p>هو أحد أهم المؤشرات المستخدمة في تقييم الأسهم:</p>
    <div class="formula-box">
        <h5><i class="fas fa-calculator me-2"></i>معادلة حساب P/E</h5>
        <div class="formula">
            <p><strong>معدل السعر إلى الأرباح = سعر السهم ÷ ربحية السهم</strong></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-arrow-down me-2"></i>P/E منخفض</h5>
            <ul>
                <li>قد يشير إلى سهم مقوم بأقل من قيمته</li>
                <li>فرصة شراء محتملة</li>
                <li>لكن قد يشير أيضاً إلى مشاكل في الشركة</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-warning"><i class="fas fa-arrow-up me-2"></i>P/E مرتفع</h5>
            <ul>
                <li>قد يشير إلى سهم مبالغ في تقييمه</li>
                <li>توقعات نمو عالية</li>
                <li>مخاطر أعلى</li>
            </ul>
        </div>
    </div>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> يتراوح متوسط P/E في السوق السعودي بين 15-25، مع اختلاف كبير بين القطاعات المختلفة.</p>
</div>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>معدل السعر إلى القيمة الدفترية (P/B)</h4>
    <p>يقارن سعر السهم بالقيمة الدفترية للسهم:</p>
    <div class="formula-box">
        <h5><i class="fas fa-calculator me-2"></i>معادلة حساب P/B</h5>
        <div class="formula">
            <p><strong>معدل السعر إلى القيمة الدفترية = سعر السهم ÷ القيمة الدفترية للسهم</strong></p>
        </div>
    </div>
    <ul>
        <li><strong>P/B أقل من 1:</strong> قد يشير إلى سهم مقوم بأقل من قيمته الدفترية</li>
        <li><strong>P/B أعلى من 1:</strong> السهم يتداول بأعلى من قيمته الدفترية</li>
        <li><strong>مفيد للبنوك:</strong> مؤشر مهم خاصة في قطاع البنوك</li>
    </ul>
</div>

<div class="info-box">
    <h4><i class="fas fa-percentage me-2"></i>معدل العائد على حقوق المساهمين (ROE)</h4>
    <p>يقيس كفاءة الشركة في استخدام رأس المال:</p>
    <div class="formula-box">
        <h5><i class="fas fa-calculator me-2"></i>معادلة حساب ROE</h5>
        <div class="formula">
            <p><strong>ROE = صافي الربح ÷ حقوق المساهمين × 100</strong></p>
        </div>
    </div>
    <ul>
        <li><strong>ROE مرتفع:</strong> يشير إلى كفاءة عالية في استخدام رأس المال</li>
        <li><strong>ROE منخفض:</strong> قد يشير إلى مشاكل في الإدارة أو العمليات</li>
        <li><strong>مقارنة مع القطاع:</strong> يجب مقارنته مع متوسط القطاع</li>
    </ul>
</div>

<h2><i class="fas fa-chart-pie me-2"></i>مؤشرات الربحية</h2>
<p>مؤشرات الربحية تساعد في تقييم قدرة الشركة على تحقيق الأرباح:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-line me-2"></i>مؤشرات الربحية الأساسية</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-primary"><i class="fas fa-percentage me-2"></i>هامش الربح الإجمالي</h5>
            <p>يقيس الربحية من العمليات الأساسية:</p>
            <div class="formula">
                <p><strong>الهامش الإجمالي = (الإيرادات - تكلفة البضاعة المباعة) ÷ الإيرادات × 100</strong></p>
            </div>
        </div>
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-percentage me-2"></i>هامش الربح الصافي</h5>
            <p>يقيس الربحية النهائية بعد جميع المصروفات:</p>
            <div class="formula">
                <p><strong>الهامش الصافي = صافي الربح ÷ الإيرادات × 100</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>مؤشرات النمو</h4>
    <ul>
        <li><strong>نمو الإيرادات:</strong> نسبة نمو الإيرادات السنوية</li>
        <li><strong>نمو الأرباح:</strong> نسبة نمو الأرباح السنوية</li>
        <li><strong>نمو الأصول:</strong> نسبة نمو إجمالي الأصول</li>
        <li><strong>نمو رأس المال:</strong> نسبة نمو رأس المال العامل</li>
    </ul>
</div>

<h2><i class="fas fa-money-bill-wave me-2"></i>مؤشرات السيولة</h2>
<p>مؤشرات السيولة تقيس قدرة الشركة على الوفاء بالتزاماتها قصيرة المدى:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>المؤشرات الأساسية للسيولة</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-primary"><i class="fas fa-percentage me-2"></i>المعدل الجاري</h5>
            <p>يقارن الأصول المتداولة بالخصوم المتداولة:</p>
            <div class="formula">
                <p><strong>المعدل الجاري = الأصول المتداولة ÷ الخصوم المتداولة</strong></p>
            </div>
            <ul>
                <li><strong>أعلى من 1:</strong> جيد</li>
                <li><strong>أقل من 1:</strong> قد يشير إلى مشاكل في السيولة</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-success"><i class="fas fa-percentage me-2"></i>المعدل السريع</h5>
            <p>يقارن الأصول السريعة بالخصوم المتداولة:</p>
            <div class="formula">
                <p><strong>المعدل السريع = (الأصول المتداولة - المخزون) ÷ الخصوم المتداولة</strong></p>
            </div>
            <ul>
                <li><strong>أعلى من 1:</strong> ممتاز</li>
                <li><strong>أقل من 1:</strong> قد يشير إلى مشاكل</li>
            </ul>
        </div>
    </div>
</div>

<h2><i class="fas fa-balance-scale me-2"></i>مؤشرات المديونية</h2>
<p>مؤشرات المديونية تقيس مستوى الديون في الشركة:</p>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>المؤشرات الأساسية للمديونية</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="text-warning"><i class="fas fa-percentage me-2"></i>نسبة الديون إلى الأصول</h5>
            <p>تقيس نسبة الأصول الممولة بالديون:</p>
            <div class="formula">
                <p><strong>نسبة الديون = إجمالي الديون ÷ إجمالي الأصول × 100</strong></p>
            </div>
            <ul>
                <li><strong>أقل من 50%:</strong> جيد</li>
                <li><strong>أعلى من 70%:</strong> قد يشير إلى مخاطر عالية</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5 class="text-info"><i class="fas fa-percentage me-2"></i>نسبة تغطية الفائدة</h5>
            <p>تقيس قدرة الشركة على دفع الفوائد:</p>
            <div class="formula">
                <p><strong>نسبة التغطية = الأرباح قبل الفوائد والضرائب ÷ مصروفات الفوائد</strong></p>
            </div>
            <ul>
                <li><strong>أعلى من 3:</strong> ممتاز</li>
                <li><strong>أقل من 1.5:</strong> قد يشير إلى مخاطر</li>
            </ul>
        </div>
    </div>
</div>

<h2><i class="fas fa-chart-line me-2"></i>تحليل القطاعات</h2>
<p>كل قطاع له خصائصه ومؤشراته الخاصة:</p>

<div class="info-box">
    <h4><i class="fas fa-building me-2"></i>خصائص القطاعات الرئيسية</h4>
    <div class="row">
        <div class="col-md-4">
            <h5 class="text-primary"><i class="fas fa-university me-2"></i>قطاع البنوك</h5>
            <ul>
                <li>P/B مهم جداً</li>
                <li>ROE عالي نسبياً</li>
                <li>مؤشرات السيولة مهمة</li>
                <li>تأثر بالسياسة النقدية</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5 class="text-success"><i class="fas fa-industry me-2"></i>قطاع المواد الأساسية</h5>
            <ul>
                <li>P/E منخفض نسبياً</li>
                <li>تأثر بأسعار المواد الخام</li>
                <li>مؤشرات الربحية مهمة</li>
                <li>دورية في الأداء</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5 class="text-warning"><i class="fas fa-bolt me-2"></i>قطاع الطاقة</h5>
            <ul>
                <li>تأثر بأسعار النفط</li>
                <li>P/E متغير</li>
                <li>أرباح مستقرة نسبياً</li>
                <li>توزيعات أرباح عالية</li>
            </ul>
        </div>
    </div>
</div>

<div class="margin-note">
    <h5><i class="fas fa-lightbulb me-2"></i>هامش إضافي</h5>
    <p><strong>تحديث 2024:</strong> ظهرت قطاعات جديدة مثل التكنولوجيا والرعاية الصحية، والتي لها مؤشرات مختلفة عن القطاعات التقليدية.</p>
</div>

<h2><i class="fas fa-search me-2"></i>كيفية الحصول على المعلومات</h2>
<p>هناك عدة مصادر للحصول على المعلومات المالية للشركات السعودية:</p>

<div class="info-box">
    <h4><i class="fas fa-globe me-2"></i>المصادر الرسمية</h4>
    <ul>
        <li><strong>موقع تداول:</strong> www.tadawul.com.sa - المعلومات الأساسية والتقارير المالية</li>
        <li><strong>موقع هيئة السوق المالية:</strong> www.cma.org.sa - الإفصاحات والتنظيمات</li>
        <li><strong>مواقع الشركات:</strong> التقارير السنوية والربعية</li>
        <li><strong>البنوك الاستثمارية:</strong> تقارير التحليل والبحث</li>
    </ul>
</div>

<div class="info-box">
    <h4><i class="fas fa-chart-bar me-2"></i>المصادر الإضافية</h4>
    <ul>
        <li><strong>الوسائل الإعلامية المالية:</strong> الصحف والمواقع المتخصصة</li>
        <li><strong>منصات التداول:</strong> معلومات فورية وأسعار</li>
        <li><strong>التطبيقات المالية:</strong> معلومات سريعة ومؤشرات</li>
        <li><strong>المنتديات والمواقع المتخصصة:</strong> مناقشات وتحليلات</li>
    </ul>
</div>

<h2><i class="fas fa-exclamation-triangle me-2"></i>تحذيرات مهمة</h2>
<p>عند استخدام التحليل الأساسي، يجب الانتباه إلى عدة نقاط:</p>

<div class="warning-box">
    <h4><i class="fas fa-exclamation-triangle me-2"></i>التحذيرات الأساسية</h4>
    <ul>
        <li><strong>المؤشرات التاريخية:</strong> لا تضمن الأداء المستقبلي</li>
        <li><strong>تأخر المعلومات:</strong> التقارير المالية قد تكون متأخرة</li>
        <li><strong>التلاعب المحتمل:</strong> قد تكون هناك محاولات لتجميل البيانات</li>
        <li><strong>تغير الظروف:</strong> الظروف الاقتصادية والسياسية قد تتغير</li>
        <li><strong>عدم اكتمال الصورة:</strong> التحليل الأساسي وحده لا يكفي</li>
    </ul>
</div>

<div class="info-box">
    <h4><i class="fas fa-lightbulb me-2"></i>نصائح للتحليل الأساسي</h4>
    <ul>
        <li><strong>استخدم عدة مؤشرات:</strong> لا تعتمد على مؤشر واحد</li>
        <li><strong>قارن مع القطاع:</strong> قارن أداء الشركة مع متوسط القطاع</li>
        <li><strong>تابع الاتجاهات:</strong> ركز على الاتجاهات وليس القيم المطلقة</li>
        <li><strong>ادرس الظروف الاقتصادية:</strong> تأثر الشركات بالاقتصاد العام</li>
        <li><strong>استخدم التحليل الفني معه:</strong> الجمع بين التحليلين يعطي صورة أوضح</li>
    </ul>
</div>

<h2><i class="fas fa-lightbulb me-2"></i>الخلاصة</h2>
<p>التحليل الأساسي أداة قوية لتقييم الأسهم السعودية، لكن يجب استخدامه بحكمة وبالتزامن مع التحليل الفني وإدارة المخاطر. المؤشرات المالية المختلفة تعطي صورة شاملة عن صحة الشركة وقدرتها على النمو.</p>

<div class="highlight-box">
    <h3><i class="fas fa-arrow-right me-2"></i>في الجزء التالي</h3>
    <p>سنتعرف على الاكتتاب ورفع رأس المال، وكيفية المشاركة في الاكتتابات الجديدة في السوق السعودي.</p>
</div>
';

// Include template
include get_template_path('chapter_template.php');
?> 