<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <!-- Logo -->
                    <a href="?c=site" class="foo-logo"><img  style="position: absolute;width: 150px" src="assets/img/core-img/logo.svg" alt=""></a>
                    <p>Toshkent Axborot Texnologiyalari Universiteti Urganch filiali 951-16 guruh. </p>
                    <div class="footer-social-info">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Kategoriyalar</h6>
                    <nav class="footer-widget-nav">
                        <ul>
<!--                            --><?php //var_dump($category);?>
                            <?php foreach ($category as $cat):?>
                            <li><a href="?c=site&m=newsCats&id=<?=$cat['id']?>"><i class="fa fa-angle-double-right" aria-hidden="true"><?= $cat['name'] ?></i> </a></li>
                            <?php endforeach;?>
                        </ul>
                    </nav>
                </div>
            </div>



            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Tezkor izlash</h6>
                    <ul class="footer-tags">
                        <li><a href="?c=site&m=search&key=Ўзбекистон">Ўзбекистон</a></li>
                        <li><a href="?c=site&m=search&key=Ш. МИРЗИЁЕВ">Ш. МИРЗИЁЕВ</a></li>
                        <li><a href="?c=site&m=search&key=Рамазон">Рамазон</a></li>
                        <li><a href="?c=site&m=search&key=2019">2019</a></li>
                        <li><a href="?c=site&m=search&key=ПРЕЗИДЕНТ">ПРЕЗИДЕНТ</a></li>
                        <li><a href="?c=site&m=search&key=Qonun">Qonun</a></li>
                        <li><a href="?c=site&m=search&key=Туман">Туман</a></li>
                        <li><a href="?c=site&m=search&key=Қонун">Қонун</a></li>
                        <li><a href="?c=site&m=search&key=SHavkat Mirziyoyev">SHavkat Mirziyoyev</a></li>
                        <li><a href="?c=site&m=search&key=huquq">huquq</a></li>
                        <li><a href="?c=site&m=search&key=stipendiya">stipendiya</a></li>
                        <li><a href="?c=site&m=search&key=kodeks">kodeks</a></li>
                        <li><a href="?c=site&m=search&key=o'zbekiston">o'zbekiston</a></li>
                        <li><a href="?c=site&m=search&key=Qonun">Qonun</a></li>
                        <li><a href="?c=site&m=search&key=модда">модда</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tursunboyev Jahongir
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-12 col-sm-6">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="?c=site">Bosh sahifa</a></li>
                            <li><a href="?c=site&m=news">Qonunlar</a></li>
                            <li><a href="?c=site&m=contact">FOYDALANUVCHILAR UCHUN</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="assets/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="assets/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="assets/js/active.js"></script>
</body>

</html>