<?php
    require "index.php";
    $pg = new PgSql();
    //Diferencias entre delete and Drop.

    // delete borra los registros de una tabla,
    // si la pk es incremental, mantendra el ultimo numero y agregara despues de este
    // $sql = "DELETE FROM vehiculos";
    

    //Borra la tabla completa, toca crear la tabla de nuevo
    // $sql = "DROP TABLE vehiculos";

    //Borra los registros y restaura la pk si es incremental
    $sql = "Truncate TABLE vehiculo restart identity";
    $pg->exec($sql);
?>