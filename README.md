//## config/database
// Créer un fichier à la racine de 'config' > database.php et coller ce code :

<?php

const DB_CONFIG = [
    'host'     => '', // ou "localhost"
    'port'     => '', // ou 3307 si la connexion ne s'établit pas et que vous utilisez MariaDB
    'dbname'   => '',
    'username' => '',
    'password' => '' // "root" aussi si vous utilisez MAMP
];

//# Modifier la config en fonction de votre BDO.