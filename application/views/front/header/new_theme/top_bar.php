

<script type="text/javascript">
	function openregisterModal(){
    $('#loginModal').modal('hide');
	$('#Register').modal('show');
	
   }
</script>
<!-- Sidebar Holder -->
<nav id="sidebar">
  <div id="dismiss" class="dismiss"> <i class="fa fa-arrow-right"></i> </div>
  <ul class="list-unstyled CTAs ch_top_bar">
  </ul>
  <ul class="list-unstyled components">
    <li><a href="<?= base_url();?>">Home</a></li>
    <li><a href="<?= base_url();?>home/listing">Active Member</a></li>
    <li><a href="<?= base_url();?>home/plans">Premium Plans</a></li>
    <li><a href="<?= base_url();?>home/stories">Happy Stories</a></li>
    <li><a href="<?= base_url();?>home/contact_us">Contact us</a></li>
    <li><a href="<?= base_url();?>home/about_us">About us</a></li>
    <li><a href="#">Help</a></li>
    
    <li><a href="#" >Blog</a></li>
	<li><a href="#">Download App</a></li>
    <li><a href="#">Media & PR</a></li>
  </ul>
  <div class="side-feedback">
    <h3>Give Us Your Feedback</h3>
    <p> Need any help? Write to us at <a href="mailto:<?= $this->system_email;?>"><?=$this->system_email;?></a><br>
     Call :
     <?php $phone_contact = $this->db->get_where('general_settings', array('type' => 'phone'))->row()->value; 
     ?>
		  <a href="tel:<?=$phone_contact;?>"><?=$phone_contact;?></a> 
		       (Bangladesh)</p>
    <h3>Follow us</h3>
    <ul class="list-inline side-social">
      <?php
          $social_links = $this->db->get('social_links')->result();
          foreach($social_links as $sl){
      ?>      	      
        <li> <a href="<?= $sl->value;?>" target="_blank"><i class="<?= $sl->icon;?>"></i></a></li>
      <?php } ?>
    </ul>
  </div>
</nav>