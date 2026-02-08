<?php 
    // Include the table functions
    include('functions_news.inc');

    // Define variables
    $page_title = 'Scalos - News';
    $page_nav_doc = 'news';

    // Header(s)
    include('header.inc');
    include('header_script.inc');
?>
<!-- News -->
<br>
<?php make_title('oldnews', 0, 'oldnews.gif', 150, 30, 'Old Scalos News'); ?>
<br><br>

<div align="center">
  <table cols="3" width="90%" bgcolor="#dddddd" border="0" cellpadding="1" cellspacing="1" summary="News">
     <tr>
      <td colspan="3" bgcolor="#cccccc"><div class="tabletop">This news archive is listed in date order, latest old news to oldest old news... ;)</div></td>
    </tr>
    <tr bgcolor="#222266">
      <!-- Header row -->
      <td width="100"><center><font size="2" face="helvetica" color="#dddddd"><b>Date</b></font></center></td>
      <td width="100"><center><font size="2" face="helvetica" color="#dddddd"><b>Type</b></font></center></td>
      <td width="*"><center><font size="2" face="helvetica" color="#dddddd"><b>Details</b></font></center></td>
    </tr>
<?php
    read_news_table_file('oldnews.txt');
?>
  </table><br>
</div>

<?php
	$this_page = 'oldnews.php';
	include('footer.inc');
?>

