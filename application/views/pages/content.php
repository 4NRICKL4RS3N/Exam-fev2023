<?php
    $this->load->model('model_objet');

    $this->load->view('pages/header');

    foreach($categories as $category) {
        $data['objets'] = $this->model_Objet->getObjetByCat($category['idCategory'], $id);
        $data['nom_cat'] = $category['nom'];
        $this->load->view($content, $data);
    }

    $this->load->view('pages/footer');
?>