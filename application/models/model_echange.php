<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Echange extends CI_Model {
    
    public function requestChange($obj1,$obj2)
    {
        $req="insert into echange values(null,%s,%s,now(),null,curdate())";
        $req=sprintf($req,$obj1,$obj2);
        $this->db->query($req);
    }

}
?>