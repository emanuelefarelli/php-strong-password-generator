<?php
    
    
    $lenghtValue = $_GET['lenght-input'];
    
    function generatePassword($lenght){
        $specialArray = ['!','@','#','$','%','^','&','*','(',')','_','-','!','=','?',':','.',';'];
        $charArray = ['a','b','c','d','e','f','g','k','h','i','l','m','n','o','p','q','r','s','t','u','v','x','y','z'];
        $numArray = ['1','2','3','4','5','6','7','8','9','0'];
        $newPassword = [];
            
        for($i=0; $i<$lenght; $i++){

            $charType = rand(1,3);
                
            if($charType === 1){

                $takeSpecialchar = rand(0,(count($specialArray)-1));
                array_push($newPassword,$specialArray[$takeSpecialchar]);

            }elseif($charType === 2){

                $takeChar = rand(0,(count($charArray)-1));
                array_push($newPassword,$charArray[$takeChar]);


            }elseif($charType === 3){

                $takeNumber = rand(0,(count($numArray)-1));
                array_push($newPassword,$numArray[$takeNumber]);

            }
        }

        return implode($newPassword);
    };

    $newPassword = generatePassword($lenghtValue);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h1>
        Very Strong Password Generator!
    </h1>
    <div>
        <form method="get">
            <label for="length-input">
                Lunghezza Password:
            </label>
            <input type="number" name="lenght-input" id="lenght-input">
            <button type="submit">
                Invia
            </button>
        </form>
    </div>
    <?php if((($_GET['lenght-input']) > 0) && (($_GET['lenght-input'])!= null)){ ?>
    <div>
        <h2>
            La tua password generata è:
        </h2>
        <p>
            <?php
                echo $newPassword;
            ?>
        </p>
    </div>
    <?php } else { ?>
    <div>
        <p>
            I parametri inseriti non sono validi, prego rincontrollare.
        </p>
    </div>
    <?php } ?>

</body>
</html>
