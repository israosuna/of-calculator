<?php

if(isset($_POST['submit'])){ //check if form was submitted
  $input = $_POST['datos']; //get input text
  $message = "Success! You entered: ".$input;
  $CsvString=$input;
} 


$Data = str_getcsv($CsvString, "\n"); 
$arreglo=[];
$suma=0;
$contadordetips=0;
$contadordeVentas=0;
$totalVentas =   [];
$totalPropinas = [];
$arregloTipsCompleto = [];
$arreglosVentasCompletas = [];
$arreglo99TipsCompleto=[];
$arregloVentasTips= [];
foreach($Data as &$Row){
    $Row = str_getcsv($Row, "\t");
    if (strpos($Row[4],"Tip")=== 0 && strripos($Row[1],".99")==0 ){
        array_push($arreglo,floatval((substr($Row[1],1))));
        array_push($totalPropinas,floatval((substr($Row[1],1))));
		array_push($arregloTipsCompleto,$Row);
		array_push($arregloVentasTips,$Row);
        $contadordetips+=1;
    }
    elseif (strpos($Row[4],"Payment")===0 && strripos($Row[1],".50")!=0 ){
        array_push($arreglo,floatval((substr($Row[1],1))));
        array_push($totalVentas,floatval((substr($Row[1],1))));
		array_push($arreglosVentasCompletas,$Row);
		array_push($arregloVentasTips,$Row);
        $contadordeVentas+=1;
    }
    elseif (strpos($Row[4],"Tip")=== 0 && strripos($Row[1],".99")!=0 ){
		array_push($arreglo99TipsCompleto,$Row);
    }
}
$primerTip = $arregloVentasTips[sizeof($arregloVentasTips) - 1];
$ultimoTip = $arregloVentasTips[0];



function checkout($arrayText){

	$len=count($arrayText);
for ($i=0;$i<$len;$i++)
   echo $arrayText[$i]."\t";
}


//echo "ultimo tip".$arregloVentasTips[sizeof($arregloVentasTips) - 1];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@israosuna - Calculator</title>		
		<!-- Meta Description -->
        <meta name="description" content="checking out Calculator">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Israel Osuna @israosuna">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#about">Home</a></li>
                        <li><a href="#tipsale">Tip's/Sales Details</a></li>
                        <li><a href="">Invoice(soon)</a></li>
                        <li><a href="https://israosuna.xyz/ofsistema">NEW! Earning and AVG (Beta)</a></li>
                        <li><a href="#contact2">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->

        <!--
        End Home SliderEnd
        ==================================== -->
			
			<!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-3 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>About me</h3>
								<div id="works">
									<div class="work-item">
										<p>Did this to get paid for it... ended up giving it for free. 🙄 <br> <br> - @israosuna</p>
									</div>


								</div>
							</div>
						</div>
						<div class="col-md-3 wow animated fadeInLeft">
							<div class="recent-works">
								<h3 ><a href="https://israosuna.xyz/ofsistema">NEW! Earning and AVG (Beta)</a></h3>
								<div id="works">
									<div class="work-item">
										<p>Now you can save, update and filter your checkouts! 😈 <br> <br> - @israosuna</p>
										Click Here -> :<a style="color: white;" href="https://israosuna.xyz/ofsistema">NEW! Earning and AVG (Beta)</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>How it's Works</h3>								
						     	 <div class="message-body">
									<img src="img/of.jpg" class="pull-left" alt="member">
						       		<p>Copy from last tip to 1st, paste and click on Calculate. Not working from phone, tablet or mobile. </p>
						     	 </div>
						    </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			
			
			<!-- Service section -->
			<section id="price">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h3>Shift Checkout Calculator</h3>
						</div>

						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
							<div class="price-table featured text-center">
								<span>Shift Details</span>
								<div class="value">
									<span>$</span>
									<span><?php echo array_sum($arreglo) ; ?></span><br>
									<span>Total</span>
								</div>
								<ul>
									<li>Total (20% Off) : $<?php echo round((array_sum($arreglo)*0.8),2) ; ?></li>
									<li>Tip's Total : <?php echo $contadordetips; ?> / $<?php echo array_sum($totalPropinas) ; ?></li>
									<li>Sales Total : <?php echo $contadordeVentas; ?> / $<?php echo array_sum($totalVentas) ; ?></li>
								</ul>
								<div class="comission">
									<span>$</span>
									<span><?php  
																	$comission = (round((array_sum($arreglo)*0.8),2)-300)*0.05;
																	if ($comission<=0)
																		{ 
																			echo " 0.00$ ";
																		}
																	if($comission>1 && $comission <10) {
																		
																		echo (round((array_sum($arreglo)*0.8),2)-300)*0.05."  ";									
																		
																	}
																	if($comission>10 ) {
																		
																		echo (round((array_sum($arreglo)*0.8),2)-300)*0.05." &#129297 ";									
																		
																	}
																	 ?></span><br>
									<span>Earned Comission</span>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
						<div id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="col-md-8 contact-form wow animated fadeInLeft">
							<form action="index.php" method="POST">

								<div class="input-field">
									<textarea name="datos" class="form-control" placeholder="Messages..."></textarea>
								</div>
						       	<button type="submit" id="submit" name= "submit"class="btn btn-blue btn-effect">Calculate</button>
								   <textarea  style="position: absolute; left: -9999px;" id="element_html"><?php echo "FIRST : \n"	;
																													echo	"\n\n".checkout($primerTip);
																												 echo	 "LAST  :\n";
																												 echo "\n\n".checkout($ultimoTip); 
																												echo "TOTAL :\n $".array_sum($arreglo).""; ?></textarea>
																												<input  class="btn btn-red btn-effect" onClick="copy()" value="Copy Checkout">
																							
																												</input>
																												<script>
																												function copy(){
																												$('#element_html').select();
																												document.execCommand('copy');
																												}
																												</script>
							</form>
						</div>
	
			
					</div>
				</div>
</div>
						</div>
		
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			<!-- Testimonial section -->
			<section id="about" class="parallax">
				<div id="tipsale"  class="overlay">
					<div class="container">						
						<div class="row">
								<div class="col-md-6">
									<h3 class="text-center" style="color:white;">
										Tip's Details 
									</h3>
									<table class="table table-dark table-sm table-borderless">
  										<thead class="table-dark">
											<tr >
												<th>
													Date
												</th>
												<th>
													Amount
												</th>
												<th>
													Fee
												</th>
												<th>
													Status
												</th>
												<th>
													Description
												</th>
											</tr>
										</thead>
										<tbody>
										<?php 
										foreach ($arregloTipsCompleto as $row): array_map('htmlentities', $row); ?>
											<tr>
											<td><?php echo implode('</td><td>', $row); ?></td>
											</tr>
										<?php endforeach; ?>
									
										</tbody>
									</table>
								</div>
								<div class="col-md-6">
									<h3 class="text-center" style="color:white;">
										Sales Details 
									</h3>
									<table class="table table-dark table-sm table-borderless">
  										<thead class="table-dark">
											<tr>
											<th>
													Date
												</th>
												<th>
													Amount
												</th>
												<th>
													Fee
												</th>
												<th>
													Net
												</th>
												<th>
													Description
												</th>
										</thead>
										<tbody>
										<?php 
										foreach ($arreglosVentasCompletas as $row): array_map('htmlentities', $row); ?>
											<tr>
											<td><?php echo implode('</td><td>', $row); ?></td>
											</tr>
										<?php endforeach; ?>
									
										</tbody>
									</table>			
									<h3 class="text-center" style="color:white;">
										.99 Tips Details 
									</h3>
									<table class="table table-dark table-sm table-borderless">
  										<thead class="table-dark">
											<tr>
											<th >
													Date
												</th>
												<th>
													Amount
												</th>
												<th>
													Fee
												</th>
												<th>
													Net
												</th>
												<th>
													Description
												</th>
										</thead>
										<tbody>
										<?php 
										foreach ($arreglo99TipsCompleto as $row): array_map('htmlentities', $row); ?>
											<tr>
											<td><?php echo implode('</td><td>', $row); ?></td>
											</tr>
										<?php endforeach; ?>
									
										</tbody>
									</table>
								</div>
							</div>
						
						</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div id="contact2" class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>FOLLOW ME</h2>
								<p>@israosuna</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="https://www.facebook.com/israosuna"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://www.twitter.com/israosuna"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="https://www.instagram.com/israosuna"><i class="fa fa-instagram fa-2x"></i></a></li>							
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contact</h2>
						</div>
						
						
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Your Name...">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Your Email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subject...">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Messages..."></textarea>
								</div>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<p><i class="fa fa-pencil"></i>Israel Osuna<span>israosuna@icloud.com</span> <span>Las Palmas </span><span>Spain</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: +34-662308965 </p>
								<p><i class="fa fa-envelope"></i>israosuna@icloud.com</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<p>Next, full system with invoice</p>
						</div>
						<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://www.twitter.com/israosuna"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="https://www.instagram.com/israosuna"><i class="fa fa-instagram fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="https://www.facebook.com/israosuna"><i class="fa fa-facebook fa-3x"></i></a></li>
							</ul>
						</div>
											</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>