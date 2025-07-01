<?php
// Include configuration if not already included
if (!defined('SECURE_ACCESS')) {
    require_once __DIR__ . '/config.php';
}

// Get current page for navigation highlighting
$current_page = isset($current_page) ? $current_page : '';

// Determine the base path based on current location
$current_script = $_SERVER['SCRIPT_NAME'];
$is_in_pages = strpos($current_script, '/pages/') !== false;
$is_in_chapters = strpos($current_script, '/pages/chapters/') !== false;

if ($is_in_chapters) {
    $base_path = '../../';
} elseif ($is_in_pages) {
    $base_path = '../';
} else {
    $base_path = '';
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_page_url('index.php'); ?>">
            <i class="fas fa-book"></i> <?php echo SITE_NAME; ?>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_url('index.php'); ?>">
                        <i class="fas fa-home"></i> الرئيسية
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_url('pages/toc.php'); ?>">
                        <i class="fas fa-list"></i> فهرس الكتاب
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_url('pages/introduction.php'); ?>">
                        <i class="fas fa-file-text"></i> المقدمة 
                    </a>
                </li>
            </ul>
            
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="chaptersDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-list-ol"></i> الفصول
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <?php if (isset($chapters) && is_array($chapters)): ?>
                            <?php foreach ($chapters as $chapter_key => $chapter): ?>
                                <?php 
                                    // احصل على أول جزء من كل فصل
                                    $first_part = reset($chapter['parts']);
                                ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $first_part['url']; ?>">
                                        <?php echo sanitize_output($chapter['title']); ?>
                                    </a>
                                </li>
                                <?php if ($chapter_key !== array_key_last($chapters)): ?>
                                    <li><hr class="dropdown-divider"></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li><span class="dropdown-item-text text-muted">لا توجد فصول متاحة</span></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> 