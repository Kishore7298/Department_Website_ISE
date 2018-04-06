<?php
// PHP File Tree Demo
// For documentation and updates, visit http://abeautifulsite.net/notebook.php?article=21

// Main function file
include("php_file_tree.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link href="styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
                <link href="https://fonts.googleapis.com/css?family=Telex" rel="stylesheet">
		<!-- Makes the file tree(s) expand/collapsae dynamically -->
		<script src="php_file_tree.js" type="text/javascript"></script>
                
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.5.4, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/a-100x124.png" type="image/x-icon">
        <meta name="description" content="Site Creator Description">
        <title>Information Science</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
         <link rel="stylesheet" href="syl.css"/>

         <!-- footer -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- footer  -->
    </head>
    <body bbgcolor="#E6E6FA">
       
  
        <section class="menu cid-qFVjnpJz6L" once="menu" id="menu1-16">
            
                
            
                <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    <div class="menu-logo">
                        <div class="navbar-brand">
                            <span class="navbar-logo">
                                <a href="#">
                                     <img src="assets/images/a-100x124.png" alt="" title="" style="height: 3.8rem;">
                                </a>
                            </span>
                            <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#">NMAM Institute Of Technology</a></span>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                            <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.html">
                        <span class=" mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="events.html">
                        <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                        Events
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="syllabus.php">
                        <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                        Syllabus
                    </a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="faculties/angular/index.html">
                        <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                        Faculties
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="charrt.html">
                        <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                        Placements
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="new/thumbnail/gallery.php">
                        <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                        Gallery
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="About%20us/About%20Us.html">
                        <span class=" mbr-iconfont mbr-iconfont-btn"></span>
                        About Department
                    </a>
                </li>
                           </ul>
                        
                    </div>
                </nav>
            </section>
      
            <section class="mbr-section content4 cid-qFVGcOz7TW" id="content4-1j "  style="background-color: #EFEFEF;">
                
                    
                
                    <div class="container" >
                        <div class="media-container-row">
                            <div class="title col-12 col-md-8 ">
                                <h2 class="align-center pb-3 mbr-fonts-style display-2"style="font-family: 'Telex', sans-serif;">SYLLABUS </h2>
                                <div style="background-color: #333333;border-radius: 10px;">
                                    <br>
                                        
                                <?php
		
		
		echo php_file_tree("./syllabus/", "[link]");
		
                
		?>
                                    <br>              </div>  
                                <br><br>        </div>
                    </div></div>
                  </section>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Information Science & Engineering</h3>

				<p class="footer-links">
			     <a href="index.html">Home</a>
					·
					<a href="events.html">Activites</a>
					
					·
					<a href="about.html">About</a>
					
				</p>

				<p class="footer-company-name"><b>NMAMIT </b></p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>NMAM Institute of Technology</span> nitte, Karkala</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>082582 81263</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="#">ise@nmamit.in</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About our department</span>
Started in 1999, the Department of Information Science & Engineering offers students a graduate program with an intake of 60. The department has well-qualified and dedicated teaching and non-teaching staff and well-equipped laboratories to fulfill the academic needs of the students.				</p>
<!--
				<div class="footer-icons">

				 <a href="https://www.facebook.com/NITTEedu"><i class="fa fa-facebook "></i></a>
					<a href="https://www.linkedin.com/title/lecturer-at-nmamit"><i class="fa fa-linkedin"></i></a>
					<a href="tel:+91-8258-281263/281264;ext=351"><i class="fa fa-phone"></i></a>
					<a href="https://twitter.com/aboutnitte"><i class="fa fa-twitter"></i></a>

				</div>-->
  
                                         
			</div>

		</footer>

    
        <script src="assets/web/assets/jquery/jquery.min.js"></script>
      <script src="assets/popper/popper.min.js"></script>
      <script src="assets/tether/tether.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/dropdown/js/script.min.js"></script>
      <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
      <script src="assets/parallax/jarallax.min.js"></script>
      <script src="assets/smoothscroll/smooth-scroll.js"></script>
      <script src="assets/theme/js/script.js"></script>
      <script>
          $(document).ready(function () {
              $('div.hiddene').fadeIn(2000).removeClass('hiddene');
          });
          </script>
      

</body>
</html>