<?php
require_once 'function.php';
$userObj = new User();
$groupObj = new Group();
$users = $userObj->get("SELECT users.*,groups.name AS group_name FROM users INNER JOIN groups ON users.group_id = groups.id");
$groups = $groupObj->get("SELECT * FROM groups");
//Validate form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (empty($_POST['name'])) {
        $errors['name']['required'] = 'Vui lòng nhập tên vào!';
    }
    if (empty($_POST['email'])) {
        $errors['email']['required'] = 'Vui lòng nhập email';
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email']['email'] = 'Email không đúng định dạng';
        } else {
            $rows = $userObj->getRows("SELECT id FROM users WHERE email='" . $_POST['email'] . "'");
            if ($rows > 0) {
                $errors['email']['unique'] = 'Email đã tồn tại trên hệ thống';
            }
        }
    }
    if (empty($_POST['group_id'])) {
        $errors['group_id']['required'] = 'Vui lòng chọn nhóm';
    }
    if (empty($_POST['status'])) {
        $errors['status']['required'] = 'Vui lòng chọn status';
    }
    if (empty($errors)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $groupId = $_POST['group_id'];
        $status = $_POST['status'];
        $createStatus = $userObj->create('users', [
            'name' => $name,
            'email' => $email,
            'group_id' => $groupId,
            'status' => $status,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        if ($createStatus) {
            //Thêm thành công
            setSession('msg', 'Thêm người dùng thành công');
            setSession('msg_type', 'success');
            redirect('index.php');
        } else {
            setSession('msg', 'Thêm người dùng thất bại');
            setSession('msg_type', 'danger');
            reload();
        }
    } else {
        setSession('msg', 'Vui lòng kiểm tra lại dữ liệu');
        setSession('msg_type', 'danger');
        setSession('errors', $errors);
        setSession('old', $_POST);
        reload();
    }
}
$msg = getFlashData('msg');
$msgType = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
?>
<h1>ADD USERS</h1>
<form action="" method="post">
    <div class="mb-3">
        <?php echo getMessage($msg, $msgType); ?>
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo getError('name') ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?php echo getOld('name'); ?>">
        <?php
        echo getError('name') ? ' <div class="invalid-feedback">' . getError('name') . '</div>' : '';
        ?>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo getError('email') ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php echo getOld('email'); ?>" />
        <?php
        echo getError('email') ? ' <div class="invalid-feedback">' . getError('email') . '</div>' : '';
        ?>
    </div>
    <div class="mb-3">
        <label for="group" class="form-label">Group</label>
        <select class="form-control <?php echo getError('group_id') ? 'is-invalid' : ''; ?>" name="group_id" id="">
            <option value="">----Group----</option>
            <?php
            if (!empty($groups)) {
                foreach ($groups as $group) {
                    $selected = getOld('group_id') == $group['id'] ? 'selected' : false;
                    echo "<option value='" . $group['id'] . "' $selected>" . $group['name'] . "</option>";
                }
            }
            ?>
        </select>
        <?php
        echo getError('group_id') ? ' <div class="invalid-feedback">' . getError('group_id') . '</div>' : '';
        ?>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" name="status" id="">
            <option value="0" <?php echo getOld('status') == 0 ? 'selected' : false; ?>>Nonactive</option>
            <option value="1" <?php echo getOld('status') == 1 ? 'selected' : false; ?>>Active</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>