<?php
    // Define variables
    $page_title = 'Scalos - Report A Bug';
    $page_nav_doc = 'features';

    // Header(s)
    include('header.inc');
    include('header_script_bug.inc');
?>
<!-- Report a bug -->
<br>
<?php make_title('reportbug', 0, 'reportbug.gif', 200, 30, 'Report A Bug'); ?>
<br>

<p>Unfortunately, there are always going to be bugs in software, and Scalos is no exception to this rule. If you feel you've found a bug that we should be made aware of, please fill in the following form. 
Make sure that you have removed all system patches that could possibly be causing it, and that you can reproduce the bug. Please also include your system configuration, e.g. AGA or gfx card, memory, Amiga 
model, any add-on cards etc. Click the &quot;Report Bug&quot; button to send us these details. Click &quot;Clear Details&quot; to start over. You can view the current bug list online 
<a href="bugs.txt">here</a>.</p>
<br>

<!-- If no javascript, inform user to check form fully before submitting -->
<noscript>
  <div class="small">Javascript is used to check that you enter the correct details into this form. Your browser has it disabled, or is not javascript-capable. Please check the details fully before 
  submitting the form. Thanks.<br><br></div>
</noscript>

<div align="center">
  <!-- ReportBug form -->
  <form name="ReportBug" method=post action="sendbugreport.php" onSubmit="return CheckFullForm(ReportBug);">
    <table cols="2" width="590" border="0" cellspacing="4" cellpadding="4" bgcolor="#bbbbbb" summary="Report a bug form">
      <tr>
        <td valign="top"><div class="cell">Name/Nickname:</div></td>
        <td><input type=text size="60" name="name" value="" maxlength="60" onChange="CheckField(this, 'You must supply a name/nickname.'); return true"></td>
      </tr>
      <tr>
        <td valign="top"><div class="cell">E-mail address:</div></td>
        <td><input type=text size="60" name="email" value="" maxlength="100" onChange="CheckField(this, 'You must supply an e-mail address.'); return true"></td>
      </tr>
      <tr><td colspan="2" valign="top"><div class="cell">Please enter the library version of Scalos you're using, e.g. V40.2 (NOT the distribution version, i.e. 1.2d):</div></td></tr>
      <tr>
        <td valign="top"><div class="cell">Scalos version:</div></td>
        <td><input type=text size="60" name="scalosversion" value="" maxlength="10" onChange="CheckField(this, 'You must supply a Scalos version, e.g. V40.2.'); return true"></td>
      </tr>
      <tr>
        <td valign="top"><div class="cell">Subject of bug:</div></td>
        <td><input type=text size="60" name="subject" value="" maxlength="60" onChange="CheckField(this, 'You must supply a subject.'); return true"></td>
      </tr>
      <tr>
        <td valign="top"><div class="cell">Details:</div></td>
        <td><textarea name="details" rows="10" cols="57" wrap="virtual" onChange="CheckField(this, 'You must supply some details.'); return true"></textarea></td>
      </tr>
      <tr>
	<td valign="top"><div class="cell">Operating System:</div></td>
        <td valign="top"><div class="cell">
	  <select name="os">
	    <option label="AmigaOS 3.x">AmigaOS 3.x/68K</option>
	    <option label="AmigaOS4">AmigaOS4</option>
	    <option label="MorphOS">MorphOS</option>
          </select>
        </div></td>
      </tr>
      <tr>
        <td valign="top"><div class="cell">Processor:</div></td>
        <td valign="top"><div class="cell">
          <select name="processor">
            <option label="020">020</option>
            <option label="030">030</option>
            <option label="040">040</option>
            <option label="060">060</option>
            <option label="68K Emulation">68K Emulation</option>
            <option label="UAE (020)">UAE (020)</option>
	    <option label="PPC">PowerPC</option>
          </select>
        </div></td>
      </tr>
      <tr>
        <td valign="top"><div class="cell">Graphics system:</div></td>
        <td valign="top"><div class="cell">
          <select name="graphics">
            <option label="AGA">AGA</option>
            <option label="AGA+fBlit">AGA+fBlit</option>
            <option label="Picasso 96">Picasso 96</option>
            <option label="Cybergraphics 3">Cybergraphics 3</option>
            <option label="Cybergraphics 4">Cybergraphics 4</option>
          </select>
        </div></td>
      </tr>
      <tr>
        <td valign="top"><div class="cell">Screen depth:</div></td>
        <td valign="top"><div class="cell">
          <select name="screendepth">
            <option label="8-bit">8-bit</option>
            <option label="15/16-bit">15/16-bit</option>
            <option label="24-bit">24-bit</option>
          </select>
        </div></td>
      </tr>
      <tr><td colspan="2" valign="top"><div class="cell">If your bug concerns the use of third-party programs with Scalos, please include the names and version numbers in the following box:</div></td></tr>
      <tr>
        <td valign="top"><div class="cell">Programs:</div></td>
        <td><textarea name="programs" rows="5" cols="57" wrap="virtual"></textarea></td>
      </tr>
      <tr><td colspan="2" valign="top"><div class="cell">If you have the details of an Enforcer/Mungwall/CyberGuard 'hit', please include them in the box below:</div></td></tr>
      <tr>
        <td valign="top"><div class="cell">Enforcer/Mungwall/CyberGuard report:<br><br>(Please ensure you are using SegTracker to make the report more readable.)</div></td>
        <td><textarea name="enforcer" rows="5" cols="57" wrap="virtual"></textarea></td>
      </tr>
    </table><br>
    <input type=submit value="Report Bug"> <input type=reset value="Clear Details">
  </form>
</div>

<!-- Disclaimer -->
<div class="small">NOTE: The method for the above form is plain text e-mail. It is not encrypted in any way. By clicking the &quot;Report Bug&quot; button, you will be submitting both the details 
entered and your e-mail address. You may receive from us, a reply by e-mail, requesting more information. You hereby agree to such a possibility. We will NOT use your details for &quot;spam&quot; 
because we're not like that.</div>
<br>

<?php
	$this_page = 'reportbug.php';
	include('footer.inc');
?>

