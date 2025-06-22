<?php 
    // Include the table functions
    include('functions_downloads.inc');

    // Define variables
    $page_title = 'Scalos - Downloads';
    $page_nav_doc = 'downloads';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>
<!-- Downloads -->
<?php make_title('downloads', 0, 'downloads.gif', 200, 30, 'Downloads'); ?>

<p>This page contains details of all current and past distributions of Scalos. You can download the latest versions of the entire package, the add-on/plugin modules and some supporting software 
from here.<br><br>

<img src="gfx/misc/requirements.gif" align="middle" width="40" height="32" alt="Requirements"> Please note the following system requirements for Scalos:<br><br>
<b>Minimum for AmigaOS/68K :</b></p>

<ul>
  <li>An Amiga with 68020 or higher processor</li>
  <li>Kickstart V3.0 or higher</li>
  <li>1MB free memory</li>
  <li><a href="http://www.sasg.com" target="_blank">MUI</a> version 3.6 or higher (v3.8 highly recommended!)</li>
</ul>

<b>Minimum for MorphOS/PPC :</b></p>

<ul>
  <li>A Pegasos with PPC processor</li>
  <li>MorphOS 1.4 or higher</li>
</ul>

<p><b>Optional (enhances the program):</b></p>

<ul>
  <li>render.library (Enhanced pattern handling)</li>
  <li>guigfx.library (Enhanced pattern handling)</li>
  <li>popupmenu.library (For popup menus)</li>
  <li>newicons.library V4+ (for NewIcons support)</li>
</ul>

<p>Always use the latest versions of the libraries, where possible.</p><br>

<!-- Distributions -->
<?php make_title('distributions', 1, 'distributions.gif', 190, 30, 'Distributions'); ?>
<br><br>
<div align="center">
  <!-- NOTE: Distribution archives are in "products/scalos/main/" -->
<?php
    make_download_table('Distributions', 'Please select a distribution archive from the table below:');
    $cell_colour = -1;
    format_line('products/scalos/main/Scalos-V1.2d.lha', 'Scalos V1.2d (39.222)', '64Kb', '13/01/2000', '<b>The latest public release of the Scalos executable.</b> (BETA releases can be found below.) Numerous fixes have been made in this version. Note that this archive contains only the Scalos executable itself. You need a previous installation in order to use this version.');
    format_line('products/scalos/main/Scalos-V1.2b.lha', 'Scalos V1.2b (39.220)', '432Kb', '06/06/2000', 'An older public release of Scalos. As Scalos V1.x is now freeware, this distribution has the keyfile system removed. The installer and main Scalos executable have been updated.');
    format_line('products/scalos/developers/preferences.lha', 'Preferences.library', '116Kb', '25/08/2000', 'This archive contains the preferences library, and the user/developer information including the new autodoc. Thanks go to Dave McMinn for sorting this one out.');
?>
  </table><br>
  <?php back_to_top(); ?>
</div>

<!-- Modules / Plugins -->
<?php make_title('modules', 1, 'modules.gif', 250, 30, 'Modules / Plugins'); ?>
<br><br>
<div align="center">
  <!-- NOTE: Module/plugin archives are in "products/scalos/modules/" -->
<?php
    make_download_table('Modules / Plugins', 'Please select a module/plugin archive from the table below:');
    format_line('products/scalos/modules/Scalos-Plugin_defpicture.lha', 'defpicture Preview Plugin V41.2', '2Kb', '29/10/2006', 'This update for Scalos V41.4 solves problems with non-working thumbnails under OS3.0 or OS3.1. It is <b>not</b> required for AmigaOS4 or MorphOS installations.  To install the update, copy the extracted archive contents (defpicture.pvplugin) to your <b>Scalos:plugins/previev</b> directory!');
    format_line('products/scalos/modules/Scalos-Module_EmptyTrashcan.lzx', 'Empty Trashcan Module V40.6c', '19Kb', '31/12/2003', 'This module makes emptying your trashcan easy. V40.6c adds a checkmark to enable/disable the enumerating command. When disabled, this greatly improves delete speed for large trashcans. By Jean-Marie Coat.');
//    format_line('products/scalos/modules/Scalos-Module_EmptyTrashcan.lha', 'Empty Trashcan Module V40.6', '14Kb', '16/06/2003', 'This module makes emptying your trashcan easy.');
    format_line('products/scalos/modules/Scalos-Module_NewDrawer.lzx', 'NewDrawer Module V40.4', '18Kb', '31/12/2003', 'This module lets you add a new drawer. V40.4 includes a fix to avoid enforcer hits when Scalos.catalog was read. By Jean-Marie Coat.');
//    format_line('products/scalos/modules/Scalos-Module_NewDrawer.lha', 'NewDrawer Module V40.2', '16Kb', '16/06/2003', 'This module lets you add a new drawer.');
    format_line('products/scalos/modules/Scalos-Plugin_AvailP96.lha', 'AvailP96 Plugin V2.01', '12Kb', '11/02/2003', 'This plugin allows you to add various placeholders to the Scalos title bar, e.g. graphics memory total and free, largest block, graphics card name etc. New in version 2.0 are placeholders for Total/Free/Largest Block memory of your GFX card, GFX Chip used in your GFX card, Card name, GFX card memory clock. These can be placed on any Screen, RootWindow and Window in Scalos. The readme is available <a href="products/scalos/modules/Scalos-Plugin_AvailP96.readme">here</a>.');
//    format_line('products/scalos/modules/Scalos-Plugin_XTWindows.lha', 'XTWindows Plugin V1.2', '12Kb', '21/11/2001', 'This plugin adds Unix-style keyboard shortcuts to Scalos windows.');
//    format_line('products/scalos/modules/Scalos-Plugin_WBRexx.lha', 'WBRexx Plugin V39.13', '30Kb', '07/10/2002', 'This plugin adds a Workbench 3.9-compatible arexx interface to the Scalos API.');
    format_line('http://web.ukonline.co.uk/bsteers/prog/mui/BWS_Scalos.lha', 'Bruce Steers\' archive', '280Kb', ' 03/12/2001', 'This archive contains three of <a href="mailto:bsteers@ukonline.co.uk">Bruce Steers\'</a> programs and source code: Rename.module, Information.module and the amigaini.library. It also includes the StackWindows plugin found below, now renamed Cascade.plugin. Full instructions are available in the archive.');
    format_line('products/scalos/modules/Scalos-Plugin_StackWindows.lha', 'Cascade Plugin V2.02', '16Kb', '03/12/2001', 'This plugin will allow you to stack your Scalos desktop windows so they appear a little neater on the screen. It was written by <a href="mailto:bsteers@ukonline.co.uk">Bruce Steers</a>. Full instructions are available in the archive. Note: was previously called Stack Windows.');
    format_line('products/scalos/modules/Scalos-Plugin_Clock.lha', 'Titlebar Clock Plugin V40.2', '22Kb', '06/12/2001', 'This plugin allows you to add clock and date functions to the Scalos desktop title bar. Updated: 06/12/2001 - The prefernces program has been updated and is included in the archive.');
//    format_line('products/scalos/modules/Scalos-Plugin_DevFilter.lha', 'DevFilter Plugin V39.3', '12Kb', '03/07/2001', 'DevFilter is a new plugin that filters bad disk icons from the desktop. With OS3.5+ it also allows filtering of any devices specified in the standard Workbench prefs too.');
//    format_line('products/scalos/modules/Scalos-Plugin_VGauge.lha', 'VolumeGauge Plugin V39.4', '16Kb', '11/11/2001', '&quot;VolumeGauge&quot; adds an OS3.5 style gauge to all root volume windows. You\'ll find the gauge in the left window border. The gauge displays how much space is available on the volume. It\'s compatible with OS3.0 and above. If you\'re using the WB3.9 plugin (below), you don\'t need this volumeguage plugin. This has recently been updated (11/11/2001) to work with the statusbar in the latest beta version of Scalos.');
//    format_line('products/scalos/modules/Scalos-Plugin_Persist.lha', 'Persistent Windows Plugin V39.16', '20Kb', '28/12/2001', 'This is a very smart plugin that records all directory windows a user opens and closes and keeps a record. Then, should a reboot or crash occur it can restore them when you reboot. If you previously had installed the SnapDesktop beta, please remove all the old files before you use this new plugin. By Juergen Lachmann.');
//    format_line('products/scalos/modules/Scalos-Plugin_WB39.lha', 'WB3.9 Plugin V45.23', '23Kb', '07/10/2002', 'This plugin is for OS 3.5/9 users only. It provides Scalos with some missing functions that will now allow some other software to work correctly, e.g. AmiDock. It also features an integrated volumegauge for OS3.5+ users. It now loads in OS3.5+ volume gauge preferences as set in the Workbench prefs. Also, more system checks have been added to make it more stable. Note: Users of this plugin do not require the volumegauge.plugin to be installed. If you do have it installed - remove it.');
//    format_line('products/scalos/modules/Scalos-Plugin_ENV.lha', 'ENV Plugin V39.1', '8Kb', '03/07/2001', 'This allows you to display an environment variable on your title bar.');
    format_line('products/scalos/modules/Scalos-Plugin_TitlePPC.lha', 'PPC Title Plugin V39.04', '8Kb', '03/07/2001', 'This allows you to display the PPC processor, revision number and speed on your title bar.');
    format_line('products/scalos/modules/Scalos-Module_EC.lha', 'Execute_Command.module V1.1', '24Kb', '13/01/2001', 'This is a replacement &quot;Execute Command&quot; module and has a number of features over the old version. By Mike Carter. Read the readme <a href="products/scalos/modules/Scalos-Module_EC.readme">here</a>.');
    format_line('products/scalos/modules/Scalos-Module_Delete.lzx', 'Delete.module', '171Kb', '06/06/2000', 'Replacement &quot;Delete&quot; module from <a href="http://www.starforge.co.uk" target="_blank">Chris Page</a>. See his website for full details on what the replacement offers over the standard module.');
    format_line('products/scalos/modules/Scalos-Module_Delete_Src.lha', 'Delete.module source', '60Kb', '24/04/2005', 'Full source code of Delete.module, according to GPL. Original module from <a href="http://www.starforge.co.uk" target="_blank">Chris Page</a>. See his website for full details on what the replacement offers over the standard module.');
?>
  </table><br>
  <?php back_to_top(); ?>
</div>

<!-- Beta software -->
<?php make_title('beta', 1, 'beta.gif', 205, 30, 'Beta Software'); ?>
<br><br>
<div align="center">
<?php
    make_download_table('Beta software', 'Items in the table below are BETA software. They have not been subject to intensive testing and therefore, you are advised to backup your data before installing any of this software:');

    format_line('products/scalos/main/ScalosBeta_41.7_68K.lha', 'Scalos V41.7 for Amiga-OS 3.x/68K', '~4680KB', '15/03/2010', 'This is the complete V41.7 archive with the latest <b>BETA</b> release of the Scalos executable. You can find all the changes in this release on the <a href="versionhistory.php">version history page</a>. German and French language packs are included in the archive.');
    format_line('products/scalos/main/ScalosBeta_41.7_MOS.lha', 'Scalos V41.7 for MorphOS/PPC',      '~5796KB', '15/03/2010', 'This is the native PPC/MorphOS <b>BETA</b> release of Scalos. You can find all the changes in this release on the <a href="versionhistory.php">version history page</a>. German and French language packs are included in the archive.');
    format_line('products/scalos/main/ScalosBeta_41.7_OS4.lha', 'Scalos V41.7 for AmigaOS 4.x/PPC',  '~5916KB', '15/03/2010', 'This is the native AmigaOS 4.1 <b>BETA</b> release of Scalos. You can find all the changes in this release on the <a href="versionhistory.php">version history page</a>. German and French language packs are included in the archive.');
    format_line('manual/index.html', 'Scalos online manual', 'N/A', 'N/A', 'Mike Carter has started writing the online manual for Scalos. You can <a href="manual/index.html">read the current version here</a>. Please note that it is in no way a final version! We are still working on this! Hopefully, it will form the basis of a new integrated help system for Scalos.');
?>
  </table><br>
  <?php back_to_top(); ?>
</div>

<!-- Extra software -->
<?php make_title('extras', 1, 'extras.gif', 210, 30, 'Extra Software'); ?>
<br><br>
<div align="center">
  <!-- NOTE: Extra software archives are in "products/scalos/extras/" -->
<?php
    make_download_table('Extra Software', 'Note: Software within this table is not directly supported by us. Please ensure that you back up your original files first!');
//    format_line('products/scalos/extras/Scalos-Tool_Eject.lha', 'Eject', '12KB', '13/01/2001', 'This is a bit of extra software that allows the addition of an eject menu item on the disk context menu of icons. It was written by Steve Hargreaves.');
    format_line('products/scalos/extras/Scalos-Tool_DoCommand.lha', 'DoCommand', '6KB', '03/12/2000', 'This is a re-release of a command originally provided with the FileType plugin, however we\'ve now added some detailed instructions on its use and have done a clean re-compile too. There\'s a demo icon in the archive to show you how to use this powerful command.');
    format_line('products/scalos/extras/Scalos-Tool_OpenShell.lha', 'OpenShell', '4KB', '01/12/2000', 'This is a script add-on that provides a shortcut to an Amiga Shell.');
    format_line('products/scalos/extras/Scalos_Bootpic.gif', 'Scalos Bootpic - GIF', '20KB', '01/12/2000', 'Scalos bootpic - A nice logo for your boot sequence. Choose either the GIF or CGX version.');
    format_line('products/scalos/extras/Scalos-BootpicCGX.lha', 'Scalos Bootpic - CGX', '20KB', '01/12/2000', 'Scalos bootpic - A nice logo for your boot sequence. Choose either the GIF or CGX version.');
?>
  </table><br>
  <?php back_to_top(); ?>
</div>

<div align="center">
  <!-- Support software -->
  <a name="support"></a><hr size="1" width="90%"><br><img src="gfx/titles/support.gif" width="250" height="30" alt="Support Software"><br><br>

  <table cols="4" width="90%" bgcolor="#dddddd" border="0" cellpadding="1" cellspacing="1" summary="Some links">
    <tr bgcolor="#222266">
      <!-- Header row -->
      <td width="150"><center><font size="2" face="helvetica" color="#dddddd"><b>Software</b></font></center></td>
      <td width="70"><center><font size="2" face="helvetica" color="#dddddd"><b>Aminet</b></font></center></td>
      <td width="80"><center><font size="2" face="helvetica" color="#dddddd"><b>Size</b></font></center></td>
      <td width="*"><center><font size="2" face="helvetica" color="#dddddd"><b>Details</b></font></center></td>
    </tr>
    <tr bgcolor="#bbbbbb">
      <td align="center" valign="top"><div class="cellarchive"><a href="http://www.sasg.com/mui/index.html" target="_blank">MUI 3.8 (User)</a></div></td>
      <td align="center" valign="top"><a href="http://uk.aminet.net/util/libs/mui38usr.lha"><img src="gfx/links/flag_uk.gif" width="19" height="15" border="0" alt="Download from Aminet UK"></a>
      <a href="http://aminet.net/util/libs/mui38usr.lha"><img src="gfx/links/flag_germany.gif" width="19" height="15" border="0" alt="Download from Aminet Germany"></a></td>
      <td align="center" valign="top"><div class="cellsize">Unknown</div></td>
      <td valign="top"><div class="cell">Needs no introduction. This software is the basis for many Amiga applications. It lets you customise nearly every pixel of an application's interface, 
      incorporates user-friendly controls and has tons of other features. This is the user archive and some features are not customisable unless you register with 
      <a href="http://www.sasg.com/">www.sasg.com</a>.</div></td>
    </tr>
    <tr bgcolor="#aaaaaa">
      <td align="center" valign="top"><div class="cellarchive"><a href=" http://www.neoscientists.org/~tmueller/binarydistillery/">Render library</a></div></td>
      <td align="center" valign="top"><a href="http://uk.aminet.net/dev/misc/renderlib.lha"><img src="gfx/links/flag_uk.gif" width="19" height="15" border="0" alt="Download from Aminet UK"></a>
      <a href="http://aminet.net/dev/misc/renderlib.lha"><img src="gfx/links/flag_germany.gif" width="19" height="15" border="0" alt="Download from Aminet Germany"></a></td>
      <td align="center" valign="top"><div class="cellsize">169KB</div></td>
      <td valign="top"><div class="cell">Development archive (but includes needed library), used in Scalos for pattern enhancements.</div></td>
    </tr>
    <tr bgcolor="#bbbbbb">
      <td align="center" valign="top"><div class="cellarchive"><a href=" http://www.neoscientists.org/~tmueller/binarydistillery/">GUIGfx library</a></div></td>
      <td align="center" valign="top"><a href="http://uk.aminet.net/dev/misc/guigfxlib.lha"><img src="gfx/links/flag_uk.gif" width="19" height="15" border="0" alt="Download from Aminet UK"></a>
      <a href="http://de2.aminet.net/pub/aminet/dev/misc/guigfxlib.lha"><img src="gfx/links/flag_germany.gif" width="19" height="15" border="0" alt="Download from Aminet Germany"></a></td>
      <td align="center" valign="top"><div class="cellsize">145KB</div></td>
      <td valign="top"><div class="cell">Used in Scalos for pattern enhancements.</div></td>
    </tr>
    <tr bgcolor="#aaaaaa">
      <td align="center" valign="top"><div class="cellarchive">Scalos Extras</div></td>
      <td align="center" valign="top"><a href="http://uk.aminet.net/util/wb/scalos_extras.lha"><img src="gfx/links/flag_uk.gif" width="19" height="15" border="0" alt="Download from Aminet UK"></a>
      <a href="http://ftp.uni-paderborn.de/aminet/dirs/aminet/util/wb/scalos_extras.lha"><img src="gfx/links/flag_germany.gif" width="19" height="15" border="0" alt="Download from Aminet Germany"></a></td>
      <td align="center" valign="top"><div class="cellsize">31KB</div></td>
      <td valign="top"><div class="cell">AREXX scripts for Scalos. May need some fiddling to use well.</div></td>
    </tr>
    <tr bgcolor="#aaaaaa">
      <td align="center" valign="top"><div class="cellarchive"><a href="http://www.amiganet.org/newicons/">Newicons</a></div></td>
      <td align="center" valign="top"><a href="http://uk.aminet.net/util/wb/NewIcons46.lha"><img src="gfx/links/flag_uk.gif" width="19" height="15" border="0" alt="Download from Aminet UK"></a>
      <a href="http://de2.aminet.net/pub/aminet/util/wb/NewIcons46.lha"><img src="gfx/links/flag_germany.gif" width="19" height="15" border="0" alt="Download from Aminet Germany"></a></td>
      <td align="center" valign="top"><div class="cellsize">659KB</div></td>
      <td valign="top"><div class="cell">NewIcons enhances your Workbench and gives the user much more power and configurability over the appearance of the desktop icons. Allowing upto 256 colours! 
      [<a href="http://uk.aminet.net/pub/aminet/util/wb/NewIcons46.readme">more</a>].</div></td>
    </tr>
    <tr bgcolor="#bbbbbb">
      <td align="center" valign="top"><div class="cellarchive"><a href="products/thirdparty/MCC_Popxxx.lha">PopHotkey.mcc</a></div></td>
      <td align="center" valign="top"> </td>
      <td align="center" valign="top"><div class="cellsize">29KB</div></td>
      <td valign="top"><div class="cell">MUI custom class used in several Scalos utilities.</div></td>
    </tr>
    <tr bgcolor="#aaaaaa">
      <td align="center" valign="top"><div class="cellarchive"><a href="products/thirdparty/MCC_Urltext.lha">Urltext.mcc</div></td>
      <td align="center" valign="top"><a href="http://main.aminet.net/dev/mui/MCC_Urltext.lha"><img src="gfx/links/flag_uk.gif" width="19" height="15" border="0" alt="Download from Aminet UK"></a>
       <a href="http://main.aminet.net/dev/mui/MCC_Urltext.lha"><img src="gfx/links/flag_germany.gif" width="19" height="15" border="0" alt="Download from Aminet Germany"></a></td>
      <td align="center" valign="top"><div class="cellsize">34KB</div></td>
      <td valign="top"><div class="cell">MUI custom class used in several Scalos utilities.</div></td>
    </tr>
    <tr bgcolor="#bbbbbb">
      <td align="center" valign="top"><div class="cellarchive"><a href="products/thirdparty/MCC_Lamp.lha">Lamp.mcc</a></div></td>
      <td align="center" valign="top"><a href="http://main.aminet.net/dev/mui/MCC_Lamp.lha"><img src="gfx/links/flag_uk.gif" width="19" height="15" border="0" alt="Download from Aminet UK"></a>
       <a href="http://main.aminet.net/dev/mui/MCC_Lamp.lha"><img src="gfx/links/flag_germany.gif" width="19" height="15" border="0" alt="Download from Aminet Germany"></a></td>
      <td align="center" valign="top"><div class="cellsize">71KB</div></td>
      <td valign="top"><div class="cell">MUI custom class used in several Scalos utilities.</div></td>
    </tr>
    <tr bgcolor="#aaaaaa">
      <td align="center" valign="top"><div class="cellarchive"><a href="products/thirdparty/MCC_TextInput.lha">TextInput.mcc</a></div></td>
      <td align="center" valign="top"> </td>
      <td align="center" valign="top"><div class="cellsize">112KB</div></td>
      <td valign="top"><div class="cell">MUI custom class used in several Scalos utilities.</div></td>
    </tr>
  </table><br>
  <?php back_to_top(); ?>
</div>

<?php
	$this_page = 'downloads.php';
	include('footer.inc');
?>

