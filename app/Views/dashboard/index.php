<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/html5-qrcode"></script>
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
                        <!-- <h5 class="card-title mb-4">Dashboard</h5> -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="card-title mb-4">GQ Invitation Dashboard</h5>

                            <div class="form-floating ms-3" style="width: 300px;">
                                <input type="text" id="scanQR" name="scanQR" class="form-control border border-info" placeholder="Scan di sini" />
                                <label>
                                    <i class="ti ti-barcode me-2 fs-4 text-info"></i>
                                    <span class="border-start border-info ps-3">Scan di sini</span>
                                </label>
                                <!-- <input type="hidden" id="scanQR" />
                                <div id="reader" style="width:300px;"></div> -->
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                                <script>
                                    const channel = new BroadcastChannel("scanChannel");

                                    channel.onmessage = async (event) => {
                                        const {
                                            uniqid
                                        } = event.data;

                                        try {
                                            const response = await fetch("/invitation/get-tamu", {
                                                method: "POST",
                                                headers: {
                                                    "Content-Type": "application/x-www-form-urlencoded"
                                                },
                                                body: `uniqid=${encodeURIComponent(uniqid)}`,
                                            });

                                            const result = await response.json();

                                            if (result.status) {
                                                const data = result.data;

                                                Swal.fire({
                                                    title: "Selamat Datang",
                                                    html: `
            <p><strong>${data.nama} & ${data.partner}</strong></p>
            <p>Dari: ${data.dari}</p>
            <input id="namaTamu" type="text" class="swal2-input" value="${data.nama}" />
            <input id="partnerTamu" type="text" class="swal2-input" value="${data.partner}" />
            <input id="jumlahHadir" type="number" class="swal2-input" placeholder="Jumlah Hadir" min="1" />
          `,
                                                    imageUrl: "/images/logos/tittleLogo.png",
                                                    imageWidth: 100,
                                                    imageHeight: 100,
                                                    showCancelButton: true,
                                                    confirmButtonText: "Konfirmasi",
                                                    preConfirm: () => {
                                                        const jumlah = document.getElementById("jumlahHadir").value;
                                                        const nama = document.getElementById("namaTamu").value.trim();
                                                        const partner = document.getElementById("partnerTamu").value.trim();

                                                        if (!jumlah || parseInt(jumlah) < 1) {
                                                            Swal.showValidationMessage("Jumlah hadir minimal 1");
                                                        }
                                                        if (nama === "") {
                                                            Swal.showValidationMessage("Nama tidak boleh kosong");
                                                        }

                                                        return {
                                                            jumlah,
                                                            nama,
                                                            partner
                                                        };
                                                    },
                                                }).then(async (swalResult) => {
                                                    if (swalResult.isConfirmed) {
                                                        const {
                                                            jumlah,
                                                            nama,
                                                            partner
                                                        } = swalResult.value;

                                                        const saveRes = await fetch("/invitation/simpan-kehadiran", {
                                                            method: "POST",
                                                            headers: {
                                                                "Content-Type": "application/x-www-form-urlencoded",
                                                            },
                                                            body: `id_invitation=${data.id}&jumlah=${jumlah}&nama=${encodeURIComponent(
                nama
              )}&partner=${encodeURIComponent(partner)}`,
                                                        });

                                                        const saveData = await saveRes.json();

                                                        if (saveData.status) {
                                                            Swal.fire({
                                                                title: "Tersimpan!",
                                                                text: saveData.message,
                                                                icon: "success",
                                                                showConfirmButton: false,
                                                                timer: 2000,
                                                            });
                                                            $("#tabel_daftar_hadir").DataTable().ajax.reload(null, false);
                                                        } else {
                                                            Swal.fire("Gagal", saveData.message, "error");
                                                        }
                                                    }
                                                });
                                            } else {
                                                Swal.fire("Tamu tidak ditemukan", result.message, "error");
                                            }
                                        } catch (err) {
                                            Swal.fire("Error", "Gagal memproses QR", "error");
                                        }
                                    };
                                </script>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="tabel_daftar_hadir" class="table table-striped table-bordered display text-nowrap mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Dari</th>
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
                                                <h6 class="fw-semibold mb-2">GQ Invitation</h6>
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