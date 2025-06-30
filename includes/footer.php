<?php
// Include configuration file if not already included
if (!defined('SECURE_ACCESS')) {
    require_once __DIR__ . '/config.php';
}
?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>المال والاستثمار في الأسواق المالية</h5>
                    <p>كتاب شامل عن الاستثمار في الأسواق المالية</p>
                    <p>تأليف: الدكتور فهد الحويماني</p>
                </div>
                <div class="col-md-6">
                    <h5>روابط سريعة</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo get_page_url('index.php'); ?>">الصفحة الرئيسية</a></li>
                        <li><a href="<?php echo get_page_url('pages/toc.php'); ?>">فهرس المحتويات</a></li>
                        <li><a href="<?php echo get_page_url('pages/introduction.php'); ?>">المقدمة</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2024 جميع الحقوق محفوظة. هذا الكتاب مخصص للاستخدام التعليمي والبحثي.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 