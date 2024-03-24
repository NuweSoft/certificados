<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="<?php echo BASE_URL ?>home">
      <img src="<?php echo BASE_URL ?>public/assets/img/sistema/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white"><b>NuweSoft</b></span>
    </a>
  </div>

  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item mb-2">
        <a class="nav-link text-white" href="<?php echo BASE_URL ?>home">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1"><b>Dashboard</b></span>
        </a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link text-white " href="<?php echo BASE_URL ?>usuarios">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-user"></i>
          </div>
          <span class="nav-link-text ms-1"><b>Usuarios</b></span>
        </a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link text-white " href="<?php echo BASE_URL ?>instructores">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="fa-solid fa-chalkboard-user"></i>
          </div>
          <span class="nav-link-text ms-1"><b>Instructores</b></span>
        </a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link text-white " href="<?php echo BASE_URL ?>categorias">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-boxes"></i>
          </div>
          <span class="nav-link-text ms-1"><b>Categorias</b></span>
        </a>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white collapsed" aria-controls="ecommerceExamples" role="button" aria-expanded="false">
          <i class="fa-solid fa-screwdriver-wrench"></i>
          <span class="nav-link-text ms-2 ps-1"><b>Configuracion</b></span>
        </a>
        <div class="collapse" id="ecommerceExamples">
          <ul class="nav ">
            <li class="nav-item mb-2">
              <a class="nav-link text-white " href="<?php echo BASE_URL ?>roles">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fa-regular fa-address-card"></i>
                </div>
                <span class="sidenav-normal  ms-2  ps-1"><b>Roles</b></span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</aside>