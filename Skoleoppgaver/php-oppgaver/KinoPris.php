<?php 

// Sjekk om skjemaet er sendt inn 

$antallBarn = '';
$antallUngdom = '';
$antallVoksen = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    // Hent input fra brukeren 

    $antallBarn = ($_POST["antallBarn"]);
    $antallUngdom = ($_POST["antallUngdom"]); 
    $antallVoksen = ($_POST["antallVoksen"]);
    
    $prisBarn = 80;
    $prisUngdom = 100;
    $prisVoksen = 120;

    $resultatBarn = $antallBarn * $prisBarn;
    $resultatUngdom = $antallUngdom * $prisUngdom;
    $resultatVoksen = $antallVoksen * $prisVoksen;

    $totalPris = $resultatBarn + $resultatUngdom + $resultatVoksen;
} 

?> 

 

<!DOCTYPE html> 

<html> 

<head> 

    <title>Kino Pris</title> 

</head> 

<body> 

<h2>Hei! <br> <br> <br> Skriv inn hvor mange du vil ha med på kino:</h2> 

 

<form method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>"> 

    <label for="name">Barn (2-12 år) </label> <br>

    <input type="number" name="antallBarn" value="<?php echo $antallBarn;?>"> 

    <br> <br>


    <label for="name">Ungdom (13-17 år) </label> <br>

    <input type="number" name="antallUngdom" value="<?php echo $antallUngdom; ?>"> 

    <br> <br>


    <label for="name">Voksen (over 18 år) </label> <br>

    <input type="number" name="antallVoksen" value="<?php echo $antallVoksen; ?>">

    <br> <br>

    <input type="submit" value="Send inn">

</form> 


 

<?php 


echo "Totaltprisen din for biletene dine blir: " . $totalPris . "kr";

?> 

</body> 

</html> 