<!--<div class="day">--><?//= Format::dateFormat($item['create_date'], 'd') ?><!--</div>-->
<!--                        <h2 class="sub_title">--><?//= Format::cutText($item['description'], 30) ?><!--</h2>-->
<!--                        <p class="description">--><?php //echo (strlen($item['description']) < 100) ? $item['description'] : Format::cutText($item['description'],100); ?><!--</p>-->

<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(assets/img/002.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Topilgan Qonunlar </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Archive Post Area Start ##### -->
<div class="alert alert-success" role="alert" style="font: 20px Sans-Serif;text-align: center">Sizning :<b style="color: #00007b;font: 30px Serif"><?=$key?></b>. So'rovinggizga binoan</div>

<div class="archive-post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                    <?php
                    if (count($find) == 0)
                        echo '<center><h5 style="margin-top: 100px;margin-bottom: 100px;">Ushbu so\'rovga Qonunlar mavjud emas!</h5></center>';
                    ?>
                    <?php foreach($find as $news):?>
                        <!-- Single Catagory Post -->
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(assets/img/bg-img/<?=$news['image']?>);">
                                <a href="?c=site&m=more&id=<?=$news['id']?>" class="video-play"><i class="fa fa-eye"></i></a>
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><?= Format::dateFormat($news['add_date'], 'M d Y') ?></a>
                                </div>
                                <a href="?c=site&m=more&id=<?=$news['id']?>" class="post-title"><?=$news['title']?></a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <i class="fa fa-eye" aria-hidden="true"></i> <?=$news['view_count']?>
                                </div>
                                <p><?php echo (strlen($news['description']) < 100) ? $news['description'] : Format::cutText($news['description'],102); ?></p>
                            </div>
                        </div>
                    <?php endforeach;?>

                </div>
            </div>

            <?= include 'RightSiDeBar.php' ?>
        </div>
    </div>
</div>
</div>
<!-- ##### Archive Post Area End ##### -->
