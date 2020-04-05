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
	<title>Intel Tree of Life Landing Page Builder</title>

	<link rel="stylesheet" href="../css/style.css">
</head>

<body class="lp-builder">

<header class="cf">
	<h1>Intel Tree of Life Landing Page Builder</h1>
</header>


<div id="url-builder" class="container cf">
	<div class="block-wrapper non-form">
		<span class="number">1</span>
		
		<h2>Build the URL&rsquo;s</h2>

		<fieldset>
			<legend>URL Builder</legend>
			
			<div class="cf">
				<div class="row stage-chooser">
					<label for="iot-stage">IoT Stage</label>
					<select name="iot-stage" id="iot-stage">
						<option value="">Please Select...</option>
						<option value="awareness">Awareness</option>
						<option value="general">General</option>
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
					<label for="iot-stage-number">IoT Stage Number</label>
					<select name="iot-stage-number" id="iot-stage-number">
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

			<div class="row">
				<label for="asset-description">Asset Description (separate words with dashes)</label>
				<input type="text" id="asset-description" placeholder="i.e. my-asset-description">
			</div>

			<a id="create-url" href="#" class="button" target="_blank">Create URL&rsquo;s &rarr;</a>		

			<div class="row">
				<label for="gen-lp-url">Form URL</label>
				<input type="text" id="gen-lp-url">
			</div>

			<div class="row">
				<label for="gen-typ-url">Thank You URL</label>
				<input type="text" id="gen-typ-url">
			</div>
		</fieldset>	
	</div>
</div>

<div id="form-page" class="container cf">
	<div class="block-wrapper">
		<span class="number">2</span>
		
		<h2>Enter Form Page Copy</h2>

		<form id="lp-form" action="../landing-pages/output/intel-IoT-form-template.php" target="_blank" method="get">
			<fieldset>
				<legend>HTML Title</legend>

				<div class="row">
					<input type="text" name="HTML-title" id="HTML-title" placeholder="HTML Title">
				</div>
			</fieldset>

			<fieldset>
				<legend>Links</legend>

				<div class="row">
					<input type="text" name="typ-url" id="typ-url" placeholder="Thank You Page URL">
				</div>

				<div class="row">
					<input type="text" name="edc-value" id="edc-value" placeholder="EDC Conversion Point Value">
				</div>
			</fieldset>

			<fieldset>
				<legend>Header</legend>

				<div class="row">
					<input type="text" name="subhead" id="subhead" placeholder="Subhead">
				</div>
			</fieldset>

			<fieldset>
				<legend>Form Copy</legend>

				<div class="row">
					<textarea name="form-headline" id="form-headline" cols="30" rows="10" placeholder="Right Subhead - Asset type and title"></textarea>
				</div>

				<div class="row">
					<textarea name="form-copy" id="form-copy" cols="30" rows="10" placeholder="Body Copy"></textarea>
				</div>		
			</fieldset>

			<fieldset>
				<legend>Social Copy</legend>

				<div class="row">
					<input type="text" name="form-url" id="form-url" placeholder="Form URL">
				</div>

				<div class="row">
					<input type="text" name="og-title" id="og-title" placeholder="Title">
				</div>

				<div class="row">
					<input type="text" name="og-description" id="og-description" placeholder="Description">
				</div>

				<!-- <div class="row">
					<input type="text" name="og-image" id="og-image" placeholder="Image URL">
				</div> -->

				<div class="row">
					<input type="text" name="tw-copy" id="tw-copy" placeholder="Twitter Copy">
				</div>			
			</fieldset>
			
			<input id="form-submit" type="submit" value="Create Form Page &rarr;">
		</form>	
	</div>
</div>

<div id="typ-page" class="container cf">
	<div class="block-wrapper">
		<span class="number">3</span>
		
		<h2>Enter Thank You Page Copy</h2>

		<form id="typ-form" action="../landing-pages/output/intel-IoT-typ-template.php" target="_blank" method="get">
			
			<fieldset>
				<legend>HTML Title</legend>

				<div class="row">
					<input type="text" name="HTML-title" id="HTML-title" placeholder="HTML Title" value="">
				</div>
			</fieldset>

			<fieldset>
				<legend>Links</legend>

				<div class="row">
					<input type="text" name="asset-url" id="asset-url" placeholder="Asset URL">
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

				<div class="row">
					<input type="text" name="subhead" id="subhead" placeholder="Subhead">
				</div>
			</fieldset>

			<fieldset>
				<legend>Right Sash Copy</legend>

				<div class="row">
					<input type="text" name="sidebar-headline" id="sidebar-headline" placeholder="Right Sash Headline">
				</div>

				<div class="row">
					<input type="text" name="sidebar-copy" id="sidebar-copy" placeholder="Right Sash Copy">
				</div>

				<div class="row">
					<input type="text" name="sidebar-icon" id="sidebar-icon" placeholder="Icon Name i.e. videocamera">
				</div>

				<a href="../../icons.html" class="button green" target="_blank">View Icons &rarr;</a>
			</fieldset>

			<fieldset>
				<legend>Social Copy</legend>

				<div class="row">
					<input type="text" name="form-url" id="form-url" placeholder="Form URL">
				</div>

				<div class="row">
					<input type="text" name="og-title" id="og-title" placeholder="Title">
				</div>

				<div class="row">
					<input type="text" name="og-description" id="og-description" placeholder="Description">
				</div>

				<div class="row">
					<input type="text" name="tw-copy" id="tw-copy" placeholder="Twitter Copy">
				</div>			
			</fieldset>
			
			<!-- This value will be used in the Facebook OG tags on the TYP -->
			<input id="typ-fb-url" name="typ-fb-url" type="hidden" value="">

			<input id="typ-submit" type="submit" value="Create Thank You Page &rarr;">
		</form>
	</div>
</div>

<div id="asset-names" class="container cf">
	<div class="block-wrapper non-form">
		<span class="number">4</span>
		
		<h2>Eloqua Names &amp; Vanity URL&rsquo;s</h2>

		<fieldset class="dark-border">
			<legend>Asset Names</legend>
			<p><strong>Form Page Asset Name:</strong> <span id="lp-asset-name" class="copy-text"></span></p>

			<p><strong>Thank You Page Asset Name:</strong> <span id="typ-asset-name" class="copy-text"></span></p>
		</fieldset>
		
		<fieldset class="dark-border">
			<legend>Asset Vanity URL&rsquo;s</legend>
			<p><strong>Form Page Vanity URL:</strong> <span id="lp-vanity-url" class="copy-text"></span></p>

			<p><strong>Thank You Page Vanity URL:</strong> <span id="typ-vanity-url" class="copy-text"></span></p>
		</fieldset>

		<a href="../email/" class="button right" target="_blank">Build Email &rarr;</a>
	</div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/global.js"></script>
	
</body>
</html>