<?php
$list_users = get("SELECT users.*,groups.name as group_name FROM users INNER JOIN groups On users.group_id = groups.id ORDER BY id DESC");
$num_users = count($list_users); //number user of list users
$limit = 5; //Max list user on 1 page;
if (!isset($_GET['page'])) {
    $page_order = 1;
} else {
    $page_order = $_GET['page']; //current page
}
// number of page
$num_pages = ceil($num_users / $limit);
// start from 
$start_page_from = ($page_order - 1) * $limit;
//Query list user

$users = get("SELECT users.*,groups.name as group_name FROM users INNER JOIN groups On users.group_id = groups.id ORDER BY id DESC LIMIT $start_page_from,$limit");
// show_data($query);
// echo $start_page_from;
// echo $num_pages;
// show_data($users);

//Tìm kiếm
if (isset($_POST['submit'])) {
    if (!empty($_POST['search'])) {
        // echo $_POST['search'];
        $name_search = $_POST['search'];
        $users = get("SELECT users.*, groups.name as group_name FROM users INNER JOIN groups ON users.group_id = groups.id WHERE users.name = ? ORDER BY id LIMIT $start_page_from,$limit", [$name_search]);
    }
}

?>
<h2>List users</h2>
<table class="table table-bordered">
    <thead>
        <th>STT</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Nhóm</th>
        <th>Trạng thái</th>
        <th>Thời gian</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </thead>
    <tbody>
        <?php
        if (!empty($users)) :
            foreach ($users as $index => $user) :
        ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['group_name']; ?></td>
                    <td><?php echo ($user['status'] == 1) ? "kích hoạt" : "Chưa kích hoạt"; ?></td>
                    <td><?php echo getDateFormat($user['created_at'], 'd/m/Y'); ?></td>
                    <td><a href="?action=update&id=<?php echo $user['id'] ?>" class="btn btn-warning">Sửa</a></td>
                    <td><a href="?action=delete&id=<?php echo $user['id'] ?>" class="btn btn-danger">Xóa</a></td>
                </tr>
        <?php endforeach;
        else :
            echo '<p><strong>Danh sách khách hàng rỗng</strong> </p>';
        endif; ?>
    </tbody>
</table>
<nav aria-label="Page navigation example" class="d-flex justify-content-end">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="?page=<?php echo ($page_order == 1) ? 1 : $page_order - 1 ?>">Previous</a></li>
        <?php for ($page = 0; $page < $num_pages; $page++) : ?>
            <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a></li>
        <?php endfor; ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo ($page_order == $num_pages) ? $num_pages : $page_order + 1 ?>">Next</a></li>
    </ul>
</nav>