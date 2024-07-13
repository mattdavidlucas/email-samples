<?php
include '../inc/template-styles.inc.php';

$filename  = '02-BLOCKS-Pubnub-Resoureces-v2.html';
$subject   = 'Popular use cases for realtime apps';
$preheader = 'Explore and learn about common PubNub use cases, including building chat apps, realtime dashboards, and sending push notifications';
$UTMParams = '?utm_source=EmailBlasts&amp;utm_medium=Welcome-Drip&amp;utm_campaign=EB-CY16-Q4-Welcome-Nurture-Email-02';

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
          <td style="background-color: <?php echo $bgColor; ?>;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Header -->
              <?php include '../inc/pn-logo.inc.php'; ?>
              <!-- End Header -->

              <!-- Hero -->
              <tr>
                <td class="main-hero-globe" background="http://storage.pardot.com/28622/106512/blocks_email_globe_network_background.png" bgcolor="#042D3F" style="background: #042D3F url('http://storage.pardot.com/28622/106512/blocks_email_globe_network_background.png') 60%;">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:155px;">
                    <v:fill type="tile" src="http://storage.pardot.com/28622/106512/blocks_email_globe_network_background.png" color="#042D3F" />
                    <v:textbox inset="0,0,0,0">
                  <![endif]-->
                  <div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                      <tr>
                        <td class="headline-container" style="padding: 40px 0;">
                          <table width="85%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                            <!-- Headline -->
                            <tr>
                              <td class="headline" style="color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 30px; mso-line-height-rule: exactly; line-height: normal; text-align: center;">Explore Common Use Cases For Realtime Apps</td>
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
              
              <!-- Start Card - Intro -->
              <tr>
                <td style="background-color: #FFFFFF;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td align="center" style="border-top: 1px solid #DDDDDD; border-bottom: 4px solid #DDDDDD; padding: 30px; vertical-align: top;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <!-- Copy -->
                          <tr>
                            <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: center;">Realtime interactivity is a fundamental piece of today&rsquo;s apps. User&rsquo;s expect updates, data, and experiences to happen instantly, whether it&rsquo;s chat, home automation, or multiplayer gaming.</td>
                          </tr>

                          <tr>
                            <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px; text-align: center;">Read how other developers and companies, big and small, have used PubNub&rsquo;s easy to use APIs to quickly build and scale secure, collaborative features in a variety of realtime apps.</td>
                          </tr>

                          <!-- CTA -->
                          <tr>
                            <td>
                              <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                                <tr>
                                  <td>
                                <!--[if mso]>
                                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.pubnub.com/solutions/<?php echo $UTMParams; ?>" style="height:40px;v-text-anchor:middle;width:250px;" stroke="f" fillcolor="<?php echo $secondary['static']; ?>">
                                  <w:anchorlock/>
                                  <center>
                                <![endif]-->
                                    <a class="cta-secondary" href="https://www.pubnub.com/solutions/<?php echo $UTMParams; ?>" style="background-color: <?php echo $secondary['static']; ?>; color: #ffffff; display: inline-block; font-family: <?php echo $bodyFont; ?>; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 250px;" target="_blank">View Use Cases&nbsp;&nbsp;&rarr;</a>
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
              <!-- End Content -->

              <!-- Start Card -->
              <!-- Spacer -->
              <tr>
                <td align="left" valign="top" width="100%" height="10" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 10px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
              </tr>
              <!-- End Spacer -->
              
              <!-- Section Header -->
              <tr>
                <td bgcolor="#0D9FBD" background="http://storage.pardot.com/28622/107250/top_level_background_mso.png" style="background: #0D9FBD url('http://storage.pardot.com/28622/107250/top_level_background_mso.png') center;">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:70px;">
                    <v:fill type="tile" src="http://storage.pardot.com/28622/107250/top_level_background_mso.png" color="#0D9FBD" />
                    <v:textbox inset="0,0,0,0">
                  <![endif]-->
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td align="center" style="padding: 20px 0; vertical-align: top;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <!-- Headline -->
                          <tr>
                            <td style="color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 24px; mso-line-height-rule: exactly; line-height: normal; text-align: center; width: 100%;">Popular Use Cases</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <!--[if gte mso 9]>
                    </v:textbox>
                  </v:rect>
                  <![endif]-->
                </td>
              </tr>
              <!-- End Section Header -->
              
              <!-- Start Card - Building Chat Apps -->
              <tr>
                <td style="background-color: #FFFFFF;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td style="font-family: <?php echo $bodyFont; ?>;"><a href="https://www.pubnub.com/solutions/chat/<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $fontColor; ?>; text-decoration: none;"><img src="http://storage.pardot.com/28622/108912/building_chat_apps_image.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; max-width: 600px; outline: none;" width="600" alt="Chat Apps" border="0" /></a></td>
                    </tr>
                  </table>

                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td align="center" style=" border-bottom: 4px solid #DDDDDD; padding: 30px 30px 40px 30px; vertical-align: top;">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <!-- Headline -->
                          <tr>
                            <td style="font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 20px; text-align: center; width: 100%;"><a href="https://www.pubnub.com/solutions/chat/<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">Chat Apps</a></td>
                          </tr>

                          <!-- Copy -->
                          <tr>
                            <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: center;">If you're looking to build a private or group chat app that's scalable, secure and can work on any platform and device, PubNub has you covered.</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>
        <!-- End Card -->

        <!-- Start Card - Data Visualization -->
        <!-- Spacer -->
        <tr>
          <td align="left" valign="top" width="100%" height="10" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 10px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
        </tr>
        <!-- End Spacer -->

        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid <?php echo $secondary['static']; ?>; padding: 0;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td style="font-family: <?php echo $bodyFont; ?>;"><a href="https://www.pubnub.com/solutions/realtime-dashboards/<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $fontColor; ?>; text-decoration: none;"><img src="http://storage.pardot.com/28622/108916/data_visualization_image.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; max-width: 600px; outline: none;" width="600" alt="Data Visualization &amp; Realtime Dashboards" border="0" /></a></td>
              </tr>
            </table>

            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td align="center" style=" border-bottom: 4px solid #DDDDDD; padding: 30px 30px 40px 30px; vertical-align: top;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <!-- Headline -->
                    <tr>
                      <td style="font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 20px; text-align: center; width: 100%;"><a href="https://www.pubnub.com/solutions/realtime-dashboards/<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">Data Visualization &amp; Realtime Dashboards</a></td>
                    </tr>

                    <!-- Copy -->
                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: center;">Learn how you can create eye-catching, realtime visualization dashboards that run in the browser with D3.js and PubNub.</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- End Card -->

        <!-- Start Card - Tracking and Dispatch -->
        <!-- Spacer -->
        <tr>
          <td align="left" valign="top" width="100%" height="10" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 10px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
        </tr>
        <!-- End Spacer -->

        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid <?php echo $secondary['static']; ?>; padding: 0;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td style="font-family: <?php echo $bodyFont; ?>;"><a href="https://www.pubnub.com/solutions/dispatch-and-logistics-tracking/<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $fontColor; ?>; text-decoration: none;"><img src="http://storage.pardot.com/28622/108918/trancking_and_dispatch_image.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; max-width: 600px; outline: none;" width="600" alt="Tracking and Dispatch" border="0" /></a></td>
              </tr>
            </table>

            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td align="center" style=" border-bottom: 4px solid #DDDDDD; padding: 30px 30px 40px 30px; vertical-align: top;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <!-- Headline -->
                    <tr>
                      <td style="font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 20px; text-align: center; width: 100%;"><a href="https://www.pubnub.com/solutions/dispatch-and-logistics-tracking/<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">Tracking and Dispatch</a></td>
                    </tr>

                    <!-- Copy -->
                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: center;">With any transportation or on-demand delivery app, building fast and reliable tracking and dispatch functionality is essential. You need to be able to track location, log events like pickups and drop-offs, and dispatch vehicles on command or automatically based on proximity.</td>
                    </tr>
                    <!-- CTA -->
                    
                    <!-- End CTA -->
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- End Card -->
        
        <!-- Start Card - Sending Push Notifications with PubNub -->
        <!-- Spacer -->
        <tr>
          <td align="left" valign="top" width="100%" height="10" style="border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; mso-line-height-rule: exactly; line-height: 10px;"><!--[if gte mso 15]>&nbsp;<![endif]--></td>
        </tr>
        <!-- End Spacer -->

        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid <?php echo $secondary['static']; ?>; padding: 0;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td style="font-family: <?php echo $bodyFont; ?>;"><a href="https://www.pubnub.com/solutions/push-notifications/<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $fontColor; ?>; text-decoration: none;"><img src="http://storage.pardot.com/28622/108914/sending_push_notifications.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; max-width: 600px; outline: none;" width="600" alt="Sending Push Notifications" border="0" /></a></td>
              </tr>
            </table>

            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td align="center" style=" border-bottom: 4px solid #DDDDDD; padding: 30px 30px 40px 30px; vertical-align: top;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <!-- Headline -->
                    <tr>
                      <td style="font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 20px; text-align: center; width: 100%;"><a href="https://www.pubnub.com/solutions/push-notifications/<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">Sending Push Notifications</a></td>
                    </tr>

                    <!-- Copy -->
                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: center;">PubNub's Mobile Push Notification Gateway lets you send push notifications to both Android and iOS devices in a single message payload (even when devices are offline) and eliminates the need to build an additional server-side component.</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- End Card -->
          
        <!-- Use Case Challenge -->
        <?php include 'inc/use-case-challenge.inc.php'; ?>
        <!-- End Use Case Challenge -->
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