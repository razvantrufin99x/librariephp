 //operatii.php
 <?
 mysql_connect("localhost","root","");
 mysql_select_db("librarie");
 $sql = "insert into carti(titlu) values ('dune')";
 mysql_query($sql);
 ?>
 
 
 
 <A href = "toate_cartile.php">
 vezi modificarea !</a>
 