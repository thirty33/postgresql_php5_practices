<?php
    //practices three postgreSQL.
    require "index.php";
    $pg = new PgSql();

    ///Isert user in system_usuarios table 
    $sql = "INSERT INTO system_usuarios (usuario, nombre, descripcion, passwd) VALUES ('joel10s', 'joel', 'suarez', 'joel')";
    $pg->insert($sql);


?>