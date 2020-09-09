<div class="find-section"> 
    <!-- Find search section-->
    <div class="container">
      <div class="row">
        <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12 finder-block">
          <div class="finder-caption">
            <h2 class="tagline-desktop">Dream it. Believe it. Make it happen! </h2>
          </div>
          <div class="finder-form-transparent text-left">
            <h2 class="tagline-mobile">Dream it. Believe it. Make it happen! </h2>
            <form name="login" action="<?=base_url()?>home/listing/home_search" method="POST">
              <div class = "row">
                <div class="search-section">
                
                <div class="form-group col-md-3 col-sm-3 col-xs-12 no-padding land-lookingfor">
                  <?php if (!empty($this->session->userdata['member_id'])) { ?>
                      <select name="gender" id="Looking" class="custom-select sources" placeholder="Looking for a">
                      <?php $member_gender = $this->db->get_where('member',array('member_id'=>$this->session->userdata['member_id']))->row()->gender; ?>
                          <?php if($member_gender == '2') { ?>
                              <option value="1" >Groom</option>
                          <?php } elseif ($member_gender == '1') { ?>
                              <option value="2" >Bride</option>
                        <?php } ?>
                      </select>
                    <?php } else {?>
                      <select name="gender" id="Looking" class="custom-select sources" placeholder="Looking for a">
                            <option value="1" >Groom</option>
                            <option value="2" >Bride</option>
                      </select>
                    <?php }?>
                  </div>
                  <div class="form-group col-md-2 col-sm-2 col-xs-6 no-padding land-agefrom agefromto_mob-w">
                    <select name="aged_from" id="agefrom" class="custom-select sources" placeholder="Age from">
					              <?php $i = 17; while($i <= 80){ $i++;?>
                          <option value="<?= $i;?>"   title="<?= $i;?> yrs"><?= $i; ?> yrs </option>
                        <?php }?>

                                                
                    </select>
                  </div>
				      <div class="col-xs-2 agetolabel"><p>to</p></div>
                  <div class="form-group col-md-2 col-sm-2 col-xs-6 no-padding land-ageto agefromto_mob-w">
                    <select name="aged_to" id="ageto" class="custom-select sources" placeholder="Age to">
                        
                    <?php $i = 17; while($i <= 80){ $i++;?>
                        <option value="<?= $i;?>"   title="<?= $i;?> yrs"><?= $i; ?> yrs </option>
                      <?php }?>

                    </select>
                  </div>
                  <div class="form-group col-md-3 col-sm-3 col-xs-12 no-padding land-religion">
                    <select name="religion" id="Religion" class="custom-select sources" placeholder="Select Religion">
                    <?php 
                    $religions = $this->Crud_model->SelectDataOrder('religion', '*', '','religion_id','desc');
                        foreach($religions as $r){
                    ?>
                      <option class='list' value=''>Doesn't matter</option>
                      <option class="list" value='<?= $r->religion_id?>' title=""><?= $r->name?></option>
                    <?php }?>		
                    </select>
                  </div>
                  <div class="form-group col-md-2 col-sm-2 col-xs-12 no-padding land-search">
                    <button type="submit" class="btn btn-primary bor-rmd btn-lg btn-block ripplelink" id="HP_Search_Now">Search</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>