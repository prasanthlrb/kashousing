<?php $this->load->view('include/header');?>

<style>
  #wrapper{
    position: relative;
    width:100%;
    min-height:55vw;
    overflow: hidden;
  }
  
  .layer{
    position: absolute;
    width:100vw;
    min-height: 55vw;
    overflow: hidden;
  }
  
  .layer .content-wrap{
    position: absolute;
    width:100vw;
    min-height: 55vw;
  }
  
  .layer .content-body{
    width:25%;
    position:absolute;
    top:50%;
    text-align: center;
    transform:translateY(-50%);
    color:#fff;
  }
  
  .layer img{
    position: absolute;
    width:50%;
    top:50%;
    left: 50%;
    transform:translate(-50%, -50%);
  }
  
  .layer h1{
    font-size:2em;
  }
  
  .bottom{
    background:#222;
    z-index:1;
  }
  
  .bottom .content-body{
    right:5%;
  }
  
  .bottom h1{
    color:#FDAB00;
  }
  
  .top{
    background:#eee;
    color:#222;
    z-index:2;
    width:50vw;
  }
  
  .top .content-body{
    left: 5%;
    color:#222;
  }
  
  .handle{
    position: absolute;
    height: 100%;
    display: block;
    background-color: #FDAB00;
    width:5px;
    top:0;
    left: 50%;
    z-index:3;
  }
  
  .skewed .handle{
    top:50%;
    transform:rotate(30deg) translateY(-50%);
    height: 200%;
    transform-origin:top;
  }
  
  .skewed .top{
    transform: skew(-30deg);
    margin-left:-1000px;
    width: calc(50vw + 1000px);
  }
  
  .skewed .top .content-wrap{
    transform: skew(30deg);
    margin-left:1000px;
  }
  .about-pg{
    margin-right: -60px!important;
    margin-left: -60px!important;
  }
  .about{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        margin: 0;
        padding: 0;
        display: flex;
        font-size: 40px;
    }
    .about li{
        list-style: none;
        font-size: 5em;
        letter-spacing: 40px;
        animation: animate 3s linear infinite;
    }
    @keyframes animate {
        0%{
            
            opacity: 0;
            color: #3e3934;
        }
        10%{
            opacity: 1;
                    }
        50%{
           
            opacity: 1
        }
        100%{
            
            opacity: 0;
            color: #fff;
        }
    }
   .mission{    
    position: relative;
    bottom: 100px;}
    .misvis{
    text-align: justify;
    width: 77%;
    font-family: cursive;
    font-size: 18px;
    position: relative;
    left: 40px;
    }
</style>
<style type="text/css">
      /* Header */

  #header {
    background-attachment: scroll, fixed,fixed;
    background-image: url(<?php echo base_url();?>source/directive/assets/css/images/top-3200.svg), url(<?php echo base_url();?>source/images/aboutdemo.jpg), url(<?php echo base_url();?>source/directive/images/header.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color: rgba(255, 255, 255, 0.8);
    padding: 10em 0 20em 0;
    position: relative;
    text-align: center;
  }

    #header:before, #header:after {
      background: rgba(224, 224, 224, 0.75);
      content: '';
      left: 50%;
      position: absolute;
      width: 1px;
      z-index: 0;
    }

    #header:before {
      height: calc(100% - 50px);
      opacity: 0.15;
      top: 0;
    }

    #header:after {
      bottom: 0;
      height: 50px;
    }

    #header a {
      border-bottom-color: rgba(255, 255, 255, 0.35);
      color: rgba(255, 255, 255, 0.8);
    }

      #header a:hover {
        border-bottom-color: transparent;
        color: #4eb980;
      }

    #header strong, #header b {
      color: #ffffff;
    }

    #header h1, #header h2, #header h3, #header h4, #header h5, #header h6 {
      color: #ffffff;
    }

    #header input[type="submit"],
    #header input[type="reset"],
    #header input[type="button"],
    #header .button {
      background: #ffffff;
      color: #544d55;
    }

    #header .logo {
      background: #4eb980;
      border-radius: 100%;
      color: #ffffff;
      cursor: default;
      display: inline-block;
      font-size: 2.25em;
      height: 2.35em;
      line-height: 2.35em;
      margin: 0 0 0.75em 0;
      text-align: center;
      width: 2.35em;
    }

      #header .logo.fa-paper-plane-o:before {
        left: -0.075em;
        position: relative;
      }

    #header h1 {
      font-size: 2.5em;
      margin: 0;
      text-shadow: #000000 4px 4px 8px;
    }

    #header p {
      font-size: 1.5em;
      line-height: 1.5em;
      margin: 0.25em 0 0 0;
    }
.whowe{  
    padding-top: 70px;
    position: relative;
    right: 79px;
    font-family: cursive;
    font-weight: 500;
    font-size: 15px;}
    .whowe1{  
    padding-top: 70px;
    
    font-family: cursive;
    font-weight: 500;
    font-size: 15px;}
    .number {
   display: inline-block;
    font-weight: 600;
    line-height: 1;
    font-size: 10.71rem;
    margin-right: 7.7rem;
    margin-top: -44px;
    color: #ec0000;
    position: relative;
    left: 98px;
    bottom: -32px;
}
.text {
        display: inline-block;
    font-size: 2rem;
    font-weight: 600;
    line-height: 1.181;
    text-transform: uppercase;
    position: relative;
    top: 32px;
    left: -12px;
}
.shape-2{
    background-color: #f8f8f8;
    width: 100%;
    height: 120px;
    box-shadow: #ccc 0px 0px 9px;
  }
  .pad1{
    width: 100%;
    height: 5px;
  }
  .parallax-window {
    min-height: 400px;
    background: transparent;
}
.about11{
 position: relative;
 right: 30px;
}
.parallex1{
  text-align: center;color: #fff;
    transform: translateY(110%);
}

    </style>
    <script src="<?php echo base_url();?>source/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>source/js/parallax.min.js"></script>
    
</head>
<body>
<div class="animsition">  
  <div class="wrapper boxed">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>
<?php $this->load->view('include/menu');?>
<!-- Header -->
      <div id="header">

       
        <h1>Welcome To <span style="color: #ce0000;">K.A.S</span> Housing Pvt Ltd</h1>
        <p>
        Home of Quality Life of Style</p>
      </div>

    <div class="container-fluid">
        <div class="row about-pg">
           <!--  <div class="content-entry-image">
              <ul class="about">
                <li>A</li>
                <li>B</li>
                <li>O</li>
                <li>U</li>
                <li>T</li>
               
                </ul>
              </div> -->

              
            
              <div class="row">
                <div class="col-sm-6 col-lg-6 col-lg-offset-5 col-sm-offset-5 who-we col-md-6">
                  <h1 class="about11">WHO WE ARE</h1>
                  <div class="title-hr about12"></div>
                </div>
               
                <div class="col-sm-4 col-lg-4 col-md-4 col-lg-offset-0 col-sm-offset-0 mission">
                  <img alt="" class="img-responsive responsive-0022" src="<?php echo base_url();?>source/images/mission.png">
                   <div class="number number1">28</div>
                              <div class="text text1">Years<br>Working<br>Experience</div>
                </div>
                  <div class="col-sm-4 col-lg-4 col-md-4 whowe">
                    <p style="text-align: justify;">
                     K.A.S housing Pvt.Ltd,company has been founded by
                     Mr.K.Alagarsamy at 1990 by implementing and constructing
                     the indiviual residential villas and Commercial purpose
                     building with high level construction method with proper
                     alignment of labor and work quality with well-designed
                     aechitecture</p>
                     <p style="text-align: justify;">
                     His Next Generation make that basic level firm to
                     national standard management system by creating them as 
                     an Office sector Named "K.A.S housing" by his son and 
                     the successful managing Director of them firm
                     "Er.A.GaneshBabu".
                    </p>
                    <p style="text-align: justify;">
                      Wirh the sudden and tremendous growth of the company
                      by lots of projects have been signed and executed
                      successfully in short duration.
                      </p>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3 whowe1">
                    <p style="text-align: justify;">
                      On July "K.A.S Housing" company increase it quality 
                      in management system by make the company as
                      "K.A.s Housing Pvt.Ltd.</p>
                      <p style="text-align: justify;">
                      However the Management and Team have being increased
                      day by day our assurance forquality standard of our
                      construction always at highest level whenever new trends
                      have introducing to field it compete the circumstances.
                      </p>
                  </div>
              </div>
              <div class="col-sm-12 col-lg-12">
                <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>source/images/about.jpg">
                   <h1 class="parallex1">EVERYTHING IS DESIGNED, <br>BUT SOME THINGS ARE DESIGNED WELL...</h1>
              
                </div>
               
               </div>

              <!-- <div class="row">
                <div class="col-lg-4">
                  <img width="500" height="500" src="<?php //echo base_url(); ?>assets/BAI.jpg">
                </div>
                <div class="col-lg-4">
                  <img width="500" height="500" src="<?php //echo base_url(); ?>assets/iso.jpg">
                </div>
                <div class="col-lg-4">
                  <img width="500" height="500" src="<?php //echo base_url(); ?>assets/msme.jpg">
                </div>
              </div> -->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<style type="text/css">
  .gallery
{
    display: inline-block;
    margin-top: 20px;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>

<div class="container">
  <div class="row">
    <div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo base_url(); ?>assets/BAI.jpg">
                    <img class="img-responsive" alt="" src="<?php echo base_url(); ?>assets/BAI.jpg" />
                    <!-- <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> --> 
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo base_url(); ?>assets/iso.jpg">
                    <img class="img-responsive" alt="" src="<?php echo base_url(); ?>assets/iso.jpg" />
                    <!-- <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div>  -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo base_url(); ?>assets/msme.jpg">
                    <img class="img-responsive" alt="" src="<?php echo base_url(); ?>assets/msme.jpg" />
                    <!-- <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div>  -->
                </a>
            </div> <!-- col-6 / end -->
            
        </div> <!-- list-group / end -->
  </div> <!-- row / end -->
</div> <!-- container / end -->



           
                 <div class="col-sm-12 col-lg-12 pad1">
             </div>
              
              <section id="wrapper" class="skewed">
                <div class="layer bottom">
                    <div class="content-wrap">
                        <div class="content-body">
                        <h1>Our Mission</h1>
                        <p class="misvis">To be the pioneering & leading architectural construction
in Madurai known as a symbol of trust and integrity built
through our unmached quality work,timely project
completion & personalized server at compitative prices.</p>
                            
                            </div>
                            <img src="<?php echo base_url();?>source/images/001.png" alt="">
                        </div>
                         </div>
                         <div class="layer top">
                             <div class="content-wrap">
                                 <div class="content-body">
                                     <h1>Our Vision</h1>
                                     <p class="misvis"> To set new standards of ethics and excellence in delivering
                                      to our customers superior quality & value for money
                                      residential & commercial construction by employing a
                                      team of highly motivated and focused professional.</p>
                                 </div>
                                 <img src="<?php echo base_url();?>source/images/0005.png" alt="">
        
                             </div>
                         </div>
                         <div class="handle"></div>
            </section>
            

        </div>
      </div>
    <?php $this->load->view('include/footer');?>





