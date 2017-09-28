<?php
//Le indicamos el nombre a la tabla
$table = Database::get_main_table('plugin_redirection');

// Creamos la instrucción sql para crear la tabla
$sql = "CREATE TABLE IF NOT EXISTS $table (
            id INT unsigned NOT NULL auto_increment PRIMARY KEY,
            user_id INT unsigned NOT NULL DEFAULT 0,
            url VARCHAR(255) NOT NULL DEFAULT ''
        )";

// Ejecutamos la instruccion
Database::query($sql);

