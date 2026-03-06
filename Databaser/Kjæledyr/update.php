<?php
include 'db.php';
?>

<?php
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM kjaeledyr WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
    echo "Ingen kjæledyr funnet med ID: $id";
    exit;
}

$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $navn = $_POST['navn'];
    $type = $_POST['type'];
    $rase = $_POST['rase'];
    $alder = $_POST['alder'];
    $eier = $_POST['eier'];
    $sql = "UPDATE kjaeledyr SET
            navn = '$navn',
            type = '$type',
            rase = '$rase',
            alder = '$alder',
            eier = '$eier'
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
        <label for="navn">Navn:</label><br>
        <input type="text" name="navn" required 
            value="<?php echo $row['navn']; ?>"><br><br>
        <label for="type">Type:</label><br>
        <input type="text" name="type" required 
            value="<?php echo $row['type']; ?>"><br><br>
        <label for="rase">Rase:</label><br>
        <input type="text" name="rase" required 
            value="<?php echo $row['rase']; ?>"><br><br>
        <label for="alder">Alder:</label><br>
        <input type="number" name="alder" required 
            value="<?php echo $row['alder']; ?>"><br><br>
        <label for="eier">Eier:</label><br>
        <input type="text" name="eier" required 
            value="<?php echo $row['eier']; ?>"><br><br>
        <button type="submit">Lagre endringer</button>
    </form>
    <br>
    <a href="index.php">Tilbake til oversikt</a>
</body>
</html>
