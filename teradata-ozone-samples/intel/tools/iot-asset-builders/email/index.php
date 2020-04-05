<?php 
$currentHost = $_SERVER['HTTP_HOST']; 
$url;

if ( $currentHost === 'iot-asset-builders:8888' ) {
	$url = 'http://' . $currentHost;
} else {
	$url = 'http://' . $currentHost . '/intel/iot-asset-builders';
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Intel Tree of Life Email Builder</title>

	<link rel="stylesheet" href="../css/style.css">
</head>

<body class="email-builder">

<header>
	<h1>Intel Tree of Life Email Builder</h1>	
</header>

<div id="url-builder" class="container cf">
	<div class="block-wrapper non-form">
		<span class="number">1</span>
		
		<h2>What Asset Is This?</h2>

		<fieldset>
			<legend>Choose the Stage &amp; Number</legend>

			<div class="cf">
				<div class="row stage-chooser">
					<label for="iot-stage-email">IoT Stage</label>
					<select name="iot-stage-email" id="iot-stage-email">
						<option value="">Please Select...</option>
						<option value="general">General</option>
						<option value="awareness">Awareness</option>
						<option value="interest">Interest</option>
						<option value="consideration">Consideration</option>
						<option value="preference">Preference</option>
						<option value="automotive">Automotive</option>
						<option value="energy">Energy</option>
						<option value="gateways">Gateways</option>
						<option value="healthcare">Healthcare</option>
						<option value="industrial">Industrial</option>
						<option value="quark">Quark</option>
						<option value="retail">Retail</option>
					</select>
				</div>

				<div class="row stage-chooser">
					<label for="iot-stage-number-email">IoT Stage Number</label>
					<select name="iot-stage-number-email" id="iot-stage-number-email">
						<option value="">Please Select...</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
					</select>
				</div>	
			</div>
		</fieldset>	
	</div>
</div>

<div id="email-copy" class="container cf">
	<div class="block-wrapper">
		<span class="number">2</span>
		
		<h2>Enter Email Copy</h2>

		<form action="../email/output/intel-IoT-email-template.php" method="get" target="_blank">
			<fieldset>
				<legend>Subject Line</legend>

				<div class="row">
					<input type="text" name="subject-line" id="subject-line" placeholder="Subject Line">
				</div>
			</fieldset>

			<fieldset>
				<legend>Links</legend>

				<div class="row">
					<input type="text" name="lp-url" id="lp-url" placeholder="LP URL">
				</div>
				
				<div class="row">
					<input type="text" name="cta-copy" id="cta-copy" placeholder="CTA Copy i.e. Download now">
				</div>

				<div class="row">
					<input type="text" name="edc-value" id="edc-value" placeholder="EDC Conversion Point Value">
				</div>
			</fieldset>

			<fieldset>
				<legend>Header</legend>

				<!-- <div class="row">
					<input type="text" name="headline" id="headline" placeholder="Headline" value="The Internet of Things starts with intelligence inside">
				</div> -->

				<div class="row">
					<input type="text" name="subhead" id="subhead" placeholder="Subhead">
				</div>
			</fieldset>
			
			<fieldset id="hero-images">
				<legend>Hero Image</legend>
				
				<div class="row checkboxes">
					<label for="General">General</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{4d04fe5f-5d6d-4902-ac4c-59d603f4007e}_embedded.us.en.iot-new-york-city.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Interest">Interest</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/%7Bff903644-cfdc-44e2-babb-5cb93303485b%7D_Embedded.US.EN.IoT-Interest-Email-Header-670x232.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Consideration">Consideration</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{f546b594-e5c4-4157-8726-8e4493a5c9a6}_embedded.us.en.iot-tree-of-life-consideration-header-670x232.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Preference">Preference</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{53150d55-89d5-417b-875f-3972420d41bf}_Embedded.US.EN.IoT-Preference-Email-Header-670x232.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Automotive">Automotive</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/%7Bfccc200b-82b5-426b-b2f0-1727122782dd%7D_Embedded.US.EN.IoT-Automotive-Email-Header-670x232.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Energy">Energy</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/%7B99ccc739-44e2-4b1f-939b-670f45283e14%7D_Embedded.US.EN.IoT-Energy-Email-Header-670x232.jpg.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Gateways">Gateways</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/%7B5c4e20ef-f8af-4f53-8549-54667d82bf60%7D_Embedded.US.EN.IoT-Gateways-Email-Header-670x232.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Healthcare">Healthcare</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/%7B6a237f98-a36d-41f8-8061-e55ab7f19205%7D_Embedded.US.EN.IoT-Healthcare-Email-Header-670x232.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Industrial">Industrial</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/%7B302e0995-e587-4c2e-97fb-9822a34833be%7D_Embedded.US.EN.IoT-Industrial-Email-Header-670x232.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Quark">Quark</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/%7B5ca080cb-021d-4f00-b1d1-a6733ea7b284%7D_Embedded.US.EN.IoT-Quark-Email-Header-670x232.jpg">
				</div>

				<div class="row checkboxes">
					<label for="Retail">Retail</label>
					<input type="checkbox" name="hero-image" id="hero-image" value="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/%7B411e1765-b8c8-41ab-9e77-7d7c200c805b%7D_Embedded.US.EN.IoT-Retail-Email-Header-670x232.jpg">
				</div>
			</fieldset>

			<fieldset>
				<legend>Body Copy</legend>

				<div class="row">
					<textarea name="first-paragraph" id="first-paragraph" cols="30" rows="10" placeholder="First Paragraph"></textarea>
				</div>

				<div class="row">
					<textarea name="second-paragraph" id="second-paragraph" cols="30" rows="10" placeholder="Second Paragraph"></textarea>
				</div>

				<div class="row">
					<textarea name="third-paragraph" id="third-paragraph" cols="30" rows="10" placeholder="If Necessary, Place Third Paragraph Copy Here"></textarea>
				</div>		
			</fieldset>

			<fieldset>
				<legend>Bullets</legend>
				
				<div class="row">
					<input type="text" name="bullet-header" id="bullet-header" placeholder="Bullet Headline">
				</div>

				<div class="row">
					<input type="text" name="bullet-one" id="bullet-one" placeholder="First Bullet">
					<input type="text" name="bullet-two" id="bullet-two" placeholder="Second Bullet">
					<input type="text" name="bullet-third" id="bullet-third" placeholder="Third Bullet">
					<input type="text" name="bullet-four" id="bullet-four" placeholder="Fourth Bullet, If Necessary">
				</div>

				<div class="row">
					<textarea name="closing-paragraph" id="closing-paragraph" cols="30" rows="10" placeholder="Closing Paragraph"></textarea>
				</div>
			</fieldset>

			<fieldset>
				<legend>Right Sash Copy</legend>

				<div class="row">
					<input type="text" name="sidebar-headline" id="sidebar-headline" placeholder="Right Sash Headline">
				</div>

				<div class="row">
					<input type="text" name="sidebar-copy" id="sidebar-copy" placeholder="Right Sash Copy">
					<input type="hidden" name="preheader" id="preheader">
				</div>

				<div class="row">
					<input type="text" name="sidebar-icon" id="sidebar-icon" placeholder="Icon Image URL">
					<small>In Eloqua, navigate to <span>Assets &gt; Component Library &gt; Images &gt; Eloqua Common Template Images &gt; Eloqua Common Template Images &gt; Email Icons &gt; White on Blue Icons - Blue Sidebar Icons</span></small>
				</div>
			</fieldset>
			
			<input type="submit" value="Create Email &rarr;">
		</form>	
	</div>
</div>

<div id="eloqua-details" class="container cf">
	<div class="block-wrapper">
		<span class="number">3</span>
		
		<h2>Eloqua Upload Reference</h2>

		<fieldset>
			<legend>Email Details</legend>

			<h3>Email Asset Name:</h3>
			<p id="email-asset-name" class="copy-text"></p>

			<h3>Sender Details:</h3>
			<p><strong>From name:</strong> <span class="copy-text">Intel Internet of Things</span></p>
			<p><strong>From address:</strong> <span class="copy-text">information@intel-designcenter.com</span></p>
			<p><strong>Reply name:</strong> <span class="copy-text">Intel Corporation</span></p>
			<p><strong>Reply address:</strong> <span class="copy-text">donotreply@intel.com</span></p>

			<h3>Email Settings:</h3>
			<p><strong>Email Group:</strong> <span class="copy-text">Embedded.US.EN.Email.Group</span></p>
			<p><strong>Email Header:</strong> <span class="copy-text">Blank Header - IoT Tree of Life</span></p>
			<p><strong>Email Footer:</strong> <span class="copy-text">Embedded.US.EN.IoT - Tree of Life Email Footer</span></p>		
		</fieldset>
	</div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/global.min.js"></script>
	
</body>
</html>