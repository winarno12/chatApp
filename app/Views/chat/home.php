<?php

use App\Models\messageModel;

$this->messageModel = new messageModel();
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
                                    <div class="col-7 text-end">
                                        <a href="./notif" class="btn btn-outline-warning"><i class="fas fa-bell"></i></a>
                                        <a href="./users" class="btn btn-outline-info"><i class="fas fa-users"></i></a>
                                        <a href="" class="btn btn-outline-success"><i class="fas fa-user"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-auto">
                            <div class="card-body">
                                <?php if ($friends == null) : ?>
                                    <h5 class="text-danger">You Not Have Friend</h5>
                                <?php else : ?>
                                    <ul class="list-unstyled mb-0">
                                        <?php foreach ($friends as $val) : ?>
                                            <li class="p-2 border-bottom ">
                                                <a href="<?=base_url('chat');?>/<?=$val['uniq_id']  ;?>" class="d-flex justify-content-between text-decoration-none">
                                                    <div class="d-flex flex-row">
                                                        <img src="./img/user/<?= $val['profile']; ?>" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                                        <div class="pt-1">
                                                            <p class="fw-bold mb-0"><?= $val['username']; ?></p>
                                                            <?php
                                                            $message = $this->messageModel->getLastMessage(session()->get('id_user'), $val['id_user']);
                                                            ?>
                                                            <?php if ($message['send_id'] == session()->get('id_user')) : ?>
                                                                <p class="small text-muted"><span class="text-bold">You:</span> <?= $message['message_subject']; ?></p>
                                                            <?php else : ?>
                                                                <p class="small text-muted"><?= $message['message_subject']; ?></p>
                                                            <?php endif; ?>

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
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>