<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "C:\wamp64\www\webb5\PHPMailer\PHPMailer.php";
        require_once "C:\wamp64\www\webb5\PHPMailer\SMTP.php";
        require_once "C:\wamp64\www\webb5\PHPMailer\Exception.php";

        $mail = new PHPMailer();


        
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "mayhemicquotes@gmail.com";
        $mail->Password = '2412730424';
        $mail->Port = 25;
        $mail->SMTPSecure = "tls";

        //Email Settings
        
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("samarhrizi4@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $body;

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
