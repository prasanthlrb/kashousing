<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Box Concept</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>source/admin/login/css/style.css">
		
  <style>
  	.text-danger p{
  	font-size: 15px;
    color: #ffffff;
    margin-left: 34px;
  	}
  	label.text-danger {
    color: #ea5c55;
    font-weight: 600;
    /* margin-top: -22px; */
    position: relative;
    top: 8px;
    left: 11px;
}
user agent stylesheet
label {
    cursor: default;
}
Inherited from body
style.css:2

  </style>
</head>

<body>
  <div class='brand'>
  <a href='https://www.jamiecoulter.co.uk' target='_blank'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/logo.png'>
  </a>
</div>
<div class='login'>
  <div class='login_title'>
    <span>Login to your account</span>
  </div>
  <form method="post" action="<?php echo base_url(); ?>Login/login_validation" id="my_form">
  <div class='login_fields'>
    <div class='login_fields__user'>
      <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
      </div>
      <input placeholder='Username' type='text' id="username" name="username">
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
        	<span class="text-danger"><?php echo form_error('username'); ?></span>
      </input>
    </div>
    <div class='login_fields__password'>
      <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
      </div>
      <input placeholder='Password' type='password' id="password" name="password">
      <div class='validation'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
      </div>
      <span class="text-danger"><?php echo form_error('password'); ?></span>
    </div>
    <?php echo'<label class="text-danger">'.$this->session->flashdata("error"); ?>
    <div class='login_fields__submit'>
      <input type='submit' value='Log In'>
      
    </div>
  </div>
  
  <div class='success'>
    <h2>Authentication Success</h2>
    <p>Welcome back</p>
  </div>
 
</div>
<div class='authent'>
  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
  <p>Authenticating...</p>
</div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script  src="<?php echo base_url();?>source/admin/login/js/index.js"></script>

</body>
</html>
