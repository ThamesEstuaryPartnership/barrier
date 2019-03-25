<?php

if($_POST && isset($_FILES['my_file']))
{

    $from_email         = 'fishroadmap@gmail.com'; //from mail, it is mandatory with some hosts
    $recipient_email    = 'w.bodnar@ucl.ac.uk'; //recipient email (most cases it is your personal email)

    //Capture POST data from HTML form and Sanitize them,
    $name    = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //sender name
    $gps    = filter_var($_POST["gps"], FILTER_SANITIZE_STRING); //sender name
    $detail    = filter_var($_POST["detail"], FILTER_SANITIZE_STRING); //sender name
    $reply_to_email = filter_var($_POST["sender_email"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header

    $message =
		"Barrier: $name\n
		GPS: $gps\n
		Message: $detail\n
		E-mail: $reply_to_email \n ";

    $file_tmp_name    = $_FILES['my_file']['tmp_name'];
    $file_name        = $_FILES['my_file']['name'];
    $file_size        = $_FILES['my_file']['size'];
    $file_type        = $_FILES['my_file']['type'];

    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

        $boundary = md5("sanwebe");
        //headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From:".$from_email."\r\n";
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

        //body plain text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($message));

        //attachment file
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
        $body .= $encoded_content;

    $sentMail = @mail($recipient_email, $subject, $body, $headers);

    $success =
    "<div>
      <label>Submission successful. Thank you for contributing to the Roadmap project.</label>
    </div>";

    $fail =
    "<div>
      <label>Sorry something went wrong, please try again. If the problem persist, please try to submit the information online or send us an email.</label>
    </div>";

    if ($sentMail)
    {
    echo "$success"; // success
  } else {
    echo "$fail"; // failure
  }

}

?>
