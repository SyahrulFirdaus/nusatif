
    <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block ">
                    <img src="<?=base_url('style/login.jpg');?>" alt="" width="625px" height="">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selamat Datang!</h1>
                            </div>

                            <?=$this->session->flashdata('message');?>
                            <?=form_open_multipart('welcome/update');?>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                id="nama_barang" aria-describedby="emailHelp"
                                                                placeholder="Nama Barang" name="nama_barang" value="<?=$u->nama_barang?>">
                                                 
                                                        </div>

                                                        <div class="mb-3">
                                                                <label for="foto_barang" class="form-label">Upload Foto Barang</label>
                                                                <input class="form-control" type="file" id="foto_barang" name="foto_barang" value="<?=$u->foto_barang?>" required >
                                                                <small>
                                                                    upload gambar dalam format JPEG,PNG,DAN GIF
                                                                </small>
                                                            </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                id="harga_jual" placeholder="Harga Jual"   name="harga_jual" value="<?=$u->harga_jual?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                id="harga_beli" placeholder="Harga Beli"   name="harga_beli" value="<?=$u->harga_beli?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user"
                                                                id="stok" placeholder="stok" name="stok" value="<?=$u->stok?>">
                                                        </div>

                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary btn-user btn-block">Tambah</button>
                                                        </div>
                                                    <?=form_close();?>
                                                    
	                                            
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

