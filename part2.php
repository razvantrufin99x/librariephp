//part2
///////////////////////////////

<html>
<head>
<meta http-equiv="Content_Type" content="text/HTML" ; charset=iso-8859-2">
<title>libraria mea</title>
</head>
<body>
<h1> libraria mea</h1>
<?

//in documentul ???
mysql_connect("localhost", "root", "");
mysql_select_db("librarie");
#sql2 = "select id_domeniu, nume_domeniu  domenii ;
$resursa2 = mysql_query($sq2l);

while($row = mysql_fetch_array($resursa2))
{
 print <a href = "domeniu.php?id_domeniu=.$row['id_domeniu'].'">
 '.$row[.$nume_domeniu.].'</a><br>';
 
}

//in domeniu.php
$sql = "sqlect titlu from carti where id_domeniu=".$_GET['id_domeniu'];

?>
</body>
</html>