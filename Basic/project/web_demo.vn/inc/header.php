<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample site</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid container" >
                <a class="navbar-brand" href="?mod=home&act=main">SampleLife</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?mod=home&act=main">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?mod=page&act=detail&id=1">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?mod=post&act=detail&cat_id=1">Laptop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?mod=post&act=detail&cat_id=2">Telephone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?mod=page&act=detail&id=2">Contact</a>
                        </li>
                        <?php //if(isset($_SESSION['is_login'])){

                     ?>
                        <li class="nav-item" class="float-left">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>