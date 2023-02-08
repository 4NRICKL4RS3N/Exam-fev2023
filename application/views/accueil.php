<!-- category loop -->
<div class="fashion_section">
    <div class="container">
        <h1 class="fashion_taital"><?php echo $nom_cat ?></h1>
        <div class="fashion_section_2">
            <div class="row">
                <?php foreach($objets as $objet) { ?>
                <div class="col-lg-4 col-sm-4">
                    <div class="box_main">
                        <h4 class="shirt_text"><?php echo $objet['nom'] ?></h4>
                        <p class="price_text">Estimation price <span style="color: #262626;"><?php echo $objet['prix'] ?> Ar</span></p>
                        <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                        <div class="btn_main">
                            <div class="buy_bt"><a href="<?php echo base_url('echange/selectobjet?id='.$objet['nom']) ?>">Exchange</a></div>
                            <div class="seemore_bt"><a href="#">Historique</a></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- category loop end -->