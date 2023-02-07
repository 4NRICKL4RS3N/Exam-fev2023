<?php
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model_Objet extends CI_Model {

        public function getAllObjet()
        {
            $sql="select * from objet";
            $query = $this->db->query($sql);
            $result = $query->result_array();
            return $result;
        }
    }
?>