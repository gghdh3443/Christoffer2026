<?php
include 'db.php';
?>

<?php
$sql = "SELECT * FROM kjæledyr";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <H1>Kjæledyrdatabase</H1>
    <h2>Liste over kjæledyr</h2>

    <a href="create.php">Ny kjaeledyr</a><br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Navn</th>
            <th>Type</th>
            <th>Rase</th>
            <th>Alder</th>
            <th>Eier</th>
            <th>Handlinger</th>
        </tr>

    <?php
   
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['navn'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['rase'] . "</td>";
        echo "<td>" . $row['alder'] . "</td>";
        echo "<td>" . $row['eier'] . "</td>";
        echo "<td>
            <a href='update.php?id=" . $row['id'] . "'>Rediger</a> | 
            <a href='delete.php?id=" . $row['id'] . "'>Slett</a>
        </td>";
        echo "</tr>";
    }
    ?>
    </table>
    
</body>
</html>