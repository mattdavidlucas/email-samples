<?php
include 'inc/template-styles.inc.php';

$filename  = 'content-roundup.html';
$UTMParams = '?utm_source=EmailBlasts&amp;utm_medium=Content-Roundup&amp;utm_campaign=EB-CY17-QX-Content-Roundup-MONTH-ISSUE_NUMBER';
$preheader = "";
$content   = file_get_contents('content/content-roundup.json');
$json      = json_decode($content, TRUE);

function readTime($words,$images) { return ceil( ($words/275) + (0.12*$images) ); }

date_default_timezone_set( 'America/Los_Angeles');
ob_start();
?>

<?php include 'inc/header.inc.php'; ?>

<!-- Custom CSS here -->
<style type="text/css">
.fade:hover img { opacity: 0.50; }

@media only screen and (max-width: 600px) {
  .hero-headline {
    font-size: 26px !important;
    line-height: 32px !important;
    padding-bottom: 10px !important;
  }

  .headline-container {
    padding: 30px 0 !important;
  }

  .story-headline, .story-share { display: block !important; }

  .story-headline { 
    padding-right: 0 !important; 
    padding-bottom: 15px !important; 
  }

  .promo-headline {
    font-size: 20px !important;
    line-height: 22px !important;
  }

  .text-center {
    text-align: center !important;
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

      <!-- Start Container / Width: 620px -->
      <!--[if (gte mso 9)|(IE)]>
      <table align="center" width="620" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 620px;">
        <tr>
          <td style="vertical-align: top;">
      <![endif]-->
      <table class="full-width" align="center" width="95%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto; max-width: 620px;">
        <tr>
          <td style="background-color: #F4F4F4;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Header -->
              <?php include 'inc/pn-logo.inc.php'; ?>
              <!-- End Header -->
              
              <!-- Hero -->
              <tr>
                <td class="main-hero" background="http://storage.pardot.com/28622/116431/pubnub_content_roundup_hero_june_2017.jpg" bgcolor="#012C3F" style="background-color: #012C3F; background-image: url('http://storage.pardot.com/28622/116431/pubnub_content_roundup_hero_june_2017.jpg'); background-size: cover;">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:620px;height:200px;">
                    <v:fill type="tile" src="http://storage.pardot.com/28622/116431/pubnub_content_roundup_hero_june_2017.jpg" color="#012C3F" />
                    <v:textbox inset="0,0,0,0">
                  <![endif]-->
                  <div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                      <tr>
                        <td class="headline-container" style="padding: 70px 0;">
                          <table width="80%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                            <!-- Headline -->
                            <tr>
                              <td class="hero-headline" style="font-family: <?php echo $bodyFont; ?>; font-size: 32px; font-weight: bold; mso-line-height-rule: exactly; line-height: 32px; padding-bottom: 10px; text-align: center; text-shadow: 1px 1px 1px #555555;"><a href="https://www.pubnub.com/blog/<?php echo $UTMParams; ?>" style="color: #FFFFFF; text-decoration: none;" target="_blank">Content Roundup</a></td>
                            </tr>

                            <!-- Subhead -->
                            <tr>
                              <td style="color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: normal; text-align: center; text-shadow: 1px 1px 1px #555555; text-transform: uppercase; width: 100%;">Weekend of June <span class="block-element">24th &amp; 25th</span></td>
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
              <?php for ($i=0; $i < count($json['stories']); $i++): ?>
              <tr>
                <td style="background-color: #FFFFFF; border-bottom: 4px solid #DDDDDD;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <?php if ( $json['stories'][$i]['image'] ): ?>
                    <!-- Image -->
                    <tr>
                      <td style="font-family: <?php echo $bodyFont; ?>; font-size: 16px; font-weight: bold;"><a href="<?php echo $json['stories'][$i]['link'] . $UTMParams; ?>" style="color: #FFFFFF; text-decoration: none;" target="_blank"><img src="<?php echo $json['stories'][$i]['image']; ?>" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none; width: 100%; max-width: 620px;" width="620" alt="<?php echo $json['stories'][$i]['headline']; ?>" border="0" /></a></td>
                    </tr>
                    <?php endif; ?>

                    <tr>
                      <td style="padding: 30px 30px 40px 30px;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <!-- Headline  -->
                          <tr>
                            <td>
                              <table class="full-width" align="center" width="70%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                                <tr>
                                  <td class="story-headline" style="font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding-bottom: 5px; text-align:center; vertical-align: top; width: 100%;"><a href="<?php echo $json['stories'][$i]['link'] . $UTMParams; ?>" target="_blank" style="color: #232d39; text-decoration: none;"><?php echo $json['stories'][$i]['headline']; ?></a></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          
                          <tr>
                            <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 14px; font-style: italic; mso-line-height-rule: exactly; padding-bottom: 20px; text-align: center;"><?php echo $json['stories'][$i]['date']; ?> | <?php echo readTime($json['stories'][$i]['wordCount'],$json['stories'][$i]['imageCount']); ?> min read</td>
                          </tr>

                          <!-- Copy -->
                          <tr>
                            <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px; text-align: center;"><?php echo $json['stories'][$i]['copy']; ?></td>
                          </tr>

                          <!-- CTA -->
                          <tr>
                            <td>
                              <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                                <tr>
                                  <td>
                                <!--[if mso]>
                                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?php echo $json['stories'][$i]['link'] . $UTMParams; ?>" style="height:40px;v-text-anchor:middle;width:255px;" stroke="f" fillcolor="<?php echo $secondary['static']; ?>">
                                  <w:anchorlock/>
                                  <center>
                                <![endif]-->
                                    <a class="cta-secondary" href="<?php echo $json['stories'][$i]['link'] . $UTMParams; ?>" style="background-color: <?php echo $secondary['static']; ?>; color: #ffffff; display: inline-block; font-family: <?php echo $bodyFont; ?>; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 255px;" target="_blank"><?php echo $json['stories'][$i]['cta']; ?></a>
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
                <td align="left" valign="top" width="100%" height="20" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 20px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
              </tr>
              <!-- End Spacer -->
              <?php endfor; ?>
              <!-- End Content -->

              <!-- PubNub Social -->
              <?php include 'inc/promos/pubnub-social.inc.php'; ?>
              
              <!-- Webinars -->
              <?php include 'inc/promos/upcoming-webinars.inc.php'; ?>

              <!-- Data in Motion Stories -->
              <?php include 'inc/promos/datainmotion-stories.inc.php'; ?>
            </table>
          </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
      </table>
      <![endif]-->
      <!-- End Container -->

      <!-- Start Footer / Width: 620px -->
      <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto; max-width: 620px;">
        <tr>
          <td style="padding-top: 15px;">
            
            <table align="center" width="80%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
              <!-- Social Icons -->
              <tr>
                <td style="padding-bottom: 20px;">
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
              <?php include 'inc/footer-cr.inc.php'; ?>
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

<?php include 'inc/gmail-hack.inc.php'; ?>

</body>
</html><?php file_put_contents( 'output/content-roundup/' . $filename, ob_get_contents()); ?>
<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>