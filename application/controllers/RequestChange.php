<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Echange extends CI_Controller {
    
    public function request()
    {
        $idObj1 = $this->input->get('idObj1');
        $idObj2 = $this->input->get('idObj2'); 
        $this->load->model('model_echange');
        $this->model_echange->requestChange($idObj1,$idObj2);
        redirect('accueil');
    }
	
}
?>