<?php

    include_once "db.php";
    // session_start();

    // if($_SERVER['REQUEST_METHOD'] == "POST") {

    //     $myUser = mysqli_real_escape_string($connection, $_POST['user']);
    //     $myPw = mysqli_real_escape_string($connection, $_POST['pw']);

    //     $sql = "SELECT user_name FROM login WHERE user_name = '$myUser' AND pw = '$myPw';";
    //     $result = mysqli_query($connection, $sql);
    //     $row = mysqli_fetch_array($result, mysqli_assoc);
    //     $active = $row['active'];

    //     $count = mysqli_num_rows($result);

    //     //if result matches $myUser and $myPw, the table row must be 1 row

    //     if($count == 1) {
    //         //session_register("myusername"); //not sure where myusername refers to
    //         $_SESSION['login_user'] = $myUser; //not sure where login_user refers to

    //         header("location: landing.php");
    //     } else {
    //         echo "User name or Password incorrect";
    //     }
    // }

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>




    <body>
        <section id="cover" class="min-vh-100">
            <div id="cover-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-10 mx-auto text-center form p-4">
                            <h1 class="title">SIGN IN</h1>
                            <div class="px-2 signinform">
                                <form action="login_db.php" method="post">
                                    <div class="usernameSi">
                                        <p>User name</p>
                                    </div>
                                <input type="text" name="user" placeholder="" required>
                                    <div class="passwordSi">
                                        <p>Password</p>
                                    </div>
                                <input type="password" name="pw" placeholder="" required>
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
    


