<?php require_once 'public/views/layout/head.php'; ?>

<body class="presentation-page bg-gray-200">
    <?php require_once 'public/views/layout/nav.php'; ?>
    <?php require_once 'public/views/layout/header.php'; ?>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <section class="my-2 py-2">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center text-center my-sm-5">
                        <div class="col-lg-6">
                            <span class="badge badge-primary mb-3">Infinite combinations</span>
                            <h2 class="text-dark mb-0">LA TECNOLOGÍA NO ES DIFÍCIL. TE ESTÁN ENSEÑANDO MAL.</h2>
                            <p class="lead">Olvídate de los cursos que te dejan con más dudas que al inicio
                                y domina todas las áreas del desarrollo de software con la metodología de NuweSoft.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="container my-4">
            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-6 mt-6">
                    <div class="card" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="<?php BASE_URL ?>public/assets/img/sistema/cursos.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" style="width: 100%; height: 200px;">
                            </a>
                            <div class="colored-shadow" style="background-image: url(&quot;<?php BASE_URL ?>public/assets/img/sistema/cursos.png&quot;);"></div>
                        </div>
                        <div class="card-body text-center">
                            <div class="h5 mt-n6 mx-auto text-center">
                                <a href=""><i class="fas fa-boxes"></i> Cursos</a>
                            </div>
                            <p class="mt-4">
                                Actualizate, aprende, domina y mejora tus habilidades en el mundo de la tecnología.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 mt-6">
                    <div class="card" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="<?php BASE_URL ?>public/assets/img/sistema/proyectos.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" style="width: 100%; height: 200px;">
                            </a>
                            <div class="colored-shadow" style="background-image: url(&quot;<?php BASE_URL ?>public/assets/img/sistema/proyectos.jpg&quot;);"></div>
                        </div>
                        <div class="card-body text-center">
                            <div class="h5 mt-n6 mx-auto text-center">
                                <a href=""><i class="fas fa-briefcase"></i> Proyectos</a>
                            </div>
                            <p class="mt-4">
                                Pon en práctica la teoria y aprende, domina y mejora tus habilidades en el mundo de la tecnología.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 mt-6">
                    <div class="card" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="<?php BASE_URL ?>public/assets/img/sistema/talleres.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" style="width: 100%; height: 200px;">
                            </a>
                            <div class="colored-shadow" style="background-image: url(&quot;<?php BASE_URL ?>public/assets/img/sistema/talleres.webp&quot;);"></div>
                        </div>
                        <div class="card-body text-center">
                            <div class="h5 mt-n6 mx-auto text-center">
                                <a href=""><i class="fas fa-hammer"></i> Talleres</a>
                            </div>
                            <p class="mt-4">
                                Domina la tecnologia con los mejores talleres creados por expertos de NuweSoft.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-lg-8 pb-4 bg-gradient-dark position-relative mx-n3">
            <img src="<?php echo BASE_URL ?>public/assets/img/sistema/shapes/pattern-lines.svg" loading="lazy" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 my-auto">
                        <h2 class="mb-4 mt-5 text-white text-animation">Cursos agregados recientemente</h2>
                        <p class="text-white opacity-8">We created many examples for pages like Signup, Signin, Forgot Password, 2FA Authentification and so on. Just choose between a Basic Design, an illustration or a cover and you are good to go!</p>
                        <div class="buttons">
                            <a href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-cover.html" target="_blank" class="btn bg-gradient-primary mt-4">Ver más cursos</a>
                        </div>
                    </div>
                    <div class="col-lg-8 ps-5 pe-0">
                        <div class="row mt-lg-n7">
                            <div class="col-lg-4 col-6 mt-5">
                                <div class="card move-on-hover p-1" id="curso1">

                                </div>
                                <div class="card move-on-hover p-1 mt-4" id="curso2">

                                </div>
                                <div class="card move-on-hover mt-4 p-1" id="curso3">

                                </div>
                            </div>
                            <div class="col-lg-4 col-6 ">
                                <div class="card move-on-hover p-1" id="curso4">

                                </div>
                                <div class="card move-on-hover mt-4 p-1" id="curso5">

                                </div>
                                <div class="card move-on-hover mt-4 p-1" id="curso6">

                                </div>
                                <div class="card move-on-hover mt-4 p-1" id="curso7">

                                </div>
                            </div>
                            <div class="col-lg-4 col-6 mt-5 d-lg-block d-none">
                                <div class="card move-on-hover p-1" id="curso8">

                                </div>
                                <div class="card move-on-hover p-1 mt-4 p-1" id="curso9">

                                </div>
                                <div class="card move-on-hover p-1 mt-4 p-1" id="curso10">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="seccions">
            <div class="wrappers">
                <div class="contenedors">
                </div>
                <div class="blurs"></div>
            </div>
        </section>


        <!--    <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="row text-center my-sm-5 mt-5">
                        <div class="col-lg-6 mx-auto">
                            <span class="badge badge-primary mb-3">Boost creativity</span>
                            <h2 class>With our coded pages</h2>
                            <p class="lead">The easiest way to get started is to use one of our <br /> pre-built example pages. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <a href="<?php echo BASE_URL ?>public//pages/coworking">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/coworking.jpg" loading="lazy" alt="coworking">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Coworking Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/rental">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/rental.jpg" loading="lazy" alt="rental">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Rental Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/case-study">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/case-study.jpg" loading="lazy" alt="case-study">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Case Study</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="<?php echo BASE_URL ?>public/pages/about-us">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/about-us.jpg" loading="lazy" alt="about-us">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">About Us Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/pricing">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/pricing.jpg" loading="lazy" alt="pricing">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Pricing Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/career">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/career.jpg" loading="lazy" alt="career">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Career Page</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="<?php echo BASE_URL ?>public/pages/work-with-us">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/work-with-us.jpg" loading="lazy" alt="work-with-us">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Work With Us</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/terms">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/terms.jpg" loading="lazy" alt="terms">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Terms & Conditions</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/help-center">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/help-center.jpg" loading="lazy" alt="help-center">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Help Center</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="<?php echo BASE_URL ?>public/pages/help-center-basic">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/help-center-basic.jpg" loading="lazy" alt="help-center-basic">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Help Center Basic</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/contact-us">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/contact.jpg" loading="lazy" alt="contact-us">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Contact Us Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/contact-us-simple">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/contact-basic.jpg" loading="lazy" alt="contact-us-basic">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Contact Us Basic</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="<?php echo BASE_URL ?>public/pages/faq">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/faq.jpg" loading="lazy" alt="faq">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">FAQ Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/privacy">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/privacy.jpg" loading="lazy" alt="privacy">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Privacy Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/mobile-app">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/mobile.jpg" loading="lazy" alt="mobile">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Mobile App Page</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="<?php echo BASE_URL ?>public/pages/desktop-app">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/desktop.jpg" loading="lazy" alt="desktop">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Desktop App Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/blog/single-article">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/single-article.jpg" loading="lazy" alt="single-article">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Single Article Blog</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/blog/blog-posts">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/blog-posts.jpg" loading="lazy" alt="blog-posts">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Blog Posts Page</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mt-md-0 mt-4">
                                <a href="<?php echo BASE_URL ?>public/pages/blog/categories">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/categories.jpg" loading="lazy" alt="categories">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Blog Categories</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/blog/author">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/author.jpg" loading="lazy" alt="author">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Author Blog Page</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/automotive">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/automotive.jpg" loading="lazy" alt="automotive">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Automotive Page</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/virtual-reality">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/virtual-reality.jpg" loading="lazy" alt="vr">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Virtual Reality</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/smart-home">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/smart-home.jpg" loading="lazy" alt="smartHome">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Smart Home</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/chat">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/chat.jpg" loading="lazy" alt="chat">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Chat</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mt-md-0 mt-5">
                                <a href="<?php echo BASE_URL ?>public/pages/product-page">
                                    <div class="card move-on-hover">
                                        <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/product.jpg" loading="lazy" alt="product">
                                    </div>
                                    <div class="mt-2 ms-2">
                                        <h6 class="mb-0">Product Page</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto mt-md-0 mt-5">
                        <div class="position-sticky" style="top:100px !important">
                            <h4 class>Presentation Pages for Company, Landing Pages, Blogs and Support</h4>
                            <h6 class="text-secondary">These is just a small selection of the multiple possibitilies you have. Focus on the business, not on the design.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="py-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto text-center">
                        <h2 class="mb-0">Trusted by over</h2>
                        <h2 class="text-gradient text-primary mb-3">1,679,477+ web developers</h2>
                        <p class="lead">Many Fortune 500 companies, startups, universities and governmental institutions love Creative Tim's products. </p>
                    </div>
                </div>
                <div class="row mt-6">
                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 1 day ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things done more efficiently."</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 ms-md-auto">
                        <div class="card bg-gradient-primary">
                            <div class="card-body">
                                <div class="author align-items-center">
                                    <div class="name">
                                        <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                                        <div class="stats text-white">
                                            <i class="far fa-clock"></i> 1 week ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I use them as a freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="card card-plain">
                            <div class="card-body">
                                <div class="author">
                                    <div class="name">
                                        <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                                        <div class="stats">
                                            <i class="far fa-clock"></i> 3 weeks ago
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the components within instead of starting from scratch. I highly recommend for developers who want to spend more time on the backend!."</p>
                                <div class="rating mt-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal dark my-5">
            </div>
        </section>

        <div class="py-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 ms-auto">
                        <h4 class="mb-1">Thank you for your support!</h4>
                        <p class="lead mb-0">We deliver the best web products</p>
                    </div>
                    <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                        <a href="https://twitter.com/intent/tweet?text=Check%20Material%20Design%20System%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-design-system-pro" class="btn btn-twitter mb-0 me-2" target="_blank">
                            <i class="fab fa-twitter me-1"></i> Tweet
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-design-system-pro" class="btn btn-facebook mb-0 me-2" target="_blank">
                            <i class="fab fa-facebook-square me-1"></i> Share
                        </a>
                        <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-design-system-pro" class="btn btn-pinterest mb-0 me-2" target="_blank">
                            <i class="fab fa-pinterest me-1"></i> Pin it
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'public/views/layout/footer.php'; ?>
    <?php require_once 'public/views/layout/scripts.php'; ?>
    <script src="<?php echo BASE_URL ?>public/views/dashboard/dashboard.js"></script>