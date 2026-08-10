<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="result.php" method="POST">
        <label>
            <span>Username</span>
            <br>
            <input
                name="username"
                type="text"
                required
            >
        </label>
        <br>
        <br>
        <label>
            <span>Password</span>
            <br>
            <input
                name="password"
                type="password"
                required
            >
        </label>
        <br>
        <br>
        <button type="submit">SEND</button>
    </form>
</body>
</html>