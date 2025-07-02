<?php
/**
 * Sitemap Generator for Book Website
 * This script automatically generates an XML sitemap based on the current configuration
 */

// Include configuration
require_once 'includes/config.php';

// Set content type to XML
header('Content-Type: application/xml; charset=utf-8');

// Function to generate XML sitemap
function generate_sitemap() {
    global $chapters, $navigation_items;
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    
    // Add main pages
    $main_pages = [
        [
            'url' => BASE_URL . '/',
            'priority' => '1.0',
            'changefreq' => 'weekly',
            'comment' => 'الصفحة الرئيسية'
        ],
        [
            'url' => BASE_URL . '/pages/toc.php',
            'priority' => '0.9',
            'changefreq' => 'monthly',
            'comment' => 'صفحة فهرس الكتاب'
        ],
        [
            'url' => BASE_URL . '/pages/sitemap.php',
            'priority' => '0.8',
            'changefreq' => 'monthly',
            'comment' => 'خريطة الموقع'
        ]
    ];
    
    // Add introduction pages
    $intro_pages = [
        'introduction.php' => 'المقدمة الأولى',
        'introduction-2.php' => 'المقدمة الثانية',
        'introduction-3.php' => 'المقدمة الثالثة'
    ];
    
    foreach ($intro_pages as $page => $title) {
        $main_pages[] = [
            'url' => BASE_URL . '/pages/' . $page,
            'priority' => '0.8',
            'changefreq' => 'monthly',
            'comment' => $title
        ];
    }
    
    // Add main pages to sitemap
    foreach ($main_pages as $page) {
        $xml .= "    <!-- {$page['comment']} -->\n";
        $xml .= "    <url>\n";
        $xml .= "        <loc>{$page['url']}</loc>\n";
        $xml .= "        <lastmod>" . date('Y-m-d') . "</lastmod>\n";
        $xml .= "        <changefreq>{$page['changefreq']}</changefreq>\n";
        $xml .= "        <priority>{$page['priority']}</priority>\n";
        $xml .= "    </url>\n";
    }
    
    // Add chapter pages
    foreach ($chapters as $chapter_key => $chapter) {
        $xml .= "    \n    <!-- {$chapter['title']} -->\n";
        
        foreach ($chapter['parts'] as $part_key => $part) {
            $xml .= "    <url>\n";
            $xml .= "        <loc>{$part['url']}</loc>\n";
            $xml .= "        <lastmod>" . date('Y-m-d') . "</lastmod>\n";
            $xml .= "        <changefreq>monthly</changefreq>\n";
            $xml .= "        <priority>0.7</priority>\n";
            $xml .= "    </url>\n";
        }
    }
    
    $xml .= '</urlset>';
    
    return $xml;
}

// Function to save sitemap to file
function save_sitemap($xml_content) {
    $file_path = 'sitemap.xml';
    $result = file_put_contents($file_path, $xml_content);
    
    if ($result !== false) {
        return true;
    }
    return false;
}

// Generate sitemap
$sitemap_xml = generate_sitemap();

// Check if this is a command line request or web request
if (php_sapi_name() === 'cli') {
    // Command line execution
    if (save_sitemap($sitemap_xml)) {
        echo "Sitemap generated successfully!\n";
        echo "File saved to: sitemap.xml\n";
        
        // Count URLs
        $url_count = substr_count($sitemap_xml, '<url>');
        echo "Total URLs in sitemap: $url_count\n";
    } else {
        echo "Error: Could not save sitemap file.\n";
    }
} else {
    // Web request - output XML directly
    echo $sitemap_xml;
}

// Log sitemap generation
$log_message = "Sitemap generated on " . date('Y-m-d H:i:s') . " with " . substr_count($sitemap_xml, '<url>') . " URLs\n";
file_put_contents('logs/sitemap.log', $log_message, FILE_APPEND | LOCK_EX);
?> 