<?php
// Include configuration
require_once __DIR__ . '/../../includes/config.php';

// Set page variables
$page_title = 'الفصل الأول - الجزء الأول: مقدمة الاستثمار - ' . SITE_NAME;
$page_description = 'مقدمة شاملة عن الاستثمار في الأسواق المالية وأساسياته';
$page_keywords = 'استثمار, مقدمة, أسواق مالية, أساسيات, الدكتور فهد الحويماني';
$page_author = SITE_AUTHOR;
$page_url = get_chapter_url('chapter1_part1.php');
$chapter_title = 'الفصل الأول: الاستثمار في الأسهم - الجزء الأول: مقدمة الاستثمار';
$current_page = 'chapter1_part1';

// Navigation links
$prev_chapter = '';
$next_chapter = get_chapter_url('chapter1_part2.php');

// Table of contents
$table_of_contents = '
<ul class="list-unstyled">
    <li><a href="#introduction">مقدمة في الاستثمار</a></li>
    <li><a href="#investment-basics">أساسيات الاستثمار</a></li>
    <li><a href="#market-types">أنواع الأسواق المالية</a></li>
    <li><a href="#risk-return">العلاقة بين المخاطرة والعائد</a></li>
</ul>';

// Chapter content
$chapter_content = '
<div id="introduction" class="mb-4">
    <h2>مقدمة في الاستثمار</h2>
    <p>
        الاستثمار هو عملية تخصيص الأموال في أصول مختلفة بهدف تحقيق عائد مالي في المستقبل. 
        يعتبر الاستثمار من أهم الأدوات المالية التي تساعد الأفراد والمؤسسات على تنمية ثرواتهم 
        وتحقيق أهدافهم المالية.
    </p>
    <p>
        في هذا الفصل، سنتعرف على أساسيات الاستثمار وأنواعه المختلفة، وكيفية اتخاذ قرارات 
        استثمارية مدروسة ومحسوبة.
    </p>
</div>

<div id="investment-basics" class="mb-4">
    <h2>أساسيات الاستثمار</h2>
    <p>
        قبل البدء في الاستثمار، يجب فهم بعض المفاهيم الأساسية:
    </p>
    <ul>
        <li><strong>الأصول:</strong> هي الموارد المالية التي يمكن الاستثمار فيها</li>
        <li><strong>العائد:</strong> هو الربح أو الخسارة المحققة من الاستثمار</li>
        <li><strong>المخاطرة:</strong> هي احتمالية عدم تحقيق العائد المتوقع</li>
        <li><strong>التنويع:</strong> هو توزيع الاستثمارات على أصول مختلفة لتقليل المخاطر</li>
    </ul>
</div>

<div id="market-types" class="mb-4">
    <h2>أنواع الأسواق المالية</h2>
    <p>
        هناك عدة أنواع من الأسواق المالية التي يمكن الاستثمار فيها:
    </p>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">سوق الأسهم</h5>
                    <p class="card-text">سوق تداول أسهم الشركات المساهمة</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">سوق السندات</h5>
                    <p class="card-text">سوق تداول السندات الحكومية والشركات</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">سوق العملات</h5>
                    <p class="card-text">سوق تداول العملات الأجنبية</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">سوق السلع</h5>
                    <p class="card-text">سوق تداول السلع الأساسية</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="risk-return" class="mb-4">
    <h2>العلاقة بين المخاطرة والعائد</h2>
    <p>
        هناك علاقة طردية بين مستوى المخاطرة والعائد المتوقع. كلما زادت المخاطرة، 
        زاد العائد المتوقع والعكس صحيح. لذلك يجب على المستثمر:
    </p>
    <ul>
        <li>تحديد مستوى المخاطرة المناسب له</li>
        <li>فهم العلاقة بين المخاطرة والعائد</li>
        <li>تنويع الاستثمارات لتقليل المخاطر</li>
        <li>وضع خطة استثمارية واضحة</li>
    </ul>
    <div class="alert alert-info">
        <strong>نصيحة:</strong> لا تستثمر أبداً أكثر مما تستطيع تحمل خسارته، 
        وابدأ دائماً بمبالغ صغيرة حتى تكتسب الخبرة.
    </div>
</div>';

// Include template
include get_template_path('chapter_template.php');
?> 