
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
                <li><a href="<?=base_url()?>home/faq"><i class="fa fa-check"></i> Online Help - FAQ</a></li>
                <li><a href="<?=base_url()?>home/contact_us"><i class="fa fa-check"></i> Contact us</a></li>
                <li><a href="<?=base_url()?>Sitemap"><i class="fa fa-check"></i> Sitemap</a></li>
				 <li><a href="#">&nbsp;</a></li> 
           </ul>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6">
            <h4>Policies</h4>
            <ul>
                <li><a href="<?=base_url()?>home/privacy_policy"><i class="fa fa-check"></i> Privacy Policy</a></li>
                <li><a href="<?=base_url()?>home/terms_and_conditions"><i class="fa fa-check"></i> Terms of Use</a></li>
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
        <?php
            $social_links = $this->db->get('social_links')->result();
            foreach($social_links as $sl){
        ?>      	      
	      <li> <a href="<?= $sl->value;?>" target="_blank"><i class="<?= $sl->icon;?>"></i></a></li>
        <?php } ?>
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
 
 <footer class="tiny-footer"><span><?=translate('copyright')?> &copy; <?=date("Y")?>, <?=$this->system_name;?>. All Rights Reserved</span></footer>