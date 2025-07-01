<?php
$page_title = "الفصل الثاني عشر - التحليل الفني للأسهم (الجزء الثاني)";
$page_description = "الدعم والمقاومة، الفجوات، الانعكاسات، نسب فيبوناتشي في التحليل الفني";
$current_chapter = 12;
$current_part = 2;
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
                <h2 class="h4 text-muted">الجزء الثاني: الدعم والمقاومة، الفجوات، الانعكاسات، فيبوناتشي</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-info me-2">تحليل فني</span>
                    <span class="badge bg-warning">مستوى متقدم</span>
                </div>
            </div>

            <!-- مقدمة الفصل -->
            <div class="alert alert-info" role="alert">
                <h5 class="alert-heading">
                    <i class="fas fa-info-circle me-2"></i>
                    مقدمة الجزء الثاني
                </h5>
                <p class="mb-0">
                    في هذا الجزء نتعرف على المفاهيم المتقدمة في التحليل الفني: خطوط الدعم والمقاومة، الفجوات السعرية، انعكاسات الاتجاه، ونسب فيبوناتشي التي تساعد في تحديد مستويات الانعكاس.
                </p>
            </div>

            <!-- الدعم والمقاومة -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-shield-alt me-2"></i>
                        خطوط الدعم والمقاومة
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-primary">
                                <div class="card-header bg-primary text-white">
                                    <h6 class="mb-0">خط الدعم (Support)</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        مستوى سعري يمنع السهم من الانخفاض أكثر، حيث يزداد الطلب عند هذا المستوى.
                                    </p>
                                    <div class="alert alert-primary small">
                                        <strong>مثال:</strong> عندما ينخفض السهم إلى 50 دولار ويتوقف عن الانخفاض، يكون 50 دولار خط دعم.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-warning">
                                <div class="card-header bg-warning text-dark">
                                    <h6 class="mb-0">خط المقاومة (Resistance)</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        مستوى سعري يمنع السهم من الارتفاع أكثر، حيث يزداد العرض عند هذا المستوى.
                                    </p>
                                    <div class="alert alert-warning small">
                                        <strong>مثال:</strong> عندما يرتفع السهم إلى 100 دولار ويتوقف عن الارتفاع، يكون 100 دولار خط مقاومة.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- الفجوات السعرية -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-gap-chart me-2"></i>
                        الفجوات السعرية (Gaps)
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-success">
                                <div class="card-header bg-success text-white">
                                    <h6 class="mb-0">فجوة الانطلاق</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        تحدث عند بداية اتجاه جديد، تشير إلى قوة في الحركة.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-info">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0">فجوة المواصلة</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        تحدث في منتصف الاتجاه، تؤكد استمرار الحركة.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-danger">
                                <div class="card-header bg-danger text-white">
                                    <h6 class="mb-0">فجوة النهاية</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        تحدث في نهاية الاتجاه، تنذر بانعكاس قريب.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- انعكاسات الاتجاه -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-exchange-alt me-2"></i>
                        انعكاسات الاتجاه
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-arrow-left text-primary me-2"></i> تحدث عندما يتغير اتجاه السهم من صاعد إلى هابط أو العكس.</li>
                        <li><i class="fas fa-arrow-left text-primary me-2"></i> تظهر على شكل أنماط معينة مثل رأس وكتفين أو قمة مزدوجة.</li>
                        <li><i class="fas fa-arrow-left text-primary me-2"></i> يصاحبها عادة زيادة في حجم التداول.</li>
                        <li><i class="fas fa-arrow-left text-primary me-2"></i> تساعد في تحديد نقاط البيع أو الشراء.</li>
                    </ul>
                </div>
            </div>

            <!-- نسب فيبوناتشي -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-percentage me-2"></i>
                        نسب فيبوناتشي
                    </h3>
                </div>
                <div class="card-body">
                    <p>
                        نسب فيبوناتشي هي أرقام طبيعية تظهر في الطبيعة والأسواق المالية، وتساعد في تحديد مستويات الانعكاس.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="text-primary">النسب الأساسية:</h6>
                                    <ul class="list-unstyled">
                                        <li><strong>23.6%:</strong> أول مستوى تصحيح</li>
                                        <li><strong>38.2%:</strong> مستوى تصحيح متوسط</li>
                                        <li><strong>50.0%:</strong> مستوى التصحيح المتوسط</li>
                                        <li><strong>61.8%:</strong> مستوى التصحيح الذهبي</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="text-success">التطبيق العملي:</h6>
                                    <p class="small">
                                        عند انعكاس السهم من قمة، يمكن استخدام هذه النسب لتوقع مستويات الدعم المحتملة.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- تنقل بين الأجزاء -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="chapter12_part1.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-right me-2"></i> السابق
                </a>
                <a href="chapter12_part3.php" class="btn btn-primary">
                    التالي <i class="fas fa-arrow-left ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include_once '../../includes/footer.php'; ?> 