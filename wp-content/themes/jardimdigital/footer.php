<!-- section start -->
			<!-- ================ -->
			<div class="section gray-bg text-muted footer-top clearfix">
				<div class="container">
					<div class="row">
						<?php 
							if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('top_footer') ) : 
							endif;
						?>
<!-- 				<div class="col-md-6">
							<div class="owl-carousel clients">
								<div class="client">
									<a href="#"><img src="images/client-1.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-2.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-3.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-4.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-5.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-6.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-7.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-8.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<blockquote class="inline">
								<p class="margin-clear">Design is not just what it looks like and feels like. Design is how it works.</p>	
								<footer><cite title="Source Title">Steve Jobs </cite></footer>
							</blockquote>
						</div> -->
					</div>
				</div>
			</div>
			<!-- section end -->


			<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer" >

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="row">
							<?php 
								if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main_footer') ) : 
								endif;
							?>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>Copyright © 2015 <a target="_blank" href="http://www.jardim.in">JardimDigital</a>. Todos direitos reservados.</p>
							</div>
							<div class="col-md-6">
								<nav class="navbar navbar-default" role="navigation">
									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>   
									<div class="collapse navbar-collapse" id="navbar-collapse-2">
										<ul class="nav navbar-nav">
											<li><a href="index.html">Home</a></li>
											<li><a href="page-about.html">About</a></li>
											<li><a href="blog-right-sidebar.html">Blog</a></li>
											<li><a href="portfolio-3col.html">Portfolio</a></li>
											<li><a href="page-contact.html">Contact</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

 <?php wp_footer(); ?>

	</body>
</html>
