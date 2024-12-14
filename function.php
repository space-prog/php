<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['name'])) {
            $name = $_POST['name'];
            function hello($name) {
                return "Hello, $name";
            }
            $hello = hello($name);
            echo $hello;
        }
        
    ?>
    <form action="function.php" method="post">
        <input type="text" name="name">
        <button type="submit">Підтвердити</button>
    </form>
</body>
</html>