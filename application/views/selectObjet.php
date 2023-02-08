<?php $this->load->view('pages/header'); ?>

<?php foreach ($objets as $objet) { ?>
    <div class="col-lg-4 col-sm-4">
        <div class="box_main">
            <h4 class="shirt_text"><?php echo $objet['nom'] ?></h4>
            <p class="price_text">Estimation price <span style="color: #262626;"><?php echo $objet['prix'] ?> Ar</span></p>
            <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
            <div class="btn_main">
                <div class="buy_bt"><a href="#">Exchange</a></div>
                <div class="seemore_bt"><a href="#">Historique</a></div>
            </div>
        </div>
    </div>
<?php } ?>

<?php $this->load->view('pages/footer');