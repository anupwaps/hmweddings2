<?php include_once 'header/new_theme/head_section.php';  ?>

<?php include_once 'header/new_theme/top_bar.php';  ?>
<?php include_once 'header/new_theme/side_bar.php';  ?>
<style type="text/css">
body.modal-open {position:static !important; overflow:visible; padding:0 !important;}
</style>
<div class="slider-bg">
  <div class="logo-area">
    <!-- <a href="index.html"><img src="<?=base_url()?>template/assets/images/logo-new.png"></a> -->
    
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
  <!-- Banner start-->  


<!-- Slider Area Start -->
  <?php include_once 'header/new_theme/slider_3.php';  ?>
  <!-- Slider Area End -->



  <!-- <div class="couple-hero-section-img" alt="lovevivah.com matrimony site"></div> -->
  
  <?php include_once 'header/new_theme/find_section.php';  ?>
  <!-- /.Find search section--> 
</div>
<!-- slider end-->
<div class="col-md-12 aadhaar-holder-mobile">

  <div class="col-xs-12">
    <a href="javascript:void('0')" data-toggle="modal"  id="registerBTN" onclick="openregisterModal()" class="btn btn-blue bor-r50 btn-big ripplelink" style="margin:10px 0px;">Register Free!</a>
    <p>&amp; Enjoy Unlimited Benefits</p>
  </div>
</div>

<!-- Success Stories -->
<?php include_once 'header/new_theme/happy_stories.php';  ?>

<!-- Mobile App Section-->
<section class="module parallax parallax-2">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-5 mobileapp-img hidden-xs"> <img src="<?=base_url()?>template/assets/images/MobileAppHome3860.png?v=1" alt="LoveVivah App"/> </div>
      <div class="col-md-7 col-sm-7 parallax-caption">
        <h2>Happiness is Just an App Away!</h2>
        <p>Find your right match with Lovevivah.com </p>
        <p style="font-weight:bold;"><i class="fa fa-hand-o-right"></i> Simple |  Fast | Convenient | Safe & Secure</p>
        <div class="app-download-btn">
          <p>Available on iOS and Android</p>
          <a href="#" target="_blank"><span class="membership-icon android-app"></span></a> <a href="#" target="_blank"><span class="membership-icon ios-app"></span></a> </div>
      </div>
    </div>
  </div>
</section>

<!-- Mobile App Banner End -->

<div class="section-space40 bg-light ptrn-bg1">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 col-sm-12">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title mb30 text-center">
            <h2>Upgrade your membership to connect with those you like.</h2>
            <p>Search your perfect life-partner from millions of trusted & authentic profiles.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
            <div class="membership-icon micon-contact"></div>
            <div class="feature-info">
              <h3>View Contacts</h3>
              <p>Access contact number and connect directly on call or via sms</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
            <div class="membership-icon micon-email"></div>
            <div class="feature-info">
              <h3>View Email</h3>
              <p>Get the email id of your selected profile and reach via email</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
            <div class="membership-icon micon-chat"></div>
            <div class="feature-info">
              <h3>Chat</h3>
              <p>Chat instantly with all other<br>
                online users</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt30 text-center"> <a href="#" class="btn btn-blue bor-r50 btn-big ripplelink" id="HP_Membership_CTA">Browse Membership Plans</a>
          <p class="member-know"> To know more, call us @ +8801731556712</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- member section -->
<?php include_once 'header/new_theme/premium_members.php';  ?>

<!-- Elite Package Section-->
<div class="section-space40 bg-prods">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 LV-content">    
      <div class="col-md-6">
       <div class="prod-ops">
			<div class="total-single-service-area">
				<div class="single-services-area">
					<div class="service-icon"><img src="<?=base_url()?>template/assets/images/Elite-logo.png" width="180" alt=""/></div> 
					<h3>Exclusive matchmaking service<br> for the elite</h3>
					<div class="read-more">
						<a href="#">Know More</a>
					</div>    
				</div>
			</div>
       </div>
      </div>      
      <div class="col-md-6">
       <div class="prod-ops">
		<div class="total-single-service-area">
			<div class="single-services-area">
				<div class="service-icon"><img src="<?=base_url()?>template/assets/images/EliteLogo.png" width="180" alt=""/></div> 
				<h3>LoveVivah <span>guarantees</span> to get you a match within 18 month or <strong>100% money back*</strong></h3>
				<div class="read-more">
					<a href="#">Know More</a>
				</div>    
			</div>
		</div>
       </div>
      </div>      
    </div>
  </div>
</div>
<style type="text/css">
.bg-prods{background:#180405 url(assets/images/Elite-bg1.jpg) bottom repeat-x; min-height:400px; border-bottom:#f7e1e6 solid 1px;}
.prod-ops{padding:20px; text-align:center; border-radius: 50px 0px; box-shadow: #180408 1px 1px 6px; /*background-image: linear-gradient(to top, #49082a 0%, #170104 100%);*/ margin-bottom:10px; border: solid 1px rgba(255, 255, 255, 0.13); background:#0b0b0b url(assets/images/back.jpg) no-repeat center top;}
.total-single-service-area .single-services-area {
    background: url(assets/images/bg-box.png) no-repeat;
    padding: 20px 0;
    transition: all 0.5s ease 0s;
    background-size: cover;
    background-position: 0 0;
	
}
.total-single-service-area .single-services-area:hover {
    background: url(assets/images/bg-box-hover.png) no-repeat;
    padding: 30px 0;
    transition: all 0.5s ease 0s;
    background-size: cover;
    background-position: 0 0;

}
.total-single-service-area .single-services-area h3 {
    font-family: 'Open Sans', Arial;
    font-size: 18px;
	color:#fff;
    font-weight: 600;
    position: relative;
    margin: 20px 0px 15px 0px;
	line-height:35px;
    transition: all 0.5s ease 0s;
}
.total-single-service-area .single-services-area h3 strong{
	color:#cd3162;
	}
.total-single-service-area .single-services-area h3 span{
	font-weight:700;
	color:#e9b52e;
	font-style:italic;
	text-transform:uppercase;
	}
.read-more {
    display: inline-block;
}
.read-more a {
    display: block;
    padding: 10px 30px;
	font-weight: 600;
    border: 1px solid;
    transition: all 0.5s ease 0s;
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
    border-radius: 40px;
    color: #fff;
	border-color: #4f46ff;
	}
.read-more a:hover {
    background: #4f46ff;
	color: #ffffff;
}
</style>
<div class="section-space40 lv-fotter-text ptrn-bg4">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 LV-content">      
      <h2>About HM WEDDINGS</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
  </div>
</div>
<section class="browse-matrimonial">
	<div class="wrapper mobile-view">    
        <button class="myButton" onclick="$('#fotter-mobile').slideToggle('slow');"><span>Browse Matrimonial Profiles</span> <i class="fa fa-plus-circle"></i> </button>
      <div id="fotter-mobile" style="display:none">
        <ul>  
            <li class="heading">Religion:</li> 
			<li><a href="#">Hindu</a></li>
			<li><a href="#">Jain</a></li> 
            <li><a href="#">Muslim </a></li> 
			<li><a href="#">Christian</a></li>
            <li><a href="#">Sikh</a></li>
            <li><a href="#">Parsi</a></li>
			<li><a href="#">Buddhist</a></li>
			<li><a href="#">Jewish </a></li>
			</ul>		  
        <ul>  
            <li class="heading">Caste:</li> 
			<li><a href="#">Agarwal </a></li>
			<li><a href="#">Gupta </a></li>
            <li><a href="#">Arora </a></li>
            <li><a href="#">Baniya </a></li> 
            <li><a href="#">Brahmin</a></li> 
            <li><a href="#">Jat </a></li>
            <li><a href="#">Kayastha </a></li>
            <li><a href="#">Khatri </a></li>
            <li><a href="#">Rajput </a></li>
            <li><a href="#">Sunni </a></li>
		
         
        </ul>
        <ul>  
            <li class="heading">State:</li> 
		
		    <li><a href="#">Delhi</a></li> 
		    <li><a href="#">Chandigarh</a></li> 
            <li><a href="#">Gujarat</a></li>
            <li><a href="#">Haryana</a></li>
            <li><a href="#">Karnataka</a></li>
            <li><a href="#">Maharashtra</a></li>
            <li><a href="#">Punjab</a></li>
            <li><a href="#">Rajasthan</a></li>
			<li><a href="#">Uttar Pradesh</a></li>
			<li><a href="#">West Bengal</a></li>
			<li><a href="#">Telangana</a></li>
		    <li><a href="#">Madhya Pradesh</a></li>
            <li><a href="#">Andhra Pradesh</a></li>
		    <li><a href="#">Tamil Nadu</a></li>
          <li><a href="#">Kerala </a></li>
       
		</ul>
        <ul>  
            <li class="heading">Regional:</li> 
	        <li><a href="#">Bengali</a></li>
            <li><a href="#">Gujarati</a></li>
            <li><a href="#">Hindi</a></li> 
            <li><a href="#">Kannada</a></li> 
            <li><a href="#">Malayalam</a></li>
            <li><a href="#">Marathi</a></li>
            <li><a href="#">Punjabi</a></li>
            <li><a href="#">Tamil</a></li>
            <li><a href="#">Telugu</a></li>
            <li><a href="#">Urdu</a></li>

		   </ul>
		<ul>  
            <li class="heading">Country:</li> 
				
			<li><a href="#">India</a></li>
			<li><a href="#">USA</a></li> 
            <li><a href="#">UK </a></li> 
			<li><a href="#">Canada</a></li>
            <li><a href="#">Australia</a></li>
			
          </ul>
          </div>  
    </div>
     <div class="wrapper desktop-view">
        <h3 class="text-center">Browse Matrimonial Profiles By</h3>
		<ul>  
            <li class="heading">Religion:</li> 
			<li><a href="#">Hindu</a></li>
			<li><a href="#">Jain</a></li> 
            <li><a href="#">Muslim </a></li> 
			<li><a href="#">Christian</a></li>
            <li><a href="#">Sikh</a></li>
            <li><a href="#">Parsi</a></li>
			<li><a href="#">Buddhist</a></li>
			<li><a href="#">Jewish </a></li>
          </ul>
		  
        <ul>  
            <li class="heading">Caste:</li> 
			<li><a href="#">Agarwal </a></li>
			<li><a href="#">Gupta </a></li>
            <li><a href="#">Arora </a></li>
            <li><a href="#">Baniya </a></li> 
            <li><a href="#">Brahmin</a></li> 
            <li><a href="#">Jat </a></li>
            <li><a href="#">Kayastha </a></li>
            <li><a href="#">Khatri </a></li>
            <li><a href="#">Rajput </a></li>
            <li><a href="#">Sunni </a></li>
		
         
        </ul>
        <ul>  
            <li class="heading">State:</li> 
		
		    <li><a href="#">Delhi</a></li> 
		    <li><a href="#">Chandigarh</a></li> 
            <li><a href="#">Gujarat</a></li>
            <li><a href="#">Haryana</a></li>
            <li><a href="#">Karnataka</a></li>
            <li><a href="#">Maharashtra</a></li>
            <li><a href="#">Punjab</a></li>
            <li><a href="#">Rajasthan</a></li>
			<li><a href="#">Uttar Pradesh</a></li>
			<li><a href="#">West Bengal</a></li>
			<li><a href="#">Telangana</a></li>
		    <li><a href="#">Madhya Pradesh</a></li>
            <li><a href="#">Andhra Pradesh</a></li>
			<li><a href="#">Tamil Nadu</a></li>
          <li><a href="#">Kerala </a></li>
       
		</ul>
        <ul>  
            <li class="heading">Regional:</li> 
	        <li><a href="#">Bengali</a></li>
            <li><a href="#">Gujarati</a></li>
            <li><a href="#">Hindi</a></li> 
            <li><a href="#">Kannada</a></li> 
            <li><a href="#">Malayalam</a></li>
            <li><a href="#">Marathi</a></li>
            <li><a href="#">Punjabi</a></li>
            <li><a href="#">Tamil</a></li>
            <li><a href="#">Telugu</a></li>
            <li><a href="#">Urdu</a></li>

		   </ul>
		  <ul>  
        <li class="heading">Country:</li> 
				<li><a href="#">India</a></li>
			   <li><a href="#">USA</a></li> 
        <li><a href="#">UK </a></li> 
			   <li><a href="#">Canada</a></li>
        <li><a href="#">Australia</a></li>
			</ul>  
    </div>

 
 </section>
<section class="footer">
    <div class="container footer-two">
    <div class="col-md-12 col-sm-12">
        <div class="col-md-2 col-sm-6 col-xs-6">
            <h4>Company</h4>
            <ul>
              <li><a href="#"><i class="fa fa-check"></i> About Us</a></li>
				      <li><a href="#"><i class="fa fa-check"></i> Success Stories</a></li>
              <li><a href="#" target="_blank"><i class="fa fa-check"></i> Blogs</a></li>
				      <li><a href="#" target="_blank"><i class="fa fa-check"></i> Media & PR</a></li>
				      <li><a href="#" target="_blank"><i class="fa fa-check"></i> Careers</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6">
            <h4>Help &amp; Support</h4>
            <ul>
                <li><a href="#"><i class="fa fa-check"></i> Live Support</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Online Help - FAQ</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Contact us</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Sitemap</a></li>
				 <li><a href="#">&nbsp;</a></li> 
           </ul>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6">
            <h4>Policies</h4>
            <ul>
                <li><a href="#"><i class="fa fa-check"></i> Privacy Policy</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Terms of Use</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Disclaimer</a></li>
                <li><a href="#"><i class="fa fa-check"></i> Payment Policy</a></li>
            </ul>
        </div>
		<div class="col-md-2 col-sm-6 col-xs-6">
        <h4>Our other Services</h4>
        <ul>
          <li><a href="#"><button type="button" class="btn btn-Analysis">HM Weddings <br><span>Harmony</span></button></a></li>
		      <!-- <li><a href="#" target="_blank"><button type="button" style="line-height: 15px; background:#1a38b4;" class="btn btn-Analysis"><span style="font-size: 12px; text-transform: none;">PlanYourVivah.com</span><br><i style="font-size: 9px;">Wedding Venues and Vendors</i></button></a></li> -->
        </ul>
      </div>
	  <style type="text/css">
	  .btn-Analysis {
			color: #fff;
			background-color: #1a38b4;
			border-color: #1a38b4;
			border-radius:5px;
			text-transform:none;
			font-weight:normal;
			text-align:left;
			font-size:14px;
			border: #fff solid 1px;
			padding-left:10px;
			margin-bottom:20px;
		}
		 .btn-Analysis span{
			 font-size:15px;
			 font-weight:600;
			 text-transform:uppercase;
			 }
	 .btn-Analysis:hover {
			color: #fff;
			background-color: #900a3b;
			border-color: #900a3b;
		}
	  </style>
        <div class="col-md-2 col-sm-6 col-xs-6">
            <h4>Follow Us</h4>
         <ul class="social-icons icon-circle icon-zoom list-unstyled list-inline">      	      
	      <li> <a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li> <a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>   
	      <li> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
	      <li> <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li> 
          <li> <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li> 
	  	</ul>
        <ul class="social-icons icon-circle icon-zoom list-unstyled list-inline">
        <h4>App Available on</h4>      	      
	      <li> <a href="#" target="_blank"><i class="fa fa-android"></i></a></li>
          <li> <a href="#" target="_blank"><i class="fa fa-apple"></i></a></li>
	  	</ul>
        </div>
		<div class="col-md-2 col-sm-6 col-xs-6">           
        <ul class="social-icons icon-circle icon-zoom list-unstyled list-inline">          
          <li>
	   <!-- <div class="right new-norton">
		<table style="float:left;" border="0" cellpadding="2" cellspacing="0">
		<tbody>
		<tr>
		<td align="center" valign="top">
		<script type="text/javascript" src="https://seal.verisign.com/getseal?host_name=www.lovevivah.com&amp;size=M&amp;use_flash=NO&amp;use_transparent=NO&amp;lang=en"></script>
		<map name="sealmap_medium" id="sealmap_medium"><area alt="Click to Verify - This site has chosen an SSL Certificate to improve Web site security" title="" href="javascript:vrsn_splash()" shape="rect" coords="0,0,115,58" tabindex="-1" style="outline:none;"><area alt="Click to Verify - This site has chosen an SSL Certificate to improve Web site security" title="" href="javascript:vrsn_splash()" shape="rect" coords="0,58,63,81" tabindex="-1" style="outline:none;"><area alt="" title="" href="javascript:symcBuySSL()" shape="rect" coords="63,58,115,81" style="outline:none;"></map><br>
		<a href="https://www.symantec.com/verisign/ssl-certificates" target="_blank" style="color:#000000; text-decoration:none; font:bold 7px verdana,sans-serif; letter-spacing:.5px; text-align:center; margin:0px; padding:0px;">ABOUT SSL CERTIFICATES</a></td>
		</tr>
		</tbody></table>
		</div> --> 
		</li>
	  	</ul>
        </div>
      </div> 
    </div>
  </section>
 
 <footer class="tiny-footer"><span>Copyrights 2020, hmweddings.com. All Rights Reserved</span></footer>
 <script type="text/javascript" src="<?=base_url()?>template/assets/js/bootstrap/bootstrap.min.js" ></script> 
 <script src="<?=base_url()?>template/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
 <script  type="text/javascript" src="<?=base_url()?>template/assets/app/HomeApp7893.js?v=24"></script>  
 <!-- Login Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body"> <a href="javascript:void(0);" class="loginclose" data-dismiss="modal">&times;</a>
	    <div class="login-form-section">
          <h2>Login to your account</h2>
          <p>And begin a beautiful journey</p>
		  <form method="post" name="loginfrm" id="loginfrm" action="<?=base_url()?>home/check_login">
           <div class="form-group mt-10">
            <div class="">
              <input type="email" name="email" id="loginEmail" class="common-input" placeholder="Email Address">
              <!--<small class="lv-alert alert-danger">Please enter a valid email address</small> --></div>
          </div>
          <div class="form-group">
            <div class="">
              <input type="password" name="password" id="loginPass" class="common-input" placeholder="Password">
           <!--   <small class="lv-alert alert-danger">Wrong password. Try again.</small> --></div>
          </div>
          <div class="form-group">
            <div class="">
              <button type="submit" id="LoginBTN" class="btn btn-lg btn-primary btn-block ripplelink">LOGIN</button>
            </div>
          </div>
		  </form>
          <div class="login-forgot-link">
            <ul class="list-inline">
              <li><a href="#">Forgot Password ?</a></li>
              <li><a href="#">Resend Activation Email</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>
          <div class="login-or-register"><span class="_43mh">OR</span></div>
          <div class="login-register-section">
            <p>Don't have an account?</p>
            <div class="form-group">
              <div class="">
                <a href="javascript:void('0')" data-toggle="modal"  id="registerBTN" onclick="openregisterModal()" class="btn btn-lg btn-blue btn-block ripplelink"> REGISTER FREE</a>
              </div>
            </div>
          </div>
        </div>		
      </div>
    </div>
  </div>
</div><div class="modal fade modal-fullscreen  footer-to-bottom" id="myModalFullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog animated fadeInUp">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" id= 'Mobile_PopUp_Close' data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
          </div>
           
            <div class="modal-footer">
			<p class="download-line1">Download our App</p>
                 <p class="download-line2">and search your life partner </p>
                 <p class="download-line3">on the go</p>
            <div class="mobile-screen"> <img src="<?=base_url()?>template/assets/images/downloadapp.png" class="download-mobile-img"  alt=""/></div>
            <div class="download-buttons">
             <button type="button" class="btn btn-theme border-r100 download-mobile" id=""><i class="fa fa-apple" id ="apple-link"></i> <i class="fa fa-android" id ="android-link"></i> DOWNLOAD NOW</button>
            </div>
                <span class="mobile-or">OR</span>
                <a href="#" class="skiptocon" id= 'Mobile_PopUp_Continue' class="close" data-dismiss="modal"> Continue to Mobile Site</a>
            </div>
        </div>        
    </div>   
</div>
  <!-- <script type="text/javascript">
    $(window).on('load',function(){
	 var IOS     = navigator.userAgent.match(/(\(iPod|\(iPhone|\(iPad)/);
	 var ANDROID = navigator.userAgent.match(/Android/i);
	  if (IOS || ANDROID) {
	  if(IOS){
	     $('#android-link').css('display','none');
		 var urlLink = 'https://itunes.apple.com/us/app/lovevivah/id1239412737?mt=8';
		 var addID = 'Mobile_IOS_PopUp_Download';
		}else if(ANDROID){
		  $('#apple-link').css('display','none');
		  var urlLink = 'https://play.google.com/store/apps/details?id=com.tanishasystem.lovevivah';
		  var addID = 'Mobile_Android_PopUp_Download';
		}else{}      
	   var skipAppLink = '';	
	   if(skipAppLink != '1'){
	    $('#myModalFullscreen').modal('show');
		$('.download-mobile').attr('id', addID);
	   }
	  }
	 $('.download-mobile').click(function(){	      
			window.location.href = urlLink;
		}); 
	$('#Mobile_PopUp_Close, #Mobile_PopUp_Continue ').click(function(){
	    var NORMALSERVER = "";	  
			$.ajax({
					    async: true,
						type: "post",
					    url: NORMALSERVER+"/common_webservice_controller/download_app",
					    data:"&dwn_link= 1",						  
						dataType:"json",						  
					        success:function(data)
							{						
								
							},
							error: function(jqXHR, textStatus, errorThrown) {
								console.log(textStatus, errorThrown);
							  }
					 })
		}); 	
    });
</script>   -->   
<!-- <div class="hiring"><a href="https://www.planyourvivah.com/" target="_blank" ><img src="<?=base_url()?>template/assets/images/planyourvivah3860.png?v=1" alt="" /></a>
</div>
<div class="counselling">
<a href="harmony.html" target="_blank" ><img src="<?=base_url()?>template/assets/img/harmony3860.png?v=1" alt=""/></a>
</div> -->

<?php include_once 'header/new_theme/foot_section.php';  ?>