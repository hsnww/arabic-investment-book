<?php
$page_title = "الفصل الثاني عشر - التحليل الفني للأسهم (الجزء الثالث)";
$page_description = "النماذج السعرية والمؤشرات الفنية المتقدمة في التحليل الفني";
$current_chapter = 12;
$current_part = 3;
$total_parts = 3;

include_once '../../includes/header.php';
include_once '../../includes/navigation.php';
?>

<div class="container mt-5" style="direction: rtl;">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <!-- عنوان الفصل -->
            <div class="chapter-header text-center mb-5">
                <h1 class="display-4 text-primary mb-3">
                    <i class="fas fa-chart-area me-3"></i>
                    الفصل الثاني عشر: التحليل الفني للأسهم
                </h1>
                <h2 class="h4 text-muted">الجزء الثالث: النماذج السعرية والمؤشرات الفنية</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-info me-2">تحليل فني</span>
                    <span class="badge bg-danger">مستوى متقدم</span>
                </div>
            </div>

            <!-- مقدمة الفصل -->
            <div class="alert alert-info" role="alert">
                <h5 class="alert-heading">
                    <i class="fas fa-info-circle me-2"></i>
                    مقدمة الجزء الثالث
                </h5>
                <p class="mb-0">
                    في هذا الجزء نتعرف على النماذج السعرية المتقدمة مثل رأس وكتفين، والمؤشرات الفنية المختلفة التي تساعد في تحليل حركة الأسعار واتخاذ قرارات الاستثمار.
                </p>
            </div>

            <!-- النماذج السعرية -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-shapes me-2"></i>
                        النماذج السعرية (Price Patterns)
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-primary">
                                <div class="card-header bg-primary text-white">
                                    <h6 class="mb-0">نموذج رأس وكتفين</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        نموذج انعكاسي يتكون من ثلاث قمم، القمة الوسطى أعلى من القمتين الجانبيتين.
                                    </p>
                                    <div class="alert alert-primary small">
                                        <strong>التفسير:</strong> يشير إلى انعكاس الاتجاه من صاعد إلى هابط.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-success">
                                <div class="card-header bg-success text-white">
                                    <h6 class="mb-0">نموذج فنجان بعروة</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        نموذج استمراري يشبه شكل الفنجان مع عروة صغيرة على الجانب.
                                    </p>
                                    <div class="alert alert-success small">
                                        <strong>التفسير:</strong> يشير إلى استمرار الاتجاه الصاعد.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="card border-warning">
                                <div class="card-header bg-warning text-dark">
                                    <h6 class="mb-0">المثلث الصاعد</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        نموذج يتكون من قمم أفقية وقيعان صاعدة، يشير إلى استمرار الصعود.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-danger">
                                <div class="card-header bg-danger text-white">
                                    <h6 class="mb-0">المثلث الهابط</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        نموذج يتكون من قمم هابطة وقيعان أفقية، يشير إلى استمرار الهبوط.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- المؤشرات الفنية -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-chart-line me-2"></i>
                        المؤشرات الفنية (Technical Indicators)
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-info">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0">مؤشرات الاتجاه</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled small">
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> المتوسطات المتحركة</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> MACD</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> ADX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-warning">
                                <div class="card-header bg-warning text-dark">
                                    <h6 class="mb-0">مؤشرات الزخم</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled small">
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> RSI</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> Stochastic</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> Williams %R</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-success">
                                <div class="card-header bg-success text-white">
                                    <h6 class="mb-0">مؤشرات الحجم</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled small">
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> OBV</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> Volume Rate</li>
                                        <li><i class="fas fa-arrow-left text-primary me-2"></i> Money Flow</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- الشموع اليابانية -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-candle-stick me-2"></i>
                        الشموع اليابانية
                    </h3>
                </div>
                <div class="card-body">
                    <p>
                        الشموع اليابانية هي طريقة لتمثيل حركة السعر توضح سعر الافتتاح والإغلاق وأعلى وأدنى سعر.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="text-success">الشموع الصاعدة:</h6>
                                    <p class="small">
                                        جسم الشمعة أخضر أو أبيض، سعر الإغلاق أعلى من الافتتاح.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="text-danger">الشموع الهابطة:</h6>
                                    <p class="small">
                                        جسم الشمعة أحمر أو أسود، سعر الإغلاق أقل من الافتتاح.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- خلاصة الفصل -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-lightbulb me-2"></i>
                        خلاصة الفصل
                    </h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-success">
                        <h6 class="alert-heading">
                            <i class="fas fa-check-circle me-2"></i>
                            النقاط الأساسية
                        </h6>
                        <ul class="mb-0">
                            <li>التحليل الفني يعتمد على دراسة حركة الأسعار والأنماط المتكررة</li>
                            <li>خطوط الدعم والمقاومة تساعد في تحديد نقاط الدخول والخروج</li>
                            <li>النماذج السعرية والمؤشرات الفنية تزيد من دقة التحليل</li>
                            <li>يجب الجمع بين التحليل الأساسي والفني لنتائج أفضل</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- تنقل بين الأجزاء -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="chapter12_part2.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-right me-2"></i> السابق
                </a>
                <div></div>
            </div>
        </div>
    </div>
</div>
<?php include_once '../../includes/footer.php'; ?> 