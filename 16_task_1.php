<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mail.php" method="post">
        <div>
            <label for="login">Логин:</label>
            <input type="text" name="login" id="login" required="required">
        </div>
        <div>
            <label>Комментарий:</label>
            <textarea name="comment" cols="30" rows="3"></textarea>
        </div>
        <div>
            <label></label>
            <button type="submit">Отправить</button>
        </div>
    </form>
</body>
</html>