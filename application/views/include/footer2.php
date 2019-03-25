

<!-- Footer
================================================== -->
<div id="footer" class="sticky-footer">
  <!-- Main -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <img class="footer-logo" src="<?php echo base_url();?>source/images/logo-header.png" alt="">
        <br><br>
        <p style="text-align: justify;">K.A.S housing Pvt.Ltd,company has been founded by Mr.K.Alagarsamy at 1990 by implementing and constructing the indiviual residential villas and Commercial purpose building with high level construction method with proper alignment of labor and work quality with well-designed aechitecture</p>
      </div>

      <div class="col-md-4 col-sm-6 ">
        <h4>Helpful Links</h4>
        <ul class="footer-links">
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url();?>Page/about">About</a></li>
          <li><a href="<?php echo base_url();?>Page/facilities">Our Facilities</a></li>
          <li><a href="<?php echo base_url();?>Page/ourmaterial">Our Material</a></li>
          <li><a href="<?php echo base_url();?>Page/property">Search with Property</a></li>
          
        </ul>

        <ul class="footer-links">
          <li><a href="<?php echo base_url();?>Page/buyerguide">Buyer Guide</a></li>
          <li><a href="<?php echo base_url();?>Page/news">News</a></li>
          <li><a href="<?php echo base_url();?>Page/contact">Contact</a></li>
          <li><a href="<?php echo base_url();?>Page/gallery">Gallery</a></li>
          <li style="position: relative;
    left: 14px;"><a href="<?php echo base_url();?>admin"><i class="im im-icon-Settings-Window" style="font-size: 28px;"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>    

      <div class="col-md-3  col-sm-12">
        <h4>Contact Us</h4>
        <div class="text-widget">
          <span class="addressBack"></span> <br>
          Phone: <span class="phoneBack1"></span><br>
          E-Mail:<span> <a href="#"><span class="emailBack1"></span></a> </span><br>
        </div>

        <ul class="social-icons margin-top-20">
          <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
          <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
          <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
          <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
        </ul>

      </div>

    </div>
    
    <!-- Copyright -->
    <div class="row">
      <div class="col-md-12">
        <div class="copyrights">© 2019 K.A.S Housing. All Rights Reserved.</div>
      </div>
    </div>

  </div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<?php $urlval = $this->uri->segment(2);
if($urlval != "image_gallery"){?>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/jquery-2.2.0.min.js"></script>
<?php
}
?>

<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/chosen.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/rangeSlider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/masonry.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/custom.js"></script>

<script>

$.ajax({        
    url : "<?php echo site_url('Contact/getSiteInfo')?>",
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
      console.log(data[0].email1);
      $('.addressBack').text(data[0].address)
      $('.phoneBack1').text(data[0].phone1)
      $('.emailBack1').text(data[0].email1)
    }
  });
</script>



</div>
<!-- Wrapper / End -->


</body>

<!-- Mirrored from www.vasterad.com/themes/findeo_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 00:39:43 GMT -->
</html>