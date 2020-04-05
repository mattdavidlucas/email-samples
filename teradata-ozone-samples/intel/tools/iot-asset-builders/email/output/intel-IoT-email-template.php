<?php
date_default_timezone_set('America/Los_Angeles');

// Subject Line
$subjectLine = $_GET['subject-line'];

// Preheader Text
$preheaderText = $_GET['preheader'];

// Links
$lpURL    = $_GET['lp-url'];
$ctaCopy  = $_GET['cta-copy'];
$edcValue = $_GET['edc-value'];

// Header
$subhead  = $_GET['subhead'];

// Hero Images
$heroImage = $_GET['hero-image'];

// Body Copy
$firstParagraph  = $_GET['first-paragraph'];
$secondParagraph = $_GET['second-paragraph'];
$thirdParagraph  = $_GET['third-paragraph'];

// Bullets
$bulletHeadline = $_GET['bullet-header'];
$firstBullet    = $_GET['bullet-one'];
$secondBullet   = $_GET['bullet-two'];
$thirdBullet    = $_GET['bullet-third'];
$fourthBullet   = $_GET['bullet-four'];
$formFirstBullet  = str_replace('•', '', $firstBullet );
$formSecondBullet = str_replace('•', '', $secondBullet);
$formThirdBullet  = str_replace('•', '', $thirdBullet);
$formFourthBullet = str_replace('•', '', $fourthBullet);

// Closing Paragraph
$closingGraph = $_GET['closing-paragraph'];

// Sidebar
$sidebarHeadline = $_GET['sidebar-headline'];
$sidebarCopy     = $_GET['sidebar-copy'];
$sidebarIcon     = $_GET['sidebar-icon'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1.0">

<title><?php echo htmlentities($subjectLine); ?></title>

<style type="text/css">
/* Email Reset:
   From http://htmlemailboilerplate.com */

#outlook a { padding:0; } /* Force Outlook to provide a "view in browser" menu link. */

body { 
	width: 100% !important;
	-webkit-text-size-adjust: none; 
	    -ms-text-size-adjust: none; 
	margin: 0; 
	padding: 0;
} /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */

table td { border-collapse: collapse; }

table { 
	border-collapse: collapse; 
	mso-table-lspace: 0pt; 
	mso-table-rspace: 0pt; 
}

.ExternalClass { width:100%; } /* Force Hotmail to display emails at full width */ 

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; } /* Force Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */

/* Mobile Styles */
@media only screen and (max-width: 600px)  {	
	body[mobile] table[class="devicewidth"] { width: 320px !important; }
	
	/* General Classes */
	body[mobile] .hide { display: none !important; }

	body[mobile] .blue-bg { background-color: #0071c5 !important; }

	/* Mobile Font Colors */
	body[mobile] .blue { color: #007DC6 !important; }

	body[mobile] .gray { color: #5F5F5E !important; }
	
	/* Use this span around addresses, dates and phone numbers to stop iOS styling */
	.mobile-link a,
	.mobile-link a[href^="tel"] {
		color: #FFFFFF !important;
		text-decoration: none;
	}

	/* Mobile CTA */
	body[mobile] .mobile-cta-container {
		margin-bottom: 30px;
		max-width: 100% !important;
	}

	body[mobile] .mobile-cta-container.help-cta {
		margin-bottom: 0 !important;
	}

	body[mobile] .mobile-cta {
		background-color: #fdb813 !important;
		background-image: url('http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{6efbdd01-db80-473a-8062-6fd338d72cef}_intel-mobile-cta-pointer.gif');
		background-position: right;
		background-repeat: no-repeat;
		font-weight: bold;
		height: 51px;
		padding-left: 20px;
		padding-bottom: 0 !important;
	}

	body[mobile] .mobile-cta a {
		color: #FFFFFF !important;
		text-decoration: none !important;
	}

	body[mobile] .mobile-cta-text {
		color: #FFFFFF !important;
		font-size: 20px;
		font-weight: normal;
	}

	/* Header */
	body[mobile] td[id="mobile-header"] { font-size: 18px !important; }

	body[mobile] td[id="mobile-subhead"] { 
		font-size: 16px !important; 
		line-height: 21px !important;
	}

	/* Module Content */
	body[mobile] td[id="gray-bground"] { background-color: #e1e1e1 !important; }

	body[mobile] table[class="content-column"] {
		margin-bottom: 10px;
		width: 100% !important;
	}

	body[mobile] .module-header {
		font-size: 20px !important;
		line-height: 26px !important;
		padding-left: 0 !important;
	}

	body[mobile] .module-content { 
		font-size: 14px !important;
		line-height: 22px !important; 
	}

	body[mobile] .bullet { 
		font-size: 14px !important; 
		line-height: 22px !important;
	}

	body[mobile] table[class="module"] { background-color: #DCDCDC !important; }

	/* Asset Sidebar */
	body[mobile] .asset-header { padding: 30px 30px 0 !important; }

	body[mobile] .asset-cta { padding: 30px !important; }
	
	/* Module Sidebar */
	body[mobile] table[class="sidebar"] {
		background-color: #FFFFFF !important;
		border: none !important;
		width: 100% !important;
	}

	body[mobile] img[class="fluid-img"] {
		height: auto;
		margin: 0 auto;
		padding-bottom: 25px;
		width: 87.5% !important;
	}
	
	/* Footer */
	body[mobile] td[class="footer-header"] {
		display: block !important;
		color: #FFFFFF; 
		font-family: Arial, Helvetica, sans-serif; 
		font-size: 20px !important;
		line-height: 18px !important;
		max-height: none !important; 
		padding-left: 30px !important;
		padding-top: 30px !important;
		padding-bottom: 35px !important; 
		text-align:left;
	}

	/* Social Icons */
	body[mobile] td[class="social-icon-cont"] { padding-bottom: 0 !important;}

	body[mobile] td[class="mobile-social-icon"] {
		display: table-cell !important; 
		line-height: normal !important; 
		max-height: none !important;  
		width: 25px;
	}

	body[mobile] img[id="facebook"] {
		height: 22px !important;
		max-height: none !important;
		padding-right: 35px;
		width: 12px !important;
	}

	body[mobile] img[id="linkedin"] {
		height: 22px !important;
		max-height: none !important;
		padding-right: 35px;
		width: 23px !important;
	}

	body[mobile] img[id="twitter"] {
		height: 30px !important;
		max-height: none !important;
		padding-right: 35px;
		width: 31px !important;
	}

	body[mobile] img[id="plus"] {
		height: 22px !important;
		max-height: none !important;
		padding-right: 35px;
		width: 23px !important;
	}

	body[mobile] span[class="reg-header-m"] {
		font-size: 9px !important;
		vertical-align: 6px !important;
	}
}
</style>

</head>

<body style="background-color: #dcdcdc" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" mobile="fix">

<!-- Preheader text and View As Web Page -->
<table style="background-color: #dcdcdc; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
	<tr>
		<td align="center" class="preheadertext" valign="top" style="background-color: #dcdcdc;color:#dcdcdc;display:none;font-size:1px; line-height:1px;display:none;"><?php echo htmlentities($preheaderText, ENT_QUOTES, 'utf-8'); ?></td>
	</tr>
	<tr>
		<td style="background-color: #dcdcdc; padding-top: 20px; padding-bottom: 20px;" align="center" bgcolor="#dcdcdc" valign="top">
			<a href="http://app.plan.intel.com/e/es?s=<eloqua type='emailfield' syntax='siteid'/>&e=<eloqua type='emailfield' syntax='elqemailsaveguid'/>&elq=<eloqua type='emailfield' syntax='recipientid'/>" style="color: #666666;font-family: arial, verdana, sans-serif; font-size: 11px;">Click here to view this email as a web page.</a>
		</td>
	</tr>
</tbody>
</table>

<!-- Table Background -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="background-color: #dcdcdc; border-collapse: collapse; table-layout: fixed;">
	<tr>
		<td width="100%" valign="top">
			
			<!-- Table Container -->
			<table width="670" class="devicewidth" border="0" cellspacing="0" cellpadding="0" align="center" style="border-collapse: collapse; margin: 0 auto;">
				<tr>
					<td valign="top">
						
						<!-- Headline & Subhead -->
						<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
							<tr>
								<td style="background-color: #0071c5; padding-top: 25px; padding-bottom: 0; padding-left: 30px; padding-right: 30px;">
									<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
										<tr>
											<td valign="top" style="padding-bottom: 20px;"><img src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{5cee02d9-2995-4ff0-abe7-99cfd40fe993}_intel-logo-white-on-blue-78x52.gif" style="display: block;" width="78" height="52" alt="Intel" border="0" /></td>
										</tr>
										<tr>
											<td id="mobile-header" style="color: #FFFFFF; font-family: Helvetica, Arial, sans-serif; font-size: 38px; font-weight: normal; padding-bottom: 15px;"><span elqid="8712" elqtype="Section" class="remove-absolute" style="display: block">The Internet of Things Starts with Intel<span class="reg-header-m" style="font-size:14px;line-height:0;vertical-align:17px;">&reg;</span> Inside</span></td>
										</tr>
										<tr>
											<td id="mobile-subhead" style="color: #FFFFFF; font-family: Helvetica, Arial, sans-serif; font-size: 21px; font-weight: normal; mso-line-height-rule:exactly; line-height: 28px; padding-bottom: 15px;"><?php echo htmlentities($subhead, ENT_QUOTES, 'utf-8'); ?></td>
										</tr>
										
										<!-- Mobile CTA - Text Link to Button -->
										<tr>
											<td>
												<table class="mobile-cta-container" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
													<tr>
														<td class="mobile-cta" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:18px; text-align:left;"><a class="mobile-cta-text" href="<?php echo $lpURL; ?>" style="color: #FFDA00; text-decoration: none;"><?php echo $ctaCopy; ?> <span class="hide" style="color: #FFFFFF;">&gt;</span></a></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
			
							<tr>
								<td valign="top">
									<table class="hide" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
										<tr>
											<!-- Hero Image -->
											<td style="background-color: #0071c5;"><img src="<?php echo $heroImage; ?>" style="display: block;" width="670" height="232" alt="" border="0" /></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- End Headline & Subhead -->
						
						<!-- Module Spacer -->
						<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
							<tr>
								<td align="center"><img src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{ad991559-47e8-42a8-be41-fef0369e7a82}_spacer.gif" style="display: block;" width="20" height="10" alt="" border="0" /></td>
							</tr>
						</table>
			
						<!-- Begin Module -->
						<table class="module" width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #FFFFFF; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
							<tr>
								<td id="gray-bground" valign="top" style="background-color: #0071c5;">
			
									<!-- Begin Main Module Column -->
									<table class="content-column" align="left" width="376" border="0" cellspacing="0" cellpadding="0" style="background-color: #FFFFFF; border-collapse: collapse;">
										<tr>
											<td valign="top" style="color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px; padding-top: 31px; padding-bottom: 30px; padding-left: 30px; padding-right: 30px; text-align:left;">
												<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
													<tr>
														<td class="module-header" style="color:#007dc6; font-family:Arial, Helvetica, sans-serif; font-size:18px; line-height:18px; padding-bottom: 20px; text-align:left;"><span class="eloquaemail">First_Name___IoT__Tree_of_Life_1</span>,</td>
													</tr>
													
													<tr>
														<td class="module-content" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 18px; padding-bottom: 10px; text-align:left;"><?php echo htmlentities($firstParagraph, ENT_QUOTES, 'utf-8'); ?></td>
													</tr>

													<?php if ( !empty($secondParagraph) ) {
															echo '<tr><td class="module-content" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 18px; padding-bottom: 15px; text-align:left;">' . htmlentities($secondParagraph, ENT_QUOTES, 'utf-8') . '</td></tr>';
														}
													?>

													<?php if ( !empty($thirdParagraph) ) {
														echo '<tr><td class="module-content" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 18px; padding-bottom: 15px; text-align:left;">' . htmlentities($thirdParagraph, ENT_QUOTES, 'utf-8') . '</td></tr>';
														} 
													?>

													<tr>
														<td class="module-content" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height: 22px; padding-bottom: 15px; text-align:left;"><a href="<?php echo $lpURL; ?>" style="color: #1588CB; text-decoration: none;"><?php echo $ctaCopy; ?> &gt;</a></td>
													</tr>

													<tr>
														<td class="module-content" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 18px; padding-bottom: 15px; text-align:left;"><?php echo htmlentities($bulletHeadline, ENT_QUOTES, 'utf-8'); ?></td>
													</tr>

													<tr>
														<td class="module-content" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 18px; padding-bottom: 15px; text-align:left;">
															<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
																<tr>
																	<td class="bullet" align="center" valign="top" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 17px; padding-left: 3px; padding-right: 10px; vertical-align: top;">&bull;</td>
															
																	<td class="bullet" align="left" valign="top" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 17px; vertical-align: top; padding-bottom: 8px;"><?php echo htmlentities($formFirstBullet, ENT_QUOTES, 'utf-8'); ?></td>
																</tr>
																<tr>
																	<td class="bullet" align="center" valign="top" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 17px; padding-left: 3px; padding-right: 10px; vertical-align: top;">&bull;</td>
															
																	<td class="bullet" align="left" valign="top" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 17px; vertical-align: top; padding-bottom: 8px;"><?php echo htmlentities($formSecondBullet, ENT_QUOTES, 'utf-8'); ?></td>
																</tr>
																<tr>
																	<td class="bullet" align="center" valign="top" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 17px; padding-left: 3px; padding-right: 10px; vertical-align: top;">&bull;</td>
															
																	<td class="bullet" align="left" valign="top" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 17px; vertical-align: top;"><?php echo htmlentities($formThirdBullet, ENT_QUOTES, 'utf-8'); ?></td>
																</tr>
																<?php if ( !empty($fourthBullet) ) {
																	echo '<tr><td class="bullet" align="center" valign="top" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 17px; padding-top: 8px; padding-left: 3px; padding-right: 10px; vertical-align: top;">&bull;</td><td class="bullet" align="left" valign="top" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 17px; padding-top: 8px; vertical-align: top;">' . htmlentities($formFourthBullet, ENT_QUOTES, 'utf-8') . '</td></tr>';
																	} 
																?>
															</table>
														</td>
													</tr>

													<tr>
														<td class="module-content" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 18px; padding-bottom: 15px; text-align:left;"><?php echo htmlentities($closingGraph, ENT_QUOTES, 'utf-8'); ?></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!-- End Main Module Column -->
			
									<!-- Begin Right Column -->
									<table class="sidebar" align="right" width="290" border="0" cellspacing="0" cellpadding="0" style="background-color: #0071c5; border-collapse: collapse;">
										<!-- Mobile: White on the Top -->
										<tr>
											<td class="asset-header" valign="top" style="padding-left: 47px; padding-right: 47px; padding-top: 50px;">
												<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
													<tr>
														<!-- Change Icon Here -->
														<td valign="middle" class="hide" width="34" style="padding-bottom: 15px; vertical-align: middle"><img src="<?php echo $sidebarIcon; ?>" style="display: block;" width="34" height="34" alt="Icon" border="0" /></td>
														
														<td valign="top" width="100%">
															<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
																<tr>
																	<td width="100%" class="blue module-header" valign="top" style="color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 18px; text-align: left; padding-left: 15px; padding-bottom: 10px;"><?php echo htmlentities($sidebarHeadline, ENT_QUOTES, 'utf-8'); ?></td>
																</tr>
															</table>
														</td>
													</tr>

													<tr>
														<td class="gray module-content" colspan="2" valign="top" style="color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; padding-bottom: 28px; text-align: left;"><?php echo htmlentities($sidebarCopy, ENT_QUOTES, 'utf-8'); ?></td>
													</tr>
												</table>
											</td>
										</tr>
										
										<!-- Mobile: Intel Blue on the Bottom -->
										<tr>
											<td class="blue-bg asset-cta" valign="top" style="padding-left: 47px; padding-right: 47px; height: 100%;">
												<table class="blue-bg" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
													<tr>
														<td>
															<!-- CTA -->
															<table class="cta" border="0" cellspacing="0" cellpadding="0" width="100%" style="background-color: #fdb813;">
																<tr>
																	<td style="background-color: #fdb813; color: #ffffff; font-family: arial, helvetica, sans-serif; font-size: 20px; padding-left: 20px; text-align: left; vertical-align: middle;" ><a href="<?php echo $lpURL; ?>" style="color: #ffffff; text-decoration: none;"><?php echo $ctaCopy; ?> &nbsp;</a></td>

																	<td width="25" align="left"><a href="<?php echo $lpURL; ?>"><img src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{c37c0709-9a7a-4097-879f-ce6f1fa5f2d6}_intel-desktop-cta-pointer-12x51.gif" style="display: block;" width="12" height="51" border="0" /></a></td>
																</tr>
															</table>
															<!-- End CTA -->
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!-- End Right Column -->
								</td>
							</tr>
						</table>
						<!-- End Module -->
						
						<!-- Module Spacer -->
						<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
							<tr>
								<td align="center"><img src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{ad991559-47e8-42a8-be41-fef0369e7a82}_spacer.gif" style="display: block;" width="20" height="10" alt="" border="0" /></td>
							</tr>
						</table>

						<!-- Begin Module -->
						<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;">
							<tr>
								<td class="white-bg" valign="top" style="background-color: #FFFFFF;">
			
									<!-- Begin Main Module Column -->
									<table class="content-column" align="left" width="370" border="0" cellspacing="0" cellpadding="0" style="background-color: #FFFFFF;">
										<tr>
											<td valign="top" style="color:#000000; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px; padding-top: 31px; padding-bottom: 25px; padding-left: 30px; padding-right: 30px; text-align:left;">
												<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
													<tr>
														<td class="module-header" style="color:#007dc6; font-family:Arial, Helvetica, sans-serif; font-size:18px; line-height:18px; padding-bottom: 10px; text-align:left;">Planning a project? Intel can help.</td>
													</tr>
													
													<tr>
														<td class="module-content" style="color:#5f5f5e; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height: 18px; padding-bottom: 10px; text-align:left;">Collaborate with an Intel engineer on your next technology project and see how you can put the Internet of Things to work for your business.</td>
													</tr>

													<tr>
														<td>
															<table class="mobile-cta-container help-cta" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
																<tr>
																	<td class="mobile-cta" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; line-height:18px; text-align:left;"><a class="mobile-cta-text" href="http://edc.intel.com/get-help/external/?cp=EDC-EMBNurture-65901-<?php echo $edcValue; ?>&src=EMBNurture" style="color: #007DC6; text-decoration: none;">Intel can help <span class="hide" style="color: #007DC6;">&gt;</span></a></td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!-- End Main Module Column -->
			
									<!-- Begin Right Column -->
									<table class="sidebar" align="right" width="293" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border-right: 1px solid #dcdcdc;">
										<tr>
											<td valign="top">
												<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
													<tr>
														<td valign="top"><img class="fluid-img" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{a0f80f7f-3243-4cbe-9dea-31b858a00a8e}_intel-man-and-woman-working-290x180-v2.jpg" style="display: block;" width="293" height="180" alt="Work with Intel" border="0" /></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!-- End Right Column -->
								</td>
							</tr>
						</table>
						<!-- End Module -->
							
						<!-- Module Spacer -->
						<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
							<tr>
								<td align="center"><img src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{ad991559-47e8-42a8-be41-fef0369e7a82}_spacer.gif" style="display: block;" width="20" height="10" alt="" border="0" /></td>
							</tr>
						</table>

						<!-- Begin Footer -->
						<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" style="background-color: #0071c5; border-collapse: collapse;">
							<tr>
								<td class="hide"><img src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{cf77f014-1a54-4e1d-82f9-aa54b00c7991}_intel-footer-kink-670x29.gif" style="display: block;" alt="" width="670" height="29" border="0" /></td>
							</tr>
							
							<!-- Desktop Social Header -->
							<tr>
								<td class="hide" style="color: #FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size: 20px; padding-bottom: 20px; padding-left: 30px; text-align:left;">Share</td>
							</tr>
							<!-- End Desktop Social Header -->
							
							<!-- Mobile Social Header -->
							<tr>
								<td class="footer-header" style="display: none; font-size: 0; line-height: 0; max-height: 0; mso-hide: all; padding: 0;">Conversations</td>
							</tr>
							<!-- End Mobile Social Header -->
							
							<!-- Desktop Share Options -->
							<tr>
								<td style="padding-left: 30px; padding-right: 30px;">
									<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
										<tr>
											<td class="social-icon-cont" valign="top" align="left" style="padding-bottom: 15px;">
												<!-- Desktop Social Icons -->
												<table class="hide" width="20%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
													<tr>
														<td style="width: 25px;"><a href="<?php echo $lpURL; ?>?share-fb=true"><img id="facebook" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{665a6e08-bacd-41c7-882c-fba251403ae4}_facebook-12x22.gif" style="display: block;" width="8" height="15" alt="Facebook" border="0" /></a></td>
														<td style="width: 25px;"><a href="<?php echo $lpURL; ?>?share-li=true"><img id="linkedin" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{61dd11d3-f6fe-4466-aa33-bf187ca7b068}_linkedin-23x22.gif" style="display: block;" width="13" height="12" alt="LinkedIn" border="0" /></a></td>
														<td style="width: 25px;"><a href="<?php echo $lpURL; ?>?share-tw=true"><img id="twitter" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{0a313a51-cfc3-4098-8219-2e24dc51c33c}_twitter-23x22.gif" style="display: block;" width="16" height="15" alt="Twitter" border="0" /></a></td>
														<td style="width: 25px;"><a href="http://www.intel.com/content/www/us/en/blogs-communities-social.html"><img id="plus" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{6a03d2ba-7c8a-47a8-88dc-1775d96926bf}_plus-23x22.gif" style="display: block;" width="12" height="11" alt="Share" border="0" /></a></td>
													</tr>
												</table>

												<!-- Mobile Share Icons -->
												<table width="20%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
													<tr>
														<td class="mobile-social-icon" style="display: none; line-height: 0; max-height: 0; mso-hide: all; padding: 0;"><a href="https://www.facebook.com/Intel"><img id="facebook" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{665a6e08-bacd-41c7-882c-fba251403ae4}_facebook-12x22.gif" style="max-height: 0; width: 0;" width="8" height="15" alt="Facebook" border="0" /></a></td>
														<td class="mobile-social-icon" style="display: none; line-height: 0; max-height: 0; mso-hide: all; padding: 0;"><a href="https://www.linkedin.com/company/intel-corporation"><img id="linkedin" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{61dd11d3-f6fe-4466-aa33-bf187ca7b068}_linkedin-23x22.gif" style="max-height: 0; width: 0;" width="13" height="12" alt="LinkedIn" border="0" /></a></td>
														<td class="mobile-social-icon" style="display: none; line-height: 0; max-height: 0; mso-hide: all; padding: 0;"><a href="https://twitter.com/intel"><img id="twitter" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{0a313a51-cfc3-4098-8219-2e24dc51c33c}_twitter-23x22.gif" style="max-height: 0; width: 0;" width="16" height="15" alt="Twitter" border="0" /></a></td>
														<td class="mobile-social-icon" style="display: none; line-height: 0; max-height: 0; mso-hide: all; padding: 0;"><a href="http://www.intel.com/content/www/us/en/blogs-communities-social.html"><img id="plus" src="http://images.plan.intel.com/EloquaImages/clients/IntelCorporation/{6a03d2ba-7c8a-47a8-88dc-1775d96926bf}_plus-23x22.gif" style="max-height: 0; width: 0;" width="12" height="11" alt="Share" border="0" /></a></td>
													</tr>
												</table>
											</td>
										</tr>

										<tr>
											<td class="hide" style="border-bottom: 1px solid #FFFFFF;">&nbsp;</td>
										</tr>
									</table>
								</td>
							</tr>
							<!-- End Desktop Share Options -->

							<tr>
								<td valign="top" style="padding-top: 30px; padding-bottom: 5px; padding-left: 30px; padding-right: 30px;">
									<table align="left" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td valign="top" style="color: #FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:10px; line-height:14px; padding-bottom: 10px; text-align:left;">Copyright &copy; <?php echo date("Y"); ?> Intel Corporation. All rights reserved. Intel, the Intel logo, the Intel Inside logo, Intel Atom, Intel Core, Quark, Xeon, Celeron, Pentium, Iris, Flexpipe are trademarks of Intel Corporation in the U.S. and/or other countries.</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- End Footer -->
			
					</td>
				</tr>
			</table>
			<!-- End Table Container -->
		</td>
	</tr>
</table>
<!-- End Table Background -->


</body>

</html>
<!-- Start Text Version -->

Intel

The Internet of Things Starts with Intel(R) Inside

<?php echo $subhead . "\n"; ?>

<?php echo $ctaCopy; ?> > <?php echo $lpURL . "\n"; ?>

<?php echo $firstParagraph . "\n"; ?>

<?php echo $secondParagraph . "\n"; ?>

<?php echo $thirdParagraph . "\n"; ?>

<?php echo $ctaCopy; ?> > <?php echo $lpURL . "\n"; ?>

<?php echo $bulletHeadline . "\n"; ?>

* <?php echo $formFirstBullet . "\n"; ?>
* <?php echo $formSecondBullet . "\n"; ?>
* <?php echo $formThirdBullet . "\n"; ?>
<?php if ( !empty($fourthBullet) ) { echo '* ' . $formFourthBullet . "\n"; } ?>

<?php echo $closingGraph . "\n"; ?>

<?php echo $sidebarHeadline . "\n"; ?>

<?php echo $sidebarCopy . "\n"; ?>

<?php echo $ctaCopy; ?> > <?php echo $lpURL . "\n"; ?>

Planning a project? Intel can help.

Collaborate with an Intel engineer on your next technology project and see how you can put the Internet of Things to work for your business.

Intel can help > http://edc.intel.com/get-help/external/?cp=EDC-EMBNurture-65901-<?php echo $edcValue; ?>&src=EMBNurture

Conversations
Facebook: https://www.facebook.com/Intel
LinkedIn: https://www.linkedin.com/company/intel-corporation
Twitter: https://twitter.com/intel
Share: http://www.intel.com/content/www/us/en/blogs-communities-social.html
 
Copyright (c) <?php echo date("Y"); ?> Intel Corporation. All rights reserved. Intel, the Intel logo, the Intel Inside logo, Intel Atom, Intel Core, Quark, Xeon, Celeron, Pentium, Iris, Flexpipe are trademarks of Intel Corporation in the U.S. and/or other countries.