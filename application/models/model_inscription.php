<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model_inscription extends CI_Model {

    public function checkInput()

    public function addUser($nom, $mail, $mdp) {
        $sql = "insert into users values(null, '%s', '%s', '%s', '0')";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($mail), $this->db->escape($mdp));
        $query = $this->db->query($sql);
        return $query->affected_rows();
    }

}

?>