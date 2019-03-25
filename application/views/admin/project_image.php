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
            <form enctype="multipart/form-data" action="<?php echo base_url();?>Project_image" method="post">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Choose Files</label>
                    <input type="file" class="form-control" name="userFiles[]" multiple/>
                </div>
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" class="form-control" name="name" multiple/>
                </div>
                <div class="form-group">
                    <label>Choose Categary</label>
                    <select name="status" class="form-control">
                        <option>Choose</option>
                        <option value="1">Completed Project</option>
                        <option value="2">On Going Project</option>
                    </select>
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
        <div class="col-lg-6">
            <div class="row">
                <center><h2>Completed Project</h2></center>
                <ul class="gallery">
                    <?php if(!empty($files)): foreach($files as $file):
                    $status=$file['status'];
                    if($status==1)
                    {
                     ?>
 
                    <li class="item">
                        <a href="<?php echo base_url();?>Project_image/remove_files/<?php echo $file['id']?>"><i class="fa fa-times remove_img" aria-hidden="true"></i></a>
                        <img class="img" src="<?php echo base_url('uploads/project_image/'.$file['file_name']); ?>" alt="" >
                        <p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
                    </li>
                    <?php }   endforeach; else: ?>
                    <p>File(s) not found.....</p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
<div class="col-lg-6">
            <div class="row">
                <center><h2>On Going Project</h2></center>
                <ul class="gallery">
                    <?php if(!empty($files)): foreach($files as $file):
                    $status=$file['status'];
                    if($status==2)
                    {
                     ?>
 
                    <li class="item">
                        <a href="<?php echo base_url();?>Project_image/remove_files/<?php echo $file['id']?>"><i class="fa fa-times remove_img" aria-hidden="true"></i></a>
                        <img class="img" src="<?php echo base_url('uploads/project_image/'.$file['file_name']); ?>" alt="" >
                        <p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
                    </li>
                    <?php }   endforeach; else: ?>
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