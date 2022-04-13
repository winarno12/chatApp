<?php

namespace App\Controllers;

use App\Models\usersModel;
use App\Models\friendModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->userModel = new usersModel();
        $this->friendModel = new friendModel();
        helper('cookie');
    }
    public function index()
    {
        $id_user = session()->get('id_user');
        // dd($id_user);
        $data['users']      = $this->userModel->getAllUser($id_user);
        // dd($data);
        return view('home/list_users', $data);
    }
    public function chat(){
        return view('home/chat');
    }
    public function addFriend()
    {
        $this->friendModel->save(
            $data = [
                'user_one' => session()->get('id_user'),
                'user_two' => $this->request->getVar('friend_id'),
                'status' => 1
            ]
        );
    }
}
