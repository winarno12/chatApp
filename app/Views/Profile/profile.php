<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="container rounded bg-white mt-5">
        <div class="card">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5 imgPreview" src="/assets/img/development/profile/profile.jpg" width="100"><span class="text-black-50"><?= $user['email']; ?></span><span>Indonesia</span></div>
                </div>

                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="text-end text-success">Edit Profile</h6>
                        </div>
                        <div class="form-group">
                            <div class="row mb-3">
                                <label for="">Username</label>
                                <div class="col-8"><input type="text" class="form-control" value="" placeholder="Enter Your Username"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mb-3">
                                <label for="">About</label>
                                <div class="col-8"><input type="text" class="form-control" value="" placeholder="Enter Your About"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mb-3">
                                <div class="col-8">
                                    <label for="sampul" class="col-2 col-form-label">sampul</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control " id="sampul" name="sampul" onchange="priviewImg()">
                                        <label class="input-group-text" id="am" for="sampul">Upload</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-end"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection() ?>