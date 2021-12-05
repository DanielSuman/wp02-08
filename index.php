<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $shipHP = 200;
    $apal = 100;
    $botak = 0;

    // SHOTS
    define('MAX_SHOOTS', 5);

    while (($botak < 100) && ($shipHP > 0)) {
        // $apal = $apal - 100;
        echo "Naložili jsme 10 na apalu<br>";
        echo "Loď vyplula z Apalu<br>";
        echo "Piráti útočí na loď<br>";

        for ($i=0; $i < MAX_SHOOTS; $i++) { 
            $damage = rand(0,5);
            $shipHP -= $damage;
            if($shipHP <= 0) {
                echo "Loď byla zničena uprostřed bitvy";
                break;
            }
            echo "Piráti zasáhli zásobovací loď a ubrali jí $damage životů!<br>";
            echo "Zásobovací loď má nyní $shipHP životů<br>";
        }
        if($shipHP <= 0) {
            break;
        }

        echo "Loď vykládá náklad na Botaku<br>";
        $botak += 10;
        echo "Nyní je na Botaku $botak beden!<br>";
    }

    ?>
</body>
</html>