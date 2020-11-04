<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
    <base href="<?php echo $actual_link; ?>" />
    <meta charset="utf-8">
    <meta name="description" content="Adeleye Ayodeji is a professional with a broad set of skills in software, web development, speaking among many other God-given talents. Equipped with so ...">
    <meta name="keywords" content="Portfolio, Personal, Creatiev, adeleyeayodeji, Html Template, PHP, JavaScript">
    <meta name="author" content="Adeleye Ayodeji | Web Developer">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Adeleye Ayodeji | Web Developer" />
    <meta property="og:description" content="Adeleye Ayodeji is a professional with a broad set of skills in software, web development, speaking among many other God-given talents. Equipped with so ..." />
    <meta property="og:url" content="https://www.adeleyeayodeji.com/" />
    <meta property="og:image" content="https://www.adeleyeayodeji.com/img/adeleye_ayodeji_dp_new.PNG" />
    <meta name="google-site-verification" content="fA9MCsV99k5sSM0pjLn4VwGS21o-O_IlorKV8KDITas" />
    <!-- Title -->
    <title>Adeleye Ayodeji | Web Developer</title>
    <!-- Favicon -->
    <link href="img/adeleye_ayodeji_dp_new.PNG" type="image/png" rel="icon">

    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="css/mobiriseicons.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/splitting.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126555065-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-126555065-1');
    </script>
    <!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Adeleye Ayodeji - Web Developer",
            "image": "https://adeleyeayodeji.com/img/adeleyeyayodeji_img1.jpeg",
            "telephone": "+234 703 4803 384",
            "email": "contact@adeleyeayodeji.com",
            "url": "https://adeleyeayodeji.com/",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "14 Shogbesan Ave, Alagbado, Moshalasi",
                "addressLocality": "Lagos",
                "addressCountry": "Nigeria",
                "postalCode": "100271"
            },
            "priceRange": "Not Fixed",
            "datePublished": "2019-07-27",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "5.0",
                "bestRating": "5.0",
                "worstRating": "0"
            },
            "reviewBody": "He is a person you would want to work with. Such great a personality for a man with great talents."
        }
    </script>
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #111111;
            color: #FFF;
            border-radius: 50px;
            border-left: 1px solid #302b2e;
            text-align: center;
            font-size: 30px;
            box-shadow: 3px 0px 1px 0px #df0e84;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>

<body id="top" data-spy="scroll" data-target="#menu_items">
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--  start page loader  -->
    <div id="preloader">
        <div class="scroll-static"></div>
    </div>
    <!--  end page loader  -->

    <!-- start landing wrapper  -->
    <div class="landing_wrapper bg-img" data-src="img/new2.jpg">
        <!-- start header  -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-8">
                        <div class="logo">
                            <a href="index.php"><img src="img/adeleyeayodeji.png" alt="Adeleye Ayodeji"></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-4">
                        <ul id="menu_items" class="menu_items">
                            <li class="nav-item">
                                <a href="#top" class="active menu_item nav-link slide-horizontal" data-splitting>Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="menu_item nav-link slide-horizontal" data-splitting>About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#service" class="menu_item nav-link slide-horizontal" data-splitting>Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="#works" class="menu_item nav-link slide-horizontal" data-splitting>Works</a>
                            </li>
                            <li class="nav-item">
                                <a href="#github" class="menu_item nav-link slide-horizontal" data-splitting>GitHub</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="menu_item nav-link slide-horizontal" data-splitting>Contact</a>
                            </li>
                        </ul>
                        <!-- responsive menu btn -->
                        <div class="nav-btn">
                            <span class="ion-android-menu"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header  -->
        <!-- start home wrapper -->
        <div class="home_wrapper">
            <!-- start landing content -->
            <div class="landing_content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="title-slide-in" data-splitting>Hi There, I'm</h5>
                            <h1 class="title-slide-in" data-splitting>Adeleye Ayodeji</h1>
                            <h4 class="title-slide-in" data-splitting>Web developer &amp; Trainer</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end landing content -->
        </div>
        <!-- end home wrapper -->
    </div>
    <!-- end landing wrapper  -->
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- start about wrapper -->
                <div id="about" class="about_wrapper">
                    <div class="about">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <!-- start about image -->
                                <div class="about_img">
                                    <img class="about_img_1 top" src="img/adeleyeyayodeji_img1.jpeg" alt="">
                                    <img class="about_img_2 bottom" src="img/adeleyeyayodeji_img2.jpg" alt="">
                                </div>
                                <!-- end about image -->
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <!-- start about details -->
                                <div class="about_info">
                                    <h4>About me</h4>
                                    <img class="zigzag" src="img/zigzag.svg" alt="">
                                    <p class="about_desc">
                                        <span>I am experienced in application and web development using PHP, JavaScript, SQL Database services.</span>
                                        <br>
                                        I have a working experience with Model View Controller (MVC), and have been involved in maintaining versions of source code using GitHub.I have also designed and developed master pages, validation controls, CSS files using technologies like AJAX Toolkit, JQuery, JavaScript, XML and HTML.
                                    </p>
                                    <p class="about_desc mt-4">
                                        <span>When working on a new project,</span> I like to speak with my clients so that I can have a clear understanding of their needs and vision of the project. Thank you in advance for your time and consideration. I look forward to working with you soon.
                                    </p>
                                    <!-- start social links -->
                                    <ul class="social_links mt-4">
                                        <li><a href="https://www.facebook.com/adeleyeayodeji.code" target="_blank" rel='noopener'><span class="ion-social-facebook"></span></a></li>
                                        <li><a href="https://www.google.com/maps/place/Adeleye+Ayodeji/@6.6741407,3.265471,15z/data=!4m5!3m4!1s0x0:0x92f667b3cd4a9b05!8m2!3d6.6741407!4d3.265471" target="_blank" rel='noopener'><span class="ion-social-google"></span></a></li>
                                        <li><a href="https://twitter.com/adeleyeayodeji_" target="_blank" rel='noopener'><span class="ion-social-twitter"></span></a></li>
                                        <li><a href="https://www.instagram.com/adeleyeayodeji.code/" target="_blank" rel='noopener'><span class="ion-social-instagram-outline"></span></a></li>
                                        <li><a href="https://www.linkedin.com/in/adeleye-ayodeji-69a927158/" target="_blank" rel='noopener'><span class="ion-social-linkedin"></span></a></li>
                                    </ul>
                                    <!-- end social links -->
                                </div>
                                <!-- end about details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end about wrapper -->
                <!-- start services wrapper -->
                <div id="service" class="services">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Services</h2>
                            </div>
                            <!-- start service items -->
                            <div class="service_items">
                                <div class="row">
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-sites"></i>
                                            <h6 data-hover="Web Design">Web Design</h6>
                                            <p>We help businesses unleash their full potentials through modern and functional designs that make their competitors jealous.</p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-extension"></i>
                                            <h6 data-hover="Web Development">Web Development</h6>
                                            <p>We are highly-skilled in creating exceptional and effective website from scratch using standards based markup code</p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-rocket"></i>
                                            <h6 data-hover="Web Maintenance">Web Maintenance</h6>
                                            <p>We help businesses focus on what’s truly important to them by managing and growing their entire online presence.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end service items -->
                        </div>
                    </div>
                </div>
                <!-- end services wrapper -->
                <!-- end git widget -->
                <!-- start work wrapper -->
                <div id="works" class="work_wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Recent Works</h2>
                            </div>

                            <div class="row works">
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 uiux">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/better.png" alt="">
                                        <div class="work_info">
                                            <h6 title="Better Days Hotel">Better Days Hotel</h6>
                                            <p>Hotel and Suit</p>
                                            <a class="link" href="https://betterdaysguesthouse.com/" target="_blank" rel='noopener'><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 web">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/Screenshot_2020-02-04 BSTA Custom Tailor.png" alt="">
                                        <div class="work_info">
                                            <h6 title="BSTA Custom Tailor">BSTA Custom Tailor</h6>
                                            <p>Custom Tailor</p>
                                            <a class="link" href="https://bstatailors.net/" target="_blank" rel='noopener'><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 branding">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/Screenshot_2020-02-04 Maxfem Int'l Schools.jpg" alt="">
                                        <div class="work_info">
                                            <h6 title="Maxfem College">Maxfem College</h6>
                                            <p>Result Management</p>
                                            <a class="link" href="https://result.maxfemschools.com/find-result.php" target="_blank" rel='noopener'><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 web">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/Screenshot_2020-02-04 Homepage - Dechristies Ruby.png" alt="">
                                        <div class="work_info">
                                            <h6 title="De Christie’s Ruby">De Christie’s Ruby</h6>
                                            <p>SPA and Wellness</p>
                                            <a class="link" href="https://dechristiesruby.com/" target="_blank" rel='noopener'><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 branding">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/Screenshot_2020-02-04 Phronesis Foods .jpg" alt="">
                                        <div class="work_info">
                                            <h6 title="Phronesis Foods">Phronesis Foods</h6>
                                            <p>Food processing and Packaging</p>
                                            <a class="link" href="https://phronesisfoods.ng/" target="_blank" rel='noopener'><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-4 col-md-6 col-sm-6 uiux">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/Screenshot_2020-02-04 Home - Osho Ademola Joel.png" alt="">
                                        <div class="work_info">
                                            <h6 title="Osho Ademola Joel">Osho Ademola Joel</h6>
                                            <p>Business Consulting & Digital Marketing</p>
                                            <a class="link" href="https://www.oshoademolajoel.com/" target="_blank" rel='noopener'><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- view all work button  -->
                                <!--  <div class="col-lg-12">
                                    <a class="button slide-vertical" data-splitting href="all-works.html">View All Works</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- start git widget -->
                <!-- start git wrapper -->
                <div id="github" class="services">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Git Repository</h2>
                            </div>
                            <!-- start service items -->
                            <div class="service_items">
                                <div class="row" id="loops">
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-github"></i>
                                            <a href="https://github.com/adeleyeayodeji/Ajax-Image-Upload-WIth-Progress-Bar" target="_blank" rel='noopener'>
                                                <h6 style="font-size: 16px;" data-hover="Ajax-Image-Upload-WIth-Pr..">Ajax-Image-Upload-WIth-Pr..</h6>
                                            </a>
                                            <p>Easily upload your images, files along with a prog..</p>
                                            <a href="https://github.com/adeleyeayodeji/Ajax-Image-Upload-WIth-Progress-Bar/archive/master.zip" class="float-left" style="border: 1px solid #222;border: 1px solid #222;padding: 5px;margin-top: 20px;color: white;">Download <span class="mbri-save text-bold" style="color: #ba0d84;margin-left: 8px;"></span></a>
                                            <p class'float-right="" text-center'="" style="border: 1px solid #222;color: #fff; margin-left: 150px;padding: 5px;text-align: center;margin-top: 20px;">Hack</p>
                                        </div>
                                    </div>
                                    <!-- end of service single -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item"><i class="mbri-github"></i><a href="https://github.com/adeleyeayodeji/Basic-PHP-Ecommerce-" target="_blank" rel='noopener'>
                                                <h6 style="font-size: 16px;" data-hover="Basic-PHP-Ecommerce-..">Basic-PHP-Ecommerce-..</h6>
                                            </a>
                                            <p>Get started with ecommerce website development fro..</p><a href="https://github.com/adeleyeayodeji/Basic-PHP-Ecommerce-/archive/master.zip" class="float-left" style="border: 1px solid #222;border: 1px solid #222;padding: 5px;margin-top: 20px;color: white;">Download <span class="mbri-save text-bold" style="color: #ba0d84;margin-left: 8px;"></span></a>
                                            <p class'float-right="" text-center'="" style="border: 1px solid #222;color: #fff; margin-left: 150px;padding: 5px;text-align: center;margin-top: 20px;">JavaScript</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item"><i class="mbri-github"></i><a href="https://github.com/adeleyeayodeji/codedeyo-githubb-repo" target="_blank" rel='noopener'>
                                                <h6 style="font-size: 16px;" data-hover="codedeyo-githubb-repo..">codedeyo-githubb-repo..</h6>
                                            </a>
                                            <p>Showcase user repositories with a shortcode...</p><a href="https://github.com/adeleyeayodeji/codedeyo-githubb-repo/archive/master.zip" class="float-left" style="border: 1px solid #222;border: 1px solid #222;padding: 5px;margin-top: 20px;color: white;">Download <span class="mbri-save text-bold" style="color: #ba0d84;margin-left: 8px;"></span></a>
                                            <p class'float-right="" text-center'="" style="border: 1px solid #222;color: #fff; margin-left: 150px;padding: 5px;text-align: center;margin-top: 20px;">PHP</p>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="col-lg-12" id="loadmore" style="display: none;">
                                        <a class="button slide-vertical ajax-popup-link" data-splitting href="moregit.php">View All Gits</a>
                                    </div>
                                </center>
                            </div>
                            <!-- end service items -->
                        </div>
                    </div>
                </div>
                <!-- end git wrapper -->

                <!-- end clients wrapper -->
                <!-- start contact wrapper -->
                <div id="contact" class="contact_wrapper">
                    <div class="text-center">
                        <h2 class="section_title">Drop a line</h2>
                    </div>
                    <div class="row justify-content-center">
                        <!-- start contact info ( email - phone) -->
                        <div class="col-lg-3 col-md-12">
                            <div class="contact_item">
                                <h5>Phone</h5>
                                <p><a href="tel:+2347034803384" target="_blank" rel='noopener'>+234 703 4803 384</a></p>
                            </div>
                            <div class="contact_item">
                                <h5>Email</h5>
                                <p><a href="mail:contact@adeleyeayodeji.com" target="_blank" rel='noopener'>contact@adeleyeayodeji.com</a></p>
                            </div>
                        </div>
                        <!-- end contact info ( email - phone) -->
                        <!-- start contact form -->
                        <div class="col-lg-7 col-md-12">
                            <form id="contact-form" action="mail.php">
                                <div class="row">
                                    <div class="col">
                                        <p class="form-message"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- input field for NAME -->
                                        <input class="input_field required" id="name" type="text" name="name" placeholder="Name">
                                        <!-- input field for EMAIL -->
                                        <input class="input_field required" id="email" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- input field for MESSAGE -->
                                        <textarea class="input_field required" id="message" name="message" placeholder="Tell Me About Your Query."></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <!-- button for MESSAGE-SEND -->
                                        <button class="button slide-vertical" type="submit" data-splitting>send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end contact form -->
                    </div>
                </div>
                <!-- end contact wrapper -->
                <!-- start footer wrapper -->
                <footer>
                    <a href="#top" class="go_top">
                        <i class="ion-ios-arrow-thin-up"></i>
                    </a>
                    <!-- start social links -->
                    <ul class="social_links">
                        <li><a href="https://www.facebook.com/adeleyeayodeji.code" target="_blank" rel='noopener'><span class="ion-social-facebook"></span></a></li>
                        <li><a href="https://www.google.com/maps/place/Adeleye+Ayodeji/@6.6741407,3.265471,15z/data=!4m5!3m4!1s0x0:0x92f667b3cd4a9b05!8m2!3d6.6741407!4d3.265471" target="_blank" rel='noopener'><span class="ion-social-google"></span></a></li>
                        <li><a href="https://twitter.com/adeleyeayodeji_" target="_blank" rel='noopener'><span class="ion-social-twitter"></span></a></li>
                        <li><a href="https://www.instagram.com/adeleyeayodeji.code/" target="_blank" rel='noopener'><span class="ion-social-instagram-outline"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/adeleye-ayodeji-69a927158/" target="_blank" rel='noopener'><span class="ion-social-linkedin"></span></a></li>
                    </ul>
                    <p class="copyright">&copy; 2020 <span>Adeleye Ayodeji</span>. All Rights Reserved.</p>
                    <p>Created with <span><i class="fa fa-heart" style="color: #df0e84;"></i></span></p>
                </footer>
                <!-- end footer wrapper -->
            </div>
        </div>
    </div>
    <!-- Floating chat -->
    <a href="https://api.whatsapp.com/send?phone=2347034803384&amp;text=Hello%20Adeleye%20Ayodeji,%20your%20service%20is%20requested." class="float" target="_blank" rel='noopener'>
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- ========  All JS Here ========  -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/api.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>