<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма реєстрації</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="golovna">

    <div class="forma-conteunera">
        <h1>Вхід</h1>
        <div class="myframe">

            <form action="validation-form/auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Ведіть логін"><br><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Ведіть пароль"><br><br>
                <button class="back" type="submit"> Війти</button><br><br>
            </form>
        </div>
    </div>
    <div class="myframe">
        <button class="back" onclick="document.location='reg.php'"> Реєстрація</button>
        <button class="back" onclick="document.location='one-index.html'"> Вернутися на головну</button><br>

    </div>
</body>
</html>