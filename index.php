<?php
 include_once './functions.php';

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOOTSTRAP 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <title>Password Generator</title>
</head>
<body class="bg-secondary text-light">
    <h1 class="text-center p-5 bg-dark">
        Very Strong Password Generator!
    </h1>
    <div class="mx-auto mt-4 p-4 w-50 bg-primary text-center">
        <form method="get">
            <label for="length-input">
                Lunghezza Password:
            </label>
            <input type="number" name="lenght-input" id="lenght-input">
            <input type="submit" value="Send">
        </form>
    </div>
    <?php if((($_GET['lenght-input']) > 0) && (($_GET['lenght-input'])!= null)){ ?>
    <div class="bg-info w-50 mx-auto mt-5 p-5">
        <h2>
            La tua password generata è:
        </h2>
        <p class="fs-2 text-success">
            <?php
                echo $newPassword;
            ?>
        </p>
    </div>
    <?php } else { ?>
    <div class="bg-warning w-50 mx-auto mt-5 p-5">
        <p>
            I parametri inseriti non sono validi, prego rincontrollare.
        </p>
    </div>
    <?php } ?>

</body>
</html>
