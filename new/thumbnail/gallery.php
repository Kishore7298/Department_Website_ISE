<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.5.4, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="../assets/images/a-100x124.png" type="image/x-icon">
        <meta name="description" content="Site Creator Description">
        <title>Information Science</title>
        <link rel="stylesheet" href="../../assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="../../assets/tether/tether.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="../../assets/socicon/css/styles.css">
        <link rel="stylesheet" href="../../assets/dropdown/css/style.css">
        <link rel="stylesheet" href="../../assets/theme/css/style.css">
        <link rel="stylesheet" href="../../assets/mobirise/css/mbr-additional.css" type="text/css">
         <link rel="stylesheet" href="../../syll.css"/>
 <!-- gallery -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="thumbnail-gallery.css">
<!-- gallery -->
         <!-- footer -->
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- footer  -->


   <style>

</style>

    </head>
    <body>
       
  
         <section class="menu cid-qFVjnpJz6L" once="menu" id="menu1-16">
             <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
                    
                    <div class="menu-logo">
                        <div class="navbar-brand">
                            
                            <span ><a class=" text-white " href="../../index.html"><h2>Home</h2></a></span>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      
                        
                    </div>
            
            </section>
              <head>          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> </head>
          
            <section class="mbr-section content4 cid-qFVGcOz7TW" id="content4-1j ">
                 <center><h1 style="color:black;font-size:90px;">Gallery</h1></center> 
                 <hr>
                    <div class="container gallery-container">

     
    <div class="tz-gallery">

   <?php $dirname = "../images/";
$images = glob($dirname."*.jpg"); ?>

        <div class="row">
<?php foreach($images as $image) { 
?>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
<?php echo '<a class="lightbox" href="'.$image.'">';?> 
                    <?php    echo '<img src="'.$image.'" /><br />';?>
                    </a>
                    
                </div>
            </div>
            <?php }?>
        </div>

    </div>

</div>
           </section>  
     




                  
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Information Science & Engineering</h3>

				<p class="footer-links">
				<a href="index.html">Home</a>
					·
					<a href="events.html">Activites</a>
					.
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

				<div class="footer-icons">

				<!--
				  <div class="footer-icons">
				      <i class="fa fa-map-marker"></i>
                    <a href="https://www.facebook.com/NITTEedu"><i class="fa fa-facebook "></i></a>
					<a href="https://www.linkedin.com/title/lecturer-at-nmamit"><i class="fa fa-linkedin"></i></a>
					<a href="tel:+91-8258-281263/281264;ext=351"><i class="fa fa-phone"></i></a>
					<a href="https://twitter.com/aboutnitte"><i class="fa fa-twitter"></i></a>
					

				</div>-->

				</div>

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