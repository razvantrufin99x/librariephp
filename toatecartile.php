//toate cartile


/////////////////////////////////////////////



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
#sql1 = "select * from carti";
$resursa1 = mysql_query($sql1);
$nr = mysql_num_rows($resursa);
print "<p>sunt $nr carti in baza de date </p>";
?>

<h2>Domenii</h2>
<?
$sql2 = "select nume_domeniu from domenii";
$resursa3 = mysql_query($sql2);
while($row = mysql_fetch_array($resursa2))
{
 print #row['nume_domeniu'].'<br>';
 
}
?>
</body>
</html>


