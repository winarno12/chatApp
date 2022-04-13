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
        return $this->db->query("SELECT a.id_user,b.status IS NOT NULL AS friends,a.about,a.username,b.status   FROM users a LEFT JOIN friends b ON a.id_user IN (b.user_one,b.user_two) AND $id_user IN (b.user_one) WHERE  (b.id_friends IS NULL OR b.status <> 2) AND a.id_user <> $id_user ORDER BY a.username;")->getResultArray();
    }
}
