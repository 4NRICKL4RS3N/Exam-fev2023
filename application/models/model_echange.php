<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Echange extends CI_Model {
    
    public function requestChange($obj1,$obj2)
    {
        $req="insert into echange values(null,%s,%s,now(),null,curdate())";
        $req=sprintf($req,$obj1,$obj2);
        return $this->db->query($req);
    }

    public function acceptChange($idEchange) {
        $sql = "update echange set heureaccept = now()";
        return $this->db->query($sql);
    }

    public function denyChange($idEchange) {
        $sql = "delete from echange where idEchange = %s";
        $sql = sprintf($sql, $this->db->escape($idEchange));
        return $this->db->query($sql);
    }
}
?>