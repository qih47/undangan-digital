<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
        class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <!-- <h2 class="card-header"><?= lang('Auth.register') ?></h2> -->
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <div class="card-body">
                            <a href="index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                <b class="logo-icon">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                    <img src="<?= base_url(); ?>/images/logos/logo-icon.svg" alt="homepage" class="dark-logo" />
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                    <!-- dark Logo text -->
                                    <img src="<?= base_url(); ?>/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2" />
                                </span>
                            </a>
                            <p class="text-center">Silahkan melakukan registrasi</p>
                            <form action="<?= url_to('register') ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="mb-3">
                                    <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" aria-describedby="textHelp" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
                                    <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                </div>
                                <div class="mb-4">
                                    <label for="repeatPassword" class="form-label"><?= lang('Auth.repeatPassword') ?></label>
                                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2"><?= lang('Auth.register') ?></button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <!-- <p class="fs-4 mb-0 fw-medium">Sudah mempunyai akun?</p> -->
                                    <p class="fs-4 mb-0 fw-medium"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= base_url('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                                    <!-- <a class="text-primary fw-medium ms-2" href="<?= base_url('login'); ?>">Masuk</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>