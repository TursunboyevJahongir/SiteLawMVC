<div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
    <!-- Sidebar Widget -->


    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Kategoriyalar</h5>
        </div>

        <!-- Catagory Widget -->

        <ul class="catagory-widgets">
            <?php foreach ($category as $cat): ?>
            <li><a href="?c=site&m=newsCats&id=<?=$cat['id']?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $cat['name'] ?> </span> <!--span>8</span--></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget">
        <a href="#" class="add-img"><img src="assets/img/003.jpg" alt=""></a>
    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Hamkorlarimiz</h5>
        </div>

        <!-- Single YouTube Channel -->
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="assets/img/core-img/daryo.jpg" alt="">
            </div>
            <div class="youtube-channel-content">
                <a class="channel-title" href="Daryo.uz">Daryo.uz</a>
            </div>
        </div>

        <!-- Single YouTube Channel -->
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="assets/img/core-img/gerb.png" alt="">
            </div>
            <div class="youtube-channel-content">
                <a class="channel-title" href="regulation.gov.uz">regulation.gov.uz</a>
            </div>
        </div>

        <!-- Single YouTube Channel -->
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="assets/img/core-img/gerb.png" alt="">
            </div>
            <div class="youtube-channel-content">
                <a class="channel-title" href="www.gov.uz">gov.uz</a>
            </div>
        </div>

        <!-- Single YouTube Channel -->
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="assets/img/core-img/gerb.png" alt="">
            </div>
            <div class="youtube-channel-content">
                <a class="channel-title" href="president.uz">president.uz</a>
            </div>
        </div>

        <!-- Single YouTube Channel -->
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="assets/img/core-img/strategiya.png" alt="">
            </div>
            <div class="youtube-channel-content">
                <a class="channel-title" href="strategy.gov.uz">strategy.gov.uz</a>
            </div>
        </div>
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="assets/img/core-img/data.gov.uz.png" alt="">
            </div>
            <div class="youtube-channel-content">
                <a class="channel-title" href="data.gov.uz">data.gov.uz</a>
            </div>
        </div>
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="assets/img/core-img/lex.jpg" alt="">
            </div>
            <div class="youtube-channel-content">
                <a class="channel-title" href="http://lex.uz/">lex.uz</a>
            </div>
        </div>

    </div>


</div>