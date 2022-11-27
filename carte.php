
<?php
  include("conectare.php");
  include("page_top.php");
  include("meniu.php");
  $id_carte = $_GET['id_carte'];
  $sql = "select titlu, nume_autor, descriere , pret from carti, autori where id_carte = ".$id_carte." and  carti.id_autor=autori.id_autor";
  $resursa = mysql_query($sql);
  
  $row = mysql_fetch_array($resursa);
  ?>
  <td valign ="top">
  <tabel>
  </tr>
  <td valign="top">
  <?php
  $adresaImagine = "coperte/".$id_carte.".jpg";
  if(file_exists($adresaImagine))
  {
  print '<img src="'.$adresaImagine.'" width="75" height="100" hspace="10><br>';
  }
  ?>
  
  
  </td>
  <td valign="top">
  <h1><?=$row['titlu']?></h1>
  <i>de <b><?=$row['nume_autor']?></b></i>
  <p><i><?=$row['descriere']?>
  </i></p>
  <p> pret : <?=$row['pret']?> lei</p>
  </td>
  </tr>
  </table>
   <p><b> Opinii cititori</b></p>
  <?php
  $sqlComentarii = "select * from comentarii where id_carte=".$id_carte;
  $resursaComentarii = mysql_query($sqlComentarii);
  while($row = mysql_fetch_array($resursaComentarii))
  {
  print '<div style = "width:400px;  border : 1px solid #ffffff; background-color:#f9f1e7;  padding: 5px">  <a href = "mailto:'.$row['adresa_email'].'">'.$row['nume_utilizator'].'</a>  <br>'.$row['comentariu'].'  </div>';
  }
  ?>
  
  <br>
  <form action="cos.php?actiune=adauga" method="POST">
  <input type="hidden" name="id_carte" value="<?=$id_carte?>">
  <input type="hidden" name="titlu" value="<?=$row['titlu']?>">
  <input type="hidden" name="nume_autor" value="<?=$row['nume_autor']?>">
  <input type="hidden" name="pret" value="<?=$row['pret']?>">
  <input type="submit" value="cumpara acum!">
  </form>
  
  <br>
  <div style = " width :400px; border : 1px solid #632415; background-color: #f9f1e7; padding:5px;">
  <b>adauga opinia ta:</b>
  <hr size="1">
  <form action="adauga_comentariu.php" method = "POST"> 
  Nume : <input type = "text" name = "nume_utilizator"><br>
  Email : <input type="text" name="adresa_email"><br><br>
  Comentariu : <br>
  <textarea name="comentariu" cols="45" > </textarea><br><br>
  <input type="hidden" name = "id_carte" value = "<?=$id_carte?>">
  <center><input type = "submit" value="adauga"></center>
  </form>
  </div>
  </td>
  
  <?php
  include("page_bottom.php");
  ?>
  
  
  
  

  
 
  