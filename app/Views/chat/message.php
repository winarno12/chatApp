<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/chat.css">
<div class="container mt-5">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card chat-app">
                <div class="chat">
                    <div class="chat-header clearfix">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                    <img src="/img/user/<?=$user['profile']  ;?>" alt="avatar">
                                </a>
                                <div class="chat-about">
                                    <h6 class="m-b-0"><?=$user['username']  ;?></h6>
                                    <small>Last seen: 2 hours ago</small>
                                </div>
                            </div>
                            <div class="col-6 hidden-sm text-end">
                                <a href="/home" class="btn btn-outline-danger"><i class="fas fa-duotone fa-backward"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-auto">
                        <div class="card-body" style="max-height: 530px;">
                            <div class="chat-history">
                                <ul class="m-b-0">
                                    <li class="clearfix">
                                        <div class="message-data text-end">
                                            <span class="message-data-time">10:10 AM, Today</span>
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                        </div>
                                        <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Are we meeting today?</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:15 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus non cum doloremque recusandae accusantium laboriosam quaerat nesciunt perferendis consequuntur vel ut, quam veritatis fuga sit quasi facere impedit eligendi. Incidunt hic quae ullam accusamus suscipit ea commodi aliquam molestias consequuntur necessitatibus architecto, nemo illum, omnis sequi minima temporibus, maiores tempore voluptate dolorum eius? Consectetur porro dignissimos perspiciatis autem! Perferendis ipsum reprehenderit, quibusdam molestiae tempora officiis repellendus non, deleniti eligendi labore vel cupiditate corporis delectus obcaecati iure, suscipit blanditiis vero. Nihil soluta culpa harum corporis deserunt quod voluptatibus doloremque quisquam porro provident, tempore iusto, veniam qui ipsam? Quae odit nam sit!</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="chat-message clearfix">
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-send fa-2x"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter text here...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>