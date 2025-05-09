<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
            <div class="card-body px-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-medium  mb-0">Dashboard</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="">Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-muted" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <div class="d-sm-flex d-none gap-3 no-block justify-content-end align-items-center">
                            <div class="d-flex gap-2">
                                <div class="">
                                    <small>Jumlah Hadir</small>
                                    <h4 class="text-primary mb-0 "> <?= esc($jumlah->jumlah ?? 0) ?></h4>
                                </div>
                                <div class="">
                                    <div class="breadbar"></div>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <small>Jumlah Undangan</small>
                                    <h4 class="text-secondary mb-0 ">600</h4>
                                </div>
                                <div class="">
                                    <div class="breadbar2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Kolom DataTable -->
            <div class="col-lg-8 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Dashboard</h5>
                        <p class="mb-0">GQ Invitation Dashboard</p>
                        <div class="table-responsive">
                            <table id="tabel_daftar_hadir" class="table table-striped table-bordered display text-nowrap mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Kota</th>
                                        <th>Jam Hadir</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .user-chat-box {
                    max-height: 500px;
                    overflow-y: auto;
                    overflow-x: auto;
                    max-width: 1200px;
                }
            </style>
            <!-- Kolom Chat Box -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body p-2">
                        <!-- <h5 class="card-title mb-4">Chat</h5> -->
                        <div class="user-chat-box">
                            <!-- <div class="d-flex"> -->
                            <div class="w-30 d-none d-lg-block border-end user-chat-box">
                                <div class="px-2 pt-9 pb-6">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative">
                                                <img src="<?= base_url(); ?>/images/profile/user-1.jpg" alt="user1" width="54" height="54" class="rounded-circle" />
                                                <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-success">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="fw-semibold mb-2">QGDigital Undangan</h6>
                                                <p class="mb-0 fs-2">Ucapan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-sm-flex d-none gap-3 no-block justify-content-betwen align-items-center">
                                        <div class="d-flex gap-2">
                                            <div class="">
                                                <small>Hadir</small>
                                                <h4 class="text-primary mb-0 "><?= esc($counting->hadir ?? 0) ?></h4>
                                            </div>
                                            <div class="">
                                                <div class="breadbar"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <div class="">
                                                <small>Mungkin Hadir</small>
                                                <h4 class="text-warning mb-0 "><?= esc($counting->mungkin_hadir ?? 0) ?></h4>
                                            </div>
                                            <div class="">
                                                <div class="breadbar2"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <div class="">
                                                <small>Tidak Hadir</small>
                                                <h4 class="text-danger mb-0 "><?= esc($counting->tidak_hadir ?? 0) ?></h4>
                                            </div>
                                            <div class="">
                                                <div class="breadbar2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="text-muted fw-semibold d-flex align-items-center" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Recent Chats
                                        </a>
                                    </div>
                                </div>
                                <div class="app-chat">
                                    <ul class="chat-users mb-0 mh-n100 list-unstyled" id="chat-list" data-simplebar>
                                    </ul>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>