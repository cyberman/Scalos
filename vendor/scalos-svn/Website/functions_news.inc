<?php
    // Function to read the file in and output the formatted results
    function read_news_table_file($filename) {
        // Set up the variables
        $cell_colour = -1;
        $count = 0;

        // Open the file
        $fp = fopen('tables/'.$filename, 'r');

        // Read the lines and process them
        while( !feof ($fp) ) {
            $cell_colour *= -1;

            if( $cell_colour == 1 ) {
                $cell_colour_to_use = 'aaaaaa';
            } else {
                $cell_colour_to_use = 'bbbbbb';
            }

            echo '    <tr bgcolor="#'.$cell_colour_to_use.'">';

            // Date
            $buffer = fgets($fp);
            echo '<td align="center" valign="middle"><div class="cellsize">'.$buffer.'</div></td>'."\n";

            // Determine which graphic to display
            $buffer = fgets($fp);
            $buffer = substr($buffer, 0, strlen($buffer) - 1);
            switch( $buffer ) {
                case "bugfixes":
                    $width = 46;
                    break;
                case "modules":
                    $width = 43;
                    break;
                case "press":
                    $width = 31;
                    break;
                case "releases":
                    $width = 49;
                    break;
                case "status":
                    $width = 37;
                    break;
                case "support":
                    $width = 43;
                    break;
                case "website":
                    $width = 42;
                    break;
                default:
                    $width = 37;
            }

            echo '      <td align="center" valign="middle"><img src="gfx/misc/news_'.$buffer.'.gif" width="'.$width.'" height="10" alt="'.ucfirst($buffer).'"></td>'."\n";

            // Details
            $buffer = fgets($fp);
            echo '      <td><p>'.$buffer.'</td></p>'."\n".'    </tr>'."\n";

            // 'Back to top'
            $count++;
            if( $count == 10 ) {
                echo '  <tr bgcolor="#dddddd"><td colspan="3"><div align="center"><a href="#top"><img src="gfx/backtotop.gif" width="90" height="10" border="0" alt=""></a></div></td></tr>'."\n";
                $count = 0;
            }
        }

        // Close the file handle
        fclose($fp);

   } // END -- function read_news_table_file
?>
