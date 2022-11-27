<?php
 
 session_start();
 
 include ("conectare.php");
  include("page_top.php");
 include("meniu.php");
 ?>
 
 <td valign ="top">
 <h1> casa </h1>
  acestea sunt cartile comandate de dvs.:
 <table border ="1" cellspacing="0" cellpadding ="4">
 <tr bgcolor ="#f9f1e7">
 <td ><b> nr.buc </b></td>
 <td><b> carte </b></td>
 <td><b> pret </b></td>
 <td><b> total </b></td>
 </tr>
 
 <?php
  $totalGeneral = 0;
 for($i= 0 ;$i< count($_SESSION['id_carte']); $i++)
{
 
 if ($_SESSION['nr_buc'][$i] != 0)
{ 
 print '<tr ><td >'.
 $_SESSION ['nr_buc'] [$i].'</td> 
 <td ><b>'.$_SESSION['titlu'] [$i].' 
 </b> de '.$_SESSION['nume_autor'] [$i].' 
 </td> 
 <td align="right">' 
 .$_SESSION['pret'][$i].'  lei </td> 
 <td align="right">'
 .$_SESSION['pret'][$i] * $_SESSION['nr_buc'][$i].' lei </td></tr >';
 $totalGeneral = $totalGeneral + ($_SESSION['pret'] [$i] * $_SESSION['nr_buc'] [$i] ).' lei </td></tr>';
 
 }
 }
 print '<tr> 
 <td align ="right" colspan="3">
 <b> total de plata </b></ td> 
 <td align ="right"> 
 <b>'.$totalGeneral.'</b> lei </td>
   <tr>;' 
  ?>
  </table>
  <h1> detalii </h1>
  
  <form action="prelucrare.php"  method ="POST"> 
  <table>
  <tr> 
  <td><b>numele: </b></td> 
  <td> <input type="text" name="nume"> </td> 
  </tr> 
  <tr> 
  <td valign="top"><b>adresa: </b> </td> 
  <td> <textarea name="adresa" rows="6"></textarea></td> 
  </tr> 
  <tr> 
  <td> </td> 
  <td> <input type="submit"  value="trimite"> </td> 
  </tr> 
  </table> 
  </form>
  
  </td> 
  <?php
  include ("page_bottom.php");
  ?>
  

 
 