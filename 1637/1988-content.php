<html>
   <head>
      <title>Module 1988</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/1988.less', 'css/1988.css');
         ?>
      <link href="css/1987.css" rel="stylesheet" type="text/css" />
      <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
   </head>
   <body>
      <section class="type-1988">
        <!-- Subscribe Newsletter -->
        <footer class="kj" style="background-image: url('images/bk.jpg')">
	<div class="container">

		<div class="Sub">
			<!-- nhap -->
			<div class="Subscribe">
				<h2>Subscribe Newsletter.</h2>
				<p>Get e-mail updates about our latest shop and special offers.</p> 
				<div class="bor">
				<input class="NT" type="text" value placeholder="Your email Address...">
				<button>Submit</button>
			</div>
		</div>
	</div>
		<!-- end -->
		<div class="cort"></div>
		<!-- cot -->
		<div class="col-md-12">
			<div class="col-md-3">
				<div class="About">
					<h4>About Us</h4><br>
					<p>The best way to remember a memorable event is to capture it. Enter cameras. Flipkart features a wide selection. </p>
					<a href="#"><i class="fa fa-map-marker lg"></i>
						Colora - Responsive Prestashop Theme <br>
						123 Main Street, Anytown, CA 12345 USA.<br>
						United States</a><br>
					<a href="#"><i class="fa fa-mobile lg"></i>
						 +88 123 456 7899 </a><br>
					<a href="#"><i class="fa fa-envelope-o lg"></i>
						  demo@posthemes.com </a>
				</div>
			</div>
			<div class="col-md-2">
				<div class="Products">
					<h4>Products</h4><br>
					<p>Delivery </p>
					<p>Lagal Notice </p>
					<p>Prices drop </p>
					<p>New products</p>
					<p>Best sales</p>
					<p>Sitemap</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="Our ">
					<h4>Our Company</h4><br>
					<p>Delivery </p>
					<p>Lagal Notice </p>
					<p>About us </p>
					<p>Secure payment</p>
					<p>Contact us</p>
					<p>Login</p>
				</div>
			</div>
			<div class="col-md-5">
				<div class="Instagram ">
					<h4>Instagram</h4><br>
					<img src="images/1.jpg" alt="">
					<img src="images/2.jpg" alt="">
					<img src="images/3.jpg" alt="">
					<img src="images/4.jpg" alt="">
					<img src="images/5.jpg" alt="">
					<img src="images/6.jpg" alt="">
					<img src="images/7.jpg" alt="">
					<img src="images/8.jpg" alt="">

					<p>Follow our instagram</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end -->
	<div class="container">
	<div class="cart"></div>
	</div>
	<!-- footer -->
	<div class="container">
		<div class="footer1">
			<div class="row">
			<div class="col-md-8">
				<p>Copyright Posthemes. All Rights Reserved</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-facebook fa-lg "></i>
				<i class="fa fa-twitter fa-lg "></i>
				<i class="fa fa-rss fa-lg"></i>
				<i class="fa fa-youtube-play fa-lg "></i>
				<i class="fa fa-camera fa-lg"></i>
				<div class="back">
					<a href="#"><i class="fa fa-angle-double-up"></i></a>
				</div>
			</div>
			</div>
			
		</div>

	</div>
	
</footer>
      </section>
   </body>
</html>