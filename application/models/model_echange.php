<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model_echange extends CI_Model {

    public function requestChange($obj1,$obj2)
    {
        $req="insert into echange values(null,%s,%s,now(),null)";
        $req=sprintf($req,$obj1,$obj2);
        $this->db->query($req);
    }

    public function acceptChange($idEchange) {
        $sql = "update echange set heureaccept = now()";
        $this->db->query($sql);
    }

    public function denyChange($idEchange) {
        $sql = "delete from echange where idEchange = %s";
        $sql = sprintf($sql, $this->db->escape($idEchange));
        $this->db->query($sql);
    }

    public function nbChangeDonne() {
        $sql = "select count(idechange) as nb from echange where heureAccept is not null";
        $this->db->query($sql);
        $resultset = $this->db->row_array();
        return $resultset['nb'];
    }
}
?>