<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-lg-8 col-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('auth/saveRegister'); ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-head">
                            <a href="#" class="logo" style="align-items: center;"><img src="<?= base_url('assets/img/development/logo/logo.svg'); ?>" class="img-fluid" alt="logo"></a>
                        </div>
                        <hr>
                        <h4 class="text-primary my-4 text-center">Register !</h4>
                        <div class="form-group mb-3">
                            <input type="text" name="username" class="form-control  <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" placeholder="username" autocomplete="off" value="<?= old('username'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="email" class="form-control  <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" placeholder="email" autocomplete="off" value="<?= old('email'); ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" autocomplete="off" value="<?= old('password'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <input type="password" name="confirm_password" class="form-control <?= ($validation->hasError('password') == 'matches') ? 'is-invalid' : ''; ?> " id="confirm_password" placeholder="Confirm Password" autocomplete="off" value="<?= old('password'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group py-3">
                                        <input type="file" class="form-control" id="profile" name="profile" onchange="priviewImg()">
                                        <label class="input-group-text" id="am" for="profile">Upload</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="/assets/img/development/logo/men.svg" class="img-thumbnail imgPreview" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="about" class="form-control  <?= ($validation->hasError('about')) ? 'is-invalid' : ''; ?>" id="about" placeholder="about" autocomplete="off" value="<?= old('about'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('about'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm btn-block font-18 mb-3">Regis</button>
                    </form>
                    <p class="mb-0 mb-3">Don't have a account? <a href="<?= base_url('/'); ?>">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>