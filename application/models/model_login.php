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
        $test;
        return $result;
    }

}
?>