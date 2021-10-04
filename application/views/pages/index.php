<div class="wrapper">
	<!-- Home Design -->
	<section class="home-one home1-overlay bg-img1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content home1">
						<div class="home-text text-center">
							<h2 class="fz50">Despre ce camin vrei sa citesti?</h2>
							<p class="fz18 color-white">Alege o facultate iar noi iti vom arata o lista de camine in care poti sta si review-uri despre ele.</p>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-5 col-xl-5">
								<div class="home_adv_srch_opt text-center">
									<div class="wrapper">
										<div class="home_adv_srch_form">
											<form class="bgc-white bgct-767 pl30 pt10 pl0-767">
												<div class="form-row align-items-center">
												    <div class="col-auto home_form_input mb20-xsd">
												      	<label class="sr-only">Camin</label>
												      	<div class="input-group style1 mb-2 mb0-767">
												        	<div class="input-group-prepend">
												        		<div class="input-group-text pl0 pb0-767">Camin</div>
												        	</div>
															<div class="select-wrap style1-dropdown">
														    	<select name="lang" class="form-control js-searchBox">
																	<?php foreach($allDorms as $d) {?>
																		<option value="<?= $d->id; ?>>"><?= $d->name; ?></option>
																	<?php } ?>
														    	</select>
														    </div>
												      	</div>
												    </div>
												    <div class="col-auto home_form_input2">
												    	<button type="submit" class="btn search-btn mb-2"><span class="flaticon-loupe"></span></button>
												    </div>
												</div>
											</form>
										</div>
									</div>
									<div class="home_mobile_slider home_custom_list dn db-767">
										<div class="item">
											<div class="icon_home1">
												<div class="icon"><span class="flaticon-cutlery"></span></div>
												<p>Restaurant</p>
											</div>
										</div>
										<div class="item">
											<div class="icon_home1">
												<div class="icon"><span class="flaticon-shopping-bag"></span></div>
												<p>Shopping</p>
											</div>
										</div>
										<div class="item">
											<div class="icon_home1">
												<div class="icon"><span class="flaticon-tent"></span></div>
												<p>Outdoor Activities</p>
											</div>
										</div>
										<div class="item">
											<div class="icon_home1">
												<div class="icon"><span class="flaticon-desk-bell"></span></div>
												<p>Hotels</p>
											</div>
										</div>
										<div class="item">
											<div class="icon_home1">
												<div class="icon"><span class="flaticon-mirror"></span></div>
												<p>Beautu & Spa</p>
											</div>
										</div>
										<div class="item">
											<div class="icon_home1">
												<div class="icon"><span class="flaticon-brake"></span></div>
												<p>Automotive</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property pt0 border-bottom">
		<div class="container p0">
			<div class="feature-content dn-767">
				<div class="row justify-content-center mt-80 mb45">
					<div class="col-lg-4 text-center">
						<p><em class="text-white">Cele mai "active" camine din platforma</em></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-4 col-xl-2">
						<div class="icon-box text-center">
							<div class="icon"><span class="flaticon-pin"></span></div>
							<div class="content-details">
								<div class="title">Camin P22</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-xl-2">
						<div class="icon-box text-center">
							<div class="icon"><span class="flaticon-pin"></span></div>
							<div class="content-details">
								<div class="title">Camin P12</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-xl-2">
						<div class="icon-box text-center">
							<div class="icon"><span class="flaticon-pin"></span></div>
							<div class="content-details">
								<div class="title">Camin Moxa 1</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-xl-2">
						<div class="icon-box text-center">
							<div class="icon"><span class="flaticon-pin"></span></div>
							<div class="content-details">
								<div class="title">Camin Leu A</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-xl-2">
						<div class="icon-box text-center">
							<div class="icon"><span class="flaticon-pin"></span></div>
							<div class="content-details">
								<div class="title">Camin Leu C</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-xl-2">
						<div class="icon-box text-center">
							<div class="icon"><span class="flaticon-pin"></span></div>
							<div class="content-details">
								<div class="title">Camin P6</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt100-767">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="main-title text-center">
						<h2>Cele mai populare univeristati</h2>
						<p>Descopera universitatile ale caror camine au cele mai multe review-uri</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="popular_listing_slider1">
						<?php foreach($topUniversities as $tu) {?>
							<div class="item">
								<div class="feat_property">
									<div class="thumb">
										<img class="img-whp" src="<?= base_url('assets/images/universities/').$tu->bg; ?>" alt="fp1.jpg">
										<div class="thmb_cntnt">
<!--											<ul class="tag mb0">-->
<!--												<li class="list-inline-item"><a href="#">$$$$</a></li>-->
<!--												<li class="list-inline-item"><a href="#">Open</a></li>-->
<!--											</ul>-->
											<ul class="tag2 mb0">
												<li class="list-inline-item"><a href="#">Top 3</a></li>
											</ul>
											<ul class="listing_reviews">
												<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
												<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
												<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
												<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
												<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
												<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
											</ul>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<h4><?= $tu->name; ?></h4>
											<p><?= $tu->city; ?></p>
<!--											<ul class="prop_details mb0">-->
<!--												<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>-->
<!--												<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>-->
<!--											</ul>-->
										</div>
										<div class="fp_footer">
											<ul class="fp_meta float-left mb0">
												<li class="list-inline-item"><a href="#" class="btn btn-danger btn-sm" style="color:white;">Website</a></li>
											</ul>
											<ul class="fp_meta float-right mb0">
												<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
												<li class="list-inline-item" title="Lasa Review"><a class="icon" href="#"><span class="flaticon-comment"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- How It Works -->
	<section id="why-chose" class="whychose_us bgc-f7 pb70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Cum functioneaza CaminX?</h2>
						<p>Vrem sa ajutam studentii din Romania sa aleaga caminul potrivit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-find-location"></span>
						</div>
						<div class="details">
							<h4>Gaseste Caminul</h4>
							<p>Foloseste filtrele disponibile pe site, selecteaza o facultate si selecteaza caminul despre care vrei sa afli mai multe.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-comment"></span>
						</div>
						<div class="details">
							<h4>Citeste un Review</h4>
							<p>Alege caminul dorit si vezi ce parere au alti studenti despre experienta din acel camin.<br></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-date"></span>
						</div>
						<div class="details">
							<h4>Lasa un Review</h4>
							<p>Contribuie si tu la dezvoltarea comunitatii si ajuta alti studenti sa se bucuresti de o "studentie" frumoasa.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section class="our-testimonials">
		<div class="container ovh max1800">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Testimoniale Utilizatori</h2>
						<p>Review-uri la aplicatia de review-uri. Ironic...</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="testimonial_slider_home1">
						<div class="item">
							<div class="testimonial_post text-center">
								<div class="thumb">
									<img src="<?= base_url('assets/images/icons/review.png'); ?>" alt="review.png">
									<h4 class="title">Alison Dawn</h4>
									<div class="client-postn">WordPress Developer</div>
								</div>
								<div class="details">
									<div class="icon"><span>“</span></div>
									<p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_post text-center">
								<div class="thumb">
									<img src="<?= base_url('assets/images/icons/review.png'); ?>" alt="review.png">
									<h4 class="title">Albert Cole</h4>
									<div class="client-postn">Designer</div>
								</div>
								<div class="details">
									<div class="icon"><span>“</span></div>
									<p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_post text-center">
								<div class="thumb">
									<img src="<?= base_url('assets/images/icons/review.png'); ?>" alt="review.png">
									<h4 class="title">Daniel Parker</h4>
									<div class="client-postn">Front-end Developer</div>
								</div>
								<div class="details">
									<div class="icon"><span>“</span></div>
									<p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_post text-center">
								<div class="thumb">
									<img src="<?= base_url('assets/images/icons/review.png'); ?>" alt="review.png">
									<h4 class="title">Alison Dawn</h4>
									<div class="client-postn">WordPress Developer</div>
								</div>
								<div class="details">
									<div class="icon"><span>“</span></div>
									<p>“ I believe in lifelong learning and Skola is a great place to learn from experts. I've learned a lot and recommend it to all my friends “</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Divider -->
	<section class="divider home-style1 parallax" data-stellar-background-ratio="0.2">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="business_exposer text-center">
						<h2 class="title text-white mb20">Expune Afacerea Ta</h2>
						<p class="text-white mb35">Afacerea ta merita o promovare eficienta. Ai un produs care poate ajuta studentii sau le poate face viata mai usoara? Contacteaza-ne si hai sa vedem cum putem colabora.</p>
						<a class="btn exposer_btn" href="#">Contact Rapid</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Start Partners -->
	<section class="start-partners home1 bgc-thm pt60 pb60">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Mai buni impreuna!</h2>
						<p>Ai o idee de imbunatatire a platformei sau ai gasit un bug? Scrie-ne acum si nu vom uita ca ne-ai ajutat.</p>
					</div>
				</div>
				<div class="col-lg-4 pr10">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn" href="#">Trimite Tichet</a>
					</div>
				</div>
			</div>
		</div>
	</section>

