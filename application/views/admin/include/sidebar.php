  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>source/favicon.png"  alt="User Image">
        </div>
        <div class="pull-left info">
          <p>KAS Hosuing PVT</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        
        <li class="dashboard"><a href="<?php echo base_url();?>admin/dashboard">  <i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
         <li class="users-st"><a href="<?php echo base_url();?>Users">  <i class="fa fa-users"></i> <span>User</span></a></li>
        <li class="treeview Projects-sb">
          <a href="#">
            <i class="fa  fa-folder-open"></i>
            <span>Project</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="Contact"><a href="<?php echo base_url();?>Contact"><i class="fa fa-circle-o"></i> Contact</a></li>
            <li class="Main-Category"><a href="<?php echo base_url();?>Project/MainCat"><i class="fa fa-circle-o"></i> Main Category</a></li>
            <li class="Sub-Category"><a href="<?php echo base_url();?>Project/SubCat"><i class="fa fa-play-circle-o"></i> Sub Category</a></li>
            <li class="Projects"><a href="<?php echo base_url();?>DynamicProject"><i class="fa fa-picture-o"></i> Projects</a></li>
            <li class="Pay"><a href="<?php echo base_url();?>DynamicProject/Pay"><i class="fa fa-picture-o"></i> Project Pay</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-folder-open"></i>
            <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>gallery/index"><i class="fa fa-circle-o"></i> Sketchfab</a></li>
            <li><a href="<?php echo base_url();?>gallery/videos"><i class="fa fa-play-circle-o"></i> Videos</a></li>
            <li><a href="<?php echo base_url();?>Upload_files"><i class="fa fa-picture-o"></i> Images</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>View Properties</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Property/view_house"><i class="fa fa-circle-o"></i>House</a></li>
            <li><a href="<?php echo base_url();?>Property/view_land"><i class="fa fa-circle-o"></i> Land</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Client</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url();?>Client/index"><i class="fa fa-circle-o"></i> Add Client</a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>News Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>News/index"><i class="fa fa-circle-o"></i> Post</a></li>
          </ul>
        </li>
        <li class="Our-Projects"><a href="<?php echo base_url();?>Project_image">  <i class="fa fa-users"></i> <span>Our Projects</span></a></li>
        <li class="Our-Facility"><a href="<?php echo base_url();?>Facility">  <i class="fa fa-users"></i> <span>Our Facility</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Contact/siteInfo"><i class="fa fa-circle-o"></i> Site Info Setting</a></li>
            <!-- <li><a href="<?php //echo base_url();?>"><i class="fa fa-circle-o"></i> Data tables</a></li> -->
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>