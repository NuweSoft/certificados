<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3  d-none d-md-block" href="<?php echo BASE_URL ?>cursos" rel="tooltip">
            <?php echo TITLE ?>
          </a>
          <a class="navbar-brand font-weight-bolder ms-sm-3  d-block d-md-none" href="<?php echo BASE_URL ?>cursos" rel="tooltip">
            <?php echo TITLE ?>
          </a>
          <?php if (isset($_SESSION['id_usuario'])) { ?>
          <ul class="navbar-nav mb-0 ms-auto d-lg-none d-block">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo BASE_URL ?>public/assets/img/usuarios/<?php echo $_SESSION['foto'] ?>" class="avatar avatar-sm bg-gradient-dark  me-3 ">
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo BASE_URL ?>public/assets/img/sistema/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?php echo BASE_URL ?>logout">
                    <div class="d-flex py-1">
                      <div class="my-auto avatar avatar-sm bg-gradient-dark  me-3">
                        <i class="fa fa-sign-out-alt"></i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <b>Cerrar Sesión</b>
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <?php } ?>
          <a href="#" class="btn btn-sm  bg-gradient-primary  mb-0 ms-auto d-lg-none d-block">Iniciar sesion</a>
          <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                  Pages
                  <div class="arrow ms-2 d-lg-block d-none" alt="down-arrow">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                  <div class="arrow ms-1 d-lg-none d-block ms-auto" alt="down-arrow">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                  <div class="row d-none d-lg-block">
                    <div class="col-12 px-4 py-2">
                      <div class="row">
                        <div class="col-4 position-relative">
                          <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                            Landing Pages
                          </div>
                          <a href="<?php echo BASE_URL ?>public/pages/coworking.html" class="dropdown-item border-radius-md">
                            <span>Coworking</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/rental.html" class="dropdown-item border-radius-md">
                            <span>Rental</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/case-study.html" class="dropdown-item border-radius-md">
                            <span>Case Study</span>
                          </a>
                          <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                            Company
                          </div>
                          <a href="<?php echo BASE_URL ?>public/pages/about-us.html" class="dropdown-item border-radius-md">
                            <span>About Us</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/pricing.html" class="dropdown-item border-radius-md">
                            <span>Pricing</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/career.html" class="dropdown-item border-radius-md">
                            <span>Career</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/work-with-us.html" class="dropdown-item border-radius-md">
                            <span>Work with us</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/terms.html" class="dropdown-item border-radius-md">
                            <span>Terms & Conditions</span>
                          </a>
                          <hr class="vertical dark">
                        </div>
                        <div class="col-4 position-relative">
                          <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                            Support
                          </div>
                          <a href="<?php echo BASE_URL ?>public/pages/help-center.html" class="dropdown-item border-radius-md">
                            <span>Help Center</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/help-center-basic.html" class="dropdown-item border-radius-md">
                            <span>Help Center Basic</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/contact-us.html" class="dropdown-item border-radius-md">
                            <span>Contact Us</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/contact-us-simple.html" class="dropdown-item border-radius-md">
                            <span>Contact Us Basic</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/faq.html" class="dropdown-item border-radius-md">
                            <span>FAQ</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/privacy.html" class="dropdown-item border-radius-md">
                            <span>Privacy</span>
                          </a>
                          <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-1">
                            Apps
                          </div>
                          <a href="<?php echo BASE_URL ?>public/pages/mobile-app.html" class="dropdown-item border-radius-md">
                            <span>Mobile App</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/desktop-app.html" class="dropdown-item border-radius-md">
                            <span>Desktop App</span>
                          </a>
                          <hr class="vertical dark">
                        </div>
                        <div class="col-4">
                          <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                            Blogs
                          </div>
                          <a href="<?php echo BASE_URL ?>public/pages/blog/single-article.html" class="dropdown-item border-radius-md">
                            <span>Single Article</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/blog/blog-posts.html" class="dropdown-item border-radius-md">
                            <span>Blog Posts</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/blog/categories.html" class="dropdown-item border-radius-md">
                            <span>Categories</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/blog/author.html" class="dropdown-item border-radius-md">
                            <span>Author</span>
                          </a>
                          <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-1">
                            Extra
                          </div>
                          <a href="<?php echo BASE_URL ?>public/pages/automotive.html" class="dropdown-item border-radius-md">
                            <span>Automotive</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/virtual-reality.html" class="dropdown-item border-radius-md">
                            <span>Virtual Reality</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/smart-home.html" class="dropdown-item border-radius-md">
                            <span>Smart Home</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/chat.html" class="dropdown-item border-radius-md">
                            <span>Chat</span>
                          </a>
                          <a href="<?php echo BASE_URL ?>public/pages/product-page.html" class="dropdown-item border-radius-md">
                            <span>Product Page</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-lg-none">
                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                      Landing Pages
                    </div>
                    <a href="<?php echo BASE_URL ?>public/pages/coworking.html" class="dropdown-item border-radius-md">
                      Coworking
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/rental.html" class="dropdown-item border-radius-md">
                      Rental
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/case-study.html" class="dropdown-item border-radius-md">
                      Case Study
                    </a>
                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                      Company
                    </div>
                    <a href="<?php echo BASE_URL ?>public/pages/about-us.html" class="dropdown-item border-radius-md">
                      About Us
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/pricing.html" class="dropdown-item border-radius-md">
                      Pricing
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/career.html" class="dropdown-item border-radius-md">
                      Career
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/work-with-us.html" class="dropdown-item border-radius-md">
                      Work with us
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/terms.html" class="dropdown-item border-radius-md">
                      Terms & Conditions
                    </a>
                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                      Support
                    </div>
                    <a href="<?php echo BASE_URL ?>public/pages/help-center.html" class="dropdown-item border-radius-md">
                      Help Center
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/help-center-basic.html" class="dropdown-item border-radius-md">
                      Help Center Basic
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/contact-us.html" class="dropdown-item border-radius-md">
                      Contact Us
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/contact-us-simple.html" class="dropdown-item border-radius-md">
                      Contact Us Basic
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/faq.html" class="dropdown-item border-radius-md">
                      FAQ
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/privacy.html" class="dropdown-item border-radius-md">
                      Privacy
                    </a>
                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                      Apps
                    </div>
                    <a href="<?php echo BASE_URL ?>public/pages/mobile-app.html" class="dropdown-item border-radius-md">
                      Mobile App
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/desktop-app.html" class="dropdown-item border-radius-md">
                      Desktop App
                    </a>
                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                      Blogs
                    </div>
                    <a href="<?php echo BASE_URL ?>public/pages/blog/single-article.html" class="dropdown-item border-radius-md">
                      Single Article
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/blog/blog-posts.html" class="dropdown-item border-radius-md">
                      Blog Posts
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/blog/categories.html" class="dropdown-item border-radius-md">
                      Categories
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/blog/author.html" class="dropdown-item border-radius-md">
                      Author
                    </a>
                    <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                      Extra
                    </div>
                    <a href="<?php echo BASE_URL ?>public/pages/automotive.html" class="dropdown-item border-radius-md">
                      Automotive
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/virtual-reality.html" class="dropdown-item border-radius-md">
                      Virtual Reality
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/smart-home.html" class="dropdown-item border-radius-md">
                      Smart Home
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/chat.html" class="dropdown-item border-radius-md">
                      Chat
                    </a>
                    <a href="<?php echo BASE_URL ?>public/pages/product-page.html" class="dropdown-item border-radius-md">
                      Product Page
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">contacts</i>
                  Account
                  <div class="arrow ms-2 d-lg-block d-none" alt="down-arrow">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                  <div class="arrow ms-1 d-lg-none d-block ms-auto" alt="down-arrow">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-animation dropdown-md border-radius-xl p-3 mt-0 mt-lg-3" aria-labelledby="dropdownMenuAccount">
                  <div class="d-none d-lg-flex">
                    <ul class="list-group w-100">
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                        <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1" id="dropdownSignIn">
                          <span>Sign In</span>

                          <div class="arrow ms-2 d-lg-block d-none">
                            <i class="fas fa-arrow-down"></i>
                          </div>


                        </a>
                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignIn">
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-cover.html">
                            <span>Cover</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-illustration.html">
                            <span>Illustration</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-basic.html">
                            <span>Basic</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md" href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-simple.html">
                            <span>Simple</span>
                          </a>
                        </div>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                        <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1" id="dropdownSignUp">
                          <span>Sign Up</span>
                          <div class="arrow ms-2 d-lg-block d-none">
                            <i class="fas fa-arrow-down"></i>
                          </div>
                        </a>
                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignUp">
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-cover.html">
                            <span>Cover</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-illustration.html">
                            <span>Illustration</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-basic.html">
                            <span>Basic</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-simple.html">
                            <span>Simple</span>
                          </a>
                        </div>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                        <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1" id="dropdownPasswordReset">
                          <span>Password Reset</span>
                          <div class="arrow ms-2 d-lg-block d-none">
                            <i class="fas fa-arrow-down"></i>
                          </div>
                        </a>
                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownPasswordReset">
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/reset/reset-cover.html">
                            <span>Cover</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/reset/reset-illustration.html">
                            <span>Illustration</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/reset/reset-basic.html">
                            <span>Basic</span>
                          </a>
                        </div>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                        <a class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1" id="dropdownError">
                          <span>Error Pages</span>
                          <div class="arrow ms-2 d-lg-block d-none">
                            <i class="fas fa-arrow-down"></i>
                          </div>
                        </a>
                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownError">
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/error-404.html">
                            <span>404</span>
                          </a>
                          <a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo BASE_URL ?>public/pages/error-500.html">
                            <span>500</span>
                          </a>
                        </div>
                      </li>
                      <li class="nav-item list-group-item border-0 p-0">
                        <a href="<?php echo BASE_URL ?>public/pages/coming-soon.html" class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1">
                          <span>Coming Soon</span>
                        </a>
                      </li>
                      <li class="nav-item list-group-item border-0 p-0">
                        <a href="<?php echo BASE_URL ?>public/pages/2fa-security.html" class="dropdown-item border-radius-md text-dark ps-3 d-flex align-items-center mb-1">
                          <span>2FA Security</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="row d-lg-none">
                    <div class="col-12 d-flex justify-content-center flex-column">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center px-0">
                        Sign In
                      </h6>
                      <a href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-cover.html" class="dropdown-item border-radius-md">
                        Cover
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-illustration.html" class="dropdown-item border-radius-md">
                        Illustration
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-basic.html" class="dropdown-item border-radius-md">
                        Basic
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-simple.html" class="dropdown-item border-radius-md">
                        Simple
                      </a>
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center mt-3 px-0">
                        Sign Up
                      </h6>
                      <a href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-cover.html" class="dropdown-item border-radius-md">
                        Cover
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-illustration.html" class="dropdown-item border-radius-md">
                        Illustration
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-basic.html" class="dropdown-item border-radius-md">
                        Basic
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-simple.html" class="dropdown-item border-radius-md">
                        Simple
                      </a>
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center mt-3 px-0">
                        Password Reset
                      </h6>
                      <a href="<?php echo BASE_URL ?>public/pages/reset/reset-cover.html" class="dropdown-item border-radius-md">
                        Cover
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/reset/reset-illustration.html" class="dropdown-item border-radius-md">
                        Illustration
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/reset/reset-basic.html" class="dropdown-item border-radius-md">
                        Basic
                      </a>
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center mt-3 px-0">
                        Error Pages
                      </h6>
                      <a href="<?php echo BASE_URL ?>public/pages/error-404.html" class="dropdown-item border-radius-md">
                        404
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/error-500.html" class="dropdown-item border-radius-md">
                        500
                      </a>
                      <hr class="horizontal dark">
                      <a href="<?php echo BASE_URL ?>public/pages/coming-soon.html" class="dropdown-item border-radius-md">
                        Coming Soon
                      </a>
                      <a href="<?php echo BASE_URL ?>public/pages/2fa-security.html" class="dropdown-item border-radius-md">
                        2FA Security
                      </a>
                    </div>
                  </div>
                </div>
              </li>

              <li class="nav-item dropdown dropdown-hover mx-2">
                <a role="button" class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">article</i>
                  Docs
                  <div class="arrow ms-2 d-lg-block d-none" alt="down-arrow">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                  <div class="arrow ms-1 d-lg-none d-block ms-auto" alt="down-arrow">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                  <div class="d-none d-lg-block">
                    <ul class="list-group">
                      <li class="nav-item list-group-item border-0 p-0">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
                          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                          <span class="text-sm">All about overview, quick start, license and contents</span>
                        </a>
                      </li>
                      <li class="nav-item list-group-item border-0 p-0">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">
                          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                          <span class="text-sm">See our colors, icons and typography</span>
                        </a>
                      </li>
                      <li class="nav-item list-group-item border-0 p-0">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-kit ">
                          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                          <span class="text-sm">Explore our collection of fully designed components</span>
                        </a>
                      </li>
                      <li class="nav-item list-group-item border-0 p-0">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
                          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                          <span class="text-sm">Check how you can integrate our plugins</span>
                        </a>
                      </li>
                      <li class="nav-item list-group-item border-0 p-0">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit ">
                          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                          <span class="text-sm">For those who want flexibility, use our utility classes</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="row d-lg-none">
                    <div class="col-md-12 g-0">
                      <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo BASE_URL ?>public/pages/about-us.html">
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                        <span class="text-sm">All about overview, quick start, license and contents</span>
                      </a>
                      <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo BASE_URL ?>public/pages/about-us.html">
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                        <span class="text-sm">See our colors, icons and typography</span>
                      </a>
                      <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo BASE_URL ?>public/pages/about-us.html">
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                        <span class="text-sm">Explore our collection of fully designed components</span>
                      </a>
                      <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo BASE_URL ?>public/pages/about-us.html">
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                        <span class="text-sm">Check how you can integrate our plugins</span>
                      </a>
                      <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo BASE_URL ?>public/pages/about-us.html">
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                        <span class="text-sm">For those who want flexibility, use our utility classes</span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <?php if (isset($_SESSION['id_usuario'])) { ?>
            <ul class="navbar-nav d-lg-block d-none">
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo BASE_URL ?>public/assets/img/usuarios/<?php echo $_SESSION['foto'] ?>" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="<?php echo BASE_URL ?>public/assets/img/sistema/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="<?php echo BASE_URL ?>logout">
                      <div class="d-flex py-1">
                        <div class="my-auto avatar avatar-sm bg-gradient-dark  me-3">
                          <i class="fa fa-sign-out-alt"></i>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <b>Cerrar Sesión</b>
                          </h6>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <?php } ?>
            <a href="<?php echo BASE_URL ?>login" class="btn btn-sm  bg-gradient-primary mb-0 ms-auto d-lg-block d-none"> Iniciar sesion</a>
          </div>
        </div>
      </nav>

    </div>
  </div>
</div>