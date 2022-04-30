<?php

namespace App\Controllers;
use App\Models\friendModel;
use App\Controllers\Users;
use App\Models\usersModel;

class Chat extends BaseController
{
    public function __construct()
    {
        $this->friendModel = new friendModel();
        $this->userModel = new usersModel();
    }
    public function index()
    {
        $id_user = session()->get('id_user');
        $data['friends']=$this->friendModel->getFriends($id_user);
        // d($id_user);
        // dd($data);
        return view('chat/home',$data);
    }
    public function chat($uniq_id)
    {
        $data['user']=$this->userModel->first(['uniq_id'=>$uniq_id]);
        // dd($data);
        return view('chat/message',$data);
    }
}
