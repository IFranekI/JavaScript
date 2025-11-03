<?php

$conn = mysqli_connect("localhost", "root", "", "piekarnia");
$q = "SELECT DISTINCT Rodzaj FROM wyroby ORDER BY Rodzaj DESC";
$result = mysqli_query($conn, $q);
echo "<form method='POST'>";
echo "<select name='rodz'>";
while($row = mysqli_fetch_row($result)){
    echo "<option>$row[0]</option>";
}
echo "</select>";
echo "<button name='btn1'>Wybierz</button>";
if(isset($_POST['btn1'])){
    $type = $_POST['rodz'];
    $q2 = "SELECT Rodzaj, Nazwa, Gramatura, Cena FROM wyroby WHERE Rodzaj = '$type'";
    $result2 = mysqli_query($conn, $q2);
    echo "<table>";
    while($row2 = mysqli_fetch_row($result2)){
        echo "<tr>";
        for($i = 0; $i < 4; $i++){
            echo "<td>$row2[$i]</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

echo "</form>";
mysqli_close($conn)
?>