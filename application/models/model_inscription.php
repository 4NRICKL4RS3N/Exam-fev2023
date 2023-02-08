<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model_inscription extends CI_Model {

    public function addUser($nom, $mail, $mdp) {
        $sql = "insert into users values(null, %s, %s, %s, '0')";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($mail), $this->db->escape($mdp));
        $query = $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function nbInscription() {
        $sql = "select count(iduser) as nb from users";
        $this->db->query($sql);
        $resultset = $this->db->row_array();
        return $resultset['nb'];
    }

}
?>