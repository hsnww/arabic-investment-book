<?php
$page_title = "الفصل العاشر - مؤشرات الأداء المالية (الجزء الثاني)";
$page_description = "تعرف على مؤشرات إدارة المديونية والربحية في تحليل الأداء المالي للشركات";
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
                <h2 class="h4 text-muted">الجزء الثاني: مؤشرات إدارة المديونية والربحية</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-danger me-2">إدارة المديونية</span>
                    <span class="badge bg-success me-2">الربحية</span>
                    <span class="badge bg-info">تحليل مالي</span>
                </div>
            </div>

            <!-- مؤشرات إدارة المديونية -->
            <div class="card mb-4">
                <div class="card-header bg-danger text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-balance-scale me-2"></i>
                        مؤشرات إدارة المديونية (Debt Management Ratios)
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        تقيس مؤشرات المديونية مدى اعتماد الشركة على الاقتراض في تمويل عملياتها، 
                        وقدرتها على الوفاء بالتزاماتها المالية طويلة الأجل.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-danger">
                                    <i class="fas fa-percentage me-2"></i>
                                    مركب المديونية (Debt Ratio)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    إجمالي المديونية ÷ إجمالي الأصول
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يوضح نسبة الأصول الممولة بالديون. 
                                    القيمة الأقل تشير إلى مخاطر أقل.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-danger">
                                    <i class="fas fa-chart-pie me-2"></i>
                                    مركب المديونية للملكية (Debt-to-Equity)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    إجمالي المديونية ÷ حقوق المساهمين
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقارن بين الديون وحقوق الملكية. 
                                    القيمة المثالية تتراوح بين 0.5 و 1.0.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-danger">
                                    <i class="fas fa-shield-alt me-2"></i>
                                    مركب تغطية الفائدة (Interest Coverage)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    الأرباح قبل الفائدة والضرائب ÷ مصروفات الفائدة
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يوضح عدد مرات تغطية الأرباح لمصروفات الفائدة. 
                                    القيمة الأعلى تشير إلى أمان أكبر.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-danger">
                                    <i class="fas fa-calculator me-2"></i>
                                    مركب تغطية خدمة الدين (Debt Service Coverage)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    صافي التشغيل ÷ إجمالي خدمة الدين
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس قدرة الشركة على سداد أصل الدين والفائدة. 
                                    القيمة المثالية 1.5 أو أعلى.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- مؤشرات الربحية -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-chart-line me-2"></i>
                        مؤشرات الربحية (Profitability Ratios)
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        مؤشرات الربحية هي الأهم في تقييم أداء الشركة، حيث تقيس قدرتها على تحقيق 
                        الأرباح من عملياتها وتوليد عوائد للمساهمين.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-success">
                                    <i class="fas fa-percentage me-2"></i>
                                    هامش الربح الإجمالي (Gross Profit Margin)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    (المبيعات - تكلفة البضاعة المباعة) ÷ المبيعات
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يوضح نسبة الربح من كل دولار مبيعات بعد خصم التكلفة المباشرة. 
                                    مؤشر على كفاءة الإنتاج.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-success">
                                    <i class="fas fa-chart-bar me-2"></i>
                                    هامش الربح الصافي (Net Profit Margin)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    صافي الربح ÷ صافي المبيعات
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يوضح نسبة الربح الصافي من المبيعات. 
                                    المؤشر الأهم لربحية الشركة.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-success">
                                    <i class="fas fa-coins me-2"></i>
                                    العائد على الأصول (ROA)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    صافي الربح ÷ إجمالي الأصول
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس كفاءة استخدام الأصول في توليد الأرباح. 
                                    القيمة الأعلى تشير إلى إدارة أفضل للأصول.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-success">
                                    <i class="fas fa-crown me-2"></i>
                                    العائد على حقوق المساهمين (ROE)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    صافي الربح ÷ حقوق المساهمين
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس العائد على استثمار المساهمين. 
                                    المؤشر الأهم للمساهمين.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- تحليل متقدم للربحية -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-microscope me-2"></i>
                        تحليل متقدم للربحية
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-info">
                                    <i class="fas fa-chart-area me-2"></i>
                                    هامش الربح التشغيلي (Operating Margin)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    الربح التشغيلي ÷ صافي المبيعات
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس ربحية العمليات الأساسية قبل الفوائد والضرائب. 
                                    مؤشر على كفاءة العمليات.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-info">
                                    <i class="fas fa-chart-line me-2"></i>
                                    العائد على رأس المال المستثمر (ROIC)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    صافي الربح التشغيلي ÷ رأس المال المستثمر
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس العائد على رأس المال المستثمر في العمليات. 
                                    مهم لتقييم كفاءة الاستثمار.
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
                            مثال: شركة إنتل (Intel) - مؤشرات الربحية
                        </h6>
                        <ul class="list-unstyled">
                            <li><strong>هامش الربح الصافي:</strong> 25.3% (ممتاز)</li>
                            <li><strong>العائد على الأصول:</strong> 18.7% (جيد جداً)</li>
                            <li><strong>العائد على حقوق المساهمين:</strong> 28.5% (ممتاز)</li>
                            <li><strong>مركب المديونية:</strong> 0.15 (منخفض جداً)</li>
                            <li><strong>تغطية الفائدة:</strong> 45.2 مرة (ممتاز)</li>
                        </ul>
                    </div>
                    
                    <div class="alert alert-light mt-3">
                        <h6 class="alert-heading">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            نقاط مهمة في تحليل الربحية
                        </h6>
                        <ul class="mb-0">
                            <li>مقارنة هامش الربح مع المنافسين في نفس القطاع</li>
                            <li>تتبع الاتجاهات عبر الزمن لرصد التحسينات أو التدهور</li>
                            <li>انتبه للتقلبات الموسمية في بعض القطاعات</li>
                            <li>تحليل أسباب التغيرات في هامش الربح</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- التنقل بين الأجزاء -->
            <div class="navigation-buttons d-flex justify-content-between mt-5">
                <a href="chapter10_part1.php" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-right me-2"></i>
                    الجزء الأول: السيولة والأصول
                </a>
                <a href="chapter10_part3.php" class="btn btn-primary">
                    الجزء الثالث: القيمة السوقية والتدفق النقدي
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