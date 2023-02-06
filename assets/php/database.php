<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "dbPurnaDrive";

$con = mysqli_connect($server, $user, $password, $database);

if ($con) {
?>
    <script>
        alert("Connection Successful");
    </script>
<?php
} else {
?>
    <script>
        alert("No Connection");
    </script>
<?php
}
?>