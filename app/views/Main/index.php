<!-- #promotional-text -->
<section id="promotional-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Отзывы:</h1>
                <h4><a href="<?=ADMIN?>">Войти в админку</a></h4>
            </div>
            <?php if (isset($_SESSION['success'])): ?>
                <?=$_SESSION['success']; unset($_SESSION['success']);?>
            <?php endif; ?>
        </div>
    </div>
</section> <!-- /#promotional-text -->
<?php if ($posts): ?>
<!-- #blog-post -->
<section id="blog-post">
    <div class="container">
        <div class="row">

            <!-- .blog-content -->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-content">
                <!-- article -->
                <?php foreach ($posts as $post): ?>
                <article class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">
                    <div class="post-meta clearfix">
                        <div class="post-date">
                            <img src="/public/img/<?=$post->img;?>" alt="">
                        </div>
                        <div class="post-title">
                            <h2><?=$post->name;?></h2>
                            <ul>
                                <li><span><?=$post->email;?></span></li>
                                <li><span><?=$post->date;?></span></li>
                            </ul>
                        </div>
                    </div>
                    <p><?=$post->description;?></p>
                    <hr>
                </article>
                <?php endforeach; ?>
                <!-- /article -->
            </div> <!-- /.blog-content -->

        </div>
    </div>
</section> <!-- /#blog-post -->
<?php endif; ?>
<!-- #contact-content -->
<section id="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <h3>Оставить отзыв</h3>
                <form action="/main/signup" method="post" enctype="multipart/form-data">
                    <p><input type="text" name="name" placeholder="Имя"></p>
                    <p><input type="text" name="email" placeholder="Email"></p>
                    <p><input type="file" name="img"</p>
                    <p><textarea name="description" placeholder="Текст сообщения"></textarea></p>
                    <p><button type="submit">Отправить</button></p>
                </form>
            </div>
        </div>
    </div>
</section> <!-- /#contact-content -->