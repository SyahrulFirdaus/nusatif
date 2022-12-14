
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
                                    <form class="user" method="post" action="<?=base_url('welcome');?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Alamat Email" name="email" value="<?=set_Value('email');?>">
                                                <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="password" name="password">
                                                <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?=base_url('welcome/registration')?>">Buat Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

  