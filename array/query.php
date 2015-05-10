<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('carti1');


   // insert a datarow, primary key is auto_increment
   // value is a unique key
   $query = "INSERT INTO autori (AUTOR) VALUES ('autor')";
   mysql_query( $query );

   echo 'LAST_INSERT_ID: ',
          mysql_query( "SELECT LAST_INSERT_ID()" ),
          '<br>mysql_insert_id: ',
          mysql_insert_id();

?>
