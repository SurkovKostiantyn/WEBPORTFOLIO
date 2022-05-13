<?php
$con = $Connect->getConnection();
if (isset($_REQUEST['username-reg'])) {
    $username = stripslashes($_REQUEST['username-reg']);
    $username = mysqli_real_escape_string($con, $username);

    $email    = stripslashes($_REQUEST['email-reg']);
    $email    = mysqli_real_escape_string($con, $email);

    $fname    = stripslashes($_REQUEST['fname-reg']);
    $fname    = mysqli_real_escape_string($con, $fname);

    $lname    = stripslashes($_REQUEST['lname-reg']);
    $lname    = mysqli_real_escape_string($con, $lname);

    $phone    = stripslashes($_REQUEST['phone-reg']);
    $phone    = mysqli_real_escape_string($con, $phone);

    $password = stripslashes($_REQUEST['password-reg']);
    $password = mysqli_real_escape_string($con, $password);

    $password_r = stripslashes($_REQUEST['rep-password-reg']);
    $password_r = mysqli_real_escape_string($con, $password_r);

    if($password === $password_r){
        $create_datetime = date("Y-m-d H:i:s");

        $query    = "INSERT into `users` (username, password, email, create_datetime)
                         VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            header("Location: index.php");
        } else {
            echo "<div id='incorrect'></div>";
        }
    }else{
        echo "<div id='incorrect'></div>";
    }
}
if (isset($_POST['username'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);
    // Check user is exist in the database
    $query    = "SELECT `id` FROM `users` WHERE username='$username'
                         AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $data = mysqli_fetch_array($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "<div id='incorrect'></div>";
    }
}
mysqli_close($con);
?>

<div class="content">
    <h3>Registration: you haven't an account</h3>
    <form method="post">
        <input type="text" placeholder="&#xf007; Enter your Username" name="username-reg" autocomplete="on" required>
        <input type="text" placeholder="&#xf0e0; Enter Email" name="email-reg" autocomplete="on" required>
        <input type="text" placeholder="Enter First name" name="fname-reg" autocomplete="on">
        <input type="text" placeholder="Enter Last name" name="lname-reg" autocomplete="on">
        <input type="text" placeholder="&#xf095; Enter Phone number" name="phone-reg" autocomplete="on">
        <input type="password" placeholder="&#xF13e; Enter Password" name="password-reg" autocomplete="on" required>
        <input type="password" placeholder="&#xF13e; Repeat Password" name="rep-password-reg" autocomplete="on" required>
        <button type="submit">Sign Up</button>
    </form>
    <h3>Authorization: you already have an account</h3>
    <form method="post">
        <label for="username"></label>
        <input type="text" placeholder="&#xf007; Enter login or email" name="username" id="username" autocomplete="on" required>
        <label for="password"></label>
        <input type="password" placeholder="&#xF13e; Enter Password" name="password" id="password" autocomplete="on" required>
        <button type="submit">Log in</button>
    </form>
</div>