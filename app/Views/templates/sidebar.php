    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="user-profile position-relative"
                style="background: url(<?= base_url(); ?>/images/backgrounds/user-info.jpg) no-repeat;">
                <!-- User profile image -->
                <div class="profile-img">
                    <img src="<?= base_url(); ?>/images/profile/user-1.jpg" alt="user" class="w-100 rounded-circle overflow-hidden" />
                </div>
                <div
                    class="close-btn cursor-pointer d-flex align-items-center justify-content-center d-xl-none end-0 p-2 position-absolute sidebartoggler text-white top-0"
                    id="sidebarCollapse">
                    <i class="ti ti-x fs-7"></i>
                </div>
                <!-- User profile text-->
                <div class="profile-text hide-menu pt-1 dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown w-100 text-white
                  d-block
                  position-relative
                " id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Qisthi Iskandar H</a>
                    <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item d-flex gap-2" href="javascript:void(0)"><i data-feather="user"
                                class="feather-sm text-info "></i>
                            My Profile</a>
                        <a class="dropdown-item d-flex gap-2" href="javascript:void(0)"><i data-feather="credit-card"
                                class="feather-sm text-info "></i>
                            My Notes</a>
                        <a class="dropdown-item d-flex gap-2" href="javascript:void(0)"><i data-feather="mail"
                                class="feather-sm text-success "></i>
                            Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex gap-2" href="javascript:void(0)"><i data-feather="settings"
                                class="feather-sm text-warning "></i>
                            Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex gap-2" href="<?= base_url('logout'); ?>"><i data-feather="log-out"
                                class="feather-sm text-danger "></i>
                            Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="px-3 py-2">
                            <a href="javascript:void(0)" class="btn d-block w-100 btn-info rounded-pill">View
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= site_url('dashboard'); ?>" aria-expanded="false">
                            <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    </li>

                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">FORM</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= site_url('buku'); ?>" aria-expanded="false">
                            <iconify-icon icon="solar:layers-minimalistic-bold-duotone"></iconify-icon>
                            <span class="hide-menu">Buku Tamu</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= site_url('invitation/list'); ?>" aria-expanded="false">
                            <iconify-icon icon="solar:danger-circle-line-duotone"></iconify-icon>
                            <span class="hide-menu">List Undangan</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->