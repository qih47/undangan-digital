<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
            <div class="card-body px-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-medium  mb-0">List Undangan</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="">Form
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-muted" aria-current="page">List Undangan</li>
                            </ol>
                        </nav>
                        <style>
                            /* Fade-in animation */
                            .flash-alert {
                                animation: fadeIn 0.5s ease-in;
                            }

                            /* Fade-out animation */
                            .flash-alert.fade-out {
                                animation: fadeOut 0.5s ease-out forwards;
                            }

                            @keyframes fadeIn {
                                from {
                                    opacity: 0;
                                    transform: translateY(-10px);
                                }

                                to {
                                    opacity: 1;
                                    transform: translateY(0);
                                }
                            }

                            @keyframes fadeOut {
                                from {
                                    opacity: 1;
                                    transform: translateY(0);
                                }

                                to {
                                    opacity: 0;
                                    transform: translateY(-10px);
                                }
                            }
                        </style>
                        <?php if (session()->getFlashdata('message')): ?>
                            <p><?= session()->getFlashdata('message') ?></p>
                        <?php endif; ?>
                        <script>
                            setTimeout(function() {
                                const alert = document.querySelector('.flash-alert');
                                if (alert) {
                                    alert.classList.add('fade-out');
                                    setTimeout(() => alert.remove(), 500);
                                }
                            }, 3000);
                        </script>


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
            <div class="col-lg-9 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Buku List Undangan</h5>
                        <p class="mb-0">GQ Invitation List Undangan</p>
                        <div class="table-responsive">
                            <table id="tabel_list_undangan" class="table table-striped table-bordered display text-nowrap mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Partner</th>
                                        <th>Kota</th>
                                        <th>Status</th>
                                        <th>Link</th>
                                        <th>QR Code</th>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="card h-100">
                    <div class="card-body p-2">
                        <h4 class="card-title">Tambah List Undangan</h4>
                        <p class="card-subtitle mb-3">
                            Tambahkan siapa yang mau di undang
                        </p>

                        <!-- <input type="hidden" id="csrf_token" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>"> -->
                        <div class="form-floating mb-3">
                            <input type="text" id="nama" name="nama" class="form-control border border-info" placeholder="nama" />
                            <label>
                                <i class="ti ti-user me-2 fs-4 text-info"></i>
                                <span class="border-start border-info ps-3">Nama</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="partner" name="partner" class="form-control border border-info" placeholder="Partner" />
                            <label>
                                <i class="ti ti-user me-2 fs-4 text-info"></i>
                                <span class="border-start border-info ps-3">Partner</span>
                            </label>
                        </div>
                        <!-- <div class="form-floating mb-3 ">
                            <select class="form-select border border-info" id="gender" name="gender" required>
                                <option value="L">Pilih</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <label>
                                <i class="ti ti-users me-2 fs-4 text-info"></i>
                                <span class="border-start border-info ps-3">Jenis Kelamin</span>
                            </label>
                        </div> -->
                        <div class="form-floating mb-3">
                            <input type="text" id="kota" name="kota" class="form-control border border-info" placeholder="Password" />
                            <label>
                                <i class="ti ti-location me-2 fs-4 text-info"></i>
                                <span class="border-start border-info ps-3">Kota</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3 ">
                            <select class="form-select border border-info" id="status" name="status" required>
                                <option value="Friend">Pilih</option>
                                <option value="VIP">VIP</option>
                                <option value="Friend">Friend</option>
                                <option value="Keluarga">Keluarga</option>
                            </select>
                            <label>
                                <i class="ti ti-tag me-2 fs-4 text-info"></i>
                                <span class="border-start border-info ps-3">Status</span>
                            </label>
                        </div>

                        <div class="d-md-flex align-items-center">
                            <div class="mt-3 mt-md-0 ms-auto">
                                <button type="button"
                                    id="submit"
                                    name="submit"
                                    value="Submit" class="btn btn-info hstack gap-6">
                                    <i class="ti ti-send me-2 fs-4"></i>
                                    Submit
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end Info Border with Icons -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>