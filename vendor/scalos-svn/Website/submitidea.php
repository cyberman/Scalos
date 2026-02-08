<?php
    // Define variables
    $page_title = 'Scalos - Submit An Idea';
    $page_nav_doc = 'features';

    // Header(s)
    include('header.inc');
    include('header_script_idea.inc');
?>
<!-- Submit an idea -->
<br>
<?php make_title('submitidea', 0, 'submitidea', 230, 30, 'Submit An Idea'); ?>
<br>

<p>We are always on the look out for new, fresh ideas regarding Scalos and its development. If you think you have an idea that Scalos and its users would benefit from, tell us! Just fill in the following 
form and click the &quot;Submit Idea&quot; button. Click &quot;Clear Details&quot; to start over.</p>
<br>

<!-- If no javascript, inform user to check form fully before submitting -->
<noscript>
  <div class="small">Javascript is used to check that you enter the correct details into this form. Your browser has it disabled, or is not javascript-capable. Please check the details fully before submitting 
  the form. Thanks.<br><br></div>
</noscript>

<div align="center">
  <!-- SubmitIdea form -->
  <form name="SubmitIdea" method=post action="sendidea.php" onSubmit="return CheckFullForm(SubmitIdea);">
    <table cols="2" width="587" border="0" cellspacing="4" cellpadding="4" bgcolor="#bbbbbb" summary="Submit an idea form">
      <tr>
        <td valign="top"><p>Name/Nickname:</p></td>
        <td><input type=text size="60" name="name" value="" maxlength=60 onChange="CheckField(this, 'You must supply a name/nickname.'); return true"></td>
      </tr>
      <tr>
        <td valign="top"><div class="cell">E-mail address:</div></td>
        <td><input type=text size="60" name="email" value="" maxlength=100 onChange="CheckField(this, 'You must supply an e-mail address.'); return true"></td>
      </tr>
      <tr>
        <td valign="top"><p>Subject of idea:</p></td>
        <td><input type=text size="60" name="subject" value="" maxlength=60 onChange="CheckField(this, 'You must supply a subject.'); return true"></td>
      </tr>
      <tr>
        <td valign="top"><p>Details:</p></td>
        <td><textarea name="details" rows="10" cols="57" wrap="virtual" onChange="CheckField(this, 'You must supply some details.'); return true"></textarea></td>
      </tr>
    </table>
    <br><input type=submit value="Submit Idea"> <input type=reset value="Clear Details">
  </form>
</div>

<p>Please bear with us. We have received a lot of e-mail regarding the development of Scalos and it will take us time to go through each request/idea. Please be aware that whilst we will make every effort 
to ensure that as many ideas are implemented into Scalos as possible, we cannot guarantee that a particular idea will make it through. Not every idea submitted to us is suitable for everyone.</p>

<!-- Disclaimer -->
<div class="small">NOTE: The method for the above form is plain text e-mail. It is not encrypted in any way. By clicking the &quot;Submit Idea&quot; button, you will be submitting both the details entered 
and your e-mail address. You may receive from us, a reply by e-mail, requesting more information. You hereby agree to such a possibility. We will NOT use your details for &quot;spam&quot; because we're not 
like that.</div>
<br>

<?php
	$this_page = 'submitidea.php';
	include('footer.inc');
?>

