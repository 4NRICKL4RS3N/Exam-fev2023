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
            $result = $this->db->row_array();
            return $result;
        }

        public function getCategories() {
            $sql="select * from category";
            $query = $this->db->query($sql);
            $result = $this->db->result_array();
            return $result;
        }

        public function searchObjet($motcle, $cat, $idUser) {
            $sql = "select * from objet where nom like '%%s%'";
            if ($cat != null) {
                $sql = $sql." and idcategory = %s ";
                $sql = sprintf($this->db->escape($cat));
            }
            $sql = $sql." and idUser not %s ";
            $sql = sprintf($this->db->escape($motcle, $idUser));
            $this->db->query($sql);
            return $this->db->result_array();
        }
    }
?>