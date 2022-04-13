<?php

namespace App\Models;

use CodeIgniter\Model;

class friendModel extends Model
{
    protected $table                = 'friends';
    protected $id                   = 'id_friends';
    protected $primaryKey           = 'id_friends';
    protected $useTimestamps        = true;
    protected $allowedFields        = ['user_one', 'user_two', 'status'];


    public function getStatus($id_user)
    {
        // d($id_user,$id_user2);exit;
        $query=$this->db->query("SELECT F.status FROM `friends` AS F , `users` AS U WHERE F.user_one = $id_user AND F.user_two = U.id_user OR F.user_two = $id_user AND F.user_one = U.id_user  AND F.status = $id_user; ;")->getResultArray();
        return $query;
    }
}
