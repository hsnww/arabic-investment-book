<?php
// Include configuration file
if (!defined('SECURE_ACCESS')) {
    require_once __DIR__ . '/config.php';
}

// Set default values if not provided
if (!isset($page_title)) $page_title = SITE_NAME;
if (!isset($page_description)) $page_description = SITE_DESCRIPTION;
if (!isset($page_keywords)) $page_keywords = 'استثمار, أسواق مالية, أسهم, سندات, عملات, تحليل مالي';
if (!isset($page_author)) $page_author = SITE_AUTHOR;
if (!isset($page_url)) $page_url = BASE_URL;
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo sanitize_output($page_description); ?>">
    <meta name="keywords" content="<?php echo sanitize_output($page_keywords); ?>">
    <meta name="author" content="<?php echo sanitize_output($page_author); ?>">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo sanitize_output($page_url); ?>">
    <meta property="og:title" content="<?php echo sanitize_output($page_title); ?>">
    <meta property="og:description" content="<?php echo sanitize_output($page_description); ?>">
    <meta property="og:image" content="<?php echo get_image_url('cover.png'); ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo sanitize_output($page_url); ?>">
    <meta property="twitter:title" content="<?php echo sanitize_output($page_title); ?>">
    <meta property="twitter:description" content="<?php echo sanitize_output($page_description); ?>">
    <meta property="twitter:image" content="<?php echo get_image_url('cover.png'); ?>">
    
    <title><?php echo sanitize_output($page_title); ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo get_asset_url('css/additional-styles.css'); ?>" rel="stylesheet">
    
    <!-- Google Analytics -->
    <script src="<?php echo get_js_url('analytics.js'); ?>"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="bg-primary text-white text-center py-4">
                    <h1 class="display-4"><?php echo SITE_NAME; ?></h1>
                    <p class="lead"><?php echo SITE_AUTHOR; ?></p>
                </header>
            </div>
        </div>
    </div>