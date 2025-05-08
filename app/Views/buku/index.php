<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
            <div class="card-body px-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-medium  mb-0">Buku Tamu</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="">Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-muted" aria-current="page">Buku Tamu</li>
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
            <div class="col-lg-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Buku Tamu</h5>
                        <p class="mb-0">GQ Invitation Buku Tamu</p>
                        <div class="table-responsive">
                            <table id="tabel_buku_tamu" class="table table-striped table-bordered display text-nowrap mt-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Kota</th>
                                        <th>Status</th>
                                        <th>Jam Hadir</th>
                                        <th>Link</th>
                                        <th>Doa</th>
                                        <th>QR Code</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDoa" tabindex="-1" role="dialog" aria-labelledby="modalDoaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDoaLabel">Ucapan Doa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="isiDoa">Belum ada doa.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>