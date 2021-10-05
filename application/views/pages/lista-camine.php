<div class="wrapper">
	<!-- Listing Search Option -->
	<section class="bgc-f4 pt0-767">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 justify-content-center text-center">
					<h2 class="mt-3">Lista de camine pentru <?= $univ->name; ?></h2>
				</div>
			</div>
		</div>
	</section>

	<!-- Listing Grid View -->
	<section class="our-listing pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<?php if(!count($dorms)) {?>
							<div class="ui_kit_message_box" style="margin: 0 auto!important;">
								<div class="alert alart_style_three alert-dismissible fade show" role="alert">
									Momentan nu exista camine adaugate pentru aceasta facultate.
								</div>
							</div>

							<div class="col-md-12 mt-3 text-center" style="margin:0 auto!important;">
								<img src="<?= base_url('assets/images/caminNotFound.svg');?>" class="img-fluid" alt="Camine nu au fost gasite CaminX">
							</div>
						<?php } else {?>
							<?php foreach($dorms as $d) {?>
								<div class="col-md-6 col-lg-4">
									<div class="feat_property">
										<div class="thumb">
											<img class="img-whp" src="<?= base_url('assets/images/graduation-hat.png'); ?>" alt="Camin din CaminX">
											<div class="thmb_cntnt">
												<ul class="tag2 mb0">
													<li class="list-inline-item"><a href="#">Adaugat Recent</a></li>
												</ul>
											</div>
										</div>
										<div class="details">
											<div class="tc_content">
												<div class="badge_icon"><a href="#"><img src="<?= base_url('assets/images/college.png'); ?>" alt="agent1.svg"></a></div>
												<h4><?= $d->name; ?></h4>
												<p><?= $d->description ? $d->description : 'Acest camin nu are descriere' ?></p>
												<ul class="prop_details mb0">
													<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span>  <?= $univ->city; ?> </a></li>
												</ul>
											</div>
											<div class="fp_footer">
												<ul class="fp_meta float-left mb0">
													<li class="list-inline-item"><a href="#"><img src="<?= base_url('assets/images/rating.png'); ?>" alt="icon3.svg"></a></li>
													<li class="list-inline-item"><a href="<?= base_url('camin/view/'.str_replace(' ', '-', $d->name)); ?>" class="btn btn-primary text-white">Vezi review-uri</a></li>
												</ul>
												<ul class="fp_meta float-right mb0">
													<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
													<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							<?php }?>
						<?php }?>
					</div>
				</div>
				<?php if(count($dorms)) {?>
				<div class="col-lg-12">
					<div class="mbp_pagination mt10">
						<div class="new_line_pagination text-center">
							<p>Au fost gasite <?= count($dorms); ?> rezultate</p>
							<div class="pagination_line"></div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>

