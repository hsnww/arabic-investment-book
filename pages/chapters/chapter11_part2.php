<?php
$page_title = "الفصل الحادي عشر - الجزء الثاني: دور البنك المركزي ومؤشرات السوق";
$page_description = "تعرف على دور البنك المركزي في التحكم بالاقتصاد، وأدواته المختلفة مثل أسعار الفائدة وعمليات السوق المفتوحة";
$current_chapter = 11;
$current_part = 2;
$total_parts = 3;

include_once '../../includes/header.php';
include_once '../../includes/navigation.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <!-- عنوان الفصل -->
            <div class="chapter-header text-center mb-5">
                <h1 class="display-4 text-primary mb-3">
                    <i class="fas fa-university me-3"></i>
                    الفصل الحادي عشر
                </h1>
                <h2 class="h3 text-secondary">متابعة المؤشرات المالية والاقتصادية</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-info me-2">الجزء الثاني من ثلاثة</span>
                    <span class="badge bg-success">البنك المركزي</span>
                </div>
            </div>

            <!-- دور البنك المركزي -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-university me-2"></i>
                        دور البنك المركزي في الاقتصاد
                    </h5>
                </div>
                <div class="card-body">
                    <p>
                        يلعب البنك المركزي دوراً محورياً في التحكم بالاقتصاد من خلال عدة أدوات 
                        تمكنه من التأثير على كمية النقود المتداولة وأسعار الفائدة.
                    </p>
                    <div class="alert alert-primary">
                        <strong>السلطة المطلقة للبنك المركزي:</strong>
                        يتمتع البنك المركزي بسلطة مطلقة تمكنه من دفع الحركة الاقتصادية أو الحد منها 
                        من خلال التحكم في عرض النقود وأسعار الفائدة.
                    </div>
                </div>
            </div>

            <!-- أسعار الفائدة -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-percentage me-2"></i>
                        أسعار الفائدة وأدوات البنك المركزي
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-success mb-3">
                                <div class="card-header bg-success text-white">
                                    <h6 class="mb-0">سعر الخصم (Discount Rate)</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        السعر الذي يفرضه البنك المركزي على البنوك التجارية عند اقتراضها منه.
                                    </p>
                                    <div class="alert alert-success small">
                                        <strong>الأهمية:</strong> مؤشر لاتجاه معدلات الفائدة في البلاد
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-info mb-3">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0">سعر التمويل الفدرالي (Federal Funds Rate)</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        السعر الفعلي الذي تدفعه البنوك لبعضها البعض عند الاقتراض.
                                    </p>
                                    <div class="alert alert-info small">
                                        <strong>الأهمية:</strong> يؤثر في نهاية الأمر على الحركة الاقتصادية
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-warning">
                                <div class="card-header bg-warning text-dark">
                                    <h6 class="mb-0">معدل الفائدة المفضل (Prime Rate)</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        السعر الذي يحصل عليه أفضل العملاء من البنوك التجارية، 
                                        ويكون أعلى من سعري الخصم والتمويل الفدرالي.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-secondary">
                                <div class="card-header bg-secondary text-white">
                                    <h6 class="mb-0">سعر LIBOR</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        سعر الفائدة بين البنوك في لندن، يؤخذ أحياناً كمقياس لأفضل معدلات الفائدة.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- عمليات السوق المفتوحة -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-exchange-alt me-2"></i>
                        عمليات السوق المفتوحة (Open Market Operations)
                    </h5>
                </div>
                <div class="card-body">
                    <p>
                        طريقة يقوم فيها البنك المركزي ببيع سندات حكومية أو شرائها من أجل التحكم 
                        في كمية عرض النقود في البلاد.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-success">
                                <div class="card-header bg-success text-white">
                                    <h6 class="mb-0">شراء السندات الحكومية</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        عندما يريد البنك المركزي زيادة عرض النقود، يقوم بشراء السندات الحكومية 
                                        من سماسرة السندات، مما يؤدي إلى رفع السيولة النقدية لدى البنوك.
                                    </p>
                                    <div class="alert alert-success small">
                                        <strong>النتيجة:</strong> زيادة عرض النقود وانخفاض أسعار الفائدة
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-warning">
                                <div class="card-header bg-warning text-dark">
                                    <h6 class="mb-0">بيع السندات الحكومية</h6>
                                </div>
                                <div class="card-body">
                                    <p class="small">
                                        عندما يريد البنك المركزي خفض عرض النقود، يقوم ببيع السندات الحكومية 
                                        في المزاد المخصص، مما يؤدي إلى انخفاض السيولة النقدية لدى البنوك.
                                    </p>
                                    <div class="alert alert-warning small">
                                        <strong>النتيجة:</strong> انخفاض عرض النقود وارتفاع أسعار الفائدة
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- نسبة الاقتراض -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">
                        <i class="fas fa-hand-holding-usd me-2"></i>
                        نسبة الاقتراض (Margin Requirements)
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6>ما هي نسبة الاقتراض؟</h6>
                            <p>
                                نسبة الاقتراض في حساب الهامش لدى وسطاء الأسهم، حيث يستطيع المستثمر 
                                أن يقترض من الوسيط نصف المبلغ المطلوب لشراء الأسهم (أو ضعف رأس ماله).
                            </p>
                            <div class="alert alert-warning">
                                <strong>تأثير تغيير نسبة الاقتراض:</strong>
                                <ul class="mb-0 mt-2">
                                    <li><strong>خفض النسبة:</strong> يحد من التوسع في الاستثمار ويقلل المضاربات</li>
                                    <li><strong>رفع النسبة:</strong> يشجع على التوسع والازدهار الاقتصادي</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h6 class="text-primary">مثال على الاقتراض</h6>
                                    <div class="mt-3">
                                        <div class="d-flex justify-content-between">
                                            <span>رأس المال</span>
                                            <span class="badge bg-primary">$10,000</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span>الاقتراض</span>
                                            <span class="badge bg-success">$10,000</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span>إجمالي الاستثمار</span>
                                            <span class="badge bg-info">$20,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- مؤشر أسعار المنتجين -->
            <div class="card mb-4">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-industry me-2"></i>
                        مؤشر أسعار المنتجين (PPI)
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>تعريف مؤشر أسعار المنتجين:</h6>
                            <p>
                                مؤشر مهم وسباق يتنبأ باحتمال حدوث تضخم في الأسعار، يركز على المنتجات 
                                الكبيرة وأسعار الجملة.
                            </p>
                            <div class="alert alert-secondary">
                                <strong>مميزات PPI:</strong>
                                <ul class="mb-0 mt-2">
                                    <li>لا يشمل أسعار الخدمات</li>
                                    <li>يركز على أسعار الجملة</li>
                                    <li>مؤشر سباق للتضخم</li>
                                    <li>يشمل المواد الخام والمنتجات النهائية</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>أهمية المؤشر:</h6>
                            <p>
                                ارتفاع الأسعار يتبين أولاً لدى المنتجين وتجار الجملة قبل أن يصل إلى الأسواق، 
                                مما يجعل هذا المؤشر أداة مهمة للتنبؤ بالتضخم.
                            </p>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="text-primary">مقارنة مع CPI:</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <small><strong>PPI:</strong></small><br>
                                            <small>• أسعار الجملة</small><br>
                                            <small>• المنتجات فقط</small><br>
                                            <small>• مؤشر سباق</small>
                                        </div>
                                        <div class="col-6">
                                            <small><strong>CPI:</strong></small><br>
                                            <small>• أسعار التجزئة</small><br>
                                            <small>• السلع والخدمات</small><br>
                                            <small>• مؤشر لحاق</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- نسبة البيع المسبق -->
            <div class="card mb-4">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-chart-area me-2"></i>
                        نسبة البيع المسبق (Short Interest Ratio)
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h6>ما هي نسبة البيع المسبق؟</h6>
                            <p>
                                مقياس لمعرفة مقدار الأسهم التي تم بيعها بشكل مسبق، فإذا كانت قيمة المقياس 2 
                                لشركة ما، فيدل ذلك على أن عدد الأسهم المباعة مسبقاً يساوي ضعف معدل عدد 
                                الأسهم المتداولة يومياً.
                            </p>
                            <div class="alert alert-danger">
                                <strong>نظرية الاتجاه المخالف (Contrarian Theory):</strong>
                                كلما كانت نسبة البيع المسبق عالية جداً، فإن السهم يبدأ بالارتفاع بعد ذلك 
                                بفترة قصيرة، لأن الأغلبية في أسواق الأسهم على خطأ.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h6 class="text-primary">تفسير النسب</h6>
                                    <div class="mt-3">
                                        <div class="d-flex justify-content-between">
                                            <span>نسبة < 1</span>
                                            <span class="badge bg-success">تفاؤل</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span>نسبة 1-2</span>
                                            <span class="badge bg-warning">حيادية</span>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span>نسبة > 2</span>
                                            <span class="badge bg-danger">تشاؤم</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- مؤشرات اقتصادية أخرى -->
            <div class="card mb-4">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-list-ul me-2"></i>
                        مؤشرات اقتصادية أخرى مهمة
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>مؤشرات الإنفاق والاستثمار:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-building text-primary me-2"></i>
                                    <strong>الإنفاق الرأسمالي (CAPEX):</strong> قيمة العقود لإنشاء المباني والمصانع
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-shopping-cart text-success me-2"></i>
                                    <strong>مبيعات التجزئة:</strong> حجم المشتريات الخاصة بالأفراد
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-home text-info me-2"></i>
                                    <strong>تراخيص البناء:</strong> عدد تراخيص بناء المنازل الصادرة
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>مؤشرات التوظيف والإنتاجية:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-users text-warning me-2"></i>
                                    <strong>نسبة البطالة:</strong> وتغيرها من شهر لآخر
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-chart-line text-danger me-2"></i>
                                    <strong>إنتاجية العامل:</strong> مقياس كفاءة العمالة
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-clipboard-list text-secondary me-2"></i>
                                    <strong>طلبات الشراء:</strong> عدد الطلبات التي لم تنفذ بعد
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="alert alert-info mt-3">
                        <strong>نصيحة للمستثمر:</strong>
                        من المهم جداً متابعة المؤشرات الخاصة بالقطاع أو الصناعة التي ترغب الاستثمار فيها، 
                        ويمكن إنشاء مؤشرات خاصة بك بناءً على ملاحظاتك الشخصية.
                    </div>
                </div>
            </div>

            <!-- التنقل بين الأجزاء -->
            <div class="d-flex justify-content-between mt-5">
                <a href="chapter11_part1.php" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-right me-2"></i>
                    الجزء الأول
                </a>
                <a href="chapter11_part3.php" class="btn btn-primary">
                    الجزء الثالث
                    <i class="fas fa-arrow-left ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include_once '../../includes/footer.php'; ?> 