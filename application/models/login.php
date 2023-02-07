<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Login extends CI_Model {

    public function getUsers() {
        $sql = "select * from users";
        $resultset = $this->db->query($sql);
        $result = array();
        foreach ($resultset->result_array() as $row) {
            $result[] = $row;
        }
        return $result;
    }

}


?>