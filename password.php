<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>

    <?php

        include __DIR__ . "/functions.php";

        $lettere = ["a", "b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        $numeri = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $simboli = ["_", "?","*","+","&","%","!","#","@",">","<","°","-",":",",","/"];
        $createPassword = "";

      
        if(isset($_GET['password'])){
            // empty controlla se il campo è vuoto
            if (empty($_GET['password'])) {
                echo 'Non hai compilato il campo';


            } elseif ($_GET['password'] < 5) { // se il numero inserito è minore di 5 errore
                echo 'Caratteri richiesti almeno 5';

            }  else { // altrimenti genera
                $createPassword = generatePassword(intval($_GET['password']));
            }
        }

        

        
    
    ?>

    <p>Password generata: <?php echo $createPassword; ?></p>
    <div>
        <a href="form.php">Torna alla pagina precedente</a>
    </div>
   


    
</body>
</html>