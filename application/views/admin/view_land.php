<?php $this->load->view('admin/include/header');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Land_Properties
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View_Land_Properties</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <button class="btn btn-success" onclick="add_user()"><i class="glyphicon glyphicon-plus"></i> Add-Properties</button>
        <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
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
                    <th>S No</th>
                    <th>Land-ID</th>
                    <th>Land-Area</th>
                    
                    <th style="width:150px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
               <th>S No</th>
                    <th>Land-ID</th>
                    <th>Land-Area</th>
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



  <?php $this->load->view('admin/include/footer');?>
<script type="text/javascript">

var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Property/land_property')?>",
            'order': []   
        },

    });

    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

    //set input/textarea/select event when change value, remove class error and remove text help block 
    // $("input").change(function(){
    //     $(this).parent().parent().removeClass('has-error');
    //     $(this).next().empty();
    // });
    // $("textarea").change(function(){
    //     $(this).parent().parent().removeClass('has-error');
    //     $(this).next().empty();
    // });
    // $("select").change(function(){
    //     $(this).parent().parent().removeClass('has-error');
    //     $(this).next().empty();
    // });

});



function add_user()
{
       window.location.href = "<?php echo site_url('Property/view_submit'); ?>";
}


function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}


function delete_land(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Property/delete_land')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                // $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}
</script>