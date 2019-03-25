<?php $this->load->view('admin/include/header');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <button class="btn btn-success" onclick="add_user()"><i class="glyphicon glyphicon-plus"></i> Add-Client</button>
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
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email-Id</th>
                    <th>Address</th>
                    
                    <th style="width:150px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                    <th>S No</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email-Id</th>
                    <th>Address</th>
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
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="name" placeholder="Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="control-label col-md-3">User Name</label>
                            <div class="col-md-9">
                                <input autocomplete="off" name="user" placeholder="User Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div> -->
                       <!-- <div class="form-group">
  <label>Check Username:</label>
  <input name="username" type="text" id="username" class="demoInputBox" onBlur="checkAvailability()"><img  width="30px" height="30px" src="http://localhost/kas1/ajax-loader.gif" id="loaderIcon" style="display:none" /><span id="user-availability-status"></span>    
</div> -->
                        <div class="form-group">
                            <label class="control-label col-md-3">Mobile</label>
                            <div class="col-md-7">
                            <input autocomplete="off" name="mobile" type="text" class="form-control" id="mobile" onBlur="checkAvailability()">
                            </div>
                            <div class="col-md-2">
                            <img  width="30px" height="30px" src="<?php echo base_url() ?>ajax-loader.gif" id="loaderIcon" style="display:none" />
                            <span id="user-availability-status"></span>
                            <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input required="" name="pass" placeholder="Password" class="form-control my-password" type="password">
                                
                                <input type="checkbox" class="showPassword" />Show Password
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">EMail Id</label>
                            <div class="col-md-9">
                                <input name="email" placeholder="Email Id" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="address"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                       

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
  <?php $this->load->view('admin/include/footer');?>
<script type="text/javascript">




function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "<?php echo site_url('Client/check_user')?>",
data:'mobile='+$("#mobile").val(),
type: "POST",
success:function(data){
if(data == "Available")
{
$('#user-availability-status').html('<img class="user-availability-status" width="30px" height="30px" src="<?php echo base_url() ?>available.png" />');
$("#mobile").find('.text-danger').remove();
$('#mobile').closest('.form-group').addClass('has-success');
//$("#user-availability-status").html(data);
$("#loaderIcon").hide();
$("#btnSave").prop("disabled",false);
}
else if(data == "Not Available")
{
$('#user-availability-status').html('<img class="user-availability-status" width="30px" height="30px" src="<?php echo base_url() ?>not-available.png" />');
//$("#mobile").after('<p class="text-danger"> Already Exists </p>');
$('#mobile').closest('.form-group').addClass('has-error');
$("#mobile").focus();
$("#loaderIcon").hide();
$("#btnSave").prop("disabled",true);
}
},
error:function (){}
});
}



    $('.showPassword').on('change',function(){
          var isChecked = $(this).prop('checked');
          if (isChecked) {
            $('.my-password').attr('type','text');
          } else {
            $('.my-password').attr('type','Password');
          }
        });

var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Client/sketchfab_view')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -2 ], //2 last column (photo)
                "orderable": false, //set not orderable
            },
        ],

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
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

});



function add_user()
{
    $("#btnSave").prop("disabled",false);
    $(".text-danger").remove();
    $(".user-availability-status").remove();
    // remove the form error
    $('.form-group').removeClass('has-error').removeClass('has-success');

    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add-Client'); // Set Title to Bootstrap modal title

   
}

function sketchfab_edit(id)
{
    save_method = 'update';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    

   
    $.ajax({
        url : "<?php echo site_url('Client/sketchfab_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="id"]').val(data.id);
            $('[name="name"]').val(data.name);
            //$('[name="user"]').val(data.user);
            $('[name="pass"]').val(data.pass);
            $('[name="mobile"]').val(data.mobile);
            $('[name="email"]').val(data.email);
            $('[name="address"]').val(data.address);
            
           
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit-Client'); // Set title to Bootstrap modal title

          

           
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}


function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('Client/create_sketchfab')?>";
    } else {
        url = "<?php echo site_url('Client/update_sketchfab')?>";
    }

    // ajax adding data to database

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

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_sketchfab(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Client/delete_sketchfab')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}
$('.users-st').addClass('active');
</script>