
   
    <!-- Footer -->

    <footer id="footer" class="footer section"> 
      <div class="footer-flex">
        <div class="flex-item">
          <a class="brand pull-left" href="#">
            <img alt="" src="<?php echo base_url();?>source/images/brand.png">
            <div class="brand-info">
              <div class="brand-name">K.A.S Housing</div>
              <div class="brand-text">Pvt Ltd</div>
            </div>
          </a>
        </div>
        <div class="flex-item">
          <div class="inline-block">© K.A.S Housing<br>All Rights Resevered</div>
        </div>
        <div class="flex-item">
          <ul>
            <li><a href="<?php echo base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url();?>Page/about">About</a></li>
          <li><a href="<?php echo base_url();?>Page/facilities">Our Facilities</a></li>
          <li><a href="<?php echo base_url();?>Page/ourmaterial">Our Material</a></li>
          <li><a href="<?php echo base_url();?>Page/property">Search with Property</a></li>
          </ul> 
        </div>
        <div class="flex-item">
          <ul>
           <li><a href="<?php echo base_url();?>Page/buyerguide">Buyer Guide</a></li>
          <li><a href="<?php echo base_url();?>Page/news">News</a></li>
          <li><a href="<?php echo base_url();?>Page/contact">Contact</a></li>
          <li><a href="<?php echo base_url();?>Page/gallery">Gallery</a></li>
          </ul> 
        </div>
        <div class="flex-item">
          <ul>
            <li class="active"><a href="">ENG</a></li>
            
          </ul> 
        </div>
        <div class="flex-item">
          <div class="social-list">
            <a href="https://twitter.com/kas_housing" class="icon ion-social-twitter"></a>
            <a href="https://www.facebook.com/KAS-Housing-PVT-LTD-1725339620828984/" class="icon ion-social-facebook"></a>
            <a href="https://plus.google.com/u/1/108184866040889695957" class="icon ion-social-googleplus"></a>
            <a href="https://www.linkedin.com/in/k-a-s-housing-madurai-a3b84514b/" class="icon ion-social-linkedin"></a>
            <a href="https://sketchfab.com/kashousing1990" class="icon ion-social-dribbble-outline"></a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>

<!-- jQuery -->


<script src="<?php echo base_url();?>source/js/animsition.min.js"></script>
<script src="<?php echo base_url();?>source/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>source/js/smoothscroll.js"></script>
<script src="<?php echo base_url();?>source/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>source/js/wow.min.js"></script>
<script src="<?php echo base_url();?>source/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url();?>source/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>source/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>source/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>source/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url();?>source/js/plugins.js"></script>
<script src="<?php echo base_url();?>source/js/sly.min.js"></script>


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


<!-- Scripts -->
<script src="<?php echo base_url();?>source/js/scripts.js"></script> 
<script src="<?php echo base_url();?>source/js/rev-slider-init.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(){
    let wrapper = document.getElementById('wrapper');
    let topLayer = wrapper.querySelector('.top');
    let handle = wrapper.querySelector('.handle');
    let skew = 0;
    let delta = 0;
  
    if(wrapper.className.indexOf('skewed') != -1){
      skew = 1000;
    }
    
    wrapper.addEventListener('mousemove', function(e){
      delta = (e.clientX - window.innerWidth / 2) * 0.5;
    
      handle.style.left = e.clientX + delta + 'px';
  
      topLayer.style.width= e.clientX + skew + delta + 'px';
    });
  });

</script>
</body>
</html>