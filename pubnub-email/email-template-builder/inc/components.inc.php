<?php 

$primaryCTABgColor   = $primary['static'];
$secondaryCTABgColor = $secondary['static'];

// Dark CTA
function darkCTA( $link, $text ) {
	return '<tr>
              <td>
                <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                  <tr>
                    <td>
                  <!--[if mso]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="' . $link . $GLOBALS['UTMParams'] . '" style="height:40px;v-text-anchor:middle;width:250px;" stroke="f" fillcolor="' . $GLOBALS['primaryCTABgColor'] . '">
                    <w:anchorlock/>
                    <center>
                  <![endif]-->
                      <a class="cta-primary" href="' . $link . $GLOBALS['UTMParams'] . '" style="background-color:' . $GLOBALS['primaryCTABgColor'] . '; color: #ffffff; display: inline-block; font-family: ' . $GLOBALS['bodyFont'] . '; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 250px;" target="_blank">' . $text . '&nbsp;&nbsp;&rarr;</a>
                  <!--[if mso]>
                    </center>
                  </v:rect>
                  <![endif]-->
                    </td>
                  </tr>
                </table>
              </td>
            </tr>';
}

// Light CTA
function lightCTA( $link, $text ) {
	return '<tr>
              <td>
                <table align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
                  <tr>
                    <td>
                  <!--[if mso]>
                  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="' . $link . $GLOBALS['UTMParams'] . '" style="height:40px;v-text-anchor:middle;width:250px;" stroke="f" fillcolor="' . $GLOBALS['secondaryCTABgColor'] . '">
                    <w:anchorlock/>
                    <center>
                  <![endif]-->
                      <a href="' . $link . $GLOBALS['UTMParams'] . '" style="background-color:' . $GLOBALS['secondaryCTABgColor'] . '; color: #ffffff; display: inline-block; font-family: ' . $GLOBALS['bodyFont'] . '; font-size: 16px; line-height: 40px; text-align: center; text-decoration: none; width: 250px;" target="_blank">' . $text . '&nbsp;&nbsp;&rarr;</a>
                  <!--[if mso]>
                    </center>
                  </v:rect>
                  <![endif]-->
                    </td>
                  </tr>
                </table>
              </td>
            </tr>';
}

// Bullet List`
function bulletList() {
  $numargs = func_num_args();
  $args = func_get_args();

  for ( $i = 0; $i < $numargs; $i++ ) { 
    if ( $i === 0 ) {
      echo '<table align="center" width="90%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; margin: 0 auto;">
              <tr>
                <td width="12" align="center" valign="top" style="color: ' . $GLOBALS['fontColor'] . '; font-family: ' . $GLOBALS['bodyFont'] . '; font-size:16px; line-height:24px;padding-left: 3px; padding-right: 3px; width: 12px;">&bull;</td>
            
                <td align="left" valign="top" style="color: ' . $GLOBALS['fontColor'] . '; font-family: ' . $GLOBALS['bodyFont'] . '; font-size:16px; line-height: 22px; padding-bottom: 10px;">' . $args[$i] . '</td>
              </tr>';
    }

    elseif ( $i === ($numargs - 1) ) {
      echo '<tr>
              <td width="12" align="center" valign="top" style="color: ' . $GLOBALS['fontColor'] . '; font-family: ' . $GLOBALS['bodyFont'] . '; font-size:16px; line-height:24px;padding-left: 3px; padding-right: 3px; width: 12px;">&bull;</td>
          
              <td align="left" valign="top" style="color: ' . $GLOBALS['fontColor'] . '; font-family: ' . $GLOBALS['bodyFont'] . '; font-size:16px; line-height: 22px; padding-bottom: 10px;">' . $args[$i] . '</td>
            </tr>
          </table>';
    }

    else {
      echo '<tr>
              <td width="12" align="center" valign="top" style="color: ' . $GLOBALS['fontColor'] . '; font-family: ' . $GLOBALS['bodyFont'] . '; font-size:16px; line-height:24px;padding-left: 3px; padding-right: 3px; width: 12px;">&bull;</td>
          
              <td align="left" valign="top" style="color: ' . $GLOBALS['fontColor'] . '; font-family: ' . $GLOBALS['bodyFont'] . '; font-size:16px; line-height: 22px; padding-bottom: 10px;">' . $args[$i] . '</td>
            </tr>';
    }
  }
}

?>