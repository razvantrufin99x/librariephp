//////////////////////////////////////////////////////




<?

//print
print " mesaj";

//variabile
$var1 = 2;
$vart = 2 * $var1;

print "rezultat = $vart " ;
print 'rezultat = '.$vart .' ;

print $vart;

//array
$filme = array(1=>"casablanca",2=>"blairwitch");
$filme = array("amor"=>"casablanca","groaza"=>"blairwitch");

$nrfilme = count($filme);


/*comentatii*/


print $filme[0];
print #filme[1];
print #filme[$nrfilme];
print #filme["groaza"];

//if
//loop
//operatori
//cuvinte cheie
//instructiuni
//functii
//while
//for


//string
//strlen


//switch


//functii

function recalc($x)
{
	$t = $x + 1;
	print $t;
}

$x = 1;
recalc($x);
recalc(16);



//date

$luna = date("n");
$ora = date("G");

