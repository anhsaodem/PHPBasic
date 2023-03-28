<?php

$userObj = new User();
$groupObj = new Group();
// $result = $group->create('groups', $data);
// show_data($result);
$groups =  $groupObj->get("SELECT * FROM groups ORDER BY name");
$users =  $userObj->get("SELECT users.*,groups.name AS group_name FROM users INNER JOIN groups ON users.group_id = groups.id ORDER BY users.id");

// show_data($users);
?>
<h2>LIST USER</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Group</th>
            <th>Status</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $index => $user) :
        ?>
            <tr>
                <td><?php echo $index+1 ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['group_name'] ?></td>
                <td><?php echo ($user['status'] == 1 ? 'Active' : 'Nonactive') ?></td>
                <td><?php echo $user['created_at'] ?></td>
                <td><?php echo $user['updated_at'] ?></td>
                <td><a href="?action=edit&id=<?php echo $user['id'] ?>" class="btn btn-warning">Sửa</a></td>
                <td>
                    <a href="#" class="btn btn-danger delete-btn">Xóa</a>
                    <?php require('form_delete.php'); ?>
                </td>
            </tr>
        <?php
        endforeach ?>
    </tbody>
</table>
<script>
    const deleteBtn = document.querySelectorAll('.delete-btn');
    if (deleteBtn.length) {
        deleteBtn.forEach((item) => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                if (confirm('Bạn có chắc chắn muốn xóa?')) {
                    const formDelete = e.target.nextElementSibling;
                    formDelete.submit();
                }
            })
        })
    }
</script>