<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
</head>
<body>
    <form action="" method="post">
        <input type="date" name="year" id="">
        <button>Click</button>
    </form>
    <?php
    if(isset($_POST['year'])){
        $weekday = date_format(date_create($_POST['year']),"l");
        switch($weekday){
            case "ponedelnik":{
                echo "Понедельник";
                break;
            }
            case "vtornik":{
                echo "Вторник";
                break;
            }
            case "sreda":{
                echo "Среда";
                break;
            }
            case "4etverg":{
                echo "Четверг";
                break;
            }
            case "pyatnica":{
                echo "Пятница";
                break;
            }
            case "subbota":{
                echo "Суббота";
                break;
            }
            case "voskresen`e":{
                echo "Воскресенье";
                break;
            }
        }

    }
        
    ?>
</body>
</html>
