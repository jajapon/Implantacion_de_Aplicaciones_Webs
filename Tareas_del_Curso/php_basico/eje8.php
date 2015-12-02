<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
        $numeroAleatorio=rand(1,5);
        switch($numeroAleatorio){
            case 1:
                echo "uno";
                break;
            case 2:
                echo "dos";
                break;
            case 3:
                echo "tres";
                break;
            case 4:
                echo "cuatro";
                break;
            case 5:
                echo "cinco";
                break;
        }
    ?>
</body>
</html>
