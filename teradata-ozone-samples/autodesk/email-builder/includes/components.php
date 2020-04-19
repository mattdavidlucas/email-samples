<?php

// Components

// Primary CTA
function primaryCTA($width,$pixelWidth,$color,$text) {
	echo 
'<table align="left" width="' . $width . '" border="0" cellpadding="0" cellspacing="0" class="medium-button" style="border-collapse: collapse; width: ' . $pixelWidth . ';">
    <tr>
        <td height="22" width="100%" style="background-color: ' . $color . '; height: 22px; padding: 8px 15px; vertical-align: top;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
                <tr>
                    <td class="button-text" style="font-family: arial, helvetica, sans-serif; font-size: 16px; mso-line-height-rule: exactly; line-height: 22px; text-transform: uppercase; width: 100%;"><a href="#" style="color: #ffffff; display: inline-block; text-decoration: none; width: 100%;" target="_blank">' . $text . '</a></td>
                    <td style="width: 10px;"><a href="" target="_blank"><img src="https://pages.autodesk.com/rs/918-FOD-433/images/autodesk-wireframes-button-arrow-icon-10x16.png" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="10" height="16" alt="" border="0" /></a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>'
	;
}

// Secondary CTA
function secondaryCTA($color,$text) {
    if ($color === 'gray') {
        $color = 'https://pages.autodesk.com/rs/918-FOD-433/images/icon-cta-circle-40x40-gray.png';
    }

    if ($color === 'blue') {
        $color = 'https://pages.autodesk.com/rs/918-FOD-433/images/icon-cta-circle-40x40-corp-blue.png';
    }
	echo 
'<table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
     <tr>
         <!-- Pointer -->
         <td width="30" style="padding-right: 10px; width: 30px;">
             <a href="" target="_blank"><img src="' . $color . '" style="border: none; display: block; -ms-interpolation-mode: bicubic; outline: none;" width="20" height="20" alt="" border="0" /></a>
         </td>

         <!-- Text Link -->
         <td width="100%" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; font-weight: normal; text-align: left; width: 100%">
             <a href="" target="_blank" style="color: #666666; text-decoration: underline;">' . $text . '</a>
         </td>
     </tr>
 </table>'
	;
}


