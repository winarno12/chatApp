<?php

namespace App\Models;

use CodeIgniter\Model;

class friendModel extends Model
{
    protected $table                = 'friends';
    protected $id                   = 'id_friends';
    protected $primaryKey           = 'id_friends';
    protected $useTimestamps        = true;
    protected $allowedFields        = ['id_user', 'id_friend', 'status'];

    public function getFriends($id_user)
    {
        return $this->db->query("SELECT * FROM `Friends` AS F , `Users` AS U WHERE CASE WHEN F.id_user =$id_user  THEN F.id_friend = U.id_user WHEN
        F.id_friend =$id_user THEN F.id_user = U.id_user  END AND F.Status = 2 ")->getResultArray();
    }
}
