//am ramas la pagina 104
  
  include ("page_top.php");
   include ("meniu.php");
   ?>
   
   <td valign=="top">
   <h1>multumi,!</h1>
   va multumum ca ati cumparat de la noi !
   Veti primi comanda solicitata
   in cel mai scurt timp.
   </td>
   <?
   include("page_bottom.php");
   ?>
   
   
   
   <?
   session_start();
   include("conectare.php");
    include("page_top.php");
	 include("meniu.php");
	 
	 $cuvant = $_GET['cuvant'];
	 ?>
	 
	 
	 <td valign = "top">
	 <ha> rezultatele cautarii </h1>
	 <p> textul cautat : <b><?=$cuvant?>
	 </b></p>
	 <b>Autori</b>
	 <blockquote>
	
	$sql= " select id_autor, nume_autor from autori where nume_autor like '%". $cuvant."%'";
	$resursa =mysql_query($sql);
	if(mysql_num_rows($resursa)==0)
	{
		print "<i> nici un rezultata </i>";
	}
	while($row = mysql_fetch_array($resursa))
	{
		print '<a href = "autor.php? id_autor='.$row['id_autor'].'">'.
		$row['nume_autor'].'</a><br>';
		
	}
	?>
	</blockquote>
	
	
	<b>titluri</b>
	<blockquote>
	<?
	$sql= " select id_carte, titlu from carti where titlu like '%". $cuvant."%'";
	$resursa =mysql_query($sql);
	if(mysql_num_rows($resursa)==0)
	{
		print "<i> nici un rezultata </i>";
	}
	while($row = mysql_fetch_array($resursa))
	{
		print '<a href = "carte.php? id_carte='.$row['id_carte'].'">'.
		$row['id_carte'].'">;.$row['titlu'].'</a><br>';
		
	}
	?>
	</blockquote>
	
	<b>descriere</b>
	<blockquote>
	<?
	$sql= " select id_carte, titlu, descriere from carti where descriere like '%". $cuvant."%'";
	$resursa =mysql_query($sql);
	if(mysql_num_rows($resursa)==0)
	{
		print "<i> nici un rezultata </i>";
	}
	while($row = mysql_fetch_array($resursa))
	{
		print '<a href = "carte.php? id_carte='.$row['id_carte'].'">'.
		$row['titlu'].'">;.$row['descriere'].'</a><br>';
		
	}
	?>
	</blockquote>
	</td>
	<?
	include("page_bottom.php");
	?>
	
	
	
	$stringModificat = str_replace("textulk vechi din stringce urmeaza a fi modificat " , "texul nou, modificat", $stringVechi);
	
	