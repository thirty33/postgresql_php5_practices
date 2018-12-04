<?php
    require "index.php";
    $pg = new PgSql();

    // $sqlDrop = "DROP TABLE IF EXISTS vehiculo CASCADE";
    // $pg->exec($sqlDrop);
    $sql = "CREATE TABLE IF NOT EXISTS vehiculo (
        id SERIAL PRIMARY KEY,
        serial_motor int not null,
        placa varchar(20))";
    $pg->exec($sql);

    $sql = "INSERT INTO vehiculo (serial_motor, placa) VALUES (1526435,'VQI54E')";
    $sql = "INSERT INTO vehiculo (serial_motor, placa) VALUES (225225245,'SOL22E')";
    $pg->insert($sql);
    
    $sql = "SELECT * FROM vehiculo WHERE serial_motor > 225225243";
    $vehi = $pg->getRows($sql);
    echo $vehi;

    
?>