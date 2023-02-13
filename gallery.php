<?php
echo '<link href="./assets/css/gallery.css" rel="stylesheet"/>';
echo '<link rel="icon" href="./assets/icon/favicon.ico" />';
?>
<h2 class="heading">Purna Drive Gallery</h2>
<?php
$dir = opendir(("uploads/"));
while (($file = readdir($dir)) !== false) {
    if ($file == '.' || $file == '..') {
        continue;
    }
?>
<div class="gallery-collection">
    <div class="gallery">
        <div class="gallery-item">
            <img src="uploads/<?php echo $file ?>" />
            <div class="gallery-photos">
                <a class="img-download" href="uploads/<?php echo $file ?>" download>Download</a>
                <a class="img-delete" href="delete.php?file=<?php echo $file ?>">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php
}
?>