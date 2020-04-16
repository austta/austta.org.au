<?php
// Create the email and send the message
$to = "webmaster@timetable.org.au";
$subject = "Membership renewal or joining form";
$body = "You have received a new message from a website contact form.\r\n\r\n"
        ."Here are the details:\r\n\r\n";
// Array of possible variables from each page.
$postNameArr = array('title', 'name', 'preferred_name', 'postal_address',
                     'country', 'mobile', 'landline', 'email', 'memb_type',
                     'payment_type', 'student_dob', 'student_where',
                     'signature', 'sign_date', 'start_month', 'mailout_method',
                     'distlist');
foreach ($postNameArr as $postName)
    {
        if (array_key_exists($postName, $_POST) && !empty($_POST[$postName]))
        {
             $body .= $postName.": "
                      .strip_tags(htmlspecialchars($_POST[$postName]))."\r\n";
        }
    }
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$body = wordwrap($body, 70, "\r\n");

// The machine it is from
$header = "From: aattcor@daintree.myownserver.net";
// Who is responisble
$header .= "\r\nReply-To: webmaster@timetable.org.au";
if(mail($to, $subject, $body, $header))
  header("Location: https://www.timetable.org.au/thankyou.html");
else {
  http_response_code(500);
}
?>
