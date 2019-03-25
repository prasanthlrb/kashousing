<?php $this->load->view('include/header2');?>
<?php foreach ($fetch_single as $row) {

 ?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a href="listings-list-with-sidebar.html" class="back-to-listings"></a>
				<div class="property-title">
					<h2><?php echo $row->prop_named; ?> <span class="property-badge">For Sale</span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							<?php echo $row->regaddress; ?>
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div class="property-price">₹<?php echo number_format($row->laexpectedprice)."<br>"; ?></div>
					<div class="sub-price">₹<?php echo $row->lapriceper; ?> / sq ft</div>
				</div>


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row margin-bottom-50">
		<div class="col-md-12">
		
			<!-- Slider -->
			<div class="property-slider default">
				<?php
				$x = 1;
				 foreach ($new_files as $files) {
					if($row->id == $files->prop_id){?>

				<a href="<?php echo base_url();?>uploads/land/<?php echo $files->file_name; ?>" data-background-image="<?php echo base_url();?>uploads/land/<?php echo $files->file_name; ?>" class="item mfp-gallery" alt="<?php echo $x;?>"></a>
			<?php }
			$x++;
		}?>
			</div>

			<!-- Slider Thumbs -->
			<div class="property-slider-nav">
				<?php foreach ($new_files as $filess) {
					if($row->id == $filess->prop_id){?>
				<div class="item"><img src="<?php echo base_url();?>uploads/land/<?php echo $filess->file_name; ?>" alt=""></div>
			
				<?php }}?>
			</div>

		</div>
	</div>
</div>


<div class="container">
	<div class="row">

		<!-- Property Description -->
		<div class="col-lg-8 col-md-7">
			<div class="property-description">

				<!-- Main Features -->
				<ul class="property-main-features">
					<li>Total Area <span><?php echo $row->laplotarea; ?> sq ft</span></li>
					<li>No of open sides <span><?php echo $row->laopenside; ?> </span></li>
					<li>Width of road facing<span><?php echo $row->lawidthofroad; ?> </span></li>
					<li>Overlooking<span><?php 
						if ($row->laover == 1) {
							echo "Main Road";
						}else{
								echo"Nan";
						}
					 ?> </span></li>
					
				</ul>


				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<p>
						<?php echo $row->summary; ?>
					</p>

					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>						


				<!-- Features -->
				<h3 class="desc-headline">Features</h3>
				
				<div class="style-2">
					<!-- Tabs Navigation -->
					<ul class="tabs-nav">
						<li class="active"><a href="#tab1a"><i class="sl sl-icon-pin"></i>Area Details</a></li>
						<li><a href="#tab2a"><i class="sl sl-icon-badge"></i>Price Details</a></li>
						<li><a href="#tab3a"><i class="sl sl-icon-bubbles"></i> Ownership & Approvals</a></li>
					</ul>

					<!-- Tabs Content -->
					<div class="tabs-container">
						<div class="tab-content" id="tab1a">
							<ul class="property-features margin-top-0">
					<li>Plot Area: <span><?php echo $row->laplotarea;?> <?php echo $row->laseltype;?></span></li>
					<li>Plot Breadth(ft): <span><?php echo $row->laplotbreadth;?></span></li>
					<li>Plot Length(ft): <span><?php echo $row->laplotlength;?></span></li>
					
					
				</ul>
						</div>

						<div class="tab-content" id="tab2a">
							<div class="row">
				<div class="col-md-3">
				<h4>Expected Price</h4>
					<p>
						₹<?php echo number_format($row->laexpectedprice)."<br>"; ?>
					</p>				
					</div>
				<div class="col-md-3">				
					<h4>Price per <span>Sq-ft</span></h4>
					<p>
						₹<?php echo number_format($row->lapriceper)."<br>"; ?>
					</p>				
					
				</div>
				<div class="col-md-3">				
					<h4>Other Charges</h4>
					<p>
						₹<?php echo number_format($row->laothercharge)."<br>"; ?>
					</p>
					</div>

					<div class="col-md-3">				
					<h4>Booking Amount</h4>
					<p>
						₹<?php echo number_format($row->laadvance)."<br>"; ?>
					</p>
					</div>				
						</div>
						</div>

						<div class="tab-content" id="tab3a">
					<div class="row">
				<div class="col-md-4">
				<h4>Ownership Status</h4>
					<p>
						<?php 

						if ($row->laowner == 1) {
							echo "Freehold";
						}elseif ($row->laowner == 2) {
							echo "Leasehold";
						}elseif ($row->laowner == 3) {
							echo "Power Of Attorney";
						}elseif ($row->laowner == 4) {
							echo "Co-operative Society";
						}else
						{
								echo"Nan";
						} 
						?>
					</p>				
					</div>
				<div class="col-md-4">				
					<h4>Approved by</h4>
					<p>
						<?php echo $row->laapproved; ?>
					</p>				
					
				</div>
				</div>
						 </div>
					</div>
				</div>




				



				<!-- Video -->
				<h3 class="desc-headline no-border">Video</h3>
				<div class="responsive-iframe">
					<iframe width="560" height="315" src="https://player.vimeo.com/video/<?php echo $row->vimeo2?>?title=0&byline=0&portrait=0" frameborder="0" allowfullscreen></iframe>
				</div>



				
				<!-- Location -->
				<h3 class="desc-headline no-border" id="location">Location</h3>
				<div id="propertyMap-container">
					<div id="propertyMap" data-latitude="<?php echo $row->lat; ?>" data-longitude="<?php echo $row->lng; ?>"></div>
					<a href="#" id="streetView">Street View</a>
				</div>


				

			</div>
		</div>
		<!-- Property Description / End -->


		<!-- Sidebar -->
		<div class="col-lg-4 col-md-5">
			<div class="sidebar sticky right">

				


				<!-- Widget -->
				<div class="widget">

					<!-- Agent Widget -->
					<div class="agent-widget">
						<div class="agent-title">
							<div class="agent-photo1"><img src="<?php echo base_url()?>source/favicon.png" alt="" /></div>
							<div class="agent-details">
								<h4><a href="#">K.A.S Housing Pvt Ltd</a></h4>
								<span><i class="sl sl-icon-call-in"></i>(+91) 452-4231010</span>
							</div>
							<div class="clearfix"></div>
						</div>

						<input type="text" placeholder="Your Name">
						<input type="text" placeholder="Your Phone">
						<textarea>I'm interested in this property [<?php echo $row->prop_named; ?>] and I'd like to know more details.</textarea>
						<button class="button fullwidth margin-top-5">Send Message</button>
					</div>
					<!-- Agent Widget / End -->

				</div>
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-30 margin-top-30">Mortgage Calculator</h3>
					
					<!-- Mortgage Calculator -->
					<form action="javascript:void(0);" autocomplete="off" class="mortgageCalc" data-calc-currency="INR">
						<div class="calc-input">
							<div class="pick-price tip" data-tip-content="Set This Property Price"></div>
						    <input type="text" id="amount" name="amount" placeholder="Sale Price" required>
						    <label for="amount" class="fa fa-inr"></label>
						</div>

						<div class="calc-input">
						    <input type="text" id="downpayment" placeholder="Down Payment">
						    <label for="downpayment" class="fa fa-inr"></label>
						</div>

						<div class="calc-input">
							<input type="text" id="years" placeholder="Loan Term (Years)" required>
							<label for="years" class="fa fa-calendar-o"></label>
						</div>

						<div class="calc-input">
							<input type="text" id="interest" placeholder="Interest Rate" required>
							<label for="interest" class="fa fa-percent"></label>
						</div>

						<button class="button calc-button" formvalidate>Calculate</button>
						<div class="calc-output-container"><div class="notification success">Monthly Payment: <strong class="calc-output"></strong></div></div>
					</form>
					<!-- Mortgage Calculator / End -->

				</div>
				<!-- Widget / End -->


				<!-- Widget -->
				<div class="widget">
					<h3 class="margin-bottom-35">Featured Properties</h3>

					<div class="listing-carousel outer">
						<!-- Item -->
						<?php foreach($new_prop as $prop){ ?>
							
						
						<div class="item">
							<div class="listing-item compact">

								<a href="#" class="listing-img-container">

									<div class="listing-badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>

									<div class="listing-img-content">
										<span class="listing-compact-title"><?php echo $prop->prop_named; ?><i>₹<?php echo number_format($prop->laexpectedprice)."<br>"; ?></i></span>

										<ul class="listing-hidden-content">
											<li>Total Area <span><?php echo $prop->laplotarea; ?> sq ft</span></li>
											<li>Price Per sq ft<span><?php echo $prop->lapriceper; ?> </span></li>
										</ul>
									</div>
										<?php foreach ($new_files as $file) {
											if($prop->id == $file->prop_id){
						
						 ?> 
									<img src="<?php echo base_url();?>uploads/land/<?php echo $file->file_name; ?>" alt="">

									 <?php 
									 break;
									}}?> 
								</a>

							</div>
						</div>
						<!-- Item / End -->
					<?php } ?>
						
					</div>

				</div>
				<!-- Widget / End -->

			</div>
		</div>
		<!-- Sidebar / End -->

	</div>
</div>
<?php }?>

<?php $this->load->view('include/footer2');?>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&en=EN&key=AIzaSyDNyLsAhFt4hIZKeNJYC244jPPayM0GhrY"></script>
<script src="<?= base_url() ?>global/site/geocomplete.min.js"></script> 
<!-- Maps -->



<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/maps.js"></script>