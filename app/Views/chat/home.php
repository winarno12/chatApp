<?php 
use App\Models\friendModel;

  $this->friendModel = new friendModel();
?>

<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="bg-success" style="height: 100px;">
            <div class="row justify-content-center">
                <div class="col-md-7 mt-5">
                    <div class="card">
                        <div class="card-header bg-white">
                            <div class="mt-1">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="input-group rounded">
                                            <input type="search" class="form-control rounded border-primary" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                        </div>
                                    </div>
                                    <div class="col-4 offset-3">
                                        <a href="./notif" class="btn btn-light btn-sm"><i class="fas fa-bell fa-2x"></i></a>
                                        <a href="./users" class="btn btn-light btn-sm mx-3"><i class="fas fa-users fa-2x"></i></a>
                                        <a href="" class="btn btn-light btn-sm "><i class="fas fa-user fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-auto">
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <?php foreach($friends as $val): ?>
                                    <li class="p-2 border-bottom ">
                                        <a href="#!" class="d-flex justify-content-between text-decoration-none">
                                            <div class="d-flex flex-row">
                                                <img src="./img/user/<?=$val['profile']  ;?>" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                                <div class="pt-1">
                                                    <p class="fw-bold mb-0"><?=$val['username']  ;?></p>
                                                    <p class="small text-muted"></p>
                                                </div>
                                            </div>
                                            <div class="pt-1">
                                                <p class="small text-muted mb-1">Just now</p>
                                                <span class="badge bg-danger float-end">1</span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container py-5">
    <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
            <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="p-2 border-bottom" style="background-color: #eee;">
                            <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                        <p class="fw-bold mb-0">John Doe</p>
                                        <p class="small text-muted">Hello, Are you there?</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">Just now</p>
                                    <span class="badge bg-danger float-end">1</span>
                                </div>
                            </a>
                        </li>
                        <li class="p-2 border-bottom">
                            <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                        <p class="fw-bold mb-0">Danny Smith</p>
                                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">5 mins ago</p>
                                </div>
                            </a>
                        </li>
                        <li class="p-2 border-bottom">
                            <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                        <p class="fw-bold mb-0">Alex Steward</p>
                                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">Yesterday</p>
                                </div>
                            </a>
                        </li>
                        <li class="p-2 border-bottom">
                            <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                        <p class="fw-bold mb-0">Ashley Olsen</p>
                                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">Yesterday</p>
                                </div>
                            </a>
                        </li>
                        <li class="p-2 border-bottom">
                            <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                        <p class="fw-bold mb-0">Kate Moss</p>
                                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">Yesterday</p>
                                </div>
                            </a>
                        </li>
                        <li class="p-2 border-bottom">
                            <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                        <p class="fw-bold mb-0">Lara Croft</p>
                                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">Yesterday</p>
                                </div>
                            </a>
                        </li>
                        <li class="p-2">
                            <a href="#!" class="d-flex justify-content-between">
                                <div class="d-flex flex-row">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                        <p class="fw-bold mb-0">Brad Pitt</p>
                                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <p class="small text-muted mb-1">5 mins ago</p>
                                    <span class="text-muted float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div> -->


<?= $this->endSection(); ?>