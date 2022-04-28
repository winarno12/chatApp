<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="./assets/mystyle/css/list_user.css">
<script>
    base_url = '<?php echo base_url(); ?>';
    mappia = "	<?php
                    $site_url = 'notif';
                    echo site_url($site_url);
                    ?>";



    $(document).on('click', '.accept_friend', function() {
        var id_friends = $(this).attr("id");
        console.log(id_friends);
        $.ajax({
            url: "<?= base_url(); ?>/Friends/acceptFrineds",
            method: "POST",
            data: {
                "id_friends": id_friends
            },
            success: function(msg) {
                window.location.replace(mappia);
            }
        });
    });
    $(document).on('click', '.reject_friend', function() {
        var id_friends = $(this).attr("id");
        console.log(id_friends);
        $.ajax({
            url: "<?= base_url(); ?>/Friends/rejectFrineds",
            method: "POST",
            data: {
                "id_friends": id_friends
            },
            success: function(msg) {
                window.location.replace(mappia);
            }
        });
    });
</script>
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
                                    <div class="col-3 offset-4">
                                        <a href="./home" class="btn btn-light btn-sm mx-3"><i class="fas fa-duotone fa-backward fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-auto">
                            <div class="card-body px-3" style="max-height: 530px;">
                                <div class="people-nearby">
                                    <div class="nearby-user">
                                        <?php foreach ($users as $val) : ?>
                                            <div class="row">
                                                <div class="col-md-1 col-sm-1">
                                                    <img src="./img/user/<?= $val['profile']; ?>" alt="user" class="profile-photo-lg">
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <h5><?= $val['username']; ?></h5>
                                                    <p class="text-muted text-small"><?= $val['about']; ?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 text-end">
                                                    <input type="button" name="reject_friend" value="REJECT" id="<?= $val['id_friends']; ?>" class="btn btn-outline-danger btn-sm reject_friend"  data-mdb-ripple-color="dark"/>
                                                    <input type="button" name="acept_friend" value="ACCEPT" id="<?= $val['id_friends']; ?>" class="btn btn-success btn-sm accept_friend"/>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
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