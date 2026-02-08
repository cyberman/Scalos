<?php
    // Include the table functions
    include('functions_table.inc');

    // Define variables
    $page_title = 'Scalos - Version History';
    $page_nav_doc = 'news';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>

<!-- Version history -->
<br>
<?php make_title('histversion', 0, 'versionhistory.gif', 210, 30, 'Version History'); ?>

<div align="center">
  <p>
    <b>Latest to oldest:</b> (Check scalos.library for the current version and revision.)<br><br>
    Older changes to the Scalos desktop have been archived into a page <a href="oldversionhistory.php">here</a> to speed up the downloading of this page :) It also contains history changes for plugins 
    that have been rendered obsolete by incorporation of their features into the main Scalos code.
  </p>

  <table width="90%" bgcolor="#dddddd" border="0" cellpadding="1" cellspacing="1" summary="Version history">
    <!-- Header rows -->
    <tr bgcolor="#222266">
      <td width="*"><center><font size="2" face="helvetica" color="#dddddd"><b>--- Changes made since public release 1.2D (V39.222) ---</b><br>Note that these changes are in internal releases only! 
      Please wait for the latest public release...</font></center></td>
    </tr>
    <tr bgcolor="#ccccde">
      <td width="*"><center><font size="2" face="helvetica" color="#002244">The latest BETA release is available from the <a href="downloads.php#beta">Downloads page</a></font></center></td>
    </tr>
<?php
    // Version History
    read_table_file('versionhistory.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>
  <hr size="1" width="90%"><br>

<?php
    new_table('Scalos Filetyes Preferences (V40.18)');
    read_minor_table_file('scalos_filetype_preferences.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('Scalos Menu Preferences (V40.17)');
    read_minor_table_file('scalos_menu_preferences.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('Scalos Preferences (V40.22)');
    read_minor_table_file('scalos_preferences.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('Scalos Pattern Preferences (V40.18)');
    read_minor_table_file('scalos_pattern_preferences.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('Scalos Palette Preferences (V40.11)');
    read_minor_table_file('scalos_palette_preferences.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>
  <hr size="1" width="90%"><br>

<?php
    new_table('LoadWB.Scalos (V1.6)');
    read_minor_table_file('loadwb_scalos.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('ScalosCtrl (V40.16)');
    read_minor_table_file('scalos_ctrl.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>
  <hr size="1" width="90%"><br>

<?php
    new_table('iconobject.library (V40.4)');
    read_minor_table_file('iconobject_library.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>
  <hr size="1" width="90%"><br>

<?php
    new_table('amigaiconobj35.datatype (V40.17)');
    read_minor_table_file('amigaiconobj35_datatype.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('amigaiconobject.datatype (V40.10)');
    read_minor_table_file('amigaiconobject_datatype.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('glowiconobject.datatype (V40.11)');
    read_minor_table_file('glowiconobject_datatype.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('iconobject.datatype (V40.24)');
    read_minor_table_file('iconobject_datatype.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('newiconobject.datatype (V40.11)');
    read_minor_table_file('newiconobject_datatype.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('pngiconobject.datatype (V40.18)');
    read_minor_table_file('pngiconobject_datatype.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>
  <hr size="1" width="90%"><br>

<?php
    new_table('drawercontents.plugin (V40.3)');
    read_minor_table_file('drawercontents_plugin.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('persist.plugin (V39.21)');
    read_minor_table_file('persist_plugin.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('picturedimensions.plugin (V40.3)');
    read_minor_table_file('picturedimensions_plugin.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('volumegauge.plugin (V39.8)');
    read_minor_table_file('volumegauge_plugin.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('wb39.plugin (V45.32)');
    read_minor_table_file('wb39_plugin.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('wbrexx.plugin (V39.18)');
    read_minor_table_file('wbrexx_plugin.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

<?php
    new_table('xtwindows.plugin (V40.6)');
    read_minor_table_file('xtwindows_plugin.txt');
?>
  </table>
  <br>
</div>

<div align="center">
  <form method="POST" action="http://mindit.netmind.com/mindit.shtml">
    <input type="hidden" name="FORM" value="C">
    <table border="0" cellpadding="5" cellspacing="0" bgcolor="#002244">
      <tr>
        <td align="center">
          <font face="arial,helvetica" size="-1" color="#ffffff"><b>Click to receive an e-mail when this page changes</b></font>
        </td>
      </tr>
      <tr>
        <td align="center">
          <input type=hidden name="URL" value="http://scalos.noname.fr/versionhistory.php">
          <input type=hidden name="REDIRECT" value="http://scalos.noname.fr/versionhistory.php">
          <input type="image" src="gfx/mindit.gif" border="0" name="image">
        </td>
      </tr>
    </table>
  </form>
</div>
      
<?php
	$this_page = 'versionhistory-orig.php';
	include('footer.inc');
?>

