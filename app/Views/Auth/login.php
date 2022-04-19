<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-lg-8 col-10">
            <?= session()->getFlashdata('message') ?>
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('/login'); ?>" method="POST">
                        <div class="form-head">
                            <a href="#" class="logo" style="align-items: center;"><img src="./assets/img/development/logo/logo.svg" class="img-fluid" alt="logo"></a>
                        </div>
                        <hr>
                        <h4 class="text-primary my-4 text-center">Log in !</h4>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="email" name="email" placeholder="email" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password" autocomplete="off">
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox text-left">
                                    <input type="checkbox" class="custom-control-input" value="remember" name="remember_me" id="rememberme">
                                    <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm btn-block font-18">Log in</button>
                    </form>
                    <p class="mb-0 mt-3">Don't have a account? <a href="<?= base_url('register'); ?>">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
