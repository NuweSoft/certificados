<?php require_once 'public/views/layout/head.php'; ?>

<body class="presentation-page bg-gray-200">
  <?php require_once 'public/views/layout/nav.php'; ?>
  <?php require_once 'public/views/layout/header.php'; ?>

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <section class="pt-3 pb-4" id="count-stats">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 z-index-2 border-radius-xl mx-auto py-3">
            <div class="row">
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"><span id="state1" countTo="300">0</span>+</h1>
                  <h5 class="mt-3">Coded Elements</h5>
                  <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"> <span id="state2" countTo="100">0</span>+</h1>
                  <h5 class="mt-3">Design Blocks</h5>
                  <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary" id="state3" countTo="41">0</h1>
                  <h5 class="mt-3">Pages</h5>
                  <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5 py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
            <div class="rotating-card-container">
              <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                  <div class="card-body py-7 text-center">
                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                    <h3 class="text-white">Feel the <br /> Material Kit</h3>
                    <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white">Discover More</h3>
                    <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                    <a href="<?php echo BASE_URL ?>public//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ms-auto">
            <div class="row justify-content-start">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                  <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                  <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                  <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                  <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-5">
              <div class="col-md-6 mt-3">
                <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
                <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
                <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
              </div>
              <div class="col-md-6 mt-3">
                <div class="info">
                  <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                  <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                  <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5 py-5">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-6">
              <span class="badge badge-primary mb-3">Infinite combinations</span>
              <h2 class="text-dark mb-0">Huge collection of sections</h2>
              <p class="lead">We have created multiple options for you to put together and customise into pixel perfect pages. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Design Blocks</h3>
              <h6 class="text-secondary font-weight-normal pe-3">A selection of 45 page sections that fit perfectly in any combination</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row">
              <div class="col-md-4 mt-md-0">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/hero-sections.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/headers.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Page Headers</h6>
                    <p class="text-secondary text-sm font-weight-normal">10 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/features.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/features.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Features</h6>
                    <p class="text-secondary text-sm font-weight-normal">14 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/pricing.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/pricing.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Pricing</h6>
                    <p class="text-secondary text-sm font-weight-normal">8 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/faq.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/faq.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">FAQ</h6>
                    <p class="text-secondary text-sm font-weight-normal">1 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/blog-posts.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/blogs.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Blog Posts</h6>
                    <p class="text-secondary text-sm font-weight-normal">11 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/testimonials.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/testimonials.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Testimonials</h6>
                    <p class="text-secondary text-sm font-weight-normal">11 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/teams.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/teams.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Teams</h6>
                    <p class="text-secondary text-sm font-weight-normal">6 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/stats.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/stats.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Stats</h6>
                    <p class="text-secondary text-sm font-weight-normal">3 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/call-to-actions.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/call-to-action.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Call to Actions</h6>
                    <p class="text-secondary text-sm font-weight-normal">8 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/applications.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/projects.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Applications</h6>
                    <p class="text-secondary text-sm font-weight-normal">6 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/logo-areas.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/logo-area.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Logo Areas</h6>
                    <p class="text-secondary text-sm font-weight-normal">4 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/footers.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/footers.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Footers</h6>
                    <p class="text-secondary text-sm font-weight-normal">10 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/general-cards.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/general-cards.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">General Cards</h6>
                    <p class="text-secondary text-sm font-weight-normal">9 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/page-sections/content-sections.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/content-sections.jpg" alt="img" loading="lazy">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Content Sections</h6>
                    <p class="text-secondary text-sm font-weight-normal">8 Examples</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-lg-6">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Navigation</h3>
              <h6 class="text-secondary font-weight-normal pe-3">30+ components that will help go through the pages</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="<?php echo BASE_URL ?>public/sections/navigation/navbars.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/navbars.jpg" alt="navbars">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Navbars</h6>
                    <p class="text-secondary text-sm font-weight-normal">4 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/navigation/nav-tabs.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/nav-tabs.jpg" alt="navtabs">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Nav Tabs</h6>
                    <p class="text-secondary text-sm font-weight-normal">2 Nav Tabs</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/navigation/pagination.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/pagination.jpg" alt="pagination">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Pagination</h6>
                    <p class="text-secondary text-sm font-weight-normal">3 Examples</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-lg-6">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Input Areas</h3>
              <h6 class="text-secondary font-weight-normal pe-3">50+ elements that you need for text manipulation and insertion</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="<?php echo BASE_URL ?>public/sections/input-areas/newsletters.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/newsletters.jpg" alt="newsletter">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Newsletters</h6>
                    <p class="text-secondary text-sm font-weight-normal">6 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/input-areas/contact-sections.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/contact-sections.jpg" alt="contact">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Contact Sections</h6>
                    <p class="text-secondary text-sm font-weight-normal">8 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/input-areas/forms.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 m-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/forms.jpg" alt="forms">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Forms</h6>
                    <p class="text-secondary text-sm font-weight-normal">3 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="<?php echo BASE_URL ?>public/sections/input-areas/inputs.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/inputs.jpg" alt="inputs">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Inputs</h6>
                    <p class="text-secondary text-sm font-weight-normal">6 Examples</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-lg-6">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Attention Catchers</h3>
              <h6 class="text-secondary font-weight-normal pe-3">20+ Fully coded components that popup from different places of the screen</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="<?php echo BASE_URL ?>public/sections/attention-catchers/alerts.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/alerts.jpg" alt="alerts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Alerts</h6>
                    <p class="text-secondary text-sm font-weight-normal">4 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/attention-catchers/notifications.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/toasts.jpg" alt="toasts">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Notifications</h6>
                    <p class="text-secondary text-sm font-weight-normal">3 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/attention-catchers/tooltips-popovers.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/popovers.jpg" alt="popovers">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Tooltips & Popovers</h6>
                    <p class="text-secondary text-sm font-weight-normal">2 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="<?php echo BASE_URL ?>public/sections/attention-catchers/modals.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/modals.jpg" alt="modals">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Modals</h6>
                    <p class="text-secondary text-sm font-weight-normal">5 Examples</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Elements</h3>
              <h6 class="text-secondary font-weight-normal pe-3">80+ carefully crafted small elements that come with multiple colors and shapes</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/buttons.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/buttons.jpg" alt="buttons">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Buttons</h6>
                    <p class="text-secondary text-sm font-weight-normal">6 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/avatars.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/avatars.jpg" alt="avatar">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Avatars</h6>
                    <p class="text-secondary text-sm font-weight-normal">2 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/dropdowns.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/dropdowns.jpg" alt="dropdown">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Dropdowns</h6>
                    <p class="text-secondary text-sm font-weight-normal">2 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/toggles.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/switch.jpg" alt="toggle">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Toggles</h6>
                    <p class="text-secondary text-sm font-weight-normal">2 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/social-buttons.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/social-buttons.jpg" alt="social-btn">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Social Buttons</h6>
                    <p class="text-secondary text-sm font-weight-normal">2 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/button-groups.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/button-groups.jpg" alt="btn-groups">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Button Groups</h6>
                    <p class="text-secondary text-sm font-weight-normal">5 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="<?php echo BASE_URL ?>public/sections/elements/breadcrumbs.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/breadcrumbs.jpg" alt="breadcrumbs">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Breadcrumbs</h6>
                    <p class="text-secondary text-sm font-weight-normal">1 Example</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/badges.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/badges.jpg" alt="badges">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Badges</h6>
                    <p class="text-secondary text-sm font-weight-normal">3 Example</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/progress-bars.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/progress.jpg" alt="progress">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Progress Bars</h6>
                    <p class="text-secondary text-sm font-weight-normal">4 Examples</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4 mt-md-0 mt-3">
                <a href="<?php echo BASE_URL ?>public/sections/elements/tables.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/tables.jpg" alt="tables">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Tables</h6>
                    <p class="text-secondary text-sm font-weight-normal">3 Examples</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-md-0 mt-4">
                <a href="<?php echo BASE_URL ?>public/sections/elements/typography.html">
                  <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                    <img class="w-100 my-auto" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/sections/typography.jpg" alt="typography">
                  </div>
                  <div class="mt-2 ms-2">
                    <h6 class="mb-0">Typography</h6>
                    <p class="text-secondary text-sm font-weight-normal">2 Examples</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-lg-10 pb-4 bg-gradient-dark position-relative mx-n3">
      <img src="<?php echo BASE_URL ?>public/assets/img/sistema/shapes/pattern-lines.svg" loading="lazy" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 my-auto">
            <h2 class="mb-4 text-white">Account Pages for beautiful webapps</h2>
            <p class="text-white opacity-8">We created many examples for pages like Signup, Signin, Forgot Password, 2FA Authentification and so on. Just choose between a Basic Design, an illustration or a cover and you are good to go!</p>
            <div class="buttons">
              <a href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-cover.html" target="_blank" class="btn bg-gradient-primary mt-4">View Pages</a>
              <a href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-basic.html" target="_blank" class="btn text-white shadow-none mt-4">View Signup Pages</a>
            </div>
          </div>
          <div class="col-lg-8 ps-5 pe-0">
            <div class="row mt-lg-n7">
              <div class="col-lg-4 col-6 mt-5">
                <div class="card move-on-hover">
                  <a href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-basic.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/sign-up-cover.jpg" loading="lazy" alt="signupcover">
                  </a>
                </div>
                <div class="card move-on-hover p-1 mt-4">
                  <a href="<?php echo BASE_URL ?>public/pages/reset/reset-cover.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/reset-cover.jpg" loading="lazy" alt="reset-cover">
                  </a>
                </div>
                <div class="card move-on-hover mt-4 p-1">
                  <a href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-illustration.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/signup-illustration.jpg" loading="lazy" alt="signupill">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="card move-on-hover">
                  <a href="<?php echo BASE_URL ?>public/pages/2fa-security.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/2fa.jpg" loading="lazy" alt="2fa">
                  </a>
                </div>
                <div class="card move-on-hover mt-4">
                  <a href="<?php echo BASE_URL ?>public/pages/coming-soon.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/comming-soon.jpg" loading="lazy" alt="soon">
                  </a>
                </div>
                <div class="card move-on-hover mt-4">
                  <a href="<?php echo BASE_URL ?>public/pages/reset/reset-basic.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/reset-basic.jpg" loading="lazy" alt="reset-basic">
                  </a>
                </div>
                <div class="card move-on-hover mt-4">
                  <a href="<?php echo BASE_URL ?>public/pages/error-500.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/error-500.jpg" loading="lazy" alt="500">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-6 mt-5 d-lg-block d-none">
                <div class="card move-on-hover">
                  <a href="<?php echo BASE_URL ?>public/pages/error-404.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/error-404.jpg" loading="lazy" alt="404">
                  </a>
                </div>
                <div class="card move-on-hover mt-4">
                  <a href="<?php echo BASE_URL ?>public/pages/sign-in/sign-in-illustration.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/signin-basic.jpg" loading="lazy" alt="basic">
                  </a>
                </div>
                <div class="card move-on-hover p-1 mt-4">
                  <a href="<?php echo BASE_URL ?>public/pages/sign-up/sign-up-cover.html">
                    <img class="w-100 border-radius-xl" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/account/sign-up-cover.jpg" loading="lazy" alt="coverr">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
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
    </section>

    <div class="container mt-sm-5">
      <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');" loading="lazy">
        <span class="mask bg-gradient-dark"></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 ms-lg-5">
              <h4 class="text-white">Built by developers</h4>
              <h1 class="text-white">Complex Documentation</h1>
              <p class="lead text-white opacity-8">From colors, cards, typography to complex elements, you will find the full documentation. Play with the utility classes and you will create unlimited combinations for our components.</p>
              <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
                Read docs
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4">
            <i class="material-icons text-white text-3xl">flag</i>
            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
              <h5 class="text-white">Getting Started</h5>
              <p class="text-white">Check the possible ways of working with our product and the necessary files for building your own project.</p>
              <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit" class="text-white icon-move-right">
                Let's start
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
          <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100">
            <i class="material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
              <h5>Plugins</h5>
              <p>Get inspiration and have an overview about the plugins that we used to create the Material Kit.</p>
              <a href="https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit" class="text-primary icon-move-right">
                Read more
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-lg-0 mt-4">
          <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4">
            <i class="material-icons text-gradient text-primary text-3xl">receipt_long</i>
            <div class="ps-0 ps-md-3 mt-3 mt-md-0">
              <h5>Utility Classes</h5>
              <p>Material Kit is giving you a lot of pre-made elements. For those who want flexibility, we included many utility classes.</p>
              <a href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit" class="text-primary icon-move-right">
                Read more
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

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
        <div class="row">
          <div class="col-lg-2 col-md-4 col-6 ms-auto">
            <img class="w-100 opacity-6" src="<?php echo BASE_URL ?>public/assets/img/sistema/logos/gray-logos/logo-apple.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <img class="w-100 opacity-6" src="<?php echo BASE_URL ?>public/assets/img/sistema/logos/gray-logos/logo-facebook.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6">
            <img class="w-100 opacity-6" src="<?php echo BASE_URL ?>public/assets/img/sistema/logos/gray-logos/logo-nasa.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
            <img class="w-100 opacity-6" src="<?php echo BASE_URL ?>public/assets/img/sistema/logos/gray-logos/logo-vodafone.svg" alt="Logo">
          </div>
          <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
            <img class="w-100 opacity-6" src="<?php echo BASE_URL ?>public/assets/img/sistema/logos/gray-logos/logo-digitalocean.svg" alt="Logo">
          </div>
        </div>
      </div>
    </section>
    <section class="py-sm-7" id="pricing-soft-ui">
      <div class="bg-gradient-primary position-relative mx-n3 overflow-hidden">
        <img src="<?php echo BASE_URL ?>public/assets/img/sistema/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-6">
        <div class="container pb-lg-8 pb-7 pt-5 postion-relative z-index-2 position-relative">
          <div class="row">
            <div class="col-md-7 mx-auto text-center">
              <span class="badge bg-gradient-dark mb-2">Pricing</span>
              <h3 class="text-white">Ready to get Material Kit?</h3>
              <p class="text-white">Based on the license you get, you will have direct access to our team <br /> of developers who built the product.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-lg-n8 mt-n6">
        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
              <div class="card h-100">
                <div class="card-header text-sm-start text-center pt-4 pb-3 px-4">
                  <h5 class="mb-1">Freelancer</h5>
                  <p class="mb-3 text-sm">Good for a personal or client web/mobile app.</p>
                  <h3 class="font-weight-bolder mt-3">
                    $79
                  </h3>
                  <a href="https://secure.avangate.com/order/checkout.php?PRODS=37189144&OPTIONS37189144=FREELANCER&CART=1&CARD=2&CLEAN_CART=1&SHORT_FORM=1" class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-4 mb-2">Buy now</a>
                </div>
                <hr class="horizontal dark my-0">
                <div class="card-body">
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Complete documentation</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Full code</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Projects - 1</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Team Size - 1</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Support</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Free Updates - 6 months</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
              <div class="card h-100">
                <div class="card-header text-sm-start text-center pt-4 pb-3 px-4">
                  <h5 class="mb-1">Startup</h5>
                  <p class="mb-3 text-sm">Build your startup or client web/mobile app.</p>
                  <h3 class="font-weight-bolder mt-3">
                    $149
                  </h3>
                  <a href="https://secure.avangate.com/order/checkout.php?PRODS=37189144&OPTIONS37189144=STARTUP&CART=1&CARD=2&CLEAN_CART=1&SHORT_FORM=1" class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-4 mb-2">Buy now</a>
                </div>
                <hr class="horizontal dark my-0">
                <div class="card-body">
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Complete documentation</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Full code</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Projects - 1</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Team Size - up to 5</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Support</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Free Updates - 12 months</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
              <div class="card bg-gradient-dark h-100">
                <div class="card-header bg-transparent text-sm-start text-center pt-4 pb-3 px-4 z-index-2">
                  <h5 class="mb-1 text-white">Company</h5>
                  <p class="mb-3 text-sm text-white">Perfect for web/mobile apps or SaaS projects.</p>
                  <h3 class="font-weight-bolder mt-3 text-white">
                    $249
                  </h3>
                  <a href="https://secure.avangate.com/order/checkout.php?PRODS=37189144&OPTIONS37189144=COMPANY&CART=1&CARD=2&CLEAN_CART=1&SHORT_FORM=1" class="btn btn-sm btn-white w-100 border-radius-md mt-4 mb-2">Buy
                    now</a>
                </div>
                <hr class="horizontal light my-0">
                <div class="card-body z-index-2">
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-white">done</i>
                    <span class="text-sm ps-3 text-white">Complete documentation</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-white">done</i>
                    <span class="text-sm ps-3 text-white">Full code</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-white">done</i>
                    <span class="text-sm ps-3 text-white">Use in SaaS</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-white">done</i>
                    <span class="text-sm ps-3 text-white">Projects - unlimited</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-white">done</i>
                    <span class="text-sm ps-3 text-white">Team Size - up to 20</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-white">done</i>
                    <span class="text-sm ps-3 text-white">Priority support</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-white">done</i>
                    <span class="text-sm ps-3 text-white">Free Updates - 12 months</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
              <div class="card h-100">
                <div class="card-header text-sm-start text-center pt-4 pb-3 px-4">
                  <h5 class="mb-1">Enterprise</h5>
                  <p class="mb-3 text-sm">Deploy large-scale projects which include redistribution rights.</p>
                  <h3 class="font-weight-bolder mt-3">
                    $599
                  </h3>
                  <a href="https://secure.avangate.com/order/checkout.php?PRODS=37189144&OPTIONS37189144=ENTERPRISE&CART=1&CARD=2&CLEAN_CART=1&SHORT_FORM=1" class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-4 mb-2">Buy
                    now</a>
                </div>
                <hr class="horizontal dark my-0">
                <div class="card-body">
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Complete documentation</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Full code</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Use in SaaS</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Projects - unlimited</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Developers - more than 20</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Priority support</span>
                  </div>
                  <div class="d-flex pb-3">
                    <i class="material-icons my-auto text-dark">done</i>
                    <span class="text-sm ps-3">Free Updates - 24 months</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="text-center mt-5">
                <i class="fa fa-lock" aria-hidden="true"></i> Secured Payment by <b> 2Checkout </b> with:
                <br><br>
                <i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i> <i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i> <i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i> <i class="fa fa-cc-amex fa-2x" aria-hidden="true"></i>
              </p>
              <p class="text-center max-width-500 mx-auto"> <b>Info:</b> If you are a Registered Company inside the European Union you will be able to add your VAT ID after your Press "Buy Now"
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="py-5">
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