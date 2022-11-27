//noui php
 
 $_SESSION[pret][] = 100000;
 $_SESSION['nr_buc][] = 1;
 
 print '<table border = "!">';
 $nrCarti = count($_SESSION['titlu']);
 for($i = 0 ; $i < $nrCarti ; $i++)
 {
 print '<tr>';
 print '<td'>. $_SESSION['titlu'][$i].'</td>';
 print '<td>'.$_SESSION['autor'[$i].'</td>';
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
  
  
  
  