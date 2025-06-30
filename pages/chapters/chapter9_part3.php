<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Page configuration
$page_title = 'الفصل التاسع: التحليل الأساسي للأسهم - الجزء الثالث';
$page_description = 'الفصل التاسع من كتاب المال والاستثمار في الأسواق المالية - التحليل المالي وتفسير القوائم المالية';
$page_keywords = 'التحليل المالي, قائمة الدخل, النسب المالية, تحليل الشركات, الفصل التاسع';
$page_url = get_page_url('pages/chapters/chapter9_part3.php');
$chapter_title = 'الفصل التاسع: التحليل الأساسي للأسهم';
$current_page = 'chapter9_part3';

// Navigation
$prev_chapter = get_page_url('pages/chapters/chapter9_part2.php');
$next_chapter = get_page_url('pages/chapters/chapter9_part4.php');

// Table of contents for this part
$table_of_contents = '
<ul class="list-unstyled">
    <li><i class="fas fa-angle-left"></i> <a href="#income-statement">قائمة الدخل</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#cash-flow">قائمة التدفقات النقدية</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#financial-analysis">التحليل المالي</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#ratios">النسب المالية</a></li>
</ul>';

// Chapter content
$chapter_content = '
<div id="income-statement" class="section mb-4">
    <h2 class="section-title">قائمة الدخل</h2>
    
    <p class="lead">قائمة الدخل، والمعروفة أيضاً ببيان الأرباح والخسائر، هي بيان مالي يوضح نتائج نشاط الشركة خلال فترة زمنية معينة.</p>
    
    <div class="alert alert-info">
        <h5><i class="fas fa-calendar"></i> توقيت إصدار قائمة الدخل</h5>
        <p>تصدر قائمة الدخل مرة واحدة كل ثلاثة أشهر حسب السنة المالية للشركة، وهي تعبر عن مدى نجاح إدارة الشركة في توظيف الأصول بشكل فعال.</p>
    </div>
    
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            <h5><i class="fas fa-chart-line"></i> هيكل قائمة الدخل</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>الإيرادات والتكاليف:</h6>
                    <ol>
                        <li><strong>صافي المبيعات</strong> - إجمالي المبيعات مطروحاً منها المرتجعات والخصومات</li>
                        <li><strong>تكلفة البضاعة المباعة</strong> - تكلفة المواد الخام والعمالة والتكاليف المباشرة</li>
                        <li><strong>إجمالي الربح</strong> - صافي المبيعات - تكلفة البضاعة المباعة</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h6>المصروفات والأرباح:</h6>
                    <ol>
                        <li><strong>المصروفات التشغيلية</strong> - رواتب، إيجار، كهرباء، إعلانات</li>
                        <li><strong>الربح التشغيلي</strong> - إجمالي الربح - المصروفات التشغيلية</li>
                        <li><strong>صافي الربح</strong> - الربح التشغيلي - الضرائب - الفوائد</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h6><i class="fas fa-plus"></i> عناصر الإيرادات</h6>
                </div>
                <div class="card-body">
                    <ul>
                        <li>المبيعات الرئيسية</li>
                        <li>إيرادات الخدمات</li>
                        <li>إيرادات الاستثمارات</li>
                        <li>إيرادات أخرى</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-danger text-white">
                    <h6><i class="fas fa-minus"></i> عناصر التكاليف</h6>
                </div>
                <div class="card-body">
                    <ul>
                        <li>تكلفة المواد الخام</li>
                        <li>تكلفة العمالة</li>
                        <li>المصروفات الإدارية</li>
                        <li>المصروفات التسويقية</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="cash-flow" class="section mb-4">
    <h2 class="section-title">قائمة التدفقات النقدية</h2>
    
    <p>قائمة التدفقات النقدية توضح مصادر النقد واستخداماته في الشركة خلال فترة زمنية معينة.</p>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-header bg-success text-white">
                    <h5><i class="fas fa-arrow-down"></i> التدفقات النقدية من الأنشطة التشغيلية</h5>
                </div>
                <div class="card-body">
                    <p>النقد الناتج من العمليات اليومية للشركة مثل المبيعات والمدفوعات للموردين.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-header bg-info text-white">
                    <h5><i class="fas fa-building"></i> التدفقات النقدية من الأنشطة الاستثمارية</h5>
                </div>
                <div class="card-body">
                    <p>النقد المستخدم في شراء الأصول الثابتة أو النقد الناتج من بيعها.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-header bg-warning text-white">
                    <h5><i class="fas fa-money-bill-wave"></i> التدفقات النقدية من الأنشطة التمويلية</h5>
                </div>
                <div class="card-body">
                    <p>النقد الناتج من الاقتراض أو إصدار أسهم أو النقد المستخدم في سداد الديون.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-warning">
        <h5><i class="fas fa-exclamation-triangle"></i> أهمية التدفقات النقدية</h5>
        <p>الشركة قد تكون رابحة ولكن تعاني من مشاكل في السيولة النقدية. قائمة التدفقات النقدية تساعد في فهم قدرة الشركة على توليد النقد وتلبية التزاماتها.</p>
    </div>
</div>

<div id="financial-analysis" class="section mb-4">
    <h2 class="section-title">التحليل المالي</h2>
    
    <p>التحليل المالي هو عملية تقييم أداء الشركة من خلال دراسة القوائم المالية والمؤشرات المختلفة.</p>
    
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            <h5><i class="fas fa-search"></i> أهداف التحليل المالي</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>تقييم الربحية:</h6>
                    <ul>
                        <li>معدل العائد على الاستثمار</li>
                        <li>هامش الربح الإجمالي</li>
                        <li>هامش الربح الصافي</li>
                        <li>ربح السهم الواحد</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>تقييم السيولة:</h6>
                    <ul>
                        <li>النسبة الحالية</li>
                        <li>نسبة السيولة السريعة</li>
                        <li>نسبة النقدية</li>
                        <li>دورة التحويل النقدي</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-info">
        <h5><i class="fas fa-chart-bar"></i> مقارنة الأداء</h5>
        <p>يجب مقارنة أداء الشركة مع:</p>
        <ul class="mb-0">
            <li>أداء الشركة في السنوات السابقة</li>
            <li>أداء الشركات المنافسة في نفس القطاع</li>
            <li>متوسط أداء القطاع ككل</li>
            <li>المؤشرات الاقتصادية العامة</li>
        </ul>
    </div>
</div>

<div id="ratios" class="section mb-4">
    <h2 class="section-title">النسب المالية</h2>
    
    <p>النسب المالية هي أدوات مهمة لتحليل أداء الشركة ومقارنتها مع الشركات الأخرى.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h5><i class="fas fa-percentage"></i> نسب الربحية</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>معدل العائد على الأصول (ROA):</strong> صافي الربح ÷ إجمالي الأصول</li>
                        <li><strong>معدل العائد على حقوق المساهمين (ROE):</strong> صافي الربح ÷ حقوق المساهمين</li>
                        <li><strong>هامش الربح الصافي:</strong> صافي الربح ÷ صافي المبيعات</li>
                        <li><strong>ربح السهم الواحد (EPS):</strong> صافي الربح ÷ عدد الأسهم</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    <h5><i class="fas fa-balance-scale"></i> نسب السيولة</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>النسبة الحالية:</strong> الأصول المتداولة ÷ الخصوم المتداولة</li>
                        <li><strong>نسبة السيولة السريعة:</strong> (الأصول المتداولة - المخزون) ÷ الخصوم المتداولة</li>
                        <li><strong>نسبة النقدية:</strong> النقد والأوراق المالية ÷ الخصوم المتداولة</li>
                        <li><strong>نسبة رأس المال العامل:</strong> الأصول المتداولة - الخصوم المتداولة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header bg-warning">
            <h5><i class="fas fa-lightbulb"></i> نصائح للتحليل</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>عند تحليل النسب:</h6>
                    <ul>
                        <li>قارن النسب مع السنوات السابقة</li>
                        <li>قارن مع متوسط القطاع</li>
                        <li>انظر للاتجاه العام</li>
                        <li>افهم أسباب التغيرات</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>تحذيرات:</h6>
                    <ul>
                        <li>لا تعتمد على نسبة واحدة فقط</li>
                        <li>انتبه للاختلافات بين القطاعات</li>
                        <li>راجع جودة البيانات المستخدمة</li>
                        <li>ضع في الاعتبار الظروف الاقتصادية</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>';

// Include template
include get_template_path('chapter_template.php');
?> 