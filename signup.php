<?php

include_once 'db1.php';



$firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
$lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
$user = mysqli_real_escape_string($connection, $_POST['user']);
$pw = mysqli_real_escape_string($connection, $_POST['pw']);

$sql = "INSERT INTO login(first_name, last_name, user_name, pw) 
VALUES ('$firstName', '$lastName', '$user', '$pw')";
mysqli_query($connection, $sql);

header("location: login.php")

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>
<body>

        <section id="cover2" class="min-vh-100">
            <div id="cover-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 mx-auto text-center form p-4">
                            <h1 class="title">SIGN UP</h1>
                            <div class="px-2 signinform">
                            <form action="login.php" method="post">
                                    <div class="usernameSi">
                                        <p>First name</p>
                                    </div>
                                <input type="text" name="firstName" placeholder="">
                                    <div class="usernameSi">
                                        <p>Last name</p>
                                    </div>
                                <input type="text" name="lastName" placeholder="">
                                    <div class="passwordSi">
                                        <p>User name</p>
                                    </div>
                                <input type="text" name="user" placeholder="">
                                <div class="usernameSi">
                                        <p>Password</p>
                                    </div>
                                <input type="password" name="pw" placeholder="">
                                    <div class="passwordSi">
                                        <p>Confirm password</p>
                                    </div>
                                <input type="password" name="confirm_pw" placeholder="">
                                <br>
                                <button type="submit" name="submit" class="btn btn-outline-light gobtn"><b>GO ! <i class="fa fa-paw animate__animated animate__fadeIn" aria-hidden="true"></i></b></button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    



</body>

</html>

