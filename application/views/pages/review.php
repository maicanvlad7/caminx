	<div class="wrapper">
		<!-- Listing Single v5 Home Area -->
		<div class="home10-mainslider">
			<div class="container-fluid p0">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-banner-wrapper home10">
							<div class="banner-style-one owl-theme owl-carousel">
								<div class="slide slide-one" style="background-image: url(<?= base_url('assets/images/background/bgHome.png'); ?>);height: 650px;"></div>
								<div class="slide slide-one" style="background-image: url(<?= base_url('assets/images/background/bgHome.png'); ?>);height: 650px;"></div>
								<div class="slide slide-one" style="background-image: url(<?= base_url('assets/images/background/bgHome.png'); ?>);height: 650px;"></div>
							</div>
							<div class="carousel-btn-block banner-carousel-btn">
								<span class="carousel-btn left-btn"><i class="flaticon-arrow-pointing-to-left left"></i></span>
								<span class="carousel-btn right-btn"><i class="flaticon-arrow-pointing-to-right right"></i></span>
							</div><!-- /.carousel-btn-block banner-carousel-btn -->
						</div><!-- /.main-banner-wrapper -->
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row listing_single_row style2">
					<div class="col-lg-8 col-xl-7">
						<div class="single_property_title listing_single_v1">
							<div class="media">
								<div class="media-body mt20">
									<h2 class="mt-0"><?= $currentDorm->name; ?></h2>
									<ul class="mb40 agency_profile_contact listing_single_v1">
										<li class="list-inline-item"><a href="#"><span class="flaticon-bookmark"></span>  <?= $currentDorm->city; ?></a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-pin"></span> <?= $currentDorm->university_name; ?></a></li>
									</ul>
									<div class="sspd_review listing_single_v1">
										<ul class="mb0">
											<li class="list-inline-item text-white">( <?= count($reviews); ?> review-uri )</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-xl-5">
						<div class="single_property_social_share listing_single_v1 mt80 mt0-lg">
							<div class="spss style2 listing_single_v1 mt30 float-left fn-lg">
								<ul class="mb0">
									<li class="list-inline-item icon"><a href="#"><span class="flaticon-upload"></span></a></li>
									<li class="list-inline-item"><a class="text-white" href="#">Share</a></li>
									<li class="list-inline-item icon"><a href="#"><span class="flaticon-love"></span></a></li>
									<li class="list-inline-item"><a class="text-white" href="#">Salveaza</a></li>
								</ul>
							</div>
							<div class="price listing_single_v1 mt25 float-right fn-lg">
								<a href="#leaveReview" class="btn btn-thm spr_btn">Lasa Reveiw</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Listing Single V1 -->
	<section class="our-agent-single pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="row">
						<div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
							<div class="listing_single_description mb60">
								<h4 class="mb30">Detalii</h4>
						    	<p class="first-para mb25"><?= $currentDorm->description; ?></p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details mb30">
								<div class="row">
									<div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
										<h4 class="mb30">Facilitati</h4>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-credit-card"></span></div>
											<div class="details">
												<div class="title">Magazine</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-bike"></span></div>
											<div class="details">
												<div class="title">Parc in apropiere</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-car"></span></div>
											<div class="details">
												<div class="title">Locuri de parcare</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-wifi"></span></div>
											<div class="details">
												<div class="title">Wi-Fi</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
<!--						<div class="col-lg-12 pl0 pl15-767">-->
<!--							<div class="custom_reivews mt30 mb30 row">-->
<!--								<div class="col-lg-12">-->
<!--									<h4 class="mb25">4.67 (14 reviews)</h4>-->
<!--								</div>-->
<!--								<div class="col-lg-2">-->
<!--									<div class="title">Overall Rating</div>-->
<!--								</div>-->
<!--								<div class="col-lg-4">-->
<!--									<div class="review_content">-->
<!--										<div class="review_line"></div>-->
<!--										<div class="review_point">4.7</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="col-lg-2">-->
<!--									<div class="title">Services</div>-->
<!--								</div>-->
<!--								<div class="col-lg-4">-->
<!--									<div class="review_content">-->
<!--										<div class="review_line"></div>-->
<!--										<div class="review_point">4.7</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="col-lg-2">-->
<!--									<div class="title">Hospitality</div>-->
<!--								</div>-->
<!--								<div class="col-lg-4">-->
<!--									<div class="review_content">-->
<!--										<div class="review_line style2"></div>-->
<!--										<div class="review_point">4.9</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="col-lg-2">-->
<!--									<div class="title">Pricing</div>-->
<!--								</div>-->
<!--								<div class="col-lg-4">-->
<!--									<div class="review_content">-->
<!--										<div class="review_line style2"></div>-->
<!--										<div class="review_point">4.9</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
						<div class="col-lg-12 pl0 pl15-767">
							<?php if( !count($reviews) && $this->session->userdata('id') ) {?>
								<div class="ui_kit_message_box">
									<div class="alert alart_style_two alert-dismissible fade show" role="alert">
										Nu exista inca un review. Lasa un review chiar acum!
									</div>
								</div>
							<?php }else{?>
							<div class="listing_single_reviews">
								<div class="product_single_content mb30">
									<?php foreach($reviews as $r) {?>
										<div class="mbp_first media mb30">
											<img src="<?= base_url('assets/images/comment.png');?>" class="mr-3" alt="reviewer1.png">
											<div class="media-body">
												<h4 class="sub_title mt-0"><?= $r->username; ?></h4>
												<div class="sspd_postdate fz14 mb20"><?= $r->data; ?></div>
												<p class="fz14 mt10"><?= $r->text; ?></p>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
							<?php } ?>
						</div>
						<?php if(!$userHasReview && $this->session->userdata('id')) {?>
						<div class="col-lg-12 pl0 pl15-767" id="leaveReview">
							<div class="single_page_review_form p30-lg mb30-991">
								<div class="wrapper">
									<h4>Lasa un Review</h4>
									<form class="review_form" method="POST" action="<?= base_url('review/add/'.$currentDorm->id); ?>">
										<div class="form-group">
										    <textarea class="form-control" rows="7" placeholder="Cel mai tare camin" name="text"></textarea>
										</div>
										<button type="submit" class="btn btn-thm">Trimite Review</button>
									</form>
								</div>
							</div>
						</div>
						<?php } else if(!$this->session->userdata('id')) {?>
							<div class="ui_kit_message_box">
								<div class="alert alart_style_three alert-dismissible fade show" role="alert">
									Ca sa te poti lasa un comentariu trebuie sa te autentifici.
								</div>
							</div>
						<?php }else {?>
							<div class="ui_kit_message_box">
								<div class="alert alart_style_one alert-dismissible fade show" role="alert">
									Ai lasat deja un review. Il poti edita din dashboard sau poti lasa review la alt camin.
								</div>
							</div>
						<?php }?>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="listing_single_sidebar">
						<div class="lss_contact_location ">
							<h4 class="mb25">Locatie</h4>
							<div class="sidebar_map mb30">
								<div class="lss_map h200" id="map"></div>
							</div>
							<ul class="contact_list list-unstyled mb15">
								<li class="df"><span class="flaticon-pin mr15"></span><a>Bulevardul Iuliu Maniu 1-3, București 061071<br></a></li>
								<li><span class="flaticon-phone mr15"></span><a href="#">-</a></li>
								<li><span class="flaticon-link mr15"></span><a href="#">https://upb.ro/camine/</a></li>
							</ul>
						</div>
						<div class="sidebar_author_widget">
							<h4 class="title mb25">Autor</h4>
							<div class="media">
								<img class="mr-3" src="<?= base_url('assets/images/header-logo2.svg'); ?>" alt="author.png">
								<div class="media-body">
							    	<h5 class="mt15 mb0">Camin X</h5>
							    	<p class="mb0">De la studenti, pentru studenti.</p>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibWFpY2FudmxhZDciLCJhIjoiY2t1ZTR6ZWJnMGF2ajJucnQ2b3J2ejFsOCJ9.s0EYCrSTlW431Tuwgyk25Q';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
			center: [26.0552,44.4340],
			zoom: 13,
        });
	</script>

