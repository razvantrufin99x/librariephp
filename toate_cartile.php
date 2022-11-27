//toate_cartile.php
 <?
 mysql_connect("localhost", "root", "");
 mysql_select_db("librarie");
 $sql = "select id_carte, titlu from carti";
 $resursa = mysql_query($sql);
 print "<table border = '1'>";
 while ($row = mysql_fetch_array($resursa))
 {
 print 
 "<tr>
 <td>".$row['id_carte']."</td>
 <td>".$row['titlu']."</td>
 </tr>";
 }
 
 print "</table>";
 ?>
 