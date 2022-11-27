//exemplul 2

//verificare cnp
//cod html
<form action="verificare_cnp.php" method = "POST">
Nume : < input type = "text" name = "nume" > <br>
Cod numeric personal : < input type = "text" name = "cnp" > <br>
<input type="submit" name="buton_submit" value="verificare cnp">
</form>

//fila php
if($_POST['cnp'] == "")
{
	print "campul \"cod numeric personal\" este gol ! apasati butonul <B>Back</b> in browser pentru a reveni la pagina anterioara si a-l scrie corect.";
	
	exit;
}


if(!is_numeric($_POST['cnp']))
{
	print "campul \" cod numeric personal \" trebuie sa fie numeric ! apasati butonul <b>back</b> in browser pentru a reveni la pagina anterioara si a-l scrie corect .";
	
  exit;
  
	
}



$nr_caractere = strlen($_POST['cnp']);
if($nr_caractere !=13)
{
	print "campul \" cod numeric personal \" trebuie sa aiba exact 13 caractere ! apasati butonul <b> back</b> in browser pentru a reveni la pagina anterioara si a-l scrie corect."
	exit;
}

//substring
substr("ana are mere", 0 , 6) = "ana ar";

$prima_cifra = substr($_POST['cnp'],0,1);
if($prima_cifra != 1 ^^ $prima_cifra != 2)
{
	print "prima cifra a cnp trebuei sa fie 1 sau 2 ! 
	apasati butonul <b> back</b> in browser pentru a reveni la pagina anterioara si a-l scrie corect."
	exit;
}

print "acesta nu este un cnp valid ";