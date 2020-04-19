<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
 xmlns:v="urn:schemas-microsoft-com:vml"
 xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php echo $emailTitle; ?></title>

<style type="text/css">
<?php 

$css = file_get_contents('http://client-projects:8888/autodesk/2016/A-Master-Email-Template/01-Email/css/styles.css');
echo $css;

?>
</style>

<!--[if gte mso 9]>
    <style type="text/css">
        a.underline {
         text-decoration: underline !important;   
        }
    </style>
<![endif]-->

<!--[if gte mso 9]><xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml><![endif]-->

</head>

<body bgcolor="<?php echo $backgroundColor; ?>" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" mobile="fix">
    <!-- Begin Body Table - 100% -->
    <table width="100%" bgcolor="<?php echo $backgroundColor; ?>" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; background-color: <?php echo $backgroundColor; ?>;">
        <tr>
            <td style="vertical-align: top;">

                <!-- Main Table Container - 670px -->
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidth" style="border-collapse: collapse; margin: 0 auto; min-width: 670px; width: 670px;">
                    <tr>
                        <td style="padding-top: 20px; vertical-align: top;" align="left" valign="top">

                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                <!-- Preheader Text - Fill As Needed, Leave Blank if Not Needed -->
                                <tr>
                                    <td style="color: <?php echo $backgroundColor; ?>; font-size: 0px;"></td>
                                </tr>
                                <!-- End Preheader Text -->
                                <tr>
                                    <td class="preheader-container" style="font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; color: #666666; font-size: 11px; padding: 0 0 5px 0; text-align: left;">[Option to summarize primary CTA and build on the subject line]</td>
                                </tr>

                                <tr>
                                    <td class="view-web-container" style="font-family: Arial, Helvetica, 'Lucida Grande', sans-serif; color: #666666; font-size: 11px; padding: 0 0 15px; text-align: left;"><a href="{{system.viewAsWebpageLink}}" style="color: #666666;" target="_blank">Click here</a> to view this email in your web browser.</td>
                                </tr>
                                
                                <tr>
                                    <td style="background-color: #FFFFFF;">
                                        <!-- [Banner_0] - Banner with Autodesk logo -->
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                                            <tr>
                                                <td class="adsk-logo_container" style="padding: 5px 0 5px 27px;">
                                                    <!-- Autodesk Logo -->
                                                    <img class="adsk-logo_image" src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-logo-222x75.jpg" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="110" height="38" alt="Autodesk" border="0" />
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End [Banner_0] - Banner with Autodesk logo -->
                                    </td>
                                </tr>
                            </table>