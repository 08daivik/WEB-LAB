<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = $_POST["username"];
        $pass = $_POST["password"];
        $file = fopen("login.txt", "r");
        
        $is_valid = false;

        while (($line = fgets($file)) !== false) {
            $content = trim($line);
            if ($content === $uname . ":" . $pass) {
                $is_valid = true;
                break;
            }
        }
        fclose($file);

        if ($is_valid) {
            echo "<p style='color:green;'>Access granted!</p>";
        } else {
            echo "<p style='color:red;'>Incorrect username or password!</p>";
        }
    }
    ?>
</body>
</html>
