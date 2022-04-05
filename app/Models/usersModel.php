<?php 

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{
    protected $table                = 'users';
    protected $id                   = 'id_user';
    protected $primaryKey           = 'id_user';
    protected $useTimestamps        = true;
    protected $allowedFields        = ['email', 'password','username','uniq_id','img','about'];

}
