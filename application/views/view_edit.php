<!-- Create By Syahrul Firdaus -->
<title>Edit Data</title>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                <?php foreach ($user as $u) { ?>
                                    <?= form_open_multipart('welcome/update'); ?>

                                    <div class="form-group">
                                        <label for="nama_barang" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control form-control-user" id="nama_barang" aria-describedby="emailHelp" placeholder="Nama Barang" name="nama_barang" value="<?=$u->nama_barang?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="foto_barang" class="form-label">Upload Foto Barang</label>
                                        <input class="form-control" type="file" id="foto_barang" name="foto_barang" value="<?=$u->foto_barang?>" required>
                                        <small>
                                            Upload gambar dalam format JPEG,PNG, dan Gif serta ukuran maximal 100 KB jika selain itu maka gambar tidak akan tampil
                                        </small>
                                    </div>

                                    <div class="form-group">
                                        <label for="harga_jual" class="form-label">Harga Jual</label>
                                        <input type="text" class="form-control form-control-user" id="harga_jual" placeholder="Harga Jual" name="harga_jual" value="<?=$u->harga_jual?>" required onkeypress="return hargajual(event)" />

                                    </div>

                                    <div class="form-group">
                                        <label for="harga_beli" class="form-label">Harga Beli</label>
                                        <input type="text" class="form-control form-control-user" id="harga_beli" placeholder="Harga Beli" name="harga_beli" value="<?=$u->harga_beli?>" required onkeypress="return hargabeli(event)">

                                    </div>

                                    <div class="form-group">
                                        <label for="stok" class="form-label">Stok Barang</label>
                                        <input type="text" class="form-control form-control-user" id="stok" placeholder="stok" name="stok" value="<?=$u->stok?>" required onkeypress="return stok(event)">
                                    </div>
                                    <input type="submit" value="Simpan">

                                    <?= form_close(); ?>

                                <?php } ?>

                                <script>
                                            function hargajual(evt) {
                                                var charCode = (evt.which) ? evt.which : event.keyCode
                                                if (charCode > 31 && (charCode < 48 || charCode > 57))

                                                    return false;
                                                return true;
                                            }

                                            function hargabeli(evt) {
                                                var charCode = (evt.which) ? evt.which : event.keyCode
                                                if (charCode > 31 && (charCode < 48 || charCode > 57))

                                                    return false;
                                                return true;
                                            }

                                            function stok(evt) {
                                                var charCode = (evt.which) ? evt.which : event.keyCode
                                                if (charCode > 31 && (charCode < 48 || charCode > 57))

                                                    return false;
                                                return true;
                                            }
                                        </script>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>