<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Controller {
	
	public function index()
    {
        $idObj1 = $this->input->post('idObj1');
        $idObj2 = $this->input->post('idObj2');
        $this->load->model('model_echange');
        requestChange($idObj1,$idObj2);
        redirect('accueil');
    }

    public function changeAllow()
    {
        $idEchange = $this->input->post('idEchange');
        $this->load->model('model_echange');
        acceptChange($idEchange);
        redirect('accueil');
    }

    public function changeDenied()
    {
        $idEchange = $this->input->post('idEchange');
        $this->load->model('model_echange');
        denyChange($idEchange);
        redirect('accueil');
    }
}
?>