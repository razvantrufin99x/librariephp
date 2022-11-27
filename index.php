
  <?php
  include("conectare.php");
  include("page_top.php");
  include("meniu.php");
  ?>
  
  <td valign="top">
  <h1> prima pagina </h1>
  <b> cele mai noi carti </b>
  <table cellpadding="5">
  <tr>
  <?php
  $sql = " select id_carte, titlu , nume_autor, pret from carti, autori where carti.id_autor = autori.id_autor order by data desc limit 0,3";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
  print '<td align="center">';
  
  $adresaImagine = "coperte/".$row['id_carte'].".jpg";
  
  if(file_exists($adresaImagine))
  {
  print '<img src = "'.$adresaImagine.'" width="75" height="100"> <br>';
  }
  else
  {
  print '<div style = "width:75px; height:100px; border : 1px black solid ; background-color; #cccccc">  fara imagine </div>';
  
  }
  
  print '<b><a href = "carte.php?id_carte='.$row['id_carte'].'">' .$row['titlu'].'</a></b><br> de <i>'.$row['nume_autor'].'</i><br>  pret:'.$row['pret'].' lei  </td>';
  }
  
  ?>
  </td>
  </table>
  <b> cele mai populare carti </b>
  <table cellpadding="5">
  <tr>
  <?php
  
  $sqlVanzari = "select id_carte, sum(nr_buc) as bucatiVandute from vanzari group by id_carte order by bucatiVandute desc limit 0,3";
  
  $resursaVanzari = mysql_query($sqlVanzari);
  
  while ($rowVanzari = mysql_fetch_array($resursaVanzari))
  {
  $sqlCarte  = "select titlu , nume_autor , pret from carti , autori where carti.id_autor = autori.id_autor and id_carte=".$rowVanzari['id_carte'];
  $resursaCarte = mysql_query($sqlCarte);
  
  while($rowCarte = mysql_fetch_array($resursaCarte))
  {
   print '<td align="center">';
   $adresaImagine = "coperte/".$rowVanzari['id_carte'].".jpg";
   if(file_exists($adresaImagine))
    {
	 print '<img src = "'.$adresaImagine.'" width="75" height="100"> <br>';
	 }
	 else
	 {
	 print '<div style = "width:75px;
	 height:100px; border : 1px black solid ; background-color:$cccccc">
	 fara imagine</div>';
	 }
	 print '<b> <a href = "carte.php?id_carte='.$rowVanzari['id_carte'].'">'. 
	 $rowCarte['titlu'].'</a></b><br> de <i>'.$rowCarte['nume_autor'].'</i><br>
	 pret : '.$rowCarte['pret'].' lei </td>';
	 }
  
  }
  
  ?>
  
  </tr>
  </table>
  </td>
  </table>
  <?php
  include("page_bottom.php");
  ?>