<?php
    require "index.php";
    $pg = new PgSql();

    
    //Modificacion de columnas.

    $sql = "ALTER TABLE vehiculo ALTER Column descripcion type varchar(50)";
    $pg->exec($sql);
    // adding primary key, already has one
    // $sql = "ALTER TABLE vehiculo add primary key (id)";
    // $pg->exec($sql);
    
?>