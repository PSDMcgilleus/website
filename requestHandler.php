<?php
    // testing
    require_once "Mail.php";

    $from = "gherrerarausaure@gmail.com";
    $host = "ssl://smtp.gmail.com";
    $port = "465";
    $username = 'gherrerarausaure@gmail.com';
    $password = '';

    $fullname = $_POST['fullname'];
    $group = $_POST['affiliation'];
    $email = $_POST['email'];
    $deadline = $_POST['deadline'];
    $project = $_POST['project'];
    $desc = $_POST['description'];

    $subject = "New Project Request";
    $message = $desc;

    $break = "\r\n";
    $boundary = "-----=" . md5(rand());

/*     $header = "From: \"Plumber's Student Design\"<psd@mcgilleus.ca>" . $break;
	$header .= "Reply-to: \"Plumber's Student Design\"<psd@mcgilleus.ca>" . $break;
	$header .= "MIME-Version: 1.0" . $break;
    $header .= "Content-Type: text/plain;" . $break . " boundary=\"$boundary\"" . $break;
 */

    $headers = array ('From' => $from, 'To' => $email,'Subject' => $subject);
    $smtp = Mail::factory('smtp',
        array ('host' => $host,
            'port' => $port,
            'auth' => true,
            'username' => $username,
            'password' => $password));
    
    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        echo($mail->getMessage());
    } else {
        echo("Message successfully sent!\n");
    }

    // mail($email, $subject, $message, $header);
?>

<p><?php echo($desc); ?></p>