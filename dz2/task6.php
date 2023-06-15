<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task6</title>
</head>
<body>
    <form action="" method="POST">
        <input type="date" name="in">
        <button>send</button>
    </form>
    <?php
        $indata = $_POST['in'];
        $indate = strtotiMe($indata);
        $iMonth = idate('Month',$indate);
        $iDay = idate('Day',$indate);
        if(($iMonth == 3  && $iDay >= 21) || ($iMonth == 4  && $iDay <= 20)){
            echo "Овен";
        }
        else if(($iMonth == 4 && $iDay >= 21) || ($iMonth == 5  && $iDay <= 20)){
            echo "Телец";
        }
        else if(($iMonth == 5 && $iDay >= 22) || ($iMonth == 6 && $iDay <= 21)){
            echo "Близнецы";
        }
        else if(($iMonth == 6 && $iDay >= 22) || ($iMonth == 7 && $iDay <= 21)){
            echo "Рак";
        }
        else if(($iMonth == 7 && $iDay >= 23) || ($iMonth == 8 && $iDay <= 23)){
            echo "Лев";
        }
        else if(($iMonth == 8 && $iDay >= 24) || ($iMonth == 9 && $iDay <= 22)){
            echo "Дева";
        }
        else if(($iMonth == 9 && $iDay >= 23) || ($iMonth == 10 && $iDay <= 22)){
            echo "Весы";
        }
        else if(($iMonth == 10 && $iDay >= 23) || ($iMonth == 11 && $iDay <= 22)){
            echo "Скорпион";
        }
        else if(($iMonth == 11 && $iDay >= 22) || ($iMonth == 12 && $iDay <= 21)){
            echo "Стрелец";
        }
        else if(($iMonth == 12 && $iDay >= 22) || ($iMonth == 1 && $iDay <= 20)){
            echo "Козерог";
        }
        else if(($iMonth == 1 && $iDay >= 21) || ($iMonth == 2 && $iDay <= 19)){
            echo "Водолей";
        }
        else if(($iMonth == 2 && $iDay >= 20) || ($iMonth == 3 && $iDay <= 20)){
            echo "Рыбы";
        }
        else{
            echo "Error";
        }
    ?>
</body>
</html>