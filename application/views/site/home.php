<?php
/**
 * @var $news LawsModel[]
 */
?>
<!-- ##### Hero Area Start ##### -->



<div class="hero-area owl-carousel">
    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/img/001.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                        </div>
                        <a href="?c=site&m=news" class="post-title" data-animation="fadeInUp" data-delay="300ms">Ta`lim va davlat ahamyatiga molik asosiy me`yoriy-huquqiy hujjatlar bazasi veb ilovasini yaratish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/img/002.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                        </div>
                        <a href="?c=site&m=news" class="post-title" data-animation="fadeInUp" data-delay="300ms">Ta`lim va davlat ahamyatiga molik asosiy me`yoriy-huquqiy hujjatlar bazasi veb ilovasini yaratish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/img/003.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                        </div>
                        <a href="?c=site&m=news" class="post-title" data-animation="fadeInUp" data-delay="300ms">Ta`lim va davlat ahamyatiga molik asosiy me`yoriy-huquqiy hujjatlar bazasi veb ilovasini yaratish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Left Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Muhim Qonunlar</h5>
            </div>

            <!-- Single Blog Post -->
            <?php foreach ($important as $news):?>
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="assets/img/bg-img/<?=$news['image']?>" alt="">
                    </div>
                    <div class="post-content">
                        <a href="?c=site&m=more&id=<?=$news['id']?>" class="post-title"><?=Format::cutText($news['title'],'60')?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$news['view_count']?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

          
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="#" class="add-img"><img src="assets/img/001.jpg" alt=""></a>
        </div>


    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <!-- Trending Now Posts Area -->
        <div class="trending-now-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Tavsiya qilamiz</h5>
            </div>

            <div class="trending-post-slides owl-carousel">
                <!-- Single Trending Post -->
                <?php foreach ($recom as $item):?>
                <div class="single-trending-post">
                    <img  style=" height:180px" src="assets/img/bg-img/<?=$item['image']?>" alt="">
                    <div class="post-content">
                        <a href="?c=site&m=more&id=<?=$item['id']?>" class="post-title"><?=$item['title']?></a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>

        <!-- Feature Video Posts Area -->
        <div class="feature-video-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>So`ngi Qonunlar</h5>
            </div>

            <div class="featured-video-posts">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <!-- Single Featured Post -->
                        <div class="single-featured-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <img src="assets/img/bg-img/<?=$item['image']?>" alt="">
                                <a href="?c=site&m=more&id=<?=$item['id']?>" class="video-play"><i class="fa fa-eye"></i></a>
                            </div>
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><?= Format::dateFormat($newss[0]['add_date'], 'M d Y') ?></a>
                                    <a href="?c=site&m=newsCats&id=<?=$newss[0]['cat_id']?>"><?=$newss[0]['name'] ?></a>
                                </div>
                                <a href="?c=site&m=more&id=<?=$newss[0]['id'] ?>" class="post-title"><?=$newss[0]['title'] ?></a>
                                <p><?=Format::cutText($newss[0]['description'],'500') ?></p>
                            </div>
                            <!-- Post Share Area -->
                            <div class="post-share-area d-flex align-items-center justify-content-between">
                                <!-- Post Meta -->
                                <div class="post-meta pl-3">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?=$newss[0]['view_count'] ?></a>
                                </div>
                                <!-- Share Info -->
                                <div class="share-info">
                                    <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    <!-- All Share Buttons -->
                                    <div class="all-share-btn d-flex">
                                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <!-- Featured Video Posts Slide -->
                        <div class="featured-video-posts-slide owl-carousel">

                            <div class="single--slide">
                                <!-- Single Blog Post -->
<!--                                --><?php //var_dump($newss[5]);?>
                                <?php for ($i=1;$i<8;$i++): ?>
                                    <div class="single-blog-post d-flex style-1">
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/<?=$newss[$i]['image']?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="?c=site&m=more&id=<?=$newss[$i]['id']?>" class="post-title"><?=Format::cutText($newss[$i]['title'],'50')?></a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$newss[$i]['view_count']?></a>
                                        </div>
                                    </div>
                                </div>

                                <?php endfor; ?>
                            </div>

                            <div class="single--slide">
                                <!-- Single Blog Post -->
                                <?php
                                if(count($newss)>=16)
                                for ($i=11;$i<16;$i++): ?>
                                    <div class="single-blog-post d-flex style-1">
                                        <div class="post-thumbnail">
                                            <img src="assets/img/bg-img/<?=$newss[$i]['image']?>" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="?c=site&m=more&id=<?=$newss[$i]['id']?>" class="post-title"><?=Format::cutText($newss[$i]['title'],'50')?></a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$newss[$i]['view_count']?></a>
                                            </div>
                                        </div>
                                    </div>

                                <?php endfor; ?>
                                <?php if(count($newss)<16)
                                for ($i=11;$i<count($newss);$i++): ?>
                                <div class="single-blog-post d-flex style-1">
                                    <div class="post-thumbnail">
                                        <img src="assets/img/bg-img/<?=$newss[$i]['image']?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="?c=site&m=more&id=<?=$newss[$i]['id']?>" class="post-title"><?=Format::cutText($newss[$i]['title'],'50')?></a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$newss[$i]['view_count']?></a>
                                        </div>
                                    </div>
                                </div>

                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Eng ko'p o'qilganlar</h5>
            </div>

            <div class="sports-videos-slides owl-carousel mb-30">
                <!-- Single Featured Post -->
                <?  foreach ( $view as $view): ?>
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="assets/img/bg-img/<?=$view['image']?>" style="height: 500px" alt="<?=$view['id']?>">
                        <a href="?c=site&m=more&id=<?=$view['id']?>" class="video-play"><i class="fa fa-eye"></i></a>
                    </div>
                    <!-- Post Contetnt -->
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#"><?=Format::dateFormat($view['add_date'],"d M Y")?></a>
                            <a href="archive.html"><?=$view['name']?></a>
                        </div>
                        <a href="?c=site&m=more&id=<?=$view['id']?>" class="post-title"><?=$view['title']?></a>
                        <p><?=Format::cutText($view['description'],'400')?></p>
                    </div>
                    <!-- Post Share Area -->
                    <div class="post-share-area d-flex align-items-center justify-content-between">
                        <!-- Post Meta -->
                        <div class="post-meta pl-3">
                            <b href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?=$view['view_count']?>  </b>

                        </div>
                        <!-- Share Info -->

                    </div>
                </div>
                    <? endforeach;?>

                <!-- Single Featured Post -->

            </div>



        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Right Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <?= include 'RightSiDeBar.php' ?>
</section>
<!-- ##### Mag Posts Area End ##### -->
