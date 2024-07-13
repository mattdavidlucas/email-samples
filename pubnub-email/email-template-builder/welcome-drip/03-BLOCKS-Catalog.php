<?php
include '../inc/template-styles.inc.php';

$filename  = '03-BLOCKS-Catalog-v2.html';
$subject   = 'Program the network with PubNub BLOCKS';
$preheader = 'BLOCKS makes the network programmable and allows developers to easily deploy functions on the PubNub network to modify messages without the need for developers to manage their own infrastructure';
$UTMParams = '?utm_source=EmailBlasts&amp;utm_medium=Welcome-Drip&amp;utm_campaign=EB-CY17-Q1-BLOCKS-Catalog-Email';
$blocksParams = '?all&amp;external-apis&amp;bots-ai&amp;internet-of-things&amp;chat-social&amp;charting-graphing&amp;geolocation&amp;gaming&amp;triggers-notifications&amp;financial&amp;utm_source=EmailBlasts&amp;utm_medium=Welcome-Drip&amp;utm_campaign=EB-CY17-Q1-BLOCKS-Catalog-Email';

date_default_timezone_set('America/Los_Angeles');
ob_start();
?>

<?php include '../inc/header.inc.php'; ?>

<style>
@media only screen and (max-width: 600px) {
  .blocks-catalog-bground {
    background-image: url('http://storage.pardot.com/28622/112251/pubnub_BLOCKS_catalog_hero_mobile.jpg') !important;
    background-size: cover !important;
  }
  
  .featured-blocks-bg { background-size: 200% !important; }

  .block-logo { max-width: 110px !important; }

  .padding-top-0 { padding-top: 0 !important; }

  .padding-bottom-0 { padding-bottom: 0 !important; }
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
          <td>
            
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <!-- Hero -->
              <tr>
                <td class="blocks-catalog-bground" bgcolor="#E7E7E7" background="http://storage.pardot.com/28622/112249/pubnub_BLOCKS_catalog_hero.jpg" style="background: #E7E7E7 url('http://storage.pardot.com/28622/112249/pubnub_BLOCKS_catalog_hero.jpg') no-repeat; background-position: top; background-size: cover; border-bottom: 1px solid #e1e1e1;">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:325px;">
                    <v:fill type="tile" src="http://storage.pardot.com/28622/112249/pubnub_BLOCKS_catalog_hero.jpg" color="#E7E7E7" />
                    <v:textbox inset="0,0,0,0">
                  <![endif]-->
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td>
                        <table align="center" width="90%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto">
                          <!-- Start 2 Col Header -->
                          <tr>
                            <td class="padding-bottom-0" dir="rtl" align="center" style="padding: 20px 0; vertical-align: top;">
                              <!--[if (gte mso 9)|(IE)]>
                              <table dir="rtl" align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto; width: 562px;">
                                <tr>
                                  <td align="center" width="265" style="vertical-align: top; width: 265px;">
                              <![endif]-->
                              <div class="full-width" style="display: inline-block !important; width: 100%; max-width: 265px; vertical-align: top;">
                                <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                                  <tr>
                                    <td class="padding-bottom-0" style="padding: 15px;">
                                      <table dir="ltr" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                        <!-- BLOCKS Logo -->
                                        <tr>
                                          <td align="center" style="font-family: <?php echo $bodyFont; ?>; padding-bottom: 30px;">
                                            <a href="https://www.pubnub.com/docs/blocks-catalog<?php echo $blocksParams; ?>" style="color: #7B8B95; text-decoration: none;" target="_blank"><img src="http://storage.pardot.com/28622/107708/BLOCKS_logo_regular.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="80" height="131" alt="PubNub BLOCKS" border="0" /></a>
                                          </td>
                                        </tr>
                                        <!-- End BLOCKS Logo -->

                                        <tr>
                                          <td style="color: #7B8B95; font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 10px; text-align: center; font-weight: 400; width: 100%;">Execute powerful APIs at the edge, with the click of a button.</td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                              <!--[if (gte mso 9)|(IE)]>
                                  </td>
                              <![endif]-->
                              
                              <!--[if (gte mso 9)|(IE)]>
                                  <td width="263" style="vertical-align: top; width: 263px;">
                              <![endif]-->
                              <div class="full-width hide-on-mobile" style="display: inline-block !important; width: 100%; max-width: 263px; vertical-align: top;">
                                <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                              </div>
                              <!--[if (gte mso 9)|(IE)]>
                                  </td>
                                </tr>
                              </table>
                              <![endif]-->
                            </td>
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
              <!-- End Hero -->

              <!-- Start Content -->
              <tr>
                <td style="background-color: #FFFFFF; border-bottom: 4px solid #DDDDDD;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td class="padding-inner-container" style="padding: 40px 30px;">
                        <table align="center" class="full-width" width="80%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 18px; mso-line-height-rule: exactly; line-height: 24px; padding-bottom: 30px; text-align: center;">PubNub BLOCKS is serverless computing at the edge, giving you access to powerful APIs and functions for your realtime data in motion.</td>
                          </tr>

                          <!-- CTA -->
                          <tr>
                            <td>
                              <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                                <tr>
                                  <td>
                                <!--[if mso]>
                                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.pubnub.com/docs/blocks-catalog<?php echo $blocksParams; ?>" style="height:40px;v-text-anchor:middle;width:230px;" stroke="f" fillcolor="<?php echo $secondary['static']; ?>">
                                  <w:anchorlock/>
                                  <center>
                                <![endif]-->
                                    <a class="cta-secondary" href="https://www.pubnub.com/docs/blocks-catalog<?php echo $blocksParams; ?>" style="background-color: <?php echo $secondary['static']; ?>; color: #ffffff; display: inline-block; font-family: <?php echo $bodyFont; ?>; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 230px;" target="_blank">Get Started&nbsp;&nbsp;&rarr;</a>
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
        <?php include '../inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->

        <!-- Featured BLOCKS -->
        <tr>
          <td bgcolor="<?php echo $primary['static']; ?>" background="http://storage.pardot.com/28622/107250/top_level_background_mso.png" style="background-color: <?php echo $primary['static']; ?>; background-image: url('http://storage.pardot.com/28622/107250/top_level_background_mso.png');">
            <!--[if gte mso 9]>
            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:67px;">
              <v:fill type="tile" src="http://storage.pardot.com/28622/107250/top_level_background_mso.png" color="<?php echo $primary['static']; ?>" />
              <v:textbox inset="0,0,0,0">
            <![endif]-->
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td style="color: #FFFFFF; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 22px; mso-line-height-rule: exactly; text-align: center; font-weight: 400; padding: 20px 30px;">Featured BLOCKS</td>
              </tr>
            </table>
            <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
          </td>
        </tr>

        <tr>
          <td valign="top" style="vertical-align:top;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td class="featured-blocks-bg" bgcolor="#FFFFFF" background="http://storage.pardot.com/28622/112259/pubnub_filter_blocks_catalog_bg.png" style="background: #FFFFFF url('http://storage.pardot.com/28622/112259/pubnub_filter_blocks_catalog_bg.png'); background-size: 107%; border-bottom: 4px solid #DDDDDD;">
                  <!--[if gte mso 9]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:742px;">
                    <v:fill type="tile" src="http://storage.pardot.com/28622/112259/pubnub_filter_blocks_catalog_bg.png" color="#FFFFFF" />
                    <v:textbox inset="0,0,0,0">
                  <![endif]-->
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; max-width: px;">
                    <!-- 2 Columns / RTL Pattern -->
                    <!-- Row 1 - IBM Watson -->
                    <tr>
                      <td align="center" style="padding: 20px 15px 0 15px; vertical-align: top;">
                        <!--[if (gte mso 9)|(IE)]>
                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <tr>
                            <td width="281" style="vertical-align: top; width: 281px;">
                        <![endif]-->
                        <div class="full-width" style="display: inline-block !important; width: 100%; max-width: 281px; vertical-align: top;">
                          <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                            <tr>
                              <td style="padding: 25px 15px 15px 15px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                  <tr>
                                    <td align="center" style="font-family: <?php echo $bodyFont; ?>;"><a href="https://www.pubnub.com/docs/blocks-catalog/pubnub-tutoring-bot/<?php echo $UTMParams; ?>" style="color: <?php echo $fontColor; ?>; text-decoration: none;" target="_blank"><img class="block-logo" src="http://storage.pardot.com/28622/112257/pubnub_blocks_ibm_watson_logo.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; max-width: 135px; outline: none;" width="135" alt="IBM Watson" border="0" /></a></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                            </td>
                        <![endif]-->
                        
                        <!--[if (gte mso 9)|(IE)]>
                            <td width="281" style="vertical-align: top; width: 281px;">
                        <![endif]-->
                        <div class="full-width" style="display: inline-block !important; width: 100%; max-width: 281px; vertical-align: top;">
                          <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                            <tr>
                              <td style="padding: 15px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                  <tr>
                                    <td class="center-text" style="font-family: <?php echo $bodyFont; ?>; font-size: 20px; mso-line-height-rule: exactly; line-height: 24px; padding-bottom: 20px; text-align: left; font-weight: 400; width: 100%;"><a href="https://www.pubnub.com/docs/blocks-catalog/pubnub-tutoring-bot/<?php echo $UTMParams; ?>" style="color: <?php echo $secondary['static']; ?>; text-decoration: none;" target="_blank">Conversation for Automated Interaction</a></td>
                                  </tr>

                                  <tr>
                                    <td class="center-text" style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: left;">Build chatbots and virtual agents that understand natural language and interact with users in realtime.</td>
                                  </tr>

                                  <tr>
                                    <td class="center-text" style="color: <?php echo $secondary['static']; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 18px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 10px; text-align: left; font-weight: 400; width: 100%;"><a href="https://www.pubnub.com/docs/blocks-catalog/pubnub-tutoring-bot/<?php echo $UTMParams; ?>" style="color: <?php echo $secondary['static']; ?>; text-decoration: none;" target="_blank">Start Building &rarr;</a></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                            </td>
                          </tr>
                        </table>
                        <![endif]-->
                      </td>
                    </tr>
                    <!-- End Row 1 -->
                    
                    <!-- Row 2 - Clarifai -->
                    <tr>
                      <td dir="rtl" align="center" style="padding: 20px 15px 0 15px; vertical-align: top;">
                        <!--[if (gte mso 9)|(IE)]>
                        <table dir="rtl" align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <tr>
                            <td width="281" style="vertical-align: top; width: 281px;">
                        <![endif]-->
                        <div class="full-width" style="display: inline-block !important; width: 100%; max-width: 281px; vertical-align: top;">
                          <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                            <tr>
                              <td class="padding-top-0" style="padding: 45px 15px 15px 15px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                  <tr>
                                    <td dir="ltr" align="center" style="font-family: <?php echo $bodyFont; ?>;"><a href="https://www.pubnub.com/docs/blocks-catalog/clarifai/<?php echo $UTMParams; ?>" style="color: <?php echo $fontColor; ?>; text-decoration: none;" target="_blank"><img class="block-logo" src="http://storage.pardot.com/28622/112253/pubnub_blocks_clarifai_logo.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; max-width: 140px; outline: none; margin: 0 auto;" width="140" alt="Clarifai" border="0" /></a></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                            </td>
                        <![endif]-->
                        
                        <!--[if (gte mso 9)|(IE)]>
                            <td width="281" style="vertical-align: top; width: 281px;">
                        <![endif]-->
                        <div class="full-width" style="display: inline-block !important; width: 100%; max-width: 281px; vertical-align: top;">
                          <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                            <tr>
                              <td style="padding: 15px;">
                                <table dir="ltr" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                  <tr>
                                    <td class="center-text" style="color: <?php echo $secondary['static']; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 20px; mso-line-height-rule: exactly; line-height: 20px; padding-bottom: 20px; text-align: left; font-weight: 400; width: 100%;"><a href="https://www.pubnub.com/docs/blocks-catalog/clarifai/<?php echo $UTMParams; ?>" style="color: <?php echo $secondary['static']; ?>; text-decoration: none;" target="_blank">Image and Video Analysis</a></td>
                                  </tr>

                                  <tr>
                                    <td class="center-text" style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: left;">Analyze images to sort, categorize, and tag them based on their properties and features.</td>
                                  </tr>

                                  <tr>
                                    <td class="center-text" style="color: <?php echo $secondary['static']; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 18px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 10px; text-align: left; font-weight: 400; width: 100%;"><a href="https://www.pubnub.com/docs/blocks-catalog/clarifai/<?php echo $UTMParams; ?>" style="color: <?php echo $secondary['static']; ?>; text-decoration: none;" target="_blank">Start Analyzing &rarr;</a></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                            </td>
                          </tr>
                        </table>
                        <![endif]-->
                      </td>
                    </tr>
                    <!-- End Row 2 -->

                    <!-- Row 3 - SendGrid -->
                    <tr>
                      <td align="center" style="padding: 20px 15px; vertical-align: top;">
                        <!--[if (gte mso 9)|(IE)]>
                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                          <tr>
                            <td width="281" style="vertical-align: top; width: 281px;">
                        <![endif]-->
                        <div class="full-width" style="display: inline-block !important; width: 100%; max-width: 281px; vertical-align: top;">
                          <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                            <tr>
                              <td class="padding-top-0" style="padding: 70px 15px 15px 15px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                  <tr>
                                    <td align="center" style="font-family: <?php echo $bodyFont; ?>;"><a href="https://www.pubnub.com/docs/blocks-catalog/sendgrid/<?php echo $UTMParams; ?>" style="color: <?php echo $fontColor; ?>; text-decoration: none;" target="_blank"><img src="http://storage.pardot.com/28622/112255/pubnub_blocks_sendgrid_logo.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; width: 100%; max-width: 180px; outline: none;" width="180" alt="SendGrid" border="0" /></a></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                            </td>
                        <![endif]-->
                        
                        <!--[if (gte mso 9)|(IE)]>
                            <td width="281" style="vertical-align: top; width: 281px;">
                        <![endif]-->
                        <div class="full-width" style="display: inline-block !important; width: 100%; max-width: 281px; vertical-align: top;">
                          <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                            <tr>
                              <td style="padding: 15px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                  <tr>
                                    <td class="center-text" style="color: <?php echo $secondary['static']; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 20px; mso-line-height-rule: exactly; line-height: 20px; padding-bottom: 20px; text-align: left; font-weight: 400; width: 100%;"><a href="https://www.pubnub.com/docs/blocks-catalog/sendgrid/<?php echo $UTMParams; ?>" style="color: <?php echo $secondary['static']; ?>; text-decoration: none;" target="_blank">Transactional Email</a></td>
                                  </tr>

                                  <tr>
                                    <td class="center-text" style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 20px; text-align: left;">Trigger emails to send based on events or actions within realtime data streams, such as sensor readings crossing a certain threshold. </td>
                                  </tr>
                                  
                                  <tr>
                                    <td class="center-text" style="color: <?php echo $secondary['static']; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 18px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 10px; text-align: left; font-weight: 400; width: 100%;"><a href="https://www.pubnub.com/docs/blocks-catalog/sendgrid/<?php echo $UTMParams; ?>" style="color: <?php echo $secondary['static']; ?>; text-decoration: none;" target="_blank">Start Sending &rarr;</a></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if (gte mso 9)|(IE)]>
                            </td>
                          </tr>
                        </table>
                        <![endif]-->
                      </td>
                    </tr>
                    <!-- End Row 3 -->
                  </table>
                  <!--[if gte mso 9]>
                    </v:textbox>
                  </v:rect>
                  <![endif]-->
                </td>
              </tr>
              <!-- End 2 Columns / RTL Pattern -->
            </table>
          </td>
        </tr>
        <!-- End Featured BLOCKS -->

        <!-- Spacer -->
        <?php include '../inc/card-spacer.inc.php'; ?>
        <!-- End Spacer -->

        <!-- Learn More Section -->
        <tr>
          <td style="background-color: #FFFFFF; border-top: 5px solid <?php echo $primary['static']; ?>; border-bottom: 4px solid #DDDDDD;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
              <tr>
                <td style="padding: 40px 30px;">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                    <tr>
                      <td style="color: <?php echo $secondary['static']; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 22px; mso-line-height-rule: exactly; line-height: normal; padding-bottom: 10px; text-align: center; font-weight: 400; width: 100%;">Ready to deploy your first BLOCK?</td>
                    </tr>

                    <tr>
                      <td style="color: <?php echo $fontColor; ?>; font-family: <?php echo $bodyFont; ?>; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; padding-bottom: 30px; text-align: center;">Check out our documentation to get started.</td>
                    </tr>

                    <!-- CTA -->
                    <tr>
                      <td>
                        <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                          <tr>
                            <td>
                          <!--[if mso]>
                          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.pubnub.com/docs/blocks/introduction<?php echo $UTMParams; ?>" style="height:35px;v-text-anchor:middle;width:230px;" stroke="f" fillcolor="<?php echo $primary['static']; ?>">
                            <w:anchorlock/>
                            <center>
                          <![endif]-->
                              <a class="cta-primary" href="https://www.pubnub.com/docs/blocks/introduction<?php echo $UTMParams; ?>" style="background-color: <?php echo $primary['static']; ?>; color: #ffffff; display: inline-block; font-family: <?php echo $bodyFont; ?>; font-size: 16px; line-height: 35px; text-align: center; text-decoration: none; width: 230px;" target="_blank">Read the Docs &#8594;</a>
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
        <!-- End Learn More Section -->
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