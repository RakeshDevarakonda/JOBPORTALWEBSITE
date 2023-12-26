<?php




require "./connectosql/connecttosql.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


$showalert1 = true;
$showalert2 = true;
$showalert3 = true;


if (isset($_POST['submitmail'])) {

    $email = $_POST["sendotpemail"];




    $checkmail = " SELECT * FROM  everyuserdetail WHERE email='$email' ";

    $result1 = $conn->query($checkmail);




    if ($result1 && $result1->num_rows == 1) {


        $showalert1 = true;

        $resetCode = bin2hex(random_bytes(3));


        session_start();
        $_SESSION["resetcode"] = $resetCode;
        $_SESSION["email"] = $email;





        $updateCodeQuery = "UPDATE everyuserdetail SET resetcode='$resetCode' WHERE email='$email' ";
        $conn->query($updateCodeQuery);

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = false;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'rakeshdevarakonda2000@gmail.com';      //Your Gmail Id
            $mail->Password = 'izbcziasskpefvkc';      //Your App password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('rakeshdevarakonda2000@gmail.com', 'Reset Password');
            $mail->addAddress($email);

            // $mail->addReplyTo('rakeshdevarakonda2000@gmail.com', 'Reset Password23');


            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Reset Password';
            $mail->Body = 'Yor Reset Password Code is - ' . $resetCode;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();





            header("Location:otp.php");


            echo 'Message has been sent';



        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }




    } else {
        $showalert1 = false;

    }



}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+JP:wght@300&family=Plus+Jakarta+Sans:wght@800&family=Poppins:wght@300&family=Rubik+Doodle+Triangles&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/navbarstyle.css">

    <style>
    .page-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100vw;
    }

    .login-container {
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px;
        width: 50vh;
        /* height: 50vh; */
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
        color: #555;
    }

    input {
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
    }

    .loginbutton {
        background-color: blue;
        color: #fff;
        padding: 10px;
        margin-top: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    .loginbutton:hover {
        background-color: #45a049;
    }

    .donthaveaaccount {
        margin-top: 10px;
        text-align: center;
    }

    .alert-danger {
        margin-top: 100px;
    }

    .forgot_password {
        color: blue;
        margin: 5px 0px;
    }

    .forgot_password:after {
        width: 0px;
    }

    .forgot_password:hover {
        color: blue;
    }
    </style>

</head>

<body>

    <?php


    require "./navbar.php";

    ?>




    <?php


    if (isset($_POST['submitmail']) && $showalert1 == false) {

        echo ' <div class="alert alert-danger position-absolute w-100" role="alert"> email id not registerd </div>';
    }


    ?>


    <div class="page-container">
        <div class="login-container">


            <form action="forgotpassword.php" method="post" id="emailenter">
                <h2>Forgot Password</h2>
                <label for=" username">Enter Your Email:</label>
                <input type="email" id="username" name="sendotpemail" required>
                <button type="submit" name="submitmail" class="login loginbutton">Send OTP</button>
            </form>







        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script src="./scripts/navbar.js"></script>


</body>

</html>