<?php
$page_title = "الفصل الحادي عشر - الجزء الأول: المؤشرات الاقتصادية والمالية الأساسية";
$page_description = "تعرف على أهم المؤشرات الاقتصادية والمالية التي تؤثر على الأسواق المالية، بما في ذلك الناتج المحلي الإجمالي والتضخم وعرض النقود";
$current_chapter = 11;
$current_part = 1;
$total_parts = 3;

include_once '../../includes/header.php';
include_once '../../includes/navigation.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <!-- عنوان الفصل -->
            <div class="chapter-header text-center mb-5">
                <h1 class="display-4 text-primary mb-3">
                    <i class="fas fa-chart-line me-3"></i>
                    الفصل الحادي عشر
                </h1>
                <h2 class="h3 text-secondary">متابعة المؤشرات المالية والاقتصادية</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-info me-2">الجزء الأول من ثلاثة</span>
                    <span class="badge bg-success">المؤشرات الأساسية</span>
                </div>
            </div>

            <!-- مقدمة الفصل -->
            <div class="alert alert-info" role="alert">
                <h5 class="alert-heading">
                    <i class="fas fa-lightbulb me-2"></i>
                    مقدمة الفصل
                </h5>
                <p class="mb-0">
                    في هذا الفصل نتعرف على أهم المؤشرات الاقتصادية والمالية التي يجب على المستثمر متابعتها، 
                    وكيفية تأثيرها على حركة الأسواق المالية والأسهم.
                </p>
            </div>

            <!-- الأسئلة الأساسية -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-question-circle me-2"></i>
                        الأسئلة الأساسية في هذا الفصل
                    </h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-arrow-left text-primary me-2"></i>
                            هل نستطيع الحصول على مؤشر من خلاله نستطيع التنبؤ بحالة السوق في المستقبل؟
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-arrow-left text-primary me-2"></i>
                            ماذا على المستثمر متابعة التطورات الاقتصادية؟
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-arrow-left text-primary me-2"></i>
                            ما هي المؤشرات الاقتصادية التي لها تأثير كبير على تحركات الأسهم؟
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-arrow-left text-primary me-2"></i>
                            ما هو دور البنك المركزي وماذا يجب علينا متابعته؟
                        </li>
                    </ul>
                </div>
            </div>

            <!-- المؤشرات السباقة واللحاقة -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-forward me-2"></i>
                        المؤشرات السباقة واللحاقة
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-success">
                                <div class="card-header bg-success text-white">
                                    <h6 class="mb-0">المؤشرات السباقة (Leading Indicators)</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        مؤشرات تفيد في معرفة ما سوف يحدث في المستقبل، فهي تسبق حدوث الأشياء 
                                        من ارتفاع أو هبوط في الأسعار.
                                    </p>
                                    <div class="alert alert-success small">
                                        <strong>مثال:</strong> كثرة طلبات تصاريح إنشاء مصانع في قرية ما قد يكون 
                                        دليل سباق لازدهار هذه القرية.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-warning">
                                <div class="card-header bg-warning text-dark">
                                    <h6 class="mb-0">المؤشرات اللحاقة (Lagging Indicators)</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        مؤشرات تأتي بعد حدوث الشيء أو أثناء حدوثه، لذا فإن فائدتها محدودة 
                                        لأنها لا تسمح للمحلل بمعرفة اتجاه السعر بوقت كاف.
                                    </p>
                                    <div class="alert alert-warning small">
                                        <strong>مثال:</strong> إعلان الأرباح للشركة، حيث يرتفع السعر بسرعة 
                                        لا تسمح للمستثمر بالاستفادة من المعلومة.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- الناتج المحلي الإجمالي -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-chart-bar me-2"></i>
                        الناتج المحلي الإجمالي (GDP)
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6>تعريف الناتج المحلي الإجمالي:</h6>
                            <p>
                                القيمة الإجمالية لجميع ما ينتجه الاقتصاد من سلع وخدمات في عام واحد، 
                                ويشمل القيمة الإجمالية لكل ما تم صناعته من قبل الشركات أو الحكومة أو الأفراد.
                            </p>
                            <div class="alert alert-info">
                                <strong>الفرق بين GDP و GNP:</strong>
                                <ul class="mb-0 mt-2">
                                    <li><strong>GDP:</strong> لا يشمل ما تم إنتاجه خارج البلاد</li>
                                    <li><strong>GNP:</strong> يشمل قيمة كافة المنتجات التي تخص البلاد سواء أنتجت داخل البلاد أو خارجها</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h6 class="text-primary">أكبر اقتصادات العالم</h6>
                                    <div class="mt-3">
                                        <div class="d-flex justify-content-between">
                                            <span>الولايات المتحدة</span>
                                            <span class="badge bg-primary">~11 تريليون دولار</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span>الصين</span>
                                            <span class="badge bg-success">~4 تريليون دولار</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span>اليابان</span>
                                            <span class="badge bg-info">~3 تريليون دولار</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- التضخم -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        التضخم وأثره على الأسواق
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>ما هو التضخم؟</h6>
                            <p>
                                ارتفاع مستمر في أسعار السلع والخدمات، مما يؤدي إلى انخفاض القوة الشرائية للنقود.
                            </p>
                            <div class="alert alert-warning">
                                <strong>تأثير التضخم على الأسواق:</strong>
                                <ul class="mb-0 mt-2">
                                    <li>ارتفاع تكلفة الإنتاج</li>
                                    <li>تدني النتائج المالية للشركات</li>
                                    <li>هبوط أسعار الأسهم</li>
                                    <li>تدخل البنك المركزي لرفع أسعار الفائدة</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>مؤشر أسعار المستهلكين (CPI)</h6>
                            <p>
                                مؤشر مهم لقياس التضخم، يحسب بمقارنة أسعار سلة معينة من المواد الاستهلاكية 
                                بالأسعار السائدة في عام الأساس.
                            </p>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="text-primary">مكونات سلة CPI:</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <small>• الإسكان (42%)</small><br>
                                            <small>• المواد الغذائية (15%)</small><br>
                                            <small>• المواصلات (17%)</small>
                                        </div>
                                        <div class="col-6">
                                            <small>• الرعاية الصحية (6%)</small><br>
                                            <small>• الملبس (4%)</small><br>
                                            <small>• الترفيه (4%)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- عرض النقود -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-money-bill-wave me-2"></i>
                        عرض النقود (Money Supply)
                    </h5>
                </div>
                <div class="card-body">
                    <p>
                        يعبر عن كمية النقود المتداولة في البلاد، بما في ذلك الأشكال المختلفة للعملة 
                        المتواجدة في أيدي عامة الناس، وما يوجد من نقود في الحسابات المصرفية.
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-info">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0">M1</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small mb-0">
                                        النقود المتداولة + الودائع الجارية
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-info">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0">M2</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small mb-0">
                                        M1 + الودائع الادخارية + الودائع الزمنية الصغيرة
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-info">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0">M3</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small mb-0">
                                        M2 + الودائع الزمنية الكبيرة + شهادات الإيداع
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-info mt-3">
                        <strong>تأثير عرض النقود على الأسواق:</strong>
                        كلما زادت كمية النقد كلما زادت القوة الشرائية لدى الناس، 
                        الأمر الذي غالباً يؤدي إلى ارتفاع أسعار الأسهم.
                    </div>
                </div>
            </div>

            <!-- التنقل بين الأجزاء -->
            <div class="d-flex justify-content-between mt-5">
                <a href="../chapters/chapter10_part3.php" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-right me-2"></i>
                    الفصل العاشر - الجزء الثالث
                </a>
                <a href="chapter11_part2.php" class="btn btn-primary">
                    الجزء الثاني
                    <i class="fas fa-arrow-left ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'; ?> 