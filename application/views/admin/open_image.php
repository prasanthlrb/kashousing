<?php $this->load->view('admin/include/header');?>

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
                <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
            </div>
            <form enctype="multipart/form-data" action="<?php echo base_url();?>Open_image/fetch/<?php echo $this->uri->segment(3); ?>" method="post">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Choose Files</label>
                    <input type="file" class="form-control" name="userFiles[]" multiple/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <ul class="gallery">
                    <?php if(!empty($files)): foreach($files as $file): ?>
                    <li class="item">
                        <a href="<?php echo base_url();?>Open_image/remove_files/<?php echo $file->id ?>/<?php echo $this->uri->segment(3); ?>"><i class="fa fa-times remove_img" aria-hidden="true"></i></a>
                        <img src="<?php echo base_url('uploads/client_image/'.$file->file_name); ?>" alt="" >
                        <p>Uploaded On <?php echo date("j M Y",strtotime($file->created)); ?></p>
                    </li>
                    <?php endforeach; else: ?>
                    <p>File(s) not found.....</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>







        </section>
    </div>

<?php $this->load->view('admin/include/footer');?>