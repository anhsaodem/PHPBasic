<?php
session_start();
require_once 'function.php';
require_once 'Database/DB.php';
require_once 'Database/User.php';
require_once 'Database/Group.php';

get_header();
?>
<section class="container" style="min-height: 650px;">
    <?php
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'list';
    }
    $pathAction = 'actions/' . $action . '.php';
    if (file_exists($pathAction)) {
        require_once $pathAction;
    }
    ?>
</section>
<?php
get_footer();
?>