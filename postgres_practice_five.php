<?php
    require "index.php";
    $pg = new PgSql();
    //Modificacion de Tablas.
    
    $sql = "ALTER TABLE vehiculo ADD Column IF NOT EXISTS descripcion varchar(20)";
    $pg->exec($sql);

    $sql = "ALTER TABLE vehiculo ADD Column IF NOT EXISTS test_field int";
    $pg->exec($sql);

    // $sql = "ALTER TABLE vehiculo Rename Column test_field to test_two";
    // $pg->exec($sql);

    $sql = "ALTER TABLE vehiculo Drop Column test_two";
    $pg->exec($sql);
?>