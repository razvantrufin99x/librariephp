
  <td valign="top" width="125">
  <div style="width:120px; background-color:#F9F1E7; padding:4px; border : solid #632415 1px">
  <b> alege domeniul </b>
  <hr size ="1">
  <?php
  $sql = "select * from domenii order by nume_domeniu asc";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
  print '<a href = "domeniu.php?id_domeniu='.$row['id_domeniu'].'">'.$row['nume_domeniu'].'</a><br>';
  
  }
  ?>
  
  </div><br>
  
  <div style="width:120px; background-color:#f9f1e7; padding:4px; border:solid #632415 1px">
  <form action = "cautare.php" method="GET">
  <b>cautare</b><br>
  <input type	= "text" name="cuvant" size="12"><br>
  <input type = "submit" value = "cauta">
  </form>
  </div>
  
  </td>