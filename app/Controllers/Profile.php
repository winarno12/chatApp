<?php

namespace App\Controllers;

use App\Models\usersModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->userModel = new usersModel();
    }
    public function index()
    {
        // echo'hallo';
        $data = [
            'user' => $this->userModel->where('id_user', session()->get('id_user'))->first()
        ];
        return view('profile/profile', $data);
    }
}
