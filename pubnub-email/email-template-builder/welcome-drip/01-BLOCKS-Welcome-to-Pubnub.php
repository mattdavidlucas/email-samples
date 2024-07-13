<?php
include '../inc/template-styles.inc.php';

$filename  = '01-BLOCKS-Welcome-to-Pubnub-v2.html';
$subject   = 'Get your keys, start coding & add realtime services';
$preheader = 'Hit the ground running with our 2-minute tutorial on navigating the PubNub Admin Portal';
$UTMParams = '?utm_source=EmailBlasts&amp;utm_medium=Welcome-Drip&amp;utm_campaign=EB-CY17-Q1-Welcome-Nurture-Email-01';

date_default_timezone_set( 'America/Los_Angeles');
ob_start();
?>

<?php include '../inc/header.inc.php'; ?>

<style>
@media only screen and (max-width: 600px) {
  .headline {
    font-size: 26px !important;
    line-height: 32px !important; 
  }
  .headline-container { padding: 30px 0 !important; }
}
</style>

<!--[if gte mso 9]><xml>
 <o:OfficeDocumentSettings>
  <o:AllowPNG></o:AllowPNG>
  <o:PixelsPerInch>96</o:PixelsPerInch>
 </o:OfficeDocumentSettings>
</xml><![endif]-->

</head>

<body class="body" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-color: <?php echo $bgColor; ?>;">

<!-- Preheader Text -->
<div style="display: none; font-size: 1px; color: <?php echo $bgColor; ?>; line-height: 1px; font-family: <?php echo $bodyFont; ?>; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all;"><?php echo $preheader; ?></div>
<!-- End Preheader Text -->

<?php include '../inc/preview-text-spacer.inc.php'; ?>

<!-- Table Background -->
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="background-color: <?php echo $bgColor; ?>; border-collapse: collapse;">
  <tr>
    <td width="100%" style="padding: 40px 0; vertical-align: top;">

      <!-- Start Container / Width: 600px -->
      <!--[if (gte mso 9)|(IE)]>
      <table align="center" width="600" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 600px;">
        <tr>
          <td style="vertical-align: top;">
      <![endif]-->
      <table align="center" width="95%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto; max-width: 600px;">
        <tr>
          <td style="background-color: #FFFFFF; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Header -->
              <?php include '../inc/pn-logo.inc.php'; ?>
              <!-- End Header -->

              <!-- Hero -->
              <tr>
                <td class="main-hero" background="http://storage.pardot.com/28622/105796/blocks_hero_bg.jpg" bgcolor="#042D3F" style="background: #042D3F url('http://storage.pardot.com/28622/105796/blocks_hero_bg.jpg'); background-size: cover;">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:155px;">
                    <v:fill type="tile" src="http://storage.pardot.com/28622/105796/blocks_hero_bg.jpg" color="#042D3F" />
                    <v:textbox inset="0,0,0,0">
                  <![endif]-->
                  <div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                      <tr>
                        <td class="headline-container" style="padding: 40px 0;">
                          <table width="85%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                            <!-- Headline -->
                            <tr>
                              <td class="headline" style="color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 30px; mso-line-height-rule: exactly; line-height: normal; text-align: center; width: 100%;">Welcome to PubNub,<br />%%first_name%%!</td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!--[if gte mso 9]>
                    </v:textbox>
                  </v:rect>
                  <![endif]-->
                </td>
              </tr>
              <!-- End Hero -->

              <!-- Start Content -->
              <tr>
                <td style="background-color: #FFFFFF;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td class="padding-inner-container" style="padding: 40px 30px;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <!-- Welcome Video -->
                          <tr>
                            <td style="padding-bottom: 30px;">
                              <!--[if (gte mso 9)|(IE)]>
                              <table align="center" width="480" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 480px;">
                                <tr>
                                  <td style="vertical-align: top;">
                              <![endif]-->
                              <table align="center" width="480" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 100%; max-width: 480px; margin: 0 auto;">
                                <tr>
                                  <td bgcolor="#e1e1e1" style="background-color: #e1e1e1; box-shadow: 0px 0px 7px #a1a1a1; font-family: <?php echo $bodyFont; ?>; text-align: center;">
                                    <a href="https://vimeo.com/136965884" target="_blank" style="color: <?php echo $fontColor; ?>; text-decoration: none;"><img class="fluid-img" src="http://storage.pardot.com/28622/91840/welcometopubnubheader.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; outline: none;" width="480" alt="PubNub Intro Video" border="0" /></a>
                                  </td>
                                </tr>
                              </table>
                              <!--[if (gte mso 9)|(IE)]>
                                  </td>
                                </tr>
                              </table>
                              <![endif]-->
                            </td>
                          </tr>

                          <tr>
                            <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px; text-align: center;">Hit the ground running with our 2-minute tutorial on navigating the PubNub Admin Portal. Need some additional help? Contact us anytime at <a href="mailto:support@pubnub.com" style="color: <?php echo $linkColor; ?>">support@pubnub.com</a> or fill out our <a href="https://www.pubnub.com/company/contact-us/<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>">contact us form</a>.</td>
                          </tr>

                          <!-- CTA -->
                          <tr>
                            <td style="">
                              <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                                <tr>
                                  <td>
                                <!--[if mso]>
                                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://vimeo.com/136965884" style="height:40px;v-text-anchor:middle;width:230px;" stroke="f" fillcolor="<?php echo $secondary['static']; ?>">
                                  <w:anchorlock/>
                                  <center>
                                <![endif]-->
                                    <a class="cta-secondary" href="https://vimeo.com/136965884" style="background-color: <?php echo $secondary['static']; ?>; color: #ffffff; display: inline-block; font-family: <?php echo $bodyFont; ?>; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 230px;" target="_blank">View Now&nbsp;&nbsp;&rarr;</a>
                                <!--[if mso]>
                                  </center>
                                </v:rect>
                                <![endif]-->
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <!-- End CTA -->
                        </table>
                      </td>
                    </tr>
                    <!-- End Content -->
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>
        
        <!-- Start Card -->
        <!-- Spacer -->
        <tr>
          <td align="left" valign="top" width="100%" height="10" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 10px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
        </tr>
        <!-- End Spacer -->

        <!-- Next Steps -->
        <tr>
          <td>
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Start Card -->
              <tr>
                <td style="background-color: #FFFFFF; border-bottom: 1px solid #DDDDDD;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td bgcolor="<?php echo $primary['static']; ?>" align="center" style="background-color: <?php echo $primary['static']; ?>; color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 20px; padding: 20px;">Next Steps</td>
                    </tr>
                  </table>

                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; max-width: px;">
                    <tr>
                      <td style="padding: 30px;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <!-- 01. Start Coding -->
                          <tr>
                            <td style="font-family: <?php echo $bodyFont; ?>; font-size: 20px; mso-line-height-rule: exactly; line-height: normal; text-align: center; width: 100%;"><a href="https://www.pubnub.com/docs<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">1. Start Coding</a></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Card -->

              <!-- Start Card -->
              <tr>
                <td style="background-color: #f6f6f6; border-bottom: 1px solid #DDDDDD; padding: 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; max-width: px;">
                    <!-- 02. Set UUIDs -->
                    <tr>
                      <td style="font-family: <?php echo $bodyFont; ?>; font-size: 20px; mso-line-height-rule: exactly; line-height: normal; text-align: center; width: 100%;"><a href="https://support.pubnub.com/support/solutions/articles/14000043671-how-do-i-set-the-uuid-<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">2. Set UUIDs</a></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Card -->

              <!-- Start Card -->
              <tr>
                <td style="background-color: #e8e8e8; border-bottom: 4px solid #CCCCCC; padding: 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; max-width: px;">
                    <!-- 03. Add Realtime Services -->
                    <tr>
                      <td style="font-family: <?php echo $bodyFont; ?>; font-size: 20px; mso-line-height-rule: exactly; line-height: normal; text-align: center; width: 100%;"><a href="https://www.pubnub.com/blocks-catalog/<?php echo $UTMParams; ?>&amp;all&amp;external-apis&amp;bots-ai&amp;internet-of-things&amp;chat-social&amp;charting-graphing&amp;geolocation&amp;gaming&amp;triggers-notifications&amp;financial" target="_blank" style="color: #000000; text-decoration: none;">3. Add Realtime Services</a></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Card -->
            </table>
          </td>
        </tr>
        <!-- End Next Steps -->
        
        <!-- Spacer -->
        <tr>
          <td align="left" valign="top" width="100%" height="10" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 10px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
        </tr>
        <!-- End Spacer -->

        <!-- On Demand Video Cross Promo -->
        <?php include 'inc/on-demand-video-promo.inc.php'; ?>
        <!-- End On Demand Video Cross Promo -->

        <!-- Additional Resources -->
        <?php include 'inc/pubnub-general-resources-nobg-v2.inc.php'; ?>
        <!-- End Additional Resources -->
      </table>
      <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
      </table>
      <![endif]-->
      <!-- End Container -->

      <!-- Start Footer / Width: 600px -->
      <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto; max-width: 600px;">
        <tr>
          <td style="padding-top: 25px;">
            
            <table align="center" width="80%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
              <!-- Social Icons -->
              <tr>
                <td style="padding-bottom: 25px;">
                  <table align="center" cellpadding="5" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                    <tr>
                      <td colspan="5" style="color:<?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 12px; padding-bottom: 10px; text-align: center; text-transform: uppercase;">Connect With Us</td>
                    </tr>

                    <tr>
                      <!-- Twitter / ?source=emailtw -->
                      <td style="font-size:9px; color:<?php echo $fontColor; ?>;">
                        <a href="https://twitter.com/PubNub" target="_blank" style="text-decoration: none; color: #545e66;"><img src="http://storage.pardot.com/28622/106334/twitter_icon_round__47x47.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="30" height="30" alt="Tweet" border="0" /></a>
                      </td>
                      
                      <!-- Facebook / ?source=emailfb -->
                      <td style="font-size:9px; color:<?php echo $fontColor; ?>;">
                        <a href="https://www.facebook.com/PubNub" target="_blank" style="text-decoration: none; color: #545e66;"><img src="http://storage.pardot.com/28622/106328/facebook_icon_round_47x47.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="30" height="30" alt="Facebook" border="0" /></a>
                      </td>

                      <!-- GitHub -->
                      <td style="font-size:9px; color:<?php echo $fontColor; ?>;">
                        <a href="https://github.com/pubnub" target="_blank" style="text-decoration:none; color: #545e66;"><img src="http://storage.pardot.com/28622/107810/github_icon_round_47x47.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="30" height="30" alt="GitHub" border="0" /></a>
                      </td>

                      <!-- Google+ / ?source=emailgp -->
                      <td style="font-size:9px; color:<?php echo $fontColor; ?>;">
                        <a href="https://plus.google.com/+Pubnub" target="_blank" style="text-decoration:none; color: #545e66;"><img src="http://storage.pardot.com/28622/106330/googleplus_icon_round__47x47.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="30" height="30" alt="G+" border="0" /></a>
                      </td>

                      <!-- LinkedIn / ?source=emailln -->
                      <td style="font-size:9px; color:<?php echo $fontColor; ?>;">
                        <a href="https://www.linkedin.com/company/pubnub" target="_blank" style="text-decoration:none; color: #545e66;"><img src="http://storage.pardot.com/28622/106332/linkedin_icon_round__47x47.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="30" height="30" alt="LinkedIn" border="0" /></a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Social Icons -->

              <!-- Legal -->
              <?php include '../inc/footer.inc.php'; ?>
              <!-- End Legal -->
            </table>

          </td>
        </tr>
      </table>
      <!-- End Footer -->

    </td>
  </tr>
</table>
<!-- End Table Background -->

<?php include '../inc/gmail-hack.inc.php'; ?>

</body>
</html><?php file_put_contents( '../output/welcome-drip/' . $filename, ob_get_contents()); ?>
<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>