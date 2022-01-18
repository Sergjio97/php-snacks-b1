<?php
    /* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
    che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

    if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
        $name = strlen($_GET['name']);
    } else {
        $name = NULL;
    };

    if ($name > 3 && strpos($_GET['mail'], '@') !== false && strpos($_GET['mail'], '.') !== false && is_numeric($_GET['age'])){
        echo "<h1>Accesso riuscito</h1>";
    } elseif ($name == NULL) {
        echo "<h1>Accedi al tuo account</h1>";
    } else {
        echo "<h1>Accesso negato</h1>";
    };

?>