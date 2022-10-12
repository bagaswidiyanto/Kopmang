<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kopmang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/imagenew/logo-url.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <!-- <link href="<?= base_url(); ?>assets/lib/owlcarousel/<?= base_url(); ?>assets/owl.carousel.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/swiper.css">

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" data-aos="fade-up"
                data-aos-duration="2000">
                <div class="container">
                    <a class="navbar-brand hid fw-bold order-1 flex-grow-1" href="index.html"><img
                            src="https://admin103.kopmang.com/upload/<?= $website->image; ?>" class="img-fluid"
                            alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse w-lg-auto order-3 order-lg-0 mt-3" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link text-500 px-2 ml-lg-n2 active" aria-current="page"
                                    href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-500 px-2" href="#popular-menu">Popular Menu</a>
                            </li>
                            <li class="nav-item"><a class="nav-link text-500 px-2" href="#about-cafe">About Cafe</a>
                            </li>
                        </ul>
                        <a class="navbar-brand fw-bold order-1 flex-grow-1" href="index.html"><img
                                src="https://admin103.kopmang.com/upload/<?= $website->image; ?>" class="img-fluid"
                                alt=""></a>
                        <ul class="navbar-nav order-2">
                            <li class="nav-item"><a class="nav-link text-500 px-2 ml-lg-n2" aria-current="page"
                                    href="#menu">Menu</a></li>
                            <li class="nav-item"><a class="nav-link text-500 px-2" href="#gallery">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link text-500 px-2" href="#testimoni">Testimoni</a></li>
                        </ul>
                    </div>

                </div>
            </nav>

            <div class="container-xxl hero-header d-flex align-items-center justify-content-center">
                <div class="container" data-aos="fade-up" data-aos-duration="2000">
                    <div class="row justify-content-center text-center ">
                        <div class="col-lg-6">
                            <h1 class="text-white mb-4 animated slideInDown"><?= $homeweb->title; ?></h1>
                            <p class="text-white pb-3 animated slideInDown">"<?= $homeweb->deskripsi; ?>”</p>
                            <div class="position-relative w-100 mt-3">
                                <a href="" class="btn-read py-2 px-3 shadow-none m-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="img/hero.jpg" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>