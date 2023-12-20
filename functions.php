<?php


function generatePassword($lunghezza){
    global $lettere, $numeri, $simboli;

    // Unisci gli array in uno solo senza duplicati
    $tuttiCaratteri = array_unique(array_merge($lettere, $numeri, $simboli)); //array_unique Rimuove i duplicati, mantenendo solo la prima occorrenza di ciascun valore unico. array_merge: combina due o più array in uno solo. Restituisce un nuovo array contenente tutti gli elementi degli array di input.
    

    // Inizializza la password come una stringa vuota
    $password = ""; //è una variabile locale all'interno della funzione generatePassword e serve a conservare la password temporaneamente durante la sua creazione, e associando la funzione alla variabile $createpassword gli passeremo il valore della password

    // Genera la password con lunghezza specificata
    for ($i = 0; $i < $lunghezza; $i++) {
        // Seleziona un carattere casuale dall'array. Non usiamo rand perche prende un numero casuale da un min a un max
        $carattereCasuale = $tuttiCaratteri[array_rand($tuttiCaratteri)];
        //se avessimo messo solo array_rand($tuttiCaratteri) restituirebbe solo gli indici

        // Aggiungi il carattere alla password
        $password .= $carattereCasuale;
        // se avessimo messo solo "=" verebbe stampato l'ultimo carattere e non aggiunto uno dopo l'altro
    }

    return $password;
}


?>