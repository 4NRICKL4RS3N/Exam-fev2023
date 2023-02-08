<?php $this->load->view('pages/header'); ?>
<div class="fashion_section">
    <div class="container">
        <h1 class="fashion_taital">Echanger avec quel objet</h1>
        <div class="fashion_section_2">
            <div class="row">
                <?php foreach ($objets as $objet) { ?>
                    <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                            <h4 class="shirt_text"><?php echo $objet['nom'] ?></h4>
                            <p class="price_text">Estimation price <span style="color: #262626;"><?php echo $objet['prix'] ?> Ar</span></p>
                            <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                            <div class="btn_main">
                            <?php echo  base_url('echange/request?idObj1='.$objet1.'&idObj2='.$objet['idObjet']) ?>
                                <div class="buy_bt"><a href="<?php base_url('requestchange?idObj1='.$objet1.'&idObj2='.$objet['idObjet']) ?>">Exchange</a></div>
                                <div class="seemore_bt"><a href="#">Historique</a></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('pages/footer');
