//part 1

<html>
<head>
<meta http-equiv="Content_Type" content="text/HTML" ; charset=iso-8859-2">
<title>libraria mea</title>
</head>
<body>
<h1> libraria mea</h1>
<?
mysql_connect("localhost", "root", "");
mysql_select_db("librarie");
#sql = "select titlu from carti, domenii where nume_domeniu = '".$_GET['nume_domeniu']."' and domenii.id_domeniu = carti.id_domeniu";
$resursa = mysql_query($sql);
$nr = mysql_num_rows($resursa);
print "<p>sunt $nr carti in acest domeniu </p>";
?>

<h2>Titluri</h2>
<?

while($row = mysql_fetch_array($resursa))
{
 print $row['titlu'].'<br>';
 
}
?>
</body>
</html>