<?php
    // Function to create a new table
    function make_download_table($summary, $tabletop) {
        echo '  <table cols="3" width="90%" bgcolor="#dddddd" border="0" cellpadding="1" cellspacing="1" summary="'.$summary.'">'."\n";
        echo '    <tr><td colspan="3" bgcolor="#cccccc"><div class="tabletop">'.$tabletop.'</div></td></tr>'."\n";
        echo '    <tr bgcolor="#222266">'."\n";
        echo '      <!-- Header row -->'."\n";
        echo '      <td width="150"><center><font size="2" face="helvetica" color="#dddddd"><b>Archive</b></font></center></td>'."\n";
        echo '      <td width="100"><center><font size="2" face="helvetica" color="#dddddd"><b>Size/Date</b></font></center></td>'."\n";
        echo '      <td width="*"><center><font size="2" face="helvetica" color="#dddddd"><b>Details</b></font></center></td>'."\n";
        echo '    </tr>'."\n";
    } // END -- function make_download_table

    // Function to output the formatted results of a line
    function format_line($filename, $description, $filesize, $filedate, $text) {
        $cell_colour *= -1;
        if( $cell_colour == 1 ) {
            $cell_colour_to_use = 'aaaaaa';
        } else {
            $cell_colour_to_use = 'bbbbbb';
        }

        echo '    <tr bgcolor="#'.$cell_colour_to_use.'">'."\n";
        echo '      <td align="center" valign="top"><div class="cellarchive"><a href="'.$filename.'">'.$description.'</a></div</td>'."\n";
        echo '      <td align="center" valign="top"><div class="cellsize">'.$filesize.'<br>'.$filedate.'</div></td>'."\n";
        echo '      <td><div class="cell">'.$text.'</div></td>'."\n";
        echo '    </tr>'."\n";
   } // END -- function format_line
?>