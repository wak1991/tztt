<?php if (isset($_SESSION['error'])): ?>
    <h4>Ошибка</h4>
    <?=$_SESSION['error']; unset($_SESSION['error']);?>
    <?php debug($_POST['login']); ?>
<?php endif; ?>
<section id="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <h3>Войти в админку</h3>
                <form action="<?=ADMIN;?>/user/login-admin" method="post"">
                    <p><input type="text" name="login" placeholder="Login"></p>
                    <p><input type="password" name="password" placeholder="Password"></p>
                    <p><button type="submit">Войти</button></p>
                </form>
            </div>
        </div>
    </div>
</section>