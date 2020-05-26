<?php
$from = $_POST['email'];
$to = 'info@megadrupal.com';
$name = $_POST['name'].''.$_POST['surname'];
$subject = 'mail booking';
$msg = "$name<br> arrive:$_POST[surname]<br>departure:$_POST[departure]<br>adults:$_POST[adults]<br>children:$_POST[children]";

$headers = 'From: '.$from . "\r\n" .
    'Reply-To: '.$from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $msg, $headers)){
    echo '<p class="reservation-confirm">Thanks for your request for a reservation. We\'re checking availability
 and we\'ll get back to you as soon as possible.</p>';
}else{
    echo '<p>Send mail fail</p>';
}
?>