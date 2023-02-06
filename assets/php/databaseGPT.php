<?php
    $server = "localhost";
    $user= "root";
    $password = "";
    $database = "dbPurnaDrive";

    $con = mysqli_connect($server,$user,$password,$database);

    if($con){
?>
<script>
alert("Connection Successful");
</script>
<?php
    }else{
?>
<script>
alert("No Connection");
</script>
<?php
    }
?>
<?php
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, type, size FROM uploads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<div class='container'>";
    while ($row = $result->fetch_assoc()) {
    echo "<div class='photo'>";
        echo "<img src='uploads/".$row["name"]."' alt='".$row["name"]."'>";
        echo "<p>".$row["name"]."</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
echo "No photos found in the database.";
}

$conn->close();
?>