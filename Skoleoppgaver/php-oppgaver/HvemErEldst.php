<?php 

// Sjekk om skjemaet er sendt inn 

// lager 2 variabler alder 1 og alder 2

$alder1 = '';
$alder2 = ''; 

// lager enda en variabel som heter diff for å regne differanse på alderen senere i oppgaven, her bruker jeg også en abs funksjon som alltid gjør tallet man får tilbake alltid positivt.

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    // Hent input fra brukeren 

    $alder1 = ($_POST["person1"]); 
    $alder2 = ($_POST["person2"]);

    $diff = abs($alder1 - $alder2);

} 

?> 

 

<!DOCTYPE html> 

<html> 

<head> 

    <title>Hvem er Eldst</title> 

</head> 

<body> 

<h2>Hei! Skriv inn alderen på 2 Personer:</h2> 

 

<form method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>"> 

    <label for="person1">Person 1: </label> 

    <input type="number" name="person1" value="<?php echo $alder1; ?>"> 

    <label for="person2">Person 2: </label> 

    <input type="number" name="person2" value="<?php echo $alder2; ?>"> 

    <input type="submit" value="Send inn"> 

</form> 

<br>

<?php 

if ($alder1 > $alder2) {
    echo "Person 1 er eldre en Person 2, ";


    echo "Aldersforskjellen er $diff år";

}
elseif ($alder1 < $alder2) {
    echo "Person 2 er eldre en Person 1, ";


    echo "Aldersforskjellen er $diff år";

}



?> 

</body> 

</html> 