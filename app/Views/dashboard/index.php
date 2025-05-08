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
                                    <h4 class="text-primary mb-0 ">200</h4>
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
                                            <h4 class="text-primary mb-0 ">20</h4>
                                        </div>
                                        <div class="">
                                            <div class="breadbar"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <div class="">
                                            <small>Mungkin Hadir</small>
                                            <h4 class="text-warning mb-0 ">5</h4>
                                        </div>
                                        <div class="">
                                            <div class="breadbar2"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <div class="">
                                            <small>Tidak Hadir</small>
                                            <h4 class="text-danger mb-0 ">2</h4>
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
                                <ul class="chat-users mb-0 mh-n100" data-simplebar>
                                    <?php
                                    function waktu_relatif($datetime)
                                    {
                                        $timezone = new DateTimeZone('Asia/Jakarta');
                                        $waktu = new DateTime($datetime, $timezone);
                                        $sekarang = new DateTime('now', $timezone);
                                        $interval = $waktu->diff($sekarang);

                                        if ($interval->y > 0) {
                                            return $interval->y . ' tahun';
                                        } elseif ($interval->m > 0) {
                                            return $interval->m . ' bulan';
                                        } elseif ($interval->d > 0) {
                                            return $interval->d . ' hari';
                                        } elseif ($interval->h > 0) {
                                            return $interval->h . ' jam';
                                        } elseif ($interval->i > 0) {
                                            return $interval->i . ' menit';
                                        } else {
                                            return 'Baru saja';
                                        }
                                    }

                                    foreach ($chats as $chat):
                                        // $gender = ($chat['gender'] == "L") ? "user-6.jpg" : "user-5.jpg";
                                    ?>
                                        <li>
                                            <a href="javascript:void(0)" class="px-3 py-2 bg-hover-light-black d-flex align-items-start justify-content-between chat-user" id="chat_user_<?= esc($chat['id']) ?>" data-user-id="<?= esc($chat['id']) ?>">
                                                <div class="d-flex align-items-center">
                                                    <span class="position-relative">
                                                        <img src="<?= base_url('images/profile/profile.png') ?>" alt="<?= esc($chat['nama']) ?>" width="36" height="36" class="rounded-circle" />
                                                        <span class="position-absolute bottom-0 end-0 p-1 badge rounded-pill bg-<?= esc($chat['kota']) ?>">
                                                            <span class="visually-hidden">Status</span>
                                                        </span>
                                                    </span>
                                                    <div class="ms-2 d-inline-block w-75">
                                                        <h1 class="mb-1 fw-semibold chat-title" style="font-size: 9pt;" data-username="<?= esc($chat['pengirim']) ?>">
                                                            <?= esc($chat['pengirim']) ?>
                                                        </h1>
                                                        <span class="fs-2 text-body-color d-block text-wrap text-justify"><?= esc($chat['ucapan']) ?></span>
                                                    </div>
                                                </div>
                                                <p class="fs-1 mb-0 text-muted text-nowrap"><?= waktu_relatif($chat['time_created']) ?></p>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
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