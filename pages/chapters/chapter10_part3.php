<?php
$page_title = "الفصل العاشر - مؤشرات الأداء المالية (الجزء الثالث)";
$page_description = "تعرف على مؤشرات القيمة السوقية والتدفق النقدي في تحليل الأداء المالي للشركات";
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
                <h2 class="h4 text-muted">الجزء الثالث: مؤشرات القيمة السوقية والتدفق النقدي</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-warning me-2">القيمة السوقية</span>
                    <span class="badge bg-info me-2">التدفق النقدي</span>
                    <span class="badge bg-primary">تقييم الشركات</span>
                </div>
            </div>

            <!-- مؤشرات القيمة السوقية -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-dollar-sign me-2"></i>
                        مؤشرات القيمة السوقية (Market Value Ratios)
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        تقيس مؤشرات القيمة السوقية العلاقة بين سعر السهم ومؤشرات الأداء المالي، 
                        وتساعد في تحديد ما إذا كان السهم مبالغ في تقييمه أو مقوم بأقل من قيمته.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-warning">
                                    <i class="fas fa-chart-line me-2"></i>
                                    مكرر الأرباح (P/E Ratio)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    سعر السهم ÷ ربح السهم
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يوضح عدد السنوات اللازمة لاسترداد الاستثمار من الأرباح. 
                                    القيمة الأقل تشير إلى سعر معقول.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-warning">
                                    <i class="fas fa-chart-bar me-2"></i>
                                    مكرر المبيعات (P/S Ratio)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    سعر السهم ÷ المبيعات للسهم
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس العلاقة بين سعر السهم والمبيعات. 
                                    مفيد للشركات التي لا تحقق أرباحاً.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-warning">
                                    <i class="fas fa-book me-2"></i>
                                    سعر السهم الدفتري (Book Value)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    حقوق المساهمين ÷ عدد الأسهم
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> القيمة المحاسبية للسهم. 
                                    مقارنة السعر السوقي مع القيمة الدفترية.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-warning">
                                    <i class="fas fa-balance-scale me-2"></i>
                                    مركب السعر للقيمة الدفترية (P/B Ratio)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    سعر السهم ÷ القيمة الدفترية
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس مدى تثمين السوق للشركة مقارنة بقيمتها المحاسبية. 
                                    القيمة الأعلى تشير إلى توقعات نمو أعلى.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- مؤشرات التدفق النقدي -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-money-bill-wave me-2"></i>
                        مؤشرات التدفق النقدي (Cash Flow Ratios)
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        مؤشرات التدفق النقدي مهمة جداً لأنها تعكس الصحة النقدية الحقيقية للشركة، 
                        وتكشف عن قدرتها على توليد النقد من عملياتها.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-info">
                                    <i class="fas fa-chart-area me-2"></i>
                                    التدفق النقدي الحر (Free Cash Flow)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    التدفق النقدي التشغيلي - المصروفات الرأسمالية
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> النقد المتاح بعد تغطية الاستثمارات الضرورية. 
                                    مؤشر مهم لصحة الشركة المالية.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-info">
                                    <i class="fas fa-chart-line me-2"></i>
                                    مكرر التدفق النقدي (P/CF Ratio)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    سعر السهم ÷ التدفق النقدي للسهم
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس العلاقة بين سعر السهم والتدفق النقدي. 
                                    القيمة الأقل تشير إلى تقييم معقول.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-info">
                                    <i class="fas fa-percentage me-2"></i>
                                    هامش التدفق النقدي (Cash Flow Margin)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    التدفق النقدي التشغيلي ÷ صافي المبيعات
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يوضح نسبة النقد المحقق من كل دولار مبيعات. 
                                    مؤشر على جودة الأرباح.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="metric-card">
                                <h6 class="text-info">
                                    <i class="fas fa-coins me-2"></i>
                                    العائد على التدفق النقدي (Cash Flow Return)
                                </h6>
                                <div class="formula-box">
                                    <strong>الصيغة:</strong><br>
                                    التدفق النقدي الحر ÷ رأس المال المستثمر
                                </div>
                                <p class="mt-2">
                                    <strong>التفسير:</strong> يقيس العائد النقدي على رأس المال المستثمر. 
                                    مؤشر مهم للمستثمرين.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- مؤشر PEG -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-chart-pie me-2"></i>
                        مؤشر PEG (Price/Earnings to Growth)
                    </h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        مؤشر PEG هو تحسين لمكرر الأرباح التقليدي، حيث يأخذ في الاعتبار معدل نمو الأرباح المتوقع.
                    </p>
                    
                    <div class="metric-card">
                        <h6 class="text-primary">
                            <i class="fas fa-calculator me-2"></i>
                            صيغة حساب مؤشر PEG
                        </h6>
                        <div class="formula-box">
                            <strong>الصيغة:</strong><br>
                            مكرر الأرباح ÷ معدل نمو الأرباح السنوي
                        </div>
                        <div class="mt-3">
                            <h6 class="text-primary">تفسير القيم:</h6>
                            <ul class="list-unstyled">
                                <li><strong>PEG < 1:</strong> السهم مقوم بأقل من قيمته (فرصة شراء)</li>
                                <li><strong>PEG = 1:</strong> السهم مقوم بشكل عادل</li>
                                <li><strong>PEG > 1:</strong> السهم مبالغ في تقييمه</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- أمثلة عملية -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-lightbulb me-2"></i>
                        أمثلة عملية وتطبيقات
                    </h3>
                </div>
                <div class="card-body">
                    <div class="example-box">
                        <h6 class="text-success">
                            <i class="fas fa-industry me-2"></i>
                            مثال: شركة إنتل (Intel) - مؤشرات القيمة السوقية
                        </h6>
                        <ul class="list-unstyled">
                            <li><strong>مكرر الأرباح (P/E):</strong> 15.2 (معقول)</li>
                            <li><strong>مكرر المبيعات (P/S):</strong> 3.8 (مرتفع نسبياً)</li>
                            <li><strong>مركب السعر للقيمة الدفترية (P/B):</strong> 2.8 (معقول)</li>
                            <li><strong>مكرر التدفق النقدي (P/CF):</strong> 12.5 (جيد)</li>
                            <li><strong>مؤشر PEG:</strong> 0.8 (مقوم بأقل من قيمته)</li>
                        </ul>
                    </div>
                    
                    <div class="alert alert-light mt-3">
                        <h6 class="alert-heading">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            نقاط مهمة في تحليل القيمة السوقية
                        </h6>
                        <ul class="mb-0">
                            <li>مقارنة المؤشرات مع الشركات المنافسة في نفس القطاع</li>
                            <li>انتبه للاختلافات في السياسات المحاسبية</li>
                            <li>التدفق النقدي الحر مؤشر أفضل من الأرباح المحاسبية</li>
                            <li>مؤشر PEG مفيد للشركات النامية</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- الخلاصة -->
            <div class="card mb-4">
                <div class="card-header bg-dark text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-clipboard-check me-2"></i>
                        خلاصة الفصل العاشر
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-dark">المؤشرات الأساسية:</h6>
                            <ul class="list-unstyled">
                                <li>✓ مؤشرات السيولة (Current Ratio, Quick Ratio)</li>
                                <li>✓ مؤشرات إدارة الأصول (Asset Turnover, Inventory Turnover)</li>
                                <li>✓ مؤشرات المديونية (Debt Ratio, Interest Coverage)</li>
                                <li>✓ مؤشرات الربحية (ROE, ROA, Profit Margins)</li>
                                <li>✓ مؤشرات القيمة السوقية (P/E, P/B, P/S)</li>
                                <li>✓ مؤشرات التدفق النقدي (FCF, P/CF)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-dark">نقاط التحليل المهمة:</h6>
                            <ul class="list-unstyled">
                                <li>✓ المقارنة النسبية مع المنافسين</li>
                                <li>✓ تتبع الاتجاهات عبر الزمن</li>
                                <li>✓ فهم طبيعة القطاع والصناعة</li>
                                <li>✓ عدم الاعتماد على مؤشر واحد</li>
                                <li>✓ أهمية التدفق النقدي الحر</li>
                                <li>✓ مراعاة الظروف الاقتصادية</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- التنقل بين الأجزاء -->
            <div class="navigation-buttons d-flex justify-content-between mt-5">
                <a href="chapter10_part2.php" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-right me-2"></i>
                    الجزء الثاني: المديونية والربحية
                </a>
                <a href="chapter11_part1.php" class="btn btn-primary">
                    الفصل الحادي عشر: تحليل المخاطر
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
    background: #d4edda;
    border: 1px solid #c3e6cb;
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