<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="read.php"> show form </a>
    <form action="insert.php" method="POST">
        <input type="text" name="user" placeholder="enter your user name" required>
        <input type="email" name="email" placeholder="enter your user email" required>
        <input type="password" name="pass" placeholder="enter your user email" required>
        <input type="submit" name="submit">
    </form>
</body>
</html>