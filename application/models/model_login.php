<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Login extends CI_Model {

    public function getUsers() {
        $sql = "select * from users";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getUsersById($idUser) {
        $sql = "select * from users where idUser = %s";
        $sql = sprintf($sql, $this->db->escape($idUser));
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }

    public function checkLogin($mail , $mdp)
    {
        $listUser = getUsers();
        for ($i=0; $i < count($listUser); $i++) { 
            if ($list[$i]['mdp'] == $mdp && $listUser[$i]['mail'] == $mail)  
            {
                return true;
            }
        }
        return false;
    }
}
?>