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
              <h3><?=lang('Auth.loginTitle')?></h3>
              <?= view('Myth\Auth\Views\_message_block') ?>
              <p class="mb-4">Login menggunakan E-Mail anda untuk melanjutkan</p>
            </div>
            <form action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>

            <?php if ($config->validFields === ['email']): ?>
              <div class="form-group first">
                <label for="login">E-Mail</label>
                <input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" id="username">
                  <div class="invalid-feedback">
							    	<?= session('errors.login') ?>
							      </div>
              </div>
              <?php else: ?>
						<div class="form-group">
							<label for="login">E-Mail</label>
							<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
              <?php endif; ?>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" id="password">
                
              </div>
              
              <?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
              <?php endif; ?>

              <button type="submit" class="btn btn-block btn-primary"><?=lang('Auth.loginAction')?></button>

              <hr>

              <?php if ($config->allowRegistration) : ?>
              		<p><a href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
              <?php endif; ?>
              <?php if ($config->activeResetter): ?>
              		<p><a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
              <?php endif; ?>
              
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