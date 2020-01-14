<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message_model extends CI_Model
{

    public function insertMessage($user_id,$mobile,$message)
    {
             $data = array(
            'user_id' => $user_id,
            'mobile' => $mobile,
            'message' => $message
            );

        $this->db->insert('tblmessages', $data);
    }

    public function insertMessageGuest($name, $email,$mobile,$message)
    {
        $data = array(
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'message' => $message
            );
          
        $this->db->insert('tblmessages', $data);
    }

}
