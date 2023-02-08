<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model_User extends CI_Model {

    public function getObjetByUser($idUser) {
        $sql = "select * from objet where idUser = %s";
        $sql = sprintf($sql, $this->db->escape($idUser));
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getIdByMail($mail)
    {
        $req="select idUser from users where mail=%s";
        $req=sprintf($req,$this->db->escape($mail));
        $query = $this->db->query($req);
        $result = $query->row_array();
        return $result;
    }
} 
?>