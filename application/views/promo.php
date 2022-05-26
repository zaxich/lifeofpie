<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );
?>
    <div class="container py-5">
		<div class="row">
			<?php
				foreach($promo as $p){
					$date = strtotime($p->promo_until_date);
			?>
			<div class="col-md-12 mb-3">
				<div class="position-relative">
					<img class="img-fluid w-100" src="<?=base_url($p->promo_img)?>" style="max-height: 400px" alt="">
					<div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
						style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
						<h4 class="font-weight-bold mb-n1"><?=date('j', $date)?></h4>
						<small class="text-white text-uppercase"><?=date('M', $date)?></small>
					</div>
				</div>
				<div class="bg-secondary mb-3" style="padding: 30px;">
					<h4 class="font-weight-bold mb-3"><?=$p->promo_title?></h4>
					<p><?=$p->promo_description?></p>
				</div>
			</div>
			
			<?php
				}
			?>
		</div>
    </div>