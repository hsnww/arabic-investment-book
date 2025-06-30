<?php
// Include configuration
require_once __DIR__ . '/../includes/config.php';

// Set page variables
$page_title = 'المقدمة - ' . SITE_NAME;
$page_description = 'مقدمة كتاب المال والاستثمار في الأسواق المالية';
$page_keywords = 'مقدمة, كتاب, استثمار, أسواق مالية, الدكتور فهد الحويماني';
$page_author = SITE_AUTHOR;
$page_url = get_page_url('pages/introduction.php');
$current_page = 'introduction';

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
                    <li class="breadcrumb-item active" aria-current="page">المقدمة</li>
                </ol>
            </nav>
            
            <article class="chapter-content">
                <header class="chapter-header mb-4">
                    <h1 class="display-5 text-center mb-3">المقدمة</h1>
                    <div class="text-center text-muted">
                        <small>بقلم: <?php echo sanitize_output($page_author); ?></small>
                    </div>
                </header>
                
                <div class="chapter-text">
                    <p class="lead">
                        مرحباً بك في كتاب "المال والاستثمار في الأسواق المالية" الذي يهدف إلى تقديم دليل شامل 
                        ومفصل للاستثمار في الأسواق المالية بطريقة سهلة ومفهومة.
                    </p>
                    
                    <h2>هدف الكتاب</h2>
                    <p>
                        يهدف هذا الكتاب إلى تثقيف القارئ حول أساسيات الاستثمار في الأسواق المالية، وتزويده 
                        بالمعرفة اللازمة لاتخاذ قرارات استثمارية مدروسة ومحسوبة. سواء كنت مبتدئاً في عالم 
                        الاستثمار أو لديك خبرة سابقة، ستجد في هذا الكتاب معلومات قيمة ومفيدة.
                    </p>
                    
                    <h2>محتويات الكتاب</h2>
                    <p>
                        يتضمن الكتاب سبعة فصول رئيسية تغطي جميع جوانب الاستثمار المالي:
                    </p>
                    <ul>
                        <li><strong>الفصل الأول:</strong> الاستثمار في الأسهم - الأساسيات والمفاهيم</li>
                        <li><strong>الفصل الثاني:</strong> التخطيط المالي والميزانية الشخصية</li>
                        <li><strong>الفصل الثالث:</strong> حساب الأداء الاستثماري والمعادلات</li>
                        <li><strong>الفصل الرابع:</strong> التحليل الأساسي للشركات والأسهم</li>
                        <li><strong>الفصل الخامس:</strong> السندات واستراتيجيات الاستثمار فيها</li>
                        <li><strong>الفصل السادس:</strong> العملات الأجنبية وتداولها</li>
                        <li><strong>الفصل السابع:</strong> الخلاصة والتوصيات العملية</li>
                    </ul>
                    
                    <h2>كيفية استخدام الكتاب</h2>
                    <p>
                        يمكنك قراءة الكتاب بالترتيب من البداية للنهاية، أو اختيار الفصول التي تهمك أكثر. 
                        كل فصل يحتوي على أمثلة عملية وتطبيقات واقعية لمساعدتك على فهم المفاهيم بشكل أفضل.
                    </p>
                    
                    <div class="alert alert-info">
                        <strong>نصيحة:</strong> خذ وقتك في قراءة كل فصل، وحاول تطبيق المفاهيم على أمثلة 
                        من حياتك اليومية لفهمها بشكل أعمق.
                    </div>
                    
                    <h2>الخاتمة</h2>
                    <p>
                        نأمل أن يكون هذا الكتاب مصدراً مفيداً لك في رحلة الاستثمار، وأن يساعدك على تحقيق 
                        أهدافك المالية. تذكر دائماً أن الاستثمار يتطلب الصبر والتعلم المستمر.
                    </p>
                </div>
            </article>
            
            <nav class="chapter-navigation mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php echo get_page_url('index.php'); ?>" class="btn btn-outline-primary">
                            <i class="fas fa-chevron-right"></i> العودة للرئيسية
                        </a>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="<?php echo get_page_url('pages/introduction-2.php'); ?>" class="btn btn-outline-primary">
                            المقدمة الثانية <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</main>

<?php include get_include_file_path('footer.php'); ?>
