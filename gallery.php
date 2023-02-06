<?php
echo '<link href="./assets/css/gallery.css" rel="stylesheet">';
$dir = opendir(("uploads/"));
while (($file = readdir($dir)) !== false) {
    if ($file == '.' || $file == '..') {
        continue;
    }
?>
<div class="gallery-collection">
    <h2 class="heading">Purna Drive Gallery</h2>

    <div class="gallery">
        <div class="gallery-item">

            <img src="uploads/<?php echo $file ?>" />
            <a href="delete.php?file=<?php echo $file ?>" style="background-color: #250b4a; padding: 10px;">Delete</a>
        </div>
    </div>
</div>

<?php
}
?>