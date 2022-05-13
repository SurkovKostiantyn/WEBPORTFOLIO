<div class="content">
    <?php
        if(!isset($_SESSION['username'])){
            header("Location: index.php/?page=login");
            exit();
        }
    ?>

    <?= '<p>Hello, '.$_SESSION['username'].'!</p>'; ?>
    <p>Welcome to personal cabinet.</p>
</div>