<?php $this->load->view('admin/include/header');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SITE INFO SETTINGS
        <!-- <small>Optional description</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">SITE INFO SETTINGS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">SITE INFO</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>Contact/siteUpdate" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email 1</label>

                  <div class="col-sm-10">
                    <input type="email" name="email1" class="form-control" id="inputEmail3" placeholder="Email 1" value="<?php echo $siteInfo[0]->email1 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email 2</label>

                  <div class="col-sm-10">
                    <input type="email" name="email2" class="form-control" id="inputEmail3" placeholder="Email 2" value="<?php echo $siteInfo[0]->email2 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email 3</label>

                  <div class="col-sm-10">
                    <input type="email" name="email3" class="form-control" id="inputEmail3" placeholder="Email 3" value="<?php echo $siteInfo[0]->email3 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">MObile No 1</label>

                  <div class="col-sm-10">
                    <input type="text" name="phone1" class="form-control" id="inputEmail3" placeholder="Mobile No" value="<?php echo $siteInfo[0]->phone1 ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mobile No 2</label>

                  <div class="col-sm-10">
                    <input type="text" name="phone2" class="form-control" id="inputEmail3" placeholder="Mobile No" value="<?php echo $siteInfo[0]->phone2 ?>">
                  </div>
                </div>
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Address</label>

<div class="col-sm-10">
<textarea class="form-control" name="address" rows="3" placeholder="Enter ..." data-gramm="true"  spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none 0s ease 0s; background: transparent !important;">
<?php echo $siteInfo[0]->address ?>
</textarea>
</div>
                  
                 
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>


 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- End Bootstrap modal -->
<?php $this->load->view('admin/include/footer');?>
<script type="text/javascript">


</script>