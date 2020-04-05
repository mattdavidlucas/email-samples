<?php
date_default_timezone_set('America/Los_Angeles');

// HTML Title
$htmlTitle = $_GET['HTML-title'];

// Links
$assetURL = $_GET['asset-url'];
$tyFBURL  = $_GET['typ-fb-url'];
$ctaCopy  = $_GET['cta-copy'];
$edcValue = $_GET['edc-value'];

// Header
// $headline = $_GET['headline'];
$subhead  = $_GET['subhead'];

// Sidebar
$sidebarHeadline = $_GET['sidebar-headline'];
$sidebarCopy     = $_GET['sidebar-copy'];
$iconName        = $_GET['sidebar-icon'];

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
	<meta property="og:url" content="<?php echo $tyFBURL; ?>">
	<meta property="og:type" content="webpage">
	<meta property="og:image" content="https://img03.en25.com/Web/IntelCorporation/{c5d7dfca-36bf-44ea-8c7e-620229d9d6e0}_intel_logo_1024.png"> 
	<meta property="wap:country" content="us">
	<meta property="wap:sector" content="embedded">
	<meta property="wap:language" content="en">
	<meta property="wap:regStatus" content="complete">
	<!--Update with Webpage Information -->

	<link rel="stylesheet" href="https://img03.en25.com/Web/IntelCorporation/{f76bcaac-b2c2-4b54-acb7-8dc61f3c6de4}_embedded.us.en.style-111014.css">
	<script src="https://img03.en25.com/Web/IntelCorporation/{6a960927-5656-4542-afd0-9350a875475e}_jquery-1.10.2.min.js" type="text/javascript"></script>

	<!--[if lte IE 9]>
		<script src="https://img03.en25.com/Web/IntelCorporation/{c7c4d720-f522-4609-8326-c83ac1d43a74}_html5shiv.js"></script>
	<![endif]-->

	<style>
		em { font-style: italic; }
		
		#m-share-content { display: none; }

		/* Custom styles to work with copy */
		.asset .inner-content p { font-size: 13px; }

		.full-width-block h4 {
			height: auto;
			line-height: 130%;
			margin-bottom: 20px;
			padding-left: 55px;
			position: relative;
		}

		.full-width-block p { 
			font-family: 'Intel Clear Light', sans-serif; 
			font-size: 13px;
		}

		.full-width-block h4:before {
			top: 13px;
		}
		
		.work h4 { margin-bottom: 3px; }

		#footer-kink h5 { padding-left: 38.59574%; }

		@media screen and ( max-width: 480px ) {
			#m-share-content { display: block; }
			#share-content { display: none; }

			.full-width-block h4 { margin-bottom: 25px; }
			
			.full-width-block h4:before {
				top: 5px;
			}

			.work h4 { margin-bottom: 15px; }

			#footer-kink h5 { padding-left: 0; }
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




			<!-- Thank You Module -->
			<div class="module asset cf">
				<div class="module-content">
					<div class="inner-content">
						<h4 class="content-header">Thank you.</h4>

						<p>For more information on how to bring intelligence to the Internet of Things,<br /> visit <a href="http://www.intel.com/iot" title="IoT Starts With Secure Intelligence Inside" target="_blank">www.intel.com/iot</a>.</p>						
					</div>
				</div>
				
				<div class="full-width-block">
					<h4 class="sidebar-header white-<?php echo $iconName; ?>-lg"><?php echo htmlentities($sidebarHeadline, ENT_QUOTES, 'utf-8'); ?></h4>

					<p><?php echo htmlentities($sidebarCopy, ENT_QUOTES, 'utf-8'); ?></p>

					<a id="asset" class="cta" href="<?php echo $assetURL; ?>" target="_blank"><?php echo $ctaCopy; ?></a>
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
					<p>Copyright &copy; <?php echo date("Y"); ?> Intel Corporation.  All rights reserved. Intel, the Intel logo, the Intel Inside logo, Intel Atom, Intel Core, Quark, Xeon, Celeron, Pentium, Iris, Flexpipe are trademarks of Intel Corporation in the U.S. and/or other countries.</p>

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

<script src="https://img03.en25.com/Web/IntelCorporation/{4ee250e5-cb2c-41c8-bf7e-6b0632740b67}_custom.js"></script>
<script>
// Open asset on Thank You page on load
var openAsset = $('#asset').attr('href');
window.open(openAsset, '_blank');
</script>
</body>

</html>