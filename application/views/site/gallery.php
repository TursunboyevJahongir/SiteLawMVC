<div class="divider"></div>
    <h1 style="text-align: center;font: 50px Serif ;color: #0f74a8 ">GALLERY</h1>

    <div  class="gallery">
        <?php

        foreach ($gallery as $item):
        ?>
            <div class="thumbnail-2 wow fadeInDown borderR">
                <img src="assets/images/<?=$item['image']?>" alt="" />
                <div class="caption">
                    <h3 class="wow fadeInUp"><?=$item['name']?></h3>
                </div>
            </div>
            <div class="large-2 wow bounceInDown ">
                <img src="assets/images/<?=$item['image']?>" alt="" />
                <span class="close" style="margin-top: 150px">&#x2715;</span>
            </div>
        <?endforeach;
        ?>

        <div class="clearfix"></div>
    </div>
    <br>
    <br>