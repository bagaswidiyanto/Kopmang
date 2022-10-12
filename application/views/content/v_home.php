<div class="menu-populer" id="popular-menu">
    <img src="<?= base_url(); ?>assets/imagenew/background-coffee-1.png" class="img-fluid bg1" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 position-relative" data-aos="fade-up" data-aos-duration="2000">
                <img src="<?= base_url(); ?>assets/imagenew/cofe-bg-1.png" class="img-fluid bg-cof1" alt="">
                <div class="row justify-content-center">
                    <div class="col-lg-11 position-relative">
                        <div class="box-bg">
                            <div class="text-header">
                                <h2>MENU POPULER</h2>
                            </div>

                            <div class="slider-container mt-5">
                                <div class="swiper-container menu-populer-slider">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($menu_populer as $menu_populer) { ?>
                                        <div class="swiper-slide">
                                            <div class="testimonial-card">
                                                <div class="card-imgs d-flex align-items-center">
                                                    <img class="avatar img-fluid"
                                                        src="https://admin103.kopmang.com/upload/menu_populer/<?= $menu_populer->image; ?>"
                                                        alt="testimonial">
                                                </div>
                                                <div class="text-card text-center">
                                                    <p><?= $menu_populer->title; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>


                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>


                                </div>
                            </div>

                            <div class="order-now text-center mt-2 mb-2">
                                <h2>PESAN SEKARANG</h2>
                                <a href="https://wa.wizard.id/16aa3c" target="_blank" class="btn-wa shadow-none m-2"><i
                                        class="fa fa-whatsapp"></i>
                                    0812-5615-5624</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-kopmang" id="about-cafe">
        <div class="container kopmang-container">
            <div class="row d-flex justify-content-center align-items-center mx-0">
                <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="bg-1 position-relative">
                        <img src="<?= base_url(); ?>assets/imagenew/bg-1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="2000">
                    <div class="kopmang text-white">
                        <h2 class="text-white">TENTANG KOPMANG</h2>
                        <p><?= $website->description; ?></p>
                        <div class="btn-kop">
                            <a href="https://wa.wizard.id/16aa3c" target="_blank"
                                class="btn-read py-2 px-3 shadow-none m-2">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feature-coffee" data-aos="fade-up" data-aos-duration="2000">
    <img src="<?= base_url(); ?>assets/imagenew/bg-cofe-2.png" class="img-fluid bg-cofe" alt="">
    <div class="container feature-coffee-container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="text-header text-center" data-aos="fade-up" data-aos-duration="2000">
                    <h2>Mengapa Harus Kesini?</h2>
                </div>
                <div class="content">
                    <div class="row justify-content-center text-center text-white">
                        <?php foreach ($fitur as $fitur) { ?>
                        <div class="col-lg-4 col-lg-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                            <div class="box-content">
                                <div class="radius-bg">
                                    <img src="https://admin103.kopmang.com/upload/fitur/<?= $fitur->image; ?>" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                            <p><?= $fitur->title; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                    <img src="<?= base_url(); ?>assets/imagenew/bg-bott-2.png" class="img-fluid bg-bott" alt="">
                </div>
            </div>
        </div>
    </div>
    <img src="<?= base_url(); ?>assets/imagenew/bg-people-2.png" class="img-fluid bg-people" alt="">
</div>

<div class="menu-coffee" id="menu">
    <img src="<?= base_url(); ?>assets/imagenew/bg-cofe-3.png" class="img-fluid bg-cofe" alt="">
    <div class="container menu-container">
        <div class="row justify-content-center">
            <div class="col-lg-11" data-aos="fade-up" data-aos-duration="2000">
                <div class="text-header text-center" data-aos="fade-up" data-aos-duration="2000">
                    <h2 class="text-white">Menu</h2>
                </div>

                <div class="slider-container mt-5" data-aos="fade-up" data-aos-duration="2000">
                    <div class="swiper-container menu-coffee-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($menu_slide as $menu_slide) { ?>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="card-imgs">
                                        <img class="avatar img-fluid"
                                            src="https://admin103.kopmang.com/upload/menu_slider/<?= $menu_slide->image; ?>"
                                            alt="testimonial">
                                    </div>
                                    <div class="text-card text-white">
                                        <p><?= $menu_slide->title; ?></p>
                                        <h5>Rp.<?= number_format($menu_slide->price, 0, ",", "."); ?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>


                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>


                    </div>
                </div>

                <div class="order-now text-center mt-4 mb-2" data-aos="fade-up" data-aos-duration="2000">
                    <h2>PESAN SEKARANG</h2>
                    <a href="https://wa.wizard.id/16aa3c" target="_blank" class="btn-wa shadow-none m-2"><i
                            class="fa fa-whatsapp"></i>
                        0812-5615-5624</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="galeri" id="gallery">
    <img src="<?= base_url(); ?>assets/imagenew/bg-galeri.png" class="img-fluid bg-gal" alt="">
    <div class="container">
        <div class="text-header text-center" data-aos="fade-up" data-aos-duration="2000">
            <h2>Gallery</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="2000">
            <?php foreach ($gallery as $gallery) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 mt-4">
                <div class="galeri-img">
                    <img src="https://admin103.kopmang.com/upload/gallery/<?= $gallery->image; ?>" class="img-fluid"
                        title="<?= $gallery->name; ?>" alt="">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="testimonial" id="testimoni">
    <div class="container testimonial-container">
        <div class="text-header text-center" data-aos="fade-up" data-aos-duration="2000">
            <h2>Testimonial</h2>
        </div>

    </div>
    <div class="bg-radius" data-aos="fade-up" data-aos-duration="2000">
        <img src="<?= base_url(); ?>assets/imagenew/bg-testi-glass.png" class="img-fluid glass" alt="">
        <div class="container">

            <div class="slider-container">
                <div class="swiper-container testimonial-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($testi as $testi) { ?>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                                        <div class="card-imgs text-center">
                                            <img class="avatar img-fluid"
                                                src="https://admin103.kopmang.com/upload/testimoni/<?= $testi->image; ?>"
                                                alt="testimonial">
                                        </div>
                                        <div class="star text-center">
                                            <img src="<?= base_url(); ?>assets/imagenew/star.png" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-7 col-sm-8 col-8">
                                        <div class="text-testi">
                                            <h3><?= $testi->nama; ?></h3>
                                            <p><?= $testi->testi; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>


                    <div class="swiper-button-next"></div>
                    <!-- <div class="swiper-button-prev"></div> -->


                </div>
            </div>
        </div>
    </div>
</div>