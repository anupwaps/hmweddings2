
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
        <!-- <div class="navbar-brand"> <a href="index.html"><img src="<?=base_url()?>template/assets/images/logo.png" alt="LoveVivah" class="img-responsive"></a>
        </div> -->
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
<div id="Register" class="modal fade" role="dialog" style="display: none;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body"> <a href="javascript:void(0);" class="loginclose" data-dismiss="modal">×</a>
        <div class="login-form-section register-pop">
          <h2>Register Free</h2>
          <p>Its really simple and highly secured</p>
		   <form name="create-account" method="POST" >
		   <input  type="hidden" name="page_source" id="page_source" value="home" autocomplete="off" />
			   <div class="form-group mt-10">
            <div class="src_field_box">
              <label>Email Address</label>
              <input name="emailaddress" id="email" class="common-input" placeholder="Enter your email address" autocomplete="off" type="email" maxlength='50'  data-live-search="true" data-valid="required">
		
              <small class="lv-alert alert-danger">Please enter your email address</small> </div>
          </div>
          <div class="form-group">
            <div class="src_field_box">
              <label>Create a Password</label>
              <input name="password" id="password" class="common-input" placeholder="Enter Password" autocomplete="new-password"  maxlength='50' type="password" data-live-search="true" data-valid="required">
              <small class="lv-alert alert-danger">Please enter a password</small> </div>
          </div>
		  
          <div class="form-group">
            <div class="src_field_box">
            <div class="row">
              <div class="col-md-12"><label>Mobile Number</label> </div>
              <div class="col-md-5 paddright">
              <select class="common-input selectval" id="country" onchange="get_moblengthvalue(this);" data-valid="required">
			                    <option data-countryid="100" value="100">India(+91)</option>
                  
                                 <option data-countryid="221" value="221">United Kingdom(+44)</option>
                  
                                 <option data-countryid="222" value="222">United States(+1)</option>
                  
                                 <option data-countryid="1" value="1">Afghanistan(+93)</option>
                  
                                 <option data-countryid="2" value="2">Albania(+355)</option>
                  
                                 <option data-countryid="3" value="3">Algeria(+213)</option>
                  
                                 <option data-countryid="4" value="4">American Samoa(+684)</option>
                  
                                 <option data-countryid="5" value="5">Andorra(+376)</option>
                  
                                 <option data-countryid="6" value="6">Angola(+244)</option>
                  
                                 <option data-countryid="7" value="7">Anguilla(+1)</option>
                  
                                 <option data-countryid="8" value="8">Antarctica(+672)</option>
                  
                                 <option data-countryid="9" value="9">Antigua and Barbuda(+1)</option>
                  
                                 <option data-countryid="10" value="10">Argentina(+54)</option>
                  
                                 <option data-countryid="11" value="11">Armenia(+374)</option>
                  
                                 <option data-countryid="12" value="12">Aruba(+297)</option>
                  
                                 <option data-countryid="13" value="13">Australia(+61)</option>
                  
                                 <option data-countryid="14" value="14">Austria(+43)</option>
                  
                                 <option data-countryid="15" value="15">Azerbaidjan(+994)</option>
                  
                                 <option data-countryid="16" value="16">Bahamas(+1)</option>
                  
                                 <option data-countryid="17" value="17">Bahrain(+973)</option>
                  
                                 <option data-countryid="18" value="18">Bangladesh(+880)</option>
                  
                                 <option data-countryid="19" value="19">Barbados(+1)</option>
                  
                                 <option data-countryid="20" value="20">Belarus(+375)</option>
                  
                                 <option data-countryid="21" value="21">Belgium(+32)</option>
                  
                                 <option data-countryid="22" value="22">Belize(+501)</option>
                  
                                 <option data-countryid="23" value="23">Benin(+229)</option>
                  
                                 <option data-countryid="24" value="24">Bermuda(+1)</option>
                  
                                 <option data-countryid="35" value="35">Bhutan(+975)</option>
                  
                                 <option data-countryid="25" value="25">Bolivia(+591)</option>
                  
                                 <option data-countryid="26" value="26">Bosnia-Herzegovina(+387)</option>
                  
                                 <option data-countryid="27" value="27">Botswana(+267)</option>
                  
                                 <option data-countryid="28" value="28">Bouvet Island(+47)</option>
                  
                                 <option data-countryid="29" value="29">Brazil(+55)</option>
                  
                                 <option data-countryid="30" value="30">British Indian O. Terr.(+246)</option>
                  
                                 <option data-countryid="31" value="31">Brunei Darussalam(+673)</option>
                  
                                 <option data-countryid="32" value="32">Bulgaria(+359)</option>
                  
                                 <option data-countryid="33" value="33">Burkina Faso(+226)</option>
                  
                                 <option data-countryid="34" value="34">Burundi(+257)</option>
                  
                                 <option data-countryid="36" value="36">Cambodia(+855)</option>
                  
                                 <option data-countryid="37" value="37">Cameroon(+237)</option>
                  
                                 <option data-countryid="38" value="38">Canada(+1)</option>
                  
                                 <option data-countryid="39" value="39">Cape Verde(+238)</option>
                  
                                 <option data-countryid="40" value="40">Cayman Islands(+1)</option>
                  
                                 <option data-countryid="41" value="41">Central African Rep.(+236)</option>
                  
                                 <option data-countryid="42" value="42">Chad(+235)</option>
                  
                                 <option data-countryid="43" value="43">Chile(+56)</option>
                  
                                 <option data-countryid="44" value="44">China(+86)</option>
                  
                                 <option data-countryid="47" value="47">Colombia(+57)</option>
                  
                                 <option data-countryid="48" value="48">Comoros(+269)</option>
                  
                                 <option data-countryid="49" value="49">Congo(+242)</option>
                  
                                 <option data-countryid="50" value="50">Cook Islands(+682)</option>
                  
                                 <option data-countryid="51" value="51">Costa Rica(+506)</option>
                  
                                 <option data-countryid="53" value="53">Croatia(+385)</option>
                  
                                 <option data-countryid="54" value="54">Cuba(+53)</option>
                  
                                 <option data-countryid="55" value="55">Cyprus(+357)</option>
                  
                                 <option data-countryid="56" value="56">Czech Republic(+420)</option>
                  
                                 <option data-countryid="57" value="57">Czechoslovakia()</option>
                  
                                 <option data-countryid="58" value="58">Denmark(+45)</option>
                  
                                 <option data-countryid="59" value="59">Djibouti(+253)</option>
                  
                                 <option data-countryid="60" value="60">Dominica(+1)</option>
                  
                                 <option data-countryid="62" value="62">Dominican Republic(+1)</option>
                  
                                 <option data-countryid="63" value="63">East Timor(+670)</option>
                  
                                 <option data-countryid="64" value="64">Ecuador(+593)</option>
                  
                                 <option data-countryid="65" value="65">Egypt(+20)</option>
                  
                                 <option data-countryid="66" value="66">El Salvador(+503)</option>
                  
                                 <option data-countryid="67" value="67">Equatorial Guinea(+240)</option>
                  
                                 <option data-countryid="68" value="68">Estonia(+372)</option>
                  
                                 <option data-countryid="69" value="69">Ethiopia(+251)</option>
                  
                                 <option data-countryid="70" value="70">Falkland Isl.(Malvinas)(+500)</option>
                  
                                 <option data-countryid="71" value="71">Faroe Islands(+298)</option>
                  
                                 <option data-countryid="72" value="72">Fiji(+679)</option>
                  
                                 <option data-countryid="73" value="73">Finland(+358)</option>
                  
                                 <option data-countryid="74" value="74">France(+33)</option>
                  
                                 <option data-countryid="75" value="75">France (European Ter.)()</option>
                  
                                 <option data-countryid="76" value="76">French Southern Terr.()</option>
                  
                                 <option data-countryid="77" value="77">Gabon(+241)</option>
                  
                                 <option data-countryid="78" value="78">Gambia(+220)</option>
                  
                                 <option data-countryid="79" value="79">Georgia(+995)</option>
                  
                                 <option data-countryid="80" value="80">Germany(+49)</option>
                  
                                 <option data-countryid="81" value="81">Ghana(+233)</option>
                  
                                 <option data-countryid="82" value="82">Gibraltar(+350)</option>
                  
                                 <option data-countryid="84" value="84">Greece(+30)</option>
                  
                                 <option data-countryid="85" value="85">Greenland(+299)</option>
                  
                                 <option data-countryid="86" value="86">Grenada(+1)</option>
                  
                                 <option data-countryid="87" value="87">Guadeloupe (Fr.)(+590)</option>
                  
                                 <option data-countryid="88" value="88">Guam (US)(+1)</option>
                  
                                 <option data-countryid="89" value="89">Guatemala(+502)</option>
                  
                                 <option data-countryid="90" value="90">Guinea(+224)</option>
                  
                                 <option data-countryid="91" value="91">Guinea Bissau(+245)</option>
                  
                                 <option data-countryid="92" value="92">Guyana(+592)</option>
                  
                                 <option data-countryid="93" value="93">Guyana (Fr.)()</option>
                  
                                 <option data-countryid="94" value="94">Haiti(+509)</option>
                  
                                 <option data-countryid="95" value="95">Heard & McDonald Isl.()</option>
                  
                                 <option data-countryid="96" value="96">Honduras(+504)</option>
                  
                                 <option data-countryid="97" value="97">Hong Kong(+852)</option>
                  
                                 <option data-countryid="98" value="98">Hungary(+36)</option>
                  
                                 <option data-countryid="99" value="99">Iceland(+354)</option>
                  
                                 <option data-countryid="101" value="101">Indonesia(+62)</option>
                  
                                 <option data-countryid="102" value="102">Iran(+98)</option>
                  
                                 <option data-countryid="103" value="103">Iraq(+964)</option>
                  
                                 <option data-countryid="104" value="104">Ireland(+353)</option>
                  
                                 <option data-countryid="105" value="105">Israel(+972)</option>
                  
                                 <option data-countryid="232" value="232">Italy(+39)</option>
                  
                                 <option data-countryid="106" value="106">Ivory Coast(+225)</option>
                  
                                 <option data-countryid="107" value="107">Jamaica(+1)</option>
                  
                                 <option data-countryid="108" value="108">Japan(+81)</option>
                  
                                 <option data-countryid="109" value="109">Jordan(+962)</option>
                  
                                 <option data-countryid="110" value="110">Kazakhstan(+7)</option>
                  
                                 <option data-countryid="111" value="111">Kenya(+254)</option>
                  
                                 <option data-countryid="113" value="113">Kiribati(+686)</option>
                  
                                 <option data-countryid="114" value="114">Korea (North)(+850 )</option>
                  
                                 <option data-countryid="115" value="115">Korea (South)(+82)</option>
                  
                                 <option data-countryid="116" value="116">Kuwait(+965)</option>
                  
                                 <option data-countryid="112" value="112">kyrgyzstan(+996)</option>
                  
                                 <option data-countryid="117" value="117">Laos(+856)</option>
                  
                                 <option data-countryid="118" value="118">Latvia(+371)</option>
                  
                                 <option data-countryid="119" value="119">Lebanon(+961)</option>
                  
                                 <option data-countryid="120" value="120">Lesotho(+266)</option>
                  
                                 <option data-countryid="121" value="121">Liberia(+231)</option>
                  
                                 <option data-countryid="122" value="122">Libya(+218)</option>
                  
                                 <option data-countryid="123" value="123">Liechtenstein(+423)</option>
                  
                                 <option data-countryid="124" value="124">Lithuania(+370)</option>
                  
                                 <option data-countryid="125" value="125">Luxembourg(+352)</option>
                  
                                 <option data-countryid="126" value="126">Macau(+853)</option>
                  
                                 <option data-countryid="127" value="127">Madagascar(+261)</option>
                  
                                 <option data-countryid="128" value="128">Malawi(+265)</option>
                  
                                 <option data-countryid="129" value="129">Malaysia(+60)</option>
                  
                                 <option data-countryid="130" value="130">Maldives(+960)</option>
                  
                                 <option data-countryid="131" value="131">Mali(+223)</option>
                  
                                 <option data-countryid="132" value="132">Malta(+356)</option>
                  
                                 <option data-countryid="133" value="133">Marshall Islands(+692 )</option>
                  
                                 <option data-countryid="134" value="134">Martinique (Fr.)(+596)</option>
                  
                                 <option data-countryid="135" value="135">Mauritania(+222)</option>
                  
                                 <option data-countryid="136" value="136">Mauritius(+230)</option>
                  
                                 <option data-countryid="137" value="137">Mexico(+52)</option>
                  
                                 <option data-countryid="138" value="138">Micronesia(+691)</option>
                  
                                 <option data-countryid="139" value="139">Moldova(+373)</option>
                  
                                 <option data-countryid="140" value="140">Monaco(+377)</option>
                  
                                 <option data-countryid="141" value="141">Mongolia(+976)</option>
                  
                                 <option data-countryid="142" value="142">Montserrat(+1)</option>
                  
                                 <option data-countryid="143" value="143">Morocco(+212)</option>
                  
                                 <option data-countryid="144" value="144">Mozambique(+258)</option>
                  
                                 <option data-countryid="145" value="145">Myanmar(+95)</option>
                  
                                 <option data-countryid="146" value="146">Namibia(+264)</option>
                  
                                 <option data-countryid="147" value="147">Nauru(+674)</option>
                  
                                 <option data-countryid="148" value="148">Nepal(+977)</option>
                  
                                 <option data-countryid="150" value="150">Netherland Antilles(+599)</option>
                  
                                 <option data-countryid="151" value="151">Netherlands(+31)</option>
                  
                                 <option data-countryid="152" value="152">Neutral Zone()</option>
                  
                                 <option data-countryid="153" value="153">New Caledonia (Fr.)(+687)</option>
                  
                                 <option data-countryid="154" value="154">New Zealand(+64)</option>
                  
                                 <option data-countryid="155" value="155">Nicaragua(+505)</option>
                  
                                 <option data-countryid="156" value="156">Niger(+227)</option>
                  
                                 <option data-countryid="157" value="157">Nigeria(+234)</option>
                  
                                 <option data-countryid="158" value="158">Niue(+683)</option>
                  
                                 <option data-countryid="159" value="159">Norfolk Island(+672)</option>
                  
                                 <option data-countryid="160" value="160">Northern Mariana Isl.(+1)</option>
                  
                                 <option data-countryid="161" value="161">Norway(+47)</option>
                  
                                 <option data-countryid="162" value="162">Oman(+968)</option>
                  
                                 <option data-countryid="163" value="163">Pakistan(+92)</option>
                  
                                 <option data-countryid="164" value="164">Palau(+680)</option>
                  
                                 <option data-countryid="165" value="165">Panama(+507)</option>
                  
                                 <option data-countryid="166" value="166">Papua New Guinea(+675)</option>
                  
                                 <option data-countryid="167" value="167">Paraguay(+595)</option>
                  
                                 <option data-countryid="168" value="168">Peru(+51)</option>
                  
                                 <option data-countryid="169" value="169">Philippines(+63)</option>
                  
                                 <option data-countryid="170" value="170">Pitcairn Islands(+672)</option>
                  
                                 <option data-countryid="171" value="171">Poland(+48)</option>
                  
                                 <option data-countryid="172" value="172">Polynesia (Fr.)(+689)</option>
                  
                                 <option data-countryid="173" value="173">Portugal(+351)</option>
                  
                                 <option data-countryid="174" value="174">Qatar(+974)</option>
                  
                                 <option data-countryid="175" value="175">Reunion (Fr.)(+262)</option>
                  
                                 <option data-countryid="176" value="176">Romania(+40)</option>
                  
                                 <option data-countryid="177" value="177">Russian Federation(+7)</option>
                  
                                 <option data-countryid="178" value="178">Rwanda(+250)</option>
                  
                                 <option data-countryid="179" value="179">Saint Lucia(+1)</option>
                  
                                 <option data-countryid="180" value="180">Samoa(+685)</option>
                  
                                 <option data-countryid="181" value="181">San Marino(+378)</option>
                  
                                 <option data-countryid="182" value="182">Saudi Arabia(+966)</option>
                  
                                 <option data-countryid="183" value="183">Senegal(+221)</option>
                  
                                 <option data-countryid="184" value="184">Seychelles(+248)</option>
                  
                                 <option data-countryid="185" value="185">Sierra Leone(+232)</option>
                  
                                 <option data-countryid="186" value="186">Singapore(+65)</option>
                  
                                 <option data-countryid="187" value="187">Slovakia(+421)</option>
                  
                                 <option data-countryid="188" value="188">Slovenia(+386)</option>
                  
                                 <option data-countryid="189" value="189">Solomon Islands(+677)</option>
                  
                                 <option data-countryid="190" value="190">Somalia(+252)</option>
                  
                                 <option data-countryid="191" value="191">South Africa(+27)</option>
                  
                                 <option data-countryid="192" value="192">Spain(+34)</option>
                  
                                 <option data-countryid="193" value="193">St. Helena(+290)</option>
                  
                                 <option data-countryid="194" value="194">St. Pierre & Miquelon(+508)</option>
                  
                                 <option data-countryid="195" value="195">St. Tome and Principe(+239)</option>
                  
                                 <option data-countryid="196" value="196">St.Kitts Nevis Anguilla(+1)</option>
                  
                                 <option data-countryid="197" value="197">St.Vincent & Grenadines(+1)</option>
                  
                                 <option data-countryid="198" value="198">Sudan(+249)</option>
                  
                                 <option data-countryid="199" value="199">Suriname(+597)</option>
                  
                                 <option data-countryid="200" value="200">Svalbard(+508)</option>
                  
                                 <option data-countryid="201" value="201">Swaziland(+268)</option>
                  
                                 <option data-countryid="202" value="202">Sweden(+46)</option>
                  
                                 <option data-countryid="203" value="203">Switzerland(+41)</option>
                  
                                 <option data-countryid="204" value="204">Syria(+963)</option>
                  
                                 <option data-countryid="205" value="205">Tadjikistan(+992)</option>
                  
                                 <option data-countryid="206" value="206">Taiwan(+886)</option>
                  
                                 <option data-countryid="207" value="207">Tanzania(+255)</option>
                  
                                 <option data-countryid="208" value="208">Thailand(+66)</option>
                  
                                 <option data-countryid="209" value="209">Togo(+228)</option>
                  
                                 <option data-countryid="210" value="210">Tokelau(+690)</option>
                  
                                 <option data-countryid="211" value="211">Tonga(+676)</option>
                  
                                 <option data-countryid="212" value="212">Trinidad & Tobago(+1)</option>
                  
                                 <option data-countryid="213" value="213">Tunisia(+216)</option>
                  
                                 <option data-countryid="214" value="214">Turkey(+90)</option>
                  
                                 <option data-countryid="215" value="215">Turkmenistan(+993)</option>
                  
                                 <option data-countryid="216" value="216">Turks & Caicos Islands(+1)</option>
                  
                                 <option data-countryid="217" value="217">Tuvalu(+688)</option>
                  
                                 <option data-countryid="218" value="218">Uganda(+256)</option>
                  
                                 <option data-countryid="219" value="219">Ukraine(+380)</option>
                  
                                 <option data-countryid="220" value="220">United Arab Emirates(+971)</option>
                  
                                 <option data-countryid="223" value="223">Uruguay(+598)</option>
                  
                                 <option data-countryid="224" value="224">US Minor outlying Isl.()</option>
                  
                                 <option data-countryid="225" value="225">Uzbekistan(+998)</option>
                  
                                 <option data-countryid="226" value="226">Vanuatu(+678)</option>
                  
                                 <option data-countryid="227" value="227">Vatican City State(+39)</option>
                  
                                 <option data-countryid="228" value="228">Venezuela(+58)</option>
                  
                                 <option data-countryid="229" value="229">Vietnam(+84)</option>
                  
                                 <option data-countryid="230" value="230">Virgin Islands (British)(+1 )</option>
                  
                                 <option data-countryid="231" value="231">Zimbabwe(+263)</option>
                  
               			  </select>
			  <small class="lv-alert alert-danger">Please select Country</small> 
              </div>
              <div class="col-md-7"><input name="phone" id="phone" class="common-input" placeholder="Enter Mobile Number" autocomplete="off" type="text" maxlength="10" data-live-search="true" data-valid="required" data-type="phone" minlength="10">
              <small class="lv-alert alert-danger">Enter valid mobile number</small> 
              </div>
              
              </div>
              </div>
          </div>
          
          <div class="form-group">
            <div class="src_field_box">
              <label>Profile Creating for</label>
             <select class="common-input selectval" id="profile_for" name="profile_for" data-live-search="true" data-valid="required">
			  <option value="">Select </option>
			  <option value="7">Self</option> 
			   <option value="1087">Son</option> 
			    <option value="9">Daughter</option> 
				 <option value="10">Brother</option> 
				  <option value="11">Sister</option> 
				   <option value="13">Relative</option> 
				    <option value="12">Friend</option> 
			  </select>
              <small class="lv-alert alert-danger">Please select for whom you are creating profile</small></div>
          </div>
          
          <div class="form-group">
            <div class="src_field_box">
              <button type="submit" id="LoginBTNnnn" onclick="NewAccount.Screen.Self.submit(event);" class="btn btn-lg btn-primary btn-block ripplelink">Submit</button>
            </div>
          </div>
		  </form>
          <div class="alreadymember">
            <ul>
              <li>Already a member ? <a href="javascript:void('0')" data-toggle="modal" onclick="openloginModal()">Login</a></li>
            </ul>
          </div>
                   
        </div>
      </div>
    </div>
  </div>
</div>
<!--Header End--> 