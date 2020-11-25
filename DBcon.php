<?php

/* PostreSQL tablka
CREATE TABLE uzivatele (
uz_id serial PRIMARY KEY,
zadane_cislo VARCHAR (255) NOT NULL,
zadany_text VARCHAR (255) NOT NULL
);

*/


try {
    // Vytvoreni spojeni s Postrgres databazi
    $db_connection = pg_connect("host=localhost dbname=phpTest user=postgres password=VYUKA-548");
    // Napiš zprávu, pokud bylo připojeni k databázi úspěšné vytvořeno
    if ($db_connection) {
        echo "Pripojení k Postgres databázi bylo úspěšné! <br>";
    }
} catch (Exception $e) {
    // chybová hláška pokud připojeni nefunguje echo $e->getMessage();
    echo $e->getMessage();
}


?>