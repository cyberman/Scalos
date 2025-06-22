<?php
  $errorurl = "http://scalos.noname.fr/idea-error.php" ;
  $thankyouurl = "http://scalos.noname.fr/idea-response.php" ;

  $fromemail = $_REQUEST['email'] ;
  $name = $_REQUEST['name'] ;
  $formsubject = $_REQUEST['subject'] ;
  $details = $_REQUEST['details'] ;

  if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $fromemail ) )
  {
	header( "Location: $errorurl" );
	exit ;
  }

  $mailto =  "Scalos@VFEmail.net" ;
  $subject = "Scalos Ideas Form Results" ;
  $headers = "From: \"$name\" <$fromemail>\r\n" .
	"Reply-To: \"$name\" <$fromemail>\r\n" .
	"X-Mailer: sendidea.php\r\n" .
	"Content-Type: text/plain; charset=\"iso-8859-1\"" ;

  $msgbody = "Scalos Idea Submission\n" .
	"\n" .
	"Name of sender: $name\n" .
	"Email of sender: $fromemail\n" .
	"\n" .
	"Subject:\n" .
        "$formsubject\n\n" .
	"\n" .
	"Details:\n" .
	"$details\n" ;

  mail( $mailto, $subject, $msgbody, $headers );

  header( "Location: $thankyouurl" );
?>
