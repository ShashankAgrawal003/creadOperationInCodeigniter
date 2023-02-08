<?php
class User_model extends CI_model{
    function create($formArray){    // insert
        $this->db->insert('users',$formArray); // insert into users
    }
    function all(){                 // show
        return $users=$this->db->get('users')->result_array(); // select * from users 

    }
    function getUser($userId){        // edit
        $this->db->where('user_id',$userId);
        return $user=$this->db->get('users')->row_array();   // single array req therefore only one
    }
    function updateUser($userId,$formArray){    // update
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray); //update users set name=?where userID=? 

    }
    function deleteUser($userId){    // delete
        $this->db->where('user_id',$userId);
        $this->db->delete('users');
    }
}

?>
