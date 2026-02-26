<?php 

// Sjekk om skjemaet er sendt inn 

$navn = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    // Hent input fra brukeren 

    $navn = ($_POST["navn"]); 

} 

?> 

 

<!DOCTYPE html> 

<html> 

<head> 

    <title>PHP Form Eksempel</title> 

</head> 

<body> 

<h2>Hei! Skriv inn navnet ditt:</h2> 

 

<form method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>"> 

    <label for="name">Navn: </label> 

    <input type="text" name="navn" value="<?php echo $navn; ?>"> 

    <input type="submit" value="Send inn"> 

</form> 

 

<?php 

if ($navn) { 

    echo "<h3>Hei, " . $navn . "!</h3>"; 

} 

?> 

</body> 

</html> 