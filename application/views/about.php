<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>About Us</h2>
						<div class="page_link">
							<a href="<?php echo base_url();?>bot">Home</a>
							<a href="<?php echo base_url();?>bot/about">About</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->



          <!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">
					<?php
						foreach ($about->result_array() as $value) {?>
					<!-- <h3 class="text-heading title_color"><?php echo $value['title'];?></h3> -->
					<p class="sample-text">
						<?php echo $value['deskripsi'];?>

					</p>
					<?php }?>
				</div>
			</section>
			<!-- End Sample Area -->
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">			
					<div class="section-top-border">
						<h3 class="mb-30 title_color">Definition</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Definition 01</h4>
									<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Definition 02</h4>
									<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Definition 03</h4>
									<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
								</div>
							</div>
						</div>
					</div>
					<div class="section-top-border">
						<h3 class="mb-30 title_color">Block Quotes</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									“Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking” 
								</blockquote>
							</div>
						</div>
					</div>
				</div>







