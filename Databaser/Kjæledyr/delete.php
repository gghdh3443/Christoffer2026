<?php
include 'db.php';
?>


<?php

if (isset($_GET['id'])) { 
    $id = (int)$_GET['id'];

    $sql = "SELECT * FROM kjaeledyr WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "<p>Fant ikke kjæledyret.</p>";
        echo "<a href='index.php'>Tilbake</a>";
        exit();
    }

    $kjæledyr = $result->fetch_assoc();


    if (isset($_POST['bekreft'])) {
        $sql = "DELETE FROM kjaeledyr WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Kjæledyr slettet!</p>";
            echo "<a href='index.php'>Tilbake til listen</a>";
            exit();
        } else {
            echo "<p>Feil: " . $conn->error . "</p>";
        }
    }

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
     
        <h2>Er du sikker på at du vil slette dette kjæledyret?</h2>
        <p>ID: <?php echo $kjæledyr['id']; ?></p>
        <p>Navn: <?php echo $kjæledyr['navn']; ?></p>
        <p>Type: <?php echo $kjæledyr['type']; ?></p>
        <p>Rase: <?php echo $kjæledyr['rase']; ?></p>
        <p>Alder: <?php echo $kjæledyr['alder']; ?></p>
        <p>Eier: <?php echo $kjæledyr['eier']; ?></p>
        <form method="post">
            <button type="submit" name="bekreft">Ja, slett</button>
            <button type="submit" name="avbryt">Avbryt</button>
        </form>
    </body>
    </html>

<?php

} else {  // 
    echo "<p>Ingen kjæledyr valgt.</p>";
}
?>