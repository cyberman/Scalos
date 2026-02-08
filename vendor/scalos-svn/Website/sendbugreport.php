<?php
  $errorurl = "http://scalos.noname.fr/bug-error.php" ;
  $thankyouurl = "http://scalos.noname.fr/bug-response.php" ;

  $fromemail = $_REQUEST['email'] ;
  $name = $_REQUEST['name'] ;
  $scalosversion = $_REQUEST['scalosversion'] ;
  $formsubject = $_REQUEST['subject'] ;
  $details = $_REQUEST['details'] ;
  $os = $_REQUEST['os'] ;
  $processor = $_REQUEST['processor'] ;
  $graphics = $_REQUEST['graphics'] ;
  $screendepth = $_REQUEST['screendepth'] ;
  $programs = $_REQUEST['programs'] ;
  $enforcer = $_REQUEST['enforcer'] ;

  if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $fromemail ) )
  {
	header( "Location: $errorurl" );
	exit ;
  }

  $mailto =  "Scalos@VFEmail.net" ;
  $subject = "Scalos Bug Report Results" ;
  $headers = "From: \"$name\" <$fromemail>\r\n" .
	"Reply-To: \"$name\" <$fromemail>\r\n" .
	"X-Mailer: sendbugreport.php\r\n" .
	"Content-Type: text/plain; charset=\"iso-8859-1\"" ;

  $msgbody = "Scalos Bug Report\n\n" .
	"Name of sender: $name\n" .
	"Email of sender: $fromemail\n" .
	"\n" .
	"Scalos Version:\n" .
	"$scalosversion\n" .
        "\n" .
	"Subject of bug:\n" .
	"$formsubject\n" .
        "\n" .
	"Details:\n" .
	"$details\n" .
        "\n" .
	"Operating System:\n" .
	"$os\n" .
        "\n" .
	"Processor:\n" .
	"$processor\n" .
        "\n" .
	"Graphics system:\n" .
	"$graphics\n" .
        "\n" .
	"Screen Depth:\n" .
	"$screendepth\n" .
        "\n" .
	"Programs:\n" .
	"$programs\n" .
	"\n" .
	"Enforcer Reports:\n" .
        "$enforcer\n" ;

  mail( $mailto, $subject, $msgbody, $headers );

  header( "Location: $thankyouurl" );
?>
