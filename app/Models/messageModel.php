<?php

namespace App\Models;

use CodeIgniter\Model;

class messageModel extends Model
{
    protected $table                = 'message';
    protected $id                   = 'id_message';
    protected $primaryKey           = 'id_message';
    protected $useTimestamps        = true;
    protected $allowedFields        = ['group_id', 'send_id', 'receive_id', 'message_body', 'message_subject'];

    public function getLastMessage($id_user, $id_friend)
    {
          $query= $this->db->query("SELECT  send_id,message_subject FROM message  WHERE  send_id=$id_user AND  receive_id=$id_friend  OR send_id=$id_friend AND  receive_id=$id_user ORDER BY id_message DESC LIMIT 1")->getRowArray();
          return $query;

    }
}
