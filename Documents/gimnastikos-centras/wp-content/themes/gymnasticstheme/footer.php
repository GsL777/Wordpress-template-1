	

	
	<section id="contact-bar">
		<!-- kontaktine forma su MODAL START -->
		<!-- <div class="container"> -->
		<div class="body">
		 	<!-- <h2>Modal Example</h2> -->
			<!-- Trigger the modal with a button -->
			<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#contact">Susisiekite</button> -->
			<a href="#" data-toggle="modal" data-target="#contact" class="button1"><i class="fa fa-envelope"></i>Susisiekite</a>
			<!-- Modal -->
			<div class="modal fade" id="contact" role="dialog">
			    <div class="modal-dialog">
					<!-- Modal content-->
			    	<div class="modal-content">
			    		<div class="modal-header">
			    			<button type="button" class="close" data-dismiss="modal">&times;</button>
			    			<!-- <h4 class="modal-title">Modal Header</h4> -->
			    		</div>

				    	<div class="modal-body"> <!-- 1. install plug-in to wordpress admin. 2. create new form  3. insert php code. 4. copy key and insert to ''  . -->
				          <?php echo do_shortcode('[contact-form-7 id="38" title="contact"]') ?>
				          
				    	</div>
						<!-- <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div> -->
			    	</div>
			      
				</div>
			</div>

<!-- 			 <div class='bold-line'></div>
			<div class='container'>
			  <div class='window'>
			    <div class='overlay'></div>
			    <div class='content'>
			      <div class='welcome'>Hello There!</div>
			      <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
			      <div class='input-fields'>
			        <input type='text' placeholder='Username' class='input-line full-width'></input>
			        <input type='email' placeholder='Email' class='input-line full-width'></input>
			        <input type='password' placeholder='Password' class='input-line full-width'></input>

			      </div>
			      <div class='spacing'>or continue with <span class='highlight'>Facebook</span></div>
			      <div><button class='ghost-round full-width'>Create Account</button></div>
			    </div>
			  </div>
			</div>  -->






		</div>
		<!-- </div> --> <!-- container end -->
		<!-- kontaktine forma su MODAL END -->
	</section>

	<footer id="footer-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li><a href="">Įvykiai</a></li>
						<li><a href="">Kontaktai</a></li>
						<li><a href="">Apie mus</a></li>
						<li><a href="">Galerija</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-unstyled">
						<li><a href="">Facebook</a></li>
						<li><a href="">LinkedIn</a></li>
						<li><a href="">Twitter</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h6> Header </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
				</div>
			</div>

			<div class="col-lg-12">
				<p class="text-center mb-0">Visos teisės saugomos &copy; Gimnastikos centras 2018</p>
			</div>
		</div>

	</footer>
	
	
	<?php wp_footer(); ?>


	</body>
</html>