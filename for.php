<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for.php" method="post">
        <input type="range" value="50" min="50" max="1000" step="50" name="water" id="" oninput="this.nextElementSibling.value = this.value">
        <output>50</output><br>
        <input type="range" name="sugar" value="1" min="1" step="1" max="6" id="" oninput="this.nextElementSibling.value = this.value">
        <output>1</output><br>
        <input type="range" name="honey" min="0" max="5" step="1"  id="" oninput="this.nextElementSibling.value = this.value">
        <output>0</output><br>
        <input type="radio" name="tea" id="fructs" value="4" required>
        <label for="fructs">Фруктовий чай</label>
        <input type="radio" name="tea" id="black" value="2" required>
        <label for="black">Чорний чай</label>
        <input type="radio" name="tea" id="green" value="3" required>
        <label for="green">Зелений чай</label>
        <input type="radio" name="tea" id="travany" value="6" required>
        <label for="travany">Трав'яний чай</label><br>
        <input type="checkbox" name="dodatky" id="lemon" value="4">
        <label for="lemon">Lemon</label>
        <input type="checkbox" name="dodatky" id="imbyr" value="3">
        <label for="imbyr">Imbyr</label>
        <input type="checkbox" name="dodatky" id="milk" value="6">
        <label for="milk">Milk</label>
        <input type="checkbox" name="dodatky" id="koritsa" value="2">
        <label for="koritsa">Koritsa</label>
        <input type="checkbox" name="dodatky" id="vanil" value="1">
        <label for="vanil">Vanil</label><br>    
        <input type="radio" name="time" id="time1" value="35" required>
        <label for="time1">Легкий</label>
        <input type="radio" name="time" id="time2" value="43" required>
        <label for="time2">Середній</label>
        <input type="radio" name="time" id="time3" value="54" required>
        <label for="time3">Міцний</label>
        <button type="submit">Налляти</button>
    </form>
    <?php
        if($_POST) {
            $water = $_POST["water"];
            $sugar = $_POST["sugar"];
            $cup = 250;
            $time = $_POST["time"];
            $honey = $_POST["honey"];
            $tea = $_POST["tea"];
            $prise = 0;
            $dodatky = $_POST["dodatky"];

            if($tea==2) {
                $prise=2;
            } else if($tea==3) {
                $prise=3;
            } else if($tea==4) {
                $prise=4;
            } else {
                $prise=6;
            }

            if($dodatky==4) {
                $prise+=4;
            } else if($dodatky==3) {
                $prise+=3;
            } else if($dodatky==6) {
                $prise+=6;
            } else if($dodatky==2) {
                $prise+=2;
            } else {
                $prise+=1;
            }

            for($water; $water>0; $water-=$cup) {
                echo "$water<br>";
                $leftSugar=round((($cup*$sugar)/$water),1);
                $leftTime=round((($cup*$time)/$water),1);
                if($honey!="0") {
                    $leftHoney=round((($cup*$honey)/$water),1);
                }
                for($i = 50; $i<=250 && $i<=$water; $i+=50) {
                    echo "Налито: $i ml Води<br>";
                }
                if($water >= $cup) {
                    $sugar -= $leftSugar;
                    $time -= $leftTime;
                    // $time -= $leftTime;
                    echo "$leftSugar цукру";
                    if($honey!="0") {
                        $honey -= $leftHoney;
                        echo "<p>$leftHoney honey</p>";
                    }
                    echo "<p>Опускаємо чайний пакетик на $leftTime секунд</p>";
                    
                } else {
                    echo "$sugar"; //закинули весь цукор 
                    echo "<p>Опускаємо чайний пакетик на $time секунд</p>";
                    if($honey!="0") {
                        echo "$honey honey<br>";
                    }
                    
                }
            }
            echo "$prise грн<br>";
        }
    ?>
</body>
</html>