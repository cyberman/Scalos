<?php
    // Function to read the file in and output the formatted results
    function read_table_file($filename) {
        // Set up the variables
        $cell_colour = -1;

        // Open the file
        $fp = fopen('tables/'.$filename, 'r');

        // Read the lines and process them
        $header = false;
        while( !feof ($fp) ) {

            $buffer = fgets($fp);
            if( $header == true ) {
                echo '    <tr bgcolor="#bbbbcf"><td><div class="cellbold"><b>'.substr($buffer, 0, strlen($buffer) - 1).'</b></div></td></tr>'."\n";
                $header = false;
            }
            if( $buffer == '' ) {
                $header = true;
            } else {
                $cell_colour *= -1;
                if( $cell_colour == 1 ) {
                    $cell_colour_to_use = 'aaaaaa';
                } else {
                    $cell_colour_to_use = 'bbbbbb';
                }
                echo '    <tr bgcolor="#'.$cell_colour_to_use.'"><td><div class="cell">'.substr($buffer, 0, strlen($buffer) - 1).'</div></td></tr>'."\n";
                $header = false;
            }
        }

        // Close the file handle
        fclose($fp);

   } // END -- function read_table_file

    // Function to start a new table
    function new_table($title) {
        echo '  <table cols="1" width="90%" bgcolor="#dddddd" border="0" cellpadding="1" cellspacing="1" summary="Version history">'."\n";
        echo '    <tr bgcolor="#222266">'."\n";
        echo '      <!-- Header row -->'."\n";
        echo '      <td width="90%"><center><font size="2" face="helvetica" color="#dddddd"><b>--- '.$title.' ---</b></font></center></td>'."\n";
        echo '    </tr>'."\n";
    }  // END -- function new_table

    // Function to read the minor table file in and output the formatted results
    function read_minor_table_file($filename) {
        // Set up the variables
        $cell_colour = -1;

        // Open the file
        $fp = fopen('tables/'.$filename, 'r');

        // Read the lines and process them
        while( !feof ($fp) ) {
            $buffer = fgets($fp);
            $cell_colour *= -1;

            if( $cell_colour == 1 ) {
                $cell_colour_to_use = 'aaaaaa';
            } else {
                $cell_colour_to_use = 'bbbbbb';
            }
            echo '    <tr bgcolor="#'.$cell_colour_to_use.'"><td><div class="cell">'.substr($buffer, 0, strlen($buffer) - 1).'</div></td></tr>'."\n";
        }

        // Close the file handle
        fclose($fp);

   } // END -- function read_minor_table_file
?>