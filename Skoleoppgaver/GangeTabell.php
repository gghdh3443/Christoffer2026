<?php 

// Sjekk om skjemaet er sendt inn 

$tall = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    // Hent input fra brukeren 

    $tall = ($_POST["tall"]); 

} 

?> 

 

<!DOCTYPE html> 

<html> 

<head> 

    <title>Gangetabell</title> 

</head> 

<body> 

<h2>Hei! Skriv inn et tall, så får du hele gangetabellen for den:</h2> 

 

<form method="post">
    <input type="number" name="tall">
    <input type="submit" value="Send">
</form>> 

 

<?php 

if ($tall) {
    echo "Her ser du " . $tall . " gangen: ";
    echo $tall * 1 . " ";
    echo $tall * 2 . " ";
    echo $tall * 3 . " ";
    echo $tall * 4 . " ";
    echo $tall * 5 . " ";
    echo $tall * 6 . " ";
    echo $tall * 7 . " ";
    echo $tall * 8 . " ";
    echo $tall * 9 . " ";
    echo $tall * 10;
}

?> 

</body> 

</html> 