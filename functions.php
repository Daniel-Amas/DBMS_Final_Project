<?php
function openDB()
{
    $host="localhost";
    $user="root";
    $password="Trouble139";
    $database="book_store_database";
$con = new mysqli ($host,$user,$password,$database);
return $con;
}
?>