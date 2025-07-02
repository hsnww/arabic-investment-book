<?php
define('SECURE_ACCESS', true);
require_once '../includes/config.php';
require_once '../includes/header.php';
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-5">خريطة الموقع</h1>
            <p class="text-center mb-4">دليل شامل لجميع صفحات كتاب المال والاستثمار في الأسواق المالية</p>
            
            <!-- الصفحات الرئيسية -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h3><i class="fas fa-home"></i> الصفحات الرئيسية</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="<?php echo BASE_URL; ?>/" class="text-decoration-none">
                                        <i class="fas fa-home text-primary"></i> الصفحة الرئيسية
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo BASE_URL; ?>/pages/toc.php" class="text-decoration-none">
                                        <i class="fas fa-list text-primary"></i> فهرس الكتاب
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href="<?php echo BASE_URL; ?>/pages/introduction.php" class="text-decoration-none">
                                        <i class="fas fa-file-text text-primary"></i> المقدمة الأولى
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo BASE_URL; ?>/pages/introduction-2.php" class="text-decoration-none">
                                        <i class="fas fa-book-open text-primary"></i> المقدمة الثانية
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="<?php echo BASE_URL; ?>/pages/introduction-3.php" class="text-decoration-none">
                                        <i class="fas fa-book text-primary"></i> المقدمة الثالثة
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- فصول الكتاب -->
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h3><i class="fas fa-book"></i> فصول الكتاب</h3>
                </div>
                <div class="card-body">
                    <?php foreach ($chapters as $chapter_key => $chapter): ?>
                    <div class="chapter-section mb-4">
                        <h4 class="text-success border-bottom pb-2">
                            <i class="fas fa-chapter"></i> <?php echo $chapter['title']; ?>
                        </h4>
                        <div class="row">
                            <?php foreach ($chapter['parts'] as $part_key => $part): ?>
                            <div class="col-md-6 col-lg-4 mb-2">
                                <a href="<?php echo $part['url']; ?>" class="text-decoration-none">
                                    <i class="fas fa-file-alt text-success"></i> <?php echo $part['title']; ?>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- معلومات إضافية -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h5><i class="fas fa-info-circle"></i> معلومات الموقع</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><strong>اسم الموقع:</strong> <?php echo SITE_NAME; ?></li>
                                <li><strong>المؤلف:</strong> <?php echo SITE_AUTHOR; ?></li>
                                <li><strong>الإصدار:</strong> <?php echo SITE_VERSION; ?></li>
                                <li><strong>عدد الفصول:</strong> <?php echo count($chapters); ?></li>
                                <li><strong>إجمالي الصفحات:</strong> 
                                    <?php 
                                    $total_pages = 0;
                                    foreach ($chapters as $chapter) {
                                        $total_pages += count($chapter['parts']);
                                    }
                                    echo $total_pages + 6; // +6 for main pages
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h5><i class="fas fa-search"></i> تحسين محركات البحث</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success"></i> خريطة موقع XML متاحة</li>
                                <li><i class="fas fa-check text-success"></i> هيكل URL منظم</li>
                                <li><i class="fas fa-check text-success"></i> عناوين وصفية</li>
                                <li><i class="fas fa-check text-success"></i> محتوى عربي محسن</li>
                                <li><i class="fas fa-check text-success"></i> تصميم متجاوب</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- روابط مفيدة -->
            <div class="card mt-4">
                <div class="card-header bg-secondary text-white">
                    <h5><i class="fas fa-link"></i> روابط مفيدة</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>خريطة الموقع للمحركات:</h6>
                            <a href="<?php echo BASE_URL; ?>/sitemap.xml" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-sitemap"></i> XML Sitemap
                            </a>
                        </div>
                        <div class="col-md-6">
                            <h6>فهرس الكتاب:</h6>
                            <a href="<?php echo BASE_URL; ?>/pages/toc.php" class="btn btn-sm btn-outline-success">
                                <i class="fas fa-list"></i> عرض الفهرس
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.chapter-section {
    border-left: 4px solid #28a745;
    padding-left: 15px;
    margin-bottom: 20px;
}

.chapter-section h4 {
    margin-bottom: 15px;
}

.chapter-section a:hover {
    color: #28a745 !important;
    text-decoration: underline !important;
}

.card {
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border: none;
}

.card-header {
    border-bottom: none;
}

.list-unstyled li {
    padding: 5px 0;
}

.list-unstyled a:hover {
    color: #007bff !important;
}
</style>

<?php require_once '../includes/footer.php'; ?> 