<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>

    <form action="password.php" method="get">
        <span>Lunghezza Password:</span>
        <input type="number" name="password" >
        <button type="submit">invia</button>
        <div>
            <input type="checkbox" name="number">
            <span>Numeri</span>
        </div>
        <div>
            <input type="checkbox" name="letter" >
            <span>lettere</span>
        </div>
        <div>
            <input type="checkbox" name="simbol">
            <span>simboli</span>
        </div>
        
        
    </form>
    
</body>
</html>