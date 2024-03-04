<?php
session_start();
if (isset($_SESSION["name"]) && $_SESSION["pass"]) {
    $nameSession = $_SESSION["name"];
    $passSession = $_SESSION["pass"];
}
if (isset($_COOKIE["name"]) && $_COOKIE["pass"]) {
    $nameCookie = $_COOKIE["name"];
    $passCookie = $_COOKIE["pass"];
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 3600)) {

    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sessions</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <h2>Admin Login</h2>

        <form action="index.php" method="POST">
            <input type="text" name="username" <?= isset($nameCookie) ? 'value="' . $nameCookie . '"' : 'placeholder="Username"'; ?> required>
            <input type="password" name="password" <?= isset($passCookie) ? 'value="' . $passCookie . '"' : 'placeholder="Password"'; ?> required>
            <div class="remember-me">
                <input type="checkbox" name="checkbox" id="remember" class='remember'>
                <label for="remember">Remember me</label>
            </div>
            <span><input type="submit" name="submit" value="Login">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['username'];
            $pass = $_POST['password'];

            $conn = mysqli_connect('localhost', 'root', '', 'webportfolio');

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM admin WHERE admin='$name' AND password='$pass'";
            $result = mysqli_query($conn, $query);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                if (isset($_POST['checkbox'])) {
                    // If "Remember me" checkbox is checked, initialize session and cookies
                    $_SESSION['name'] = $name;
                    $_SESSION['pass'] = $pass;
                    setcookie('name', $name, time() + 3600, "/");
                    setcookie('pass', $pass, time() + 3600, "/");
                }
                header('Location: admin.php');
            } else {
                ?>
                <h5>Invalid username or password. Try again</h5>
                <?php
            }
            mysqli_close($conn);
        }
        ?>
    </div>
</body>

</html>