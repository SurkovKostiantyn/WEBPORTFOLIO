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
    <h3>Registration:</h3>
    <form method="post">
        <label for="username-reg">Username<sup>*</sup></label>
        <input type="text"
               placeholder="&#xf007; Enter your Username"
               id="username-reg"
               name="username-reg"
               autocomplete="on"
               title="Username should only contain letters and digits (2-20 symbols)"
               pattern="[A-z]{2,20}"
               required>
        <label for="email-reg">Email<sup>*</sup></label>
        <input type="text"
               placeholder="&#xf0e0; Enter Email"
               name="email-reg"
               id="email-reg"
               autocomplete="on"
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
               required>
        <input type="text"
               placeholder="Enter First name"
               title="First name should only contain letters (2-20 symbols)"
               name="fname-reg"
               pattern="[A-Za-zА-Яа-яЁё]{2,20}"
               autocomplete="on">
        <input type="text"
               placeholder="Enter Last name"
               title="Last name should only contain letters"
               name="lname-reg"
               pattern="[A-Za-zА-Яа-яЁё]{2,20}"
               autocomplete="on">
        <input type="text"
               placeholder="&#xf095; +38(___)-___-__-__"
               name="phone-reg"
               title="Phone number should be in format +38 (123) 456-78-90"
               pattern="\+38\s?[\(]{0,2}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
               autocomplete="on">
        <label for="password-reg">Password<sup>*</sup></label>
        <input type="password"
               placeholder="&#xF13e; Enter Password"
               name="password-reg"
               id="password-reg"
               autocomplete="on"
               pattern="(?=^.{8,20}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*"
               required>
        <label for="rep-password-reg">Repeat password<sup>*</sup></label>
        <input type="password"
               placeholder="&#xF13e; Repeat Password"
               name="rep-password-reg"
               id="rep-password-reg"
               autocomplete="on"
               pattern="(?=^.{8,20}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*"
               required>
        <label><sup>*</sup> required</label>
        <button class="button-css" type="submit">Sign Up</button>
    </form>
    <hr>
    <h3>Authorization:</h3>
    <form method="post">
        <label for="username">Username<sup>*</sup></label>
        <input type="text"
               placeholder="&#xf007; Enter login or email"
               name="username"
               id="username"
               autocomplete="on"
               required>
        <label for="password">Password<sup>*</sup></label>
        <input type="password"
               placeholder="&#xF13e; Enter Password"
               name="password"
               id="password"
               autocomplete="on"
               required>
        <label><sup>*</sup> required</label>
        <button class="button-css" type="submit">Log in</button>
    </form>
</div>