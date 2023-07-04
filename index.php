<?php

    $specialArray = ['!','@','#','$','%','^','&','*','(',')','_','-','!','=','?',':','.',';',];
    $charArray = ['a','b','c','d','e','f','g','k','h','i','l','m','n','o','p','q','r','s','t','u','v','x','y','z',];
    $numArray = ['1','2','3','4','5','6','7','8','9','0'];

    $newPassword = [];

    $lenghtValue = $_GET['lenght-input'];

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
</body>
</html>
