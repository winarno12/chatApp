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


<div class="container app">
    <div class="row app-one">
        <div class="col-sm-12 side">
            <div class="side-one">
                <div class="row heading">
                    <div class="col-sm-3 col-xs-3 heading-avatar">
                        <div class="heading-avatar-icon">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        </div>
                    </div>
                    <div class="col-sm-1 offset-6 col-xs-1 heading-compose  pull-right">
                        <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
                        <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="row searchBox">
                    <div class="col-sm-12 searchBox-inner">
                        <div class="form-group has-feedback">
                            <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div>
                </div>

                <div class="row sideBar">
                    <?php foreach ($users as $val) : ?>
                        <div class="row sideBar-body">
                            <div class="col-sm-3 col-xs-3 sideBar-avatar">
                                <div class="avatar-icon">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                </div>
                            </div>
                            <div class="col-sm-9 col-xs-9 sideBar-main">
                                <div class="row">
                                    <div class="col-sm-8 col-xs-8 sideBar-name">
                                        <span class="name-meta"><?= $val['username']; ?>
                                        </span>
                                        <p class="message-th"><?= $val['about']; ?></p>
                                    </div>
                                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                                        <?php if ($val['status'] == 1) : ?>
                                            <h7 class="text-success text-bold">Requests</h7>
                                        <?php else : ?>
                                            <input type="button" name="add_friend" value="ADD" id="<?= $val['id_user']; ?>" class="btn btn-success btn-sm add_friend" />
                                        <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>