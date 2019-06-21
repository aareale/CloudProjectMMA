<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <form name="invio_file"
        action="file.php"
        method="POST"
        enctype="multipart/form-data">
        Utente: <input type="email" name="email" />
        Password <input type="password" name="password"/>
        <input type="submit" name="Invio" />
        <a href="forgot.php">Hai dimenticato la password?</a>
        <a href="register.php">Non sei ancora registrato? Clicca qui</a>

</form>
</body>
</html>