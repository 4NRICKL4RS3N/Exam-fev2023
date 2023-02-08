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

        public function getObjetsById($mail)
        {
            $this->load->model('model_user');
            $id = $this->model_user->getIdByMail($mail);
            $req="select * from objet where idUser = %s";
            $req = sprintf($req , $this->db->escape($id));
            $query = $this->db->query($req);
            $result = $this->db->result_array();
            return $result;
        }

        public function getCategories() {
            $sql="select * from category";
            $query = $this->db->query($sql);
            $result = $this->db->result_array();
            return $result;
        }
    }
?>