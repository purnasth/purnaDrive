<?php
require_once './assets/php/session.php';
$username = $_SESSION['username'];
if (empty($username)) {
    header("Location:form.php");
}
echo '<link href="./assets/css/gallery.css" rel="stylesheet"/>'; echo '<link
  rel="icon"
  href="./assets/icon/favicon.ico"
/>'; ?>
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
  <?php
  include('./assets/php/navbar.php');
  ?>
  <div class="gallery">
    <?php
        $media_files = glob('uploads/*.{jpg,jpeg,png,webp,gif,mp4,webm,txt,pdf,docx}', GLOB_BRACE);


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
        <img loading="lazy" class="slider-image" src="<?php echo $file ?>" alt="image" />
      </a>
      <div class="gallery-item-type">Image</div>
      <?php } ?>

      <?php if ($is_video) { ?>
      <a href="<?php echo $file; ?>" download>
        <video src="<?php echo $file; ?>" loading="lazy" controls autoplay loop></video>
      </a>
      <div class="gallery-item-type">Video</div>
      <?php } ?>

      <?php if ($is_text) { ?>
      <iframe
        src="<?php echo $file; ?>"
        width="100%"
        height="auto"
        resize="both"
        loading="lazy"
      ></iframe>
      <div class="gallery-item-type">Text</div>
      <?php } ?>

      <?php if ($is_pdf) { ?>
      <div class="pdf-container">
        <iframe
          src="<?php echo $file; ?>"
          width="100%"
          height="auto"
          resize="both"
          loading="lazy"
        ></iframe>
      </div>
      <div class="gallery-item-type">PDF</div>
      <?php } ?>

      <!-- <a href="uploads/<?php echo $file; ?>" download>
                <?php
                echo basename($file);
                ?>
            </a> -->
      <!-- <div class="gallery-item-type"><?php echo basename($file); ?></div> -->
      <a class="gallery-item-delete" href="?delete=<?php echo $file ?>">
        <svg
          viewBox=" 0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
          width="42"
          height="42"
          fill="none"
        >
          <path
            fill="#ff0000"
            d="M16.773 10.083a.75.75 0 00-1.49-.166l1.49.166zm-1.535 7.027l.745.083-.745-.083zm-6.198 0l-.745.083.745-.083zm-.045-7.193a.75.75 0 00-1.49.166l1.49-.166zm5.249 7.333h-4.21v1.5h4.21v-1.5zm1.038-7.333l-.79 7.11 1.491.166.79-7.11-1.49-.166zm-5.497 7.11l-.79-7.11-1.49.166.79 7.11 1.49-.165zm.249.223a.25.25 0 01-.249-.222l-1.49.165a1.75 1.75 0 001.739 1.557v-1.5zm4.21 1.5c.892 0 1.64-.67 1.74-1.557l-1.492-.165a.25.25 0 01-.248.222v1.5z"
          />
          <path
            fill="#ff0000"
            fill-rule="evenodd"
            d="M11 6a1 1 0 00-1 1v.25H7a.75.75 0 000 1.5h10a.75.75 0 000-1.5h-3V7a1 1 0 00-1-1h-2z"
            clip-rule="evenodd"
            style="
              animation: rotate-tr 1s cubic-bezier(1, -0.28, 0.01, 1.13)
                infinite alternate-reverse both;
              transform-origin: right center;
            "
          />
        </svg>
      </a>
    </div>

    <?php } ?>

    <?php
        if (isset($_GET['delete'])) {
            $files = $_GET['delete'];

            if (file_exists($files)) {
                unlink($files);
                echo "File deleted: " . $files;
                header("Location: delete.php");
            } else {
                echo "File not found: " . $files;
            }
        }
        ?>
  </div>

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <script>
    setTimeout(function () {
      $("#preloader").fadeToggle();
    }, 1200);
  </script>
</body>
