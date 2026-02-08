<?php
    // Define variables
    $page_title = 'Scalos - Home';
    $page_nav_doc = 'home';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>

<div align="center">
  <script type="text/javascript" language="JavaScript"><!--
    var n = Math.floor(Math.random() * 2) + 1;
    if (n == 2)
    {
      document.write('<img src=\"gfx/scalos_logo_2.gif\" width=\"582\" height=\"151\" alt=\"Scalos logo 2\">');
    }
    else
    {
      document.write('<img src=\"gfx/scalos_logo_1.gif\" width=\"400\" height=\"127\" alt=\"Scalos logo 1\">');
    }
  //--></script>
  <noscript><img src="gfx/scalos_logo_1.gif" width="400" height="127" alt="Scalos logo 1"></noscript>
  <br>
  <table width="70%" bgcolor="#dddddd" border="0" cellspacing="1" cellpadding="2" summary="Hot news table">
    <!-- Header row -->
    <tr bgcolor="#222266">
      <td><center><font size="2" face="helvetica" color="#dddddd"><b>--- HOT NEWS ---</b></font></center></td>
    </tr>

    <tr bgcolor="#88ff88">
      <td><div class="cell"><div align="center">After lots of work, a first native <b>AROS</b> version of Scalos is available <a href="http://sourceforge.net/projects/scalos/files/latest/download?source=files" target="_blank">here</td>
    </tr>
    <tr bgcolor="#cccccc">
      <td><div class="cell"><div align="center">Scalos goes <b>open source</b>!<br>Scalos source code has been released as open source under BSD license. We have created a Scalos project on <a href="http://sourceforge.net/projects/scalos" target="_blank">Sourceforge</a></div></div></td>
    </tr>
    <tr bgcolor="#88ff88">
      <td><div class="cell"><div align="center">After lots of improvements and bugfixes, Scalos V41.7 finally has been released!!<br>Major new features are <b>Undo/Redo</b> for most desktop and icon actions, and an <b>online updater</b> module.<br>Download archives for AmigaOS 3.x/68K, AmigaOS 4.x/PPC, and MorphOS are available on the <a href="downloads.php#beta"> Downloads page.</a></div></div></td>
    </tr>
    <tr bgcolor="#cccccc">
      <td><div class="cell"><div align="center">Updated Scalos Developers' Pack for Scalos V41.7 is available for download on the <a href="developers.php#archives">Developers page</a>!</div></div></td>
    </tr>

    <tr bgcolor="#88ff88">
      <td><div class="cell"><div align="center">We have set up two new opportunities to contact the Scalos developers:You may either join the <b>new</b> Scalos mailing list <a href="links.php">here</a>, or contact us via our new mail address <a href="mailto:Scalos@VFEmail.net">Scalos@VFEmail.net</a> !</div></div></td>
    </tr>

  </table>
  <br>
</div>
<?php make_title('home', 0, 'home.gif', 120, 30, 'Home'); ?>

<p><b>Welcome to the home page of Scalos!</b> This is the place to <a href="javascript:window.external.AddFavorite('http://www.scalos.noname.fr','Scalos%20-%20Home%20page')">bookmark</a> 
if you want to keep track of the changes, new ideas, features and development of this outstanding software.<br><br>

New to Scalos? For details on what Scalos actually is, please visit the <a href="about.php">About page</a>.<br><br>

Got a question for us? Either subscribe to our mailing list <a href="links.php">here</a>, or visit our new Scalos forums <a href="forums/index.php" target="_top">here</a>.</p>

<!-- Site index -->
<?php make_title('siteindex', 1, 'siteindex.gif', 160, 30, 'Site Index'); ?>

<p>Please use the toolbar above to navigate this site by simply choosing a menu header. Alternatively, please use the following links.</p>

<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="forums/index.php" target="_top">The NEW Scalos forums</a></li>
    </ul>
  </dd>
</dl>
<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="devteam.php#devteam">The Development Team</a></li>
      <li><a href="links.php">Some useful links</a></li>
    </ul>
  </dd>
</dl>
<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="about.php"><b>About</b></a></li>
      <li><a href="about.php#whatis">What is Scalos?</a></li>
      <li><a href="about.php#histscalos">The History of Scalos</a></li>
      <li><a href="about.php#registered">What about the existing registered users?</a></li>
      <li><a href="about.php#powerpc">What about the PowerPC?</a></li>
    </ul>
  </dd>
</dl>
<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="news.php"><b>News</b></a></li>
      <li><a href="news.php#latest">Latest news</a></li>
      <li><a href="oldnews.php">Old news archive</a></li>
      <li><a href="versionhistory.php">Version history</a></li>
      <li><a href="miscnews.php">Miscellaneous news</a></li>
    </ul>
  </dd>
</dl>
<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="features.php"><b>Features</b></a></li>
      <li><a href="features.php#existfeatures">Existing features</a></li>
      <li><a href="features.php#futurefeatures">Future features</a></li>
      <li><a href="features.php#screenshots">Screenshots</a></li>
      <li><a href="submitidea.php">Submit an idea</a></li>
      <li><a href="reportbug.php">Report a bug</a></li>
    </ul>
  </dd>
</dl>
<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="hints_tips.php"><b>Hints &amp; Tips</b></a></li>
      <li><a href="hints_tips.php#glowicons">Glowicons</a></li>
      <li><a href="hints_tips.php#wallpaper">Wallpaper</a></li>
    </ul>
  </dd>
</dl>
<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="downloads.php"><b>Downloads</b></a></li>
      <li><a href="downloads.php#distributions">Full version distributions</a></li>
      <li><a href="downloads.php#modules">Modules and plugins</a></li>
      <li><a href="downloads.php#beta">BETA software</a></li>
      <li><a href="downloads.php#extras">Extra software</a></li>
      <li><a href="downloads.php#support">Support software</a></li>
      <li><a href="downloads.php#languages">Language packs</a></li>
    </ul>
  </dd>
</dl>
<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="developers.php"><b>Developers</b></a></li>
      <li><a href="developers.php#archives">Scalos developer archives</a></li>
      <li><a href="developers.php#examples">Example source code</a></li>
      <li><a href="developers.php#autodocs">Scalos autodocs</a></li>
    </ul>
  </dd>
</dl>
<dl>
  <dd>
    <ul style="margin-left:1em">
      <li><a href="manual/index.html"><b>Scalos online manual</b></a></li>
    </ul>
  </dd>
</dl><br>

<div align="center">
  <hr size="1" width="90%"><br>
  <table cols="2" width="580" cellpadding="2" cellspacing="4" border="0" summary="Contact">
    <tr>
      <td width="200"><a href="mailto:Scalos@VFEMail.net"><img src="gfx/contactus.gif" width="200" height="38" border="0" alt="Contact us"></a></td>
      <td width="380"><p>If you need to contact us, please use this e-mail address: <a href="mailto:Scalos@VFEmail.net">Scalos@VFEmail.net</a>.</p>
    </tr>
  </table>
</div>
<br>

<!-- Counter -->
<div align="center">
  <hr size="1" width="90%"><br>
  <table width="375" border="0" cellpadding="1" cellspacing="1" summary="Counter">
    <tr>
      <td valign="middle"><div class="small">Number of people who have visited this site: <img src="http://counter.digits.com/wc/-d/4/amigascalos" width="75" height="20" border="0" hspace="4" alt="Counter" align="middle"></div></td>
    </tr>
  </table>
  <br><hr size="1" width="90%"><br>
</div>

<!-- Copyright information -->
<div class="small">This web site was created by <a href="mailto:webmaster@scalos.noname.fr">Chris&nbsp;Haynes</a>. No part of it may be copied, reproduced or otherwise changed without written permission from the 
author. The majority of images on this site are copyrighted to the author, whilst others are considered to be in the public domain. If anything on this site infringes the copyright rights of another 
individual or organisation, please <a href="mailto:webmaster@scalos.noname.fr">contact me</a> and it will be removed immediately. All trademarks and patents are the property of their respective owners.</div><br>

<?php
	$this_page = 'main.php';
	include('footer.inc');
?>
