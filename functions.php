<?php


function generatePassword($lunghezza, $includeLettere, $includeNumeri, $includeSimboli) { // ho aggiunto gli argomenti per le checkbox 
    global $lettere, $numeri, $simboli;

    $tuttiCaratteri = []; // creaiamo un array dove in base alle scelte verranno inseriti i caratteri

    if ($includeLettere) {
        $tuttiCaratteri = array_merge($tuttiCaratteri, $lettere);
    }

    if ($includeNumeri) {
        $tuttiCaratteri = array_merge($tuttiCaratteri, $numeri);
    }

    if ($includeSimboli) {
        $tuttiCaratteri = array_merge($tuttiCaratteri, $simboli);
    }



    // Inizializza la password come una stringa vuota
    $password = "";

    // Genera la password con lunghezza specificata
    for ($i = 0; $i < $lunghezza; $i++) {
        // Seleziona un carattere casuale dall'array corrispondente alla checkbox selezionata
        $carattereCasuale = $tuttiCaratteri[array_rand($tuttiCaratteri)];

        // Aggiungi il carattere alla password
        $password .= $carattereCasuale;
    }

    return $password;
}



?>