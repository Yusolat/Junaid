<?php
$to = 'info@megadrupal.com';
$from = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$msg = $_POST['message'];


$headers = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $msg, $headers)){
    echo '<p class="reservation-confirm">Thanks for your contact. We will reply soon.</p>';
}else{
    echo '<h2>Send email fail</h2>';
}
?>