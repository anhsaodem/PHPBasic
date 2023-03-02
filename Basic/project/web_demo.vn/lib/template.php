<?php
function get_header($version = ""){
    if(!empty($version)){
        $path_header = "inc/header-$version";
    }else{
        $path_header = "inc/header.php";
    }
    if(file_exists($path_header)){
        require $path_header;
    }else{
        echo "Header is not avaliable";
    }
}
function get_footer($version = ""){
    if(!empty($version)){
        $path_footer = "inc/footer-$version";
    }else{
        $path_footer = "inc/footer.php";
    }
    if(file_exists($path_footer)){
        require $path_footer;
    }else{
        echo "Footer is not avaliable";
    }
}


/**
 * Ham kiem tra username co phu hop voi regex cho truoc hay ko
 */
function is_username($username)
{
    $partern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partern, $username)) {
        return FALSE;
    } else {
        return TRUE;
    }
}

/**
 * Function kiem tra password co phu hop ko
 */

 function is_password($password){
    $parternpass = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if(!preg_match($parternpass,$password)){
        return FALSE;
    }else{
        return TRUE;
    }
 }
 function form_err($label_err){
     global $error;
    if (!empty($error["{$label_err}"])) echo $error["{$label_err}"];
 }