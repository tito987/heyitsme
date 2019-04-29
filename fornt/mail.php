<?PHP
$sender = 'someone@somedomain.tld';
$recipient = 'mohamedamine.ouerfelli@esprit.tn';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' ;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>