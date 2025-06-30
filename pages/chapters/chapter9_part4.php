<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Page configuration
$page_title = 'الفصل التاسع: التحليل الأساسي للأسهم - الجزء الرابع';
$page_description = 'الفصل التاسع من كتاب المال والاستثمار في الأسواق المالية - طرق تقييم الأسهم وخلاصة الفصل';
$page_keywords = 'تقييم الأسهم, السعر المستهدف, التحليل الأساسي, خلاصة الفصل التاسع';
$page_url = get_page_url('pages/chapters/chapter9_part4.php');
$chapter_title = 'الفصل التاسع: التحليل الأساسي للأسهم';
$current_page = 'chapter9_part4';

// Navigation
$prev_chapter = get_page_url('pages/chapters/chapter9_part3.php');
$next_chapter = get_page_url('pages/chapters/chapter10_part1.php');

// Table of contents for this part
$table_of_contents = '
<ul class="list-unstyled">
    <li><i class="fas fa-angle-left"></i> <a href="#valuation-methods">طرق تقييم الأسهم</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#target-price">حساب السعر المستهدف</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#practical-examples">أمثلة عملية</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#summary">خلاصة الفصل</a></li>
</ul>';

// Chapter content
$chapter_content = '
<div id="valuation-methods" class="section mb-4">
    <h2 class="section-title">طرق تقييم الأسهم</h2>
    
    <p class="lead">تقييم الأسهم هو عملية تحديد القيمة العادلة للسهم بناءً على تحليل شامل للشركة والقطاع والاقتصاد.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    <h5><i class="fas fa-calculator"></i> الطرق الكمية</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>نسبة السعر إلى الأرباح (P/E):</strong> سعر السهم ÷ ربح السهم الواحد</li>
                        <li><strong>نسبة السعر إلى القيمة الدفترية (P/B):</strong> سعر السهم ÷ القيمة الدفترية للسهم</li>
                        <li><strong>نسبة السعر إلى المبيعات (P/S):</strong> سعر السهم ÷ إيرادات السهم الواحد</li>
                        <li><strong>نسبة السعر إلى التدفق النقدي (P/CF):</strong> سعر السهم ÷ التدفق النقدي للسهم</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h5><i class="fas fa-chart-line"></i> الطرق النوعية</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>جودة الإدارة:</strong> خبرة وقدرة فريق الإدارة</li>
                        <li><strong>الموقع التنافسي:</strong> حصة السوق والعلامة التجارية</li>
                        <li><strong>نموذج الأعمال:</strong> استدامة واستقرار الإيرادات</li>
                        <li><strong>الابتكار والتطوير:</strong> القدرة على التكيف والنمو</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-info">
        <h5><i class="fas fa-lightbulb"></i> نصائح للتقييم</h5>
        <p>لا تعتمد على طريقة واحدة فقط. استخدم مجموعة من الطرق الكمية والنوعية للحصول على تقييم شامل ودقيق.</p>
    </div>
</div>

<div id="target-price" class="section mb-4">
    <h2 class="section-title">حساب السعر المستهدف</h2>
    
    <p>السعر المستهدف هو السعر المتوقع للسهم بناءً على التحليل الأساسي والتوقعات المستقبلية.</p>
    
    <div class="card mb-3">
        <div class="card-header bg-warning">
            <h5><i class="fas fa-bullseye"></i> خطوات حساب السعر المستهدف</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>الخطوة الأولى: تحليل الأرباح المستقبلية</h6>
                    <ol>
                        <li>دراسة نمو المبيعات التاريخي</li>
                        <li>تحليل هامش الربح</li>
                        <li>توقع الأرباح المستقبلية</li>
                        <li>تحديد معدل النمو المتوقع</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h6>الخطوة الثانية: تحديد مضاعف التقييم</h6>
                    <ol>
                        <li>مقارنة مع متوسط القطاع</li>
                        <li>مراعاة معدل النمو</li>
                        <li>تقييم المخاطر</li>
                        <li>ضبط المضاعف حسب الظروف</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h6><i class="fas fa-plus"></i> العوامل الإيجابية</h6>
                </div>
                <div class="card-body">
                    <ul>
                        <li>نمو قوي في المبيعات</li>
                        <li>تحسن في هوامش الربح</li>
                        <li>إدارة قوية ومحترمة</li>
                        <li>موقع تنافسي قوي</li>
                        <li>قطاع نامي ومستقر</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-danger text-white">
                    <h6><i class="fas fa-minus"></i> العوامل السلبية</h6>
                </div>
                <div class="card-body">
                    <ul>
                        <li>انخفاض في المبيعات</li>
                        <li>تراجع في هوامش الربح</li>
                        <li>مشاكل إدارية</li>
                        <li>منافسة شديدة</li>
                        <li>قطاع متدهور</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="practical-examples" class="section mb-4">
    <h2 class="section-title">أمثلة عملية</h2>
    
    <p>دعنا نطبق ما تعلمناه على مثال عملي لتقييم شركة افتراضية.</p>
    
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            <h5><i class="fas fa-building"></i> مثال: شركة التقنية المتقدمة</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>البيانات الأساسية:</h6>
                    <ul>
                        <li>سعر السهم الحالي: $50</li>
                        <li>ربح السهم الواحد: $2.50</li>
                        <li>نسبة P/E الحالية: 20</li>
                        <li>معدل النمو المتوقع: 15% سنوياً</li>
                        <li>متوسط P/E للقطاع: 25</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>التقييم:</h6>
                    <ul>
                        <li>الأرباح المتوقعة بعد سنة: $2.88</li>
                        <li>مضاعف P/E المستهدف: 22 (أقل من القطاع لمراعاة المخاطر)</li>
                        <li>السعر المستهدف: $2.88 × 22 = $63.36</li>
                        <li>إمكانية الربح: 26.7%</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-warning">
        <h5><i class="fas fa-exclamation-triangle"></i> تحذيرات مهمة</h5>
        <ul class="mb-0">
            <li>التوقعات قد لا تتحقق</li>
            <li>الظروف الاقتصادية قد تتغير</li>
            <li>المنافسة قد تزداد</li>
            <li>المخاطر غير المتوقعة قد تحدث</li>
        </ul>
    </div>
</div>

<div id="summary" class="section mb-4">
    <h2 class="section-title">خلاصة الفصل</h2>
    
    <p class="lead">لقد تعلمنا في هذا الفصل أساسيات التحليل الأساسي للأسهم وكيفية تقييم الشركات.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h5><i class="fas fa-check-circle"></i> ما تعلمناه</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>أهمية التحليل الأساسي</li>
                        <li>قراءة القوائم المالية</li>
                        <li>فهم أنواع الأسهم</li>
                        <li>حساب النسب المالية</li>
                        <li>تقييم الشركات</li>
                        <li>حساب السعر المستهدف</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    <h5><i class="fas fa-lightbulb"></i> نصائح للنجاح</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>ادرس الشركة بعمق</li>
                        <li>قارن مع المنافسين</li>
                        <li>راقب الاتجاهات</li>
                        <li>كن صبوراً</li>
                        <li>استمر في التعلم</li>
                        <li>لا تستثمر أكثر مما تستطيع خسارته</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5><i class="fas fa-graduation-cap"></i> الرسالة الأساسية</h5>
        </div>
        <div class="card-body">
            <p>التحليل الأساسي هو أداة قوية تساعد المستثمر على اتخاذ قرارات مدروسة ومستنيرة. لكن تذكر أن الاستثمار في الأسهم ينطوي على مخاطر، وأن النتائج السابقة لا تضمن النتائج المستقبلية.</p>
            <p>المفتاح للنجاح في الاستثمار هو الجمع بين التحليل الأساسي الجيد، والصبر، والتنويع، والتعلم المستمر.</p>
        </div>
    </div>
    
    <div class="alert alert-success">
        <h5><i class="fas fa-star"></i> مبروك!</h5>
        <p>لقد أكملت دراسة الفصل التاسع في التحليل الأساسي للأسهم. أنت الآن مجهز بالمعرفة الأساسية لتقييم الشركات واتخاذ قرارات استثمارية مدروسة.</p>
    </div>
</div>';

// Include template
include get_template_path('chapter_template.php');
?> 