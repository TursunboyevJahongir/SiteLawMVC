<!--<div class="day">--><?//= Format::dateFormat($item['create_date'], 'd') ?><!--</div>-->
<!--                        <h2 class="sub_title">--><?//= Format::cutText($item['description'], 30) ?><!--</h2>-->
<!--                        <p class="description">--><?php //echo (strlen($item['description']) < 100) ? $item['description'] : Format::cutText($item['description'],100); ?><!--</p>-->

                        <!-- ##### Breadcrumb Area Start ##### -->
                        <!--section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(assets/img/bg-img/41.jpg);">
                            
                            <div class="container h-100">
                                <div class="row h-100 align-items-center">
                                    <div class="col-12">
                                        <div class="breadcrumb-content">
                                            <h2>Travel</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section-->
                        <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(assets/img/002.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12" >
                    <div class="breadcrumb-content" >
                        <h2>Foydalanuvchilar uchun</h2>
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

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="contact-content-area bg-white mb-30 p-30 box-shadow">

                        <!-- Section Title -->


                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Texnik qo'llab-quvvatlash</h5>
                        </div>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="name" class="form-control" id="email" placeholder="Elektron pochta manzili">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefon raqami">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Muammo"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn mag-btn mt-30" type="submit">Jo'natish</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?= include 'RightSiDeBar.php' ?>
                </div>
            </div>
        </div>
    </section>
                        <!-- ##### Archive Post Area End ##### -->
