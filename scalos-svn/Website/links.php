<?php
    // Define variables
    $page_title = 'Scalos - Links';
    $page_nav_doc = 'home';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>

<!-- Links -->
<?php make_title('links', 0, 'links.gif', 180, 30, 'Some Links'); ?>
<br><br>

<div align="center">
  <table width="60%" bgcolor="#bcbcbc" border="3" summary="Links">
    <tr>
      <td width="300" valign="middle" align="center">
	<form method=get action="http://www.yahoogroups.com/subscribe/scalos_user">
          <table cols="2" cellspacing="0" cellpadding="2" border="0" bgcolor="#bcbcbc" summary="Subscribe to mailing list">
            <tr>
              <td colspan="2" align="center">
                <div class="linkcell"><b>Subscribe to our mailing list</b></div>
              </td>
            </tr>
            <tr>
              <td><input type=text name="user" value="Enter e-mail address" size="35"></td>
	      <td><input type=image name="Join Scalos mailing list" src="http://groups.yahoo.com/img/ui/join.gif" alt="Click here to join the Scalos users' mailing list"></td>
            </tr>
            <tr align="center">
              <td colspan="2"><div class="linkcell">Powered by <a href="http://groups.yahoo.com/">groups.yahoo.com</a></div></td>
            </tr>
          </table>
        </form>
      </td>
    </tr>
  </table>
  <br>
</div>

<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="http://www.newteksolutions.co.uk" target="_blank">Newtek Solutions</a> - This company is generously providing our webspace. Thanks guys!<br></li>
      <li><a href="http://aiab.emuunlim.com" target="_blank">Amiga In A Box</a> - Part of the Emulators Unlimited site. The AIAB section has a good install of an Amiga in a package. Just download it 
      and run it through WinUAE or MacUAE!<br></li>
      <li><a href="http://www.aliendesign-gbr.de" target="_blank">ALiENDESiGN</a> - The original Scalos developers. Downloads and updates to the current version are still available here!</li>
      <li><a href="http://de.aminet.net/aminetbin/find?scalos" target="_blank">Aminet</a> - Search for &quot;Scalos&quot; on Aminet.</li>
      <!--<li><a href="http://ftp.uni-paderborn.de/aminet/dirs/aminet/dev/asm/AsmPro.lha">AsmPro</a> - Assembler used in compiling Scalos. Graphics card compatible.</li>-->
      <li><a href="http://www.amiganet.org/newicons/" target="_blank">NewIcons</a> - The official NewIcons site.</li>
      <li><a href="http://www.convergence.org/" target="_blank">Convergence International</a> - The user group for non-Wintel platforms.</li>
      <!--<li><a href="http://reality.sgi.com/mchaput_aw/index.html" target="_blank">Glowicons</a> - The official website.</li>-->
      <li><a href="http://www.neoscientists.org/" target="_blank">Neoscientists</a> - Authors of the GUIGfx libraries.</li>
    </ul>
  </dd>
</dl>

<div align="center">
  <h4>Suggested links:</h4>
  <table width="300" cellspacing="0" cellpadding="0" bgcolor="#bcbcbc" border="1" summary="No Piracy!">
    <tr><td><a href="http://www.amiga-planet.de/nopiracy/" target="_blank"><img src="gfx/links/nopiracy.jpg" width="300" height="60" border="0" alt="No Piracy!"></a></td></tr>
    <tr><td><p>We are in <b>full</b> support of this campaign, and YOU should be too!</p></td></tr>
  </table>
  <br>
</div>

<?php
	$this_page = 'links.php';
	include('footer.inc');
?>

