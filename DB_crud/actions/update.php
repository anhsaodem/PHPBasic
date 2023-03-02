<?php
$groups = get("SELECT * FROM groups");
$users = get("SELECT users.*,groups.name as group_name FROM users INNER JOIN groups On users.group_id = groups.id ORDER BY id DESC");

if (isset($_GET['id'])) {
    $id = (int)($_GET['id']);
}

if (isset($_POST['submit'])) {
    $user = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "group_id" => $_POST['group_id'],
        "status" => $_POST['status'],
        "created_at" => getDateFormat($_POST['created_at'], 'Y-m-d H:i:s'),
        "updated_at" => getDateFormat($_POST['updated_at'], 'Y-m-d H:i:s')

    ];
    if (!empty($user)) {
        update('users', [
            'name' => $user['name'],
            "email" => $user['email'],
            "group_id" => $user['group_id'],
            "status" => $user['status'],
            "created_at" => $user['created_at'],
            'updated_at' => $user['updated_at']
        ],"id={$id}");
        redirect('lists');
    }
}
?>
<h2>Cập nhật người dùng</h2>
<form method="POST">
    <?php
    foreach ($users as $user) :
        if ($user['id'] == $id) :
            // show_data($user);


    ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="name" value="<?php echo $user['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email'] ?>">
            </div>
            <div class="mb-3">
                <select name="group_id" id="">

                    <?php foreach ($groups as $group) : ?>
                        <option value="<?php echo $group['id'] ?>"><?php echo $group['name'] ?></option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <select name="status" id="">
                    <option value="1">Active</option>
                    <option value="0">Non Active</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="created_at" class="form-label">Created_at</label>
                <input type="datetime-local" class="form-control" id="created_at" aria-describedby="emailHelp" name="created_at" value="<?php echo $user['created_at'] ?>">
            </div>
            <div class="mb-3">
                <label for="updated_at" class="form-label">Updated_at</label>
                <input type="datetime-local" class="form-control" id="created_at" aria-describedby="emailHelp" name="created_at">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <?php endif;
    endforeach ?>
</form>