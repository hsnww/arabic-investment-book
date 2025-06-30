<?php
$page_title = "الفصل العاشر - مؤشرات الأداء المالية (الجزء الأول)";
$page_description = "تعرف على مؤشرات السيولة وإدارة الأصول في تحليل الأداء المالي للشركات";
include_once '../../includes/header.php';
include_once '../../includes/navigation.php';
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <!-- عنوان الفصل -->
            <div class="chapter-header text-center mb-5">
                <h1 class="display-4 text-primary mb-3">
                    <i class="fas fa-chart-line me-3"></i>
                    الفصل العاشر: مؤشرات الأداء المالية
                </h1>
                <h2 class="h4 text-muted">الجزء الأول: مؤشرات السيولة وإدارة الأصول</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-success me-2">تحليل مالي</span>
                    <span class="badge bg-info me-2">مؤشرات الأداء</span>
                    <span class="badge bg-warning">السيولة والأصول</span>
                </div>
            </div>

            <!-- مقدمة الفصل -->
            <div class="alert alert-info" role="alert">
                <h5 class="alert-heading">
                    <i class="fas fa-info-circle me-2"></i>
                    مقدمة في مؤشرات الأداء المالية
                </h5>
                <p class="mb-0">
                    مؤشرات الأداء المالية هي أدوات أساسية لتقييم أداء الشركات ومقارنتها مع المنافسين. 
                    تساعد هذه المؤشرات في فهم قدرة الشركة على الوفاء بالتزاماتها وإدارة أصولها بكفاءة.
                </p>
            </div>

            <!-- مؤشرات السيولة -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-money-bill-wave me-2"></i>
                        مؤشرات السيولة (Liquidity Ratios)
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        تقيس مؤشرات السيولة قدرة الشركة على الوفاء بالتزاماتها النقدية عند الحاجة، 
                        وتشمل الالتزامات قصيرة الأجل والديون المستحقة.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-primary">
                                    <i class="fas fa-calculator me-2"></i>
                                    مركب السيولة الجارية (Current Ratio)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    الأصول الجارية ÷ الخصوم الجارية
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقارن بين الأصول الجارية والالتزامات قصيرة الأجل. 
                                    القيمة المثالية تكون 2:1 أو أعلى.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-primary">
                                    <i class="fas fa-tachometer-alt me-2"></i>
                                    مركب السيولة السريع (Quick Ratio)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    (الأصول الجارية - المخزون) ÷ الخصوم الجارية
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس السيولة الفورية باستثناء المخزون. 
                                    يعطي صورة أكثر دقة للقدرة على السداد السريع.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- مؤشرات إدارة الأصول -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-cogs me-2"></i>
                        مؤشرات إدارة الأصول (Asset Management Ratios)
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        تقيس كفاءة الشركة في إدارة أصولها وتحويلها إلى مبيعات وأرباح، 
                        وتشمل إدارة المخزون والذمم المدينة والأصول الثابتة.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-success">
                                    <i class="fas fa-sync-alt me-2"></i>
                                    مركب دوران المخزون (Inventory Turnover)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    تكلفة البضاعة المباعة ÷ متوسط المخزون
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يوضح عدد مرات تجديد المخزون سنوياً. 
                                    القيمة الأعلى تشير إلى كفاءة أفضل في إدارة المخزون.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-success">
                                    <i class="fas fa-clock me-2"></i>
                                    فترة تحصيل الذمم المدينة (Days Sales Outstanding)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    الذمم المدينة ÷ (المبيعات السنوية ÷ 365)
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يوضح متوسط عدد الأيام اللازمة لتحصيل المبيعات. 
                                    القيمة الأقل تشير إلى كفاءة أفضل في التحصيل.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-success">
                                    <i class="fas fa-chart-bar me-2"></i>
                                    مركب كفاءة الأصول (Asset Turnover)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    صافي المبيعات ÷ إجمالي الأصول
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس مدى فعالية استخدام الأصول في توليد المبيعات. 
                                    القيمة الأعلى تشير إلى كفاءة أفضل في استخدام الأصول.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-success">
                                    <i class="fas fa-building me-2"></i>
                                    مركب دوران الأصول الثابتة (Fixed Asset Turnover)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    صافي المبيعات ÷ الأصول الثابتة
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس كفاءة استخدام الأصول الثابتة في توليد المبيعات. 
                                    مهم للشركات كثيفة رأس المال.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- أمثلة عملية -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-lightbulb me-2"></i>
                        أمثلة عملية وتطبيقات
                    </h3>
                </div>
                <div class="card-body">
                    <div class="example-box">
                        <h6 class="text-warning">
                            <i class="fas fa-industry me-2"></i>
                            مثال: شركة إنتل (Intel)
                        </h6>
                        <ul class="list-unstyled">
                            <li><strong>مركب السيولة الجارية:</strong> 2.5 (ممتاز)</li>
                            <li><strong>مركب السيولة السريع:</strong> 1.8 (جيد)</li>
                            <li><strong>دوران المخزون:</strong> 4.2 مرة سنوياً</li>
                            <li><strong>فترة التحصيل:</strong> 45 يوماً</li>
                        </ul>
                    </div>
                    
                    <div class="alert alert-light mt-3">
                        <h6 class="alert-heading">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            نقاط مهمة في التحليل
                        </h6>
                        <ul class="mb-0">
                            <li>يجب مقارنة المؤشرات مع الشركات المنافسة في نفس القطاع</li>
                            <li>القيم المطلقة لا تعطي صورة كاملة - المقارنة النسبية أهم</li>
                            <li>تتبع المؤشرات عبر الزمن لرصد الاتجاهات</li>
                            <li>انتبه للاختلافات في السياسات المحاسبية بين الشركات</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- التنقل بين الأجزاء -->
            <div class="navigation-buttons d-flex justify-content-between mt-5">
                <a href="chapter9_part4.php" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-right me-2"></i>
                    الفصل التاسع - الجزء الرابع
                </a>
                <a href="chapter10_part2.php" class="btn btn-primary">
                    الجزء الثاني: إدارة المديونية والربحية
                    <i class="fas fa-arrow-left ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.metric-card {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 15px;
    height: 100%;
}

.formula-box {
    background: #e3f2fd;
    border-left: 4px solid #2196f3;
    padding: 10px;
    margin: 10px 0;
    border-radius: 4px;
    font-family: 'Courier New', monospace;
}

.example-box {
    background: #fff3cd;
    border: 1px solid #ffeaa7;
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 15px;
}

.chapter-meta .badge {
    font-size: 0.8rem;
}

.navigation-buttons .btn {
    min-width: 200px;
}
</style>

<?php include_once '../../includes/footer.php'; ?> 