<?php
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

    $header = "From: \"Plumber's Student Design\"<psd@mcgilleus.ca>" . $break;
	$header .= "Reply-to: \"Plumber's Student Design\"<psd@mcgilleus.ca>" . $break;
	$header .= "MIME-Version: 1.0" . $break;
    $header .= "Content-Type: text/plain;" . $break . " boundary=\"$boundary\"" . $break;

    mail($email, $subject, $message, $header);
?>

<p><?php echo($desc); ?></p>