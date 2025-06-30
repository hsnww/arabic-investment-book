<?php
// Include configuration
require_once __DIR__ . '/../includes/config.php';

// Set page variables
$page_title = 'المقدمة الثالثة - ' . SITE_NAME;
$page_description = 'المقدمة الثالثة لكتاب المال والاستثمار في الأسواق المالية';
$page_keywords = 'مقدمة ثالثة, كتاب, استثمار, أسواق مالية, الدكتور فهد الحويماني';
$page_author = SITE_AUTHOR;
$page_url = get_page_url('pages/introduction-3.php');
$current_page = 'introduction-3';

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
                    <li class="breadcrumb-item active" aria-current="page">المقدمة الثالثة</li>
                </ol>
            </nav>
            
            <article class="chapter-content">
                <header class="chapter-header mb-4">
                    <h1 class="display-5 text-center mb-3">المقدمة الثالثة</h1>
                    <div class="text-center text-muted">
                        <small>بقلم: <?php echo sanitize_output($page_author); ?></small>
                    </div>
                </header>
                
                <div class="chapter-text">
                    <p class="lead">
                        بعد النجاح الكبير الذي حققته الطبعة الأولى من هذا الكتاب، يسعدني أن أقدم لكم 
                        الطبعة الثانية المحدثة والمحسنة، والتي تتضمن إضافات مهمة وتحديثات شاملة.
                    </p>
                    
                    <h2>ما الجديد في الطبعة الثانية؟</h2>
                    <p>
                        شهدت الأسواق المالية تطورات كبيرة منذ صدور الطبعة الأولى، مما دفعني لتحديث 
                        الكتاب وإضافة محتوى جديد يواكب هذه التطورات:
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0"><i class="fas fa-plus-circle"></i> إضافات جديدة</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success"></i> فصول جديدة عن العملات الرقمية</li>
                                        <li><i class="fas fa-check text-success"></i> تحديث شامل للتحليل الفني</li>
                                        <li><i class="fas fa-check text-success"></i> إضافة استراتيجيات التداول الحديثة</li>
                                        <li><i class="fas fa-check text-success"></i> تحديث البيانات والإحصائيات</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0"><i class="fas fa-edit"></i> تحسينات</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success"></i> تحسين الشرح والأمثلة</li>
                                        <li><i class="fas fa-check text-success"></i> إضافة رسوم بيانية جديدة</li>
                                        <li><i class="fas fa-check text-success"></i> تحديث المراجع والمصادر</li>
                                        <li><i class="fas fa-check text-success"></i> تحسين التصميم والطباعة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2>التحديثات الرئيسية</h2>
                    <p>
                        ركزت في هذه الطبعة على عدة تحديثات مهمة:
                    </p>
                    <ul>
                        <li><strong>التكنولوجيا المالية:</strong> إضافة فصل جديد عن التكنولوجيا المالية وتأثيرها على الاستثمار</li>
                        <li><strong>الاستثمار المستدام:</strong> تحديث شامل حول الاستثمار البيئي والاجتماعي والحوكمة (ESG)</li>
                        <li><strong>الذكاء الاصطناعي:</strong> تأثير الذكاء الاصطناعي على الأسواق المالية</li>
                        <li><strong>التداول الإلكتروني:</strong> تحديث حول منصات التداول الحديثة</li>
                        <li><strong>اللوائح التنظيمية:</strong> أحدث التغييرات في القوانين واللوائح المالية</li>
                    </ul>
                    
                    <h2>ردود الفعل على الطبعة الأولى</h2>
                    <p>
                        لقد تلقيت العديد من الرسائل والمراجعات الإيجابية من القراء، مما شجعني على 
                        تطوير الكتاب أكثر. من أهم الملاحظات التي تم أخذها في الاعتبار:
                    </p>
                    <ul>
                        <li>طلب المزيد من الأمثلة العملية</li>
                        <li>الحاجة لشرح أكثر تفصيلاً للمفاهيم المعقدة</li>
                        <li>إضافة المزيد من الرسوم البيانية والجداول</li>
                        <li>تحديث المعلومات لتواكب التطورات الحديثة</li>
                    </ul>
                    
                    <h2>المنهجية المحدثة</h2>
                    <p>
                        في هذه الطبعة، اعتمدت على منهجية أكثر تفاعلية وتطبيقية:
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="fas fa-laptop fa-3x text-primary mb-2"></i>
                                <h5>التطبيق العملي</h5>
                                <p>أمثلة عملية أكثر وتطبيقات واقعية</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="fas fa-chart-bar fa-3x text-success mb-2"></i>
                                <h5>التحليل الحديث</h5>
                                <p>أحدث أدوات التحليل والمؤشرات</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="fas fa-globe fa-3x text-info mb-2"></i>
                                <h5>المنظور العالمي</h5>
                                <p>تحليل الأسواق العالمية والمحلية</p>
                            </div>
                        </div>
                    </div>
                    
                    <h2>الخاتمة</h2>
                    <p>
                        أتمنى أن تكون هذه الطبعة الثانية إضافة قيمة للمكتبة العربية، وأن تساعد القراء 
                        على فهم عالم الاستثمار المالي المتطور بشكل أفضل. شكراً لجميع القراء الذين 
                        ساهموا في تطوير هذا الكتاب بملاحظاتهم وآرائهم.
                    </p>
                    
                    <div class="alert alert-info">
                        <strong>ملاحظة:</strong> يمكنكم التواصل معي عبر وسائل التواصل الاجتماعي 
                        لمشاركة آرائكم وملاحظاتكم حول هذه الطبعة.
                    </div>
                </div>
            </article>
            
            <nav class="chapter-navigation mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php echo get_page_url('pages/introduction-2.php'); ?>" class="btn btn-outline-primary">
                            <i class="fas fa-chevron-right"></i> المقدمة الثانية
                        </a>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="<?php echo get_page_url('pages/toc.php'); ?>" class="btn btn-outline-primary">
                            فهرس الكتاب <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</main>

<?php include get_include_file_path('footer.php'); ?> 