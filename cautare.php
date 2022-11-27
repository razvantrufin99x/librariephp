<?php
session_start();
include("conectare.php");
include("page_top.php");
include("meniu.php");
$cuvant = $_GET['cuvant'];
?>

<td valign="top">
<h1> rezultatele cautarii</h1>
<p>textul cautat<b><?=$cuvant?>
</b></p>
<b>autori<?b>
<blockquote>
<?php
$sql = "select id_autor, nume_autor from autori where nume_Autor like '%".$cuvant."%'";
$resursa = mysql_query($sql);

if(mysql_num_rows($resursa)==0)
{
	print "<i> nici un rezultat </i>";
}

while($row=mysql_fetch_array($resursa))
{
	print '<a href="autor.php?id_autor='.$row['id_autor'].'">'.$row['nume_autor'].'</a><br>';
}
?>

</blockuote>
<b>titluri</b>
<blockquote>
<?php
$sql = "select id_carte, titlu from carti where titlu like '%".$cuvant."%'";
$resursa = mysql_query($sql);
if(mysql_num_rows($resursa)==0)
{
	print "<i>nici un rezultat</i>";
}

while($row=mysql_fetch_array($resursa))
{
	print '<a gref="carte.php?id_carte='.$row['id_carte'].'">'.$row['titlu'].'</a><br>';
}
?>
</blockquote>
<b>descrieri</b>
<blockquote>
<?php
$sql = " select id_carte, titlu, descriere from carti where descriere like '%".$cuvant."%'";
$resursa = mysql_query($sql);
if(mysql_num_rows($resursa)==0)
{
	
	print "<i>nici un rezultat</i>";
	
}	
while($row = mysql_fetch_array($resursa))
{
	print '<a href="carte.php?id_carte='.$row['id_carte'].'">'.$row['titlu'].'</a><br>'.$row['descriere'].'<br><br>';
}
?>
</blockquote>
</td>
<?php
include("page_bottom.php");
?>





