<?php

session_start();

$error = false;
$message = null;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if(isset($_POST['logout']) && $_POST['logout'] === '1')
    {
        unset($_SESSION['nickname']);
        session_destroy();
    }

    if(isset($_POST['nickname']))
    {
       $_SESSION['nickname'] = $_POST['nickname'];
    }
    else
    {
        $error = true;
        $message = 'Nickname is required.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms and Sessions</title>
</head>
<body>
    <?php if(isset($_SESSION['nickname'])) { ?>
    <h1>Hello and Welcome <?= $_SESSION['nickname'] ?></h1>
    <form action="index.php" method="POST">
        <input type="hidden" name="logout" value="1">
        <button type="submit">Logout</button>
    </form>
    <?php } else { ?>
    <form action="index.php" method="post">
        <label>
            <span>NickName</span>
            <br>
            <input name="nickname" type="text">
        </label>
        <?php if($error && isset($message)) { ?>
        <p style="color: red"><?= $message ?></p>
        <?php } ?>
        <button type="submit">Save</button>
    </form>
    <?php } ?>
</body>
</html>

