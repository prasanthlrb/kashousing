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
table {
    height:700px;
    width: 100%;
    overflow:scroll;
    display:block;
    position: relative;
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
    <div class="col-md-12">
   		<form enctype="multipart/form-data" action="<?php echo base_url();?>Contact/CustomerImage/<?php echo $value->id; ?>" method="post">
            <div class="form-group">
                <label>Upload Images - File Size( Minimum 1 Mb )</label>
                <input required="" type="file" class="form-control" name="pic" id="pic" >
            </div>
            <div class="form-group">
                <input class="form-control" type="submit" value="UPLOAD">
            </div>
   		</form>
    </div>

<style>
img {
    border: 1px solid #3c8dbc;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}

/*.col-md-3 {
  position: relative;
  width: 100%;
  max-width: 200px;
}*/

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: red;
}

.col-md-3:hover .overlay {
  opacity: 1;
}

.icon {
  color: white;
  font-size: 100px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #eee;
}
</style>    
   	
   	<div class="col-md-12">
      <div class="row">
        <?php if(!empty($customerImage)): foreach($customerImage as $file): ?>
<div class="col-md-4">
  <img src="<?php echo base_url('uploads/client_image/'.$file->file_name); ?>" class="image">
  <div class="overlay">
    <a href="javascript:void(0)" onclick="CustomerImageDelete(<?php echo $file->id; ?>)" class="icon" title="Delete">
      <i class="fa fa-trash"></i>
    </a>
  </div>
</div>
        <?php endforeach; else: ?>
        <p>File(s) not found.....</p>
        <?php endif; ?>
      </div>
    </div>

</div>

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
  <?php $this->load->view('admin/include/footer');?>
<script type="text/javascript">
var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';

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

function CustomerImageDelete(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        $.ajax({
            url : "<?php echo site_url('Contact/CustomerImageDelete')?>/"+id,
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
$('.Contact').addClass('active');
</script>