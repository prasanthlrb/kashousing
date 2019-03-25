<?php $this->load->view('admin/include/header');?>
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

<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Project Details</h3>
            </div>
            <div class="box-body">

                    <div class="form-body">
                        
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Project Name</label>
                                <input autocomplete="off" type="text" class="form-control" id="name" name="name" placeholder="Project Name">
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
                            <div class="col-md-6">
                                <label>Day's Hour</label>
                                <input autocomplete="off" type="text" class="form-control" id="dayhours" name="dayhours" placeholder="Day Hours">
                            </div>
                            <div class="col-md-6">
                                <label>Project Value</label>
                                <input autocomplete="off" type="text" class="form-control" id="value" name="value" placeholder="Project Value">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>MilesStone</label>
                                <input autocomplete="off" type="text" class="form-control" id="miles" name="miles" placeholder="MilesStone">
                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-4">
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Process Table</h3>
            </div>
            <form id="CartForm" action="#" method="POST">
            <div class="box-body">

                <div class="form-body">
                        
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Name</label>
                            <input autocomplete="off" type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Parent</label>
                            <select class="form-control" name="parent" id="parent">
                                <option value="0">SELECT</option>
                                <option value="1">Sample 1</option>
                                <option value="2">Sample 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Display</label>
                            <select class="form-control" name="display" id="display">
                                <option value="0">SELECT</option>
                                <option value="1">Category</option>
                                <option value="2">Process</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Working Duration</label>
                        </div>
                        <div class="col-md-4">
                            <label>Month</label>
                            <select class="form-control" name="month" id="month">
                                <option value="">SELECT</option>
                                <?php for ($i=1; $i < 13; $i++) { ?>
                                <option><?php echo $i; ?></option>   
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Days</label>
                            <select class="form-control" name="days" id="days">
                                <option value="">SELECT</option>
                                <?php for ($i=1; $i < 31; $i++) { ?>
                                    <option><?php echo $i; ?></option>   
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Hours</label>
                            <select class="form-control" name="hours" id="month">
                                <option value="">SELECT</option>
                                <?php for ($i=1; $i < 31; $i++) { ?>
                                <option><?php echo $i; ?></option>   
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label><input type="checkbox" onchange="document.getElementById('payment').readonly = this.checked ? 'true' : 'false'"> MilesStone</label>
                        </div>
                        <div class="col-md-12">
                            <label>Payment</label>
                            <input readonly="true" autocomplete="off" type="text" class="form-control" id="payment" name="payment" placeholder="Payment">
                        </div>
                    </div>

                </div>

            </div>
            <div class="box-footer">
               <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
          </form>
        </div>
    </div>

    
<div class="col-xs-8">
  <div class="box box-warning">
    <div class="box-body">


<!-- <div class="mn-sidebar">
    <div class="mn-toggle"><i class="fa fa-bars"></i></div>
    <div class="mn-navblock"> -->
     

<ul id="draggable" class="sidebar-menu mn-vnavigation " data-widget="tree">
    <li class="treeview">
        <a style="color: #000 !important" href="#">
          <i class="fa fa-folder-open"></i> <span>Multilevel</span>
                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
            <li class="">
                <a href="#">
                    <i class="fa fa-folder-open"></i> Level One 
                    <i class="fa fa-angle-left pull-right"></i>
                    <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                    <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
                </a>
                <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
                    <li>
                        <a href="#">
                          <table style="width: 100%">
                            <tr>
                              <td style="width: 35%">Level Two</td>
                              <td style="width: 35%">Days Hours</td>
                              <td style="width: 15%"><i class="fa fa-history"></i></td>
                              <td style="width: 15%">
                                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
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
          <i class="fa fa-folder-open"></i> <span>Multilevel</span>
                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
            <li class="">
                <a href="#">
                    <i class="fa fa-folder-open"></i> Level One 
                    <i class="fa fa-angle-left pull-right"></i>
                    <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                    <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
                </a>
                <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
                    <li>
                        <a href="#">
                          <table style="width: 100%">
                            <tr>
                              <td style="width: 35%">Level Two</td>
                              <td style="width: 35%">Days Hours</td>
                              <td style="width: 15%"><i class="fa fa-history"></i></td>
                              <td style="width: 15%">
                                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
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
          <i class="fa fa-folder-open"></i> <span>Multilevel</span>
                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
            <li class="">
                <a href="#">
                    <i class="fa fa-folder-open"></i> Level One 
                    <i class="fa fa-angle-left pull-right"></i>
                    <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                    <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
                </a>
                <ul style="background-color: #e6e6e6 !important;" class="treeview-menu" style="display: none;">
                    <li>
                        <a href="#">
                          <table style="width: 100%">
                            <tr>
                              <td style="width: 35%">Level Two</td>
                              <td style="width: 35%">Days Hours</td>
                              <td style="width: 15%"><i class="fa fa-history"></i></td>
                              <td style="width: 15%">
                                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-edit"></i></button>
                                <button style="margin-right: 20px;" class="menu-button pull-right"><i class="fa fa-trash"></i></button>
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



<!--    </div>
</div>
 -->

    </div>
  </div>
</div>

</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php $this->load->view('admin/include/footer');?>

<script>
var cart =[];
var cate =[];
$('#CartForm').submit(function(e){
    var cartData = new FormData($('#CartForm')[0]);
    e.preventDefault();
    item = {};
for (var pair of cartData.entries()) { 
  item[pair[0]] = pair[1];
}
    
   if(item.display != 1){

    cart.push(item);  
    console.log(cart);
   }else{
    cate.push(item);  
    console.log(cate);
   }
    
//   $.each( cart, function( key, value ) {
//       alert( key + ": " + value.name );
//      $('#CartForm')[0].reset(); 
//      var tableLength = $("#parent option").length; 
//      alert(tableLength);
//      var tr = '<option value="'+value.name+'">'+value.name+'</option>';

//       if(tableLength > 0) {             
//         $("#parent option:last").after(tr);
//       } else {        
//         $("#parent option").append(tr);
//       }
//   });

})
</script>

<!-- <script src="<?php //echo base_url();?>assets/jquery-ui.min_1.js"></script>
<script>
  var $sortable = $( "#draggable > li" );
  $sortable.sortable({
      stop: function ( event, ui ) {
          var parameters = $sortable.sortable( "toArray" );
          // $.post("<?php //echo site_url('Facility/ChangeOrder')?>",{value:parameters},function(result){
          //     //alert(result);
          //     location.reload();
          // });
      }
  });
</script> -->
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
<!-- <script type="text/javascript">
function makeTable(container, data) {
    var table = $("<table/>").addClass('table');
    $.each(data, function(rowIndex, r) {
        var row = $("<tr/>");
        $.each(r, function(colIndex, c) { 
            row.append($("<t"+(rowIndex == 0 ?  "h" : "d")+"/>").text(c));
        });
        table.append(row);
    });
    return container.append(table);
}   
$(document).ready(function() {
    var data = [["Name", "Name", "Name"], //headers
                ["New York", "LA", "Seattle"], 
                ["Paris", "Milan", "Rome"], 
                ["Pittsburg", "Wichita", "Boise"]]
    var cityTable = makeTable($("#dvTable"), data);
});     
</script> -->

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


// function AddCart()
// {
//     var formData = new FormData($('#CartForm')[0]);
//     $.ajax({
//         url : "<?php //echo site_url('DynamicProject/AddCart')?>",
//         type: "POST",
//         data: formData,
//         contentType: false,
//         processData: false,
//         dataType: "JSON",
//         success: function(data)
//         {
//             alert(data);
//             //location.reload();
//         },
//         error: function (jqXHR, textStatus, errorThrown)
//         {
//             alert('Error adding / update data');
//         }
//     });
// }

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
