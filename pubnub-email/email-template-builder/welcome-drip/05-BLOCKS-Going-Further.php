<?php
include '../inc/template-styles.inc.php';

$filename  = '05-BLOCKS-Going-Further-v2.html';
$subject   = 'Start using BLOCKS with these simple tutorials';
$preheader = "Build a simple 'Hello World' app, install our Command Line Interface tool, and check out our BLOCKS catalog of pre-built blocks available for one-click deployment";
$UTMParams = '?utm_source=EmailBlasts&amp;utm_medium=Welcome-Drip&amp;utm_campaign=EB-CY16-Q4-Welcome-Nurture-Email-05';
$blocksParams = '?all&amp;external-apis&amp;bots-ai&amp;internet-of-things&amp;chat-social&amp;charting-graphing&amp;geolocation&amp;gaming&amp;triggers-notifications&amp;financial&amp;utm_source=EmailBlasts&amp;utm_medium=Welcome-Drip&amp;utm_campaign=EB-CY16-Q4-Welcome-Nurture-Email-05';

date_default_timezone_set( 'America/Los_Angeles');
ob_start();
?>

<?php include '../inc/header.inc.php'; ?>
<style>
  @media only screen and (max-width: 600px) {
    .main-hero-blocks {
      background-position: bottom !important;
      background-repeat: no-repeat !important;
      height: auto !important;
    }

    .container-logo-blocks { padding: 30px 0 50px 0 !important; }

    .logo-blocks {
      height: auto !important;
      width: 80px !important;
    }

    .body_headline { font-size: 22px !important; }

    .pb-20 { padding-bottom: 20px !important; }
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
              <!-- Hero -->
              <tr>
                <td bgcolor="#042D3F" class="main-hero-blocks" height="295" background="http://storage.pardot.com/28622/116293/general_blocks_hero_desktop_v2.png" style="background-image: url('http://storage.pardot.com/28622/116293/general_blocks_hero_desktop_v2.png'); background-position: center; vertical-align: top;">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:295px;">
                    <v:fill type="tile" src="http://storage.pardot.com/28622/116293/general_blocks_hero_desktop_v2.png" color="#042D3F" />
                    <v:textbox inset="0,0,0,0">
                  <![endif]-->
                  <div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                      <tr>
                        <td class="container-logo-blocks" style="padding-top: 60px;">
                          <table width="85%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                            <!-- Logo -->
                            <tr>
                              <td align="center" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; padding-top: 15px;"><a href="https://www.pubnub.com/products/blocks/<?php echo $UTMParams; ?>" style="color: #000000; text-decoration: none;" target="_blank"><img class="logo-blocks" src="http://storage.pardot.com/28622/107706/BLOCKS_logo_reversed.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="85" height="139" alt="PubNub BLOCKS" border="0" /></a></td>
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

              <tr>
                <td class="padding-inner-container" style="padding: 30px 30px 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td class="body_headline pb-20" style="font-family: <?php echo $bodyFont; ?>; font-size: 24px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 30px; text-align: center; width: 100%;">Take the Next Steps with BLOCKS</td>
                    </tr>
                    
                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: center;">We have a number of pre-built blocks available for one-click deployment, provided by our growing list of API partners, such as IBM Watson, Mapbox, and Lexalytics.</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: center;">In other words, with one-click, you can implement the innovative functionality of IBM Watson to your data streams, enabling you to translate text to 11 different languages, or gauge sentiment of that data.</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: center;">It&rsquo;s that easy.</td>
                    </tr>

                    <!-- CTA -->
                    <tr>
                      <td>
                        <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td>
                          <!--[if mso]>
                          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.pubnub.com/blocks-catalog/<?php echo $blocksParams; ?>" style="height:40px;v-text-anchor:middle;width:250px;" stroke="f" fillcolor="<?php echo $secondary['static']; ?>">
                            <w:anchorlock/>
                            <center>
                          <![endif]-->
                              <a class="cta-secondary" href="https://www.pubnub.com/blocks-catalog/<?php echo $blocksParams; ?>" style="background-color: <?php echo $secondary['static']; ?>; color: #ffffff; display: inline-block; font-family: <?php echo $bodyFont; ?>; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 250px;" target="_blank">View Catalog&nbsp;&nbsp;&rarr;</a>
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

        <!-- Start Content -->
        <!-- Start Card -->
        <!-- Spacer -->
        <?php include '../inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->

        <!-- Section Header -->
        <tr>
          <td style="background-color: <?php echo $primary['static']; ?>;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td align="center" style="padding: 20px 30px; vertical-align: top;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <!-- Headline -->
                    <tr>
                      <td style="color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; text-align: center; width: 100%;">BLOCKS Resources</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- End Section Header -->

        <tr>
          <td style="background-color: #FFFFFF; border-top: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; padding: 40px 30px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; max-width: px;">
              <!-- Tutorials -->
              <tr>
                <td style="font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 10px; text-align: center; width: 100%;"><a href="https://www.pubnub.com/docs/blocks/tutorials/hello-world<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">Tutorials</a></td>
              </tr>

              <tr>
                <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: center;">Start using BLOCKS with these simple tutorials.</td>
              </tr>

              <!-- Code Snippet -->
              <tr>
                <td>
                  <table align="center" cellpadding="0" cellspacing="0" border="0" style="background-color: #333333; border-radius: 5px; border-collapse: collapse; margin: 0 auto;">
                    <tr>
                      <td style="color: #FFFFFF; font-family: monospace, monaco, sans-serif; font-size: 16px; padding: 10px 20px; text-align: left;">
                      <span style="color: #B294BB;">export default</span> (request) <span style="color: #8ABEB7;">=></span> {<br />
                      &nbsp;&nbsp;&nbsp;request.message.hello <span style="color: #8ABEB7;">=</span> <span style="color: #B5BD68;">"world!"</span>;<br />
                      &nbsp;&nbsp;&nbsp;<span style="color: #B294BB;">return</span> request.ok();<br />
                      }
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Code Snippet -->
              <!-- End Tutorials -->
            </table>
          </td>
        </tr>
        <!-- End Card -->

        <tr>
          <td style="background-color: #FFFFFF; border-top: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; padding: 40px 30px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; max-width: px;">
              <!-- CLI Tool -->
              <tr>
                <td style="font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 10px; text-align: center; width: 100%;"><a href="https://www.pubnub.com/docs/blocks/cli-api<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">Command Line Interface</a></td>
              </tr>
              
              <tr>
                <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: center;">Interact with PubNub through our interactive CLI, available through npm.</td>
              </tr>

              <!-- Code Snippet -->
              <tr>
                <td>
                  <table align="center" width="70%" cellpadding="0" cellspacing="0" border="0" style="background-color: #333333; border-radius: 5px; border-collapse: collapse; margin: 0 auto;">
                    <tr>
                      <td style="color: #FFFFFF; font-family: monospace, monaco, sans-serif; font-size: 16px; padding: 10px 20px; text-align: center;">npm install -g pubnub-cli</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Code Snippet -->
              <!-- End CLI Tool -->
            </table>
          </td>
        </tr>
        <!-- End Card -->
        
        <tr>
          <td style="background-color: #FFFFFF; border-top: 1px solid #DDDDDD; border-bottom: 4px solid #DDDDDD; padding: 40px 30px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; max-width: px;">
              <!-- Promises -->
              <tr>
                <td style="font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 10px; text-align: center; width: 100%;"><a href="https://www.pubnub.com/docs/blocks/promises<?php echo $UTMParams; ?>" target="_blank" style="color: #000000; text-decoration: none;">JavaScript Promises</a></td>
              </tr>

              <tr>
                <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: center;">Learn about Promises and how they're used in the context of BLOCKS.</td>
              </tr>

              <!-- Code Snippet -->
              <tr>
                <td>
                  <table align="center" cellpadding="0" cellspacing="0" border="0" style="background-color: #333333; border-radius: 5px; border-collapse: collapse; margin: 0 auto;">
                    <tr>
                      <td style="color: #FFFFFF; font-family: monospace, monaco, sans-serif; font-size: 16px; padding: 10px 20px; text-align: center;"><span style="color: #A17C92;">const</span> Promise <span style="color: #8ABEB7;">=</span> require(<span style="color: #B5B456;">'promise'</span>);</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Code Snippet -->
              <!-- End Promises -->
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