<?php
// The name of your output file
$filename      = 'adsk-promo-template.html';
// Copy for the title tag
$emailTitle    = 'Autodesk';

ob_start();

include '../includes/config.inc.php';
include '../includes/header-templates.inc.php';
include '../includes/components.php';
?>


                            
                            <div class="mktEditable" id="edm_promo_Banner">
                            <!-- [Banner_2A] - Banner with 3/4 image - Right -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px;" align="center">
                                <tr>
                                    <td style="background-color: <?php echo $brandColor; ?>;">
                                        <!--[if (gte mso 9)|(IE)]>
                                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                            <tr>
                                                <td width="384" style="vertical-align: top; width: 384px;">
                                        <![endif]-->
                                        <!-- Text Column -->
                                        <table class="full-width" align="left" width="384" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 384px;">
                                            <tr>
                                                <td height="233" class="banner-headlines-container" style="height: 233px; padding: 0 0 0 35px;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="header_headline" style="font-size: 27px; color: #ffffff; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal; padding-bottom: 5px;" align="left">Headline - 27px/22px</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="header_subhead" style="font-size: 22px; color: #ffffff; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal;" align="left">Subhead - 22px/ 18px</td>
                                                        </tr>
                                                    </table>                                                    
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Text Column -->
                                        <!--[if (gte mso 9)|(IE)]>
                                                </td>
                                        <![endif]-->
                                        
                                        <!--[if (gte mso 9)|(IE)]>
                                                <td width="286" style="width: 286px;">
                                        <![endif]-->
                                        <!-- Image Column -->
                                        <table class="full-width" align="left" width="286" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 286px;">
                                            <tr>
                                                <td><div class="banner-image-container"><img class="fluid-img" src="https://pages.autodesk.com/rs/918-FOD-433/images/promo-image-572x466.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="286" height="233" alt="" border="0" /></div></td>
                                            </tr>
                                        </table>
                                        <!-- End Image Column -->
                                        <!--[if (gte mso 9)|(IE)]>
                                                </td>
                                            </tr>
                                        </table>
                                        <![endif]-->
                                    </td>
                                </tr>
                                <!-- Spacer -->
                                <tr>
                                    <td height="10" style="mso-line-height-rule:exactly; line-height: 10px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="10" height="10" border="0" style="display: block;" /></td>
                                </tr>
                            </table>
                            <!-- End [Banner_2A] - Banner with 3/4 image - Right  -->
                            </div>
                            
                            

                            <!-- [Body_1] - Two columns with text, image and CTA -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <!-- 
                                                            Change background color based on length of sidebar
                                                            Main column = #FFFFFF
                                                            Sidebar column = #F7F7F7
                                                            -->
                                                            <td style="background-color: #F7F7F7; vertical-align: top;" align="left" valign="top">

                                                                <!--[if (gte mso 9)|(IE)]>
                                                                <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                <tr>
                                                                  <td width="384" style="vertical-align: top; width: 384px;">
                                                                <![endif]-->
                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" class="full-width" style="background-color: #FFFFFF; width: 384px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td-primary" style="padding: 40px 32px 40px 32px;" align="left" valign="top">
                                                                            <div class="mktEditable" id="edm_promo_Body-Content-Main">
                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td style="font-size: 18px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: normal; text-align: left; word-break: normal; line-height: 18px; padding: 0px 0px 30px 0px; " align="left">Hello {{lead.First Name:default=Recipient}},</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 0;" align="left">Amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, <a href="" style="color: #666666; text-decoration: underline;">text with hyper-links are underlined</a> tation ullamcorper suscipit lobortis.</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: bold; text-align: left; word-break: normal; line-height: 22px; padding: 20px 0px 20px 0px;" align="left">Subhead</td>
                                                                                </tr>

                                                                                <!-- LIST -->
                                                                                <tr>
                                                                                    <td>
                                                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                                                            <tr>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; line-height: 22px;  padding: 0px 5px 8px 5px; font-weight:bold; vertical-align: top;"  class="normal_copy_wrapper">&bull;</td>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px;  padding: 0px 0px 8px 0px;" valign="top" class="normal_copy_wrapper">Lorem ipsum dolor</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; line-height: 22px;  padding: 0px 5px 8px 5px;font-weight:bold; vertical-align: top;"  class="normal_copy_wrapper">&bull;</td>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px;  padding: 0px 0px 8px 0px;" valign="top" class="normal_copy_wrapper">Lorem ipsum dolor</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; line-height: 22px;  padding: 0px 5px 8px 5px;font-weight:bold; vertical-align: top;"  class="normal_copy_wrapper">&bull;</td>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px;  padding: 0px 0px 8px 0px;" valign="top" class="normal_copy_wrapper">Lorem ipsum dolor</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; line-height: 22px; padding: 0px 5px 0px 5px;font-weight:bold; vertical-align: top;"  class="normal_copy_wrapper">&bull;</td>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px;  padding: 0;" valign="top" class="normal_copy_wrapper">Lorem ipsum dolor</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- END LIST -->

                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 20px 0px 0px 0px;" align="left">Amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 20px 0px 0px 0px; " align="left"><a href="#" style="color: #444444; text-decoration: underline;">Inline text CTA copy.</a>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 20px 0px 0px 0px;" align="left">Amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 20px 0px 0px 0px;" align="left">Amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</td>
                                                                                </tr>
                                                                            </table>    
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                    </td>
                                                                <![endif]-->

                                                                <!--[if (gte mso 9)|(IE)]>
                                                                    <td width="286" style="background-color: #F7F7F7; vertical-align: top; width: 286px;">
                                                                <![endif]-->
                                                                <table align="left" border="0" cellpadding="0" cellspacing="0" class="full-width" style="width: 286px; border-collapse: collapse; background-color: #F7F7F7;" bgcolor="#F7F7F7">
                                                                    <tr>
                                                                        <td class="sidebar-td-blue" align="left" valign="top">
                                                                            <div class="mktEditable" id="edm_promo_Body-Content-Sidebar">
                                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="no-padding" style="padding: 40px 32px;" align="left" valign="top">
                                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td style="font-size: 16px; line-height: 20px; color: #666666; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: bold; text-align: left; padding: 0px 0px 22px 0px;">Primary Offer</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td style="font-size: 15px; line-height: 22px; color: #666666; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: normal; text-align: left; word-break: normal; padding: 0px 0px 20px 0px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur rem expedita culpa amet. Libero blanditiis, porro ea et. Recusandae expedita labore, ducimus quidem at qui consequuntur officiis neque, est optio?</td>
                                                                                            </tr>
                                                                                            
                                                                                            <!-- Primary CTA --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="vertical-align: top;">
                                                                                                    <?php primaryCTA('100%','100%','#0696D7','Download Now'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Primary CTA -->
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>    
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                    </td>
                                                                  </tr
                                                                </table>
                                                                <![endif]-->
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Spacer -->
                                <tr>
                                    <td height="10" style="mso-line-height-rule:exactly; line-height: 10px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="10" height="10" border="0" style="display: block;" /></td>
                                </tr>
                            </table>
                            <!-- End [Body_1] - Two columns with text, image and CTA -->

                            <!-- [Body_16] - Text with CTA below -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <div class="mktEditable" id="edm_promo_Secondary-Offer-Module">
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td style="padding: 24px 32px 24px 32px;" align="left" valign="top">
                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td style="font-size: 18px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: normal; text-align: left; line-height: 18px; padding:0px 0px 15px 0px" align="left">
                                                                                                    Secondary Offer
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 0px 0px 25px 0px;" align="left">
                                                                                                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitati saepe eveniet ut et voluptates repudia ndae sint et molestiae maiores.
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <?php primaryCTA('222','222px','#6A6A6A','Download Now'); ?>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- Spacer -->
                                <tr>
                                    <td height="10" style="mso-line-height-rule:exactly; line-height: 10px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="10" height="10" border="0" style="display: block;" /></td>
                                </tr>
                            </table>
                            <!-- End [Body_16] - Text with CTA below -->


                            <?php include '../includes/footer.inc.php'; ?>

                        </td>
                    </tr>
                </table>
                 <!-- End Main Table Container - 670px -->     
            </td>
        </tr>
    </table>
    <!-- End Body Table - 100% -->    
</body>

</html><?php file_put_contents( '../output/templates/' . $filename, ob_get_contents() ); ?>

<!-- LiveReload -->
<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>