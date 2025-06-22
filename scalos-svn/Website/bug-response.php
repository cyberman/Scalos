<?php
    // Define variables
    $page_title = 'Thank You';
    $page_nav_doc = 'features';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>

<!-- Bug response -->
<div align="center"> 
  <h1>Thanks from the Scalos team!</h1>
  <hr size="1" width="90%">
  <p>Thanks for reporting this bug. We'll check it out and try to get it fixed as soon as possible.<br><br>
  If your browser has opened this page into a new window, please close it to return to the <a href="http://scalos.noname.fr/reportbug.php">Scalos site</a>. Thanks.</p>
  <hr size="1" width="90%">
</div>

<?php
	$this_page = 'bug-response.php';
	include('footer.inc');
?>

