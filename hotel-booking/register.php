<?php include('frontend/layouts/general.php'); ?>
<br>
<div class="login">
    <form action="" method="post">
        <div>
            <label for="email-input">البريد الإلكتروني</label>
            <input id="email-input" class="input text-align-center" name="email" type="email" placeholder="example@domain.com">
        </div>
        <div>
            <label for="password-input">كلمة المرور</label>
            <input id="password-input" class="input text-align-center" name="password" type="password">
        </div>
        <div>
            <label for="password2-input">تأكيد كلمة المرور</label>
            <input id="password2-input" class="input text-align-center" name="confirm_password" type="password">
        </div>
        <p>
        لديك حساب بالفعل ؟
        <a href="login.php">تسجيل الدخول</a>
        </p>
    </form>
</div>
<?php require_once('frontend/parts/footer-auth.php'); ?>