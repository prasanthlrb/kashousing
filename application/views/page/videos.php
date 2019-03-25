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
		
	
		
		foreach ($videos as $key => $id_no) {
		
		?>
<div class="col-md-4">
	<iframe src="https://player.vimeo.com/video/<?php echo $id_no->url?>?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="sketchfab_layout"></iframe>
	


 <div class="labelfab"><p><?php echo $id_no->name?></p></div>
</div>
<?php
		

		 }?>



	</div></div>

			<?php $this->load->view('include/footer');?>