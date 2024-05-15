<?php
require_once('database.php');


// Check if OTP is submitted
if (isset($_POST["otp"])) {
    $user_otp = $_POST["otp"];

    // Check if OTP matches
    if ($user_otp == $_SESSION["otp"]) {
        // OTP matched, show password reset form
        header('Location: passchange.php');
        exit; // Exit to prevent further execution
    } else {
        echo '<div class="text-center"><small class="text-center alert alert-danger d-block">Invalid OTP. Please try again.</small></div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../css/reg-log.css">
    <style>
        /* body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .otp-container {
            text-align: center;
        }

        .otp-input {
            padding: 10px;
            margin: 10px;
            font-size: 16px;
        }

        .submit-btn {
            padding: 12px 24px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        } */
    </style>
</head>

<body>
    <section id="title" class="mb-3">
        <div class="container-fluid">
            <h1>Foodie</h1>
        </div>
    </section>
    <section class="mt-5">
        <div id="move" class="center w-25">
            <!--Form Title-->
            <h5>Verify OTP</h5>
            <form method="post" action="" class="pt-2 pb-5">
                <div class="txt_field my-5">
                    <label for="otp">OTP</label>
                    <input type="text" class="otp-input ps-0" id="otp" name="otp" required placeholder="Enter OTP">
                </div>
                <div class="m-auto text-center">
                    <input type="submit" class="btn button" value="Verify">
                </div>
            </form>
        </div>
    </section>
</body>
<style>
    .txt_field label {
        position: unset;
        transform: none;
    }
</style>

</html>
<script>
    document.getElementById("otp").addEventListener("click", () => {
        document.querySelector(".txt_field").style.borderBottom = "2px solid #ff8a41";
        document.querySelector(".txt_field label").style.color = " #ff8a41";

    })
</script>

