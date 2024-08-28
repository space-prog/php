
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <select name="select" id="">
            <option value="1">Зима</option>
            <option value="2">Весна</option>
            <option value="3">Літо</option>
            <option value="4">Осінь</option>
        </select>
        <input type="submit" value="іутв">
    </form>
<?php 
if($_POST) {
    $select = $_POST["select"];
    if($select==1) {
        echo "В'язана шапка";
    } else if($select==2) {
        echo "Куртка";
    } else if($select==3) {
        echo "Панама";
    } else {
        echo "Пальто";
    }
}
if(!$_POST) {
    echo "Not Post";
}
?>
</body>
</html>