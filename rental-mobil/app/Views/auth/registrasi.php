 <!-- memanggil template -->
 <?= $this->extend('auth/templates/index'); ?>

 <!-- mengambil file template -->
 <?= $this->section('content'); ?>
  
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3><?=lang('Auth.register')?></h3>
              <p class="mb-4">Buat Akun Untuk Melanjutkan</p>
            </div>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="<?= route_to('register') ?>" method="post" class="user">
                        <?= csrf_field() ?>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" id="username" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
              </div>
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" id="username" name="email"
                   value="<?= old('email') ?>">

              </div>
              <div class="form-group first">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control<?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"  autocomplete="off" id="password">       
              </div>
              <div class="form-group last mb-4">
                <label for="password">Ulangi Password</label>
                <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" autocomplete="off">  
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Ingatkan Saya</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Lupa Password?</a></span> 
              </div>

              <button type="submit" class="btn btn-block btn-primary"><?=lang('Auth.register')?></button>

              <hr>
                  <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
              <br>
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>

            </div>
          </div>
          
        </div>
        
      </div>
    </div>

  <!-- akhiri pengambilan -->
  <?= $this->endSection(); ?>
