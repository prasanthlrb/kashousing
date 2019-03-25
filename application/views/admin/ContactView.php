<?php $this->load->view('admin/include/header');?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Details
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contact</li>
      </ol>
    </section>

<!-- Main content -->
<section class="content container-fluid">

<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
<!-- <ol class="dropdown pull-left">
    <a style="font-weight: bold;font-size: 18px;margin-left: -35px;" class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">Show All <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Client</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Customer</a></li>
    </ul>
</ol> -->
<select onchange="Fliter()" style="font-weight: bold;font-size: 18px;" id="flitId" name="flitId" class="pull-left">
  <option>ShowAll</option>
  <option>Client</option>
  <option>Customer</option>
</select>
<style type="text/css">
#example {
    height:800px;
    width: 350px;
    overflow:scroll;
    display:block;
}
</style>
<button style="margin-left: 150px;" type="button" onclick="OpenModal()" class="btn btn-default pull-left"><i class="fa fa-plus"></i></button>
            </div>
		<div class="box-body ">
        <div id="flittertable" class="col-md-3">      
            <table id="example" class="table border table-hover">
            	<tr>
            		  <th>Name</th>
            	</tr>
              <?php $x=0; foreach ($contact as $row) { $x++; 
              if($row->status == "Customer"){ ?>
              <tr>
                  <th><a href="<?php echo base_url(); ?>Contact/ContactView1/<?php echo $row->id; ?>" ><?php echo $row->name; ?></a></th>
              </tr>
              <?php }else{ ?>
                <tr>
                   <th><a href="<?php echo base_url(); ?>Contact/ContactView/<?php echo $row->id; ?>" ><?php echo $row->name; ?></a></th>
                </tr>
              <?php } } ?>
            </table>
        </div> 
<div class="col-md-9">     

<div class="row">
<?php foreach ($contactid as $value) { ?>
    <div class="col-md-3">
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<strong><i class="fa fa-user margin-r-5"></i> Name</strong>

              <p class="text-muted">
                <?php echo $value->name; ?>
              </p>
              <hr>
              <strong><i class="fa fa-mobile margin-r-5"></i> Mobile</strong>

              <p class="text-muted">
                <?php echo $value->mobile; ?>
              </p>

              <hr>
              <strong><i class="fa fa-envelope margin-r-5"></i> Email ID</strong>

              <p class="text-muted">
                <?php echo $value->email; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php echo $value->address; ?> , <?php echo $value->city; ?> , <?php echo $value->pincode; ?> , <?php echo $value->state; ?></p>

              <hr>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
    <!-- /.col -->
 <?php } ?>   
<div class="col-md-9">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#timeline" data-toggle="tab">OverView</a></li>
            <li><a href="#project" data-toggle="tab">Project</a></li>
            <li><a href="#comments" data-toggle="tab">Comments</a></li>
            <li><a href="#uploads" data-toggle="tab">File Upload</a></li>
        </ul>
<div class="tab-content">
    <!-- /.tab-pane -->
    <div class="active tab-pane" id="timeline">

<div class="row">

<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
        <div class="info-box-content">
        	<span class="info-box-text">Total <br>Value</span>
        	<span class="info-box-number">5,200</span>
        	<!-- <div class="progress">
        		<div class="progress-bar" style="width: 50%"></div>
        	</div>
        	<span class="progress-description">
            	50% Increase in 30 Days
        	</span> -->
    	</div>
    </div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-red">
        <span class="info-box-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
        <div class="info-box-content">
        	<span class="info-box-text">Paid</span>
        	<span class="info-box-number">5,200</span>
        	<!-- <div class="progress">
        		<div class="progress-bar" style="width: 50%"></div>
        	</div>
        	<span class="progress-description">
            	50% Increase in 30 Days
        	</span> -->
    	</div>
    </div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
        <div class="info-box-content">
        	<span class="info-box-text">Balance</span>
        	<span class="info-box-number">5,200</span>
        	<!-- <div class="progress">
        		<div class="progress-bar" style="width: 50%"></div>
        	</div>
        	<span class="progress-description">
            	50% Increase in 30 Days
        	</span> -->
    	</div>
    </div>
</div>

</div>


        <!-- The timeline -->
        <ul class="timeline timeline-inverse">
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-red">
                    10 Feb. 2014
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  	<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                  	<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                  	<div class="timeline-body">
                    	Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                    	weebly ning heekya handango imeem plugg dopplr jibjab, movity
                    	jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                    	quora plaxo ideeli hulu weebly balihoo...
                  	</div>
                  	<div class="timeline-footer">
                    	<a class="btn btn-primary btn-xs">Read more</a>
                    	<a class="btn btn-danger btn-xs">Delete</a>
                  	</div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li class="time-label">
                <span class="bg-red">
                    10 Feb. 2014
              	</span>
            </li>
            <li>
                <i class="fa fa-user bg-aqua"></i>
                <div class="timeline-item">
                  	<span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                  	<h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                  	</h3>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-comments bg-yellow"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                    <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                   	</div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-green">
                  3 Jan. 2014
                </span>
            </li>
            <!-- /.timeline-label -->
                 
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>
    </div>
    <!-- /.tab-pane -->
<style>

.dropdown-submenu {
  border-bottom: 1px solid #ccc;
}
#mn-wrapper {
  display: table;
  width: 100%;
  position: absolute;
  height: 100%;
}
.mn-sidebar {
  display: table-cell;
  position: relative;
  vertical-align: top;
  padding-bottom: 49px;
  background: #e6e6e6;
  width: 700px;
  z-index: 2;
  color: #fff !important;
}
#mn-cont {
  display: table-cell;
  vertical-align: top;     
  position: relative;
  padding: 0;
}
.container {
  margin-right: auto;
}
.cnt-mcont {
  background-color: #F6F6F6;
  color: inherit;
  font-size: 13px;
  font-weight: 200;
  line-height: 21px;
  padding: 15px 30px 30px 30px;
  margin-top: 0;
  height: 101vh;
  color: #fff !important;
}
.mn-sidebar .mn-toggle {
  display: none;
  padding: 10px 0;
  text-align: center;
  cursor: pointer;
}
.mn-vnavigation {
  margin: 0 0 0 0;
  padding: 0;
  border-top: 1px solid #999;
  border-bottom: 1px solid #999;
  color: #fff !important;
}
.mn-vnavigation li a {
  border-top: 1px solid #999;
  border-bottom: 1px solid #999;
  display: block;
  padding: 14px 18px 13px 15px;
  color: #000 !important;
  text-decoration: none;
  font-size: 12px;
  font-weight: bold;
/*  text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.3);*/
  white-space: nowrap;
  background-color: #fff !important;
}
.menu-button {
    background:none!important;
    color:inherit;
    border:none; 
    padding:0!important;
    font: inherit;
    /*border is optional*/
    border-bottom:1px solid #444; 
    cursor: pointer;
}
</style>

<div class="tab-pane" id="project">
  <ul id="draggable" class="sidebar-menu mn-vnavigation " data-widget="tree">
    <li class="treeview">
        <a style="color: #000 !important" href="#">
          <i class="fa fa-folder-open"></i> <span>Category</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
            <li class="">
                <a href="#">
                    <i class="fa fa-folder-open"></i> Sub Category 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
                    <li>
                        <a href="#">
                          <table style="width: 100%">
                            <tr>
                              <td style="width: 35%">Item</td>
                              <td style="width: 35%">Days Hours</td>
                              <td style="width: 15%"><i class="fa fa-history"></i></td>
                              <td style="width: 15%">
                                <button onclick="AddProjectDetail()" style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-plus"></i></button>
                              </td>
                            </tr>
                          </table>
                        </a>
                    </li>
                    <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li> -->
                </ul>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a style="color: #000 !important" href="#">
          <i class="fa fa-folder-open"></i> <span>Category</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
            <li class="">
                <a href="#">
                    <i class="fa fa-folder-open"></i> Sub Category 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
                    <li>
                        <a href="#">
                          <table style="width: 100%">
                            <tr>
                              <td style="width: 35%">Item</td>
                              <td style="width: 35%">Days Hours</td>
                              <td style="width: 15%"><i class="fa fa-history"></i></td>
                              <td style="width: 15%">
                                <button onclick="AddProjectDetail()" style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-plus"></i></button>
                              </td>
                            </tr>
                          </table>
                        </a>
                    </li>
                    <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li> -->
                </ul>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a style="color: #000 !important" href="#">
          <i class="fa fa-folder-open"></i> <span>Category</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
            <li class="">
                <a href="#">
                    <i class="fa fa-folder-open"></i> Sub Category 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
                    <li>
                        <a href="#">
                          <table style="width: 100%">
                            <tr>
                              <td style="width: 35%">Item</td>
                              <td style="width: 35%">Days Hours</td>
                              <td style="width: 15%"><i class="fa fa-history"></i></td>
                              <td style="width: 15%">
                                <button onclick="AddProjectDetail()" style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-plus"></i></button>
                              </td>
                            </tr>
                          </table>
                        </a>
                    </li>
                    <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li> -->
                </ul>
            </li>
        </ul>
    </li>

</ul>
</div>
        <div class="tab-pane" id="comments">
            <form class="form-horizontal">
                <div class="form-group">

                    <div class="col-sm-12">
                      <textarea name="comment" id="comment" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 pull-right">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </div>
          </form>
        </div>

<style>
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
</style>
        <div class="tab-pane" id="uploads">
                
            	<div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Direct Chat</h3>

                  <!-- <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages">3</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                      <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <!-- <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image"> -->
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <!-- <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image"> -->
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        You better believe it!
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <!-- <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image"> -->
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                      	<img src="https://farm9.staticflickr.com/8581/16483335217_7f984bd881_b.jpg" alt="">
                        Working with AdminLTE on a great new app! Wanna join?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <!-- <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt=""> -->
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                      	<img src="http://kashousing.com/uploads/prop_view/1518501171photo_2018-02-12_18-47-29.jpg" alt="">
                        I would love to.
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                  </div>
                  <!--/.direct-chat-messages-->

                  
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer" style="">
                  <form action="#" method="post">
                    <div class="form-group">
                    	<div class="col-md-5">
                    		<input type="file" name="pic" class="form-control">
                    	</div>
                    	<div class="col-md-5">
                    		<input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    	</div>
                      	
                      	<span class="input-group-btn">
                          	<button type="button" class="btn btn-warning btn-flat">Send</button>
                        </span>
                    </div>
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>


        </div>

          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->



</div>   
        </div>

        </div>
    </div>
</div>




</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id" id="id" /> 

                    <div class="form-body">
                        
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input autocomplete="off" type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <label>Mobile</label>
                                <input autocomplete="off" type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Client or Customer</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="">SELECT</option>
                                    <option>Client</option>
                                    <option>Customer</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>  <input type="checkbox" onchange="document.getElementById('pass').type = this.checked ? 'text' : 'password'"> Show password
                                <input autocomplete="off" type="password" class="form-control" id="pass" name="pass" placeholder="Password">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Email Id</label>
                                <input autocomplete="off" type="email" class="form-control" id="email" name="email" placeholder="Email Id">
                            </div>
                            <div class="col-md-6">
                                <label>City</label>
                                <input autocomplete="off" type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Address</label>
                                <input autocomplete="off" type="address" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label>State</label>
                                <input autocomplete="off" type="text" class="form-control" id="state" name="state" placeholder="State">
                            </div>
                            <div class="col-md-6">
                                <label>Pincode</label>
                                <input autocomplete="off" type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="Save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


<!-- Bootstrap modal -->
<div class="modal fade" id="ProjectModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="uploadform" class="form-horizontal">
                    <input type="hidden" value="" name="id" id="id" /> 

                    <div class="form-body">
                        
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Title</label>
                                <input autocomplete="off" type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                            <div class="col-md-6">
                                <label>Description</label>
                                <input autocomplete="off" type="text" class="form-control" id="des" name="des" placeholder="Description">
                            </div>
                        </div>


                    <div class="form-group">
                      <div class="col-md-12">
                        <label>File</label>
                          <input autocomplete="off" type="file" class="form-control" id="files" name="files" placeholder="File">
                      </div>
                    </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="UploadProjectFiles()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

  <?php $this->load->view('admin/include/footer');?>

<script>
$.sidebarMenu = function(menu) {
  var animationSpeed = 500;
  
  $(menu).on('click', 'li a', function(e) {
    var $this = $(this);
    var checkElement = $this.next();

    if (checkElement.is('.treeview-menu') && checkElement.is(':visible')) {
      checkElement.slideUp(animationSpeed, function() {
        checkElement.removeClass('menu-open');
      });
      checkElement.parent("li").removeClass("active");
    }

    //If the menu is not visible
    else if ((checkElement.is('.treeview-menu')) && (!checkElement.is(':visible'))) {
      //Get the parent menu
      var parent = $this.parents('ul').first();
      //Close all open menus within the parent
      var ul = parent.find('ul:visible').slideUp(animationSpeed);
      //Remove the menu-open class from the parent
      ul.removeClass('menu-open');
      //Get the parent li
      var parent_li = $this.parent("li");

      //Open the target menu and add the menu-open class
      checkElement.slideDown(animationSpeed, function() {
        //Add the class active to the parent li
        checkElement.addClass('menu-open');
        parent.find('li.active').removeClass('active');
        parent_li.addClass('active');
      });
    }
    //if this isn't a link, prevent the page from being redirected
    if (checkElement.is('.treeview-menu')) {
      e.preventDefault();
    }
  });
}

</script>
<script>
    $.sidebarMenu($('.sidebar-menu'))
</script>

<script type="text/javascript">
var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';

function AddProjectDetail()
{
    save_method = 'add';
    $('#uploadform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#ProjectModal').modal('show'); // show bootstrap modal
    $('.modal-title').text('Upload Document'); // Set Title to Bootstrap modal title
}

function OpenModal()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Create Conatct'); // Set Title to Bootstrap modal title
}

function Fliter()
{
  var id = $('#flitId').val();
  //alert(id);  
  $.ajax({        
    url : "<?php echo site_url('Contact/FlitterContactView')?>/" + id,
    type: "GET",
    success: function(data)
    {
      $('#flittertable').html(data);
    }
  });
}

function Save()
{
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('Contact/Save')?>";
    } else {
        url = "<?php echo site_url('Contact/Update')?>";
    }

    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {
            $('#modal_form').modal('hide');
            alert(data);
            location.reload();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
    });
}


$('.Projects-sb').addClass('open active');
$('.Contact').addClass('active');
</script>