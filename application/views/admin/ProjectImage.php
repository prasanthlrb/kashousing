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

        <button class="btn btn-success" onclick="OpenModal()"><i class="glyphicon glyphicon-plus"></i> Upload Image</button>
        <br />
        <br />
<div class="row">
<div class="col-xs-12">
 	<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
 
		<div class="timeline-item">
<style>
.col-md-3 {
  position: relative;
  width: 100%;
  max-width: 200px;
}

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
        <h3 class="timeline-header"><!-- <a href="#">Mina Lee</a> --> View Uploaded Photos</h3>

            <div class="timeline-body">
            <?php foreach ($image as $key => $row) { ?>

<div class="col-md-3">
  <img src="<?php echo base_url(); ?>projectimages/<?php echo $row->url; ?>" class="image">
  <div class="overlay">
    <a href="javascript:void(0)" onclick="Delete(<?php echo $row->id; ?>)" class="icon" title="Delete">
      <i class="fa fa-trash"></i>
    </a>
  </div>
</div>

            <?php } ?>

            </div>
        </div>



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
                <form  enctype="multipart/form-data" action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id" /> 

                    <div class="form-body">
                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Images</label>
                                <input autocomplete="off" type="file" class="form-control" id="pic" name="pic">
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

// $(document).ready(function() {

//     $('#table').DataTable({ });

// });

function OpenModal()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Upload Image'); // Set Title to Bootstrap modal title
}


function Save()
{
    var url;

    // if(save_method == 'add') {
    //     url = "<?php// echo site_url('Project/SaveProjectImage')?>";
    // } else {
    //     url = "<?php// echo site_url('Project/UpdateProjectItem')?>";
    // }
    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : "<?php echo site_url('Project/SaveProjectImage')?>",
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
            url : "<?php echo site_url('Project/DeleteProjectImage')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //$('#modal_form').modal('hide');
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
