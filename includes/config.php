<?php
/**
 * Configuration file for the website
 * Contains all constants, settings, and helper functions
 */

// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    define('SECURE_ACCESS', true);
}

// Development Mode
define('DEVELOPMENT_MODE', true); // Set to false in production

// Site Configuration
// إعدادات الموقع

// Site Information
define('SITE_NAME', 'المال والاستثمار في الأسواق المالية');
define('SITE_URL', 'http://html-book.test'); // Change this for production
define('SITE_DESCRIPTION', 'كتاب شامل عن الاستثمار في الأسواق المالية');
define('SITE_AUTHOR', 'الدكتور فهد الحويماني');
define('SITE_VERSION', '2.0.0');

// Path Configuration
define('ROOT_PATH', dirname(__DIR__));
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('TEMPLATES_PATH', ROOT_PATH . '/templates');
define('PAGES_PATH', ROOT_PATH . '/pages');
define('CHAPTERS_PATH', PAGES_PATH . '/chapters');
define('ASSETS_PATH', ROOT_PATH . '/assets');
define('JS_PATH', ASSETS_PATH . '/js');
define('IMAGES_PATH', ROOT_PATH . '/images');

// URL Configuration
define('BASE_URL', SITE_URL);
define('INCLUDES_URL', BASE_URL . '/includes');
define('TEMPLATES_URL', BASE_URL . '/templates');
define('PAGES_URL', BASE_URL . '/pages');
define('CHAPTERS_URL', PAGES_URL . '/chapters');
define('ASSETS_URL', BASE_URL . '/assets');
define('JS_URL', ASSETS_URL . '/js');
define('IMAGES_URL', BASE_URL . '/images');

// SEO Settings
define('DEFAULT_KEYWORDS', 'الاستثمار, الأسواق المالية, الأسهم, التداول, التحليل الأساسي, التحليل الفني');
define('DEFAULT_IMAGE', SITE_URL . '/images/book-cover.jpg');

// Google Analytics
define('GA_TRACKING_ID', 'G-2C8NK64LQZ'); // Replace with your actual GA ID

// Helper Functions - Define these BEFORE using them in arrays
function get_page_url($page) {
    return BASE_URL . '/' . ltrim($page, '/');
}

function get_asset_url($asset) {
    return ASSETS_URL . '/' . ltrim($asset, '/');
}

function get_js_url($file) {
    return JS_URL . '/' . ltrim($file, '/');
}

function get_image_url($image) {
    return IMAGES_URL . '/' . ltrim($image, '/');
}

function get_chapter_url($chapter) {
    return CHAPTERS_URL . '/' . ltrim($chapter, '/');
}

function get_page_path($page) {
    return PAGES_PATH . '/' . ltrim($page, '/');
}

function get_template_path($template) {
    return TEMPLATES_PATH . '/' . ltrim($template, '/');
}

function get_include_file_path($file) {
    return INCLUDES_PATH . '/' . ltrim($file, '/');
}

// Chapters Configuration
$chapters = [
    'chapter1' => [
        'title' => 'الفصل الأول: الاستثمار في الأسهم',
        'parts' => [
            'chapter1_part1' => ['title' => 'الجزء الأول: مقدمة الاستثمار', 'url' => get_chapter_url('chapter1_part1.php')],
            'chapter1_part2' => ['title' => 'الجزء الثاني: أساسيات الأسهم', 'url' => get_chapter_url('chapter1_part2.php')],
            'chapter1_part3' => ['title' => 'الجزء الثالث: أنواع الأسهم', 'url' => get_chapter_url('chapter1_part3.php')],
            'chapter1_part4' => ['title' => 'الجزء الرابع: تقييم الأسهم', 'url' => get_chapter_url('chapter1_part4.php')]
        ]
    ],
    'chapter2' => [
        'title' => 'الفصل الثاني: التخطيط المالي',
        'parts' => [
            'chapter2' => ['title' => 'التخطيط المالي والميزانية الشخصية', 'url' => get_chapter_url('chapter2.php')]
        ]
    ],
    'chapter3' => [
        'title' => 'الفصل الثالث: حساب الأداء الاستثماري',
        'parts' => [
            'chapter3_part1' => ['title' => 'الجزء الأول: القيمة الزمنية للمال', 'url' => get_chapter_url('chapter3_part1.php')],
            'chapter3_part2' => ['title' => 'الجزء الثاني: معادلات العائد', 'url' => get_chapter_url('chapter3_part2.php')],
            'chapter3_part3' => ['title' => 'الجزء الثالث: قياس الأداء', 'url' => get_chapter_url('chapter3_part3.php')],
            'chapter3_part4' => ['title' => 'الجزء الرابع: العائد المعقول', 'url' => get_chapter_url('chapter3_part4.php')]
        ]
    ],
    'chapter4' => [
        'title' => 'الفصل الرابع: التحليل الأساسي',
        'parts' => [
            'chapter4_part1' => ['title' => 'الجزء الأول: أساسيات التحليل الأساسي', 'url' => get_chapter_url('chapter4_part1.php')],
            'chapter4_part2' => ['title' => 'الجزء الثاني: المؤشرات المالية', 'url' => get_chapter_url('chapter4_part2.php')],
            'chapter4_part3' => ['title' => 'الجزء الثالث: تحليل القوائم المالية', 'url' => get_chapter_url('chapter4_part3.php')]
        ]
    ],
    'chapter5' => [
        'title' => 'الفصل الخامس: السندات',
        'parts' => [
            'chapter5_part1' => ['title' => 'الجزء الأول: أساسيات السندات', 'url' => get_chapter_url('chapter5_part1.php')],
            'chapter5_part2' => ['title' => 'الجزء الثاني: تقييم السندات', 'url' => get_chapter_url('chapter5_part2.php')],
            'chapter5_part3' => ['title' => 'الجزء الثالث: استراتيجيات الاستثمار في السندات', 'url' => get_chapter_url('chapter5_part3.php')]
        ]
    ],
    'chapter6' => [
        'title' => 'الفصل السادس: العملات الأجنبية',
        'parts' => [
            'chapter6_part1' => ['title' => 'الجزء الأول: أساسيات تداول العملات', 'url' => get_chapter_url('chapter6_part1.php')],
            'chapter6_part2' => ['title' => 'الجزء الثاني: تحليل العملات', 'url' => get_chapter_url('chapter6_part2.php')],
            'chapter6_part3' => ['title' => 'الجزء الثالث: استراتيجيات تداول العملات', 'url' => get_chapter_url('chapter6_part3.php')]
        ]
    ],
    'chapter7' => [
        'title' => 'الفصل السابع: الخلاصة والتوصيات',
        'parts' => [
            'chapter7_part1' => ['title' => 'الجزء الأول: ملخص شامل', 'url' => get_chapter_url('chapter7_part1.php')],
            'chapter7_part2' => ['title' => 'الجزء الثاني: الخلاصة والتوصيات', 'url' => get_chapter_url('chapter7_part2.php')]
        ]
    ],
    'chapter8' => [
        'title' => 'الفصل الثامن: الجدوى من تحليل الأسهم',
        'parts' => [
            'chapter8_part1' => ['title' => 'الجزء الأول: مقدمة وأهمية التحليل', 'url' => get_chapter_url('chapter8_part1.php')],
            'chapter8_part2' => ['title' => 'الجزء الثاني: طرق تحليل الأسهم', 'url' => get_chapter_url('chapter8_part2.php')],
            'chapter8_part3' => ['title' => 'الجزء الثالث: فرضية كفاءة السوق', 'url' => get_chapter_url('chapter8_part3.php')]
        ]
    ],
    'chapter9' => [
        'title' => 'الفصل التاسع: التحليل الأساسي للأسهم',
        'parts' => [
            'chapter9_part1' => ['title' => 'الجزء الأول: مقدمة وأساسيات التحليل الأساسي والقوائم المالية', 'url' => get_chapter_url('chapter9_part1.php')],
            'chapter9_part2' => ['title' => 'الجزء الثاني: أنواع الأسهم وحقوق المساهمين وتجزئة الأسهم', 'url' => get_chapter_url('chapter9_part2.php')],
            'chapter9_part3' => ['title' => 'الجزء الثالث: التحليل المالي وتفسير القوائم المالية', 'url' => get_chapter_url('chapter9_part3.php')],
            'chapter9_part4' => ['title' => 'الجزء الرابع: طرق تقييم الأسهم وخلاصة الفصل', 'url' => get_chapter_url('chapter9_part4.php')]
        ]
    ],
    'chapter10' => [
        'title' => 'الفصل العاشر: مؤشرات الأداء المالية',
        'parts' => [
            'chapter10_part1' => ['title' => 'الجزء الأول: مؤشرات السيولة وإدارة الأصول', 'url' => get_chapter_url('chapter10_part1.php')],
            'chapter10_part2' => ['title' => 'الجزء الثاني: مؤشرات إدارة المديونية والربحية', 'url' => get_chapter_url('chapter10_part2.php')],
            'chapter10_part3' => ['title' => 'الجزء الثالث: مؤشرات القيمة السوقية والتدفق النقدي', 'url' => get_chapter_url('chapter10_part3.php')]
        ]
    ]
];

// Navigation Configuration
$navigation_items = [
    'index' => [
        'url' => get_page_url('index.php'),
        'title' => 'الرئيسية',
        'icon' => 'fas fa-home'
    ],
    'toc' => [
        'url' => get_page_url('pages/toc.php'),
        'title' => 'فهرس الكتاب',
        'icon' => 'fas fa-list'
    ],
    'introduction' => [
        'url' => get_page_url('pages/introduction.php'),
        'title' => 'المقدمة الأولى',
        'icon' => 'fas fa-file-text'
    ],
    'introduction-2' => [
        'url' => get_page_url('pages/introduction-2.php'),
        'title' => 'المقدمة الثانية',
        'icon' => 'fas fa-book-open'
    ],
    'introduction-3' => [
        'url' => get_page_url('pages/introduction-3.php'),
        'title' => 'المقدمة الثالثة',
        'icon' => 'fas fa-book'
    ]
];

// Social Media Links
$social_links = [
    'twitter' => 'https://twitter.com/zajwal',
    'facebook' => 'https://facebook.com/zajwal',
    'linkedin' => 'https://linkedin.com/company/zajwal',
    'youtube' => 'https://youtube.com/zajwal'
];

// Footer Links
$footer_links = [
    'privacy' => [
        'title' => 'سياسة الخصوصية',
        'url' => 'pages/privacy.php'
    ],
    'terms' => [
        'title' => 'شروط الاستخدام',
        'url' => 'pages/terms.php'
    ],
    'contact' => [
        'title' => 'اتصل بنا',
        'url' => 'pages/contact.php'
    ],
    'about' => [
        'title' => 'عن المؤلف',
        'url' => 'pages/about.php'
    ]
];

// Helper Functions
function get_navigation_url($page) {
    global $navigation_structure;
    if (isset($navigation_structure[$page])) {
        return $navigation_structure[$page]['url'];
    }
    return 'index.php';
}

function get_chapter_info($chapter) {
    global $chapters_structure;
    if (isset($chapters_structure[$chapter])) {
        return $chapters_structure[$chapter];
    }
    return null;
}

// Security Functions
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function generate_csrf_token() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function sanitize_output($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function validate_url($url) {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

// Error Handling
function log_error($message, $file = '', $line = '') {
    $log_file = ROOT_PATH . '/logs/error.log';
    $timestamp = date('Y-m-d H:i:s');
    $log_message = "[$timestamp] $message";
    if ($file) $log_message .= " in $file";
    if ($line) $log_message .= " on line $line";
    $log_message .= "\n";

    if (!is_dir(dirname($log_file))) {
        mkdir(dirname($log_file), 0755, true);
    }

    file_put_contents($log_file, $log_message, FILE_APPEND | LOCK_EX);
}

// Cache Functions
function get_cache_path($key) {
    return ROOT_PATH . '/cache/' . md5($key) . '.cache';
}

function cache_set($key, $data, $ttl = 3600) {
    $cache_file = get_cache_path($key);
    $cache_data = [
        'expires' => time() + $ttl,
        'data' => $data
    ];

    if (!is_dir(dirname($cache_file))) {
        mkdir(dirname($cache_file), 0755, true);
    }

    return file_put_contents($cache_file, serialize($cache_data), LOCK_EX);
}

function cache_get($key) {
    $cache_file = get_cache_path($key);

    if (!file_exists($cache_file)) {
        return false;
    }

    $cache_data = unserialize(file_get_contents($cache_file));

    if ($cache_data['expires'] < time()) {
        unlink($cache_file);
        return false;
    }

    return $cache_data['data'];
}

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Error Reporting (disable in production)
if (defined('DEVELOPMENT_MODE') && DEVELOPMENT_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

/**
 * قراءة جزء من نص فصل من ملف نصي حسب أرقام الأسطر (من-إلى)
 * @param string $filename اسم الملف النصي داخل مجلد text
 * @param int $start_line رقم السطر الأول (1-based)
 * @param int $end_line رقم السطر الأخير (شامل)
 * @return string النص المطلوب مع تنسيق فقرات HTML
 */
function get_chapter_text_part($filename, $start_line, $end_line) {
    $file_path = ROOT_PATH . '/text/' . $filename;
    if (!file_exists($file_path)) return '<div class="alert alert-danger">النص غير متوفر.</div>';
    $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $start = max(0, $start_line - 1);
    $end = min(count($lines), $end_line);
    $selected = array_slice($lines, $start, $end - $start);
    $text = '';
    foreach ($selected as $line) {
        $line = trim($line);
        if ($line !== '') {
            $text .= '<p>' . htmlspecialchars($line) . '</p>';
        }
    }
    return $text;
}
?>
