 //test.php
  
  session_start();
  if(isset($_POST['butonulAdauga']))
  {
  $_SESSION['titlu'][] = $_POST['titlu'];
  $_SESSION['autor'][] = $_POST['autor'];
  $_SESSION['nr_buc'][] = $_POST['nr_buc'];
  $_SESSION['pret'][] = $_POST['pret'];
  
  }
 ?>
 
 <form action = "test.php"
 method = "post">
 <table>
 <tr>
 <td> titlu : </td>
 <td><input type="text" name="titlu"></td>
 </tr>
 <tr>
 </tr>
 <tr>
 <td>autor : </td>
 <td><input type="text" name = "autor"></td>
 </tr>
 <tr>
 <td> pret : </td>
 <td><input type = "text" name = "pret"> </td>
 </tr>
 </tr>
 <tr>
 <td> nr buc:</td>
 <td><input type = "text" name = "nr_buc"></td>
 </tr>
 </tr>
 <td></td>
 <td>
 <input type="submit" name="butonulAdauga" value="adauga"></td>
 </tr>
 <table>
 </form>
 <?
 print <table border = "1" cellspacing ="0" cellpadding="4">';
 $nrCarti = count($_SESSION['titlu']);
 for($i = 0 ; $i < $nrCarti; $i++)
 {
 print '<tr>';
 print '<td>'.$_SESSION['titlu'][$i].'</td>';
 print '<td>'.$_SESSION['autor'][$i].'</td>';
 print '<td>'.$_SESSION['pret'][$i].'</td>';
 print '<td>'.$_SESSION['nr_buc'][$i].'</td>';
 $total = $_SESSION['nr_buc'][$i] * $_SESSION['pret'][$i];
  print '<td>'.$total.'</td>';
  print '</tr>';
  $totalGeneral = $totalGeneral + $total;
  }
  print '</table>';
 print 'total general :' . $totalGeneral;
 ?>
 
 
 
 <?
 session_start();
 if(isset($_POST['butonulAdauga']))
 {
 $_SESSION['titlu'][] = $_POST['titlu'];
  $_SESSION['autor'][] = $_POST['autor'];
   $_SESSION['nr_buc'][] = $_POST['nr_buc'];
    $_SESSION['pret'][] = $_POST['pret'];
	}
	
	if(isset($_POST['butonulModifica']))
  {
  for($i = 0 ; $i < count ($_SESSION['titlu']); $i++)
  {
  $_SESSION['nr_buc'][$i] = $_POST['nr_buc'][$i];
  }
  }
  
  ?>
  
  <form action="test.php" method="post"?
  <table>
  <tr>
  <td>titlu:</td>
   <td><input type = "text" name = "titlu"></td>
  </tr>
  <tr>
  <td>autor:</td>
  <td><input type = "text" name = "autor"></td></tr>
  <tr>
  <td> pret: </td>
  <td> <input type="text" name = "pret" ></td></tr>
  <tr>
  <td>nr buc: </td>
  <td> <input type="text" name = "nr_buc" ></td></tr>
  <tr>
  <td></td>
  <td> <input type="submit" name = "butonulAdauga"  value="Adauga"></td></tr>
  </table>
  </form>
  <?
  <form action = "test.php" method="post">
  <table border="1" cellspacing="0" cellpadding="4">
  <?
  print '<tr>
  <td><b> titlu</b></td>
  <td><b> autor</b></td>
  <td><b> pret </b></td>
  <td><b> nr buc </b></td>
  <td><b> total </b></td>
  </tr>';
  $nrCarti = count($_SESSION['titlu']);
  for($i = 0 ;$i < $nrCarti ; $i++)
  {
   print '<tr>';
   print '<td>'.$_SESSION['titlu'][$i].'</td>';
   print '<td>'.$_SESSION['autor'][$i].'</td>';
  print '<td>'.$_SESSION['pret'][$i].'</td>';
  print '<td><input type = "text" name ="nr_buc['.$i.']" value = "'.$_SESSION['nr_buc'][$i].'">
  </td>';
  $total = $_SESSION['nr_buc'][$i] * $_SESSION['pret'][$i]; 
  print '<td>'.$total.'</td>';
  print '<tr>';
  $totalGeneral = $totalGeneral + $total;
  }
  
  print '<table>';
  ?>
  
  <input type="submit" name="butonulModifica" value="modifica">
  </form>
  <?
  print 'total general : '. $totalGeneral;
  ?>
  
  <input tupe = "text" name = "nr_buc[0]" value="10">
  <input tupe = "text" name = "nr_buc[1]" value="5">
  //a treia carte nu am mai puso
  
   $_SESSION['nr_buc'][0]=$_POST['nr_buc'][0];
  $_SESSION['nr_buc'][1]=$_POST['nr_buc'][1];
  $_SESSION['nr_buc'][2]=$_POST['nr_buc'][2];
  
  
  <form action = "cos.php?actiune=adauga" method = "POST">
  <input type = "hidden" name = "id_carte" value="<?=$id_carte?>">
  <input type = "hidden" name = "titlu" value="<?=$rowCarte['titlu']?>">
  <input type = "hidden" name = "nume_autor" value="<?=$rowCarte['nume_autor']?>">
  <input type = "hidden" name = "pret" value="<?=$rowCarte['pret']?>">
  <input type="submit" value = "cumpara acum!">
  </form>