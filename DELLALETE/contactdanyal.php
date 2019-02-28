<?
$mailto = 'danyal@dellavallelab.com' ;

$subject = "information request" ;

$formurl = "http://www.dellavallelab.com/contactus.html" ;
$errorurl = "http://www.dellavallelab.com/consultantserror.html" ;
$thankyouurl = "http://www.dellavallelab.com/thankyou.html" ;

$uself = 0;

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$name = $_POST['name'] ;
$coname = $_POST['coname'] ;
$address1 = $_POST['address1'] ;
$address2 = $_POST['address2'] ;
$city = $_POST['city'] ;
$state = $_POST['state'] ;
$zipcode = $_POST['zipcode'] ;
$country = $_POST['country'] ;
$telephone = $_POST['telephone'] ;
$fax = $_POST['fax'] ;
$email = $_POST['email'] ;
$comments = $_POST['comments'] ;
$http_referrer = getenv( "HTTP_REFERER" );

if (!isset($_POST['email'])) {
	header( "Location: $formurl" );
	exit ;
}

if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $email ) ) {
	header( "Location: $errorurl" );
	exit ;
}

if (get_magic_quotes_gpc()) {
	$comments = stripslashes( $comments );
}

$messageproper =

	"This message was sent from:\n" .
	"$http_referrer\n" .
	"--------------------------------------------\n" .
	"Name of sender: $name\n" .
	"Company Name: $coname\n" .
	"Email: $email\n" .
	"Address (line 1): $address1\n" .
	"Address (line 2): $address2\n" .
	"City: $city\n" .
	"State/Province: $state\n" .
	"Zip Code: $zipcode\n" .
	"Country: $country\n" .
	"Telephone Number: $telephone\n" .
	"Fax Number: $fax\n" .
	
	"----------------- COMMENTS -----------------\n\n" .
	$comments .
	"\n\n--------------------------------------------\n" ;

mail($mailto, $subject, $messageproper,
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.07" );
header( "Location: $thankyouurl" );
exit ;

?>
