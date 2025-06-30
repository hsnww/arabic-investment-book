<?php
// Include configuration
require_once __DIR__ . '/includes/config.php';

// Set page variables
$page_title = SITE_NAME;
$page_description = SITE_DESCRIPTION;
$page_keywords = 'استثمار, أسواق مالية, أسهم, سندات, عملات, تحليل مالي, الدكتور فهد الحويماني';
$page_author = SITE_AUTHOR;
$page_url = BASE_URL;
$current_page = 'index';

// Include header
include get_include_file_path('header.php');
?>

<?php include get_include_file_path('navigation.php'); ?>

<main class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-5">
                <img src="<?php echo get_image_url('cover.png'); ?>" alt="غلاف الكتاب" class="img-fluid mb-4" style="max-width: 300px;">
                <h1 class="display-4"><?php echo SITE_NAME; ?></h1>
                <p class="lead"><?php echo SITE_AUTHOR; ?></p>
                <p class="text-muted">كتاب شامل عن الاستثمار في الأسواق المالية</p>
            </div>
            
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">مرحباً بك في كتاب المال والاستثمار</h2>
                            <p class="card-text">
                                هذا الكتاب يقدم دليلاً شاملاً للاستثمار في الأسواق المالية، من أساسيات الاستثمار 
                                إلى الاستراتيجيات المتقدمة. يغطي الكتاب جميع جوانب الاستثمار المالي بطريقة سهلة 
                                ومفهومة للجميع.
                            </p>
                            
                            <div class="text-center mt-4">
                                <a href="<?php echo get_page_url('pages/toc.php'); ?>" class="btn btn-primary btn-lg me-3">
                                    <i class="fas fa-list"></i> فهرس الكتاب
                                </a>
                                <a href="<?php echo get_page_url('pages/introduction.php'); ?>" class="btn btn-outline-primary btn-lg">
                                    <i class="fas fa-file-text"></i> المقدمة الأولى
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">تحليل الأسواق</h5>
                            <p class="card-text">تعلم كيفية تحليل الأسواق المالية واتخاذ قرارات استثمارية مدروسة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-shield-alt fa-3x text-success mb-3"></i>
                            <h5 class="card-title">إدارة المخاطر</h5>
                            <p class="card-text">اكتشف استراتيجيات إدارة المخاطر وحماية استثماراتك.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-graduation-cap fa-3x text-info mb-3"></i>
                            <h5 class="card-title">التعليم المستمر</h5>
                            <p class="card-text">احصل على المعرفة اللازمة للنجاح في عالم الاستثمار.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include get_include_file_path('footer.php'); ?> 