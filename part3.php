/////////////////////////////////////////////////
  
  
<?
//mysql -u root -p

mysql_connect("localhost","root","");
mysql_select_db("librarie");
mysql_query("select * FROM carti");

$resursa = mysql_query("select * from carti");
print $resursa;

$sql = "select * from carti";
$resursa = mysql_query($sql);

$nr = mysql_num_rows($resursa);
print "sunt $nr carti in baza de date";

$rezultat = mysql_rezult($resursa, 0,"titlu");
print $rezultat;


$arrRezultat = mysql_fetch_array($resursa , MYSQL_NUM);
print_r($arrRezultat);

//MYSQL_NUM
//MYSQL_ASSOC
//MYSQL_BOTH

print $arrRezultat[1]. " ". $arrRezultat[3]."<br>";
print $arrRezultat['id_carte']." ".arrRezultat['titlu'];

while($row= mysql_fetch_array($resursa))
{
	print $row['titlu']." ".$row['descriere'."<br>";
	
}

$arrRezultat = array($a,$b,$c);



?>

//////////////////////////////////////////////////////
