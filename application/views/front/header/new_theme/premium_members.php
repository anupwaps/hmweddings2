<div class="section-space40 bg-light ptrn-bg1">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 col-sm-12">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title mb30 text-center">
            <h2>Premium Members Area</h2>
            <!-- <p>Search your perfect life-partner from millions of trusted & authentic profiles.</p> -->
          </div>
        </div>
      </div>
      <div class="row">
      <?php foreach ($premium_members as $premium_member): ?>
        <div class="col-md-4 col-sm-4">
          <div class="well-box feature-block text-center" >
            <div class="member-ship">
            <?php
                $image = json_decode($premium_member->profile_image, true);
                    if (file_exists('uploads/profile_image/'.$image[0]['profile_image'])) {
                    ?>
                    <?php
                        $pic_privacy = $premium_member->pic_privacy;
                        $pic_privacy_data = json_decode($pic_privacy, true);
                        $is_premium = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata('member_id'), 'membership');
                        if($pic_privacy_data[0]['profile_pic_show']=='only_me'){
                            if($premium_member->member_id != $this->session->userdata('member_id')){

                    ?>
                        <img src="<?=base_url()?>uploads/profile_image/default.jpg">
                    <?php }else{ ?>
                        <img src="<?=base_url()?>uploads/profile_image/<?=$image[0]['profile_image']?>">
                        <?php } }elseif ($pic_privacy_data[0]['profile_pic_show']=='premium' and $is_premium==2) {
                        ?>
                            <img src="<?=base_url()?>uploads/profile_image/<?=$image[0]['profile_image']?>">
                        <?php }elseif ($pic_privacy_data[0]['profile_pic_show']=='premium' and $is_premium==1) {
                        ?>
                            <img src="<?=base_url()?>uploads/profile_image/default.jpg">
                        <?php }elseif ($pic_privacy_data[0]['profile_pic_show']=='all') {
                        ?>
                        <img src="<?=base_url()?>uploads/profile_image/<?=$image[0]['profile_image']?>">
                    <?php }else{ ?>
                        <img src="<?=base_url()?>uploads/profile_image/default.jpg">
                    <?php }
                    }
                    else {
                    ?>
                        <img src="<?=base_url()?>uploads/profile_image/default.jpg">
                    <?php
                    }
                ?>
              
            </div>
            <div class="feature-info">
              <h3><?=$premium_member->first_name." ".$premium_member->last_name?></h3>
              <div class="mt-2">
                  <ul class="inline-links inline-links--style-2">
                  <?php
                    $followers = $this->db->get_where('member', array('member_id' => $premium_member->member_id))->row()->follower;
                    $following_json = $this->db->get_where('member', array('member_id' => $premium_member->member_id))->row()->followed;
                    $following = json_decode($following_json, true);
                ?>
                                                                      <li>
                      <span class="c-base-1 strong-500"><?=$followers?></span> Follower(s)</li>
                      <li>
                      <span class="c-base-1 strong-500"><?=count($following)?></span> Following</li>
                  </ul>
              </div>
              <?php if($premium_member->member_id == $this->session->userdata('member_id')){ ?>
              <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" href="<?=base_url()?>home/profile">Full Profile</a>
              <?php } else { ?>
                <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white" onclick="return goto_profile(<?=$premium_member->member_id?>)">Full Profile</a>
                <?php } ?>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>

<script>
    var isloggedin = "<?=$this->session->userdata('member_id')?>";

    $(document).ready(function() {
        setTimeout(function() {
            set_premium_member_box_height();
        }, 1000);
    });

    function set_premium_member_box_height() {
        var max_title = 0;
        $('.swiper-slide .premium_heading').each(function() {
            var current_height = parseInt($(this).css('height'));
            if (current_height >= max_title) {
                max_title = current_height;
            }
        });
        $('.swiper-slide .premium_heading').css('height', max_title);
    }

    function goto_profile(id) {
        // alert(id);
        
        if (isloggedin == "") {
          $("#loginModal").modal();
            // $("#active_modal").modal("toggle");
            // $("#modal_header").html("<?=translate('please_login')?>");
            // $("#modal_body").html("<p class='text-center'><?=translate('please_login_to_view_full_profile_of_this_member')?></p>");
            // $("#modal_buttons").html("<button type='button' class='btn btn-danger btn-sm btn-shadow' data-dismiss='modal' style='width:25%'><?=translate('close')?></button> <a href='<?=base_url()?>home/login' class='btn btn-sm btn-base-1 btn-shadow' style='width:25%'><?=translate('login')?></a>");
        }
        else {
            window.location.href = "<?=base_url()?>home/member_profile/"+id;
        }
    }
</script>