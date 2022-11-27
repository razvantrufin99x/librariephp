//get
//formular html

<form action ="adunare.php" method = "GET">
 primul nr : <input type = "text" name = "nr1"><br>
 al doilea nr : <input type = "text" name = "nr2"><br>
 <input type="submit" name="buton_submit" value="aduna">
</form>

//adunare php get
$nr1 = $_GET['nr1'];
$nr2 = $_GET['nr2'];
$rezultat = $nr1  + $nr2 ;
print " rezultatul adunarii lui $nr1 cu $nr2 este $rezultat";

//call GET
http://localhost//adunare.php?nr1=9053&nr2=4906


//globals
php.ini
$_FILES
Globals = off;




?>


//////////////////////////////////////////////////

