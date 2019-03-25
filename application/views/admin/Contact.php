<?php $this->load->view('admin/include/header');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact
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
    <a style="font-weight: bold;font-size: 18px;margin-left: -35px;" class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">ShowAll <span class="caret"></span></a>
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
<button type="button" onclick="OpenModal()" class="btn btn-default pull-right"><i class="fa fa-plus"></i></button>
            </div>
    <div id="flittertable" class="box-body">
              
        <table id="table" class="table table-hover">
            <thead>
            <tr>
              <th style="width:5%;">#</th>
              <th style="width:30%;">Name</th>
              <th style="width:25%;">Mobile</th>
              <th style="width:30%;">Email ID</th>
              <th style="width:10%;">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $x=0; foreach ($contact as $row) { $x++;  ?>
            <tr>
              <td><?php echo $x; ?></td>
              <?php if($row->status == "Customer"){ ?>
              <td><a href="<?php echo base_url(); ?>Contact/ContactView1/<?php echo $row->id; ?>" ><?php echo $row->name; ?></a></td>
              <?php }else{ ?>
              <td><a href="<?php echo base_url(); ?>Contact/ContactView/<?php echo $row->id; ?>" ><?php echo $row->name; ?></a></td>
              <?php } ?>
              <td><?php echo $row->mobile; ?></td>
              <td><?php echo $row->email; ?></td>
              <td>
 <div class="dropdown">
     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
     <span class="caret"></span></button>
     <ul class="dropdown-menu">
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
                <th style="width:5%;">#</th>
                <th style="width:30%;">Name</th>
                <th style="width:25%;">Mobile</th>
                <th style="width:30%;">Email ID</th>
                <th style="width:10%;">Action</th>
            </tr>
            </tfoot>
        </table>
            
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
    $('.modal-title').text('Create Conatct'); // Set Title to Bootstrap modal title
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
$('.Contact').addClass('active');
</script>