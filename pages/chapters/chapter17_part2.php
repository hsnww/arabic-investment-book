<?php
$page_title = "الفصل السابع عشر: السندات - الجزء الثاني";
$page_description = "تعرف على أنواع السندات المختلفة، كيفية حساب العائد، وتأثير معدل الفائدة على أسعار السندات";
include '../../includes/header.php';
include '../../includes/navigation.php';
?>

<div class="container mt-5" dir="rtl">
    <div class="row">
        <div class="col-12">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.php">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="../toc.php">جدول المحتويات</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الفصل السابع عشر - الجزء الثاني</li>
                </ol>
            </nav>

            <!-- Chapter Header -->
            <div class="chapter-header text-center mb-5">
                <h1 class="display-4 text-primary mb-3">
                    <i class="fas fa-chart-line me-3"></i>
                    الفصل السابع عشر: السندات
                </h1>
                <h2 class="h4 text-secondary">الجزء الثاني: أنواع السندات وحساب العائد</h2>
                <div class="chapter-meta mt-3">
                    <span class="badge bg-success me-2">
                        <i class="fas fa-clock me-1"></i>
                        وقت القراءة: 15 دقيقة
                    </span>
                    <span class="badge bg-info me-2">
                        <i class="fas fa-book me-1"></i>
                        الجزء الثاني من ثلاثة
                    </span>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="chapter-content">
                        <h3 class="text-primary mb-4">
                            <i class="fas fa-chart-line me-2"></i>
                            تأثير معدل الفائدة على أسعار السندات
                        </h3>
                        
                        <p class="lead">
                            نظراً لاختلاف سعر السند من وقت لآخر، حسب قوى العرض والطلب وتغير معدل الفائدة العام، فإن العائد على السند يتغير من وقت لآخر. ففي أي وقت من الأوقات يمكننا حساب العائد الجاري (Current Yield) على السند، وذلك بقسمة العائد الاسمي للسند على السعر الحالي للسند.
                        </p>

                        <p>وقد يكون أهم عائد ينظر إليه هو عائد الاستحقاق (YTM)، والذي يشير إلى نسبة العائد المتوقع على السند لو أن المستثمر احتفظ بالسند حتى نهاية تاريخ الاستحقاق.</p>

                        <div class="alert alert-info">
                            <h5><i class="fas fa-exclamation-triangle me-2"></i>علاقة عكسية مهمة</h5>
                            <p class="mb-0">تذكر بأن العلاقة دائماً عكسية بين سعر السند ومعدل الفائدة. عندما يرتفع معدل الفائدة، تنخفض أسعار السندات، والعكس صحيح.</p>
                        </div>

                        <h4 class="text-success mt-4 mb-3">
                            <i class="fas fa-calculator me-2"></i>
                            مثال على حساب العائد
                        </h4>
                        <div class="card bg-light border-primary">
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    <i class="fas fa-calculator me-2"></i>
                                    مثال عملي
                                </h5>
                                <p class="card-text">في نهاية عام 2000م كانت سندات 30 عاماً الحكومية الصادرة بفائدة اسمية تساوي 8.5%، تباع بسعر 1101 دولار للسند الواحد، وهي سندات مستحقة بعد حوالي 28 عاماً ونصف.</p>
                                
                                <p><strong>العائد الجاري:</strong></p>
                                <p>مبلغ الفائدة الاسمية = 8.5% × 1000 دولار = 85 دولار</p>
                                <p>العائد الجاري = 85 دولار ÷ 1101 دولار = 7.7%</p>
                                
                                <p>لاحظ أن العائد الجاري قد انخفض بينما سعر السند قد ارتفع، والسبب أن معدل الفائدة السائد في البلاد قد انخفض قليلاً مما جعل هذا السند جذاباً للمستثمرين.</p>
                            </div>
                        </div>

                        <h4 class="text-info mt-4 mb-3">
                            <i class="fas fa-list me-2"></i>
                            أنواع السندات
                        </h4>
                        <p>هناك أنواع عديدة من السندات، نستعرضها بشكل سريع فيما يلي:</p>

                        <h5 class="text-primary mt-4 mb-3">
                            <i class="fas fa-chart-line me-2"></i>
                            1. سندات بمعدل فائدة متغير (Floating Rate Bonds)
                        </h5>
                        <p>في هذا النوع من السندات يتغير معدل الفائدة حسب تقلبات معدلات الفائدة. فقد يحدد معدل فائدة معين للسند لفترة ثلاثة أشهر، ومن ثم تقوم الجهة المصدرة للسندات بتغييره ليتناسب مع معدل الفائدة العام. إلا أن هذا النوع من السندات أقل شعبية من السندات العادية.</p>

                        <h5 class="text-success mt-4 mb-3">
                            <i class="fas fa-percentage me-2"></i>
                            2. سندات بدون فائدة (Zero-Coupon Bonds)
                        </h5>
                        <p>هي سندات تصدرها بعض الشركات والوكالات الحكومية لا تمنح فائدة دورية كالمعتاد. بل يحصل المستثمر عند الاستحقاق على رأس المال إضافة إلى فائدة معينة حسب قيمة السند عند الشراء.</p>
                        
                        <p>وغالباً هذه السندات تباع بقيمة أقل من قيمتها الاسمية. فبدلاً من دفع 1000 دولار للسند الواحد يدفع المستثمر فقط 500 دولار، وعند الاستحقاق يحصل على 1000 دولار مقابل كل سند.</p>

                        <div class="alert alert-warning">
                            <h5><i class="fas fa-info-circle me-2"></i>ملاحظة مهمة</h5>
                            <p class="mb-0">بالرغم من أن هذه السندات لا تدفع فائدة دورية إلا أن على المستثمر دفع ضرائب مقابل الفائدة المفترضة في كل عام. وهناك أنواع من هذه السندات تكون معفاة من الضرائب، وهي عادة سندات تقوم بإصدارها بلديات المدن.</p>
                        </div>

                        <h5 class="text-info mt-4 mb-3">
                            <i class="fas fa-exchange-alt me-2"></i>
                            3. سندات قابلة للتحويل (Convertible Bonds)
                        </h5>
                        <p>تصدر بعض الشركات سندات يستطيع المستثمر تحويلها إلى أسهم من أسهم الشركة نفسها وبطريقة حسابية معينة، بعد فترة محددة من الزمن. الفائدة الحقيقية لهذا النوع من السندات أن الشركة المصدرة للسندات تستطيع أن تقدم معدل فائدة منخفض مقابل هذه الخاصية.</p>

                        <h5 class="text-warning mt-4 mb-3">
                            <i class="fas fa-phone me-2"></i>
                            4. سندات قابلة للاستدعاء (Callable Bonds)
                        </h5>
                        <p>بعض الشركات تصدر سندات معينة تسمح للشركة باسترجاعها في المستقبل. حيث تقوم الشركة بدفع كامل رأس المال للمستثمرين وتزيد عليه مبلغاً محدداً من المال كتعويض عن سحب السندات.</p>

                        <p>والسبب الذي يجعل الشركات تقدم هذا النوع من السندات هو أنها تعتبر طريقة للتخلص من الديون، خصوصاً عندما تنخفض معدلات الفائدة بشكل كبير وتجد الشركة نفسها تدفع فائدة باهظة لمستثمري السندات لديها، فتقوم باستدعائها.</p>

                        <h5 class="text-success mt-4 mb-3">
                            <i class="fas fa-shield-alt me-2"></i>
                            5. سندات مضمونة (Secured Bonds)
                        </h5>
                        <p>هي سندات تصدرها الشركات بضمان معين، كعقار أو معدات ضخمة أو أساطيل طائرات أو غيرها من الأصول ذات القيمة، وذلك لبعث الثقة فيها، وبالتالي المقدرة على إصدارها بمعدل فائدة منخفض.</p>

                        <h5 class="text-danger mt-4 mb-3">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            6. سندات غير مضمونة (Unsecured Bonds)
                        </h5>
                        <p>تسمى Junk Bonds، وهي سندات تصدرها الشركات القوية اعتماداً على مصداقيتها وقوة مراكزها المالية، أو تصدرها الشركات الصغيرة ولكن بتعويض حملة السندات بمعدل فائدة أعلى نسبياً مما هو متاح بطرق أخرى.</p>

                        <div class="alert alert-danger">
                            <h5><i class="fas fa-exclamation-triangle me-2"></i>ترتيب الأولوية في التصفية</h5>
                            <p class="mb-0">في حالة تصفية الشركة بسبب الإفلاس فإن حملة السندات المضمونة لهم الأولوية في أصول الشركة، يليهم حملة السندات غير المضمونة، وأخيراً حملة الأسهم.</p>
                        </div>

                        <h4 class="text-primary mt-4 mb-3">
                            <i class="fas fa-calculator me-2"></i>
                            كيفية حساب عائد الاستحقاق (YTM)
                        </h4>
                        <p>يحسب عائد الاستحقاق بالاستعانة بآلة حاسبة مخصصة للحسابات المالية. ولكن نستطيع أن نقرب عملية حسابه باستخدام المعادلة التالية:</p>

                        <div class="card bg-light border-primary">
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    <i class="fas fa-calculator me-2"></i>
                                    معادلة عائد الاستحقاق
                                </h5>
                                <p class="text-center"><strong>YTM = [C + (F - P) / n] / [(F + P) / 2]</strong></p>
                                <p>حيث:</p>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <strong>C:</strong> مبلغ الفائدة الاسمية على السند
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <strong>F:</strong> القيمة الاسمية للسند
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <strong>P:</strong> السعر الحالي للسند
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        <strong>n:</strong> المدة المتبقية للاستحقاق
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p>باستخدام هذه المعادلة نستطيع أن نحسب عائد الاستحقاق (YTM) لسندات 30 عاماً الحكومية باستخدام القيم التالية: C = 85 دولار، F = 1000 دولار، P = 1101 دولار، n = 28.5 عام وبذلك نحصل على YTM = 7.6%.</p>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-between mt-5">
                    <a href="chapter17_part1.php" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-right me-2"></i>
                        الجزء السابق
                    </a>
                    <a href="chapter17_part3.php" class="btn btn-primary">
                        <i class="fas fa-arrow-left me-2"></i>
                        الجزء التالي
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?> 