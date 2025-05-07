      <!--  Header Start -->
      <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
              <ul class="navbar-nav">

                  <div class="brand-logo d-none d-xl-flex align-items-center justify-content-between">
                      <a href="index.html" class="text-nowrap logo-img d-flex align-items-center gap-2">
                          <b class="logo-icon">
                              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                              <!-- Dark Logo icon -->
                              <img src="<?= base_url(); ?>/images/logos/logo-light-icon.svg" alt="homepage" class="dark-logo" />
                          </b>
                          <!--End Logo icon -->
                          <!-- Logo text -->
                          <span class="logo-text">
                              <!-- dark Logo text -->
                              <img src="<?= base_url(); ?>/images/logos/logo-light-text.svg" alt="homepage" class="dark-logo ps-2" />
                          </span>
                      </a>
                  </div>
                  <ul class="navbar-nav gap-2">
                      <li class="nav-item nav-icon-hover-bg rounded-circle">
                          <a class="nav-link nav-icon-hover sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                              <iconify-icon icon="solar:list-bold"></iconify-icon>
                          </a>
                      </li>
                  </ul>
                  <!-- <li class="nav-item dropdown">
                      <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                          <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
                          <div class="notification bg-primary rounded-circle"></div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                          <div class="message-body">
                              <a href="javascript:void(0)" class="dropdown-item">
                                  Item 1
                              </a>
                              <a href="javascript:void(0)" class="dropdown-item">
                                  Item 2
                              </a>
                          </div>
                      </div>
                  </li> -->
              </ul>
              <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                  <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                      <li class="nav-item dropdown">
                          <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <img src="<?= base_url(); ?>/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                          </a>
                          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                              <div class="message-body">
                                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                      <i class="ti ti-user fs-6"></i>
                                      <p class="mb-0 fs-3">My Profile</p>
                                  </a>
                                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                      <i class="ti ti-mail fs-6"></i>
                                      <p class="mb-0 fs-3">My Account</p>
                                  </a>
                                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                      <i class="ti ti-list-check fs-6"></i>
                                      <p class="mb-0 fs-3">My Task</p>
                                  </a>
                                  <a href="<?= base_url('logout'); ?>" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
          </nav>
      </header>
      <!--  Header End -->