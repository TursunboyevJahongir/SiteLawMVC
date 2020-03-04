<div class="mag-breadcrumb py-5"></div>

<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="single-featured-post">
                <!-- Thumbnail -->

            </div>
            <div class="col-12 col-xl-8">
                <div class="post-details-content bg-white mb-30 p-30 box-shadow" >
                    <div class="blog-thumb mb-30">
                        <img src="assets/img/bg-img/<?php echo $news['image'] ?>" >
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <?= Format::dateFormat($news['add_date'], 'M d Y') ?>
                            <a href="?c=site&m=newsCats&id=<?= $news['cat_id'] ?>"><?= $news['name'] ?></a>
                        </div>
                        <h4 class="post-title"><?= $news['title'] ?></h4>
                        <!-- Post Meta -->
                        <div class="post-meta-2">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?= $news['view_count'] + 1 ?></a>
                            <!--a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a-->
                        </div>

                        <p><?= $news['description'] ?></p>
                <a href="?c=site&m=pdf&id=<?=$news['id']?>" class="btn btn-primary"><i class="fa fa-download"></i> Pdf</a>
                    </div>
                </div>

                <!-- Comment Area Start -->
                <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Muhokamalar</h5>
                    </div>

                    <ol>
                        <!-- Single Comment Area -->
                        <?php foreach ($comment as $com): ?>
                            <li class="single_comment_area">

                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <center>
                                            <a class="login-btn"><i class="fa fa-user fa-5x" aria-hidden="true"></i></a>
                                        </center>
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="comment-date">15 May 2019</a>
                                        <h6><?= $com['user_name'] ?></h6>
                                        <p><?= $com['message'] ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>

                        <?php
                        if (count($comment) == 0)
                            echo '<h5 style="padding-bottom: 50px; padding-top: 50px; text-align: center;"> Ushbu maqolaga fikr bildirilmagan. </h5>';
                        ?>
                    </ol>
                </div>

                <!-- Post A Comment Area -->

                <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Fikr qoldirish</h5>
                    </div>

                    <!-- Reply Form -->
                    <div class="contact-form-area">

                <form method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ism" placeholder="Ism" required >
                    </div>
                    <textarea name="message" class="form-control" name="message"
                              placeholder="Xabar" required></textarea>

                    <button type="submit" class="btn mag-btn mt-30">Jo'natish</button>
                </form>
                    </div>
                </div>
            </div>

            <?= include 'RightSiDeBar.php' ?>
        </div>
    </div>
</section>

</section>