<?php 
include 'inc/template-styles.inc.php';

$filename  = 'webinar-announcement.html';
$preheader = "";
$UTMParams = '?utm_source=EmailBlasts&amp;utm_medium=Webinar-Announcement&amp;utm_campaign=WBN-CY17-QX-Announcements-MONTH';
$content   = file_get_contents('content/webinars.json');
$json      = json_decode($content, TRUE);

date_default_timezone_set( 'America/Los_Angeles');
ob_start();
?>

<?php include 'inc/header.inc.php'; ?>
<style>
@media only screen and (max-width: 600px) {
  .headline_webinar-title { 
    font-size: 24px !important;
    line-height: 26px !important;
  }

  .hero-headline-container { padding: 30px 0 !important; }

  .hero-headline {
    font-size: 24px !important;
    line-height: 30px !important;
  }

  .webinar-title {
    line-height: 22px !important;
    padding-bottom: 10px !important;
  }
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

<?php include 'inc/preview-text-spacer.inc.php'; ?>

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
          <td>
            
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Header -->
              <?php include 'inc/pn-logo.inc.php'; ?>
              <!-- End Header -->

              <tr>
                <td class="main-hero" background="http://storage.pardot.com/28622/114189/weekly_webinars_april_01_hero.jpg" bgcolor="#37383A" style="background: #37383A url('http://storage.pardot.com/28622/114189/weekly_webinars_april_01_hero.jpg'); background-size: cover;">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:170px;">
                    <v:fill type="tile" src="http://storage.pardot.com/28622/114189/weekly_webinars_april_01_hero.jpg" color="#37383A" />
                    <v:textbox inset="0,0,0,0">
                  <![endif]-->
                  <div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                      <tr>
                        <td class="hero-headline-container" style="padding: 50px 0;">
                          <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                            <!-- Headline -->
                            <tr>
                              <td>
                                <table align="center" width="70%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                                  <tr>
                                    <td class="hero-headline" style="color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 28px; mso-line-height-rule: exactly; line-height: 34px; text-align: center; width: 100%;"><a href="https://www.pubnub.com/developers/webinars/<?php echo $UTMParams; ?>" style="color: #FFFFFF; text-decoration: none;" target="_blank">May 2017 Developer Training Webinars</a></td>
                                  </tr>
                                </table>
                              </td>
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
            </table>
          </td>
        </tr>
        
        <!-- Start Webinars -->
        <?php for ($i=0; $i < count($json['webinars']); $i++): ?>
        <!-- Start Single Webinar - <?php echo $json['webinars'][$i]['headline']; ?> -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: <?php if ($i === 0) { echo 'none'; } else { echo '5px solid #19A2C6'; }; ?>; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td class="padding-inner-container" style="padding: 30px 40px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <?php if ( $json['webinars'][$i]['image'] ): ?>
                    <tr>
                      <td align="center" style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 9px; padding-bottom: 20px;">
                        <img src="<?php echo $json['webinars'][$i]['image']; ?>" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="60" height="60" alt="<?php echo $json['webinars'][$i]['headline']; ?>" border="0" />
                      </td>
                    </tr>
                    <?php endif; ?>

                    <tr>
                      <td>
                        <table class="full-width" align="center" width="80%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td class="webinar-title" style="color: #545e66; font-family: <?php echo $bodyFont; ?>; font-size: 20px; mso-line-height-rule: exactly; line-height: normal; padding: 0 0 5px 0; text-align: center; width: 100%;"><a href="<?php echo $json['webinars'][$i]['link']; ?>?source=email" target="_blank" style="color: #545e66; text-decoration: none;"><?php echo $json['webinars'][$i]['headline']; ?></a></td>
                          </tr>
                        </table>
                      </td>
                    </tr>

                    <!-- Divider -->
                    <tr>
                      <td style="padding-top: 10px;">
                        <table align="center" width="100" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td style="border-top: 3px solid #545e66;">&nbsp;</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <!-- Divider -->

                    <!-- Copy -->
                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; padding-bottom: 20px; text-align: center;">
                        <span style="font-weight: bold;"><?php echo $json['webinars'][$i]['date']; ?></span><br />
                        9:30am PT / 12:30pm ET / <span class="block-element">6:30pm CET</span><br class="hide-on-mobile" />
                        90 Minutes
                      </td>
                    </tr>
                    
                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px; text-align: center;"><?php echo $json['webinars'][$i]['copy']; ?></td>
                    </tr>

                    <!-- CTA -->
                    <tr>
                      <td>
                        <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td>
                          <!--[if mso]>
                          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?php echo $json['webinars'][$i]['link']; ?>?source=email" style="height:40px;v-text-anchor:middle;width:230px;" stroke="f" fillcolor="<?php echo $secondary['static']; ?>">
                            <w:anchorlock/>
                            <center>
                          <![endif]-->
                              <a class="cta-secondary" href="<?php echo $json['webinars'][$i]['link']; ?>?source=email" style="background-color: <?php echo $secondary['static']; ?>; color: #ffffff; display: inline-block; font-family: <?php echo $bodyFont; ?>; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 230px;" target="_blank">Register Now&nbsp;&nbsp;&rarr;</a>
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
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <tr>
          <td align="left" valign="top" width="100%" height="10" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 10px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
        </tr>
        <!-- End Spacer -->
        <!-- End Single Webinar -->
        <?php endfor; ?>
        <!-- End Webinars -->
      </table>

      <!-- Start Footer / Width: 600px -->
      <table align="center" width="95%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto; max-width: 600px;">
        <tr>
          <td style="padding-top: 15px;">
            
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
              <?php include 'inc/footer.inc.php'; ?>
              <!-- End Legal -->
            </table>

          </td>
        </tr>
      </table>
      <!-- End Footer -->
      <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
      </table>
      <![endif]-->
      <!-- End Container -->
    </td>
  </tr>
</table>
<!-- End Table Background -->

<?php include 'inc/gmail-hack.inc.php'; ?>

</body>
</html><?php file_put_contents( 'output/webinars/' . $filename, ob_get_contents()); ?>
<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>