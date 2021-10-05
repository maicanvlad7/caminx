	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Contacteaza-ne</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Contact -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="contact_info_widget mb30-smd">
						<h3 class="m_title">Date de contact</h3>
						<div class="ciw_box mb50">
							<h4 class="title">Bucuresti</h4>
							<ul class="list-unstyled">
								<li class="df"><span class="flaticon-pin mr15"></span><a href="#">Bulevardul Timisoara nr.48</a></li>
								<li><span class="flaticon-phone mr15"></span><a href="#">0764 334 890</a></li>
								<li><span class="flaticon-email mr15"></span><a href="#">contact@caminx.ro</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="form_grid">
						<h3 class="title mb5">Lasa-ne un mesaj!</h3>
			            <form class="contact_form" id="contact_form" name="contact_form" action="<?= base_url('contact/send'); ?>" method="post">
							<div class="row">
				                <div class="col-md-12">
				                    <div class="form-group">
										<input id="form_name" name="name" class="form-control" required="required" type="text" placeholder="Nume">
									</div>
				                </div>
				                <div class="col-md-12">
				                    <div class="form-group">
				                    	<input id="form_email" name="email" class="form-control required email" required="required" type="email" placeholder="Email">
				                    </div>
				                </div>
				                <div class="col-md-12">
				                    <div class="form-group">
				                    	<input id="form_phone" name="phone" class="form-control required phone" required="required" type="text" placeholder="Telefon">
				                    </div>
				                </div>
				                <div class="col-sm-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="message" class="form-control required" rows="8" required="required" placeholder="Mesajul Tau"></textarea>
		                            </div>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1" required>
											<label class="custom-control-label" for="customCheck1">Sunt de acord ca datele cu caracter personal sunt folosite pentru facilitarea contactarii.</label>
										</div>
									</div>
				                    <div class="form-group mb0">
					                    <button type="submit" value="submit" action="submit" class="btn btn-lg btn-thm">Trimite</button>
				                    </div>
				                </div>
			                </div>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</section>
