<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Page configuration
$page_title = 'الفصل التاسع: التحليل الأساسي للأسهم - الجزء الأول';
$page_description = 'الفصل التاسع من كتاب المال والاستثمار في الأسواق المالية - التحليل الأساسي للأسهم';
$page_keywords = 'التحليل الأساسي, القوائم المالية, الأسهم, الاستثمار, الأسواق المالية, الفصل التاسع';
$page_url = get_page_url('pages/chapters/chapter9_part1.php');
$chapter_title = 'الفصل التاسع: التحليل الأساسي للأسهم';
$current_page = 'chapter9_part1';

// Navigation
$prev_chapter = get_page_url('pages/chapters/chapter8_part3.php');
$next_chapter = get_page_url('pages/chapters/chapter9_part2.php');

// Table of contents for this part
$table_of_contents = '
<ul class="list-unstyled">
    <li><i class="fas fa-angle-left"></i> <a href="#introduction">مقدمة الفصل</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#importance">أهمية التحليل الأساسي</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#financial-statements">القوائم المالية الرئيسية</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#balance-sheet">قائمة المركز المالي</a></li>
</ul>';

// Chapter content
$chapter_content = '
<div id="introduction" class="section mb-4">
    <h2 class="section-title">مقدمة الفصل</h2>
    <p class="lead">في هذا الفصل سنتعرف على التحليل الأساسي للأسهم وكيفية قراءة القوائم المالية وتقييم الشركات.</p>
    
    <div class="alert alert-info">
        <h5><i class="fas fa-question-circle"></i> أسئلة مهمة في هذا الفصل</h5>
        <ul class="mb-0">
            <li>ما أهم ثلاث قوائم مالية يجب على المستثمر معرفتها؟</li>
            <li>كيف تقرأ القوائم المالية وتتعرف على أداء الشركات؟</li>
            <li>ما هي طرق تقييم الأسهم؟</li>
            <li>كيف نحسب السعر المستهدف؟</li>
        </ul>
    </div>
    
    <p>قد يبدو صعباً ومنهكاً أن يقوم المستثمر بدراسة الشركات دراسة جيدة وتحليل قوائمها المالية ومتابعة المستجدات لديها بشكل مستمر. ولكن الحقيقة المؤكدة أن هناك بعض الخطوات التي يمكن لأي شخص أن يقوم بها وعن طريقها يكتشف إن كانت الشركة قيد الدراسة صالحة للاستثمار أم لا.</p>
    
    <div class="card mb-3">
        <div class="card-header bg-success text-white">
            <h5><i class="fas fa-check-circle"></i> معلومة مهمة</h5>
        </div>
        <div class="card-body">
            <p>لا تتطلب هذه الخطوات بكل صدق الحصول على شهادة عالية في إدارة الأعمال أو الاستثمار لتطبيقها بشكل صحيح. بغض النظر عن الطريقة الاستثمارية المراد انتهاجها بواسطة التحليل الأساسي أو الفني أو عن طريق محفظة، فإن معرفة هذه الأمور سوف تجعل من القارئ مستثمراً ناجحاً ملماً بما حوله من مفاهيم تجارية وقادراً على اتخاذ القرار الصحيح.</p>
        </div>
    </div>
</div>

<div id="importance" class="section mb-4">
    <h2 class="section-title">أهمية التحليل الأساسي</h2>
    
    <p>التحليل الأساسي هو دراسة شاملة للشركة من جميع النواحي المالية والاقتصادية والتنظيمية. فهو يساعد المستثمر على فهم القيمة الحقيقية للشركة ومقارنتها بالسعر الحالي للسهم.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h6><i class="fas fa-chart-line"></i> مميزات التحليل الأساسي</h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success"></i> فهم القيمة الحقيقية للشركة</li>
                        <li><i class="fas fa-check text-success"></i> اتخاذ قرارات استثمارية مدروسة</li>
                        <li><i class="fas fa-check text-success"></i> تجنب المخاطر غير المتوقعة</li>
                        <li><i class="fas fa-check text-success"></i> تحديد فرص الاستثمار الجيدة</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h6><i class="fas fa-exclamation-triangle"></i> مخاطر عدم التحليل</h6>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-times text-danger"></i> الاستثمار في شركات ضعيفة</li>
                        <li><i class="fas fa-times text-danger"></i> خسارة رأس المال</li>
                        <li><i class="fas fa-times text-danger"></i> اتخاذ قرارات عشوائية</li>
                        <li><i class="fas fa-times text-danger"></i> عدم فهم المخاطر</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="financial-statements" class="section mb-4">
    <h2 class="section-title">القوائم المالية الرئيسية</h2>
    
    <p>قبل أن نبدأ بدراسة التحليل الأساسي بشكل مفصل، علينا أولاً معرفة ما تحتويه أهم ثلاث قوائم مالية لأي شركة:</p>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-header bg-primary text-white">
                    <h5><i class="fas fa-balance-scale"></i> 1. قائمة المركز المالي</h5>
                </div>
                <div class="card-body">
                    <p>تسمى أيضاً الميزانية العامة، وتوضح ما للشركة وما عليها في لحظة زمنية معينة.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-header bg-success text-white">
                    <h5><i class="fas fa-chart-bar"></i> 2. قائمة الدخل</h5>
                </div>
                <div class="card-body">
                    <p>تسمى أيضاً بيان الأرباح والخسائر، وتوضح نتائج نشاط الشركة خلال فترة زمنية.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-header bg-info text-white">
                    <h5><i class="fas fa-money-bill-wave"></i> 3. قائمة التدفقات النقدية</h5>
                </div>
                <div class="card-body">
                    <p>توضح مصادر النقد واستخداماته في الشركة خلال فترة زمنية معينة.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-warning">
        <h5><i class="fas fa-info-circle"></i> مصادر القوائم المالية</h5>
        <p>يمكن الحصول على هذه القوائم من:</p>
        <ul class="mb-0">
            <li>التقرير السنوي للشركة</li>
            <li>موقع إدجار (EDGAR) - قاعدة بيانات هيئة الأوراق المالية الأمريكية</li>
            <li>موقع ياهو المالي</li>
            <li>المواقع الرسمية للشركات</li>
        </ul>
    </div>
</div>

<div id="balance-sheet" class="section mb-4">
    <h2 class="section-title">قائمة المركز المالي</h2>
    
    <p>قائمة المركز المالي، والمعروفة كذلك بالميزانية العامة للشركة، هي بيان مالي يوضح ما للشركة وما عليها في لحظة زمنية معينة.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h5><i class="fas fa-plus-circle"></i> الأصول (Assets)</h5>
                </div>
                <div class="card-body">
                    <p><strong>ما للشركة:</strong></p>
                    <ul>
                        <li>الرصيد النقدي والأوراق المالية</li>
                        <li>حسابات قيد التحصيل</li>
                        <li>المخزون</li>
                        <li>المصانع والمعدات</li>
                        <li>الأراضي والمباني</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-danger text-white">
                    <h5><i class="fas fa-minus-circle"></i> الخصوم وحقوق المساهمين</h5>
                </div>
                <div class="card-body">
                    <p><strong>ما على الشركة:</strong></p>
                    <ul>
                        <li><strong>الخصوم (Liabilities):</strong>
                            <ul>
                                <li>حسابات قيد الدفع</li>
                                <li>ديون قصيرة وطويلة الأجل</li>
                            </ul>
                        </li>
                        <li><strong>حقوق المساهمين (Equity):</strong>
                            <ul>
                                <li>رأس المال المدفوع</li>
                                <li>الأرباح المبقاة</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-info">
        <h5><i class="fas fa-calculator"></i> المعادلة الأساسية</h5>
        <p class="text-center mb-0"><strong>الأصول = الخصوم + حقوق المساهمين</strong></p>
    </div>
    
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5><i class="fas fa-lightbulb"></i> ملاحظة مهمة</h5>
        </div>
        <div class="card-body">
            <p>يشير الجزء الخاص بالأصول إلى حجم الشركة، فالشركة التي لها أصول كبيرة تعتبر كبيرة. ولكن ليس بالضرورة أن تكون الشركة غنية أو رابحة لكون أصولها كبيرة. الأصول في الواقع ملك للخصوم وحملة الأسهم معاً.</p>
        </div>
    </div>
</div>';

// Include template
include get_template_path('chapter_template.php');
?> 