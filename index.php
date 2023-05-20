<?php
echo '<link href="./assets/css/gallery.css" rel="stylesheet"/>';
echo '<link rel="icon" href="./assets/icon/favicon.ico"/>'; 
?>
<title>Gallery</title>

<body>
    <div id="preloader">
        <div class="loader JS_on">
            <span class="binary"></span>
            <span class="binary"></span>
            <span class="binary"></span>
            <span class="getting-there">welcome...</span>
        </div>
    </div>
    <header>
        <h2>
           <?php
           include('./assets/php/navbar.php');
           ?>
        </h2>
    </header>
    <div class="gallery">
        <?php
        $media_files = glob('uploads/*.{jpg,jpeg,png,webp,gif,mp4,hevc,mov,webm,txt,pdf,docx}', GLOB_BRACE);


        foreach ($media_files as $file) {
            $type = mime_content_type($file);
            $is_image = strpos($type, 'image/') === 0;
            $is_video = strpos($type, 'video/') === 0;
            $is_text = strpos($type, 'text/') === 0;
            $is_pdf = strpos($type, 'application/pdf') === 0;

            if (!$is_image && !$is_video && !$is_text && !$is_pdf) {
                continue;
            }
        ?>

            <div class="gallery-item">
                <?php if ($is_image) { ?>
                    <a href="<?php echo $file ?>" download>
                        <img class="slider-image" src="<?php echo $file ?>" alt="image"/>
                    </a>
                    <div class="gallery-item-type">Image</div>
                <?php } ?>

                <?php if ($is_video) { ?>
                    <a href="<?php echo $file; ?>" download>
                        <video src="<?php echo $file; ?>" controls autoplay loop></video>
                    </a>
                    <div class="gallery-item-type">Video</div>
                <?php } ?>

                <?php if ($is_text) { ?>
                    <iframe src="<?php echo $file; ?>" width="100%" height="auto" resize="both"></iframe>
                    <div class="gallery-item-type">Text</div>
                <?php } ?>

                <?php if ($is_pdf) { ?>
                    <div class="pdf-container">
                        <iframe src="<?php echo $file; ?>" width="100%" height="auto" resize="both"></iframe>
                    </div>
                    <div class="gallery-item-type">PDF</div>
                <?php } ?>

                <!-- <a href="uploads/<?php echo $file; ?>" download>
                <?php
                echo basename($file);
                ?>
            </a> -->
                <a class="gallery-item-download" href="<?php echo $file; ?>" download>
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none">
                        <path fill="#03C03C" d="M12.75 6.432a.75.75 0 00-1.5 0h1.5zm-1.5 6a.75.75 0 001.5 0h-1.5zm-1.22-2.53a.75.75 0 10-1.06 1.06l1.06-1.06zm1.97 3.03l-.53.53a.75.75 0 001.06 0l-.53-.53zm3.03-1.97a.75.75 0 00-1.06-1.06l1.06 1.06zm-3.78-4.53v6h1.5v-6h-1.5zm-2.28 4.53l2.5 2.5 1.06-1.06-2.5-2.5-1.06 1.06zm3.56 2.5l2.5-2.5-1.06-1.06-2.5 2.5 1.06 1.06z" style="
              animation: slide-right 0.5s cubic-bezier(1, -0.43, 0.68, 0.57)
                infinite alternate both;
            " />
                        <path stroke="#03C03C" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 17.274h8" />
                    </svg>
                </a>
                <!-- <div class="gallery-item-type"><?php echo basename($file); ?></div> -->
            </div>

        <?php } ?>

        <?php
        if (isset($_GET['delete'])) {
            $file_to_delete = $_GET['delete'];

            if (file_exists($file_to_delete)) {
                unlink($file_to_delete);
                echo "File deleted: " . $file_to_delete;
            }
        }
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        setTimeout(function() {
            $("#preloader").fadeToggle();
        }, 1200);
    </script>
</body>