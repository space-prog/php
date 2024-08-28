<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="age.php" method="post">
        <input type="number" name="number" id="" max="99">
        <button type="submit">Send</button>
    </form>
<?php
if($_POST) {
    $number = $_POST["number"];
    if($number >= 18) {
        echo "allow";
    } else if($number >= 1 && $number < 18) {
        echo "not allow";
    } else {
        echo "Enter number from 1 to 99";
    }
}
?>
</body>
</html>
