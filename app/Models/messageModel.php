<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table                = 'users';
    protected $id                   = 'id_user';
    protected $primaryKey           = 'id_user';
    protected $useTimestamps        = true;
    protected $allowedFields        = ['email', 'password', 'username', 'uniq_id', 'img', 'about'];

    public function getAllUser($id_user)
    {
        return $this->db->query("SELECT a.profile,a.id_user,b.status IS NOT NULL AS friends,a.about,a.username,b.status   FROM users a LEFT JOIN friends b ON a.id_user IN (b.id_user,b.id_friend) AND $id_user IN (b.id_user,b.id_friend) WHERE  (b.id_friends IS NULL OR b.status <> 2) AND a.id_user <> $id_user ORDER BY a.username;")->getResultArray();
    }
    public function getRequestFriend($id_user)
    {
        return $this->db->query("SELECT b.id_friends,a.id_user,a.username,a.profile,a.about,b.status FROM friends b ,users a WHERE  b.id_friend=$id_user AND  b.id_user=a.id_user AND b.status=1  ORDER BY b.created_at;")->getResultArray();
    }

    
}
