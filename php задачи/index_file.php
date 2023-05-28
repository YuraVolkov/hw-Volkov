<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label>login:</label>
        <input type="text" name="login">
        <input type="submit">
        <input type="file" name="file">
    </form>
</body>
</html>