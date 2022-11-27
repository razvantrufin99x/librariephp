//stegere_act.php
 <?
mysql_connect("localhost","root","");
 mysql_select_db("librarie");
 $sql = "delete  from carti where id_carte = ". $_POST['id_carte'];
 mysql_query($sql);
 ?>
 
 <a href = "toate_cartile.php"> vezi modificarea!</a><br>
 <a href = "stergere.php">mai sterge una!</a>
 
 