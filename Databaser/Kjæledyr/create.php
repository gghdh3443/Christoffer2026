<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Legg til nye kjæledyr i databasen din!</h1>
    </header>


<main>
        <?php
        // Hvis skjemaet er sendt inn
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $navn = $_POST['navn'];
            $type = $_POST['type'];
            $rase = $_POST['rase'];
            $alder = $_POST['alder'];
            $eier = $_POST['eier'];
        // Bruker SQL kode for å hente data til den valgte eleven.
            $sql = "INSERT INTO elever (navn, type, rase, alder, eier)
                VALUES ('$navn', '$type', '$rase', '$alder', '$eier')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Kjæledyr lagt til!</p>";
            } else {
                echo "<p>Feil: " . $conn->error . "</p>";
            }
        }
        ?>

        <form method="POST" action="">
            <label for="navn">Navn:</label><br>
            <input type="text" name="navn" required><br><br>
            <label for="type">Type:</label><br>
            <input type="text" name="type" required><br><br>
            <label for="rase">Rase:</label><br>
            <input type="text" name="rase" required><br><br>
            <label for="alder">Alder:</label><br>
            <input type="text" name="alder" required><br><br>
            <label for="eier">Eier:</label><br>
            <input type="text" name="eier" required><br><br>
            <button type="submit">Lagre kjæledyr</button>
        </form> 


        <br> <br>

    <a href="index.php">Tilbake til databsen din</a>
    </main>

    <footer>

    </footer>
</body>
</html>