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
    <style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
    }

    .drop-zone {
        background-color: #f2f2f2;
        border: 2px dashed #ccc;
        border-radius: 10px;
        height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .drop-zone:hover {
        border-color: #999;
        box-shadow: 0px 0px 10px 0px #ccc;
    }

    .drop-zone p {
        font-size: 16px;
        color: #333;
        margin-top: 10px;
    }

    .submit-button {
        background-color: #4caf50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .submit-button:hover {
        background-color: #3e8e41;
        box-shadow: 0px 0px 10px 0px #3e8e41;
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="drop-zone">
                <input type="file" name="fileToUpload" id="fileToUpload" />
                <p>Drag and drop a file here or click to select a file</p>
            </div>
            <input type="submit" value="Upload" name="submit" class="submit-button">
        </form>
    </div>

    <script src="./assets/js/script.js"></script>
</body>

</html>