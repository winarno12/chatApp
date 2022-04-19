<?php

namespace App\Controllers;
use App\Models\friendModel;

class Friends extends BaseController{
    public function __construct()
    {
        $this->friendModel = new friendModel();
    }
    public function addFriend()
    {
        $this->friendModel->save(
            $data = [
                'id_user' => session()->get('id_user'),
                'id_friend' => $this->request->getVar('friend_id'),
                'status' => 1
            ]
        );
    }

    public function acceptFrineds(){
        $this->friendModel->save(
            $data = [
                'id_friends' => $this->request->getVar('id_friends'),
                'status' => 2
            ]
        );
    }
}