
  
 
  <?php
  $totalGeneral = 0;
  if($_POST['nume'] == "")
  {
  print  $_POST['nume'];
  print 'trebuie sa completati numele  < a href="cos.php"> inapoi </a>';
  exit;
  }
  if($_POST['adresa'] == "")
  {
  print  $_POST['adresa'];
  print 'trebuie sa completati adresa  <a href="cos.php"> inapoi </a>';
  exit;
  
  }
  
  
  session_start();
  $nrCarti = array_sum($_SESSION['nr_buc']);
  if($nrCarti == 0)
  {
  print ' trebuie sa cumparati cel putin o carte ! 
  <a href = "cos.php">inapoi </a>';
  exit;
  }
  
  include ("conectare.php");
  
  //INSERT INTO `librarie`.`tranzactii` (`nume_cumparator`, `adresa_cumparator`) VALUES ('razvan', 'nou');
  $sqlTranzactie = "insert into tranzactii (nume_cumparator, adresa_cumparator) value ('".$_POST['nume']."','".$_POST['adresa']."')";
  $resursaTranzactie = mysql_query($sqlTranzactie);
  
  $id_tranzactie = mysql_insert_id();
  
  for($i=0;$i<count($_SESSION['id_carte']); $i++)
  {
   if($_SESSION['nr_buc'][$i] > 0)
   {
	   //INSERT INTO `librarie`.`vanzari` (`id_tranzactie`, `id_carte`, `nr_buc`) VALUES ('3', '1', '1');
    $sqlVanzare = "insert into vanzari values ('".$id_tranzactie."','".$_SESSION['id_carte'][$i]."','".$_SESSION['nr_buc'][$i]."')";
	mysql_query($sqlVanzare);
	
	
	
	
	$emailDestinatar = "razvantrufin@gmail.com";
	
	
	$subiect = " o noua comanda " ;
	
	$mesaj = " o noua comanda de la <b> " . $_POST['nume']."</b><br>";
	$mesaj .="adresa : ". $_POST['adresa']."<br>";
	$mesaj .="cartile comandate : <br><br>";
    $mesaj .="<table border = '1' cellspacing = '0' cellpadding='4'>";
	for($i = 0 ; $i < count($_SESSION['id_carte']); $i++)
	{
	if($_SESSION['nr_buc'][$i] > 0 )
	{
	$mesaj .= "<tr><td>".$_SESSION['titlu'][$i].": de  ".$_SESSION['nume_autor'][$i]. "</td><td>".$_SESSION['nr_buc'][$i]." buc </td></tr>";
	$totalGeneral = $totalGeneral + ($_SESSION['nr_buc'][$i] *$_SESSION['pret'][$i] );
	}
	
	}
  }
  }
  
  
  $mesaj .="</table>";
  $mesaj .="total: <b>". $totalGeneral ."</b>";
  
  $headers = "MIME-Version:1.0\r\nContent-type:text/html ;charset=iso-8859-2\r\n";
  
  mail($emailDestinatar, $subiect, $mesaj , $headers);
  session_unset();
  session_destroy();
  
  header("location: multumiri.php");
  ?>
  
  
  