<?php
$server = "sql210.epizy.com";
$user = "epiz_33544745";
$password = "ujfQbfNDNZrF";
$database = "epiz_33544745_dbPurnaDrive";

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