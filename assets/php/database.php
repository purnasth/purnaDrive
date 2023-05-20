<?php
// *Database for infinityfree.com
// $server = "sql210.epizy.com";
// $user = "epiz_33544745";
// $password = "ujfQbfNDNZrF";
// $database = "epiz_33544745_dbPurnaDrive";
// *Database for 000webhost.com
// $server = "localhost";
// $user = "id20287880_root";
// $password = "SE4y!xuIGfdgk/qk";
// $database = "id20287880_dbpurnadrive";
// *Database for localhost
$server = "localhost";
$user = "root";
$password = "";
$database = "dbPurnaDrive";
// ?Database for infinityfree.com Updated
// $server = "sql206.epizy.com";
// $user = "epiz_34246768";
// $password = "2NpTJClSNni";
// $database = "epiz_34246768_dbPurnaDrive";


$con = mysqli_connect($server, $user, $password, $database);

if ($con) {
?>
    <!-- <script>
        alert("Welcome to Purna Drive");
    </script> -->
<?php
} else {
?>
    <!-- <script>
        alert("No Connection");
    </script> -->
<?php
}
?>

<!-- <label>This is the database of Purna Drive.</label> -->