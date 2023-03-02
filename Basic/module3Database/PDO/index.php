<?php
include 'includes/autoload.inc.php';
$p = new Test();
// $p->insertUser("minhhoang","minhhoang123");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>

<body>
    <style>
        table{
            min-width: 600px;
        }
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <table>
        <thead>
            <th>STT</th>
            <th>Username</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </thead>
        <tbody>
            <?php
            $testObj = new Test();
            // $list_users = $testObj->getUser();
            $list_users = $testObj->getUserStmt(2);

            foreach ($list_users as $user) :
            ?> <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['created_at'] ?></td>
                    <td><?php echo $user['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>