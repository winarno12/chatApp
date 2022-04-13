<?php

namespace App\Controllers;

use App\Models\usersModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->userModel = new usersModel();
        helper('cookie');
    }
    public function index()
    {
        d(get_cookie('login'));
        dd(session()->get('id_user'));
        exit;
        echo 'oke';
        print_r(session()->get());
        // echo'hallo';
        $data = [
            'user' => $this->userModel->where('id_user', session()->get('id_user'))->first()
        ];
        // return view('profile/profile', $data);
    }
}
