 <?php
 require "./connectosql/connecttosql.php";

 $showsignuperror = true;
 $noduplicate = false;
 $showduplicate = true;


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $username = $_POST["signup_username"];
     $email = $_POST["signup_email"];
     $password = $_POST["signup_password"];
     $confirm_password = $_POST["signup_confirm_password"];

     $gettingemailtoverifyduplicate = " SELECT * FROM  everyuserdetail WHERE email='$email' ";

     $result = mysqli_query($conn, $gettingemailtoverifyduplicate);


     if ($result && mysqli_num_rows($result) == 0) {
         $noduplicate = true;


     } elseif ($result && mysqli_num_rows($result) > 0) {

         $showduplicate = false;

     }

     if ($noduplicate == true) {


         if ($password == $confirm_password) {

            $hashed_password = password_hash(($password), PASSWORD_DEFAULT);


             $inserdata = "INSERT INTO `everyuserdetail` (`username`, `email`, `password`,`passwordwithouthash`, `time`) VALUES ('$username', '$email', '$hashed_password','$password', current_timestamp()) ";

             if (mysqli_query($conn, $inserdata)) {

                 $getuserid = "SELECT userid FROM everyuserdetail WHERE email='$email' ";

                 $getuseridresult = mysqli_query($conn, $getuserid);

                 if ($getuseridresult && mysqli_num_rows($getuseridresult) == 1) {

                     while ($rows = mysqli_fetch_assoc($getuseridresult)) {

                         $gotuserid= $rows["userid"];


                         
                   session_start();
                   $_SESSION["userid"] = $gotuserid;
  
 
                   header("Location: index.php");

                     }

                 } else {
                     echo "Error fetching user ID";
                 }







             } else {
                 die("Error creating table: " . mysqli_error($conn));
             }

         }
         
         
         else {
             $showsignuperror = false;
         }
     }







 }














 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sign Up</title>
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







 </head>
 <style>
.alert-danger {
    margin-top: 100px;
}

body {
    font-family: 'Montserrat';

}

.signup-container {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.signup-container2 {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}

form {
    max-width: 300px;
    margin: 0 auto;
}

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
}

.signupbutton {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

.signupbutton:hover {
    background-color: #45a049;
}

.signup {
    background-color: blue;
}
 </style>

 <body>











     <?php


require "navbar.php";

?>









     <?php

     if ($_SERVER["REQUEST_METHOD"] == "POST" && $showsignuperror == false) {

         echo ' <div class="alert alert-danger position-absolute w-100" role="alert">password do not match </div>';
     }

     if ($_SERVER["REQUEST_METHOD"] == "POST" && $showduplicate == false) {

         echo ' <div class="alert alert-danger position-absolute w-100" role="alert">email already exists </div>';
     }


     ?>



     <div class="signup-container">
         <div class="signup-container2">
             <form action="signup.php" method="post">
                 <h2>Sign Up</h2>
                 <label for="username">Username:</label>
                 <input type="text" id="username" name="signup_username" required>

                 <label for="email">Email:</label>
                 <input type="email" id="email" name="signup_email" required>

                 <label for="password">Password:</label>
                 <input type="password" id="password" name="signup_password" required>

                 <label for="confirm-password">Confirm Password:</label>
                 <input type="password" id="confirm-password" name="signup_confirm_password" required>

                 <button type="submit" class="mt-3 signup signupbutton">Sign Up</button>


                 <?php
             echo '<div class="donthaveaaccount"><a href="login.php" id="signupLink">Already have an account?</a></div>';
             ?>

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