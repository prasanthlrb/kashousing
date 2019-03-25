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
            <?php
            $projectname;
            $projectid;
            foreach ($project as $key => $project1) {
            	$projectname=$project1->name;
            	$projectid=$project1->id;
            }
            ?>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="width:50px;">#</th>
                <th style="width:0;">Project Name</th>
                <th style="width:0;">Main Category</th>
                <th style="width:0;">Sub Category</th>
                <th style="width:0;">Title</th>
                <th style="width:150px;">Action</th>
            </tr>
            </thead>
            
            <tbody>
            	<?php $x=0; foreach ($projectitem as $row) { $x++; ?>
            	<tr>
            		<td><?php echo $x; ?></td>
            		<td><?php echo $projectname; ?></td>
            		<td><?php
                        foreach ($maincat as $value) {
                        if($value->id == $row->maincat ){ ?>
                            <?php echo $value->cat; ?>
                        <?php }  } ?></td>
            		<td><?php
                        foreach ($subcat as $value) {
                        if($value->id == $row->subcat ){ ?>
                            <?php echo $value->subcat; ?>
                        <?php }  } ?></td>
            		<td><?php echo $row->title; ?></td>
            		<td>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="<?php echo base_url(); ?>Project/ProjectImage/<?php echo $row->id; ?>" >Add Images</a></li>
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
               <th style="width:0;">Project Name</th>
               <th style="width:0;">Main Category</th>
               <th style="width:0;">Sub Category</th>
               <th style="width:0;">Title</th>
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
                    <input type="hidden" value="<?php echo $projectid ?>" name="project_id" id="project_id" /> 

                    <div class="form-body">
                        
                        <div class="form-group">
                            <div class="col-md-6">
                    			<label>Main Category</label>
                                <select onchange="changeSubcat()" class="form-control" id="maincat" name="maincat">
                                    <option value="">SELECT</option>
                                    <?php foreach ($maincat as $key => $value) { ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->cat; ?></option>
                                    <?php } ?>
                                </select>
                			</div>
                			<div class="col-md-6">
                    			<label>Sub Category</label>
                                <select class="form-control" id="subcat" name="subcat">
                                    <option value="">SELECT</option>
                                    <?php foreach ($subcat as $key => $value) { ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->subcat; ?></option>
                                    <?php } ?>
                                </select>
                			</div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Title</label>
                                <input autocomplete="off" type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                        </div>

                        <div class="form-group">
                			<div class="col-md-12">
                    			<label>Description</label>
                    			<input autocomplete="off" type="text" class="form-control" id="des" name="des" placeholder="Description">
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



function changeSubcat()
{
	var id = $('#maincat').val();
	//alert(id);
$.ajax({        
    url : "<?php echo site_url('Project/ChangeSubCat')?>/" + id,
    type: "GET",
    success: function(data)
    {
        $('#subcat').html(data);
        //$('#modal_form').modal('show');
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
    $('.modal-title').text('Create Project'); // Set Title to Bootstrap modal title
}

function Edit(id)
{
    save_method = 'update';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    
    $.ajax({
        url : "<?php echo site_url('Project/EditProjectItem')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="project_id"]').val(data.project_id);
            $('[name="maincat"]').val(data.maincat);
            $('[name="subcat"]').val(data.subcat);
            $('[name="title"]').val(data.title);
            $('[name="des"]').val(data.des);
           
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
        url = "<?php echo site_url('Project/SaveProjectItem')?>";
    } else {
        url = "<?php echo site_url('Project/UpdateProjectItem')?>";
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
            url : "<?php echo site_url('Project/DeleteProjectItem')?>/"+id,
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
