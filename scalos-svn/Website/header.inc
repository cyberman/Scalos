<?php
    // Function to display a title graphic with anchor and optional horizontal rule
    function make_title($title_anchor, $hr, $title_graphic, $title_w, $title_h, $title_alt) {
        echo '<a name="'.$title_anchor.'"></a><div align="center">';
        if( $hr == 1 ) { echo '<hr size="1" width="90%"><br>'; }
        echo '<img src="gfx/titles/'.$title_graphic.'" width="'.$title_w.'" height="'.$title_h.'" alt="'.$title_alt.'"></div>';
    }

    // Function to display a "Back to top" image and link
    function back_to_top() {
        echo '<div align="center"><a href="#top"><img src="gfx/backtotop.gif" width="90" height="10" border="0" alt=""></a></div>';
    }
?>
<!DOCTYPE html public "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
<title><?php echo $page_title; ?></title>

<link rev="made" href="mailto:webmaster@scalos.noname.fr">
<link rel="copyright" href="mailto:webmaster@scalos.noname.fr">
<link rel="SHORTCUT ICON" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="author" content="Chris&nbsp;Haynes">
<meta name="description" content="<?php echo $page_title; ?>">
<meta name="keywords" content="Amiga, Scalos, Workbench replacement">
<meta name="robots" content="noindex, nofollow">
<style type="text/css"><!--
<?php
    // If $page_title is "Scalos - The Amiga Desktop Replacement" then the margin is 0, otherwise, it's 5
    if( $page_title == 'Scalos - The Amiga Desktop Replacement' ) {
        echo 'body {margin: 0px;}';
    } else {
        echo 'body {margin: 5px;}';
    }
?>
  p {font:normal 12px arial, helvetica, sans-serif; text-align:justify}
  .small {font:normal 10px arial, helvetica, sans-serif; color:#000000}
  p.footer {font:normal 10px arial, helvetica, sans-serif; text-align:center; color:#000000}
  .cellheader {font:bold 12px arial, helvetica, sans-serif; text-align:center; color:#dddddd}
  .tabletop {font:normal 12px arial, helvetica, sans-serif; text-align:justify; color:#002244}
  .cell {font:normal 12px arial, helvetica, sans-serif; text-align:justify; color:#002244}
  .cellarchive {font:normal 12px arial, helvetica, sans-serif; text-align:left; color:#002244}
  .cellbold {font:bold 12px arial, helvetica, sans-serif; text-align:justify; color:#002244}
  .cellsize {font:normal 12px arial, helvetica, sans-serif; text-align:center; color:#002244}
  .centered {font:normal 12px arial, helvetica, sans-serif; text-align:center}
  .linkcell {font:normal 12px arial, helvetica, sans-serif; text-align:center; color:#002244; background-color:#bcbcbc}
  h4 {font:normal 16px arial, helvetica, sans-serif; color:#002244}
  li {font:normal 12px arial, helvetica, sans-serif; text-align:justify; color:#002244}
  a:hover {color:#6c6c9c}
  hr {color:#222244}
//--></style>
