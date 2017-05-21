<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=BDD_Kiwi_G;charset=utf8", "root", "root");
}
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String.
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
}