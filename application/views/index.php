    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                </nav>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Nusantara Aditif Manufacturing</h1>
                    <p class="mb-4">Berikutt daftar harga 3D printing Creality</p>
                    <!-- Data daftar barang -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Apa anda yakin untuk keluar?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?= $this->session->flashdata('message'); ?>
                                            <?= form_open_multipart('welcome/tambah_aksi'); ?>

                                            <div class="form-group">
                                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                                <input type="text" class="form-control form-control-user" id="nama_barang" aria-describedby="emailHelp" placeholder="Nama Barang" name="nama_barang" value="<?= set_Value('nama_barang'); ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="foto_barang" class="form-label">Upload Foto Barang</label>
                                                <input class="form-control" type="file" id="foto_barang" name="foto_barang" required>
                                                <small>
                                                    Upload gambar dalam format JPEG,PNG, dan Gif serta ukuran maximal 100 KB jika selain itu maka gambar tidak akan tampil
                                                </small>
                                            </div>

                                            <div class="form-group">
                                                <label for="harga_jual" class="form-label">Harga Jual</label>
                                                <input type="text" class="form-control form-control-user" id="harga_jual" placeholder="Harga Jual" name="harga_jual" required onkeypress="return hargajual(event)" />

                                            </div>

                                            <div class="form-group">
                                                <label for="harga_beli" class="form-label">Harga Beli</label>
                                                <input type="text" class="form-control form-control-user" id="harga_beli" placeholder="Harga Beli" name="harga_beli" required onkeypress="return hargabeli(event)">

                                            </div>

                                            <div class="form-group">
                                                <label for="stok" class="form-label">Stok Barang</label>
                                                <input type="text" class="form-control form-control-user" id="stok" placeholder="stok" name="stok" required onkeypress="return stok(event)">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <a href="<?= base_url('welcome') ?>" class="btn btn-secondary">Batal</a>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Tambah</button>
                                        </div>
                                        <?= form_close(); ?>

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

                        <?= $this->session->flashdata('message'); ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Foto Barang</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Foto Barang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($user as $row) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?= $row->nama_barang ?></td>
                                                <td>Rp<?= number_format($row->harga_beli, 0, ',', '.') ?> - </td>
                                                <td><?= number_format($row->harga_jual, 0, ',', '.') ?> - </td>
                                                <td><?= $row->stok ?></td>
                                                <td>

                                                    <img src="<?= base_url('assets/foto/'); ?><?php echo $row->foto_barang ?>" width="90" height="70">
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('welcome/del/' . $row->id_barang); ?>" class=" btn btn-danger d-inline" onclick="return confirm('apakah anda yakin akan menghapusnya ?');">
                                                        <i class="fas fa-trash-alt"></i></a>

                                                    <a href="<?= base_url('welcome/edit/' . $row->id_barang); ?>" class=" btn btn-primary d-inline">
                                                        <i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>


    </div>