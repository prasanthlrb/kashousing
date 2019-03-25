<?php $this->load->view('include/header2');?>
<style>
	

.plan{

}

</style>
<?php foreach ($fetch_single as $row) {

 ?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="property-titlebar margin-bottom-0">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<a href="<?php echo base_url();?>Property/prop_house" class="back-to-listings"></a>
				<div class="property-title">
					<h2><?php echo $row->prop_named; ?> <span class="property-badge">For Sale</span></h2>
					<span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							<?php echo $row->reqaddress; ?>
						</a>
					</span>
				</div>

				<div class="property-pricing">
					<div class="property-price">₹<?php echo number_format($row->expe_price)."<br>"; ?></div>
					<div class="sub-price">₹<?php echo $row->price_per; ?> / sq ft</div>
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

				<a href="<?php echo base_url();?>uploads/prop_view/<?php echo $files->file_name; ?>" data-background-image="<?php echo base_url();?>uploads/prop_view/<?php echo $files->file_name; ?>" class="item mfp-gallery" alt="<?php echo $x;?>"></a>
			<?php }
			$x++;
		}?>
			</div>

			<!-- Slider Thumbs -->
			<div class="property-slider-nav">
				<?php foreach ($new_files as $filess) {
					if($row->id == $filess->prop_id){?>
				<div class="item"><img src="<?php echo base_url();?>uploads/prop_view/<?php echo $filess->file_name; ?>" alt=""></div>
			
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
					<li>Total Area <span><?php echo $row->covered_area; ?> sq ft</span></li>
					<?php 
					$length = explode("#",$row->length);
					$breadth = explode("#",$row->breadth);	

					?>
					<li>Bedrooms <i class="tip" data-tip-content="<?php
					$x=1;
				
					 foreach($length as $len){
					 		$y=1;
						foreach($breadth as $bre){
							if($x == $y){
					 		echo 'BedRoom '.$x.' - '.$len.'X';
					 		 echo $bre.'<br>';

					 		///break;
					 		
					 		}
					 		$y++;
					 		 }
					 		$x++;
					

					

					}
					 ?>"></i><span><?php echo $row->bedroom; ?></span></li>
					<li>Bathrooms <span><?php echo $row->bathroom; ?></span></li>
					<li>Total Floor <span><?php echo $row->total_floor; ?></span></li>
					<li>Furnished status<span><?php echo $row->furnished_status; ?></span></li>
					<li>Number Of Open Side<span><?php echo $row->no_of_open; ?></span></li>
					<li>Width of road facing the plot<span><?php echo $row->width_of_road; ?> meter</span></li>
				</ul>

				<?php foreach ($fetch_floor as $floor) { ?>
				<h4>Floor : <?php echo $floor->floor; ?></h4>
				<ul class="property-main-features">
<!-- 					<li>Total Area <span><?php echo $row->covered_area; ?> sq ft</span></li>
 -->					<?php 
					$length = explode("#",$floor->length);
					$breadth = explode("#",$floor->breadth);	

					?>
					<li>Bedrooms <i class="tip" data-tip-content="<?php
					$x=1;
				
					 foreach($length as $len){
					 		$y=1;
						foreach($breadth as $bre){
							if($x == $y){
					 		echo 'BedRoom '.$x.' - '.$len.'X';
					 		 echo $bre.'<br>';

					 		///break;
					 		
					 		}
					 		$y++;
					 		 }
					 		$x++;
					

					

					}
					 ?>"></i><span><?php echo $floor->bed; ?></span></li>
					<li>Bathrooms <span><?php echo $floor->bath; ?></span></li>
					<!-- <li>Total Floor <span><?php echo $floor->floor; ?></span></li> -->
					<li>Furnished status<span><?php echo $floor->f_status; ?></span></li>
					<li>Number Of Open Side<span><?php echo $floor->no_of_open; ?></span></li>
					<li>Width of road facing the plot<span><?php echo $floor->width_of_road; ?> meter</span></li>
				</ul>
				<?php } ?>

				<!-- Description -->
				<h3 class="desc-headline">Description</h3>
				<div class="show-more">
					<p>
						<?php echo $row->description; ?>
					</p>

					<a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
				</div>

				<!-- Details -->
				<h3 class="desc-headline">Transaction Type, Property Availability</h3>
				<div class="row">
				<div class="col-md-4">
				
					<h4>Transaction Type</h4>
					<p><?php echo $row->trans_type; ?></p>

					
					
				</div>
				<div class="col-md-4">
				
					<h4>Possession Status</h4>
					<p><?php echo $row->poss_status; ?></p>

					
					
				</div>
				<div class="col-md-4">
				
					<h4>Available From</h4>
					<p><?php echo $row->ava_month; ?> - <?php echo $row->ava_year; ?></p>

					
					
				</div>




			</div>
					

				<!-- Features -->
				<h3 class="desc-headline">Features</h3>
				
				<div class="style-2">
					<!-- Tabs Navigation -->
					<ul class="tabs-nav">
						<li class="active"><a href="#tab1a"><i class="sl sl-icon-pin"></i> Price Details</a></li>
						<li><a href="#tab2a"><i class="sl sl-icon-badge"></i>Water & Electricity</a></li>
						<li><a href="#tab3a"><i class="sl sl-icon-bubbles"></i>Flooring</a></li>
						<li><a href="#tab4a"><i class="sl sl-icon-bubbles"></i>Amenities</a></li>
						<li><a href="#tab5a"><i class="sl sl-icon-bubbles"></i>Ownership</a></li>

					</ul>

					<!-- Tabs Content -->
					<div class="tabs-container">
						<div class="tab-content" id="tab1a">
								<div class="row">
				<div class="col-md-3">
				<h4>Expected Price</h4>
					<p>
						₹<?php echo number_format($row->expe_price)."<br>"; ?>
					</p>				
					</div>
				<div class="col-md-3">				
					<h4>Price per <span>Sq-ft</span></h4>
					<p>
						₹<?php echo number_format($row->price_per)."<br>"; ?>
					</p>				
					
				</div>
				<div class="col-md-3">				
					<h4>Other Charges</h4>
					<p>
						₹<?php echo number_format($row->other_char)."<br>"; ?>
					</p>
					</div>

					<div class="col-md-3">				
					<h4>Booking Amount</h4>
					<p>
						₹<?php echo number_format($row->booking)."<br>"; ?>
					</p>
					</div>				
						</div>
						</div>

						<div class="tab-content" id="tab2a">
						
						
				<div class="row">
				<div class="col-md-4">
				<h4>Availability of Water</h4>
					<p>
						<?php echo $row->aval_water; ?>
					</p>				
					</div>
				<div class="col-md-4">				
					<h4>Status of Electricity</h4>
					<p>
						<?php echo $row->status_eb; ?>
					</p>				
					
				</div>
				</div>
				
					
				</div>

						<div class="tab-content" id="tab3a">
						<ul class="property-features checkboxes margin-top-0">
							<?php 
					$flooring = explode("#",$row->flooring);
					foreach ($flooring as $floor) {
						echo '<li>'.$floor.'</li>';
					}
					?>
					
					
				</ul></div>

						<div class="tab-content" id="tab4a">
							
<ul class="property-features checkboxes margin-top-0">
							<?php 
					$amenities = explode("#",$row->amenities);
					foreach ($amenities as $amenitie) {
						echo '<li>'.$amenitie.'</li>';
					}
					?>
					
					
				</ul>
						 </div>
						<div class="tab-content" id="tab5a">
						<div class="row">
				<div class="col-md-4">
				<h4>Ownership Status</h4>
					<p>
						<?php echo $row->owner_status; ?>
					</p>				
					</div>
				<div class="col-md-4">				
					<h4>Approved by</h4>
					<p>
						<?php echo $row->approved; ?>
					</p>				
					
				</div>
				</div></div>
					</div>
				</div>

<!-- Features -->
				<h3 class="desc-headline">Additional Features</h3>
				
				<div class="style-2">
					<!-- Tabs Navigation -->
					<ul class="tabs-nav">
						<li class="active"><a href="#tab1"><i class="sl sl-icon-pin"></i> Additional Rooms</a></li>
						<li><a href="#tab2"><i class="sl sl-icon-badge"></i> OverLooking</a></li>
						<li><a href="#tab3"><i class="sl sl-icon-bubbles"></i>Car Parking</a></li>
						<li><a href="#tab4"><i class="sl sl-icon-bubbles"></i> Facing</a></li>
						

					</ul>


					<!-- Tabs Content -->
					<div class="tabs-container">
						<div class="tab-content" id="tab1">
							<ul class="property-features checkboxes margin-top-0">
					<?php 
					$rooms = explode("#",$row->addition_rooms);
					foreach ($rooms as $room) {
						echo '<li>'.$room.'</li>';
					}
					?>
					
				</ul>
						</div>

						<div class="tab-content" id="tab2">
							<ul class="property-features checkboxes margin-top-0">
					<?php 
					$looking = explode("#",$row->over_looking);
					foreach ($looking as $look) {
						echo '<li>'.$look.'</li>';
					}
					?>
					
				</ul>
			</div>

						<div class="tab-content" id="tab3">
							<div class="row">
				<div class="col-md-4 col-md-offset-2">
				<h4>Car Parking</h4>
					<p>
						<?php echo $row->car_park; ?>
					</p>				
					</div>
				
				</div>

					</div>

						<div class="tab-content" id="tab4">
						<div class="row">
				<div class="col-md-4 col-md-offset-2">
				<h4>Property Facing</h4>
					<p>
						<?php echo $row->facing; ?>
					</p>				
					</div>
				
				</div>
					</div>
						
					</div>
				</div>





				<!-- Floorplans -->
				<h3 class="desc-headline no-border">plans</h3>
				<!-- Accordion -->
				<div class="style-1 fp-accordion">
					<div class="accordion">

						<h3>Floor plans <i class="fa fa-angle-down"></i> </h3>
						<div class="plan">
						<a class="floor-pic mfp-image" href="../../../i.imgur.com/kChy7IU.jpg">
							<img src="../../../i.imgur.com/kChy7IU.jpg" alt="">
						</a>
						<?php foreach ($new_files as $floor) {
							if($floor->prop_id == $row->id && $floor->cate =="2" ){?>

						<img src="<?php echo base_url();?>uploads/floor_plan/<?php echo $floor->file_name;?>" alt="">
		
					


						<?php
							}
						} ?>
						</div>

						<h3>Master plans  <i class="fa fa-angle-down"></i></h3>
						<div  class="plan">
							<a class="floor-pic mfp-image" href="../../../i.imgur.com/l2VNlwu.jpg">
								<img src="../../../i.imgur.com/l2VNlwu.jpg" alt="">
							</a>
							<?php foreach ($new_files as $floor) {
							if($floor->prop_id == $row->id && $floor->cate =="3" ){?>

						<img src="<?php echo base_url();?>uploads/master_plan/<?php echo $floor->file_name;?>" alt="">
		
					


						<?php
							}
						} ?>
						</div>

						<h3>Other  <i class="fa fa-angle-down"></i></h3>
						<div class="plan">
							<a class="floor-pic mfp-image" href="../../../i.imgur.com/0zJYERy.jpg">
								<img src="../../../i.imgur.com/0zJYERy.jpg" alt="">
							</a>
								<?php foreach ($new_files as $floor) {
							if($floor->prop_id == $row->id && $floor->cate =="4" ){?>

						<img src="<?php echo base_url();?>uploads/other/<?php echo $floor->file_name;?>" alt="">
		
					


						<?php
							}
						} ?>
					</div>


					</div>

				</div>




				<!-- Video -->
				<h3 class="desc-headline no-border">Video</h3>
				<div class="responsive-iframe">
					<iframe width="560" height="315" src="https://player.vimeo.com/video/<?php echo $row->vimeo1?>?title=0&byline=0&portrait=0" frameborder="0" allowfullscreen></iframe>
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
						<div id="add-brand-messages"></div> 

          		<form action="#" id="form" method="post" autocomplete="off">
						<div class="agent-title">
							<div class="agent-photo1"><img src="<?php echo base_url()?>source/favicon.png" alt="" /></div>
							<div class="agent-details">
								<h4><a href="#">K.A.S Housing Pvt Ltd</a></h4>
								<span><i class="sl sl-icon-call-in"></i>(+91) 452-4231010</span>
							</div>
							<div class="clearfix"></div>
						</div>

						<input name="name" id="name" type="text" placeholder="Your Name">
						<input name="mobile" id="mobile" type="text" placeholder="Your Phone">
						<textarea name="comments" id="comments">I'm interested in this property [<?php echo $row->prop_named; ?>] and I'd like to know more details.</textarea>
						<button type="button" onclick="mail_send()" class="button fullwidth margin-top-5">Send Message</button>
					</form>
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

								<a href="<?php echo base_url();?>Property/single_prop/<?php echo $prop->id; ?>" class="listing-img-container">

									<div class="listing-badges">
										<span class="featured">Featured</span>
										<span>For Sale</span>
									</div>

									<div class="listing-img-content">
										<span class="listing-compact-title"><?php echo $prop->prop_named;?> <i>₹<?php echo number_format($row->expe_price)."<br>"; ?></i></span>

										<ul class="listing-hidden-content">
											<li>Total Area <span><?php echo $prop->covered_area; ?> sq ft</span></li>
											
											<li>Beds <span><?php echo $prop->bedroom;?></span></li>
											<li>Baths <span><?php echo $prop->bathroom;?></span></li>
										</ul>
									</div>
										<?php foreach ($new_files as $file) {
											if($prop->id == $file->prop_id){
						
						 ?> 
									<img src="<?php echo base_url();?>uploads/prop_view/<?php echo $file->file_name; ?>" alt="">

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
<script type="text/javascript">
  function mail_send()
  {
        $.ajax({
            url : "<?php echo base_url();?>Page/mail_contact1",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success:function(data)
            {
        
         // reset the form text
         $("#form")[0].reset();
                     
         $('#add-brand-messages').html('<div class="alert alert-success">'+
         '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
         '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ data +
         '</div>');

         $(".alert-success").delay(500).show(10, function()
         {
         $(this).delay(3000).hide(10, function() 
            {
            $(this).remove();
            });
         }); // /.alert
   


              },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
            
          });

  }
</script>