<?php
date_default_timezone_set('America/Los_Angeles');

// HTML Title
$htmlTitle = $_GET['HTML-title'];

// Links
$typURL   = $_GET['typ-url'];
$edcValue = $_GET['edc-value'];

// Header
// $headline = $_GET['headline'];
$subhead  = $_GET['subhead'];

// Form Copy
$formHeadline = $_GET['form-headline'];
$formCopy     = $_GET['form-copy'];

// Social Copy
$formURL       = $_GET['form-url'];
$ogTitle       = $_GET['og-title'];
$ogDescription = $_GET['og-description'];
$twCopy        = $_GET['tw-copy'];
?>
<!DOCTYPE html>
<!--[if lt IE 8]> <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title><?php echo htmlentities($htmlTitle, ENT_QUOTES, 'utf-8'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="maximum-scale=1.0, width=device-width">
	
	<!--Update with Webpage Information -->
	<meta property="og:title" content="<?php echo $ogTitle; ?>">
	<meta property="og:site_name" content="Intel">
	<meta property="og:description" content="<?php echo $ogDescription; ?>"/>
	<meta property="og:url" content="<?php echo $formURL; ?>">
	<meta property="og:type" content="webpage">
	<meta property="og:image" content="https://img03.en25.com/Web/IntelCorporation/{c5d7dfca-36bf-44ea-8c7e-620229d9d6e0}_intel_logo_1024.png"> 
	<meta property="wap:country" content="us">
	<meta property="wap:sector" content="embedded">
	<meta property="wap:language" content="en">
	<meta property="wap:regStatus" content="start">
	<!--Update with Webpage Information -->

	<link rel="stylesheet" href="https://img03.en25.com/Web/IntelCorporation/{f76bcaac-b2c2-4b54-acb7-8dc61f3c6de4}_embedded.us.en.style-111014.css">
	
	<!--[if lte IE 9]>
		<script src="https://img03.en25.com/Web/IntelCorporation/{c7c4d720-f522-4609-8326-c83ac1d43a74}_html5shiv.js"></script>
	<![endif]-->

	<style>
		em { font-style: italic; }
		
		#m-share-content { display: none; }

		/* Custom styles to work with copy */
		.full-width-block h4 {
			line-height: 130%;
			margin-bottom: 45px;
		}
		
		.work h4 { margin-bottom: 3px; }

		form small + small { 
			margin-bottom: 15px;
			margin-top: 25px;
		}
		
		label {
			margin-bottom: 0;
		}
		
		/* Secondary Selection */
		#formElement8 { margin-bottom: 15px; }

		.secondary-label {
			line-height: 140% !important;
			margin-bottom: 5px;
		}
		
		/* Work with Intel */
		#formElement9 { margin-bottom: 15px; }
		
		#pre-pop-values { display: none; }

		.checkbox { margin-bottom: 3px; }

		/* Clear fields link. Incorporate into main stylesheet */
		#clear-fields {
			color: #007dc6;
			cursor: pointer;
		}

		#clear-fields:hover { text-decoration: underline; }

		#footer-kink h5 { padding-left: 38.59574%; }
		
		.checkbox p { width: 80%; }

		@media screen and ( max-width: 480px ) {
			#m-share-content { display: block; }
			#share-content { display: none; }

			.full-width-block h4 { margin-bottom: 25px; }

			.work h4 { margin-bottom: 15px; }

			#footer-kink h5 { padding-left: 0; }

			.checkbox p { width: 85%; }
		}
	</style>

	<script>
	// Opens social sharing in a new window
	var windowObjectReference;

	function openRequestedPopup(popURL) {
	  windowObjectReference = window.open(
	  	popURL,
	  	'targetWindow',
	  	'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=550,height=570'
	  	);
	}
	</script>
</head>

<body>

<!-- START Web Analytics Sync -->
<script>
if((/t.eloqua.com/g.test(location.hostname)))
{
    window.location = $("meta[property='og:url']").attr('content') + "/<span class="eloquaemail" >PURL1</span>";
}

var tmsElqForm ={
    "intel_erpm_id1":"<span class="eloquaemail" >Account_ERPM_ID1</span>",
    "intel_account_cpm_id1":"<span class="eloquaemail" >Account_CPM_ID1</span>",
    "intel_sector31":"<span class="eloquaemail" >Channel_Sector1</span>",
    "intel_sector61": "<span class="eloquaemail" >Channel_Intel_Technology_Provider_SubSector1</span>", 
    "intel_sector41": "<span class="eloquaemail" >Channel_Retail_Ecosystem_SubSector1</span>", 
    "intel_sector31": "<span class="eloquaemail" >Channel_Retail_Resellers_SubSector1</span>", 
    "intel_sector51": "<span class="eloquaemail" >Consumer_Sector1</span>", 
    "intel_cpm_id1": "<span class="eloquaemail" >CPM_ID1</span>", 
    "intel_sector41": "<span class="eloquaemail" >Educator_Sector1</span>", 
    "contactidext": "<span class="eloquaemail">Eloqua_Contact_ID1</span>", 
    "intel_sector11": "<span class="eloquaemail" >Embedded_Sector1</span>", 
    "intel_subsector_51": "<span class="eloquaemail" >Intel_Education_SubSector1</span>", 
    "intel_sector21": "<span class="eloquaemail" >ITDM_Sector1</span>", 
    "intel_subsector11": "<span class="eloquaemail" >ITDM_ESS_SubSector1</span>", 
    "intel_subsector21": "<span class="eloquaemail" >ITDM_WA_SubSector1</span>", 
    "industry1": "<span class="eloquaemail" >Contact_Industry1</span>", 
    "itdm_industry": "<span class="eloquaemail" >ITDM_Industry1</span>",
    "embedded_industry": "<span class="eloquaemail" >Embedded_Industry1</span>",
    "account_industry": "<span class="eloquaemail" >Account_Industry1</span>",
    "country": "<span class="eloquaemail" >Country</span>"
};
</script>
<script src="https://www-ssl.intel.com/content/dam/www/global/wap/eloqua.sync.js" type="text/javascript"></script>
<!-- END Web Analytics Sync -->


<div id="page" class="cf">
	<div id="pre-pop-values">
		<!-- 
		These are field merges and pre-populate fields if values exist. DO NOT DELETE!!!
		 -->
		<!-- Country Value -->
		<p id="country-value"><span class="eloquaemail">Country</span></p>
		<!-- Work with Intel -->
		<p id="work-with-intel"><span class="eloquaemail">Work_With_Intel_Checkbox1</span></p>
		<!-- Content Preferences -->
		<p id="primary-cont-pref"><span class="eloquaemail">Primary_Interest_Selection1</span></p>
		<p id="secondary-cont-pref"><span class="eloquaemail">Secondary_Interest_Selection1</span></p>
		<!-- Bant Question Values -->
		<p id="job-function"><span class="eloquaemail">Job_Function1</span></p>
		<p id="project-timeframe"><span class="eloquaemail">Project_Timeframe1</span></p>
		<p id="budget-approval"><span class="eloquaemail">Budget_Approval1</span></p>
		<p id="project-size"><span class="eloquaemail">IoT_Embedded_Project_Size1</span></p>
		<p id="company-size"><span class="eloquaemail">Company_Size1</span></p>
		<!-- 
		DO NOT DELETE ABOVE!!!
		 -->
	</div>

	<!-- Full width header with Intel logo -->
	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper cf">
			<div class="logo">
				<img src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{c6337e57-2822-41a2-97ec-0df4a0dd38ed}_int_lookins_i_hrz_wht_rgb_3000_78by52px.png" alt="Intel">
			</div>			
		</div>
	</header><!-- /header -->
	


	<div class="content-wrapper">
		<div id="main" class="main-content cf">



			<!-- Start Header Options -->


			<!-- Header with Fold and Kink -->
			<div id="header" class="folded-header cf">
				<div id="header-content" class="folded-header">
					<h1><span elqid="8713" elqtype="Section" class="remove-absolute" style="display: block">The Internet of Things starts with<br>Intel&reg; Inside</span></h1>
					
					<h2><?php echo htmlentities($subhead, ENT_QUOTES, 'utf-8'); ?></h2>
				</div>

				<div id="header-kink" class="kink"></div>
			</div><!-- #header -->

			

			<!-- Start Modules -->
			

			<!-- Premium Content Form -->
			<div class="module form cf" id="form-name">
				<div class="module-header">
					<h3 class="icon-sm blue-recognition-sm content-header">Premium Content</h3>
				</div>

				<div class="module-content">
					<div class="content">
						<h4><?php echo htmlentities($formHeadline, ENT_QUOTES, 'utf-8'); ?></h4>

						<p><?php echo htmlentities($formCopy, ENT_QUOTES, 'utf-8'); ?></p>
					</div>
					
					<form method="post" name="iot-bant-form-v3" action="https://s334284386.t.eloqua.com/e/f2" id="form787">
						<small class="required">Required Fields (*)</small>

						<small>If the information below is not yours, please <span id="clear-fields">click here</span>.</small>

						<input value="iot-bant-form-v3" type="hidden" name="elqFormName"/>

						<input value="334284386" type="hidden" name="elqSiteId"/>

						<input name="elqCampaignId" type="hidden"/>

						<div id="formElement0" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="firstName">First Name <span>*</span></label><input id="field0" name="firstName" type="text" value="<eloqua type='emailfield' syntax='FirstName1'/>" />
									</p>
								</div>
							</div>
						</div>
						<div id="formElement1" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="lastName">Last Name <span>*</span></label><input id="field1" name="lastName" type="text" value="<eloqua type='emailfield' syntax='LastName'/>" />
									</p>
								</div>
							</div>
						</div>
						<div id="formElement2" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="emailAddress">Email Address <span>*</span></label><input id="field2" name="emailAddress" type="text" value="<eloqua type='emailfield' syntax='EmailAddress'/>" />
									</p>
								</div>
							</div>
						</div>
						<div id="formElement3" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="stateProv">State or Province <span>*</span></label><input id="field3" name="stateProv" type="text" value="<eloqua type='emailfield' syntax='State_Prov'/>" />
									</p>
								</div>
							</div>
						</div>
						<div id="formElement4" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="country">Country <span>*</span></label>
										<select id="field4" name="country">
											<option value="" selected="selected">Please Select...</option>
											<option value="United States">United States</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antarctica">Antarctica</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia">Bolivia</option>
											<option value="Bonaire">Bonaire</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Bouvet Island">Bouvet Island</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option value="Brunei Darussalam">Brunei Darussalam</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote D'ivoire">Cote D'ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Curacao">Curacao</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Poly.">French Poly.</option>
											<option value="French S. Terr.">French S. Terr.</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernsey">Guernsey</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-Bissau">Guinea-Bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
											<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jersey">Jersey</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
											<option value="Korea, Republic of">Korea, Republic of</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macau">Macau</option>
											<option value="Macedonia">Macedonia</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
											<option value="Moldova, Republic of">Moldova, Republic of</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="Netherlands Antilles">Netherlands Antilles</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Northern Mariana Islands">Northern Mariana Islands</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestine, State">Palestine, State</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Pitcairn">Pitcairn</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russian Federation">Russian Federation</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Helena">Saint Helena</option>
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Martin">Saint Martin</option>
											<option value="Saint Pierre">Saint Pierre</option>
											<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">Sao Tome and Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Serbia and Montenegro">Serbia and Montenegro</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Sint Maarten">Sint Maarten</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
											<option value="South Sudan">South Sudan</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="St. Barthelemy">St. Barthelemy</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Svalbard">Svalbard</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syrian Arab Republic">Syrian Arab Republic</option>
											<option value="Taiwan">Taiwan</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
											<option value="Thailand">Thailand</option>
											<option value="Timor-Leste">Timor-Leste</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Vietnam">Vietnam</option>
											<option value="Virgin Islands, British">Virgin Islands, British</option>
											<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
											<option value="Wallis and Futuna">Wallis and Futuna</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Yemen">Yemen</option>
											<option value="Yugoslavia">Yugoslavia</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</p>
								</div>
							</div>
						</div>
						<div id="formElement5" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="company">Company <span>*</span></label><input id="field5" name="company" type="text" value="<eloqua type='emailfield' syntax='Company'/>" />
									</p>
								</div>
							</div>
						</div>
						<div id="formElement6" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="busPhone">Business Phone <span>*</span></label><input id="field6" name="busPhone" type="text" value="<eloqua type='emailfield' syntax='Business_Phone1'/>" />
									</p>
								</div>
							</div>
						</div>

						<!-- Work with Intel Question -->
						<div id="formElement9" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<div class="checkbox cf">
										<input class="styled-checkbox" id="work-with" name="singleCheckbox" type="checkbox" value="Yes" />
										<label for="work-with"></label>
										<p>Would you like to work with an Internet of Things expert from Intel?</p>
									</div>
								</div>
							</div>
						</div>

						<div id="formElement7" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="dropdownMenu">Which topic interests you most? <span>*</span></label>
										<select id="field7" name="dropdownMenu">
											<option value="">Please Select...</option>
											<option value="Quark / Galileo">Quark / Galileo</option>
											<option value="Gateways">Gateways</option>
											<option value="Industrial Solutions">Industrial Solutions</option>
											<option value="Retail Solution">Retail Solutions</option>
											<option value="Automotive Solutions">Automotive Solutions</option>
											<option value="Energy Solutions">Energy Solutions</option>
											<option value="Healthcare Solutions">Healthcare Solutions</option>
											<option value="General Solutions">General Solutions</option>
										</select>
									</p>
								</div>
							</div>
						</div>

						<div id="formElement8" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p class="secondary-label">What other topics or solutions interest you? (Select all that apply)</p>

									<div class="checkbox cf">
										<input class="styled-checkbox" id="secondary-1" name="checkboxes" type="checkbox" value="Quark / Galileo"/>
										<label for="secondary-1"></label>
										<p>Quark / Galileo</p>
									</div>

									<div class="checkbox cf">
										<input class="styled-checkbox" id="secondary-2" name="checkboxes" type="checkbox" value="Gateways"/>
										<label for="secondary-2"></label>
										<p>Gateways</p>
									</div>

									<div class="checkbox cf">
										<input class="styled-checkbox" id="secondary-3" name="checkboxes" type="checkbox" value="Industrial Solutions"/>
										<label for="secondary-3"></label>
										<p>Industrial Solutions</p>
									</div>

									<div class="checkbox cf">
										<input class="styled-checkbox" id="secondary-4" name="checkboxes" type="checkbox" value="Retail Solution"/>
										<label for="secondary-4"></label>
										<p>Retail Solutions</p>
									</div>

									<div class="checkbox cf">
										<input class="styled-checkbox" id="secondary-5" name="checkboxes" type="checkbox" value="Automotive Solutions"/>
										<label for="secondary-5"></label>
										<p>Automotive Solutions</p>
									</div>

									<div class="checkbox cf">
										<input class="styled-checkbox" id="secondary-6" name="checkboxes" type="checkbox" value="Energy Solutions"/>
										<label for="secondary-6"></label>
										<p>Energy Solutions</p>
									</div>

									<div class="checkbox cf">
										<input class="styled-checkbox" id="secondary-7" name="checkboxes" type="checkbox" value="Healthcare Solutions"/>
										<label for="secondary-7"></label>
										<p>Healthcare Solutions</p>
									</div>

									<div class="checkbox cf">
										<input class="styled-checkbox" id="secondary-8" name="checkboxes" type="checkbox" value="General Solutions"/>
										<label for="secondary-8"></label>
										<p>General Solutions</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Begin BANT Questions -->
						<div id="formElement10" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="intelJobFunction1">What is your job function? <span>*</span></label>
										<select id="field10" name="intelJobFunction1">
											<option value="" selected="selected">Please Select...</option>
											<option value="Administration/Clerical">Administration/Clerical</option>
											<option value="Branch Manager">Branch Manager</option>
											<option value="Business Development">Business Development</option>
											<option value="Communications Engineer">Communications Engineer</option>
											<option value="Communications/Public Relations">Communications/Public Relations</option>
											<option value="Consultant/Advisor">Consultant/Advisor</option>
											<option value="Customer Quality/Support Engineer">Customer Quality/Support Engineer</option>
											<option value="Customer Service">Customer Service</option>
											<option value="Database Administrator">Database Administrator</option>
											<option value="eBusiness Manager/Developer">eBusiness Manager/Developer</option>
											<option value="Education Administrator">Education Administrator</option>
											<option value="Education and Training">Education and Training</option>
											<option value="Engineering">Engineering</option>
											<option value="Executive Level Manager">Executive Level Manager</option>
											<option value="Facilities Management and Maintenance">Facilities Management and Maintenance</option>
											<option value="Finance">Finance</option>
											<option value="Hardware Engineer">Hardware Engineer</option>
											<option value="Healthcare Professional">Healthcare Professional</option>
											<option value="Human Resources">Human Resources</option>
											<option value="ICT Purchasing">ICT Purchasing</option>
											<option value="Information Management Professional">Information Management Professional</option>
											<option value="Information Technology">Information Technology</option>
											<option value="IT Director">IT Director</option>
											<option value="IT General">IT General</option>
											<option value="IT Manager">IT Manager</option>
											<option value="Legal">Legal</option>
											<option value="Line of Business Director">Line of Business Director</option>
											<option value="Manufacturing">Manufacturing</option>
											<option value="Marketing Executive">Marketing Executive</option>
											<option value="Marketing Manager">Marketing Manager</option>
											<option value="Media and Design">Media and Design</option>
											<option value="Network Engineer">Network Engineer</option>
											<option value="Operations">Operations</option>
											<option value="Other - Engineering">Other - Engineering</option>
											<option value="Other - General">Other - General</option>
											<option value="Other - Information Technology">Other - Information Technology</option>
											<option value="Other - Sales and Marketing">Other - Sales and Marketing</option>
											<option value="Owner/General Manager/CEO/CFO/COO">Owner/General Manager/CEO/CFO/COO</option>
											<option value="Owner/Sales">Owner/Sales</option>
											<option value="Policy Maker">Policy Maker</option>
											<option value="Project Management">Project Management</option>
											<option value="Purchasing">Purchasing</option>
											<option value="Research and Development">Research and Development</option>
											<option value="Retail Sales Person">Retail Sales Person</option>
											<option value="Sales and Marketing">Sales and Marketing</option>
											<option value="Sales Executive">Sales Executive</option>
											<option value="Sales Manager">Sales Manager</option>
											<option value="Sales/IT">Sales/IT</option>
											<option value="Sales/Marketing Engineer">Sales/Marketing Engineer</option>
											<option value="Sales/Technical Manager">Sales/Technical Manager</option>
											<option value="Security">Security</option>
											<option value="Software Engineer">Software Engineer</option>
											<option value="Solutions Architect">Solutions Architect</option>
											<option value="Teacher Development">Teacher Development</option>
											<option value="Technical Integrator">Technical Integrator</option>
											<option value="Warehousing, Transportation and Conveyance">Warehousing, Transportation and Conveyance</option>
											<option value="Web Developer/Service Provider">Web Developer/Service Provider</option>
										</select>
									</p>
								</div>
							</div>
						</div>

						<div id="formElement11" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="title">What is your job title? <span>*</span></label><input id="field11" name="title" type="text" value="<eloqua type='emailfield' syntax='Title1'/>" />
									</p>
								</div>
							</div>
						</div>

						<div id="formElement12" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="intelEmbeddedProjectTimeframe1">When do you plan to begin your next technology project? <span>*</span></label>
										<select id="field12" name="intelEmbeddedProjectTimeframe1">
											<option value="" selected="selected">Please Select...</option>
											<option value="0-6 Months">0-6 Months</option>
											<option value="7-12 Months">7-12 Months</option>
											<option value="1-2 Years">1-2 Years</option>
											<option value=">2 Years" >&gt;2 Years</option>
											<option value="Don't know">Don't know</option>
										</select>
									</p>
								</div>
							</div>
						</div>

						<div id="formElement13" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="budgetApproval">Where are you in the process of setting budget dollars aside? <span>*</span></label>
										<select id="field13" name="budgetApproval">
											<option value="" selected="selected">Please Select...</option>
											<option value="Funding approved">Funding approved</option>
											<option value="Funding requested, not approved">Funding requested, not approved</option>
											<option value="Funding yet to be requested">Funding yet to be requested</option>
											<option value="Don't know">Don't know</option>
										</select>
									</p>
								</div>
							</div>
						</div>

						<div id="formElement14" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="projectSize">How much do you anticipate spending on your next technology purchase? <span>*</span></label>
										<select id="field14" name="projectSize">
											<option value="" selected="selected">Please Select...</option>
											<option value="Over $10,000,000">Over $10,000,000</option>
											<option value="$5,000,000 to 10,000,000">$5,000,000 to 10,000,000</option>
											<option value="$1,000,000 to 5,000,000">$1,000,000 to 5,000,000</option>
											<option value="Less than $1,000,000">Less than $1,000,000</option>
											<option value="Don't know">Don't know</option>
										</select>
									</p>
								</div>
							</div>
						</div>

						<div id="formElement15" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<label for="intelCompanySize1">How many people are employeed at your company? <span>*</span></label>
										<select id="field15" name="intelCompanySize1">
											<option value="" selected="selected">Please Select...</option>
											<option value="5000+ Employees">5000+ Employees</option>
											<option value="1000-5000 Employees">1000-5000 Employees</option>
											<option value="100-1000 Employees">100-1000 Employees</option>
											<option value="<100 Employees">&lt;100 Employees</option>
										</select>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Change Redirect Value Below -->
						<input id="field16" type="hidden" name="redirectURL" value=""/>
						
						<!-- Source ID -->
						<input id="field17" type="hidden" name="SourceId" value="Embedded.US.EN.IoT-Tree-of-Life-BANT-Form"/>
						
						<!-- Embedded Status -->
						<input id="field18" type="hidden" name="EmbeddedSectorStatus" value="Opted-In"/>

						<div id="formElement19" class="sc-view form-design-field sc-static-layout sc-regular-size">
							<div class="field-wrapper">
								<div class="_100">
									<p>
										<input type="submit" value="Submit" data-wap_ref="submit">
									</p>
								</div>
							</div>
						</div>

						<small class="form-legal">By providing your contact information, you authorize Intel to contact you by email or telephone with information about Intel products, events, and updates for embedded communications. For more information, please review the <a href="http://www.intel.com/content/www/us/en/legal/terms-of-use.html" target="_blank">Terms of Use</a> and <a href="http://www.intel.com/content/www/us/en/privacy/intel-online-privacy-notice-summary.html" target="_blank">Intel Privacy Notice</a>.</small>
					</form>

					<script src="https://img03.en25.com/i/livevalidation_standalone.compressed.js" type="text/javascript" ></script><style type="text/css" media="screen" >.LV_validation_message{ font-weight:bold; margin: 0 0 0 5px; }
					.LV_valid{ color:#00CC00; display:none; }
					.LV_invalid{ color:#CC0000; font-size:10px; }
					.LV_valid_field, input.LV_valid_field:hover, input.LV_valid_field:active, textarea.LV_valid_field:hover, textarea.LV_valid_field:active { border: 1px solid #00CC00; }
					.LV_invalid_field, input.LV_invalid_field:hover, input.LV_invalid_field:active, textarea.LV_invalid_field:hover, textarea.LV_invalid_field:active { border: 1px solid #CC0000; }</style><script type="text/javascript" >var field0 = new LiveValidation("field0", {validMessage: "", onlyOnBlur: true});field0.add(Validate.Presence, {failureMessage:"This field is required"});var field1 = new LiveValidation("field1", {validMessage: "", onlyOnBlur: true});field1.add(Validate.Presence, {failureMessage:"This field is required"});var field2 = new LiveValidation("field2", {validMessage: "", onlyOnBlur: true});field2.add(Validate.Presence, {failureMessage:"This field is required"});field2.add(Validate.Format, {pattern: /^[ ]*([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})[ ]*$/i, failureMessage: "A valid email address is required"});var field3 = new LiveValidation("field3", {validMessage: "", onlyOnBlur: true});field3.add(Validate.Presence, {failureMessage:"This field is required"});var field4 = new LiveValidation("field4", {validMessage: "", onlyOnBlur: true});field4.add(Validate.Presence, {failureMessage:"This field is required"});var field5 = new LiveValidation("field5", {validMessage: "", onlyOnBlur: true});field5.add(Validate.Presence, {failureMessage:"This field is required"});var field6 = new LiveValidation("field6", {validMessage: "", onlyOnBlur: true});field6.add(Validate.Presence, {failureMessage:"This field is required"});var field7 = new LiveValidation("field7", {validMessage: "", onlyOnBlur: true});field7.add(Validate.Presence, {failureMessage:"This field is required"});var field10 = new LiveValidation("field10", {validMessage: "", onlyOnBlur: true});field10.add(Validate.Presence, {failureMessage:"This field is required"});var field11 = new LiveValidation("field11", {validMessage: "", onlyOnBlur: true});field11.add(Validate.Presence, {failureMessage:"This field is required"});var field12 = new LiveValidation("field12", {validMessage: "", onlyOnBlur: true});field12.add(Validate.Presence, {failureMessage:"This field is required"});var field13 = new LiveValidation("field13", {validMessage: "", onlyOnBlur: true});field13.add(Validate.Presence, {failureMessage:"This field is required"});var field14 = new LiveValidation("field14", {validMessage: "", onlyOnBlur: true});field14.add(Validate.Presence, {failureMessage:"This field is required"});var field15 = new LiveValidation("field15", {validMessage: "", onlyOnBlur: true});field15.add(Validate.Presence, {failureMessage:"This field is required"});</script>

				</div>
			</div><!-- /.module -->



			
			

			

			<!-- Work With Intel -->
			<div class="module work cf">
				<div class="module-header">
					<h3 class="icon-sm blue-comments-sm content-header">Work With Intel</h3>
				</div>

				<img class="full-width-block" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{a0f80f7f-3243-4cbe-9dea-31b858a00a8e}_intel-man-and-woman-working-290x180-v2.jpg" alt="Work with Intel">

				<div class="module-content">
					<div class="content">
						<h4>Planning a project? Intel can help.</h4>

						<p>Collaborate with an Intel engineer on your next technology project and see how you can put the Internet of Things to work for your business.</p>

						<a class="mobile-cta" href="http://edc.intel.com/get-help/external/?cp=EDC-EMBNurture-65901-<?php echo $edcValue; ?>&src=EMBNurture" target="_blank">Intel can help <span class="hide">&gt;</span></a>
					</div>
				</div>
			</div><!-- /.module -->




		</div><!-- /#main -->		
	</div>
	


	<!-- Full width footer -->
	<footer class="cf">
		<div id="footer-kink" class="kink cf">
			<div class="inner-content">
				<div id="share-content">
					<h5>Share</h5>

					<nav id="social-media">
						<ul class="horizontal-menu cf">
							<li><a id="fbshare" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $formURL; ?>" title="Facebook" onclick="openRequestedPopup(this.href); return false;"><i class="fa fa-facebook"></i></a></li>

							<li><a id="lishare" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($formURL); ?>&title=<?php echo urlencode($ogTitle); ?>&summary=<?php echo urlencode($ogDescription) ?>" title="LinkedIn" onclick="openRequestedPopup(this.href); return false;"><i class="fa fa-linkedin"></i></a></li>

							<li><a id="twshare" href="http://twitter.com/intent/tweet?text=<?php echo urlencode($twCopy) ?>" title="Twitter" onclick="openRequestedPopup(this.href); return false;"><i class="fa fa-twitter"></i></a></li>

							<li><a id="genshare" href="http://www.intel.com/content/www/us/en/blogs-communities-social.html" target="_blank" title="AddThis"><i class="fa fa-plus"></i></a></li>
						</ul>
					</nav>
				</div>

				<div id="m-share-content">
					<h5>Conversations</h5><nav id="social-media"><ul class="horizontal-menu cf"><li><a href="https://www.facebook.com/Intel" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li><li><a href="https://www.linkedin.com/company/intel-corporation" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a></li><li><a href="https://twitter.com/intel" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li><li><a href="http://www.intel.com/content/www/us/en/blogs-communities-social.html" title="AddThis" target="_blank"><i class="fa fa-plus"></i></a></li></ul></nav>
				</div>
			</div>
		</div>
		
		<div id="footer-legal">
			<div class="wrapper">
				<div class="inner-content">
					<p>Copyright &copy; <?php echo date("Y"); ?> Intel Corporation. All rights reserved. Intel, the Intel logo, the Intel Inside logo, Intel Atom, Intel Core, Quark, Xeon, Celeron, Pentium, Iris, Flexpipe are trademarks of Intel Corporation in the U.S. and/or other countries.</p>

					<p>Intel is committed to protecting your privacy. For more information about Intel's privacy practices, please visit <a href="http://www.intel.com/privacy" target="_blank" title="Intel Online Privacy Notice Summary">www.intel.com/privacy</a> or write to Intel Corporation, ATTN Privacy, Mailstop RNB4-145, 2200 Mission College Blvd., Santa Clara, CA 95054 USA</p>
					
					<nav id="legal">
						<ul class="horizontal-menu cf">
							<li><a href="https://www-ssl.intel.com/content/www/us/en/privacy/intel-online-privacy-notice-summary.html" title="Privacy" target="_blank">Privacy</a></li>
							<li><a href="https://www-ssl.intel.com/content/www/us/en/privacy/intel-cookie-notice.html" id="_bapw-link" title="Cookies" target="_blank">Cookies</a></li>
							<li><a href="https://www-ssl.intel.com/content/www/us/en/legal/trademarks.html" title="* Trademarks" target="_blank">* Trademarks</a></li>
						</ul>						
					</nav>
				</div>
			</div>			
		</div>
	</footer><!-- /footer -->
</div><!-- /#page -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Custom JS to Control Form & Progressive Profiling -->
<script src="https://img03.en25.com/Web/IntelCorporation/{cce5b7f2-dbbb-43c7-a29a-71d658e072ed}_Embedded.US.EN.IoT-eNurture-custom-v6.js"></script>

</body>

</html>