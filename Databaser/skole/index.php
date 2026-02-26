<?php
include 'db.php';
?>

<?php
$sql = "SELECT * FROM elever";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <H1>Skoledatabase</H1>
    <h2>Liste over elever</h2>

   
    <a href="create.php">Ny elev</a><br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Klasse</th>
            <th>Handlinger</th>
        </tr>
 
   <?php
   
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fornavn'] . "</td>";
        echo "<td>" . $row['etternavn'] . "</td>";
        echo "<td>" . $row['klasse'] . "</td>";
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