<?php
$groups = get("SELECT * FROM groups");
if (isset($_POST['submit'])) {
    $user = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "group_id" => $_POST['group_id'],
        "status" => $_POST['status'],
        "created_at" => getDateFormat($_POST['created_at'], 'Y-m-d H:i:s')
    ];
    if (!empty($user)) {
        create('users', [
            'name' => $user['name'],
            "email" => $user['email'],
            "group_id" => $user['group_id'],
            "status" => $user['status'],
            "created_at" => $user['created_at'],
            'updated_at' => null
        ]);
        redirect('lists');
    }
}
?>
<h2>Thêm người dùng</h2>
<form method="POST">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
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
        <input type="datetime-local" class="form-control" id="created_at" aria-describedby="emailHelp" name="created_at">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>