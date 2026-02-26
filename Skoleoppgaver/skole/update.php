<?php
include 'db.php';
?>

<?php
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM elever WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
    echo "Ingen elev funnet med ID: $id";
    exit;
}

$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fornavn = $_POST['fornavn'];
    $etternavn = $_POST['etternavn'];
    $klasse = $_POST['klasse'];
    $sql = "UPDATE elever SET
            fornavn = '$fornavn',
            etternavn = '$etternavn',
            klasse = '$klasse'
            WHERE id = $id";
if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Rediger elev</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Rediger elev</h1>
    <!-- HTML-skjema for å redigerere elevens data-->
    <form method="POST" action="">
        <label for="fornavn">Fornavn:</label><br>
        <input type="text" name="fornavn" required 
            value="<?php echo $row['fornavn']; ?>"><br><br>
        <label for="etternavn">Etternavn:</label><br>
        <input type="text" name="etternavn" required 
            value="<?php echo $row['etternavn']; ?>"><br><br>
        <label for="klasse">Klasse:</label><br>
        <input type="text" name="klasse" required 
            value="<?php echo $row['klasse']; ?>"><br><br>
        <button type="submit">Lagre endringer</button>
    </form>
    <br>
    <a href="index.php">Tilbake til oversikt</a>
</body>
</html>
