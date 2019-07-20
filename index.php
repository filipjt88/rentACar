<?php
 include "controller/controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
 
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
.sets{
    font-size:15px;
    margin-right: 10px;
}
#startDate{
  padding-left:10px;
  position: relative;
    bottom: 22px;
}
#endDate{
    padding-left:10px;
    position: relative;
    bottom: 22px;
}
.glyphicon-calendar{
    position: absolute;
    left: 353px;
    font-size: 35px;
    top:21px !important;
}
.cal{
    position: absolute;
    left: 353px;
    font-size: 35px;
    top: 21px !important;
}
.loc{
    position: absolute;
    left: 353px;
    font-size: 35px;
    top: 87px !important;
   
}


    </style>
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

        <!--== Header Top End ==-->
        <?php include ("PARTS/header.php");?>
        <!--== Header Area End ==-->

    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form action="index1.php" method="GET"> 
                            <input type="hidden" name="action" value="checkCar" id = "book">
                                <!--== Pick Up Location ==-->
                                <div class="pickup-location book-item">
                                    <h4>Mesto preuzimanja:</h4>
                                    <select class="custom-select" name = "location">
                                      <option selected>Izaberi lokaciju...</option>
                                      <option value="Beograd Airport">Beograd Airport</option>
                                      <option value="Beograd Bulevar Milutina Milankovića">Beograd Bulevar Milutina Milankovića</option>
                                      <option value="Beograd Bulevar Milutina Milankovića">Novi Sad</option>
                                    </select>
                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Pick Up Date ==-->
                                <div class="pick-up-date book-item date-icon" >
                                    <h4>Izaberi datum uzimanja:</h4><br>
                                    <input type="datetime-local" id="startDate" name = "startDate" placeholder="Izaberi datum" />

                                    <div class="return-car">
                                        <h4>Izaberi datum povratka:</h4><br>
                                        <input type="datetime-local" id="endDate" name= "endDate" placeholder="Datum vraćanja" />
                                    </div>
                                </div>
                                <!--== Pick Up Location ==
                                <div class="return-car">
                                        <h4>Unesite vasu e-mail adresu:</h4>
                                        <input type="email" id="email" name = "email" placeholder="Email.." />
                                    </div>

                                    <div class="return-car">
                                        <h4>Unesite vas broj telefona:</h4>
                                        <input type="text" id="telefon" name = "phone" placeholder="Telefon.." />
                                    </div>
                                    -->
                                <!--== Car Choose ==-->
                                <div class="choose-car-type book-item">
                                    <h4>Izaberite model automobila:</h4>
                                    <select class="custom-select" name="type" required>
                                        <option>Izaberi auto...</option>
                                      <?php                                      
                                        $controller = new Controller();
                                        $cars = $controller->getAllAutomobili();
                                        foreach($cars as $car) {
                                            echo "<option value='".$car['id_automobil']."'>" . $car['marka'] . " r</option>"; 
                                        }
                                      ?>
                                    </select>
                                </div>
                                <!--== Car Choose ==-->

                                <div class="book-button text-center">

                                    <button class="btn_reserve book-now-btn" type="button" data-toggle="modal" data-target="#myModal" ><a >Rezervišite Auto</a></button>
                                    <input type="submit" name="submit" value="Proverite dostupnost vozila" class="book-now-btn">
                                </div>
                                <?php
                                    if(isset($_GET['msg']))
                                    echo "<p><b>". $_GET['msg'] . "</b></p>";
                                    
                                    if( isset($_GET['available']))
                                    echo "<p><b>". $_GET['available'] . "</b></p>";
                                
                                ?>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h1>REZERVIŠI AUTO VEĆ DANAS!</h1>
                                    <p>POPUSTI 15%  <br> ZA NAŠE STALNE KLIJENTE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Ko Smo Mi?</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi aliquid debitis optio praesentium, voluptate repellat accusantium deserunt eius.</p>
                                <div class="about-btn">
                                    <button class="btn_reserve" type="button" data-toggle="modal" data-target="#myModal"><a >Rezervišite Auto</a></button>
                                    <a href="#">Kontaktirajte Nas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe src="https://player.vimeo.com/video/121982328?title=0&byline=0&portrait=0"></iframe>
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Naše Ponude</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

           
			<!-- Service Content Start -->
			<div class="row">
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-taxi"></i>
						<h3>Iznajmi Auto na Dan</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-cog"></i>
						<h3>Iznajmi Auto na 7 dana</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-map-marker"></i>
						<h3>Iznajmi Auto na 5 dana</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-life-ring"></i>
						<h3>Osiguranje</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-car"></i>
						<h3>Iznajmi Prikolicu</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-4 text-center">
					<div class="service-item">
						<i class="fa fa-phone"></i>
						<h3>Kontakt</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
					</div>
				</div>
				<!-- Single Service End -->
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">550</span>+</p>
                                        <h4>Zadovoljnih Klijenata</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">5</span>+</p>
                                        <h4>Automobila</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">5</span>+</p>
                                        <h4>Lokacija za iznajmljivanje</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Izaberite Vaš Auto</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">
                        <!-- Choose Area Tab Menu -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">popularni automobili</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">najnoviji automobili</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Lokacije</a>
                            </li>
                        </ul>
                        <!-- Choose Area Tab Menu -->

                        <!-- Choose Area Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Popular Cars Tab Start -->
                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Popular Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="popucar-menu text-center">
                                        <a href="#" data-filter="*" class="active">Svi</a>
                                        <a href="#" data-filter=".hat">Prikolica</a>
                                        <a href="#" data-filter=".mpv">Sportski</a>
                                        <a href="#" data-filter=".sedan">Karavan</a>
                                        
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- PopularCars Tab Content Start -->
                                    <div class="row popular-car-gird">
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/Opel_Vivaro.jpg">
                                                      <img src="assets/img/car/Opel_Vivaro.jpg" alt="Opel Vivaro  BITURBO LONG">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Opel Vivaro BITURBO LONG</a>
                                                        <span class="price"><i class="fa fa-tag"></i> 55e/day</span>
                                                    </h3>

                                                    <h5>Putnički Kombi</h5>
                                                    <h5>30+ dana 550e</h5>
                                                    <h5>16-30 dana 180e</h5>
                                                    <h5>3-7 dana 50e</h5>

                                                    <div class="p-car-feature">
                                                        <a><img src="assets/img/car/car_door.png" class="car-door" style="width:20px; height:20px;">&nbsp &nbsp4</a>
                                                        <a><i class="fa fa-users sets"></i>9</a>
                                                        <a><img src='assets/img/car/pump.jpg' alt = 'dizel' style = 'width:18px;height:15px;'>&nbsp &nbspDizel</a> 
                                                       
                                                        <a href="#">Klima <i class="fa fa-check-circle"></i></a>
                                                        <br>
                                                        <a href="#"><img src = 'assets/img/car/car_gearbox.png' alt = 'dizel' style = 'width:18px;height:17px;position: relative; top: -1px;'> Manuelni</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 sedan">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/bmw_x3.jpg" style="height: 219px;">
                                                      <img src="assets/img/car/bmw_x3.jpg" alt="bmw x3">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">BMW X3 Xdrive</a>
                                                        <span class="price"><i class="fa fa-tag"></i> 55e/dan</span>
                                                    </h3>

                                                    <h5>Džip/SUV</h5>
                                                    <h5>30+ dana 550e</h5>
                                                    <h5>16-30 dana 180e</h5>
                                                    <h5>3-7 dana 50e</h5>
                                                    <div class="p-car-feature">
                                                        <a><img src="assets/img/car/car_door.png" class="car-door" style="width:20px; height:20px;">&nbsp &nbsp 4/5</a>
                                                        <a><i class="fa fa-users sets"></i>5</a>
                                                        <a><img src='assets/img/car/pump.jpg' alt = 'dizel' style = 'width:18px;height:15px;'>&nbsp &nbsp Dizel</a> 
                                                       
                                                        <a href="#">Klima <i class="fa fa-check-circle"></i></a>
                                                        <a href="#"><img src = 'assets/img/car/car_gearbox.png' alt = 'dizel' style = 'width:18px;height:17px;position: relative; top: -1px;'> AUTOMATSKI</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 sedan ">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/zafira.jpg" style="height: 219px;">
                                                      <img src="assets/img/car/zafira.jpg" alt="zafira">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Opel Zafira</a>
                                                        <span class="price"><i class="fa fa-tag"></i> 55e/dan</span>
                                                    </h3>

                                                    <h5>MINI VAN</h5>
                                                    <h5>30+ dana 550e</h5>
                                                    <h5>16-30 dana 180e</h5>
                                                    <h5>3-7 dana 50e</h5>

                                                    <div class="p-car-feature">
                                                        <a><img src="assets/img/car/car_door.png" class="car-door" style="width:20px; height:20px;">&nbsp &nbsp4/5</a>
                                                        <a><i class="fa fa-users sets"></i>7</a>
                                                        <a><img src='assets/img/car/pump.jpg' alt = 'dizel' style = 'width:18px;height:15px;'>&nbsp &nbspDizel</a> 
                                                       
                                                        <a href="#">Klima <i class="fa fa-check-circle"></i></a>
                                                        <br>
                                                        <a href="#"><img src = 'assets/img/car/car_gearbox.png' alt = 'dizel' style = 'width:18px;height:17px;position: relative; top: -1px;'> Manuelni</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 mpv ">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/polo.jpg" style="height:219px;">
                                                      <img src="assets/img/car/polo.jpg" alt="Volkswagen Polo">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Volkswagen Polo</a>
                                                        <span class="price"><i class="fa fa-tag"></i> 55e/dan</span>
                                                    </h3>

                                                    <h5>Hackback</h5>
                                                    <h5>30+ dana 550e</h5>
                                                    <h5>16-30 dana 180e</h5>
                                                    <h5>3-7 dana 50e</h5>

                                                    <div class="p-car-feature">
                                                        <a><img src="assets/img/car/car_door.png" class="car-door" style="width:20px; height:20px;">&nbsp &nbsp4/5</a>
                                                        <a><i class="fa fa-users sets"></i>5</a>
                                                        <a><img src='assets/img/car/pump.jpg' alt = 'dizel' style = 'width:18px;height:15px;'>&nbsp &nbspDizel</a> 
                                                       
                                                        <a href="#">Klima <i class="fa fa-check-circle"></i></a>
                                                        <br>
                                                        <a href="#"><img src = 'assets/img/car/car_gearbox.png' alt = 'dizel' style = 'width:18px;height:17px;position: relative; top: -1px;'> Manuelni</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con sedan hat mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/audi_a3.png">
                                                      <img src="assets/img/car/audi_a3.png" alt="more">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Audi A3</a>
                                                        <span class="price"><i class="fa fa-tag"></i> 65e/dan</span>
                                                    </h3>

                                                    <h5>Limuzina</h5>
                                                    <h5>30+dana 650e</h5>
                                                    <h5>15-30dana 250e</h5>
                                                    <h5>3-7dana 50e</h5>

                                                    <div class="p-car-feature">
                                                        <a><img src="assets/img/car/car_door.png" class="car-door" style="width:20px; height:20px;">&nbsp &nbsp 4/5</a>
                                                        <a><i class="fa fa-users sets"></i>5</a>
                                                        <a><img src='assets/img/car/pump.jpg' alt = 'dizel' style = 'width:18px;height:15px;'>&nbsp &nbspDizel</a> 
                                                       
                                                        <a href="#">Klima <i class="fa fa-check-circle"></i></a>
                                                        <br>
                                                        <a href="#"><img src = 'assets/img/car/car_gearbox.png' alt = 'dizel' style = 'width:18px;height:17px;position: relative; top: -1px;'> Manuelni</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/mer_c.png">
                                                      <img src="assets/img/car/mer_c.png" alt="More coming soon">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Mercedes-Benz C200</a>
                                                        <span class="price"><i class="fa fa-tag"></i> 75e/dan</span>
                                                    </h3>

                                                    <h5>Limuzina</h5>
                                                    <h5>30+dana 750e</h5>
                                                    <h5>15-30dana 350e</h5>
                                                    <h5>3-7dana 90e</h5>

                                                    <div class="p-car-feature">
                                                        <a><img src="assets/img/car/car_door.png" class="car-door" style="width:20px; height:20px;">&nbsp &nbsp 4/5</a>
                                                        <a><i class="fa fa-users sets"></i>5</a>
                                                        <a><img src='assets/img/car/pump.jpg' alt = 'dizel' style = 'width:18px;height:15px;'>&nbsp &nbspDizel</a> 
                                                       
                                                        <a href="#">Klima <i class="fa fa-check-circle"></i></a>
                                                        <br>
                                                        <a href="#"><img src = 'assets/img/car/car_gearbox.png' alt = 'dizel' style = 'width:18px;height:17px;position: relative; top: -1px;'> Manuelni</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
                                    </div>
                                    <!-- PopularCars Tab Content End -->
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->

                            <!-- Newest Cars Tab Start -->
                            <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Newest Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="newcar-menu text-center">
                                        <a href="#" data-filter="*" class="active">all</a>

                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- NewestCars Tab Content Start -->
                                    <div class="row newest-car-gird">
                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 con suv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/Opel_Vivaro.jpg">
                                                      <img src="assets/img/car/Opel_Vivaro.jpg" alt="Opel Vivaro  BITURBO LONG">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Opel Vivaro BITURBO LONG</a>
                                                        <span class="price"><i class="fa fa-tag"></i> 55e/day</span>
                                                    </h3>

                                                    <h5>Putnički Kombi</h5>
                                                    <h5>30+ dana 550e</h5>
                                                    <h5>16-30 dana 180e</h5>
                                                    <h5>3-7 dana 50e</h5>

                                                    <div class="p-car-feature">
                                                        <a><img src="assets/img/car/car_door.png" class="car-door" style="width:20px; height:20px;">&nbsp &nbsp4</a>
                                                        <a><i class="fa fa-users sets"></i>9</a>
                                                        <a><img src='assets/img/car/pump.jpg' alt = 'dizel' style = 'width:18px;height:15px;'>&nbsp &nbspDizel</a> 
                                                       
                                                        <a href="#">Klima <i class="fa fa-check-circle"></i></a>
                                                        <br>
                                                        <a href="#"><img src = 'assets/img/car/car_gearbox.png' alt = 'dizel' style = 'width:18px;height:17px;position: relative; top: -1px;'> Manuelni</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 sedan">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/bmw_x3.jpg" style="height: 219px;">
                                                      <img src="assets/img/car/bmw_x3.jpg" alt="bmw x3">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">BMW X3 Xdrive</a>
                                                        <span class="price"><i class="fa fa-tag"></i> 55e/dan</span>
                                                    </h3>

                                                    <h5>Džip/SUV</h5>
                                                    <h5>30+ dana 550e</h5>
                                                    <h5>16-30 dana 180e</h5>
                                                    <h5>3-7 dana 50e</h5>
                                                    <div class="p-car-feature">
                                                        <a><img src="assets/img/car/car_door.png" class="car-door" style="width:20px; height:20px;">&nbsp &nbsp 4/5</a>
                                                        <a><i class="fa fa-users sets"></i>5</a>
                                                        <a><img src='assets/img/car/pump.jpg' alt = 'dizel' style = 'width:18px;height:15px;'>&nbsp &nbsp Dizel</a> 
                                                       
                                                        <a href="#">Klima <i class="fa fa-check-circle"></i></a>
                                                        <a href="#"><img src = 'assets/img/car/car_gearbox.png' alt = 'dizel' style = 'width:18px;height:17px;position: relative; top: -1px;'> AUTOMATSKI</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->
                                    </div>
                                    <!-- NewestCars Tab Content End -->
                                </div>
                                <!-- Newest Cars Content Wrapper End -->
                            </div>
                            <!-- Newest Cars Tab End -->

                            <!-- Office Map Tab -->
                            <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="map-area">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.4041415940865!2d20.49421521553507!3d44.79295177909872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a70874ba67b4d%3A0x2be92c4c3e9c2f38!2z0JLQvtGY0LjRgdC70LDQstCwINCY0LvQuNGb0LAgNjcsINCR0LXQvtCz0YDQsNC0LCDQodGA0LHQuNGY0LA!5e0!3m2!1ssr!2ssi!4v1562153780379!5m2!1ssr!2ssi"></iframe></div>
                            </div>
                            <!-- Office Map Tab -->
                        </div>
                        <!-- Choose Area Tab content -->
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->

    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Jedino Kvalitet Nudimo Našim Klijentima</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Pricing Table Conatent Start -->
            <div class="row">
                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>POSLOVNI</h3>
                        <h2> 55.99</h2>
                        <h5>MESEČNO</h5>

                        <ul class="package-list">
                            <li>BESPLATNA ISPORUKA AUTOMOBILA</li>
                            <li>PROSLAVE VENČANJA</li>
                            <li>PUNO OSIGURANJE</li>
                            <li>LUKSUZNA VOZILA</li>
                            <li>KAUCIJA</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                    <h3>POSLOVNI</h3>
                        <h2> 55.99</h2>
                        <h5>MESEČNO</h5>

                        <ul class="package-list">
                            <li>BESPLATNA ISPORUKA AUTOMOBILA</li>
                            <li>PROSLAVE VENČANJA</li>
                            <li>PUNO OSIGURANJE</li>
                            <li>LUKSUZNA VOZILA</li>
                            <li>KAUCIJA</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                    <h3>POSLOVNI</h3>
                        <h2> 55.99</h2>
                        <h5>MESEČNO</h5>

                        <ul class="package-list">
                            <li>BESPLATNA ISPORUKA AUTOMOBILA</li>
                            <li>PROSLAVE VENČANJA</li>
                            <li>PUNO OSIGURANJE</li>
                            <li>LUKSUZNA VOZILA</li>
                            <li>KAUCIJA</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->
            </div>
            <!-- Pricing Table Conatent End -->
        </div>
    </section>
    <!--== Pricing Area End ==-->

    <!--== Testimonials Area Start ==-->
    <section id="testimonial-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>NAŠI KLIJENTI O NAMA:</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 m-auto">
                    <div class="testimonial-content">
                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
                            <h3>Boris Jakovljevic</h3>
                            <div class="client-logo">
                                <img src="assets/img/client/avatar.png" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->

                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
                            <h3>Jovana Bojic</h3>
                            <div class="client-logo">
                                <img src="assets/img/client/avatar.png" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->

                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
                            <h3>Stefan Nikolic</h3>
                            <div class="client-logo">
                                <img src="assets/img/client/avatar.png" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="  modal_style">
  <div class="container">
  <div class="row">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Rezerviši automobil</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
      </div>
      
      <div class="modal-body">
      <div class="col-md-6">
        <p>Rezervišite automobil</p>
    <form method = "GET" action = "index1.php">
        <input type="hidden" name = "action" value = "book">
    <div class="form-group">
        <select type = "text" name = "automobili" autocomplete="off" style="height:50px;" class = "form-control" required>
        <?php                           
       $controller = new Controller();
       $cars = $controller->getAllAutomobili();
       foreach($cars as $car) {
           echo "<option value='".$car['id_automobil']."'>" . $car['marka'] . "</option>"; 
       }
       
     ?>
   </select><br>
    </div>
   <div class = "form-group">
   <label>Mesto preuzimanja - Unesite lokaciju gde bi preuzeli i vratili vozilo</label>
   <input type="text" name = "mesto_preuzimanja" class = "form-control" value="Beograd Airport">
    </div>
    <div class = "form-group">
   <label>Mesto vracanja</label>
   <input type="text" name = "mesto_vracanja" class = "form-control" value="Beograd Airport">
    </div>
    <div class = "form-group">
   <label>Datum preuzimanja</label>
   <input type="datetime-local" name = "datum_preuzimanja" class = "form-control">
    </div>
    <div class = "form-group">
   <label>Datum vracanja</label>
   <input type="datetime-local"name = "datum_vracanja" class = "form-control">
    </div>

<div class = "form-group">
   <label>Dodatna oprema</label><br>
   <input type="checkbox"  name = "gear[]" value="GPS navigacija">GPS navigacija<br>
   <input type="checkbox"  name = "gear[]" value=" WI-FI 4G mobilni ruter" >WI-FI 4G mobilni ruter<br>
   <input type="checkbox"  name = "gear[]" value = "full osiguranje">Full osiguranje<br>
   <input type="checkbox"  name = "gear[]" value = "sedista za decu">Sedista za decu,kolevke,busteri<br>
   <input type="checkbox"  name = "gear[]" value = "dodatni vozac">Dodatni vozac<br>
   <input type="checkbox"  name = "gear[]"  value = "krovni kofer">Krovni kofer<br>
   <input type="checkbox"  name = "gear[]" value = "zeleni karton">Zeleni karton/napustanje Srbije<br>
</div>
    
    </div>
    <div class="col-md-6"> 
    <div class = "form-group">
   <label>Kontakt informacija</label>
   <input type="text"  name = "ime"     placeholder=" **ime" class = "form-control" required><br>
   <input type="text"  name = "prezime" placeholder=" **prezime" class = "form-control" required><br>
   <input type="tel"   name = "telefon" placeholder=" **telefon" class = "form-control" required><br>
   <input type="email" name = "email"   placeholder=" **Email" class = "form-control" required><br>
   <textarea           name = "komentar" cols="50" rows="10" placeholder="unesite vas komentar"></textarea>
   <input type = "checkbox" name = "uslovi_koriscenja" value = "prihvatam uslove koriscenja" required>Prihvatam <a href="uslovi.php" target="_blank">uslove koriscenja</a>
    </div>
    <div class="book-button text-center">
    <input type="submit" name="submit" value="Rezervisi" class="btn_form">

</div>
    </div>
    </div>
    </div>
    </div>
</div>

        </form>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
    </div>

  </div>
</div>

    <?php

require ('PARTS/footer.php');

?>
    <!--== Testimonials Area End ==-->

    <!--== Mobile App Area Start ==
    <div id="mobileapp-video-bg"></div>
    <section id="mobile-app-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <h2>SAVE 30% WITH THE APP</h2>
                        <p>Easy &amp; Fast - Book a car in 60 seconds</p>
                        <div class="app-btns">
                            <a href="#"><i class="fa fa-android"></i> Android Store</a>
                            <a href="#"><i class="fa fa-apple"></i> Apple Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   -->
    <!--== Mobile App Area End ==-->
 
    

    <!--== Footer Area Start ==-->
    
    <!--== Scroll Top Area End ==-->
   
    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>