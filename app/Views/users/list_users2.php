<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<?php

use App\Models\friendModel;

$this->friendModel = new friendModel();
?>


<script>
    base_url = '<?php echo base_url(); ?>';
    mappia = "	<?php
                    $site_url = 'home';
                    echo site_url($site_url);
                    ?>";



    $(document).on('click', '.add_friend', function() {
        var friend_id = $(this).attr("id");
        console.log(friend_id);
        $.ajax({
            url: "<?= base_url(); ?>/home/addFriend",
            method: "POST",
            data: {
                "friend_id": friend_id
            },
            success: function(msg) {
                window.location.replace(mappia);
            }
        });
    });
</script>

<div class="contaniner">
    <div class="row ">
        <div class="col-12">
            <div class="page">
                <div class="bg-success p-2 " style="height: 100px;">
                    <div class="row justify-content-center mt-5">
                        <div class="col-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                                        <div class="toopbar">
                                            <h5 class="text-title">User List</h5>
                                            <a href="" class="back">
                                                <i class="fas fa-angle-double-left"></i>
                                                Back
                                            </a>
                                            <div class="mt-1">
                                                <div class="row justify-content-end">
                                                    <div class="col-4 text-end">
                                                        <div class="input-group rounded">
                                                            <input type="search" class="form-control rounded border-primary" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table manage-candidates-top mb-0">
                                            <tbody>
                                                <?php foreach ($users as $val) : ?>

                                                    <tr class="candidates-list">
                                                        <td class="title">
                                                            <div class="thumb">
                                                                <img class="img-fluid" src="/img/user/<?= $val['profile']; ?>" alt="">
                                                            </div>
                                                            <div class="candidate-list-details">
                                                                <div class="candidate-list-info">
                                                                    <div class="candidate-list-title">
                                                                        <h5 class="mb-0"><a href="#" class="decoration none"><?= $val['username']; ?></a></h5>
                                                                    </div>
                                                                    <div class="candidate-list-option">
                                                                        <ul class="list-unstyled">
                                                                            <li><i class="fas fa-filter pr-1"></i><?= $val['about']; ?></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <?php if (!$this->friendModel->getStatus($val['id_user'])) : ?>
                                                                <input type="button" name="add_friend" value="ADD" id="<?= $val['id_user']; ?>" class="btn btn-success btn-sm add_friend" />
                                                            <?php else : ?>
                                                                <h7 class="text-success text-bold">Requests</h7>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>