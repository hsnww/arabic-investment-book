<?php
$page_title = "الفصل الثاني عشر - التحليل الفني للأسهم (الجزء الأول)";
$page_description = "مقدمة في التحليل الفني للأسهم، نظرية داو، أنواع الرسوم البيانية، والاتجاهات";
$current_chapter = 12;
$current_part = 1;
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
                <h2 class="h4 text-muted">الجزء الأول: مقدمة، نظرية داو، الرسوم البيانية والاتجاهات</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-info me-2">تحليل فني</span>
                    <span class="badge bg-success">مقدمة وأساسيات</span>
                </div>
            </div>

            <!-- مقدمة الفصل -->
            <div class="alert alert-info" role="alert">
                <h5 class="alert-heading">
                    <i class="fas fa-info-circle me-2"></i>
                    مقدمة في التحليل الفني للأسهم
                </h5>
                <p class="mb-0">
                    التحليل الفني هو دراسة حركة أسعار الأسهم وكميات التداول بهدف التنبؤ باتجاه الأسعار في المستقبل. يركز على الرسوم البيانية والمؤشرات الفنية، ويعتمد على مبدأ أن الأسعار تعكس جميع المعلومات المتاحة وأنماطها تتكرر عبر الزمن.
                </p>
            </div>

            <!-- ما هو التحليل الفني -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-search-dollar me-2"></i>
                        ما هو التحليل الفني؟
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success me-2"></i> يعتمد على حركة الأسعار والبيانات التاريخية.</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> يستخدمه المضاربون والمستثمرون لتحديد نقاط الدخول والخروج.</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> يختلف عن التحليل الأساسي الذي يركز على أداء الشركة المالي والتشغيلي.</li>
                    </ul>
                </div>
            </div>

            <!-- نظرية داو -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-project-diagram me-2"></i>
                        نظرية داو
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-arrow-left text-primary me-2"></i> السوق يأخذ في الاعتبار جميع الأخبار والتوقعات.</li>
                        <li><i class="fas fa-arrow-left text-primary me-2"></i> حركة الأسعار تتبع اتجاهات (صاعدة، هابطة، أفقية) تستمر لفترات.</li>
                        <li><i class="fas fa-arrow-left text-primary me-2"></i> الاتجاه الرئيسي يتكون من ثلاث مراحل: التجميع، النمو، التصريف.</li>
                        <li><i class="fas fa-arrow-left text-primary me-2"></i> كمية التداول تؤكد الاتجاه: تزداد مع الصعود وتقل مع التصحيح.</li>
                    </ul>
                </div>
            </div>

            <!-- أنواع الرسوم البيانية -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-chart-bar me-2"></i>
                        أنواع الرسوم البيانية
                    </h3>
                </div>
                <div class="card-body">
                    <ul>
                        <li><b>الرسم الخطي:</b> يربط أسعار الإغلاق بخط بسيط، يعطي فكرة عامة عن حركة السهم.</li>
                        <li><b>رسم الأعمدة:</b> يظهر سعر الافتتاح، الإغلاق، أعلى وأدنى سعر لكل فترة.</li>
                        <li><b>رسم الشموع اليابانية:</b> يوضح نفس بيانات الأعمدة بشكل بصري جذاب، ويكشف أنماطاً مهمة.</li>
                    </ul>
                    <div class="alert alert-light mt-3">
                        تساعد الرسوم البيانية في تحديد الاتجاهات والمناطق المهمة للسهم.
                    </div>
                </div>
            </div>

            <!-- الاتجاهات في حركة الأسهم -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-arrows-alt-h me-2"></i>
                        الاتجاهات في حركة الأسهم
                    </h3>
                </div>
                <div class="card-body">
                    <ul>
                        <li><b>الاتجاه الصاعد:</b> قمم وقيعان متصاعدة، الطلب أكبر من العرض.</li>
                        <li><b>الاتجاه الهابط:</b> قمم وقيعان متناقصة، العرض أكبر من الطلب.</li>
                        <li><b>الاتجاه الأفقي:</b> حركة سعرية جانبية بين خطي دعم ومقاومة.</li>
                    </ul>
                    <div class="alert alert-light mt-3">
                        تحديد الاتجاه يساعد في اتخاذ قرارات الشراء والبيع وتقليل المخاطر.
                    </div>
                </div>
            </div>

            <!-- تنقل بين الأجزاء -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div></div>
                <a href="chapter12_part2.php" class="btn btn-primary">
                    التالي <i class="fas fa-arrow-left ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include_once '../../includes/footer.php'; ?> 