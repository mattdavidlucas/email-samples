<?php
// The name of your output file
$filename      = 'adsk-master-template.html';
// Copy for the title tag
$emailTitle    = 'Autodesk';

ob_start();

include 'includes/config.inc.php';
include 'includes/header-templates.inc.php';
include 'includes/components.php';
?>


                            <!-- [Banner_1] - Banner no image -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="border-collapse: collapse; min-width: 670px; width: 670px;" align="center">
                                            <tr>
                                                <td>
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width">
                                                                <!-- Header Text -->
                                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: <?php echo $brandColor; ?>; border-collapse: collapse;" class="full-width" bgcolor="<?php echo $brandColor; ?>">
                                                                    <tr>
                                                                        <td class="header-text-td" style="padding: 20px 0px 20px 35px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="header_headline" style="font-size: 27px; color: #ffffff; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal; padding-bottom: 5px;" align="left">Lorum Ispsum Dolor</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="header_subhead" style="font-size: 22px; color: #ffffff; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal;" align="left">Amed Lolorum Ipsum Dolor</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
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
                            <!-- End [Banner_1] - Banner no image -->


                            <!-- [Banner_2A] - Banner with 3/4 image - Right -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px;" align="center">
                                <tr>
                                    <td style="background-color: #e6e7e8;">
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
                                                            <td class="header_headline" style="font-size: 27px; color: #0696D7; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal; padding-bottom: 5px;" align="left">Lorum Ispsum Dolor</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="header_subhead" style="font-size: 22px; color: #939598; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal;" align="left">Amed Lolorum Ipsum Dolor</td>
                                                        </tr>

                                                        <!-- CTA -->
                                                        <tr>
                                                            <td width="100%" style="padding-top: 20px; vertical-align: top;">
                                                                <?php primaryCTA('222','222px','#0696D7','Primary CTA'); ?>
                                                            </td>
                                                        </tr>
                                                        <!-- End CTA -->
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
                                                <td><div class="banner-image-container"><a href="" target="_blank"><img class="fluid-img" src="http://placehold.it/572x466" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="286" height="233" alt="" border="0" /></a></div></td>
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

                            <!-- [Banner_2B] - Banner with 3/4 image - Left -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px;" align="center">
                                <tr>
                                    <td style="background-color: #e6e7e8;">
                                        <!--[if (gte mso 9)|(IE)]>
                                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                            <tr>
                                                <td width="286" style="vertical-align: top; width: 286px;">
                                        <![endif]-->
                                        <!-- Image Column -->
                                        <table class="full-width" align="left" width="286" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 286px;">
                                            <tr>
                                                <td><div class="banner-image-container"><a href="" target="_blank"><img class="fluid-img" src="http://placehold.it/572x466" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="286" height="233" alt="" border="0" /></a></div></td>
                                            </tr>
                                        </table>
                                        <!-- End Image Column -->
                                        <!--[if (gte mso 9)|(IE)]>
                                                </td>
                                        <![endif]-->
                                        
                                        <!--[if (gte mso 9)|(IE)]>
                                                <td width="384" style="width: 384px;">
                                        <![endif]-->
                                        <!-- Text Column -->
                                        <table class="full-width" align="left" width="384" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 384px;">
                                            <tr>
                                                <td height="233" class="banner-headlines-container" style="height: 233px; padding: 0 0 0 35px;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="header_headline" style="font-size: 27px; color: #0696D7; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal; padding-bottom: 5px;" align="left">Lorum Ispsum Dolor</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="header_subhead" style="font-size: 22px; color: #939598; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal;" align="left">Amed Lolorum Ipsum Dolor</td>
                                                        </tr>

                                                        <!-- CTA -->
                                                        <tr>
                                                            <td width="100%" style="padding-top: 20px; vertical-align: top;">
                                                                <?php primaryCTA('222','222px','#0696D7','Primary CTA'); ?>
                                                            </td>
                                                        </tr>
                                                        <!-- End CTA -->
                                                    </table>                                                    
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Text Column -->
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
                            <!-- End [Banner_2B] - Banner with 3/4 image - Left  -->

                            <!-- [Banner_3] - Banner with image -->
                            <!-- DELETED, replaced with Banner with HTML Text over Background Image -->
                            <!-- End [Banner_3] - Banner with image -->

                            <!-- Banner with HTML Text over Background Image -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="border-collapse: collapse; min-width: 670px; width: 670px;" align="center">
                                            <tr>
                                                <td>
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="header-text-bg" width="670" height="250" valign="top" style="background-color: #6a6a6a; background-image: url('https://placeholdit.imgix.net/~text?txtsize=63&txt=670%C3%97250&w=670&h=250'); width: 670px;">
                                                            <!--[if gte mso 9]>
                                                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:670px;height:250px;">
                                                            <v:fill type="tile" src="https://placeholdit.imgix.net/~text?txtsize=63&txt=670%C3%97250&w=670&h=250" color="#6a6a6a" />
                                                            <v:textbox inset="0,0,0,0">
                                                            <![endif]-->
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                                <tr>
                                                                    <td class="header-text-td-bg" style="padding-top: 70px;" align="left" valign="top">
                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                                                            <tr>
                                                                                <td colspan="2" class="header-headline-bg" style="font-size: 27px; color: #ffffff; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal; padding: 0 0 5px 35px;" align="left">Lorum Ispsum Dolor</td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td colspan="2" class="header-subhead-bg" style="font-size: 22px; color: #ffffff; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; mso-line-height-rule:exactly; line-height: normal; padding-left: 35px;" align="left">Amed Lolorum Ipsum Dolor</td>
                                                                            </tr>

                                                                            <!-- CTA -->
                                                                            <tr>
                                                                                <td height="20" style="mso-line-height-rule:exactly; line-height: 10px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="10" height="20" border="0" style="display: block;" /></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="hideblock" height="10" width="35" style="mso-line-height-rule:exactly; line-height: 10px; width: 35px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="35" height="10" border="0" style="display: block;" /></td>

                                                                                <td width="100%">
                                                                                    <table class="medium-button" width="222" cellpadding="8" cellspacing="0" border="0" style="background-color: <?php echo $brandColor; ?>; border-collapse: collapse; width: 222px;">
                                                                                        <tr>
                                                                                            <td height="22" class="button-text" style="font-family: arial, helvetica, sans-serif; font-size: 16px; height: 22px; padding-left: 15px; text-transform: uppercase; width: 100%;"><a href="#" style="color: #ffffff; display: inline-block; text-decoration: none; width: 100%;" target="_blank">Primary CTA</a></td>

                                                                                            <td style="padding-right: 15px; width: 10px;"><a href="" target="_blank"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-button-arrow-icon-10x16.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="10" height="16" alt="" border="0" /></a></td>
                                                                                        </tr>
                                                                                    </table>                        
                                                                                </td>
                                                                            </tr>
                                                                            <!-- End CTA -->
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
                            <!-- End Banner with HTML Text over Background Image -->

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
                                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td><a href="" target="_blank"><img class="sidebar-image" src="http://placehold.it/286x123" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="286" height="123" alt="" border="0" /></a></td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="no-padding" style="padding: 40px 32px;" align="left" valign="top">
                                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td style="font-size: 20px; line-height: 120%; color: #666666; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: normal; text-align: left; word-break: normal; padding: 0px 0px 20px 0px; ">Title of offer</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td style="font-size: 16px; line-height: 20px; color: #666666; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: bold; text-align: left; padding: 0px 0px 22px 0px;">Title of offer</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td style="font-size: 15px; line-height: 22px; color: #666666; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: normal; text-align: left; word-break: normal; padding: 0px 0px 20px 0px; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur rem expedita culpa amet. Libero blanditiis, porro ea et. Recusandae expedita labore, ducimus quidem at qui consequuntur officiis neque, est optio?</td>
                                                                                            </tr>
                                                                                            
                                                                                            <!-- Primary CTA --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 0 0 15px 0; vertical-align: top;">
                                                                                                    <?php primaryCTA('100%','100%','#0696D7','Primary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Primary CTA -->

                                                                                            <!-- Text Link with Pointer --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 0 0 15px 0; vertical-align: top;">
                                                                                                    <?php secondaryCTA('gray','Secondary CTA'); ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Text Link with Pointer -->

                                                                                            <tr>
                                                                                                <td style="padding-top: 15px; vertical-align: top;">
                                                                                                    <table width="222" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 222px;">
                                                                                                        <tr>
                                                                                                            <td style="padding: 0 15px 15px 0; vertical-align: top;"><a href="" target="_blank"><img src="http://placehold.it/100x45" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="" height="" alt="" border="0" /></a></td>

                                                                                                            <td style="padding: 0 0 15px; vertical-align: top;"><a href="" target="_blank"><img src="http://placehold.it/100x45" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="" height="" alt="" border="0" /></a></td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td style="padding: 0 15px 15px 0; vertical-align: top;"><a href="" target="_blank"><img src="http://placehold.it/100x45" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="" height="" alt="" border="0" /></a></td>

                                                                                                            <td style="padding: 0 0 15px; vertical-align: top;"><a href="" target="_blank"><img src="http://placehold.it/100x45" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="" height="" alt="" border="0" /></a></td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
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

                            <!-- [Body_2] - Single column text only -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="full-width"  width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" style="padding: 28px 32px 0px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="font-size: 12px; padding: 0px 0px 12px 0px;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="pad-032" style="vertical-align: top; text-align: left; padding: 18px 32px 32px 32px;">
                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="normal_copy_date" style="font-size: 15px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: 600; text-align: left; line-height: 20px;">Event Date</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="normal_copy_date" style="font-size: 15px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: 600; text-align: left; line-height: 20px; padding: 8px 0px 0px 0px;" >Event Time</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="normal_copy_date" style="font-size: 15px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: 600; text-align: left; line-height: 20px; padding: 8px 0px 16px 0px;" >Event Duration</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left;  line-height: 22px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</td>
                                                                                </tr>
                                                                                
                                                                                <!-- Bullet List -->
                                                                                <tr>
                                                                                    <td style="padding: 16px 0px 0px 8px;">
                                                                                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal;  line-height: 22px;  padding: 0px 5px 8px 5px; font-weight:bold; vertical-align: top;"  class="normal_copy_wrapper">&bull;

                                                                                                </td>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px;  padding: 0px 0px 8px 0px;" valign="top" class="normal_copy_wrapper">Topic 1</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal;  line-height: 22px;  padding: 0px 5px 8px 5px;font-weight:bold;vertical-align: top;"  class="normal_copy_wrapper">&bull;

                                                                                                </td>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px;  padding: 0px 0px 8px 0px;" valign="top" class="normal_copy_wrapper">Topic 2</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal;  line-height: 22px;  padding: 0px 5px 8px 5px;font-weight:bold;vertical-align: top;"  class="normal_copy_wrapper">&bull;

                                                                                                </td>
                                                                                                <td style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px;  padding: 0px;" valign="top" class="normal_copy_wrapper">Topic 3</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- End Bullet List -->

                                                                                <!-- Primary CTA --> 
                                                                                <tr>
                                                                                    <td width="100%" style="padding: 15px 0 0 0; vertical-align: top;">
                                                                                        <?php primaryCTA('222','222px','#0696D7','Primary CTA'); ?> 
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- End Primary CTA -->

                                                                                <!-- Text Link with Pointer --> 
                                                                                <tr>
                                                                                    <td width="100%" style="padding: 15px 0 0 0; vertical-align: top;">
                                                                                        <?php secondaryCTA('gray','Secondary CTA'); ?> 
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- End Text Link with Pointer -->
                                                                            </table>                                                                    
                                                                        </td>
                                                                    </tr>
                                                                </table>
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
                            <!-- End [Body_2] - Single column text only --> 

                            <!-- [Body_3] - Two column text only -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse; width: 100%;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="full-width" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse; width: 100%;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="content-td hide-me" style="padding: 0px 32px 42px 32px;" align="left" valign="top">
                                                                            <table class="full-width" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%;">
                                                                                <tr>
                                                                                    <td align="left" style="vertical-align: top;">
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td width="303" style="vertical-align: top; width: 303px;">
                                                                                        <![endif]-->
                                                                                        <!-- Schedule Item -->
                                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="mobile-column" style="border-collapse: collapse; width: 285px;">
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; margin: 0; padding: 0px 0px 7px 0px;" align="left" valign="top">Date</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; padding: 0px 0px 5px 0px;" align="left" valign="top">Day</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item" style="font-size: 14px; vertical-align: top; text-align: left; color: #0071BB; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 20px; padding: 0px 0px 10px 0px;" align="left" valign="top">9:00 - 1:30</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    Title of Session
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: nornmal; line-height: 22px; padding: 0px 5px 26px 0px;" align="left" valign="top">Session description consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item" style="font-size: 14px;vertical-align: top; text-align: left; color: #0071BB; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 20px; margin: 0; padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    1:30 - 3:30
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item_last" style="font-size: 15px;vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; margin: 0; padding: 0px 0px 26px 0px;" align="left" valign="top">
                                                                                                    Title of Session
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item" style="font-size: 14px;vertical-align: top; text-align: left; color: #0071BB; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 20px; margin: 0; padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    3:30 - 5:30
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item_last" style="font-size: 15px;vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; margin: 0; padding: 0;" align="left" valign="top">
                                                                                                    Title of Session
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                </td>
                                                                                        <![endif]-->
                                                                                        
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                <td width="303" style="vertical-align: top; width: 303px;">
                                                                                        <![endif]-->
                                                                                        <!-- Schedule Item -->
                                                                                        <table align="right" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 285px;">
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; margin: 0; padding: 0px 0px 7px 0px;" align="left" valign="top">Date</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; padding: 0px 0px 5px 0px;" align="left" valign="top">Day</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item" style="font-size: 14px; vertical-align: top; text-align: left; color: #0071BB; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 20px; padding: 0px 0px 10px 0px;" align="left" valign="top">9:00 - 1:30</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    Title of Session
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: nornmal; line-height: 22px; padding: 0px 5px 26px 0px;" align="left" valign="top">Session description consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item" style="font-size: 14px;vertical-align: top; text-align: left; color: #0071BB; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 20px; margin: 0; padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    1:30 - 3:30
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item_last" style="font-size: 15px;vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; margin: 0; padding: 0px 0px 26px 0px;" align="left" valign="top">
                                                                                                    Title of Session
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item" style="font-size: 14px;vertical-align: top; text-align: left; color: #0071BB; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 20px; margin: 0; padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    3:30 - 5:30
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="dates_item_last" style="font-size: 15px;vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; margin: 0; padding: 0;" align="left" valign="top">
                                                                                                    Title of Session
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
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
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
                            <!-- End [Body_3] - Two column text only -->

                            <!-- [Body_4] - Three column text only -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="vertical-align: top;" align="left" valign="top">
                                                    <table class="full-width" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" style="vertical-align: top;" align="left" valign="top">
                                                                <table border="0" cellpadding="0" class="devicewidth" cellspacing="0" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 0px 32px 32px 32px;" align="left" valign="top">
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                            <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td class="mobile-column">
                                                                                        <table border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width:180px;">
                                                                                            <tr>
                                                                                                <td class="content-span3-left" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:24px; padding: 0 0 10px 0;">Date<br />Day</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height:22px; padding: 0;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    </td>
                                                                            <![endif]-->
                                                                            
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->
                                                                            <!-- Start Speaker Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td class="mobile-column">
                                                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width:180px;">
                                                                                            <tr>
                                                                                                <td class="content-span3-left" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:24px; padding: 0 0 10px 0;">Date<br />Day</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height:22px; padding: 0;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Speaker Column -->
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    </td>
                                                                            <![endif]-->
                                                                            
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->    
                                                                            <!-- Start Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="right" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width:180px;">
                                                                                            <tr>
                                                                                                <td class="content-span3-left" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:24px; padding: 0 0 10px 0;">Date<br />Day</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height:22px; padding: 0;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
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
                            <!-- [Body_4] - Three column text only -->

                            <!-- [Body_5] - Single column with image -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <!-- Container -->
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" class="devicewidth" cellspacing="0" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="padding: 0px 32px 32px 32px;" align="left" valign="top">
                                                                            <table class="full-width" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="cellblock" align="left" valign="top">
                                                                                        <!-- Start Speaker Column -->
                                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="222" height="95" /></a>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 15px 0px;" align="left" valign="top">Content Title</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px;" align="left" valign="top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium facere incidunt minima aspernatur eum mollitia saepe praesentium ipsa ex earum nam nisi ut hic expedita asperiores, et reiciendis ratione.</td>
                                                                                            </tr>

                                                                                            <!-- Primary CTA --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 15px 0 0 0; vertical-align: top;">
                                                                                                    <?php primaryCTA('222','222px','#0696D7','Primary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Primary CTA -->

                                                                                            <!-- Text Link with Pointer --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 15px 0 0 0; vertical-align: top;">
                                                                                                    <?php secondaryCTA('gray','Secondary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Text Link with Pointer -->                 
                                                                                        </table>
                                                                                        <!-- End Speaker Column -->
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
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
                            <!-- End [Body_5] - Single column with image -->  

                            <!-- [Body_6] - Two column with images -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <!-- Container -->
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- Speaker Row -->
                                                                    <tr>
                                                                        <td class="show-me" style="padding: 0 32px 0px 32px;" align="left" valign="top">
                                                                            <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td style="vertical-align: top;" align="left" valign="top">
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                        <tr>
                                                                                          <td width="303" style="vertical-align: top; width: 303px;">
                                                                                        <![endif]-->
                                                                                        <!-- Start Column -->
                                                                                        <table class="full-width" align="left" width="303" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 303px;">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 270px;">
                                                                                                        <tr>
                                                                                                            <td style="padding: 0px 0px 10px 0px; vertical-align: top;" align="left" valign="top">
                                                                                                                <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="222" height="95" alt="" border="0" /></a>
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 15px;" align="left" valign="top">Content Title</td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="column-copy" style="font-size: 15px; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px; margin: 0; padding: 0px 0px 10px 0px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                                        </tr>

                                                                                                        <!-- Text Link with Pointer --> 
                                                                                                        <tr>
                                                                                                            <td width="100%" style="padding: 15px 0 32px 0; vertical-align: top;">
                                                                                                                <?php secondaryCTA('blue','Secondary CTA'); ?> 
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <!-- End Text Link with Pointer -->
                                                                                                    </table>           
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        <!-- End Column -->
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                          </td>
                                                                                        <![endif]-->
                                                                                        
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                          <td width="303" style="vertical-align: top; width: 303px;">
                                                                                        <![endif]-->
                                                                                        <!-- Start Column -->
                                                                                        <table class="full-width" align="left" width="303" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 303px;">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table align="right" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 270px;">
                                                                                                        <tr>
                                                                                                            <td style="padding: 0px 0px 10px 0px; vertical-align: top;" align="left" valign="top">
                                                                                                                <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="222" height="95" alt="" border="0" /></a>
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 15px;" align="left" valign="top">Content Title</td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="column-copy" style="font-size: 15px;  border-collapse: collapse !important; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px; margin: 0; padding: 0px 0px 10px 0px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                                        </tr>

                                                                                                        <!-- Text Link with Pointer --> 
                                                                                                        <tr>
                                                                                                            <td width="100%" style="padding: 15px 0 32px 0; vertical-align: top;">
                                                                                                                <?php secondaryCTA('blue','Secondary CTA'); ?> 
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <!-- End Text Link with Pointer -->
                                                                                                    </table>           
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
                                                        
                                                        <!-- Speaker Row -->
                                                        <tr>
                                                            <td class="show-me" style="padding: 0px 32px 0px 32px;" align="left" valign="top">
                                                                <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                    <!-- Line Divider -->
                                                                    <tr>
                                                                        <td class="hideblock" style="mso-line-height-rule:exactly; line-height:32px; border-top:1px solid #666666;" colspan="2">&nbsp;</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td align="left" valign="top">
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                            <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                            <tr>
                                                                              <td width="303" style="vertical-align: top; width: 303px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table class="full-width" align="left" width="303" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 303px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 270px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px; vertical-align: top;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="222" height="95" /></a>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; padding: 10px 0px 15px;" align="left" valign="top">Content Title</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="column-copy" style="font-size: 15px; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal;   line-height: 22px; margin: 0; padding: 0px 0px 10px 0px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>

                                                                                            <!-- Text Link with Pointer --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 15px 0 32px 0; vertical-align: top;">
                                                                                                    <?php secondaryCTA('blue','Secondary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Text Link with Pointer -->
                                                                                        </table>           
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                              </td>
                                                                            <![endif]-->
                                                                            
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                              <td width="303" style="vertical-align: top; width: 303px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table class="full-width" align="left" width="303" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 303px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="right" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 270px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px; vertical-align: top;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="222" height="95" /></a>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; padding: 10px 0px 15px;" align="left" valign="top">Content Title</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="column-copy" style="font-size: 15px; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; margin: 0; padding: 0px 0px 10px 0px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>

                                                                                            <!-- Text Link with Pointer --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 15px 0 32px 0; vertical-align: top;">
                                                                                                    <?php secondaryCTA('blue','Secondary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Text Link with Pointer -->
                                                                                        </table>           
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
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
                                        </table>
                                    </td>
                                </tr>
                                <!-- Spacer -->
                                <tr>
                                    <td height="10" style="mso-line-height-rule:exactly; line-height: 10px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="10" height="10" border="0" style="display: block;" /></td>
                                </tr>
                            </table>
                            <!-- End [Body_6] - Two column with images -->

                            <!-- [Body_7] - Three column with images -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="vertical-align: top;" align="left" valign="top">
                                                    <table class="full-width" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" style="vertical-align: top;" align="left" valign="top">
                                                                <table border="0" cellpadding="0" class="devicewidth" cellspacing="0" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 0px 32px 0px 32px;" align="left" valign="top">
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                            <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width:180px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/180x77" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="180" height="77" /></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 15px 0px;" align="left" valign="top">Content Title</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="column-copy" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px; padding: 0px 0px 10px 0px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td style="padding: 15px 0px 32px 0px; vertical-align: top;">
                                                                                                    <?php secondaryCTA('blue','Secondary CTA'); ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    </td>
                                                                            <![endif]-->
                                                                            
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width:180px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/180x77" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="180" height="77" /></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 15px 0px;" align="left" valign="top">Content Title</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="column-copy" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px; padding: 0px 0px 10px 0px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td style="padding: 15px 0px 32px 0px; vertical-align: top;">
                                                                                                    <?php secondaryCTA('blue','Secondary CTA'); ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    </td>
                                                                            <![endif]-->
                                                                            
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->    
                                                                            <!-- Start Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="right" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width:180px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/180x77" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="180" height="77" /></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height: 20px; padding: 10px 0px 15px 0px;" align="left" valign="top">Content Title</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="column-copy" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; padding: 0px 0px 10px 0px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td style="padding: 15px 0px 32px 0px; vertical-align: top;">
                                                                                                    <?php secondaryCTA('blue','Secondary CTA'); ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
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
                            <!-- End [Body_7] - Three column with images -->

                            <!-- [Body_8] - One column with image -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <!-- Container -->
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" class="devicewidth" cellspacing="0" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="padding: 0px 32px 32px 32px;" align="left" valign="top">
                                                                            <table class="full-width" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="cellblock" align="left" valign="top">
                                                                                        <!-- Start Speaker Column -->
                                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="222" height="95" /></a>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 8px 0px;" align="left" valign="top">Name of Speaker</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:20px; padding: 0px 0px 22px 0px;" align="left" valign="top">Title of Speaker
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px;" align="left" valign="top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium facere incidunt minima aspernatur eum mollitia saepe praesentium ipsa ex earum nam nisi ut hic expedita asperiores, et reiciendis ratione.</td>
                                                                                            </tr>

                                                                                            <!-- Primary CTA --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 15px 0 0 0; vertical-align: top;">
                                                                                                    <?php primaryCTA('222','222px','#0696D7','Primary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Primary CTA -->

                                                                                            <!-- Text Link with Pointer --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 15px 0 0 0; vertical-align: top;">
                                                                                                    <?php secondaryCTA('gray','Secondary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Text Link with Pointer -->
                                                                                        </table>
                                                                                        <!-- End Speaker Column -->
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
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
                            <!-- End [Body_8] - One column with image -->

                            <!-- [Body_9] - Two column with images -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <!-- Container -->
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>

                                                                    <!-- Speaker Row -->
                                                                    <tr>
                                                                        <td class="show-me" style="padding: 0 32px 32px 32px;" align="left" valign="top">
                                                                            <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td style="vertical-align: top;" align="left" valign="top">
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                        <tr>
                                                                                          <td width="303" style="vertical-align: top; width: 303px;">
                                                                                        <![endif]-->
                                                                                        <!-- Start Column -->
                                                                                        <table class="full-width" align="left" width="303" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 303px;">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 270px;">
                                                                                                        <tr>
                                                                                                            <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                                <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="222" height="95" /></a>
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 8px 0px;" align="left" valign="top">Name of Speaker</td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="title-speakers-td-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:20px; padding: 0px 0px 22px 0px;" align="left" valign="top">Title of Speaker
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="normal_copy_wrapper 32pad-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                                        </tr>
                                                                                                    </table>           
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        <!-- End Column -->
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                          </td>
                                                                                        <![endif]-->
                                                                                        
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                          <td width="303" style="vertical-align: top; width: 303px;">
                                                                                        <![endif]-->
                                                                                        <!-- Start Column -->
                                                                                        <table class="full-width" align="left" width="303" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 303px;">
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <table align="right" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 270px;">
                                                                                                        <tr>
                                                                                                            <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                                <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="222" height="95" /></a>
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 8px 0px;" align="left" valign="top">Name of Speaker</td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="title-speakers-td-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:20px; padding: 0px 0px 22px 0px;" align="left" valign="top">Title of Speaker
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td class="normal_copy_wrapper 32pad-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                                        </tr>
                                                                                                    </table>           
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
                                                           
                                                        <!-- Speaker Row -->
                                                        <tr>
                                                            <td class="show-me" style="padding: 0px 32px 0px 32px;" align="left" valign="top">
                                                                <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                    <!-- Line Divider -->
                                                                    <tr>
                                                                        <td class="hideblock" style="mso-line-height-rule:exactly; line-height:32px; border-top:1px solid #666666;" colspan="2">&nbsp;</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="no-padding" style="padding: 0 0px 32px 0px; vertical-align: top;" align="left" valign="top">
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                            <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                            <tr>
                                                                              <td width="303" style="vertical-align: top; width: 303px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table class="full-width" align="left" width="303" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 303px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 270px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="222" height="95" /></a>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 8px 0px;" align="left" valign="top">Name of Speaker</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:20px; padding: 0px 0px 22px 0px;" align="left" valign="top">Title of Speaker
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper 32pad-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>
                                                                                        </table>           
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                              </td>
                                                                            <![endif]-->
                                                                            
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                              <td width="303" style="vertical-align: top; width: 303px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table class="full-width" align="left" width="303" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 303px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="right" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 270px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/222x95" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="222" height="95" /></a>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 8px 0px;" align="left" valign="top">Name of Speaker</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="title-speakers-td-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:20px; padding: 0px 0px 22px 0px;" align="left" valign="top">Title of Speaker
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper 32pad-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px;" align="left" valign="top">Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>
                                                                                        </table>           
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
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
                                        </table>
                                    </td>
                                </tr>
                                <!-- Spacer -->
                                <tr>
                                    <td height="10" style="mso-line-height-rule:exactly; line-height: 10px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="10" height="10" border="0" style="display: block;" /></td>
                                </tr>
                            </table>
                            <!-- End [Body_9] - Two column with images -->

                            <!-- [Body_10] - Three column with images -->
                            <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="vertical-align: top;" align="left" valign="top">
                                                    <table class="full-width" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" style="vertical-align: top;" align="left" valign="top">
                                                                <table border="0" cellpadding="0" class="devicewidth" cellspacing="0" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="padding: 0px 32px 32px 32px;" align="left" valign="top">
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                            <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width:180px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/180x77" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="180" height="77" /></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 8px 0px;" align="left" valign="top">Name of Speaker</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:20px; padding: 0px 0px 22px 0px;" align="left" valign="top">Title of Speaker
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper 32pad-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px; padding: 0px;" align="left" valign="top">
                                                                                                    Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    </td>
                                                                            <![endif]-->
                                                                            
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->
                                                                            <!-- Start Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width:180px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/180x77" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="180" height="77" /></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 8px 0px;" align="left" valign="top">Name of Speaker</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:20px; padding: 0px 0px 22px 0px;" align="left" valign="top">Title of Speaker
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper 32pad-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px; padding: 0px;" align="left" valign="top">
                                                                                                    Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    </td>
                                                                            <![endif]-->
                                                                            
                                                                            <!--[if (gte mso 9)|(IE)]>
                                                                                    <td width="202" style="vertical-align: top; width: 202px;">
                                                                            <![endif]-->    
                                                                            <!-- Start Column -->
                                                                            <table align="left" class="full-width" width="202" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 202px;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table align="right" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 180px;">
                                                                                            <tr>
                                                                                                <td style="padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <a href="" target="_blank"><img class="col-image" src="http://placehold.it/180x77" class="image-fix" style="outline: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="180" height="77" /></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-top" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; line-height:20px; padding: 10px 0px 8px 0px;" align="left" valign="top">Name of Speaker</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="title-speakers-td-bottom" style="font-size: 15px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:20px; padding: 0px 0px 22px 0px;" align="left" valign="top">Title of Speaker
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:22px; padding: 0px;" align="left" valign="top">
                                                                                                    Amet conse ctetu er adipiscing emet conse ctetu er adipiscing adipiscing elilit.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <!-- End Column -->
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
                            <!-- End [Body_10] - Three column with images -->
                                                        
                            <!-- [Body_11] - Two column with image on right -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffffl" align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="vertical-align: top; padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="pad-032" style="padding: 0 32px 30px 32px;" align="left" valign="top">
                                                                            <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td style="vertical-align: top;" align="left" valign="top">
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td width="290" style="vertical-align: top; width: 290px;">
                                                                                        <![endif]-->
                                                                                        <!-- Column for Location Text -->
                                                                                        <table align="left" width="290" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 290px;">
                                                                                            <tr>
                                                                                                <td class="subhead_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; padding: 0px 0px 10px 0px;" align="left" valign="top"><strong style="color:<?php echo $accentColor; ?>;">Location:</strong> Lorem Ipsum</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="subhead_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 21px; padding: 0px 0px 10px 0px;" align="left" valign="top"><strong style="color: <?php echo $accentColor; ?>;">Address 1:</strong> 111 Lorem Ipsum St.,<br />Lorem Ipsum, AB, 11111</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="subhead_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <strong style="color:<?php echo $accentColor; ?>">Address 2:</strong> Lorem Ipsum</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; padding: 0px 0px 10px 0px;" align="left" valign="top">Session description consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</td>
                                                                                            </tr>

                                                                                            <!-- Text Link with Pointer --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 10px 0 15px 0; vertical-align: top;">
                                                                                                    <?php secondaryCTA('blue','Secondary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Text Link with Pointer -->
                                                                                        </table>
                                                                                        <!-- End Column for Location Text -->
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                </td>
                                                                                        <![endif]-->
                                                                                        
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                <td width="292" style="vertical-align: top; width: 292px;">
                                                                                        <![endif]-->
                                                                                        <!-- Column for Map -->
                                                                                        <table align="right" width="292" border="0" cellpadding="0" cellspacing="0" class="full-width" align="left" style="border-collapse: collapse; width: 292px;">
                                                                                            <tr>
                                                                                                <td align="left" style="vertical-align: top; padding: 0px 0px 10px 0px;" valign="top">
                                                                                                    <!-- Map Image -->
                                                                                                    <a href="" target="_blank"><img src="http://placehold.it/292x209" class="location-two-column image-fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="292" /></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td align="center" style="font-size: 10px; vertical-align: top; text-align: left; color:#666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-style: italic; line-height:15px;" valign="top">Caption: Lorem ipsum dolor sit amet, consectuer adipiscing elit, sed diam nonummy nibh euismod tinnt ut laoreet dolore.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        <!-- End Column for Map -->
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
                            <!-- End [Body_11] - Two column with image on right -->

                            <!-- [Body_12] - Two column with image on left -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffffl" align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td class="content-td" colspan="2" style="vertical-align: top; padding: 28px 32px 22px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" class="content-title-icon" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td class="title-text" style="font-size: 24px; vertical-align: top; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height:24px; padding: 2px 0px 10px 0px;" align="left" valign="top">Section Headline</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="pad-032" style="padding: 0 32px 30px 32px;" align="left" valign="top">
                                                                            <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td style="vertical-align: top;" align="left" valign="top">
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td width="292" style="vertical-align: top; width: 292px;">
                                                                                        <![endif]-->
                                                                                        <!-- Column for Map -->
                                                                                        <table align="left" width="292" border="0" cellpadding="0" cellspacing="0" class="full-width" align="left" style="border-collapse: collapse; width: 292px;">
                                                                                            <tr>
                                                                                                <td align="left" style="vertical-align: top; padding: 0px 0px 10px 0px;" valign="top">
                                                                                                    <!-- Map Image -->
                                                                                                    <a href="" target="_blank"><img src="http://placehold.it/292x209" class="location-two-column-l image-fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="292" /></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="image-caption-img-l" align="center" style="font-size: 10px; vertical-align: top; text-align: left; color:#666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-style: italic; line-height:15px;" valign="top">Caption: Lorem ipsum dolor sit amet, consectuer adipiscing elit, sed diam nonummy nibh euismod tinnt ut laoreet dolore.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        <!-- End Column for Map -->
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                </td>
                                                                                        <![endif]-->
                                                                                        
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                <td width="290" style="vertical-align: top; width: 290px;">
                                                                                        <![endif]-->
                                                                                        <!-- Column for Location Text -->
                                                                                        <table align="right" width="290" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 290px;">
                                                                                            <tr>
                                                                                                <td class="subhead_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; padding: 0px 0px 10px 0px;" align="left" valign="top"><strong style="color:<?php echo $accentColor; ?>;">Location:</strong> Lorem Ipsum</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="subhead_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; padding: 0px 0px 10px 0px;" align="left" valign="top"><strong style="color: <?php echo $accentColor; ?>;">Address 1:</strong> 111 Lorem Ipsum St.,<br />Lorem Ipsum, AB, 11111</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="subhead_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; padding: 0px 0px 10px 0px;" align="left" valign="top">
                                                                                                    <strong style="color:<?php echo $accentColor; ?>">Address 2:</strong> Lorem Ipsum</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; vertical-align: top; text-align: left; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; line-height: 22px; padding: 0px 0px 10px 0px;" align="left" valign="top">Session description consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</td>
                                                                                            </tr>

                                                                                            <!-- Text Link with Pointer --> 
                                                                                            <tr>
                                                                                                <td width="100%" style="padding: 10px 0 0 0; vertical-align: top;">
                                                                                                    <?php secondaryCTA('blue','Secondary CTA'); ?> 
                                                                                                </td>
                                                                                            </tr>
                                                                                            <!-- End Text Link with Pointer -->
                                                                                        </table>
                                                                                        <!-- End Column for Location Text -->
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
                            <!-- End [Body_12] - Two column with image on left -->

                            <!-- [Body_13] - CTA button -->
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="devicewidth" align="center" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center" valign="top" class="devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="full-width" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                        <tr>
                                                            <td class="full-width" align="left" valign="top">
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td style="width: 606px; padding: 24px 32px 24px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" align="left" style="width: 100% !important; border-collapse: collapse;">
                                                                                <!-- Start Mobile Module Header -->
                                                                                <!--[if !mso]><!-->
                                                                                <tr class="hide-element" style="display: none; width: 0; max-height: 0; overflow: hidden;">
                                                                                    <td>
                                                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                                                            <tr class="message" height="0" style="display: none; font-size: 0; max-height: 0; line-height: 0; mso-hide: all; padding: 4px 0px 0px 0px;">
                                                                                                <td class="message" style="display: none; font-size: 0; max-height: 0; line-height: 0; mso-hide: all; color: #FFFFFF;" align="left" valign="top">Lorem ipsum dolor sit amet.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <!--<![endif]-->
                                                                                <!-- End Mobile Module Header -->

                                                                                <tr>
                                                                                    <td class="container-td" style="width: 222px;" align="left" valign="top">
                                                                                        <!-- Primary CTA --> 
                                                                                        <?php primaryCTA('222','222px','#0696D7','Primary CTA'); ?>
                                                                                    </td>

                                                                                    <td class="hideblock" style="padding: 0px 0px 0px 16px; text-align:left;" >
                                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="full-width" align="left" style="border-collapse: collapse">
                                                                                            <tr>
                                                                                                <td class="content-span2-right" style="font-size: 15px; text-align: left; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, sans-serif; font-weight: bold; height: 41px; line-height: 14px; vertical-align: middle;" align="left" >Lorem ipsum dolor sit amet.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
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
                            <!-- End [Body_13] - CTA button -->


                            <!-- [Body_14] - Two column with image on right -->
                            <table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; width: 100%;">
                                <tr>
                                    <td align="center" valign="top" class="center devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="row no-padding" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%;">
                                                        <tr>
                                                            <td align="left" style="vertical-align: top;">
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                    <tr>
                                                                        <td width="380" style="vertical-align: top; width: 380px;">
                                                                <![endif]-->
                                                                <!-- Start Text Column -->
                                                                <table align="left" width="380" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 380px;">
                                                                    <tr>
                                                                        <td class="content-td" style="padding: 32px 32px 0px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td style="font-size: 18px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: normal; text-align: left; line-height: 18px; padding: 0px 0px 15px 0px;" align="left">Section Headline</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 0;" align="left">Itaque earum rerum hic tenetur a sapiente delectus, ut aut ut aut reiciendis.Itaque earum sapiente delectus.</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td style="padding: 15px 0 0 0; vertical-align: top;">
                                                                                        <?php secondaryCTA('blue','Secondary CTA'); ?>
                                                                                    </td>
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
                                                                        <td width="290" style="vertical-align: top; width: 290px;">
                                                                <![endif]-->
                                                                <!-- Start Image Column -->
                                                                <table align="left" width="290" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 290px;">
                                                                    <tr>
                                                                        <td class="pad-032" align="left" valign="top">
                                                                            <a href="" target="_blank"><img class="image-centered" src="http://placehold.it/290x190" class="image-fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="290" height="190" alt="" /></a>
                                                                        </td>
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
                            <!-- End [Body_14] - Two column with image on right -->

                            <!-- [Body_15] - Two column with image on left -->
                            <table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; width: 100%;">
                                <tr>
                                    <td align="center" valign="top" class="center devicewidth" style="min-width: 670px; width: 670px;">
                                        <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px;" align="center">
                                            <tr>
                                                <td bgcolor="#ffffff" style="background-color: #ffffff;" align="left" valign="top">
                                                    <table class="row no-padding" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%;">
                                                        <tr>
                                                            <td align="left" style="vertical-align: top;">
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                    <tr>
                                                                        <td width="290" style="vertical-align: top; width: 290px;">
                                                                <![endif]-->
                                                                <!-- Start Image Column -->
                                                                <table align="left" width="290" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 290px;">
                                                                    <tr>
                                                                        <td class="pad-320" align="left" valign="top">
                                                                            <a href="" target="_blank"><img class="image-centered" src="http://placehold.it/290x190" class="image-fix" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; max-width: 100%; display: block;" width="290" height="190" alt="" /></a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- End Image Column -->
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                        </td>
                                                                <![endif]-->
                                                                
                                                                <!--[if (gte mso 9)|(IE)]>
                                                                        <td width="380" style="vertical-align: top; width: 380px;">
                                                                <![endif]-->
                                                                <!-- Start Text Column -->
                                                                <table align="left" width="380" border="0" cellpadding="0" cellspacing="0" class="full-width" style="border-collapse: collapse; width: 380px;">
                                                                    <tr>
                                                                        <td class="pad-253232" style="padding: 32px 32px 0px 32px;" align="left" valign="top">
                                                                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td style="font-size: 18px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: normal; text-align: left; line-height: 18px; padding: 0px 0px 15px 0px;" align="left">Section Headline</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 0;" align="left">Itaque earum rerum hic tenetur a sapiente delectus, ut aut ut aut reiciendis.Itaque earum sapiente delectus.</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td style="padding: 15px 0 0 0; vertical-align: top;">
                                                                                        <?php secondaryCTA('blue','Secondary CTA'); ?>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- End Text Column -->
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
                                    </td>
                                </tr>
                                <!-- Spacer -->
                                <tr>
                                    <td height="10" style="mso-line-height-rule:exactly; line-height: 10px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="10" height="10" border="0" style="display: block;" /></td>
                                </tr>
                            </table>
                            <!-- End [Body_15] - Two column with image on left -->

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
                                                                <table border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="min-width: 670px; width: 670px; border-collapse: collapse;">
                                                                    <tr>
                                                                        <td style="padding: 24px 32px 24px 32px;" align="left" valign="top">
                                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse: collapse;">
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td style="font-size: 18px; color: <?php echo $accentColor; ?>; font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; font-weight: normal; text-align: left; line-height: 18px; padding:0px 0px 15px 0px" align="left">Section Headline</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td class="normal_copy_wrapper" style="font-size: 15px; color: #666666; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; line-height: 22px; padding: 0px 0px 25px 0px;" align="left">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitati saepe eveniet ut et voluptates repudia ndae sint et molestiae maiores.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                        <table align="left" width="459" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; width: 459px;">
                                                                                            <tr>
                                                                                                <td style="vertical-align: top; width: 222px;">
                                                                                        <![endif]-->
                                                                                        <!-- Primary CTA --> 
                                                                                        <table align="left" width="222" border="0" cellpadding="0" cellspacing="0" class="medium-button" style="border-collapse: collapse; width: 222px;">
                                                                                            <tr>
                                                                                                <td height="22" width="100%" style="background-color: <?php echo $brandColor; ?>; height: 22px; padding: 8px 15px; vertical-align: top;">
                                                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                                        <tr>
                                                                                                            <td class="button-text" style="font-family: arial, helvetica, sans-serif; font-size: 16px; line-height: 22px; text-transform: uppercase; width: 100%;"><a href="#" style="color: #ffffff; display: inline-block; text-decoration: none; width: 100%;" target="_blank">Primary CTA</a></td>
                                                                                                            <td style="width: 10px;">
                                                                                                                <a href="" target="_blank"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-button-arrow-icon-10x16.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="10" height="16" alt="" border="0" /></a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                </td>
                                                                                        <![endif]-->

                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                <td style="width: 15px;">
                                                                                        <![endif]-->
                                                                                        <table class="full-width" align="left" width="15" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                            <tr>
                                                                                                <td width="15" height="15" style="mso-line-height-rule:exactly; line-height: 10px;"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-spacer.gif" width="15" height="15" border="0" style="display: block;" /></td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                </td>
                                                                                        <![endif]-->

                                                                                        <!--[if (gte mso 9)|(IE)]>
                                                                                                <td style="width: 222px;">
                                                                                        <![endif]-->
                                                                                        <!-- Secondary CTA -->
                                                                                        <table align="left" width="222" border="0" cellpadding="0" cellspacing="0" class="medium-button" style="border-collapse: collapse; width: 222px;">
                                                                                            <tr>
                                                                                                <td height="22" width="100%" style="background-color: #6A6A6A; height: 22px; padding: 8px 15px; vertical-align: top;">
                                                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                                                                                        <tr>
                                                                                                            <td class="button-text" style="font-family: arial, helvetica, sans-serif; font-size: 16px; line-height: 22px; text-transform: uppercase; width: 100%;"><a href="#" style="color: #ffffff; display: inline-block; text-decoration: none; width: 100%;" target="_blank">Secondary CTA</a></td>
                                                                                                            <td style="width: 10px;">
                                                                                                                <a href="" target="_blank"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-button-arrow-icon-10x16.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="10" height="16" alt="" border="0" /></a>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                    </table>
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
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
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


                            <?php include 'includes/footer.inc.php'; ?>

                        </td>
                    </tr>
                </table>
                 <!-- End Main Table Container - 670px -->     
            </td>
        </tr>
    </table>
    <!-- End Body Table - 100% -->    
</body>

</html><?php file_put_contents( 'output/' . $filename, ob_get_contents() ); ?>

<!-- LiveReload -->
<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script>