<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<!-- link -->
<link rel="stylesheet" href="./assets/mystyle/css/list_user.css">
<!-- link -->
<!--script  -->
<script>
    $(document).on('click', '.add_friend', function() {
        var friend_id = $(this).attr("id");
        console.log(friend_id);
        $.ajax({
            url: "<?= base_url(); ?>/Friends/addFriend",
            method: "POST",
            data: {
                "friend_id": friend_id
            },
            success: function(msg) {
                location.reload();
            }
        });
    });
</script>

<!--script  -->
<div class="row">
    <div class="col-12">
        <div class="bg-success" style="height: 100px;">
            <div class="row justify-content-center">
                <div class="col-md-7 mt-5">
                    <div class="card">
                        <div class="card-header bg-white" >
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
                                                <div class="col-md-2 col-sm-2 text-end">
                                                    <?php if ($val['status'] == 1) : ?>
                                                        <h7 class="text-success text-bold">Requests</h7>
                                                    <?php else : ?>
                                                        <input type="button" name="add_friend" value="ADD" id="<?= $val['id_user']; ?>" class="btn btn-success btn-sm add_friend" />
                                                    <?php endif; ?>
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