<?php $this->load->view('include/header2');?>



<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div id="titlebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>News</h2>
                
                
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>News</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>


<!-- Content
================================================== -->
<div class="container">

    <!-- Blog Posts -->
    <div class="blog-page">
    <div class="row">
        <div class="col-md-8">


            <?php foreach ($news_rows as $row) {
              
           ?>

            <!-- Blog Post -->
            <div class="blog-post">
                
                <!-- Img -->
                <a href="<?php echo base_url();?>News/single_news/<?php echo $row->id; ?>" class="post-img">
                    <img src="<?php echo base_url();?>assets/property/images/<?php echo $row->url; ?>" alt="">
                </a>
                
                <!-- Content -->
                <div class="post-content">
                    <h3><a href="<?php echo base_url();?>News/single_news/<?php echo $row->id; ?>"><?php echo $row->title; ?></a></h3>

                    <ul class="post-meta">
                        <li>
                            <?php 

$createDate = new DateTime($row->create_at);

echo $strip = $createDate->format('d F Y');

 ?>
                        </li>
                        
                    </ul>

                    <p><?php echo substr($row->content,0,300); ?></p>

                    <a href="<?php echo base_url();?>News/single_news/<?php echo $row->id; ?>" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                </div>

            </div>
            <!-- Blog Post / End -->

<?php }?>



            <!-- Pagination -->
            <div class="clearfix"></div>
            <div class="pagination-container">
                <nav class="pagination">
                    <ul>
                        <li><a href="#" class="current-page">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </nav>

                <nav class="pagination-next-prev">
                    <ul>
                        <li><a href="#" class="prev">Previous</a></li>
                        <li><a href="#" class="next">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div class="clearfix"></div>

        </div>

    <!-- Blog Posts / End -->


    <!-- Widgets -->
    <div class="col-md-4">
        <div class="sidebar right">

            <!-- Widget -->
            <div class="widget">
                <h3 class="margin-top-0 margin-bottom-25">Search Blog</h3>
                <div class="search-blog-input">
                    <div class="input"><input id="search1" name="search1" class="search-field" type="text" placeholder="Type and hit enter" autocomplete="off" /></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- Widget / End -->


            <!-- Widget -->
            <div class="widget">
                <h3>Got any questions?</h3>
                <div class="info-box margin-bottom-10">
                    <p>If you are having any questions, please feel free to ask.</p>
                    <a href="<?php echo base_url();?>page/contact" class="button fullwidth margin-top-20"><i class="fa fa-envelope-o"></i> Drop Us a Line</a>
                </div>
            </div>
            <!-- Widget / End -->


            <!-- Widget -->
            <div class="widget">

                <h3>Popular Posts</h3>
                <ul class="widget-tabs">
                    <?php foreach ($news_sliders as $slider) {
                       ?>

                    <!-- Post #1 -->
                    <li>
                        <div class="widget-content">
                                <div class="widget-thumb">
                                <a href="<?php echo base_url();?>News/single_news/<?php echo $slider->id; ?>"><img src="<?php echo base_url();?>assets/property/images/<?php echo $slider->url;?>" alt=""></a>
                            </div>
                            
                            <div class="widget-text">
                                <h5><a href="<?php echo base_url();?>News/single_news/<?php echo $slider->id; ?>"><?php echo $slider->title; ?> </a></h5>
                                <span><?php 

$createDate = new DateTime($slider->create_at);

echo $strip = $createDate->format('d F Y');

 ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                   <?php }?>

                </ul>

            </div>
            <!-- Widget / End-->


            <!-- Widget -->
            <div class="widget">
                <h3 class="margin-top-0 margin-bottom-25">Social</h3>
                <ul class="social-icons rounded">
                   <li><a class="facebook" href="https://www.facebook.com/KAS-Housing-PVT-LTD-1725339620828984/"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="https://twitter.com/kas_housing"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="https://plus.google.com/u/0/108184866040889695957"><i class="icon-gplus"></i></a></li>
                    <li><a class="linkedin" href="https://www.linkedin.com/in/k-a-s-housing-madurai-a3b84514b/"><i class="icon-linkedin"></i></a></li>
                </ul>

            </div>
            <!-- Widget / End-->

            <div class="clearfix"></div>
            <div class="margin-bottom-40"></div>
        </div>
    </div>
    </div>
    <!-- Sidebar / End -->


</div>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    
    $( "#search1" ).autocomplete({      
            source: function(request, response) {
                $.ajax({
                    url: "<?php echo site_url('Page/ajax_autocomplete') ?>",
                    dataType: "json", 
                    data: request, 
                    success: function (data) {
                        if(data.response == 'true') 
                        {
                        response(data.message);
                        }
                      }
                 });      
             },
        minLength: 1,
        
select: function (event, ui) {
    $(this).val(ui.item.label); // display the selected text
    var userid = ui.item.id; // selected value

window.location.href="<?php echo base_url();?>News/single_news/" + userid;
        }
        
        });  

</script>
<?php $this->load->view('include/footer2');?>
