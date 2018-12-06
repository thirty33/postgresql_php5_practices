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
    $sql = "INSERT INTO persona (nombre, serial_motor) values ('joel', 15487)";
    $pg->exec($sql);
    $sql = "INSERT INTO persona (nombre, serial_motor) values ('esteban', 15487)";
    $pg->exec($sql);
    $sql = "INSERT INTO persona (nombre, serial_motor) values ('danilo', 15487)";
    $pg->exec($sql);

    $str_array = array('joel', 'steban', 'danilo');
    foreach ($str_array as $name) {
        echo "this is the name $name";
    }

    // asc is default in order by sentence
    // $sql = "SELECT * FROM persona order by nombre, serial_motor asc";
    // $sql = "SELECT * FROM persona order by nombre desc";
    // $vehi = $pg->getRow($sql);
    // echo $vehi;
    
    $sql = "SELECT * FROM persona where nombre like '%teb%'";
    $vehi = $pg->getRows($sql);
    echo $vehi;


?>