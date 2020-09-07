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
                <?php 
                // $member_gender = $this->Crud_model->SelectData('gender');
                //     var_dump($member_gender);
                ?>
                <div class="form-group col-md-3 col-sm-3 col-xs-12 no-padding land-lookingfor">
                    <select name="gender" id="Looking" class="custom-select sources" placeholder="Looking for a">
                      <option value="f" title="Bride" selected>Bride</option>
                      <option value="m" title="Groom" >Groom</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2 col-sm-2 col-xs-6 no-padding land-agefrom agefromto_mob-w">
                    <select name="age_from" id="agefrom" class="custom-select sources" placeholder="Age from">
					    <?php $i = 17; while($i <= 80){ $i++;?>
                          <option value="<?= $i;?>"   title="19 yrs"><?= $i; ?> yrs </option>
                        <?php }?>

                                                
                    </select>
                  </div>
				  <div class="col-xs-2 agetolabel"><p>to</p></div>
                  <div class="form-group col-md-2 col-sm-2 col-xs-6 no-padding land-ageto agefromto_mob-w">
                    <select name="age_to" id="ageto" class="custom-select sources" placeholder="Age to">
                        
                          <option value="18"  title="18 yrs" >18 yrs </option>

                            
                          <option value="19"  title="19 yrs" >19 yrs </option>

                            
                          <option value="20"  title="20 yrs" >20 yrs </option>

                            
                          <option value="21"  title="21 yrs" >21 yrs </option>

                            
                          <option value="22"  title="22 yrs" >22 yrs </option>

                            
                          <option value="23"  title="23 yrs" >23 yrs </option>

                            
                          <option value="24"  title="24 yrs" >24 yrs </option>

                            
                          <option value="25"  title="25 yrs" >25 yrs </option>

                            
                          <option value="26"  title="26 yrs" >26 yrs </option>

                            
                          <option value="27"  title="27 yrs" >27 yrs </option>

                            
                          <option value="28"  title="28 yrs" >28 yrs </option>

                            
                          <option value="29"  title="29 yrs" >29 yrs </option>

                            
                          <option value="30" selected title="30 yrs" >30 yrs </option>

                            
                          <option value="31"  title="31 yrs" >31 yrs </option>

                            
                          <option value="32"  title="32 yrs" >32 yrs </option>

                            
                          <option value="33"  title="33 yrs" >33 yrs </option>

                            
                          <option value="34"  title="34 yrs" >34 yrs </option>

                            
                          <option value="35"  title="35 yrs" >35 yrs </option>

                            
                          <option value="36"  title="36 yrs" >36 yrs </option>

                            
                          <option value="37"  title="37 yrs" >37 yrs </option>

                            
                          <option value="38"  title="38 yrs" >38 yrs </option>

                            
                          <option value="39"  title="39 yrs" >39 yrs </option>

                            
                          <option value="40"  title="40 yrs" >40 yrs </option>

                            
                          <option value="41"  title="41 yrs" >41 yrs </option>

                            
                          <option value="42"  title="42 yrs" >42 yrs </option>

                            
                          <option value="43"  title="43 yrs" >43 yrs </option>

                            
                          <option value="44"  title="44 yrs" >44 yrs </option>

                            
                          <option value="45"  title="45 yrs" >45 yrs </option>

                            
                          <option value="46"  title="46 yrs" >46 yrs </option>

                            
                          <option value="47"  title="47 yrs" >47 yrs </option>

                            
                          <option value="48"  title="48 yrs" >48 yrs </option>

                            
                          <option value="49"  title="49 yrs" >49 yrs </option>

                            
                          <option value="50"  title="50 yrs" >50 yrs </option>

                            
                          <option value="51"  title="51 yrs" >51 yrs </option>

                            
                          <option value="52"  title="52 yrs" >52 yrs </option>

                            
                          <option value="53"  title="53 yrs" >53 yrs </option>

                            
                          <option value="54"  title="54 yrs" >54 yrs </option>

                            
                          <option value="55"  title="55 yrs" >55 yrs </option>

                            
                          <option value="56"  title="56 yrs" >56 yrs </option>

                            
                          <option value="57"  title="57 yrs" >57 yrs </option>

                            
                          <option value="58"  title="58 yrs" >58 yrs </option>

                            
                          <option value="59"  title="59 yrs" >59 yrs </option>

                            
                          <option value="60"  title="60 yrs" >60 yrs </option>

                            
                          <option value="61"  title="61 yrs" >61 yrs </option>

                            
                          <option value="62"  title="62 yrs" >62 yrs </option>

                            
                          <option value="63"  title="63 yrs" >63 yrs </option>

                            
                          <option value="64"  title="64 yrs" >64 yrs </option>

                            
                          <option value="65"  title="65 yrs" >65 yrs </option>

                            
                          <option value="66"  title="66 yrs" >66 yrs </option>

                            
                          <option value="67"  title="67 yrs" >67 yrs </option>

                            
                          <option value="68"  title="68 yrs" >68 yrs </option>

                            
                          <option value="69"  title="69 yrs" >69 yrs </option>

                            
                          <option value="70"  title="70 yrs" >70 yrs </option>

                            
                          <option value="71"  title="71 yrs" >71 yrs </option>

                            
                          <option value="72"  title="72 yrs" >72 yrs </option>

                            
                          <option value="73"  title="73 yrs" >73 yrs </option>

                            
                          <option value="74"  title="74 yrs" >74 yrs </option>

                            
                          <option value="75"  title="75 yrs" >75 yrs </option>

                                              </select>
                  </div>
                  <div class="form-group col-md-3 col-sm-3 col-xs-12 no-padding land-religion">
                    <select name="religion[]" id="Religion" class="custom-select sources" placeholder="Select Religion">
                      <option class="list" value='0' title="">Doesn't matter</option>
                      

                        <option value="739" title="Hindu">Hindu </option>
                      

                        <option value="744" title="Jain">Jain </option>
                      

                        <option value="740" title="Muslim">Muslim </option>
                      

                        <option value="742" title="Sikh">Sikh </option>
                      

                        <option value="741" title="Christian">Christian </option>
                      

                        <option value="748" title="Spiritual">Spiritual </option>
                      

                        <option value="743" title="Parsi">Parsi </option>
                      

                        <option value="746" title="Jewish">Jewish </option>
                      

                        <option value="745" title="Buddhist">Buddhist </option>
                      

                        <option value="1090" title="No Religion">No Religion </option>
                      

                        <option value="749" title="Other">Other </option>
                        <option value="7899" title="Other2">Other2 </option>
                    				
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