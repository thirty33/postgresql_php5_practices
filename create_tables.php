<?php
    require "index.php";
    $pg = new PgSql();

    $sql = "CREATE EXTENSION IF NOT EXISTS citext";
    $pg->exec($sql);

    $sql = "CREATE TABLE IF NOT EXISTS books (
        id SERIAL PRIMARY KEY,
        author CITEXT,
        title CITEXT,
        year INTEGER)";
    $pg->exec($sql);
    $sql = "SELECT author FROM books WHERE author='Al Johnson'";
    $author = $pg->getCol($sql);
    if ($author)
    {
        echo "Ya hizo una insercion";
        // exit('\nInsert already done');
    }
    $sql = "INSERT INTO books (author, title, year) VALUES ('Al Johnson', 'Mark The Messenger', 1983);
            INSERT INTO books (author, title, year) VALUES ('George Hamilton', 'Rig The Crime', 1985);
            INSERT INTO books (author, title, year) VALUES ('Rod Peterson', 'Innocent Child', 1975);
            INSERT INTO books (author, title, year) VALUES ('June Landers', 'Better Way', 1977);
            INSERT INTO books (author, title, year) VALUES ('Burt Fender', 'On The Job', 1988)";
    $pg->insert($sql);
    echo 'Insert Done';
    
    $sql = "SELECT year FROM books WHERE title='On The Job'";
    $author = $pg->getCol($sql);
    echo '\n\nprocess succesfull';

    

?>