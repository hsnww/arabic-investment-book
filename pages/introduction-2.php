<?php
// Include configuration
require_once __DIR__ . '/../includes/config.php';

// Set page variables
$page_title = 'المقدمة الثانية - ' . SITE_NAME;
$page_description = 'المقدمة الثانية لكتاب المال والاستثمار في الأسواق المالية';
$page_keywords = 'مقدمة ثانية, كتاب, استثمار, أسواق مالية, الدكتور فهد الحويماني';
$page_author = SITE_AUTHOR;
$page_url = get_page_url('pages/introduction-2.php');
$current_page = 'introduction-2';

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
                    <li class="breadcrumb-item active" aria-current="page">المقدمة الثانية</li>
                </ol>
            </nav>
            
            <article class="chapter-content">
                <header class="chapter-header mb-4">
                    <h1 class="display-5 text-center mb-3">المقدمة الثانية</h1>
                    <div class="text-center text-muted">
                        <small>بقلم: <?php echo sanitize_output($page_author); ?></small>
                    </div>
                </header>
                
                <div class="chapter-text">
                    <p class="lead">
                        في عالم يتسم بالتغير السريع والتطور المستمر، أصبح الاستثمار في الأسواق المالية 
                        ضرورة لا غنى عنها لضمان مستقبل مالي آمن ومستقر.
                    </p>
                    
                    <h2>لماذا هذا الكتاب؟</h2>
                    <p>
                        جاءت فكرة هذا الكتاب من الحاجة الملحة لتوفير مصدر عربي شامل ومفصل حول الاستثمار 
                        في الأسواق المالية. لاحظت خلال سنوات خبرتي في مجال الاستثمار أن هناك نقصاً كبيراً 
                        في المراجع العربية الموثوقة والمحدثة في هذا المجال.
                    </p>
                    
                    <h2>المنهجية المتبعة</h2>
                    <p>
                        اعتمدت في تأليف هذا الكتاب على منهجية علمية دقيقة، تجمع بين:
                    </p>
                    <ul>
                        <li><strong>الأسس النظرية:</strong> المفاهيم الأساسية والمبادئ العلمية</li>
                        <li><strong>التطبيقات العملية:</strong> أمثلة واقعية وحالات دراسية</li>
                        <li><strong>الخبرة الميدانية:</strong> تجارب شخصية وملاحظات عملية</li>
                        <li><strong>المراجع العالمية:</strong> أحدث الدراسات والأبحاث</li>
                    </ul>
                    
                    <h2>الفئة المستهدفة</h2>
                    <p>
                        هذا الكتاب مخصص لجميع المهتمين بالاستثمار المالي، سواء كانوا:
                    </p>
                    <ul>
                        <li>مبتدئين في عالم الاستثمار</li>
                        <li>مستثمرين ذوي خبرة محدودة</li>
                        <li>طلاب الاقتصاد والمالية</li>
                        <li>المهنيين العاملين في المجال المالي</li>
                        <li>أي شخص يرغب في فهم الأسواق المالية</li>
                    </ul>
                    
                    <h2>مميزات الكتاب</h2>
                    <p>
                        يتميز هذا الكتاب بعدة خصائص تجعله فريداً من نوعه:
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-language text-primary"></i> اللغة العربية</h5>
                                    <p class="card-text">مكتوب باللغة العربية الفصحى مع شرح المصطلحات الإنجليزية</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-chart-line text-success"></i> أمثلة عملية</h5>
                                    <p class="card-text">يحتوي على أمثلة واقعية وحالات دراسية من الأسواق المحلية والعالمية</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-calculator text-info"></i> معادلات وحسابات</h5>
                                    <p class="card-text">شرح مفصل للمعادلات المالية مع أمثلة حسابية</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-shield-alt text-warning"></i> إدارة المخاطر</h5>
                                    <p class="card-text">تركيز خاص على إدارة المخاطر وحماية الاستثمارات</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2>الخاتمة</h2>
                    <p>
                        أتمنى أن يكون هذا الكتاب إضافة قيمة للمكتبة العربية، وأن يساعد القراء على فهم 
                        عالم الاستثمار المالي بشكل أفضل. تذكر دائماً أن المعرفة هي أفضل استثمار يمكن 
                        أن تستثمر فيه.
                    </p>
                    
                    <div class="alert alert-success">
                        <strong>تمنياتي:</strong> أتمنى لك رحلة استثمارية ناجحة ومثمرة، وأن يساعدك هذا 
                        الكتاب في تحقيق أهدافك المالية.
                    </div>
                </div>
            </article>
            
            <nav class="chapter-navigation mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php echo get_page_url('pages/introduction.php'); ?>" class="btn btn-outline-primary">
                            <i class="fas fa-chevron-right"></i> المقدمة الأولى
                        </a>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="<?php echo get_page_url('pages/introduction-3.php'); ?>" class="btn btn-outline-primary">
                            المقدمة الثالثة <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</main>

<?php include get_include_file_path('footer.php'); ?> 