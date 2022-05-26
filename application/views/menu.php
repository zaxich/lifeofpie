<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
?>
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
			<?php
				foreach($menu as $p){
			?>
            <div class="row align-items-center mb-4">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="<?=base_url($p->menu_photo)?>" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h1 class="mb-4"><?=$p->menu_title?></h1>
                    <p class="mb-4"><?=$p->menu_description?></p>
                    <p class="mb-4" style="color: #E74548">Rp. <?=$p->menu_price?>k</p>
                </div>
            </div>
			<?php
				}
			?>
        </div>
    </div>