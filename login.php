<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="Image/x-icon" href="icons/favicon.ico" rel="icon">
	<title>ShortLink</title>
    <link rel="stylesheet" href="style/style.css">
</head>


<style>
    ::placeholder{
        color: white;
        font-weight: 300;
    }
</style>

<body>
    <div class="container-login">
        <h3>Login</h3>
        <form class="login" action="script/login.php" method="POST">
            <input type="text" name="login" placeholder="Your login"><br>
            <input type="password" name="password" placeholder="Your password"><br>
            <button type="submit">Login</button>
                <p>Don't have account? <a href="register.php">Register!</a></p>
        </form>
    </div>
</body>
</html>