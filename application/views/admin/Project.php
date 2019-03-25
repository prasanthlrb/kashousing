<?php $this->load->view('admin/include/header');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project Details
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <button class="btn btn-success" onclick="OpenModal()"><i class="glyphicon glyphicon-plus"></i> Create Project</button>
        <br />
        <br />
        <div class="row">
        <div class="col-xs-12">
       <div class="box">
            
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width:50px;">#</th>
                <th style="width:200px;">Project Name</th>
                <th style="width:400px;">Address</th>
                <th style="width:100px;">City</th>
                <th style="width:100px;">Pincode</th>
                <th style="width:150px;">Action</th>
            </tr>
            </thead>
            
            <tbody>
            	<?php $x=0; foreach ($project as $row) { $x++; ?>
            	<tr>
            		<td><?php echo $x; ?></td>
            		<td><?php echo $row->name; ?></td>
            		<td><?php echo $row->address; ?></td>
            		<td><?php echo $row->city; ?></td>
            		<td><?php echo $row->pincode; ?></td>
            		<td>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="<?php echo base_url(); ?>Project/ProjectItem/<?php echo $row->id; ?>" >Add More</a></li>
      <li><a href="javascript:void(0)" onclick="Edit(<?php echo $row->id; ?>)">Edit</a></li>
      <li><a href="javascript:void(0)" onclick="Delete(<?php echo $row->id; ?>)">Delete</a></li>
    </ul>
</div>
            		</td>
            	</tr>
            	<?php } ?>
            </tbody>

            <tfoot>
            <tr>
               <th style="width:50px;">#</th>
               <th style="width:200px;">Project Name</th>
               <th style="width:400px;">Address</th>
               <th style="width:100px;">City</th>
               <th style="width:100px;">Pincode</th>
               <th style="width:150px;">Action</th>
            </tr>
            </tfoot>
        </table>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


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
                    			<label>Project Name</label>
                    			<input autocomplete="off" type="text" class="form-control" id="name" name="name" placeholder="Name">
                			</div>
                			<div class="col-md-6">
                    			<label>Choose Client</label>
                                <select class="form-control" id="client_id" name="client_id">
                                    <option value="">SELECT</option>
                                    <?php foreach ($customer as $key => $value) { ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                    <?php } ?>
                                </select>
                			</div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Address</label>
                                <input autocomplete="off" type="address" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group">
                			<div class="col-md-4">
                    			<label>City</label>
                    			<input autocomplete="off" type="text" class="form-control" id="city" name="city" placeholder="City">
                			</div>
                            <div class="col-md-4">
                    			<label>State</label>
                    			<input autocomplete="off" type="text" class="form-control" id="state" name="state" placeholder="State">
                			</div>
                			<div class="col-md-4">
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

$(document).ready(function() {

    $('#table').DataTable({ });

});



function OpenModal()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Create Project'); // Set Title to Bootstrap modal title
}

function Edit(id)
{
    save_method = 'update';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    
    $.ajax({
        url : "<?php echo site_url('Project/Edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="name"]').val(data.name);
            $('[name="address"]').val(data.address);
            $('[name="city"]').val(data.city);
            $('[name="state"]').val(data.state);
            $('[name="pincode"]').val(data.pincode);
            $('[name="client_id"]').val(data.client_id);
           
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Project'); // Set title to Bootstrap modal title           
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
        url = "<?php echo site_url('Project/Save')?>";
    } else {
        url = "<?php echo site_url('Project/Update')?>";
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
            url : "<?php echo site_url('Project/Delete')?>/"+id,
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
$('.Projects').addClass('active');
</script>
