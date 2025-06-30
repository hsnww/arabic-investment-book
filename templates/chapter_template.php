<?php
// Include configuration
require_once __DIR__ . '/../includes/config.php';

// Set page variables
$page_title = isset($page_title) ? $page_title : 'الفصل';
$page_description = isset($page_description) ? $page_description : 'محتوى الفصل';
$page_keywords = isset($page_keywords) ? $page_keywords : 'فصل, محتوى, كتاب';
$page_author = isset($page_author) ? $page_author : SITE_AUTHOR;
$page_url = isset($page_url) ? $page_url : BASE_URL;
$chapter_title = isset($chapter_title) ? $chapter_title : 'عنوان الفصل';
$table_of_contents = isset($table_of_contents) ? $table_of_contents : '';
$chapter_content = isset($chapter_content) ? $chapter_content : '';
$prev_chapter = isset($prev_chapter) ? $prev_chapter : '';
$next_chapter = isset($next_chapter) ? $next_chapter : '';
$current_page = isset($current_page) ? $current_page : '';

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
                    <li class="breadcrumb-item"><a href="<?php echo get_page_url('pages/toc.php'); ?>">فهرس الكتاب</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo sanitize_output($chapter_title); ?></li>
                </ol>
            </nav>
            
            <article class="chapter-content">
                <header class="chapter-header mb-4">
                    <h1 class="display-5 text-center mb-3"><?php echo sanitize_output($chapter_title); ?></h1>
                    <div class="text-center text-muted">
                        <small>بقلم: <?php echo sanitize_output($page_author); ?></small>
                    </div>
                </header>
                
                <?php if (!empty($table_of_contents)): ?>
                <div class="table-of-contents mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="fas fa-list"></i> محتويات الفصل</h5>
                        </div>
                        <div class="card-body">
                            <?php echo $table_of_contents; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="chapter-text">
                    <?php echo $chapter_content; ?>
                </div>
            </article>
            
            <nav class="chapter-navigation mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <?php if (!empty($prev_chapter)): ?>
                        <a href="<?php echo $prev_chapter; ?>" class="btn btn-outline-primary">
                            <i class="fas fa-chevron-right"></i> الفصل السابق
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 text-end">
                        <?php if (!empty($next_chapter)): ?>
                        <a href="<?php echo $next_chapter; ?>" class="btn btn-outline-primary">
                            الفصل التالي <i class="fas fa-chevron-left"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</main>

<?php include get_include_file_path('footer.php'); ?> 