<?php 
include 'inc/template-styles.inc.php';

$filename  = 'product-update.html';
$preheader = "";
$UTMParams = '?utm_source=EmailBlasts&amp;utm_medium=Product-Update&amp;utm_campaign=EB-CY17-QX-Product-Updates-MONTH';

include 'inc/components.inc.php';

date_default_timezone_set( 'America/Los_Angeles');
ob_start();
?>

<?php include 'inc/header.inc.php'; ?>

<!-- Custom CSS here -->
<style type="text/css">
@media only screen and (max-width: 600px) {
  .headline-padding { padding: 30px 0 !important; }
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
      <table align="center" width="95%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto; max-width: 620px;">
        <!-- Header -->
        <?php include 'inc/pn-logo.inc.php'; ?>
        <!-- End Header -->

        <!-- Hero -->
        <tr>
          <td class="main-hero" background="http://storage.pardot.com/28622/116097/pubnub_product_update_may_2017_hero.jpg" bgcolor="#1A2224" style="background-color: #1A2224; background-image: url('http://storage.pardot.com/28622/116097/pubnub_product_update_may_2017_hero.jpg'); background-size: cover; background-position: top;">
            <!--[if gte mso 9]>
            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:620px;height:170px;">
              <v:fill type="tile" src="http://storage.pardot.com/28622/116097/pubnub_product_update_may_2017_hero.jpg" color="#1A2224" />
              <v:textbox inset="0,0,0,0">
            <![endif]-->
            <div>
              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                <tr>
                  <td class="headline-padding" style="padding: 50px 0;">
                    <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                      <!-- Headline -->
                      <tr>
                        <td style="color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 28px; font-weight: bold; mso-line-height-rule: exactly; line-height: 44px; padding-bottom: 0; text-align: center; text-shadow: 1px 1px 1px #222222; width: 100%;"><a href="https://www.pubnub.com/docs/feature-updates<?php echo $UTMParams; ?>" target="_blank" style="color: #FFFFFF; text-decoration: none;">Product Update</a></td>
                      </tr>

                      <!-- Subhead -->
                      <tr>
                        <td style="color: #FFFFFF; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 5px; text-align: center; text-shadow: 1px 1px 1px #222222; text-transform: uppercase; width: 100%;">May 2017</td>
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

        <!-- Card - 1 -->
        <tr>
          <td style="background-color: #FFFFFF; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td>
                        <table class="full-width" align="center" width="80%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">Available Now: Billing &amp; Support Information</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    
                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: left;">Billing and support information is now visible for easy reference in your <a href="https://admin.pubnub.com/#/login<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">Admin Dashboard</a>. Simply login, click your account name in the upper right hand corner, and select &ldquo;General&rdquo;. Under &ldquo;Account Details&rdquo; you will then see your current Support Plan and Billing Tiers.</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->

        <!-- Card 2 -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid #127d99; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Full Width Image -->
              <tr>
                <td style="border-bottom: 1px solid #DDDDDD; font-family: <?php echo $bodyFont; ?>;"><a href="https://admin.pubnub.com/#/login<?php echo $UTMParams; ?>" style="color: <?php echo $linkColor; ?>; text-decoration: none;" target="_blank"><img src="http://storage.pardot.com/28622/116159/pubnub_product_update_may_2017_blocks_filters.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; outline: none;" width="620" alt="BLOCKS Console Filters" border="0" /></a>
                </td>
              </tr>

              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">BLOCKS Console Filters</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: left;">Buttons for filtering the output of the BLOCKS console are now available. Filter internal messages such as System Info, Blocks Status, and Channel Status, from user-supplied messages such as Console Output or Test Messages. This allows you to more easily debug your code as you develop blocks in our editor.</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->

        <!-- Card 3 -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid #127d99; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Full Width Image -->
              <tr>
                <td style="border-bottom: 1px solid #DDDDDD; font-family: <?php echo $bodyFont; ?>;">
                  <a href="https://admin.pubnub.com/#/login<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>; text-decoration: none;"><img src="http://storage.pardot.com/28622/116093/pubnub_product_update_may_2017_portal_instructions.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; outline: none;" width="620" alt="Portal Instructions" border="0" />
                </td>
              </tr>

              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">Portal Instructions</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: left;">Last month we introduced walkthroughs to various pages of the <a href="https://admin.pubnub.com/#/login<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">Admin Dashboard</a> in the form of pop-up tooltips. We have added more instructions throughout the <a href="https://admin.pubnub.com/#/login<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">Admin Dashboard</a> to help you navigate and see the most important info on each page. Closing the instructions will prevent them from showing again, with the option of re-enabling them at any point in the future should you choose.</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->

        <!-- Card 5 -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid #127d99; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">PHP v4 Beta Now Available</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px; text-align: left;">The PHP v4 Beta is now publically available for <a href="https://packagist.org/packages/pubnub/pubnub" target="_blank" style="color: <?php echo $linkColor; ?>;">download</a>. As with the other v4 SDK releases, the PHP v4 SDK is re-written from the ground up to be lighter, faster, and easier-to-use than ever before. Head on over to our <a href="https://www.pubnub.com/docs/php/pubnub-php-sdk<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">documentation</a> to learn more and download the SDK.</td>
                    </tr>

                    <?php echo lightCTA('https://www.pubnub.com/docs/php/pubnub-php-sdk', 'Download Now') ?>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->

        <!-- Featured BLOCKS -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid #127d99; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Full Width Image -->
              <tr>
                <td style="border-bottom: 1px solid #DDDDDD; font-family: <?php echo $bodyFont; ?>;">
                  <a href="https://www.pubnub.com/docs/blocks-catalog<?php echo $UTMParams; ?>&amp;all&amp;external-apis&amp;bots-ai&amp;internet-of-things&amp;chat-social&amp;charting-graphing&amp;geolocation&amp;gaming&amp;triggers-notifications&amp;financial" style="color: <?php echo $linkColor; ?>; text-decoration: none;" target="_blank"><img src="http://storage.pardot.com/28622/116095/pubnub_product_update_may_2017_blocks_catalog.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; outline: none;" width="620" alt="BLOCKS Catalog &amp; Featured May Blocks" border="0" /></a>
                </td>
              </tr>

              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td>
                        <table class="full-width" align="center" width="80%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">BLOCKS Catalog &amp; Featured May Blocks</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    
                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px;">Our API Partner network is growing fast! And along with it comes a number of blocks created for features common to realtime applications; the growing <a href="https://www.pubnub.com/docs/blocks-catalog<?php echo $UTMParams; ?>&amp;all&amp;external-apis&amp;bots-ai&amp;internet-of-things&amp;chat-social&amp;charting-graphing&amp;geolocation&amp;gaming&amp;triggers-notifications&amp;financial" target="_blank" style="color: <?php echo $linkColor; ?>;">BLOCKS catalog</a> includes chat filtering, language translation, geofencing, sensor aggregation, third-party API integrations, and more. You are free to create your own BLOCK or modify an existing pre-built BLOCK.</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: left;">Some of this month&rsquo;s featured blocks include:</td>
                    </tr>
                    
                    <!-- Bullet List -->
                    <tr>
                      <td style="padding-bottom: 30px;">
                        <table align="center" width="90%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td width="12" align="center" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px;padding-left: 3px; padding-right: 3px; width: 12px;">&bull;</td>
                        
                            <td align="left" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height: 22px; padding-bottom: 10px;"><a href="https://www.pubnub.com/docs/blocks-catalog/cisco-spark-collaboration<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">Cisco Spark</a> &ndash; Cisco Spark is an app-centric, cloud-based service that provides a complete collaboration suite for teams to create, meet, message, call, whiteboard, and share. With the Cisco Spark block, you can kick off a video call, open a chat message, or initiate an interactive whiteboard, all within the PubNub Network.</td>
                          </tr>

                          <tr>
                            <td width="12" align="center" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px;padding-left: 3px; padding-right: 3px; width: 12px;">&bull;</td>
                        
                            <td align="left" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height: 22px; padding-bottom: 10px;"><a href="https://www.pubnub.com/docs/blocks-catalog/openwhisk<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">IBM OpenWhisk</a> &ndash; The IBM Openwhisk block allows OpenWhisk to work with today’s stream-based applications, to stream data to and from OpenWhisk, and leverage PubNub BLOCKS for lightweight compute in the network.</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <!-- End Bullet List -->
                    
                    <!-- CTA -->
                    <tr>
                      <td>
                        <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td>
                          <!--[if mso]>
                          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.pubnub.com/docs/blocks-catalog<?php echo $UTMParams; ?>&amp;all&amp;external-apis&amp;bots-ai&amp;internet-of-things&amp;chat-social&amp;charting-graphing&amp;geolocation&amp;gaming&amp;triggers-notifications&amp;financial" style="height:40px;v-text-anchor:middle;width:250px;" stroke="f" fillcolor="<?php echo $secondary['static']; ?>">
                            <w:anchorlock/>
                            <center>
                          <![endif]-->
                              <a class="cta-secondary" href="https://www.pubnub.com/docs/blocks-catalog<?php echo $UTMParams; ?>&amp;all&amp;external-apis&amp;bots-ai&amp;internet-of-things&amp;chat-social&amp;charting-graphing&amp;geolocation&amp;gaming&amp;triggers-notifications&amp;financial" style="background-color: <?php echo $secondary['static']; ?>; color: #ffffff; display: inline-block; font-family: <?php echo $bodyFont; ?>; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 250px;" target="_blank">View BLOCKS Catalog&nbsp;&nbsp;&rarr;</a>
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

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->

        <!-- Card 7 -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid #127d99; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">Coming Soon: BLOCKS Endpoints</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: left;">A big update to BLOCKS is coming soon: the ability to trigger blocks using webhooks! This will allow you to build complete HTTP microservices independent of any PubNub SDKs, and to easily integrate any service with the PubNub network. If you&rsquo;re interested in using the beta, please email <a href="mailto:david.hegarty@pubnub.com" style="color: <?php echo $linkColor; ?>;">david.hegarty@pubnub.com</a> or reply to this email directly.</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->

        <!-- Card 8 -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid #127d99; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">Reminder: Chat Support</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: left;">We have added full support for connecting with us via chat throughout our service &mdash; on both the website and Admin Dashboard! We have developers available most hours of the day from Monday to Friday to make sure your pricing, technical, and general questions get addressed. If you are unable to connect with us, please remember you are free to email <a href="mailto:support@pubnub.com" style="color: <?php echo $linkColor; ?>;">support@pubnub.com</a> with your questions at any time!</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->

        <!-- End of Life SDKs -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid #127d99; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td>
                        <table class="full-width" align="center" width="75%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">Reminder: End of Life for Java v3, Ruby v3, and JavaScript v3</td>
                          </tr>
                        </table>
                      </td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px; text-align: left;">The following SDKs will be reaching end of life:</td>
                    </tr>
                    
                    <!-- Bullet List -->
                    <tr>
                      <td style="padding-bottom: 30px;">
                        <table align="center" width="90%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td width="12" align="center" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px; padding-left: 3px; padding-right: 3px; width: 12px;">&bull;</td>
                        
                            <td align="left" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height: 22px; padding-bottom: 5px;"><a href="https://www.pubnub.com/docs/java-se-java/pubnub-java-sdk-v3<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">Java</a>/<a href="https://www.pubnub.com/docs/android-java/pubnub-java-sdk-v3<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">Android v3</a> on March 1st, 2017</td>
                          </tr>
                      
                          <tr>
                            <td align="center" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px;padding-left: 3px; padding-right: 3px;">&bull;</td>
                        
                            <td align="left" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height: 22px; padding-bottom: 5px;"><a href="https://www.pubnub.com/docs/ruby/pubnub-ruby-sdk-v3<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">Ruby v3</a> on April 1st, 2017</td>
                          </tr>

                          <tr>
                            <td align="center" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px;padding-left: 3px; padding-right: 3px;">&bull;</td>
                        
                            <td align="left" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height: 22px; padding-bottom: 5px;"><a href="https://www.pubnub.com/docs/web-javascript/pubnub-javascript-sdk-v3<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">JavaScript v3</a> on July 1st, 2017</td>
                          </tr>  
                        </table>
                      </td>
                    </tr>
                    <!-- End Bullet List -->

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-align: left;">These SDKs will be fully supported leading up to the end of life date. When the date has passed, only 'best effort' support will be provided for v3 SDKs. We encourage upgrading to v4 &mdash; if any issues are encountered past the cut-off date, we cannot guarantee they will be resolved!</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->

        <!-- Summary: SDK Updates -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid #127d99; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Full Width Image -->
              <tr>
                <td style="border-bottom: 1px solid #DDDDDD; font-family: <?php echo $bodyFont; ?>;"><a href="https://www.pubnub.com/docs<?php echo $UTMParams; ?>" style="color: <?php echo $linkColor; ?>; text-decoration: none;" target="_blank"><img src="http://storage.pardot.com/28622/113763/pubnub_sdks_mar_2017.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; outline: none;" width="620" alt="PubNub SDKs" border="0" /></a>
                </td>
              </tr>

              <!-- Content -->
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td style="color: #232d39; font-family: <?php echo $bodyFont; ?>; font-size: 20px; font-weight: bold; mso-line-height-rule: exactly; line-height: 24px; padding: 0 0 20px 0; text-align: center; width: 100%;">Summary: SDK Update</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px;">PubNub has updated the following SDKs. Click through for full details on the latest releases:</td>
                    </tr>
                    
                    <tr>
                      <td style="padding-bottom: 30px;">
                        <table align="center" width="90%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <!-- Java -->
                          <tr>
                            <td width="12" align="center" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px; padding-left: 3px; padding-right: 3px; width: 12px;">&bull;</td>

                            <td align="left" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px; padding-bottom: 5px;"><a href="https://www.pubnub.com/docs/java-se-java/pubnub-java-sdk<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">Java</a> (4.6.2)</td>
                          </tr>
                          
                          <!-- JS -->
                          <tr>
                            <td align="center" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px; padding-left: 3px; padding-right: 3px;">&bull;</td>

                            <td align="left" valign="top" style="color:<?php echo $fontColor; ?>; font-family:<?php echo $bodyFont; ?>; font-size:16px; line-height:24px; padding-bottom: 5px;"><a href="https://www.pubnub.com/docs/web-javascript/pubnub-javascript-sdk<?php echo $UTMParams; ?>" target="_blank" style="color: <?php echo $linkColor; ?>;">JavaScript</a> (4.10.0)</td>
                          </tr>
                        </table>
                      </td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px;">For access to all 70+ PubNub SDKs, visit our <a href="https://www.pubnub.com/docs<?php echo $UTMParams; ?>" style="color: <?php echo $linkColor; ?>;" target="_blank">Developer Resources</a>.</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- End Content -->
            </table>
          </td>
        </tr>

        <!-- Spacer -->
        <?php include 'inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->
        <!-- End Card -->
      </table>

      <!-- Start Footer / Width: 620px -->
      <table align="center" width="95%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto; max-width: 620px;">
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
</html><?php file_put_contents( 'output/product-update/' . $filename, ob_get_contents()); ?>
<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>