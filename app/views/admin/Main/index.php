<!-- #promotional-text -->
<section id="promotional-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Админка:</h1>
                <h4><a href="<?=PATH?>">На страницу с отзывами</a></h4>
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
                            <p><a href="<?=ADMIN?>/main/delete?id=<?=$post['id'];?>">Удалить запись</a></p>
                            <hr>
                        </article>
                    <?php endforeach; ?>
                    <!-- /article -->
                </div> <!-- /.blog-content -->

            </div>
        </div>
    </section> <!-- /#blog-post -->
<?php endif; ?>