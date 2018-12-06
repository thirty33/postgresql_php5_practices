<?php
    require "index.php";
    $pg = new PgSql();
    ///Default values in tables property, postgresql 

    $sql = "DROP TABLE IF EXISTS persona";
    $pg->exec($sql);

    $sql = "CREATE TABLE persona (
        id SERIAL PRIMARY KEY,
        nombre varchar(50) not null,
        serial_motor int default 0000,
        placa varchar(20) default 'no_serial_motor')";
    $pg->exec($sql);
    
    $sql = "INSERT INTO persona (nombre) values ('joel')";
    $pg->exec($sql);


?>