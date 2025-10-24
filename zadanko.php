<style>
    table{
        border: 1px solid black;
        border-collapse: collapse;
    }
    td{
        border: 1px solid black;
        width: 50px;
        height: 50px;
    }

</style>

<?php
$conn = mysqli_connect("localhost", "root", "", "kadra");
$q = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $q);
echo "<table>";
while($row = mysqli_fetch_row($result)){
    echo "<tr>";
    for($i = 0; $i < 6; $i++){
        echo "<td>".$row[$i]."</td>";
    }
    echo "</tr>";
}
$kolor = 0;
echo "</table>";
echo "<table>";
for($x = 0; $x < 8; $x++){
    echo "<tr>";
    for($y = 0; $y < 8; $y++){
        $kolor = rand(1, 3);
        if($kolor == 1){
            echo "<td style='background-color: red'></td>";
        }
        else if($kolor == 2){
            echo "<td style='background-color: blue'></td>";
        }
        else if($kolor == 3){
            echo "<td style='background-color: green'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>