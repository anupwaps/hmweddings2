


<!DOCTYPE html>

<html>

<head> 
  <meta charset="UTF-8">      
  <title>HM Weddings </title>    

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link rel="icon" href="<?=base_url()?>template/assets/images/icons/favicon_medium.png" type="image/png" >
  
	<link rel="stylesheet" href="<?=base_url()?>template/assets/css/bootstrap/css/bootstrap.min7b30.css?v=4" media="screen" type="text/css" />   

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/owl.carousel.css" type="text/css" />

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/fonts/stylesheet.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/assets/css/style4c33.css?v=32" type="text/css" />
  <link rel="stylesheet" href="<?=base_url()?>template/assets/maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?=base_url()?>template/assets/css/jquery.mCustomScrollbar.min.css" type="text/css" />

 <!-- script link -->
<script src="<?=base_url()?>template/assets/js/jquery/1.9.1/jquery.min.js"></script>
<!-- owl.carousel js -->
 <script src="<?=base_url()?>template/assets/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>template/assets/js/angular.min.js"></script>
<script src="<?=base_url()?>template/assets/js/angular-sanitize.js"></script>
   
</head>

<body>


	<script type="text/javascript">
	function openregisterModal(){
    $('#loginModal').modal('hide');
	$('#Register').modal('show');
	
   }
</script>

<!-- Sidebar Holder -->
<nav id="sidebar">
  <div id="dismiss" class="dismiss"> <i class="fa fa-arrow-right"></i> </div>
  <ul class="list-unstyled CTAs">
    <li><a href="#" class="login dismiss" data-toggle="modal" data-target="#loginModal" id="HP_Login_CTA">Login</a></li>
    <li><a href="#" class="register dismiss" id="HP_Banner_Register_CTA" data-toggle="modal" data-target="#Register">Register Free!</a></li>
  </ul>
  <ul class="list-unstyled components">
    <li><a href="index.html">Home</a></li>
    <li><a href="Active-member.html">Active Member</a></li>
    <li><a href="plans.html">Premium Plans</a></li>
    <li><a href="happy stories.html">Happy Stories</a></li>
    <li><a href="contact-us.html">Contact us</a></li>
    <li><a href="about-us.html">About us</a></li>
    <li><a href="#">Help</a></li>
    
    <li><a href="#" >Blog</a></li>
	<li><a href="#">Download App</a></li>
    <li><a href="#">Media & PR</a></li>
  </ul>
  <div class="side-feedback">
    <h3>Give Us Your Feedback</h3>
    <p> Need any help? Write to us at <a href="mailto:support@weddings.com">support@weddings.com</a><br>
     Call :
		  <a href="tel:+91-123234567">+91-12334567</a> 
		       (India)</p>
    <h3>Follow us</h3>
    <ul class="list-inline side-social">
      <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
      <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
    </ul>
  </div>
</nav>
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
		   
        <div class="header-btns">
          <a href="#" data-toggle="modal" data-target="#Register"><button type="submit"  class="btn btn-primary ripplelink" id="HP_Banner_Register_CTA">Register Free!</button></a>
          <button type="submit" class="btn btn-primary ripplelink" data-toggle="modal" data-target="#loginModal" id="HP_Login_CTA">Login</button>
   			
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
<style type="text/css">
body.modal-open {position:static !important; overflow:visible; padding:0 !important;}
</style>
<div class="slider-bg">
  <div class="logo-area">
    <a href="index.html"><img src="<?=base_url()?>template/assets/images/logo-new.png"></a>
  </div>
  <!-- Banner start-->  


<!-- Slider Area Start -->
  <?php include_once 'new_theme/slider_3.php';  ?>
  <!-- Slider Area End -->



  <!-- <div class="couple-hero-section-img" alt="lovevivah.com matrimony site"></div> -->
  <?php 
  $member_gender = $this->Crud_model->SelectData('gender');
  print_r($member_gender);?>
  <?php include_once 'new_theme/find_section.php';  ?>
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
<div class="section-space40 ptrn-bg2" ng-app="HomePage"> 
  <!-- Success Stories Start -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1 col-sm-12">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title mb20 text-center">
            <h2>Be inspired by Real Weddings</h2>
            <p>Find inspiration for your Special Day. Yours could be the next Success Story.</p>
          </div>
        </div>
      </div>
      <div class="row ng-scope" >
        <div class="col-md-4 col-sm-4 ">
          <div class="real-wedding-block mb30"> 
            <!-- real wedding block -->
            <div class="real-wedding-img"> <a href="#"><img ng-src="https://res.cloudinary.com/www-lovevivah-com/image/upload/c_fill,f_auto,g_faces,h_215,w_287/v1/successstory/March122020503pm.jpg" alt="" class="img-responsive" src="https://res.cloudinary.com/www-lovevivah-com/image/upload/c_fill,f_auto,g_faces,h_215,w_287/v1/successstory/March122020503pm.jpg"></a> </div>
            <div class="real-wedding-info well-box text-center">
              <h2 class="real-wedding-title"><a href="#" class="title ng-binding">Sunil and Khushboo</a></h2>
              <p class="story-msg ng-binding">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
            </div>           
      <a href="#" class="btn btn-primary btn-block bor-r0 ripplelink">Read more</a>
          </div>
          <!-- /.real wedding block --> 
        </div>

        <div class="col-md-4 col-sm-4 hidden-xs" >
          <div class="real-wedding-block mb30"> 
            <!-- real wedding block -->
            <div class="real-wedding-img"> <a href="#"><img ng-src="https://res.cloudinary.com/www-lovevivah-com/image/upload/c_fill,f_auto,g_faces,h_215,w_287/v1/successstory/July62019949am.jpg" alt="" class="img-responsive" src="https://res.cloudinary.com/www-lovevivah-com/image/upload/c_fill,f_auto,g_faces,h_215,w_287/v1/successstory/July62019949am.jpg"></a> </div>
            <div class="real-wedding-info well-box text-center">
              <h2 class="real-wedding-title"><a href="#" class="title ng-binding">Dr Siddhant Bhardwaj &amp; Dr Sri</a></h2>
              <p class="story-msg ng-binding">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
            </div>           
      <a href="#" class="btn btn-primary btn-block bor-r0 ripplelink" id="HP_SS_ReadMore">Read more</a>
          </div>
          <!-- /.real wedding block --> 
        </div>
        <div class="col-md-4 col-sm-4 hidden-xs">
          <div class="real-wedding-block mb30"> 
            <!-- real wedding block -->
            <div class="real-wedding-img"> <a href="#"><img ng-src="https://res.cloudinary.com/www-lovevivah-com/image/upload/c_fill,f_auto,g_faces,h_215,w_287/v1/successstory/December172018626pm.jpg" alt="" class="img-responsive" src="https://res.cloudinary.com/www-lovevivah-com/image/upload/c_fill,f_auto,g_faces,h_215,w_287/v1/successstory/December172018626pm.jpg"></a> </div>
            <div class="real-wedding-info well-box text-center">
              <h2 class="real-wedding-title"><a href="#" class="title ng-binding">Kanika and Siddharth</a></h2>
              <p class="story-msg ng-binding">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
            </div>           
      <a href="#" class="btn btn-primary btn-block bor-r0 ripplelink" id="HP_SS_ReadMore">Read more</a>
          </div>
          <!-- /.real wedding block --> 
        </div><!-- end ngRepeat: successStories in successStoriesData -->        
        
      </div>
      <!-- /.Success Stories center -->
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center"> <a href="#" class="btn btn-blue bor-r50 btn-big ripplelink" id="HP_View_Stories">View Happy Stories</a> </div> 
      </div>
    </div>
  </div>
</div>

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
<div class="section-space40 bg-light ptrn-bg1">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 col-sm-12">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title mb30 text-center">
            <h2>Premium Members</h2>
            <!-- <p>Search your perfect life-partner from millions of trusted & authentic profiles.</p> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
            <div class="member-ship">
              <img src="<?=base_url()?>template/assets/images/mb1.jpg">
            </div>
            <div class="feature-info">
              <h3>Slade Bennett</h3>
              <div class="mt-2">
                  <ul class="inline-links inline-links--style-2">
                                                                      <li>
                      <span class="c-base-1 strong-500">0</span> Follower(s)</li>
                      <li>
                      <span class="c-base-1 strong-500">2</span> Following</li>
                  </ul>
              </div>
              <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white">Full Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
            <div class="member-ship">
              <img src="<?=base_url()?>template/assets/images/mb2.jpg">
            </div>
            <div class="feature-info">
              <h3>Santos ghjk</h3>
              <div class="mt-2">
                  <ul class="inline-links inline-links--style-2">
                                                                      <li>
                      <span class="c-base-1 strong-500">0</span> Follower(s)</li>
                      <li>
                      <span class="c-base-1 strong-500">2</span> Following</li>
                  </ul>
              </div>
              <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white">Full Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="well-box feature-block text-center" data-toggle="modal" data-target="#loginModal">
            <div class="member-ship">
              <img src="<?=base_url()?>template/assets/images/mb3.jpg">
            </div>
            <div class="feature-info">
              <h3>Elizabeth Mason</h3>
              <div class="mt-2">
                  <ul class="inline-links inline-links--style-2">
                                                                      <li>
                      <span class="c-base-1 strong-500">0</span> Follower(s)</li>
                      <li>
                      <span class="c-base-1 strong-500">2</span> Following</li>
                  </ul>
              </div>
              <a class="btn btn-styled btn-xs btn-base-1 z-depth-2-bottom mt-2 text-white">Full Profile</a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-12 mt30 text-center"> <a href="membership.html" class="btn btn-blue bor-r50 btn-big ripplelink" id="HP_Membership_CTA">Browse Membership Plans</a>
          <p class="member-know"> To know more, call us @ +91-7827948215 (India) </p>
        </div>
      </div> -->
    </div>
  </div>
</div>

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
		  <form method="" name="loginfrm" id="loginfrm" action="">
           <div class="form-group mt-10">
            <div class="">
              <input type="email" name="emailid" id="loginEmail" class="common-input" placeholder="Email Address">
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
	
	<style type="text/css">
.hiring{
  animation: MoveUpDown 1s linear infinite;
  position: fixed;
  right:10px;
  bottom: 0;
  z-index:1000;
	}
.counselling{
	animation: MoveUpDown 1s linear infinite;
    position: fixed;
    left: 10px;
    bottom: 30px;   
}	
@media (max-width: 767px){
	.hiring{
		 margin-bottom: 10px;
		 display:none;
		}
		.counselling{
			display:none;
		}
	}
@keyframes MoveUpDown {
  0%, 100% {
    bottom: 0;
  }
  50% {
    bottom: 20px;
  }
}

</style>

<script>
  //Slider js 
  /*-------------------------------------
     Home page Slider
     -------------------------------------*/    
    // Declare Carousel jquery object
    var owl = $('#home-slider');

    // Carousel initialization
    owl.owlCarousel({
        loop:true,
        margin:0,
        navSpeed:1200,
        nav:true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        items:1,
        autoplay:true,
        autoplayTimeout: 5000,
        transitionStyle : "fade",
    });

</script>
</body>

</html> 
