<?php $this->load->view('include/header2');?>


<!-- Content
================================================== -->

<!-- Map Container -->
<div class="contact-map margin-bottom-55">

  <!-- Google Maps -->
 
   
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7859.112646193938!2d78.13294998983625!3d9.970822402066254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c66d92e012c5%3A0x65cc78f2d42a2bf0!2sKAS+Housing!5e0!3m2!1sen!2sin!4v1510119500358" frameborder="0" style="border:0" allowfullscreen class="google-map-container"></iframe>
    

  <!-- Google Maps / End -->

  <!-- Office -->
  <div class="address-box-container">
    <div class="address-container" data-background-image="<?php echo base_url();?>assets/property/images/our-office.jpg">
      <div class="office-address">
        <h3>Our Office</h3>
        <ul>
          <li><?php echo $siteInfo[0]->address ?></li>
          
        </ul>
      </div>
    </div>
  </div>
  <!-- Office / End -->

</div>
<div class="clearfix"></div>
<!-- Map Container / End -->


<!-- Container / Start -->
<div class="container">

  <div class="row">

    <!-- Contact Details -->
    <div class="col-md-4">

      <h4 class="headline margin-bottom-30">Find Us There</h4>

      <!-- Contact Details -->
      <div class="sidebar-textbox">
        <p>Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services.</p>

        <ul class="contact-details">
          <li><i class="im im-icon-Phone-2"></i> <strong>Phone:</strong> <span><?php echo $siteInfo[0]->phone1 ?></span></li>
         
          <li><i class="im im-icon-Globe"></i> <strong>Web:</strong> <span><a href="#">www.kashousing.com</a></span></li>
          <li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#"><span class="__cf_email__" data-cfemail="2e414848474d4b6e4b564f435e424b004d4143"> <?php echo $siteInfo[0]->email1 ?></span></a></span></li>
        </ul>
      </div>

    </div>

    <!-- Contact Form -->
    <div class="col-md-8">

      <section id="contact">
        <h4 class="headline margin-bottom-35">Contact Form</h4>

        <div id="add-brand-messages"></div> 

          <form action="#" id="form" method="post" autocomplete="on">

          <div class="row">
            <div class="col-md-6">
              <div>
                <input name="name" type="text" id="name" placeholder="Your Name" required="required" />
              </div>
            </div>

            <div class="col-md-6">
              <div>
                <input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
              </div>
            </div>
          </div>
   <div>
            <input name="mobile" type="text" id="mobile" placeholder="Mobile Number" required="required" />
          </div>
          <div>
            <input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
          </div>

          <div>
            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
          </div>

          <input type="button" onclick="mail_send()" class="submit button" value="Submit Message" />
          
          </form>
          
      </section>
    </div>
    <!-- Contact Form / End -->

  </div>

</div>
<!-- Container / End -->
<?php $this->load->view('include/footer2');?>
<!-- Maps -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr0FDfk4OHVWKyW-5_oVc9BYTaBhsDd8s&callback=initMap"
  type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/infobox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/markerclusterer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/property/scripts/maps.js"></script>
<script type="text/javascript">
  function mail_send()
  {
        $.ajax({
            url : "<?php echo base_url();?>Page/mail_contact",
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