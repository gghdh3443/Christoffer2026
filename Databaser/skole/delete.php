<?php
include 'db.php';
?>

<?php
// Hvis elev-id er sendt
if (isset($_GET['id'])) { 
    $id = (int)$_GET['id'];
    // Hent elevens info
    $sql = "SELECT * FROM elever WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "<p>Fant ikke eleven.</p>";
        echo "<a href='index.php'>Tilbake</a>";
        exit();
    }

    $elev = $result->fetch_assoc();

    // Hvis bruker har trykket på "Ja, slett"
    if (isset($_POST['bekreft'])) {
        $sql = "DELETE FROM elever WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Elev slettet!</p>";
            echo "<a href='index.php'>Tilbake til listen</a>";
            exit();
        } else {
            echo "<p>Feil: " . $conn->error . "</p>";
        }
    }

    // Hvis bruker har trykket på "Avbryt"
    if (isset($_POST['avbryt'])) {
        header("Location: index.php");
        exit();
    }
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Bekreft sletting</title>
    </head>
    <body>
        <!-- Viser eleven og ber om bekreftelse for å slette -->"
        <h2>Er du sikker på at du vil slette denne eleven?</h2>
        <p>ID: <?php echo $elev['id']; ?></p>
        <p>Fornavn: <?php echo $elev['fornavn']; ?></p>
        <p>Etternavn: <?php echo $elev['etternavn']; ?></p>
        <p>Klasse: <?php echo $elev['klasse']; ?></p>
        <form method="post">
            <button type="submit" name="bekreft">Ja, slett</button>
            <button type="submit" name="avbryt">Avbryt</button>
        </form>
    </body>
    </html>

<?php
// Ellers hvis ikke elev-id er sendt
} else {  // 
    echo "<p>Ingen elev valgt.</p>";
}
?>
