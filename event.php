<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ISI KEF</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        <!--
        span.label {color:black;width:60;height:30;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
        span.c1 {cursor:hand;color:black;width:60;height:30;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
        span.c2 {cursor:hand;color:red;width:60;height:30;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
        span.c3 {cursor:hand;color:#b0b0b0;width:60;height:30;text-align:center;margin-top:0;background:#ffF;font:bold 12px Arial}
        -->
        </style>
         
        <!DOCTYPE html>
<html lang="en">

<head>
	<style>

		/* Styling the body */
		body {
			margin: 0;
			padding: 0;
		}
		
		/* Styling section, giving background
			image and dimensions */
		section {
			width: 100%;
			height: 100vh;
			background:
url('eee.jpg');
			background-size: cover;
		}
		
		/* Styling the left floating section */
		section .leftBox {
			width: 50%;
			height: 100%;
			float: left;
			padding: 50px;
			box-sizing: border-box;
		}
		
		/* Styling the background of
			left floating section */
		section .leftBox .content {
			color: #fff;
			background: rgba(0, 0, 0, 0.5);
			padding: 40px;
			transition: .5s;
		}
		
		/* Styling the hover effect
			of left floating section */
		section .leftBox .content:hover {
			background: #e91e63;
		}
		
		/* Styling the header of left
			floating section */
		section .leftBox .content h1 {
			margin: 0;
			padding: 0;
			font-size: 50px;
			text-transform: uppercase;
		}
		
		/* Styling the paragraph of
			left floating section */
		section .leftBox .content p {
			margin: 10px 0 0;
			padding: 0;
		}
		
		/* Styling the three events section */
		section .events {
			position: relative;
			width: 50%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5);
			float: right;
			box-sizing: border-box;
		}
		
		/* Styling the links of
		the events section */
		section .events ul {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			margin: 0;
			padding: 40px;
			box-sizing: border-box;
		}
		
		/* Styling the lists of the event section */
		section .events ul li {
			list-style: none;
			background: #fff;
			box-sizing: border-box;
			height: 200px;
			margin: 15px 0;
		}
		
		/* Styling the time class of events section */
		section .events ul li .time {
			position: relative;
			padding: 20px;
			background: #262626;
			box-sizing: border-box;
			width: 30%;
			height: 100%;
			float: left;
			text-align: center;
			transition: .5s;
		}
		
		/* Styling the hover effect
			of events section */
		section .events ul li:hover .time {
			background: #e91e63;
		}
		
		/* Styling the header of time
			class of events section */
		section .events ul li .time h2 {
			position: absolute;
			margin: 0;
			padding: 0;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: #fff;
			font-size: 60px;
			line-height: 30px;
		}
		
		/* Styling the texts of time
		class of events section */
		section .events ul li .time h2 span {
			font-size: 30px;
		}
		
		/* Styling the details
		class of events section */
		section .events ul li .details {
			padding: 20px;
			background: #fff;
			box-sizing: border-box;
			width: 70%;
			height: 100%;
			float: left;
		}
		
		/* Styling the header of the
		details class of events section */
		section .events ul li .details h3 {
			position: relative;
			margin: 0;
			padding: 0;
			font-size: 22px;
		}
		
		/* Styling the lists of details
		class of events section */
		section .events ul li .details p {
			position: relative;
			margin: 10px 0 0;
			padding: 0;
			font-size: 16px;
		}
		
		/* Styling the links of details
		class of events section */
		section .events ul li .details a {
			display: inline-block;
			text-decoration: none;
			padding: 10px 15px;
			border: 1.5px solid #262626;
			margin-top: 8px;
			font-size: 18px;
			transition: .5s;
		}
		
		/* Styling the details class's hover effect */
		section .events ul li .details a:hover {
			background: #e91e63;
			color: #fff;
			border-color: #e91e63;
		}
	</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <a href="event.php" class="nav-item nav-link">Events</a>
                <a href="contact (2).php" class="nav-item nav-link">Contact</a>
            </div>
          
            <a href="LOGIN_.php" class="btn btn-primary py-2 px-lg-3 d-none d-lg-block">
                LOGIN  </a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Events</h1>
                    <nav aria-label="breadcrumb">
                       
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    
    <section>
		<div class="leftBox">
			<div class="content">
				<h1>
					ÉVÉNEMENTS ET SPECTACLES
				</h1>
				
<p>
    L'Institut Supérieur d'Etudes Technologiques du Kef organise plusieurs évenements dans ses domaines technologiques, car il cherche toujours à développer les connaissances et le génie des étudiants, car les évenements sont distribués successivement en grande abondance afin que nous ne manquions ni de science ni de développement. Tous les évenements de l'institution figurent sur le côté.

				</p>

			</div>
		</div>

		<div class="events">
			<ul>
				<li>
					<div class="time">
						<h2>
							15 <br><span>Mars</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							Où se passe l'événement ?
						</h3>
						
<p>
							Il s'agit d'un évenement de 14h à 16h à Microsoft  
						</p>


						<a href="#">Voir les détails
                        </a>
					</div>
					<div style="clear: both;"></div>
				</li>

				<li>
					<div class="time">
						<h2>
							10 <br><span>Avril</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							Où se passe l'événement ?
						</h3>
						
<p>
                            Il s'agit d'un évenement de Dévéleppement web de 12h à 15h à google developer

						</p>

						<a href="#">Voir les détails
                        </a>
					</div>
					<div style="clear:both;"></div>
				</li>

				<li>
					<div class="time">
						<h2>
							12 <br><span>Mai</span>
						</h2>
					</div>
					<div class="details">
						<h3>
							Où se passe l'événement ?
						</h3>
						
<p>
							Il s'agit d'un évenement de Programmation language C de 10h à 12h à Enactus</p>


						<a href="#">Voir les détails
                        </a>
					</div>
					<div style="clear:both;"></div>
				</li>
			</ul>
		</div>
	</section>
	<!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Meet our Trainer</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/lina.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Lina haouas</h5>
                    <p>Get Started With Angular</p>
                    <div class="testimonial-text bg-light text-center p-2">
                    <p class="mb-0">Fullstack web developer,Content creator.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/Ml.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Molk saouabi</h5>
                    <p>React Simplified</p>
                    <div class="testimonial-text bg-light text-center p-2">
                    <p class="mb-0">Full stack developer intern @wecraft, Member @GDG Beja.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/houssem.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Houssem mezzi</h5>
                    <p>Introduction to reinforcement learning</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Mechatronic student engineer, GDG beja organizer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Club-isikef</h6>
                <h1 class="mb-5">CLUB</h1>
	        </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/gl.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Google developer student</h5>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/ant.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Club ANT isik</h5>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/mc.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Microsoft club isi kef</h5>
                </div>
				<div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/enac.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">nactus institut sp d'informatique kef</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
	
     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">CATÉGORIES</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>5 Rue Saleh Ayech - 7100 Kef</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(216) 78 201 056</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>isikef.rnu.tn</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100057592473413"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">GaleriedeFaculté</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/b.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/isi1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/a.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/f-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!-- Footer End -->   
                 
     </body>
                  
                  </div>
              </div>
          </div>
        
      </div>
      <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>