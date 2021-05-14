<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "validationweb2a6@gmail.com"; //enter you email address
        $mail->Password = "web05/2021"; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
      /*  $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email); //enter you email address
        $mail->Subject = ("$subject");
        $mail->Body = $body;*/


  //Recipients
  $mail->setFrom('from@example.com', 'Mailer');
  $mail->addAddress($email, $name);     //Add a recipient
  $mail->addReplyTo('info@example.com', 'Information');


  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = $subject;
  $mail->Body    = ' <b>'.$body.'!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
