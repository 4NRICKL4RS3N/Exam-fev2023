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
	
    public function selectObjet() {
        $this->load->model('model_Objet');
        $data['objets'] = $this->model_Objet->getObjetsById($_SESSION['id']);
        $data['objet1'] = $this->input->get('id');
        $this->load->view('selectObjet', $data);
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