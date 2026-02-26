<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Legg til elever</title>
</head>

<body>
    <header>
        <h1>Legg til nye elever i databasen</h1>
        <h3>Her kan du legge til nye elever i databsen din!</h3>
    </header>

    <main>
        <?php
        // Hvis skjemaet er sendt inn
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fornavn = $_POST['fornavn'];
            $etternavn = $_POST['etternavn'];
            $klasse = $_POST['klasse'];
        // Bruker SQL kode for å hente data til den valgte eleven.
            $sql = "INSERT INTO elever (fornavn, etternavn, klasse)
                VALUES ('$fornavn', '$etternavn', '$klasse')";
 
            if ($conn->query($sql) === TRUE) {
                echo "<p>Elev lagt til!</p>";
            } else {
                echo "<p>Feil: " . $conn->error . "</p>";
            }
        }
        ?>

        <form method="POST" action="">
            <label for="fornavn">Fornavn:</label><br>
            <input type="text" name="fornavn" required><br><br>
            <label for="etternavn">Etternavn:</label><br>
            <input type="text" name="etternavn" required><br><br>
            <label for="klasse">Klasse:</label><br>
            <input type="text" name="klasse" required><br><br>
            <button type="submit">Lagre elev</button>
        </form> 


        <br> <br>

    <a href="index.php">Tilbake til databsen din</a>
    </main>

    <footer>

    </footer>
</body>
</html>