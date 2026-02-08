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
<?php make_title('news', 0, 'news.gif', 110, 30, 'News'); ?>

<p>This page holds the very latest up-to-date news regarding Scalos. Come back often to get the low-down on what's happening both inside and outside of the project.</p>

<!-- Latest news -->
<?php make_title('latest', 1, 'latest.gif', 270, 30, 'Latest Scalos News'); ?>
<br>

<div align="center">
  <table cols="3" width="90%" bgcolor="#dddddd" border="0" cellpadding="1" cellspacing="1" summary="News">
  <tr>
    <td colspan="3" bgcolor="#cccccc"><div class="tabletop">News is listed in date order, latest to oldest.</div></td>
  </tr>
  <tr bgcolor="#222266">
    <!-- Header row -->
    <td width="120"><center><font size="2" face="helvetica" color="#dddddd"><b>Date</b></font></center></td>
    <td width="100"><center><font size="2" face="helvetica" color="#dddddd"><b>Type</b></font></center></td>
    <td width="*"><center><font size="2" face="helvetica" color="#dddddd"><b>Details</b></font></center></td>
  </tr>
<?php
    read_news_table_file('news.txt');
?>
  </table><br>
</div>

<?php
	$this_page = 'news.php';
	include('footer.inc');
?>

