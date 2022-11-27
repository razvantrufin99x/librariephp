//stergere.php
 <form action = "stergere_act.php" method="POST">
 <select name="id_carte">
 <?
 mysql_connect("localhost","root","");
 mysql_select_db("librarie");
 $sql = "select id_carte , titlu from carti order by titlu asc";
 $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
 {
 print "<option value '".$row['id_carte']".$row['titlu']."</option>";
 }
 ?>
 
 </select>
 <input type = "submit" value = "sterge"> 
 </form>
 