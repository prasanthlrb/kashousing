<?php $this->load->view('admin/include/header');?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Our Facility
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Facility</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">


<style>
ul.gallery {
    clear: both;
    float: left;
    width: 100%;
    margin-bottom: -10px;
    padding-left: 3px;
}
ul.gallery li.item {
    width: 25%;
    height: 215px;
    display: block;
    float: left;
    margin: 0px 15px 15px 0px;
    font-size: 12px;
    font-weight: normal;
    background-color: d3d3d3;
    padding: 10px;
    box-shadow: 10px 10px 5px #888888;
}

.item img{width: 100%; height: 184px;}

.item p {
    color: #6c6c6c;
    letter-spacing: 1px;
    text-align: center;
    position: relative;
    margin: 5px 0px 0px 0px;
}
.remove_img{
    margin-top: -13px;
    margin-left: 132px;
    position: absolute;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
            </div>
            <form id="form" enctype="multipart/form-data" action="<?php echo base_url();?>Facility/Save" method="post">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Choose File</label>
                    <input type="file" class="form-control" name="pic" />
                    <input type="hidden" name="id" id="id">
                </div>
                <div class="form-group">
                    <label>Title 1</label>
                    <input required type="text" class="form-control" name="title1" id="title1" />
                </div>
                <div class="form-group">
                    <label>Title 2</label>
                    <input required type="text" class="form-control" name="title2" id="title2" />
                </div>
                
                <div class="form-group">
                    <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
                </div>
            </div>
            </form>
        </div>
        <style type="text/css">
            li.item{
                width: 40% !important;
                height: 40% !important;    
            }
            
        </style>
        <div class="col-lg-12">
       <div class="box">
            
            <!-- /.box-header -->
    <div class="box-body">
        <table id="draggable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Title 1</th>
                    <th>Title 2</th>
                   	<th>Image</th>
                    <th style="width:150px;">Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php $x=0; foreach ($facility as $key => $row) {  $x++; ?>
            <tr id="<?php echo $row->id ?>" class="ui-draggable ui-draggable-handle ui-sortable-handle">
            	<td><?php echo $row->position;; ?></td>
            	<td><?php echo $row->title1; ?></td>
            	<td><?php echo $row->title2; ?></td>
            	<td><img width="100" height="100" src="<?php echo $row->url; ?>"></td>
            	<td>

                    &nbsp;&nbsp;<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" onclick="Edit(<?php echo $row->id; ?>)" title="Edit">
    <i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a rel="tooltip" onclick="Delete(<?php echo $row->id; ?>)" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove" ><i class="fa fa-remove"></i>
    </a>

                <input type="hidden" value="<?php echo $row->id; ?>" id="item" name="item">
            </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            	<tr>
               		<th>S No</th>
                    <th>Title 1</th>
                    <th>Title 2</th>
                   	<th>Image</th>
                    <th style="width:150px;">Delete</th>
            	</tr>
            </tfoot>
        </table>
    </div>
            <!-- /.box-body -->
          </div>
        </div>



    </div>
</div>


<?php $this->load->view('admin/include/footer');?>
<script src="<?php echo base_url();?>assets/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-ui.min_1.js"></script>
<script>
  var $sortable = $( "#draggable > tbody" );
  $sortable.sortable({
      stop: function ( event, ui ) {
          var parameters = $sortable.sortable( "toArray" );
          $.post("<?php echo site_url('Facility/ChangeOrder')?>",{value:parameters},function(result){
              //alert(result);
              location.reload();
          });
      }
  });
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {

    //datatables
    // table = $('#draggable').DataTable({ 
    //     "order": [ 0, 'asc' ]
    // });

   
});

function Edit(id)
{

    $.ajax({
        url : "<?php echo site_url('Facility/Edit')?>/" + id,
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="title1"]').val(data.title1);
            $('[name="title2"]').val(data.title2);

            $('#form').attr('action', '<?php echo base_url();?>Facility/Update');
                     
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });

}

function Delete(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database

        $.ajax({
            url : "<?php echo site_url('Facility/Delete')?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                //$('#addModal').modal('hide');
                //reload_table();
            	location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}
</script>

        </section>
    </div>

