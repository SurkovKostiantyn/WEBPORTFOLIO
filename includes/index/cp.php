<div class="content">
    <?php
            session_start();
        if(isset($_SESSION['username'])){
            //header("Location: index.php/?page=login");
            //exit();
            echo '<p>Hello, ' . $_SESSION['username'] . '!</p>';

        }else{
            echo "<script> window.location.replace('/?page=login') </script>";
        }
    ?>
    <p>Welcome to personal cabinet.</p>
</div>