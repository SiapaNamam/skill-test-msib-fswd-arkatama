<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'connection.php';   
    ?>
        <form action="proses.php?task=input" method="post">
            <label for="data">Data Diri</label>
            <input type="text" name="data-diri">
            <input type="submit" value="submit" name="submit">
        </form>
</body>
</html>