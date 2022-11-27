//lista_carti.php
 </form action ="modifica.php" method="POST" >
 <?
 mysql_connect("localhost","root","");
 mysql_select_db("librarie");
 $sql = " select id_carte , titlu , descriere from carti";
 $resursa = mysql_query($sql);
 while($row = mysql_fetch_array($resursa))
 {
 print "<input type='radio' name='id_carte' value='=.$row['id_carte']."'>
 <b>"/$row['titlu']."</b><br>
 <i>".$row['descriere']."</i>
 <br><br>";
 }
 
 ?>
 
 <input type = "submit" value = "modifica">
 </form>
 
 