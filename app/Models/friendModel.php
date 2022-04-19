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
}
