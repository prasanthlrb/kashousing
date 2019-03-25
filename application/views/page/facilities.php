<?php $this->load->view('include/header');?>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/facility/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>source/facility/css/style.css" />
<script type="text/javascript" src="<?php echo base_url();?>source/facility/js/modernizr.custom.11333.js"></script>
<link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>source/css/style.css" rel="stylesheet" media="screen">
		<style>
			body{
				    background: #f9f9f9 url(<?php echo base_url();?>source/images/facilities.jpg) no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: 30% 50%;
			}
		</style>
    </head>
    <body>
    	<?php $this->load->view('include/menu');?>


        <div class="container">
            
            <h1 style="text-align: center; margin-top: 120px; font-family: sans-serif;">K.A.S Housing Constrution Innovation</h1>
            <div id="ss-container" class="ss-container">
            <?php foreach ($fac as $row) { 
            	if ($row->position % 2 != 0) { ?>
                <div class="ss-row ss-large">
                    <div class="ss-left">
                        <a style="background-image:url('<?php echo $row->url; ?>');" href="#" class="ss-circle"></a>
                    </div>
                    <div class="ss-right">
                        <h3>
                            <span><?php echo $row->title1; ?></span>
                            <a href="#"><?php echo $row->title2; ?></a>
                        </h3>
                    </div>
                </div>
            <?php }
            else{ ?>
            	<div class="ss-row ss-large">
            		<div class="ss-left">
                        <h3>
                            <span><?php echo $row->title1; ?></span>
                            <a href="#"><?php echo $row->title2; ?></a>
                        </h3>
                    </div>
                    <div class="ss-right">
                        <a style="background-image:url('<?php echo $row->url; ?>');" href="#" class="ss-circle"></a>
                    </div>
                </div>
            <?php	
             } 
            } ?>
				
				
                
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>source/facility/js/jquery.easing.1.3.js"></script>

		<script src="<?php echo base_url();?>source/js/jquery.min.js"></script>
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
        <script type="text/javascript">
		$(function() {

			var $sidescroll	= (function() {
					
					// the row elements
				var $rows			= $('#ss-container > div.ss-row'),
					// we will cache the inviewport rows and the outside viewport rows
					$rowsViewport, $rowsOutViewport,
					// navigation menu links
					$links			= $('#ss-links > a'),
					// the window element
					$win			= $(window),
					// we will store the window sizes here
					winSize			= {},
					// used in the scroll setTimeout function
					anim			= false,
					// page scroll speed
					scollPageSpeed	= 2000 ,
					// page scroll easing
					scollPageEasing = 'easeInOutExpo',
					// perspective?
					hasPerspective	= true,
					
					perspective		= hasPerspective && Modernizr.csstransforms3d,
					// initialize function
					init			= function() {
						
						// get window sizes
						getWinSize();
						// initialize events
						initEvents();
						// define the inviewport selector
						defineViewport();
						// gets the elements that match the previous selector
						setViewportRows();
						// if perspective add css
						if( perspective ) {
							$rows.css({
								'-webkit-perspective'			: 600,
								'-webkit-perspective-origin'	: '50% 0%'
							});
						}
						// show the pointers for the inviewport rows
						$rowsViewport.find('a.ss-circle').addClass('ss-circle-deco');
						// set positions for each row
						placeRows();
						
					},
					// defines a selector that gathers the row elems that are initially visible.
					// the element is visible if its top is less than the window's height.
					// these elements will not be affected when scrolling the page.
					defineViewport	= function() {
					
						$.extend( $.expr[':'], {
						
							inviewport	: function ( el ) {
								if ( $(el).offset().top < winSize.height ) {
									return true;
								}
								return false;
							}
						
						});
					
					},
					// checks which rows are initially visible 
					setViewportRows	= function() {
						
						$rowsViewport 		= $rows.filter(':inviewport');
						$rowsOutViewport	= $rows.not( $rowsViewport )
						
					},
					// get window sizes
					getWinSize		= function() {
					
						winSize.width	= $win.width();
						winSize.height	= $win.height();
					
					},
					// initialize some events
					initEvents		= function() {
						
						// navigation menu links.
						// scroll to the respective section.
						$links.on( 'click.Scrolling', function( event ) {
							
							// scroll to the element that has id = menu's href
							$('html, body').stop().animate({
								scrollTop: $( $(this).attr('href') ).offset().top
							}, scollPageSpeed, scollPageEasing );
							
							return false;
						
						});
						
						$(window).on({
							// on window resize we need to redefine which rows are initially visible (this ones we will not animate).
							'resize.Scrolling' : function( event ) {
								
								// get the window sizes again
								getWinSize();
								// redefine which rows are initially visible (:inviewport)
								setViewportRows();
								// remove pointers for every row
								$rows.find('a.ss-circle').removeClass('ss-circle-deco');
								// show inviewport rows and respective pointers
								$rowsViewport.each( function() {
								
									$(this).find('div.ss-left')
										   .css({ left   : '0%' })
										   .end()
										   .find('div.ss-right')
										   .css({ right  : '0%' })
										   .end()
										   .find('a.ss-circle')
										   .addClass('ss-circle-deco');
								
								});
							
							},
							// when scrolling the page change the position of each row	
							'scroll.Scrolling' : function( event ) {
								
								// set a timeout to avoid that the 
								// placeRows function gets called on every scroll trigger
								if( anim ) return false;
								anim = true;
								setTimeout( function() {
									
									placeRows();
									anim = false;
									
								}, 10 );
							
							}
						});
					
					},
					// sets the position of the rows (left and right row elements).
					// Both of these elements will start with -50% for the left/right (not visible)
					// and this value should be 0% (final position) when the element is on the
					// center of the window.
					placeRows		= function() {
						
							// how much we scrolled so far
						var winscroll	= $win.scrollTop(),
							// the y value for the center of the screen
							winCenter	= winSize.height / 2 + winscroll;
						
						// for every row that is not inviewport
						$rowsOutViewport.each( function(i) {
							
							var $row	= $(this),
								// the left side element
								$rowL	= $row.find('div.ss-left'),
								// the right side element
								$rowR	= $row.find('div.ss-right'),
								// top value
								rowT	= $row.offset().top;
							
							// hide the row if it is under the viewport
							if( rowT > winSize.height + winscroll ) {
								
								if( perspective ) {
								
									$rowL.css({
										'-webkit-transform'	: 'translate3d(-75%, 0, 0) rotateY(-90deg) translate3d(-75%, 0, 0)',
										'opacity'			: 0
									});
									$rowR.css({
										'-webkit-transform'	: 'translate3d(75%, 0, 0) rotateY(90deg) translate3d(75%, 0, 0)',
										'opacity'			: 0
									});
								
								}
								else {
								
									$rowL.css({ left 		: '-50%' });
									$rowR.css({ right 		: '-50%' });
								
								}
								
							}
							// if not, the row should become visible (0% of left/right) as it gets closer to the center of the screen.
							else {
									
									// row's height
								var rowH	= $row.height(),
									// the value on each scrolling step will be proporcional to the distance from the center of the screen to its height
									factor 	= ( ( ( rowT + rowH / 2 ) - winCenter ) / ( winSize.height / 2 + rowH / 2 ) ),
									// value for the left / right of each side of the row.
									// 0% is the limit
									val		= Math.max( factor * 50, 0 );
									
								if( val <= 0 ) {
								
									// when 0% is reached show the pointer for that row
									if( !$row.data('pointer') ) {
									
										$row.data( 'pointer', true );
										$row.find('.ss-circle').addClass('ss-circle-deco');
									
									}
								
								}
								else {
									
									// the pointer should not be shown
									if( $row.data('pointer') ) {
										
										$row.data( 'pointer', false );
										$row.find('.ss-circle').removeClass('ss-circle-deco');
									
									}
									
								}
								
								// set calculated values
								if( perspective ) {
									
									var	t		= Math.max( factor * 75, 0 ),
										r		= Math.max( factor * 90, 0 ),
										o		= Math.min( Math.abs( factor - 1 ), 1 );
									
									$rowL.css({
										'-webkit-transform'	: 'translate3d(-' + t + '%, 0, 0) rotateY(-' + r + 'deg) translate3d(-' + t + '%, 0, 0)',
										'opacity'			: o
									});
									$rowR.css({
										'-webkit-transform'	: 'translate3d(' + t + '%, 0, 0) rotateY(' + r + 'deg) translate3d(' + t + '%, 0, 0)',
										'opacity'			: o
									});
								
								}
								else {
									
									$rowL.css({ left 	: - val + '%' });
									$rowR.css({ right 	: - val + '%' });
									
								}
								
							}	
						
						});
					
					};
				
				return { init : init };
			
			})();
			
			$sidescroll.init();
			
		});
		</script>

   
    </body>
</html>