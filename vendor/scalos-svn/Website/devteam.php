<?php
    // Define variables
    $page_title = 'Scalos - The Development Team';
    $page_nav_doc = 'home';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>

<!-- The Development Team -->
<br>
<?php make_title('devteam', 0, 'devteam.gif', 320, 30, 'The Development Team'); ?>
<br><br>
<div align="center">
  <table cols="4" width="90%" bgcolor="#dddddd" border="0" cellpadding="1" cellspacing="1" summary="The Development Team">
    <tr> 
      <td colspan="4" bgcolor="#cccccc">
        <div class="tabletop">There are four people working on the development of Scalos. They are (in no particular order):</div>
      </td>
    </tr>
    <tr bgcolor="#222266"> 
      <!-- Header row -->
      <td width="50"><center><font size="2" face="helvetica" color="#dddddd"><b>E-mail</b></font></center></td>
      <td width="100"><center><font size="2" face="helvetica" color="#dddddd"><b>Name</b></font></center></td>
      <td width="150"><center><font size="2" face="helvetica" color="#dddddd"><b>Skills</b></font></center></td>
      <td width="*"><center><font size="2" face="helvetica" color="#dddddd"><b>Details</b></font></center></td>
    </tr>
    <!-- Chris&nbsp;Haynes -->
    <tr bgcolor="#bbbbbb"> 
      <td align="center" valign="middle"><a href="mailto:webmaster@scalos.noname.fr"><img src="gfx/misc/mailicon.gif" width="30" height="31" alt="E-mail me" border="0"></a></td>
      <td align="center" valign="top"><div class="cell">Chris&nbsp;Haynes</div></td>
      <td align="center" valign="top"><div class="cellsize">68k asm, C, HTML, PHP, JavaScript</div></td>
      <td valign="top"><div class="cell">Webmaster of the Scalos web site.</div></td>
    </tr>
    <!-- Jean-Marie COAT -->
    <tr bgcolor="#bbbbbb"> 
      <td align="center" valign="middle"><a href="mailto:agalliance@free.fr"><img src="gfx/misc/mailicon.gif" width="30" height="31" alt="E-mail me" border="0"></a></td>
      <td align="center" valign="top"><div class="cell">Jean-Marie COAT</div></td>
      <td align="center" valign="top"><div class="cellsize">C, E</div></td>
      <td valign="top"><div class="cell">General scalos participation, modules written in E, beta testing.</div></td>
    </tr>
    <!-- Jurgen Lachmann -->
    <tr bgcolor="#bbbbbb"> 
      <td align="center" valign="middle"><a href="mailto:juergen_lachmann@t-online.de"><img src="gfx/misc/mailicon.gif" width="30" height="31" alt="E-mail me" border="0"></a></td>
      <td align="center" valign="top"><div class="cell">J&uuml;rgen Lachmann</div></td>
      <td align="center" valign="top"><div class="cellsize">68k asm, C</div></td>
      <td valign="top"><div class="cell">Project co-ordination, icon system development, general scalos dvelopment and bug fixing.</div></td>
    </tr>
    <!-- Staf Verhaegen -->
    <tr bgcolor="#bbbbbb"> 
      <td align="center" valign="middle"><a href="mailto:staf@scalos.noname.fr"><img src="gfx/misc/mailicon.gif" width="30" height="31" alt="E-mail me" border="0"></a></td>
      <td align="center" valign="top"><div class="cell">Staf Verhaegen</div></td>
      <td align="center" valign="top"><div class="cellsize">C</div></td>
      <td valign="top"><div class="cell">Investigation of alternative ports.</div></td>
    </tr>
  </table>
  <br>
  <p>If you need to contact us, in general, please e-mail <a href="mailto:Scalos@VFEmail.net">Scalos@VFEmail.net</a>. If you wish to contact us because you have a new idea for improving Scalos, please use
  the form located <a href="submitidea.php">here</a>. To report a bug, please use the form located <a href="reportbug.php">here</a>. Thank you.</p>
</div>

<?php
	$this_page = 'devteam.php';
	include('footer.inc');
?>

