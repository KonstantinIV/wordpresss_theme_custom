
<?php
get_header();
?>
    
		<article class="content px-3 py-5 p-md-5 konsteus-article" >

			<div class="konsteus-article-horizontal-strip-1" >
				<div class="konsteus-article-horizontal-strip-container-1 d-lg-flex" >

				    <img src="/wp-content/themes/konsteus/assets/images/wrench.svg" class="konsteus-article-image img-fluid" alt="Repair" width="250" height="250">
					<div class="konsteus-article-horizontal-strip-container-text-1" >
						<h1><span class="text-break">Tarbe</span>elektroonika remont</h1>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
						  in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						  Excepteur sint occaecat cupidatat non proident, 
						  sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>
			<div class="konsteus-article-horizontal-strip-2" >
				<div class="konsteus-article-horizontal-strip-container-2 d-lg-flex" >

				    <img src="/wp-content/themes/konsteus/assets/images/aircan.svg" class="konsteus-article-image img-fluid" alt="Repair" width="250" height="250">
					<div class="konsteus-article-horizontal-strip-container-text-2" >
						<h1><span class="text-break">Tarbe</span>elektroonika Hooldus</h1>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
						  in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						  Excepteur sint occaecat cupidatat non proident, 
						  sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>
			


		 <?php 
		 	if( have_posts() ){
				while( have_posts() ) {
					the_post();
					

					the_content();
				}

					
			 }
		 ?>
	    </article>
	   


<div>
	<?php
get_footer();



?>

