<?php
require_once './assets/php/session.php';
$username = $_SESSION['username'];
if (empty($username)) {
    header("Location:form.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Purna Drive</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <div id="drive">
        <header>
            <label for="">
                <a href="https://www.purnashrestha.com.np/" target="_blank">Purna Drive</a>
            </label>
            <div class="dynamic-island">
                <img class="lens" alt="lens picture" src="./assets/svg/lens.svg" />
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="content">
                    <div class="details">
                        <p class="loading">Loading...</p>
                    </div>
                    <div class="action">
                        <section class="progress-area"></section>
                        <section class="uploaded-area"></section>
                    </div>
                </div>
            </div>
            <i class="btn btn1"></i>
            <i class="btn btn2"></i>
            <i class="btn btn3"></i>
            <i class="rightSideBtn"></i>
        </header>
        <!-- <div class="container"> -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="drop-zone">
                <input type="file" class="file-input" name="fileToUpload" id="fileToUpload" hidden />
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <p>Drag and drop a file here or click to select a file</p>
            </div>
            <!-- ===== FOR MANUAL INPUT BUTTON ===== -->
            <!-- <input type="submit" value="Upload" name="submit" class="submit-button"/> -->
        </form>
        <!-- </div> -->
    </div>
    <script src="./assets/js/script.js"></script>
</body>

</html>