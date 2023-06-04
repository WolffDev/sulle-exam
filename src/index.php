<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefon login</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="phone">
        <div class="screen">
            <h1>Easy Cart</h1>
            <form action="login.php" method="post">
                <label for="username">Brugernavn:</label>
                <input type="text" id="username" name="password" required>
                <label for="password">Kodeord:</label>
                <input type="password" id="password" name="username" required>
                <button type="submit">Log ind</button>
            </form>
            <button onclick="location.href='dashboard.php'">Ny bruger</button>
        </div>
    </div>
</body>


</html>