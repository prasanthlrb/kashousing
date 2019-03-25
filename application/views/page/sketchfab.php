<?php $this->load->view('include/header');?>
<script src="<?php echo base_url();?>source/js/jquery.min.js"></script>
<link href="<?php echo base_url();?>source/css/style.css" rel="stylesheet" media="screen">

 <script type="text/javascript" src="https://static.sketchfab.com/api/sketchfab-viewer-1.0.1.js"></script>
 <style type="text/css">
 	.sketchfab_layout{
 		height: 334px;
   
    box-shadow: #676767 7px 7px 12px;
 	}
 	.sketchfab_row{
 		    margin-top: 50px;
 	}
 	.labelfab {
    width: 100%;
    background-color: rgba(247, 247, 247, 0.82);
    box-shadow: #9d9d9d 10px 9px 41px;
    border-radius: 4px;
    height: 50px;
    position: relative;
    bottom: 10px;
}
.labelfab p {
    font-size: 20px;
    text-align: center;
    font-family: sans-serif;
    font-weight: 600;
    color: #524545;
}
.backto{
float: right;

}
  </style>
<div class="animsition">  
  <div class="wrapper boxed">

  	   
    <div class="click-capture"></div>
			<?php $this->load->view('include/menu');?>

<div class="container-fluid">
    <a class="btn btn-info backto" href="<?php echo base_url();?>Page/gallery">Back to Gallery</a>
	<div class="row sketchfab_row">



		
		<?php 
		$x = 1;
		foreach ($sketchfab as $key => $id_no) {
		
		?>
		<div class="col-md-4">
			
			 <iframe src="" id="api-frame<?php echo $x;?>" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" class="sketchfab_layout"></iframe>
			 <div class="labelfab"><p><?php echo $id_no->area;?></p></div>

			 <script>
    // Model

  $(document).on('ready', function() {



var model = '<?php echo $id_no->url;?>',




        // API version
        version = '1.0.0',

        // The iframe
        iframe = document.getElementById( 'api-frame<?php echo $x;?>' ),

        // The API client object
        client = new Sketchfab( version, iframe ),

        // The API object
        api,

        // Defining error and success outside initialization, for easy reading
        error = function () {
            console.error( 'Sketchfab API Error!' );
        },

        // If initilization succeeds, start the model immediately
        success = function( callback ) {
            api = callback;
            
            // Wait for viewer to be ready
            api.addEventListener( 'viewerready', function() {
                // Get the object nodes
                api.getNodeMap( function ( err, nodes ) {
                    if ( !err ) {
                        console.log( 'got nodes:', nodes );
                        for ( var prop in nodes ) {


                        }
                    }
                });
            });
        };

    // A function to load a model
    function loadModel( client, urlid ) {
        console.log( 'loading a model' );
        client.init( urlid, {
            success: success,
            error: error,
            internal: 1,
            autostart: 0,
            ui_infos: 0,
            ui_controls: 1,
            ui_stop: 1,
            watermark: 0,
            continuousRender: 0,
            supersample: 0
        });
    }

    loadModel( client, model );
});


</script>


		</div>
		<?php
		$x++;

		 }?>
	</div>
</div>

			    
    
			



  	<?php $this->load->view('include/footer');?>

  