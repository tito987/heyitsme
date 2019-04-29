 <?php

require '../entites/client.php';
require '../core/gestionclient.php';


session_name('session_client');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>Demande D'avis</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="review/css/animate.min.css" rel="stylesheet">
	<link href="review/css/bootstrap.min.css" rel="stylesheet">
	<link href="review/css/menu.css" rel="stylesheet">
	<link href="review/css/style.css" rel="stylesheet">
	<link href="review/css/responsive.css" rel="stylesheet">
	<link href="review/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
	<link href="review/css/skins/square/grey.css" rel="stylesheet">
	
	<!-- COLOR CSS -->
	<link href="review/css/color_4.css" rel="stylesheet">
	
	<!-- BASE CSS -->
	<link href="review/css/date_time_picker.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="review/css/custom.css" rel="stylesheet">

	<script src="review/js/modernizr.js"></script>
	<!-- Modernizr -->

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
		<div class="container-fluid">
		    <div class="row">
           
                       <div class="col-3">
                    <div >
                    	<img src="review/img/ang.png" href="index.html"/>
                        
                    </div>
                </div>
                <div class="col-9">
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-home"></i></a></li>
                            <li><a href="#0"><i class="icon-basket"></i></a></li>
                            <li><a href="profile.php"><i class=" icon-user"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
               
                </div>
            </div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->

	<main>
		<div id="form_container">
			<div class="row">
				<div class="col-lg-5">
					<div id="left_form">
						<figure><img src="img/review_bg.svg" alt=""></figure>
						<h2>Votre Avis</h2>
						<p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
						<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
					</div>
				</div>
				<div class="col-lg-7">

					<div id="wizard_container">
						<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form  method="POST" action="sondage.php">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								
								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>Etes Vous Satisfaits De nos Services?</h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group clearfix">
												<label class="rating_type">Qualité des Produits</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-1-5" name="rating_input_1" value="5"><label for="rating-input-1-5" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-1-4" name="rating_input_1" value="4"><label for="rating-input-1-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-1-3" name="rating_input_1" value="3"><label for="rating-input-1-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-1-2" name="rating_input_1" value="2"><label for="rating-input-1-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-1-1" name="rating_input_1" value="1"><label for="rating-input-1-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group clearfix">
												<label class="rating_type">Fiabilité de Service</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-2-5" name="rating_input_2" value="5"><label for="rating-input-2-5" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-2-4" name="rating_input_2" value="4"><label for="rating-input-2-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-2-3" name="rating_input_2" value="3"><label for="rating-input-2-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-2-2" name="rating_input_2" value="2"><label for="rating-input-2-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-2-1" name="rating_input_2" value="1"><label for="rating-input-2-1" class="rating-star"></label>
												</span>
											</div>
											<div class="form-group clearfix">
												<label class="rating_type">Le Support</label>
												<span class="rating">
												<input type="radio" class="required rating-input" id="rating-input-3-5" name="rating_input_3" value="5"><label for="rating-input-3-5" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-3-4" name="rating_input_3" value="4"><label for="rating-input-3-4" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-3-3" name="rating_input_3" value="3"><label for="rating-input-3-3" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-3-2" name="rating_input_3" value="2"><label for="rating-input-3-2" class="rating-star"></label>
												<input type="radio" class="required rating-input" id="rating-input-3-1" name="rating_input_3" value="1"><label for="rating-input-3-1" class="rating-star"></label>
												</span>
											</div>
											
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- /step -->
								
								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>Afin d'Ameliorer Nos services Pouvez-vous nous donner les raisons que vous ont poussés a considerer la desactivation de votre compte ?</h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="review" class="form-control required" style="height:180px;" placeholder="Champs D'Avis"></textarea>
											</div>
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- /step -->

								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>
Merci de remplir tous les champs</h3>
									<div class="row">
									
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="Login" class="form-control required" placeholder="@nom d'utilisatuer" value="<?php echo $_SESSION['login'];?>" disabled>
											</div>
										</div>
									</div>
									<!-- /row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" name="email" class="form-control required" placeholder="Votre E-mail">
											</div>
										</div>
									
									</div>
									<!-- /row -->
									<br>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group terms">
												<input name="terms" type="checkbox" class="icheck required" value="yes">
												<label> Acceptez <a href="#" data-toggle="modal" data-target="#terms-txt">les termes et les conditions</a> ?</label>
											</div>
										</div>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Précedent</button>
								<button type="button" name="forward" class="forward">Suivant</button>
								<button type="submit" name="process" class="submit">Valider</button>
								<a  name="skip" href="supermeauthentic.php">Skip</a>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
				</div>
			</div><!-- /Row -->
		</div><!-- /Form_container -->
	</main>
	
	<footer id="home" class="clearfix">
		<p>© 2019 Anti-Gaspenisie</p>
	</footer>
	<!-- end footer-->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="review/js/jquery-3.2.1.min.js"></script>
	<!-- Common script -->
	<script src="review/js/common_scripts.js"></script>
	<!-- Wizard script -->
	<script src="review/js/review_wizard_func.js"></script>
	<!-- Menu script -->
	<script src="review/js/velocity.min.js"></script>
	<script src="review/js/main.js"></script>
	<!-- Theme script -->
	<script src="review/js/functions.js"></script>

</body>
</html>