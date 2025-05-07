<?php if (session()->getFlashdata('message')): ?>
    <p><?= session()->getFlashdata('message') ?></p>
<?php endif; ?>

<form action="<?= base_url('invitation/simpan') ?>" method="post">
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="text" name="partner" placeholder="Partner" required><br>
    <select name="gender" required>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <input type="text" name="kota" placeholder="Kota" required><br>
    <select name="status" required>
        <option value="VIP">VIP</option>
        <option value="Friend">Friend</option>
        <option value="Keluarga">Keluarga</option>
    </select><br>
    <button type="submit">Simpan Undangan</button>
</form>