<?php
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model_Objet extends CI_Model {

        public function getAllObjet($idUser)
        {
            $sql = "select * from objet where idUser != %s";
            $sql = sprintf($this->db->escape($idUser));
            $query = $this->db->query($sql);
            $result = $this->db->result_array();
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
            $result = $query->result_array();
            return $result;
        }

        public function getObjetByCat($idCat, $idUser) {
            $sql = "select * from objet where idcategory = %s and idUser != %s";
            $sql = sprintf($sql, $this->db->escape($idCat), $this->db->escape($idUser));
            $query = $this->db->query($sql);
            return $query->result_array();
        }

        public function searchObjet($motcle, $cat, $idUser) {
            $sql = "select * from objet where nom like '%%s%'";
            if ($cat != null) {
                $sql = $sql." and idcategory = %s ";
                $sql = sprintf($this->db->escape($cat));
            }
            $sql = $sql." and idUser != %s ";
            $sql = sprintf($this->db->escape($motcle),$this->db->escape($idUser));
            $this->db->query($sql);
            return $this->db->result_array();
        }

        public function addHistorique($idUser, $idObjet, $date) {
            $sql = "insert into historique values (null, %s, %s, %s)";
            $sql = sprintf($this->db->escape($idUser), $this->db->escape($idObjet), $this->db->escape($date));
            $query = $this->db->query($sql);
            return $query->affected_rows();
        }

        public function historicObjet($idObjet) {
            $sql = "select * from historique where idobjet = %s";
            $sql = sprintf($this->db->escape($idObjet));
            $query = $this->db->query($sql);
            return $query->result_array();
        }
    }
?>