
  <?php
  session_start();
  include("conectare.php");
   include("page_top.php");
    include("meniu.php");
	$actiune = $_GET['actiune'];
	$totalGeneral = 0;
  if(isset($_GET['actiune']) && $_GET['actiune'] == "adauga")
  {
  $_SESSION['id_carte'][]=$_POST['id_carte'];
  $_SESSION['nr_buc'][] = 1;
  $_SESSION['pret'][] = $_POST['pret'];
  $_SESSION['titlu'][]=$_POST['titlu'];
  $_SESSION['nume_autor'][] = $_POST['nume_autor'];
  }
  
  if(isset($_GET['actiune']) && $_GET['actiune'] == "modifica")
  {
  for($i=0; $i<count ($_SESSION['id_carte']); $i++)
  {
    $_SESSION['nr_buc'][$i] = $_POST['noulNrBuc'][$i];
  }
  
  }
  
  ?>
  
  
  <td valign = "top" >
  <h1>cosul de cumparaturi </h1>
  <form action="cos.php?actiune=modifica"  method="POST">
  <table border = "1" cellspacing="0" cellpadding="4">
  <tr bgcolor = "#f9f1e7">
  <td> <b> nr.buc </b> </td>
  <td> <b> carte</b> </td>
  <td> <b> pret </b> </td>
  <td> <b> total </b> </td>
  </tr>
  
  <?php
  for($i=0; $i<count ($_SESSION['id_carte']); $i++)
  {
  print '<tr><td><input type="text" name = "noulNrBuc['.$i.']" size="1" value= "'.$_SESSION['nr_buc'][$i].'">
  </td>  <td><b>'.$_SESSION['titlu'][$i].'</b>  de '.$_SESSION['nume_autor'][$i].'</td>
  <td align="right">'.$_SESSION['pret'][$i].' lei </td>  <td align ="right">'.($_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i]).' lei </td>  </tr>';
  
  $totalGeneral = $totalGeneral + ($_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i]);
  }
  
  
  print '<tr><td align="right" colspan="3"> <b> Toala lin cos </b> </td>  <td align ="right"><b>'.$totalGeneral.'</b> lei </td> </tr>';
  ?>
  
  </table>
  
  <input type="submit" value = " modifica " ><br><br>
  introduceti <b>0</b> pentru cartile ce doriti sa le scoateti din cos
  </form>
  
  
  <h1>Continuare </h1>
  
  <table>
  <tr><td width="200" align="center">
  <img src="cos.gif">
  <a href ="index.php"> continua cumparaturile </a> </td>
  <td width="200" align = "center" > 
  <img src= "casa.gif">
  <a href = "casa.php"> mergi la casa </a>
  </td></tr>
  </table>
  
  </td>
 
  <br>
  </div style="width:120px ; background-color:#f9f1e7; padding:4px ; border: solid #632415 1px">
  <b> cos</b><br>
  
  <?php
  
  include("page_bottom.php");
  
  
  for($j = 0; $j < count($_SESSION['id_carte']); $j++)
  {
   if($_SESSION['nr_buc'][$j] !=0)
   {
  print ' <tr> 
  <td> 
  <input type = "text" name = "noulNrBuc['.$j.']" size = "1" 
  value = "'.$_SESSION['nr_buc'][$j].'">  
  </td>  
  <td><b>'.$_SESSION['titlu'][$j].'</b> 
  de     '.$_SESSION['nume_autor'][$j].'  </td>
  <td align = "right"> '.$_SESSION['pret'][$j].' lei </td>
  <td align = "right">'.$_SESSION['pret'][$j] * $_SESSION['nr_buc'][$j].' lei </td>
  </tr>';
  $totalGeneral = $totalGeneral + ($_SESSION['pret'][$j] * $_SESSION['nr_buc'][$j]);
  }
  }
  ?>
  
  
  
  <?php
  $nrCarti = 0;
  $totalValoare= 0;
  for($k = 0 ; $k < count($_SESSION['titlu']); $k++)
  {
  $nrCarti = $nrCarti + $_SESSION['nr_buc'][$k];
  $totalValoare = $totalValoare + ($_SESSION['nr_buc'][$k] * $_SESSION['pret'][$k]);
  }
      
  
  ?>
  
  
  
  aveti 
  <b> 
  <?=$nrCarti?>
  </b> 
  carti in cos , in valoare total de 
  <b>
  <?=$totalValoare?>
  </b> 
  lei.
  <a href = "cos.php"> click aici pentru a vedea continutul cosului!</a>
  </div>
  
  
  
  
  
  
  
  