//modifica.php
 <form action="modifica_act.php" method="POST">
 <?
 
 mysql_connect("localhost","root","");
 mysql_select_db("librarie");
 #sql = " select titlu , descriere from carti where id_carte=".$_POST['id_carte'];
 $resursa = mysql_query($sql);
 
 While($row = mysql_fetch_array($resursa))
 {
 print '<input type ="text" name = "titlu" value="'.$row['titlu'].'"><br>
 <textarea name ="descriere">'.
 $row['descriere'].'</textarea><br>';
 }
 
 
 print <input type="hidden" name="id_carte" value="'.$_POST['id_carte'].'">';
 ?>
 <input type="submit" value = "modifica">
 </form>