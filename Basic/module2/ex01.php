<?php
/**
 * Bai: Noi chuoi trong PHP;
 */

//String can access in ' ' or " "
$str1 = 'Hello! ';
$str2 = 'PHP';

//Gan va noi
$str = $str1 . $str2;
echo $str . '</br>';

//Noi va hien thi
echo $str1 . $str2 . " 2022 </br>";
//Hien thi trong chuoi

echo "Wellcome {$str1} {$str2} </br></br>";

$dataSource = "data:image/jpeg;base64,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";
echo '<img src="' . $dataSource . '" alt="Anh thien nhien">';
$imgAvatar = "https://haycafe.vn/wp-content/uploads/2022/02/Anh-gai-xinh-Viet-Nam.jpg";
$username = "volodyaChan";
$password = "volodyaChan";
$formHtml = '<form action="action_page.php" method="post">
                <div class="imgcontainer">
                <img src="'.$imgAvatar.'" alt="Avatar" class="avatar" width="150" height ="140">
                </div></br>
                <div class="container">
                <label for="uname"><b>Username</b></label></br>
                <input type="text" placeholder="Enter Username" name="'.$username.'" required></br>

                <label for="psw"><b>Password</b></label></br>
                <input type="password" placeholder="Enter Password" name="'.$password.'" required></br>
                </br>
                <button type="submit">Login</button></br>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <div class="container" style="background-color:#f1f1f1"></br>
                <button type="button" class="cancelbtn">Cancel</button></br>
                <span class="psw">Forgot <a href="#">password?</a></span></br>
                </div>
            </form>';
echo $formHtml;
