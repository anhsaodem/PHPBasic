<?php
require 'lib/template.php';
session_start();
function show_data($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
// show_data($_POST);

// Kiem tra nguoi dung da submit form hay chua
if (isset($_POST["submit_btn"])) {
    //Kiem tra thong tin username
    //B1: Phat co
    $error = array();
    if (empty($_POST["username"])) {
        //B2: Ha co
        $error["username"] = "Ban chua nhap ten dang nhap";
    } else {
        if (!strlen($_POST["username"]) >= 6 && strlen($_POST["username"]) <= 32) {
            $error["username"] = "Username co so ky tu tu 6-32";
        } else {

            if (!is_username($_POST["username"])) {
                $error["username"] = "Username cho phep su dung chu cai so va dau gach duoi";
            } else {
                $username = $_POST["username"];
            }
        }
    }
    //Kiem tra thong tin password
    if (empty($_POST["password"])) {
        //B2: Ha co
        $error["password"] = "Ban chua nhap ten dang nhap";
    } else {

        if (!is_password($_POST["password"])) {
            $error["password"] = "Mat khau chua in hoa va lon hon 5 ky tu";
        } else {
            $password = $_POST["password"];
        }
    }

    //Kiem tra thong tin gioi tinh
    if (empty($_POST["gender"])) {
        //B2: Ha co
        $error["gender"] = "Ban chua nhap gioi tinh";
    } else {
        $gender = $_POST["gender"];
    }
    //
    //Kiem tra thong tin checkbox
    if (empty($_POST["check_license"])) {
        //B2: Ha co
        $error["check_license"] = "Ban chua check_license";
    } else {
        $check_license = $_POST["check_license"];
    }

    if (empty($error)) {
        if (($_POST["username"] == "admin123") && ($_POST["password"] == "Admin@123")) {
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = "admin123";
            $redirect_to = $_POST["redirect_to"];
            header("Location: {$redirect_to}");
        } else {
            $error["login"] = "MAT KHAU VA USERNAME CHUA TRUNG KHOP";
        }
    }
}
?>

<html>

<head>
    <title>title</title>
</head>

<body>
    <style>
        body {
            margin: 0px;
            padding: auto;
        }

        #login-form {
            width: 600px;
            margin: 50px 50px;
            padding: 20px 20px;
            border: 1px solid red;
            /* text-align: center; */
            background-color: #5fed9d;
        }

        #login-form form {
            padding: auto;
            margin: 5px 25px;
        }

        #login-form form h1 {
            font-size: 30px;
            text-align: center;
            color: green;
            font-weight: bold;
            padding: 20px;
        }

        p.message-errors {
            color: red;
        }
    </style>
    <div id="login-form">
        <form action="" method="post">
            <h1>LOGIN FORM</h1>
            <p class="message-errors"><?php if (!empty($error["login"])) echo $error["login"]; ?> </p>

            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <p class="message-errors"><?php form_err("username") ?> </p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <p class="message-errors"><?php form_err("password") ?> </p>
            <select name="gender">
                <label for="cars">Choose gender:</label>
                <option value="" selected>---Chon gioi tinh---</option>
                <option value="male">Nam</option>
                <option value="female">Nu</option>
            </select>
            <p class="message-errors"><?php form_err("gender") ?> </p>
            <input type="checkbox" name="check_license" id="check_license">
            <label>Ban co dong y voi dieu khoan da chon hay ko?</label>
            <p class="message-errors"><?php form_err("check_license") ?> </p>
            <input type="hidden" name="redirect_to" value="index.php">
            <br>
            <button type="submit" value="Login" name="submit_btn">Login</button>

        </form>
    </div>

</body>

</html>