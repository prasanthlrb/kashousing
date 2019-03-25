<?php $this->load->view('admin/include/header');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       View Payment
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Payment</li>
      </ol>
    </section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">

<!-- <ol class="dropdown pull-left">
    <a style="font-weight: bold;font-size: 18px;margin-left: -35px;" class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">ShowAll <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Client</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Customer</a></li>
    </ul>
</ol> -->
<!-- <select onchange="Fliter()" style="font-weight: bold;font-size: 18px;" id="flitId" name="flitId" class="pull-left">
  <option>ShowAll</option>
  <option>Client</option>
  <option>Customer</option>
</select>
<button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i></button> -->
            </div>
    <div id="flittertable" class="box-body">
              
        <!-- The timeline -->
        <ul class="timeline timeline-inverse">
            
            <!-- timeline item -->
            <li class="time-label">
                <span class="bg-blue">
                    1 Milestone = Total Payment is 100000
              	</span>
            </li>
            <li>
                <i class="fa fa-money bg-green"></i>
                <div class="timeline-item">
                  	<!-- <span class="time"><i class="fa fa-clock-o"></i> 12:05</span> -->
                  	<h3 class="timeline-header"><a href="#">Paid</a> </h3>
                  	<div class="timeline-body">
                    	<h5 class="timeline-header no-border"><i class="fa fa-calendar"> 01-05-2018</i> Payment is 10000 <a href="#">Check</a> Check Number 2364 Collection Date 02-05-2018
                  		</h5>
                  	</div>
                  	<!-- <div class="timeline-footer">
                    	<a class="btn btn-primary btn-xs">Read more</a>
                    	<a class="btn btn-danger btn-xs">Delete</a>
                  	</div> -->
                </div>
            </li>
            <li>
                <i class="fa fa-money bg-green"></i>
                <div class="timeline-item">
                  	<!-- <span class="time"><i class="fa fa-clock-o"></i> 12:05</span> -->
                  	<h3 class="timeline-header"><a href="#">Paid</a> </h3>
                  	<div class="timeline-body">
                    	<h5 class="timeline-header no-border"><i class="fa fa-calendar"> 01-05-2018</i> Payment is 10000 <a href="#">Check</a> Check Number 2364 Collection Date 02-05-2018
                  		</h5>
                  	</div>
                  	<!-- <div class="timeline-footer">
                    	<a class="btn btn-primary btn-xs">Read more</a>
                    	<a class="btn btn-danger btn-xs">Delete</a>
                  	</div> -->
                </div>
            </li>
            <li>
                <i class="fa fa-money bg-red"></i>
                <div class="timeline-item">
                  	<!-- <span class="time"><i class="fa fa-clock-o"></i> 12:05</span> -->
                  	<h3 class="timeline-header"><a href="#">Balance</a> </h3>
                  	<div class="timeline-body">
                    	<h5 class="timeline-header no-border"><i class="fa fa-calendar"> 01-05-2018</i> Payment is 10000 <a href="#">Check</a> Check Number 2364 Collection Date 02-05-2018
                  		</h5>
                  	</div>
                  	<!-- <div class="timeline-footer">
                    	<a class="btn btn-primary btn-xs">Read more</a>
                    	<a class="btn btn-danger btn-xs">Delete</a>
                  	</div> -->
                </div>
            </li>
            <!-- END timeline item -->

            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-blue">
                    2 Milestone
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-blue">
                    3 Milestone
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-blue">
                    4 Milestone
                </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline time label -->
            <li class="time-label">
                <span class="bg-blue">
                    5 Milestone
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

        </div>
    </div>
</div>
</section>

        
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
                                <label>Milstone Name</label>
                                <input readonly autocomplete="off" type="text" class="form-control" id="milestone" name="milestone" placeholder="Milstone Name">
                            </div>
                            <div class="col-md-6">
                                <label>Total Payment</label>
                                <input readonly autocomplete="off" type="text" class="form-control" id="total" name="total" placeholder="Total Payment">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Paid Payment</label>
                                <input readonly autocomplete="off" type="text" class="form-control" id="payment" name="payment" placeholder="Paid Payment">
                            </div>
                            <div class="col-md-6">
                                <label>Mode</label>
                                <select class="form-control" name="mode" id="mode">
                                	<option>Cash</option>
                                	<option>Check</option>
                                	<option>Bank</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Details</label>
                                <input autocomplete="off" type="text" class="form-control" id="details" name="details" placeholder="Details">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Pay</label>
                                <input autocomplete="off" type="text" class="form-control" id="pay" name="pay" placeholder="Pay">
                            </div>
                            <div class="col-md-6">
                                <label>Balance</label>
                                <input autocomplete="off" type="text" class="form-control" id="balance" name="balance" placeholder="Balance">
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

  <?php $this->load->view('admin/include/footer');?>
<script type="text/javascript">
var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';


  // $('#table').DataTable({ 
  //   "ajax": {
  //     "url": "<?php //echo site_url('Contact/ContactAjax')?>/",
  //     'order': []   
  //   },
  // });

function Fliter()
{
  var id = $('#flitId').val();
  //alert(id);  
  $.ajax({        
    url : "<?php echo site_url('Contact/FlitterContact')?>/" + id,
    type: "GET",
    success: function(data)
    {
      $('#flittertable').html(data);
    }
  });
}

function OpenModal()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Pay'); // Set Title to Bootstrap modal title
}

function Edit(id)
{
    save_method = 'update';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    
    $.ajax({
        url : "<?php echo site_url('Contact/Edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="name"]').val(data.name);
            $('[name="mobile"]').val(data.mobile);
            $('[name="email"]').val(data.email);
            $('[name="status"]').val(data.status);
            $('[name="pass"]').val(data.pass);
            $('[name="address"]').val(data.address);
            $('[name="city"]').val(data.city);
            $('[name="state"]').val(data.state);
            $('[name="pincode"]').val(data.pincode);
           
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Conatct'); // Set title to Bootstrap modal title           
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
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

function Delete(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        $.ajax({
            url : "<?php echo site_url('Contact/Delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                $('#modal_form').modal('hide');
                location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
    }
}
$('.Projects-sb').addClass('open active');
$('.Pay').addClass('active');
</script>