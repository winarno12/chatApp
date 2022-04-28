<?php

namespace App\Controllers;
use App\Models\friendModel;

class Chat extends BaseController
{
    public function __construct()
    {
        $this->friendModel = new friendModel();
    }
    public function index()
    {
        $id_user = session()->get('id_user');
        $data['friends']=$this->friendModel->getFriends($id_user);
        // d($id_user);
        // dd($data);
        return view('chat/home',$data);
    }
    public function chat()
    {
        return view('chat/message');
    }
}
