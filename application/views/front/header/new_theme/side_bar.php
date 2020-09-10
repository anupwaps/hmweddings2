
<p style="color: red">
    <?php
        if (!empty($login_error)){
            echo $login_error;
        }
    ?>
</p>
<p style="color: green">
    <?php
        if (!empty($sent_email)){
            echo $sent_email;
        }
    ?>
</p>
<!-- Aadhaar Holder right-->
<div class="overlay"></div>
<div class="header-v2 navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 logo">
        <div class="navbar-brand"> 
          <a href="<?=base_url()?>home/">
            <?php
                $header_logo_info = $this->db->get_where('frontend_settings', array('type' => 'header_logo'))->row()->value;
                $header_logo = json_decode($header_logo_info, true);
                if (file_exists('uploads/header_logo/'.$header_logo[0]['image'])) {
                ?>
                    <img src="<?=base_url()?>uploads/header_logo/<?=$header_logo[0]['image']?>" class="img-responsive" height="100%">
                <?php
                }
                else {
                ?>
                    <img src="<?=base_url()?>uploads/header_logo/default_image.png" class="img-responsive" height="100%">
                <?php
                }
            ?>
          </a>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-xs-2 hidden-xs"> <a class="sidebar-icon btn btn-link" id="sidebarCollapse"> <i class="fa fa-bars"></i> </a>
		   
        <div class="header-btns ch_top_bar2">
        
          
   			
        </div>
      </div>
	  <div class="hl-button">
	  <button type="button" class="btn btn-primary pull-right ripplelink" data-toggle="modal" data-target="#loginModal"> Login</button>
	  </div>
      <a class="sidebar-icon btn btn-link mobile-ham" id="sidebarCollapse1"> <i class="fa fa-bars"></i> </a> </div>
  </div>
</div>
		
<style>
.lv-alert{
	display:none;
}
.display-block{
	display:block;
}
</style>
<!--Header End--> 
