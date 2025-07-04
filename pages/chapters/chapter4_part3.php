<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الرابع: التحليل الأساسي - الجزء الثالث: تحليل القوائم المالية - ' . SITE_NAME;
$page_description = 'الفصل الرابع الجزء الثالث: تحليل القوائم المالية - قراءة وتفسير القوائم المالية';
$page_keywords = 'القوائم المالية, الميزانية العمومية, قائمة الدخل';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter4_part3.php');
$chapter_title = 'الفصل الرابع: التحليل الأساسي - الجزء الثالث: تحليل القوائم المالية';
$current_page = 'chapter4_part3';

// Navigation links
$prev_chapter = get_chapter_url('chapter4_part2.php');
$next_chapter = get_chapter_url('chapter5_part1.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#content">محتوى الفصل</a></li>
</ul>';

// Chapter Content
$chapter_content = '<div class=\"content-section\">
                <h3><i class=\"fas fa-network-wired\"></i> سوق نازداك للأسهم</h3>
                <p>بدأ سوق نازداك (National Association of Securities Dealers Automated Quotations - NASDAQ) أعماله في عام 1971 كوسيلة لتنظيم تداول أسهم الشركات الكثيرة التي لم تحظ بفرص التسجيل في سوق نيويورك الشهير، حيث كانت أسهم هذه الشركات تباع وتشترى عن طريق صناع السوق فيما يعرف بسوق من على الكاونتر (Over the Counter - OTC). كون الأسهم كانت تباع وتشترى مناولة من على كاونتر (طاولة).</p>

                <div class=\"info-box\">
                    <h4><i class=\"fas fa-info-circle\"></i> طبيعة سوق نازداك</h4>
                    <p>عند إنشاء سوق نازداك للتداول الإلكتروني والذي تتولاه الجمعية الوطنية لبائعي الأسهم (NASD)، أصبح هذا السوق بلا كاونتر، بل إن هذا السوق لا يوجد بشكل كيان عمراني على الإطلاق كما هو الحال في سوق نيويورك. سوق نازداك هو عبارة عن عدد كبير من صناع السوق (Market Makers) الذين هم سماسرة ووكلاء بنوك استثمار وغيرهم من المهنيين العاملين في الأسواق المالية والمتواجدين في أماكن مختلفة حول الولايات المتحدة.</p>
                </div>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-users\"></i> صناع السوق ودورهم</h3>
                <p>ويتجاوز عدد صناع السوق في سوق نازداك الخمسمائة. ويستخدمون أجهزة الحاسب الآلي للارتباط بشبكة تداول الأسهم الخاصة بجمعية NASD، والتي من خلالها يتم عرض أسعار الأسهم وإتمام عمليات البيع والشراء. وتوجد هذه الحاسبات الرئيسية لسوق نازداك في ولاية كوناتيكات (Connecticut)، وتوجد لها أجهزة رديفة (Backup) في ولاية ماريلاند (Maryland).</p>

                <div class=\"market-comparison\">
                    <h4><i class=\"fas fa-balance-scale\"></i> مقارنة بين سوق نيويورك ونازداك</h4>
                    <div class=\"market-grid\">
                        <div class=\"market-item\">
                            <h5><i class=\"fas fa-building\"></i> سوق نيويورك (NYSE)</h5>
                            <ul>
                                <li>سوق مركزي فيدي</li>
                                <li>يعتمد على الأخصائيين</li>
                                <li>عدد محدود من الشركات</li>
                                <li>تداول يدوي وإلكتروني</li>
                                <li>شروط تسجيل صارمة</li>
                            </ul>
                        </div>
                        <div class=\"market-item\">
                            <h5><i class=\"fas fa-network-wired\"></i> سوق نازداك (NASDAQ)</h5>
                            <ul>
                                <li>سوق إلكتروني موزع</li>
                                <li>يعتمد على صناع السوق</li>
                                <li>عدد كبير من الشركات</li>
                                <li>تداول إلكتروني بالكامل</li>
                                <li>شروط تسجيل مرنة نسبياً</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-chart-line\"></i> العرض والطلب في نازداك ودور صناع السوق</h3>
                <p>يضم هذا السوق المترامي الأطراف أسهم نحو 5000 شركة، وهو بذلك أكبر من سوق نيويورك من حيث عدد الشركات وأقل منه بالنسبة للقيمة السوقية (Market Capitalization). ولكل سهم يوجد العديد من صناع السوق قد يصل إلى أكثر من مائتي صانع سوق لبعض الشركات الكبيرة، كشركة إنتل وشركة سيسكو.</p>

                <div class=\"highlight-box\">
                    <h4><i class=\"fas fa-lightbulb\"></i> دور صناع السوق</h4>
                    <p>ويتمثل دور صناع السوق في كونهم يحتفظون بمخزون معين من أسهم الشركات التي يتعاملون معها، ويقومون بالشراء والبيع مباشرة إما لصالح حسابهم الخاص أو لصالح عملائهم (الوسطاء والسماسرة وغيرهم)، أو يبيعون ويشترون بين بعضهم البعض حسب شروط وضوابط معينة.</p>
                </div>

                <p>يشترط نظام نازداك على صانع السوق إدخال أوامر شراء وبيع بشكل مستمر وبكمية لا تقل عن 100 سهم أو 1000 سهم حسب طبيعة السهم. حيث يشترط النظام حالياً فيما يخص الأسهم الصغيرة ألا تقل الكمية المعروضة والكمية المطلوبة التي يلتزم بإظهارها صانع السوق عن 1000 سهم إذا كانت كمية التداول اليومية في المتوسط أقل من 10000 سهم وسعر السهم أكثر من 10 دولارات. وما عدا ذلك من الأسهم يجب ألا تقل الكمية عن 100 سهم.</p>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-exchange-alt\"></i> التداول بين سعري العرض والطلب</h3>
                <p>ظهر تنظيم جديد لعمل نازداك بناء على توجيه من هيئة الأسواق والأسهم الأمريكية في عام 1997 يقضي بأن على صناع السوق إبراز أوامر السعر المحدد (Limit Orders) التي تأتي عن طريق المستثمرين فيما إذا كانت هذه الأوامر أفضل من السعر الحالي للعرض والطلب. ويهدف هذا التنظيم إلى منع صناع السوق من استغلال ما لديهم من معلومات للتلاعب بالأسعار.</p>

                <div class=\"info-box\">
                    <h4><i class=\"fas fa-info-circle\"></i> مثال على التداول بين العرض والطلب</h4>
                    <p>لإيضاح الطريقة التي يعمل بها التنظيم لنفرض أن السعر الحالي للعرض 50 دولاراً وسعر الطلب 50.10 دولار. فإذا كنت تريد شراء 1000 سهم ولا تود دفع سعر العرض فقد تحدد أمر الشراء بمبلغ 50.05 دولار، وطبيعي ألا يتم تنفيذ الطلب بهذا السعر لأن سعر العرض الحالي لا يزال 50 دولاراً. ولكن الاستفادة من نظام نازداك الجديد تأتي لكونه يجبر صناع السوق أن يغيروا من سعر الطلب الحالي من 50.10 دولار إلى 50.05 دولار.</p>
                </div>

                <div class=\"warning-box\">
                    <h4><i class=\"fas fa-exclamation-triangle\"></i> تحذير مهم</h4>
                    <p>هنا تظهر عدم مناسبة البيع والشراء بسعر السوق والتي غالباً ما يوصي بها السماسرة والوكلاء مع الأسف الشديد. فمن الأفضل عدم البيع والشراء بسعر السوق خصوصاً للأسهم ذات التداول المتدني (ذات السوق الضحلة)، تلك التي لا يتجاوز مجمل التداول اليومي لأسهمها 100 ألف سهم. بل يفضل استخدام طريقة البيع والشراء بين سعري العرض والطلب كما ذكرنا قبل قليل.</p>
                </div>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-user-tie\"></i> ما تجب معرفته عن صناع السوق</h3>
                <p>إن هدف صناع السوق في نهاية الأمر هو الربح المالي، إلا أن وجودهم في الأسواق ضروري لكونهم يمدون السوق بالسيولة المستمرة، بالرغم من أنهم يتلقون قسطاً من المجازفة مقابل ذلك. ففي حالة اندفاع الناس لشراء السهم يجب على صانع السوق مدهم بالأسهم إما من حسابه الخاص إن كان لديه أسهم أو عن طريق البيع المسبق (بيع أسهم الزبائن الآخرين).</p>

                <div class=\"highlight-box\">
                    <h4><i class=\"fas fa-chart-bar\"></i> استراتيجية المراوحة</h4>
                    <p>من الإستراتيجيات التي يقوم بها صناع السوق والتي من الواجب معرفتها، تلك الحالات التي يقوم فيها صانع السوق بعرض كميات كبيرة مما لديه من أسهم للبيع عند سعر معين، خاصة عندما يجد أن لديه مخزون كبير من الأسهم. فتكون منطقة السعر هذه منطقة مقاومة للسهم؛ يقف دونها ولا يستطيع التقدم. وفي الوقت نفسه، يقوم صانع السوق بإدخال أوامر شراء كبيرة عند سعر أقل من ذلك. فتكون النتيجة أن يبيع بسعر عالٍ ويشتري بسعر منخفض، وتعرف هذه الطريقة بالمراوحة.</p>
                </div>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-sitemap\"></i> أسواق أخرى</h3>
                <p>يجب عدم الخلط بين سوق نازداك وكل من سوق OTCBB وسوق Pink Sheets، حيث أن هذين السوقين مستقلان عن نازداك. وتعتبر الأسهم المسجلة فيهما أقل جودة من أسهم نازداك الذي بدوره ينقسم إلى قسمين: الأول ما يعرف بسوق الأسهم الصغيرة (NASDAQ Small Cap) والثاني سوق نازداك الوطني للأسهم (NASDAQ National Market). وهذا الأخير يضم أكبر الشركات في نازداك.</p>

                <div class=\"price-levels\">
                    <h4><i class=\"fas fa-layer-group\"></i> تصنيف الأسواق من حيث الجودة</h4>
                    <div class=\"level-item\">
                        <h5>1. سوق بورصات</h5>
                        <p>مثل سوق نيويورك والسوق الأمريكي وبقية الأسواق الإقليمية</p>
                    </div>
                    <div class=\"level-item\">
                        <h5>2. سوق نازداك الوطني</h5>
                        <p>يضم أكبر الشركات في نازداك</p>
                    </div>
                    <div class=\"level-item\">
                        <h5>3. سوق نازداك الصغير</h5>
                        <p>للشركات الصغيرة والمتوسطة</p>
                    </div>
                    <div class=\"level-item\">
                        <h5>4. سوق لوحة الملصقات (OTCBB)</h5>
                        <p>للشركات التي لا تستوفي شروط نازداك</p>
                    </div>
                    <div class=\"level-item\">
                        <h5>5. سوق الأوراق الوردية (Pink Sheets)</h5>
                        <p>للشركات الأقل جودة</p>
                    </div>
                </div>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-file-contract\"></i> شروط التسجيل</h3>
                <p>من أهم شروط التسجيل في سوق نازداك الوطني ألا يقل رأس مال الشركة عن حوالي 8 ملايين دولار (الرقم الحقيقي يعتمد على تصنيفات أخرى لن نتطرق لها هنا)، ولا تقل القيمة السوقية عن حوالي 18 مليون دولار وعدد الأسهم عن 1.1 مليون سهم ولا يقل سعر السهم عند التسجيل عن 5 دولارات ولا يقل عن دولار واحد فيما بعد ذلك. وبالنسبة لعدد المستثمرين يجب ألا يقل عن 400 شخص، كل شخص يملك على الأقل مائة سهم.</p>

                <div class=\"info-box\">
                    <h4><i class=\"fas fa-dollar-sign\"></i> رسوم التسجيل</h4>
                    <p>وتقوم الشركة المسجلة في السوق بدفع حوالي 100 ألف دولار عند التسجيل وحوالي 60 ألف دولار سنوياً. أما بالنسبة لسوق نازداك الصغير فشروط التسجيل مشابهة ولكنها أقل صرامة مما ذكر. على سبيل المثال، يجب ألا يقل رأس مال الشركة عن حوالي 4 ملايين دولار، والقيمة السوقية أكثر من 5 ملايين دولارات ولا يقل عن 1 دولار فيما بعد ذلك.</p>
                </div>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-chart-line\"></i> مستويات الأسعار</h3>
                <p>بقي أن نعرف أن المعلومات المتوفرة عن أسعار الأسهم لدى نازداك تأتي في ثلاثة مستويات:</p>

                <div class=\"info-box\">
                    <h4><i class=\"fas fa-layer-group\"></i> المستويات الثلاثة</h4>
                    <ul>
                        <li><strong>المستوى الأول (Level I):</strong> وهو الذي يظهر عادة على الشاشات وعن طريق شبكة الإنترنت أو غيرها، وهو متوفر لدى جميع المسجلين رسمياً لدى نازداك. وهذا المستوى يبين أعلى سعر للطلب وأقل سعر للعرض والكمية المطلوبة والمعروضة.</li>
                        <li><strong>المستوى الثاني (Level II):</strong> ويستخدم من قبل المحترفين من مستثمرين وسماسرة ويعطي معلومات إضافية عن حالة العرض والطلب وعن هوية صناع السوق.</li>
                        <li><strong>المستوى الثالث (Level III):</strong> وهو خاص بصناع السوق ويحتوي على جميع المعلومات المتوفرة عن طريق المستوى الثاني، علاوة على إمكانية إضافة وحذف بيانات العرض والطلب الخاصة بصانع السوق والحصول على أوامر بيع وشراء ذات خصائص معينة.</li>
                    </ul>
                </div>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-coins\"></i> الأسهم الرخيصة</h3>
                <p>هناك مفهوم خاطئ لدى الكثير من المتداولين يتمثل في الاعتقاد بأن الشركة التي سعرها منخفض تعتبر \"رخيصة\" وتلك التي سعرها مرتفع تعتبر \"غالية\"، وهذا غير صحيح لأن السعر بحد ذاته لا يعني الشيء الكثير. على سبيل المثال، يستطيع مجلس إدارة أي شركة أن يغير من سعر الشركة كيفما شاء، وذلك بإجراء تجزئة عادية أو عكسية للسهم.</p>

                <div class=\"danger-box\">
                    <h4><i class=\"fas fa-exclamation-triangle\"></i> أسهم البنس (السنت)</h4>
                    <p>تسمى الأسهم متدنية السعر بأسهم البنس (أو السنت)، ويطلق الاسم عادة على الأسهم التي سعرها أقل من دولار. ومن الأخطاء التي يقع فيها كثير من المضاربين بأسهم السنتات عدم التفكير بمقدار الربح والخسارة المتحقق من تداول هذه الأسهم. على سبيل المثال، قد يشتري شخص أسهماً بسعر 15 سنت للسهم الواحد، وتنخفض ربما خلال اليوم ذاته إلى 10 سنتات، فتجد أن الشخص لا يشعر بأن الخسارة في هذه الحالة تزيد عن 33%، وهي عالية جداً بجميع المقاييس.</p>
                </div>

                <div class=\"warning-box\">
                    <h4><i class=\"fas fa-calculator\"></i> حساب مهم</h4>
                    <p>ولا ننسى أن نسبة الفارق بين سعر العرض والطلب يعتبر عالياً في أسهم السنتات، أولاً بسبب ضعف كمية التداول وثانياً بسبب السعر نفسه. على سبيل المثال، إذا كان سعر العرض 10 سنتاً وسعر الطلب 11 سنتاً، فالفارق مجرد 1 سنت، وهو شيء جميل ومحبب في أسهم الشركات الكبيرة. ولكن للأسف أن هذا الفرق في واقع الأمر يعادل حوالي 10% من قيمة السهم. أي أنه لحظة شراء السهم يكون المشتري قد حقق خسارة فورية قدرها 10% من ماله!</p>
                </div>
            </div>

            <div class=\"content-section\">
                <h3><i class=\"fas fa-check-circle\"></i> الخلاصة</h3>
                <p>تم تعريف سوق المال بأنه مكان يلتقي فيه المحتاج للمال بمن لديه فائض من المال، بحيث يحصل الأول على المال ويقوم بتعويض الثاني بشكل أو بآخر عن المدة التي يتخلى فيها عن ماله. ومثال ذلك ما تقوم به الشركات عند تقسيم ملكيتها إلى عدة حصص (أسهم)، ومن ثم تقدمها لمن لديهم المال على أمل أن يجنوا مقابل ذلك الأرباح الناتجة عن نجاح الشركة ونمو قيمة أسهمها في السوق.</p>

                <div class=\"highlight-box\">
                    <h4><i class=\"fas fa-lightbulb\"></i> النقاط الرئيسية</h4>
                    <ul>
                        <li>تم التطرق لأنواع الأسواق المالية والحديث بشكل مفصل عن سوق نيويورك وكيفية عمله والطريقة التي تتم بها عمليات البيع والشراء.</li>
                        <li>يجب التأكيد مرة أخرى على ضرورة فهم العملية التي تتم بها عمليات التداول والفرق بين الأسواق القائمة على الأخصائي عن تلك التي تدار من قبل صناع السوق.</li>
                        <li>على المستثمر إدراك أنه يستطيع البيع والشراء بين سعري العرض والطلب ليقتنص بذلك أفضل الأسعار.</li>
                        <li>يجب عليه تجنب البيع والشراء بسعر السوق في معظم الأحيان عدا في بعض الحالات الخاصة، وبأي حال من الأحوال يجب تجنب ذلك في حالة الأسهم ضعيفة التداول وفي يوم الافتتاح بعد الطرح الأولي.</li>
                    </ul>
                </div>
            </div>';

// Include template
include get_template_path('chapter_template.php');
?>