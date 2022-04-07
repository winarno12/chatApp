<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <form action="" method="POST">
<?php dd(session()->get()) ?>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 py-4">
                <div class="card bg-transparent border-dark">
                    <div class="card-header bg-success">
                        your profile
                    </div>
                    <div class="card-body">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="form-group">
                                    <i class="fas fa-fw fa-user"> </i>
                                    <span>
                                        <label for="">Username</label>
                                    </span>
                                    <input type="text" class="form-control border-white" value="winarno">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="form-group">
                                    <i class="fas fa-fw fa-user"> </i>
                                    <span>
                                        <label for="">About</label>
                                    </span>
                                    <input type="text" class="form-control border-white" value="winarno">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="input-group py-3">
                                            <input type="file" class="form-control" id="profile" name="profile" onchange="priviewImg()">
                                            <label class="input-group-text" id="am" for="profile">Upload</label>
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img src="/assets/img/development/logo/men.svg" class="img-thumbnail imgPreview" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-end">
                            <button class="btn btn-primary btn-sm">save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?= $this->endSection(); ?>
</form>