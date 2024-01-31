<?php include('frontend/layouts/general.php'); ?>
<?php include('backend/app/login.php') ; ?>
<br>

<div class="login">
    <form action="" method="post">
        <div>
            <label for="email-input">البريد الإلكتروني</label>
            <input id="email-input" class="input text-align-center" name="email" type="email" placeholder="example@domain.com">
        </div>
        <br>
        <div>
            <label for="password-input">كلمة المرور</label>
            <input id="password-input" class="input text-align-center" name="password" type="password">
        </div>
        <br>
        <input class="btn btn-main" type="submit" value="تسجيل دخول">
        <br>
        <a href="register.php">
            إنشاء حساب جديد
        </a>
    </form>
</div>
<?php require_once('frontend/parts/footer-auth.php'); ?>