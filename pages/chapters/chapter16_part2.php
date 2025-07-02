<?php
$page_title = "الفصل السادس عشر: عقود الخيار - الجزء الثاني";
$page_description = "تعرف على خصائص عقود الخيار وأنواعها المختلفة";
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
                    <li class="breadcrumb-item active" aria-current="page">الفصل السادس عشر - الجزء الثاني</li>
                </ol>
            </nav>

            <!-- Chapter Header -->
            <div class="chapter-header text-center mb-5">
                <h1 class="display-4 text-primary mb-3">
                    <i class="fas fa-chart-line me-3"></i>
                    الفصل السادس عشر: عقود الخيار
                </h1>
                <h2 class="h4 text-secondary">الجزء الثاني: خصائص عقود الخيار وأنواعها</h2>
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
                            <i class="fas fa-cogs me-2"></i>
                            خصائص عقود الخيار
                        </h3>
                        
                        <p class="lead">
                            هناك عدة خصائص لعقد الخيار يجب فهمها بشكل صحيح قبل الدخول في تفاصيل كيفية عمل عقود الخيار وطرق الاستفادة منها.
                        </p>

                        <h4 class="text-success mt-4 mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            أماكن تداول عقود الخيار
                        </h4>

                        <p>
                            يتم تداول عقود الخيار في عدة أسواق، أشهرها سوق شيكاغو لعقود الخيار (Chicago Board Options Exchange - CBOE)، المعروف بسوق CBOE.
                        </p>

                        <div class="alert alert-info">
                            <h5><i class="fas fa-building me-2"></i>الأسواق الرئيسية</h5>
                            <ul class="mb-0">
                                <li>سوق شيكاغو لعقود الخيار (CBOE)</li>
                                <li>سوق فيلادلفيا</li>
                                <li>السوق الأمريكي</li>
                                <li>سوق نيويورك لعقود الخيار والمؤشرات</li>
                                <li>السوق الباسيفيكي</li>
                            </ul>
                        </div>

                        <h4 class="text-warning mt-4 mb-3">
                            <i class="fas fa-tags me-2"></i>
                            أنواع عقود الخيار
                        </h4>

                        <p>
                            هناك نوعان فقط من أنواع عقود الخيار: عقد الشراء (Call Option) وعقد البيع (Put Option).
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <h5 class="mb-0">
                                            <i class="fas fa-arrow-up me-2"></i>
                                            عقد الشراء (Call Option)
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>
                                            هو عبارة عن اتفاقية بين البائع والمشتري من خلالها يستطيع مشتري العقد، إن أراد ذلك، أن يقوم بشراء الأصل خلال فترة محددة وبسعر محدد من بائع العقد.
                                        </p>
                                        <div class="alert alert-success">
                                            <small>
                                                <strong>الربح:</strong> يتحقق عندما يرتفع سعر الأصل عن السعر المحدد في العقد
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-danger">
                                    <div class="card-header bg-danger text-white">
                                        <h5 class="mb-0">
                                            <i class="fas fa-arrow-down me-2"></i>
                                            عقد البيع (Put Option)
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p>
                                            هو اتفاقية أخرى بين البائع والمشتري من خلالها يستطيع مشتري العقد، إن أراد ذلك، أن يقوم "ببيع" الأصل خلال فترة محددة وبسعر محدد.
                                        </p>
                                        <div class="alert alert-warning">
                                            <small>
                                                <strong>الربح:</strong> يتحقق عندما ينخفض سعر الأصل عن السعر المحدد في العقد
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="text-info mt-4 mb-3">
                            <i class="fas fa-users me-2"></i>
                            دور المشتري والبائع
                        </h4>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>نوع العقد</th>
                                        <th>المشتري</th>
                                        <th>البائع</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>عقد شراء (Call)</strong></td>
                                        <td>له الحق بشراء الأسهم بالسعر المحدد خلال المدة المحددة</td>
                                        <td>عليه شرط بيع الأسهم فيما لو رغب المشتري بذلك</td>
                                    </tr>
                                    <tr>
                                        <td><strong>عقد بيع (Put)</strong></td>
                                        <td>له الحق ببيع الأسهم بالسعر المحدد خلال المدة المحددة</td>
                                        <td>عليه شرط شراء الأسهم فيما لو رغب المشتري بذلك</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h4 class="text-primary mt-4 mb-3">
                            <i class="fas fa-calculator me-2"></i>
                            مثال عملي على عقد البيع
                        </h4>

                        <p>
                            في حالة عقد البيع، تكون أنت بائع العقد (ومشتري الأرض)، ويكون صديقك مشتري العقد (وبائع الأرض).
                        </p>

                        <div class="card bg-light border-warning">
                            <div class="card-body">
                                <h5 class="card-title text-warning">
                                    <i class="fas fa-handshake me-2"></i>
                                    مثال عقد البيع
                                </h5>
                                <p class="card-text">
                                    يشتري صديقك منك عقد بيع بحيث يقوم بدفع 1000 دولار لصالحك بشرط أن تشتري الأرض منه بمبلغ 100 ألف دولار خلال عام واحد إن طلب منك ذلك!
                                </p>
                            </div>
                        </div>

                        <div class="alert alert-warning">
                            <h5><i class="fas fa-exclamation-triangle me-2"></i>نقطة مهمة</h5>
                            <p class="mb-0">
                                للمشتري حق الاختيار، وعلى البائع الالتزام بالبيع أو الشراء حسب طبيعة العقد.
                            </p>
                        </div>

                        <h4 class="text-success mt-4 mb-3">
                            <i class="fas fa-chart-line me-2"></i>
                            تحليل الربحية في عقد البيع
                        </h4>

                        <p>
                            هل هذه الطريقة مجدية لك ولصديقك؟ لماذا يقوم بدفع 1000 دولار لصالحك، ومن ثم يبيعك أرضاً قيمتها الحالية 100 ألف دولار بمبلغ 100 ألف دولار خلال عام؟
                        </p>

                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-trophy me-2"></i>
                                    الخلاصة
                                </h5>
                                <p class="card-text">
                                    عقود الخيار تتيح للمستثمرين تحقيق أرباح من خلال التحركات السعرية للأصول، سواء كانت صاعدة أو هابطة، مع إدارة المخاطر بشكل فعال.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-between mt-5">
                    <a href="chapter16_part1.php" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-right me-2"></i>
                        الجزء السابق
                    </a>
                    <a href="chapter16_part3.php" class="btn btn-primary">
                        <i class="fas fa-arrow-left me-2"></i>
                        الجزء التالي
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php'; ?> 