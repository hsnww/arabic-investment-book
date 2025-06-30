<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Page configuration
$page_title = 'الفصل التاسع: التحليل الأساسي للأسهم - الجزء الثاني';
$page_description = 'الفصل التاسع من كتاب المال والاستثمار في الأسواق المالية - أنواع الأسهم وحقوق المساهمين';
$page_keywords = 'الأسهم الممتازة, الأسهم العادية, حقوق المساهمين, تجزئة الأسهم, الفصل التاسع';
$page_url = get_page_url('pages/chapters/chapter9_part2.php');
$chapter_title = 'الفصل التاسع: التحليل الأساسي للأسهم';
$current_page = 'chapter9_part2';

// Navigation
$prev_chapter = get_page_url('pages/chapters/chapter9_part1.php');
$next_chapter = get_page_url('pages/chapters/chapter9_part3.php');

// Table of contents for this part
$table_of_contents = '
<ul class="list-unstyled">
    <li><i class="fas fa-angle-left"></i> <a href="#stock-types">أنواع الأسهم</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#preferred-stocks">الأسهم الممتازة</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#common-stocks">الأسهم العادية</a></li>
    <li><i class="fas fa-angle-left"></i> <a href="#stock-splits">تجزئة الأسهم</a></li>
</ul>';

// Chapter content
$chapter_content = '
<div id="stock-types" class="section mb-4">
    <h2 class="section-title">أنواع الأسهم</h2>
    
    <p class="lead">تقوم الشركات عادة برفع رأس مالها عن طريق الاقتراض أو طرح أسهم جديدة. ولكل نوع من الأسهم خصائصه ومميزاته.</p>
    
    <div class="alert alert-info">
        <h5><i class="fas fa-info-circle"></i> طرق رفع رأس المال</h5>
        <p>يمكن للشركة رفع رأس مالها من خلال:</p>
        <ul class="mb-0">
            <li>الاقتراض من البنوك</li>
            <li>إصدار سندات مؤسسية</li>
            <li>طرح أسهم جديدة</li>
        </ul>
    </div>
    
    <div class="card mb-3">
        <div class="card-header bg-warning">
            <h5><i class="fas fa-exclamation-triangle"></i> ملاحظة مهمة</h5>
        </div>
        <div class="card-body">
            <p>المشكلة الرئيسية في طرح الأسهم هي أنها تبدد ملكية الشركة مما يؤدي إلى انتقاص ملكية حملة الأسهم الحاليين وإضافة إلى ضعف إمكانية التحكم بالشركة.</p>
        </div>
    </div>
</div>

<div id="preferred-stocks" class="section mb-4">
    <h2 class="section-title">الأسهم الممتازة</h2>
    
    <p>الأسهم الممتازة هي نوع من الأسهم تمنح حاملها حقوقاً خاصة مقارنة بالأسهم العادية.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h5><i class="fas fa-plus"></i> مميزات الأسهم الممتازة</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>عائد ثابت سنوي</li>
                        <li>أولوية في الحصول على الأرباح</li>
                        <li>أولوية في التصفية عند الإفلاس</li>
                        <li>لا تحتاج لإعادة رأس المال</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-danger text-white">
                    <h5><i class="fas fa-minus"></i> قيود الأسهم الممتازة</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>لا حق في التصويت</li>
                        <li>لا مشاركة في نمو الشركة</li>
                        <li>مخاطر انخفاض السعر</li>
                        <li>مخاطر إفلاس الشركة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-warning">
        <h5><i class="fas fa-lightbulb"></i> متى تصدر الشركة أسهم ممتازة؟</h5>
        <p>تصدر الشركة الأسهم الممتازة عندما تريد الحفاظ على التحكم في الشركة مع الحصول على تمويل إضافي دون منح حقوق التصويت للمستثمرين الجدد.</p>
    </div>
</div>

<div id="common-stocks" class="section mb-4">
    <h2 class="section-title">الأسهم العادية</h2>
    
    <p>الأسهم العادية هي النوع الأكثر شيوعاً من الأسهم وتمنح حاملها حقوق الملكية الكاملة في الشركة.</p>
    
    <div class="card mb-3">
        <div class="card-header bg-primary text-white">
            <h5><i class="fas fa-star"></i> مميزات الأسهم العادية</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>حقوق الملكية:</h6>
                    <ul>
                        <li>حق التصويت في الجمعية العمومية</li>
                        <li>المشاركة في نمو الشركة</li>
                        <li>الحصول على الأرباح الموزعة</li>
                        <li>حق الحصول على أسهم مجانية</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>المخاطر:</h6>
                    <ul>
                        <li>عدم ضمان العائد</li>
                        <li>مخاطر انخفاض السعر</li>
                        <li>آخر من يحصل على الأصول عند الإفلاس</li>
                        <li>تقلبات في الأرباح الموزعة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-info">
        <h5><i class="fas fa-info-circle"></i> مثال واقعي: شركة بركشاير هاثاواي</h5>
        <p>قام وارين بفت بإصدار صنفين من الأسهم العادية لشركة بركشاير هاثاواي:</p>
        <ul class="mb-0">
            <li><strong>فئة (أ):</strong> السهم الأصلي بسعر مرتفع وحق تصويت كامل</li>
            <li><strong>فئة (ب):</strong> سهم جديد بسعر منخفض وحق تصويت محدود (1/30 من فئة أ)</li>
        </ul>
    </div>
</div>

<div id="stock-splits" class="section mb-4">
    <h2 class="section-title">تجزئة الأسهم</h2>
    
    <p>تجزئة الأسهم هي عملية تغيير شكلي لعدد الأسهم المصدرة دون تغيير القيمة الإجمالية للشركة.</p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h5><i class="fas fa-arrow-up"></i> تجزئة الأسهم للأعلى</h5>
                </div>
                <div class="card-body">
                    <p><strong>مثال:</strong> تجزئة 2:1</p>
                    <ul>
                        <li>من يملك 100 سهم يصبح لديه 200 سهم</li>
                        <li>ينخفض سعر السهم إلى النصف</li>
                        <li>القيمة الإجمالية تبقى كما هي</li>
                        <li>يزيد السيولة في السوق</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-warning text-white">
                    <h5><i class="fas fa-arrow-down"></i> تجزئة الأسهم للأسفل</h5>
                </div>
                <div class="card-body">
                    <p><strong>مثال:</strong> تجزئة 1:10</p>
                    <ul>
                        <li>من يملك 100 سهم يصبح لديه 10 أسهم</li>
                        <li>يرتفع سعر السهم 10 أضعاف</li>
                        <li>القيمة الإجمالية تبقى كما هي</li>
                        <li>يقلل من عدد الأسهم المتداولة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5><i class="fas fa-lightbulb"></i> متى تقوم الشركة بتجزئة الأسهم؟</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6>تجزئة للأعلى:</h6>
                    <ul>
                        <li>عندما يصبح سعر السهم مرتفعاً جداً</li>
                        <li>لزيادة السيولة في السوق</li>
                        <li>لتسهيل التداول على صغار المستثمرين</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>تجزئة للأسفل:</h6>
                    <ul>
                        <li>عندما يصبح سعر السهم منخفضاً جداً</li>
                        <li>لتجنب إزالة السهم من السوق</li>
                        <li>لتحسين صورة الشركة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>';

// Include template
include get_template_path('chapter_template.php');
?> 