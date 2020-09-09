<?php
    if (!empty($this->session->userdata['member_id'])) {
    ?>
        <li><a href="<?=base_url()?>home/logout" class="login dismiss" data-toggle="modal" id="HP_Login_CTA">Logout</a></li>
    <?php	
    }
    else{
    ?>	
        <li><a href="#" class="login dismiss" data-toggle="modal" data-target="#loginModal" id="HP_Login_CTA">Login</a></li>
    <?php }?>
    <li><a href="#" class="register dismiss" id="HP_Banner_Register_CTA" data-toggle="modal" data-target="#Register">Register Free!</a></li>