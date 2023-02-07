<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model_Objet extends CI_Model {

    public function getObjetByUser($idUser) {
        $sql = "select * from objet where idUser = %s";
        $sql = sprintf($sql, $this->db->escape($idUser));
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

} 

?>