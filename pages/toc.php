<?php
// Include configuration
require_once __DIR__ . '/../includes/config.php';

// Set page variables
$page_title = 'فهرس الكتاب - ' . SITE_NAME;
$page_description = 'فهرس شامل لجميع فصول كتاب المال والاستثمار في الأسواق المالية';
$page_keywords = 'فهرس, فصول, كتاب, استثمار, أسواق مالية';
$page_author = SITE_AUTHOR;
$page_url = get_page_url('pages/toc.php');
$current_page = 'toc';

// Include header
include get_include_file_path('header.php');
?>

<?php include get_include_file_path('navigation.php'); ?>

<main class="container my-4">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo get_page_url('index.php'); ?>">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">فهرس الكتاب</li>
                </ol>
            </nav>
            
            <header class="text-center mb-5">
                <h1 class="display-4">فهرس الكتاب</h1>
                <p class="lead"><?php echo SITE_NAME; ?></p>
                <p class="text-muted">بقلم: <?php echo SITE_AUTHOR; ?></p>
            </header>
            
            <div class="table-of-contents">
                <!-- المقدمات -->
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0"><i class="fas fa-book-open"></i> المقدمات</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="<?php echo get_page_url('pages/introduction.php'); ?>" class="text-decoration-none">
                                    <i class="fas fa-file-text text-primary"></i> المقدمة الأولى
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="<?php echo get_page_url('pages/introduction-2.php'); ?>" class="text-decoration-none">
                                    <i class="fas fa-book-open text-primary"></i> المقدمة الثانية
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="<?php echo get_page_url('pages/introduction-3.php'); ?>" class="text-decoration-none">
                                    <i class="fas fa-book text-primary"></i> المقدمة الثالثة
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- الفصول -->
                <?php if (isset($chapters) && is_array($chapters)): ?>
                    <?php foreach ($chapters as $chapter_key => $chapter): ?>
                    <div class="card mb-4">
                        <div class="card-header bg-secondary text-white">
                            <h3 class="mb-0"><i class="fas fa-chapter"></i> <?php echo sanitize_output($chapter['title']); ?></h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <?php foreach ($chapter['parts'] as $part_key => $part): ?>
                                <li class="mb-2">
                                    <a href="<?php echo $part['url']; ?>" class="text-decoration-none">
                                        <i class="fas fa-file-alt text-secondary"></i> <?php echo sanitize_output($part['title']); ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle"></i> لا توجد فصول متاحة حالياً.
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?php echo get_page_url('index.php'); ?>" class="btn btn-primary">
                    <i class="fas fa-home"></i> العودة للرئيسية
                </a>
            </div>
        </div>
    </div>
</main>

<?php include get_include_file_path('footer.php'); ?> 
