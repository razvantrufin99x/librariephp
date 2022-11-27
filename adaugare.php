//adaugare.php
 <?
 mysql_connect("localhost","root","");
 mysql_select_db("librarie");
 $sql = " insert int ocarti(titlu) values (".$_POST['titlu']."')";
 mysql_query($sql);
 ?>
 
 <a href = "toate_cartile.php"> vezi modificarea!</a><br>
 <a href = "adaugare.html">adauga inca un titlu!</a>
 