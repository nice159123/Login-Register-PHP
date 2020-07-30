<?php include 'inc/header.php' ?>
<?php
    session_start();
    if(
        isset($_SESSION['id']) &&
        isset($_SESSION['username']) &&
        isset($_SESSION['email']) 
    ){
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
    }else{
        session_destroy();
        Header('Location: index.php');
    }
?>
<div class="container pt-5">
    <h1 class="text-center display-4 mb-4">login & register PHP</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-xl-8">
            <div class="card shadow">
                <div class="card-header text-center">
                    DASHBOARD
                </div>
                <div class="card-body d-flex justify-content-between">
                    Welcome: <?= $username ?> <a class="btn btn-sm btn-danger" href="bin/logout.php">ออกจากระบบ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php' ?>