<?php

session_start();
include_once("../admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_catagory();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}

if (isset($_POST['user_login_btn'])){
    $logmsg = $obj->user_login($_POST);
}


if(isset($_SESSION['user_id'])){
    $userId = $_SESSION['user_id'];
    if($userId){
        header('location:index.php');
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;700&display=swap');

        body {
            font-family: 'Jost', sans-serif;
            background-color: #f0f5ff;
            transition: 0.5s;
        }

        body.dark-mode {
            background-color: #121212;
        }

        .login-box {
            background-color: white;
            width: 25%;
            border-radius: 10px;
            margin: auto;
            margin-top: 50px;
            padding-top: 10px;
            padding-bottom: 30px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, .1);
            transition: 0.5s;
        }

        @media only screen and (max-width: 768px) {
            .login-box {
                width: 75%;
            }
        }

        @media only screen and (max-width: 1366px) {
            .login-box {
                width: 40%;
            }
        }

        .login-box.dark-mode {
            background-color: #2b2b2b;
        }

        .login-box h1 {
            text-align: center;
            color: #232c3d;
            transition: 0.5s;
        }

        .login-box h1.dark-mode {
            color: white;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }

        input {
            width: 80%;
            margin-bottom: 20px;
            border: none;
            background-color: #f0f5ff;
            border-radius: 10px;
            padding: 10px;
            font-size: 14px;
            transition: 0.5s;
        }

        input.dark-mode {
            background-color: #424242;
            color: white;
        }

        input:focus {
            outline: none;
        }

        form button {
            width: 20%;
            border: none;
            background-color: #63c4ff;
            border-radius: 10px;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            transition: 0.5s;
        }

        form button.dark-mode {
            background-color: #794bc4;
        }

        form button:hover {
            cursor: pointer;
            background-color: #43a0da;
        }

        form button.dark-mode:hover {
            background-color: #875ad1;
        }

        form button:focus {
            outline: none;
        }

        h2 {
            text-align: center;
            color: #232c3d;
            transition: 0.5s;
        }

        h2::before {
            content: 'Switch to Dark Mode';
        }

        h2.dark-mode {
            color: white;
        }

        h2.dark-mode::before {
            content: 'Switch to Light Mode';
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            margin-left: 48%;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            border-radius: 34px;
            transition: 0.5s;
        }

        .slider::before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            border-radius: 50%;
            transition: 0.5s;
        }

        .switch input:checked+.slider {
            background-color: #794bc4;
        }

        .switch input:checked+.slider:before {
            transform: translateX(26px);
        }
    </style>
</head>

<body>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">


            <div class="container">
                <h2 class="text-center">Log in</h2>

                <h4 class="text-danger">
                    <?php 
                    if(isset($logmsg)){
                        echo $logmsg;
                    }
                ?>
                </h4>
                <div>
      

                    <!--Form Sign In-->

                    <div class="login-box">
                        <h1>Login</h1>
                        <form action="" name="frm-login" method="post">
                            
                                <input type="email" placeholder="Email" id="fid-name" name="user_email" id="login-input" class="txt-input">

                                
                                <input type="password" name="user_password" class="txt-input" placeholder="Password"
                                    id="login-input">

                            
                            
                                <button type="submit" id="login-btn" value="Log In" name="user_login_btn" class="btn btn-success">Login</button>
                                
                           
                        </form>
                    </div>
                    <div class="theme-toggle">
                        <h2></h2>
                        <label class="switch">
                            <input type="checkbox" onclick="switchTheme()">
                            <span class="slider"></span>
                        </label>
                    </div>





                </div>

            </div>






        </div>
    </div>
    <script>
        const body = document.body;
const loginBox = document.querySelector(".login-box");
const h1 = document.getElementsByTagName("h1")[0];
const inputs = document.querySelectorAll("input");
const loginButton = document.getElementById("login-button");
const h2 = document.getElementsByTagName("h2")[0];

function switchTheme() {
  loginBox.classList.toggle("dark-mode");
  body.classList.toggle("dark-mode");
  h1.classList.toggle("dark-mode");
  inputs.forEach(input => {
    input.classList.toggle("dark-mode");
  });
  loginButton.classList.toggle("dark-mode");
  h2.classList.toggle("dark-mode");
}
        
</script>
        




   
</body>

</html>