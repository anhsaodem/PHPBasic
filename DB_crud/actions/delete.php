<?php
$groups = get("SELECT * FROM groups");
$users = get("SELECT users.*,groups.name as group_name FROM users INNER JOIN groups On users.group_id = groups.id ORDER BY id DESC");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
delete('users',"id={$id}");
redirect('lists');