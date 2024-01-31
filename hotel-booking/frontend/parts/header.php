<div class="topnav">
    <a <?=  "class='active'" ?> href="index.php">الرئيسية</a>
    <a href="services.php">خدماتنا</a>
    <a href="#contact">اتصل بنا</a>
    <a href="#about">مساعدة</a>
    <?php if (isset($_SESSION['email'])) : ?>   
        <a href="profile.php"><?= $_SESSION['email'] ?></a>
        <?php if (isset($_SESSION['is_admin'])==1 && $_SESSION['is_admin']==1) : ?>
            <a href="show_booking.php">عرض الحجوزات</a>
        <?php endif; ?>
        <a href="logout.php">تسجيل الخروج</a>
        <?php // elseif (isset($_SESSION['is_admin'])==1):?>
        <!-- <a href="booking.php">احجز الآن</a> -->
    <?php else: ?>
        <a href="login.php">تسجيل الدخول</a>
        
    <?php endif; ?>
</div>
<div id="home" class="topnav-separator"></div>