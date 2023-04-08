<?php
function get_header()
{
    $path_header = 'inc/header.php';
    if (file_exists($path_header)) {
        require_once($path_header);
    }
}
function get_footer()
{
    $path_footer = 'inc/footer.php';
    if (file_exists($path_footer)) {
        require_once($path_footer);
    }
}
function show_data($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
//Getdate format
function getDateFormat($date, $format)
{
    $dateObj = date_create($date);
    return date_format($dateObj, $format);
}
//Get operator
function getOperator($filters)
{
    if (strpos($filters, 'WHERE') !== false) {
        return ' AND ';
    }
    return ' WHERE ';
}

function getPaginateUrl($page)
{
    //Xử lý query string
    $query = [];
    $isPage = false;
    $currentIndex = null;
    if (!empty($_SERVER['QUERY_STRING'])) {
        $query = explode('&', $_SERVER['QUERY_STRING']);

        foreach ($query as $index => $item) {
            $itemArr = explode('=', $item);
            if ($itemArr[0] == 'page') {
                $isPage = true;
                $currentIndex = $index;
                break;
            }
        }
    }

    if (!$isPage) {
        array_push($query, 'page=' . $page);
    } else {
        $query[$currentIndex] = 'page=' . $page;
    }

    return '?' . implode('&', $query);
}

//Hàm xử lý session
function setSession($key, $value)
{
    $_SESSION[$key] = $value;
}

function getSession($key)
{
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    }
    return false;
}

function removeSession($key)
{
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
}

function getFlashData($key)
{
    $data = getSession($key);
    removeSession($key);

    return $data;
}

function getError($fieldName)
{
    global $errors;
    if (!empty($errors[$fieldName])) {
        return reset($errors[$fieldName]);
    }

    return false;
}

function getOld($fieldName)
{
    global $old;
    if (!empty($old[$fieldName])) {
        return $old[$fieldName];
    }
    return false;
}

function getMessage($message, $type = 'success  ')
{
    return !empty($message) ? '<div class="alert alert-' . $type . '">' . $message . '</div>' : '';
}

function redirect($to)
{
    header('Location: ' . $to);
    exit;
}

function reload()
{
    header("Refresh:0");
    exit;
}
