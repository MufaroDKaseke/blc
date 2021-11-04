<?php

// Send Message
function sendMessage($data) {
  require '../phpmailer/PHPMailerAutoload.php';
  require '../includes/email_credentials.php';

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 4;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'mail.blc.co.zw';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = EMAIL;                 // SMTP username
  $mail->Password = PASSWORD;                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                                    // TCP port to connect to

  $mail->setFrom('admin@blc.co.zw', 'Contact Form @blc.co.zw');
  $mail->addAddress('info@blc.co.zw', 'Admin');     // Add a recipient
  //$mail->addReplyTo('info@omorfotechlabs.co.zw', 'Omorfo Tech Labs');
  //$mail->addCC('cc@example.com');
  //$mail->addBCC('bcc@example.com');

  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = 'New message from blc.co.zw';
  $mail->Body    = '<b>' . $data['name'] . '</b><br />
  <b>' . $data['phone_number'] . '</b><br />
  <b><a href="mailto:' . $data['email'] . '">' . $data['email'] . '</b><br /><br /><br />
  ' . nl2br($data['message']);
  //$mail->AltBody = 'This is a test for Omorfo Tech Labs contact form';

  if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
    return false;
  } else {
    //echo 'Message has been sent';
    return true;
  }
}

if (isset($_POST['action'])) {
  if ($_POST['action'] === 'send_message') {
    if (sendMessage($_POST)) {
      ?>
      <span class="text-success"><i class="fa fa-check"></i> Message Sent</span>
      <?php
    } else {
      ?>
      <span class="text-danger"><i class="fa fa-exclamation-triangle"></i> Failed To Send</span>
      <?php
    }
  }
}
?>