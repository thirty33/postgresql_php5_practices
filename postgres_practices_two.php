<?php
    require "index.php";
    $pg = new PgSql();

    $sql = "CREATE TABLE IF NOT EXISTS persona (
        id SERIAL PRIMARY KEY,
        idpersona int not null,
        nombre varchar(20),
        Cedula varchar(10))";
    $pg->exec($sql);

    $sql = "INSERT INTO persona (idpersona, nombre) VALUES (0,'joel')";
    $sql = "INSERT INTO persona (idpersona, nombre) VALUES (1,'joel')";
    $pg->insert($sql);

    //tipos de datos.
    $sql = "CREATE TABLE IF NOT EXISTS data_types (
        id SERIAL PRIMARY KEY,
        duplicado boolean,
        letras character(20),
        fecha date,
        valor float,
        numero integer,
        valor_decimal decimal,
        horas_segundos_minutos time,
        varchar_variable varchar(20))";

    $pg->exec($sql);

    $sql = "INSERT INTO data_types (numero) VALUES (1);
    INSERT INTO data_types (numero) VALUES (2);
    INSERT INTO data_types (numero) VALUES (3);
    INSERT INTO data_types (numero) VALUES (4)";
    $pg->insert($sql);

    $sql = "SELECT * FROM data_types WHERE numero Between 1 AND 4";
    // $person = $pg->getRow($sql);
    $person = $pg->getRows($sql);
    echo '\n\nprocess succesfull';
        
    //Foreing Keys practices
    // $sql = "CREATE TABLE IF NOT EXISTS foraneos (
    //     llave_foranea_1 integer,
    //     -- constraint fk_test
    //     --     foreign key (llave_foranea_1)
    //     --     REFERENCES data_types(numero)
    // )";
    echo "Indica tu nombre :";
    // $line = trim(fgets(STDIN));
    // $copy = $line;
?>