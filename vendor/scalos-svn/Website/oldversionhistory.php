<?php
    // Include the table functions
    include('functions_table.inc');

    // Define variables
    $page_title = 'Scalos - Archived Version History';
    $page_nav_doc = 'news';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>

<!-- Version history -->
<br>
<?php make_title('histversion', 0, 'archivedversionhistory.gif', 320, 30, 'Version History'); ?>

<div align="center">
  <p>This page contains the archived version history for Scalos. You can find the most recent changes <a href="versionhistory.php">here</a>.</p>

  <table width="90%" bgcolor="#dddddd" border="0" cellpadding="1" cellspacing="1" summary="Archived Version history">
    <!-- Header rows -->
    <tr bgcolor="#222266">
      <td width="*"><center><font size="2" face="helvetica" color="#dddddd"><b>--- Archived Version History ---</b></font></center></td>
    </tr>
    <tr bgcolor="#ccccde">
      <td width="*"><center><font size="2" face="helvetica" color="#002244">The latest BETA release is available from the <a href="downloads.php#beta">Downloads page</a></font></center></td>
    </tr>
<?php
    // Old Version History
    read_table_file('oldversionhistory.txt');
?>
  </table>
  <?php back_to_top(); ?>
  <br>

  <?php new_table('Scalos 1.2D (V39.222)'); ?>
    <tr bgcolor="#aaaaaa"><td><div class="cell">Interim executable update.</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">Appicons will now show up as Newicons or OS3.5 icons</div></td></tr>
  </table>
  <?php back_to_top(); ?>
  <br>

  <?php new_table('Scalos 1.2B (V39.220)'); ?>
    <tr bgcolor="#bbbbbb"><td><div class="cell">Added support for new &quot;Format_Disk&quot; module</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">Removed keyfile system as Scalos is now freeware</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">Installer updated</div></td></tr>
  </table>
  <?php back_to_top(); ?>
  <br>

  <?php new_table('Scalos 1.2 (V39.212)'); ?>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.217 - replaced all divu.l and mulu.l with a replacement function</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.216 - fixed small disk size rendering error</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.215 - fixed memory loss after dragging</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.214 - fixed deadly error with pop screen title</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.213 - fixed AmigaDOS start missing stack size</div></td></tr>
  </table>
  <?php back_to_top(); ?>
  <br>

  <?php new_table('Scalos 1.1 (V39.201)'); ?>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.212 - fixed del key support</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.211 - fixed mem-eating after mouseclicks</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.210 - fixed ghosted icon menu after select contents</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.209 - added del-key delete</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.208 - fixed re-read of a file with no icon</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.207 - added show all files in text mode (shows icons)</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.206 - fixed copy command in text mode windows</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.205 - fixed desktop window pattern scaling</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.204 - added showtitle if mouse is over the title bar</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.203 - fixed fullbench title reappear</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.202 - added multi-assign search for default tools</div></td></tr>
  </table>
  <?php back_to_top(); ?>
  <br>

  <?php new_table('Scalos 1.0 (V39.185)'); ?>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.201 - fixed modules will be started with more stack now</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.200 - fixed move didn't work with icons only</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.199 - fixed lockings with some CD filesystems</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.198 - fixed friend bitmap problem</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.197 - fixed hidden flag support</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.196 - fixed lock if using textmode with some filesystems</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.195 - fixed PC2AMIGA disk icon</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.194 - fixed copying of files larger than RAM size</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.193 - added: Scalos will now inherit the view mode after a double-click on a default icon</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.192 - fixed Workbenchwindow mode if Scalos doesn't run in Emulation mode</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.191 - added drag start</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.190 - fixed selection of text mode. Now you must click on the filename. This makes multiselect with lasso possible</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.189 - added Mac-like multiselection</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.188 - added hidden flag support</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.187 - fixed ghosted menu items after select all or lasso</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.186 - fixed deactivated &quot;update&quot; while dir reading</div></td></tr>
  </table>
  <?php back_to_top(); ?>
  <br>

  <?php new_table('Scalos 1.0 (V39.152) PreRelease 1'); ?>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.185 - fixed clone (copy) command problems</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.184 - fixed information.module. Now works correctly</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.183 - added sorting of non-positioned icons</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.182 - fixed Leave Out/Put Away problems (hopefully)</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.181 - added clone (copy) command</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.180 - added support for information.module</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.179 - added now setting all defdisk to type Diskicon</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.178 - fixed NONAME and NODRAG tags for disk and backdrop icons</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.177 - added DefDisks first</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.176 - added saving of DefIcons</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.175 - fixed crash if popupmenu library isn't available</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.174 - fixed AmigaDOS args now have '&quot;'</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.173 - fixed AmigaDOS args in Popupmenus</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.172 - fixed fullbench</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.171 - fixed sometimes appeared dead-file in textmode</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.170 - fixed filenotify in textmode</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.169 - fixed crash after dragging one icon into another on main window</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.168 - fixed strange icon refresh bug if Executive is running</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.167 - added popupmenu titles</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.166 - added window-popup title only</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.165 - added fullbench option</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.164 - added new tooltype: &quot;SCALOS_NOTEXT&quot; and &quot;SCALOS_NODRAG&quot;</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.163 - fixed missing default tooltype &quot;CLI&quot;</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.162 - added progress display for copy</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.161 - added AmigaDOS args (enable WB Args and use &quot;%p&quot;)</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.160 - fixed TextMode refresh and &quot;Show All Files&quot; problem</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.159 - fixed asynclayout problems in unregistered version</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.158 - fixed Link support for WBMessage</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.158 - Added showing links as bold or italic in textmode</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.157 - fixed poolwatch hit</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.156 - added DefIcons plugin port</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.155 - added joining of bobs for the custom bobroutine</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.154 - fixed a non-removed lasso if you press LAmiga+LAlt while doing a lasso with mouse</div></td></tr>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V39.153 - fixed crash on quit</div></td></tr>
    <tr bgcolor="#bbbbbb"><td><div class="cell">V39.153 - fixed crash on WB doublestart</div></td></tr>
  </table>
  <?php back_to_top(); ?>
  <br>

  <hr size="1" width="90%"><br>

  <?php new_table('deficons.plugin (V45.6)'); ?>
    <tr bgcolor="#aaaaaa"><td><div class="cell">V45.6 - OpenLibraries was called twice - Fixed</div></td></tr>
	<tr bgcolor="#bbbbbb"><td><div class="cell">V45.6 - Added support for individually enabled/disabled icon types</div></td></tr>
  </table><br>

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
          <input type=hidden name="URL" value="http://www.scalos.noname.fr/versionhistory.php">
          <input type=hidden name="REDIRECT" value="http://www.scalos.noname.fr/versionhistory.php">
          <input type="image" src="gfx/mindit.gif" border="0" name="image">
        </td>
      </tr>
    </table>
  </form>
</div>

<?php
	$this_page = 'oldversionhistory.php';
	include('footer.inc');
?>

