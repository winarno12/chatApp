<?php

namespace App\Controllers;

use App\Models\usersModel;

class Users extends BaseController
{
    public function __construct()
    {
        $this->userModel = new usersModel();
    }
    public function index()
    {
        $id_user = session()->get('id_user');
        // dd($id_user);
        $data['users']      = $this->userModel->getAllUser($id_user);
        // dd($data);
        return view('users/list_users', $data);
    }

    public function notif(){
        $id_user = session()->get('id_user');
        $data['users']      = $this->userModel->getRequestFriend($id_user);
        // dd($data);
        return view('users/users_request', $data);
    }
}
