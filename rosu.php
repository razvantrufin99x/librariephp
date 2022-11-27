//rosu.php
	
	
	<?
	
	$text = "un text oarecare ";
	$text = str_replace("text", "<b><font color='red'>text</font></b>",$text);
	print $text;
	?>
	
	
	
	<?
	session_start():
	  session_start();
   include("conectare.php");
    include("page_top.php");
	 include("meniu.php");
	 $cuvant = $_GET['cuvant'];
	 ?>
	 
	 <td valign="top">
	 <h1> rezultatele cautarii </h1>
	 <p> textul cautat : <b> <?=$cuvant?>
	 </b></p>
	 <b> autori </b>
	 <blockquote>
	 <?
	 $sql = "select id_autor, nume_autor from autori where nume_autor like "%".$cuvant."%'";
	 $resursa = mysql_query($sql);
	 if(mysql_num_rows($resursa)==0)
	 {
	 print "<i> nici un rezultata </i>";
	 {
	 while($row = mysql_fetch_array($resursa))
	 {
	 $nume_autor = str_replace($cuvant, "<b>$cuvant>/b>",
	 $row['nume_autor']);
	 print '<a href = "autor.php?id_autor='.$row['id_autor'].'">
	 '.$nume_autor.'</a><br>';
	 
	 }
	 ?>
	 
	 </blockquote>
	 
	 <b> titluri</b>
	 <blockquote>
	 <?
	 
	 $sql = "select id_carte , titlu from carti where titlu like '%".$cuvant."%'";
	 $resursa = mysql_query($sql);
	 if(mysql_num_rows($resursa)==0)
	 {
	  print "<i> nici un rezultat </i>";
	  }
	  
	  while($row = mysql_fetch_array($resursa))
	  {
	  $titlu = str_replace($cuvant,"<b>$cuvant</b>",
	  $row['titlu']);
	  print '<a href = "carte.php?id_carte='.$row['id_carte'].'">'
	  .$titlu.'</a><br>';
	  
	  }
	  ?>
	  
	  </blockquote>
	  <b> descriere </b>
	  <blockquote>
	  <?
	  
	  $sql = "select id_carte, titlu, descriere from carti where descriere like '%".$cuvant."%'";
	  $resursa = mysql_query($sql);
	  if(mysql_num_rows($resursa)==0)
	  {
	  print "<i> nici un rezultat </i>";
	  }
	  
	  while($row = mysql_fetch_array($resursa))
	  {
	  $descriere = str_replace($cuvant,"<b>$cuvant</b>",
	  $row ['descriere']);
	print '<a href = "carte.php?id_carte = '$row['id_carte'].'">'
	.$row['titlu'.'</a><br>
	'.$descriere.'<br><br>';
	}
	</blockquote>
	
	</td>
	?>
	
	include("page_bottom.php");
	
	?>