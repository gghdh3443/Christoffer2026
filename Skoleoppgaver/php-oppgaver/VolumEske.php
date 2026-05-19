<?php 

// Sjekk om skjemaet er sendt inn 

$lengde = '';
$høyde = '';
$bredde = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    // Hent input fra brukeren 

    $lengde = ($_POST["lengde"]); 
    $høyde = ($_POST["høyde"]); 
    $bredde = ($_POST["bredde"]); 

    

} 

?> 

 

<!DOCTYPE html> 

<html> 

<head> 
    
    <title>Størst mulig volum av et ark</title> 

</head> 

<body> 

<h2>Hei! <br> Skriv inn størrelsene på arket ditt: </h2> 

 

<form method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>"> 

    <label for="name">Sett inn lengde(cm): </label> 

    <input type="number" name="lengde" value="<?php echo $lengde; ?>"> 

    <br> <br>


    <label for="name">Sett inn bredde(cm): </label> 

    <input type="number" name="bredde" value="<?php echo $bredde; ?>"> 

    <br> <br>

    
    <label for="name">Sett inn høyde(cm): </label> 

    <input type="number" name="høyde" value="<?php echo $høyde; ?>"> 

    <br> <br>

    
    <input type="submit" value="Send inn"> 

</form> 

 

<?php 

$volum = $lengde * $bredde * $høyde;

echo "Volumet er: ", $volum, "cm";

?> 

</body> 

</html> 
