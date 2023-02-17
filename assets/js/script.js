/* ========= Dynamic Island =========*/
let popup = document.querySelector(".dynamic-island");
popup.onclick = function () {
  popup.classList.toggle("active");
};
/* ========= Purna Drive =========*/
const form = document.querySelector("form"),
  fileInput = document.querySelector(".file-input"),
  progressArea = document.querySelector(".progress-area"),
  uploadedArea = document.querySelector(".uploaded-area");

// form click event
form.addEventListener("click", () => {
  fileInput.click();
});

// FOr automatic upload
const dropZone = document.querySelector(".drop-zone");

dropZone.addEventListener("dragover", (event) => {
  event.preventDefault();
});

dropZone.addEventListener("dragleave", (event) => {
  event.preventDefault();
});

dropZone.addEventListener("drop", (event) => {
  event.preventDefault();
  fileInput.files = event.dataTransfer.files;
  uploadFile(fileInput);
});

// fileInput.addEventListener("change", (event) => {
//   event.preventDefault();
//   dropZone.style.borderColor = "#ccc";
//   dropZone.style.boxShadow = "none";
//   form.submit();
// });

fileInput.onchange = ({ target }) => {
  uploadFile(target);
};

// file upload function
function uploadFile(target) {
  popup.classList.add("active");

  let file = target.files[0]; //getting file [0] this means if user has selected multiple files then get first one only
  if (file) {
    let fileName = file.name; //getting file name
    if (fileName.length >= 12) {
      //if file name length is greater than 12 then split it and add ...
      let splitName = fileName.split(".");
      fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
    }
    let xhr = new XMLHttpRequest(); //creating new xhr object (AJAX)
    xhr.open("POST", "/upload.php"); //sending post request to the specified URL
    popup.style.setProperty(
      "--height",
      ((1 + uploadedArea.children.length) * 100 > 252
        ? 252
        : (1 + uploadedArea.children.length) * 100) + "px"
    );

    xhr.upload.addEventListener("progress", ({ loaded, total }) => {
      //file uploading progress event
      let fileLoaded = Math.floor((loaded / total) * 100); //getting percentage of loaded file size
      let fileTotal = Math.floor(total / 1000); //getting total file size in KB from bytes
      let fileSize;
      // if file size is less than 1024 then add only KB else convert this KB into MB
      fileTotal < 1024
        ? (fileSize = fileTotal + " KB")
        : (fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB");
      let progressHTML = `<li class="row">
                          <i class="fas fa-file-alt"></i>
                          <div class="content">
                            <div class="details">
                              <span class="name">${fileName} • Uploading</span>
                              <span class="percent">${fileLoaded}%</span>
                            </div>
                            <div class="progress-bar">
                              <div class="progress" style="width: ${fileLoaded}%"></div>
                            </div>
                          </div>
                        </li>`;
      // uploadedArea.innerHTML = ""; //uncomment this line if you don't want to show upload history
      uploadedArea.classList.add("onprogress");
      progressArea.innerHTML = progressHTML;
      if (loaded == total) {
        progressArea.innerHTML = "";
        let uploadedHTML = `<li class="row">
                            <div class="content upload">
                              <i class="fas fa-file-alt"></i>
                              <div class="details">
                                <span class="name">${fileName} • Uploaded</span>
                                <span class="size">${fileSize}</span>
                              </div>
                            </div>
                            <i class="fas fa-check"></i>
                          </li>`;
        uploadedArea.classList.remove("onprogress");
        // uploadedArea.innerHTML = uploadedHTML; //uncomment this line if you don't want to show upload history
        uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML); //remove this line if you don't want to show upload history
      }
    });
    let data = new FormData(form); //FormData is an object to easily send form data
    xhr.send(data); //sending form data
  }
}

/**
 * Preloader
 */


setTimeout(function() {
  $('#preloader').fadeToggle();
}, 1200);




// ========= FOR GALLERY SLIDER ========

let currentSlide = 1;
const slides = document.querySelectorAll(".slider-wrapper img");
const sliderControls = document.querySelectorAll(
    ".slider-control-left, .slider-control-right"
);

// Show the first slide
slides[currentSlide - 1].style.display = "block";

// Move to the next or previous slide
function moveSlider(n) {
    showSlide((currentSlide += n));
}

// Show the current slide and hide the rest
function showSlide(n) {
    if (n > slides.length) {
        currentSlide = 1;
    }
    if (n < 1) {
        currentSlide = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[currentSlide - 1].style.display = "block";
}

// Add click event listener to the slider controls
sliderControls.forEach((control) => {
    control.addEventListener("click", (event) => {
        if (event.target.classList.contains("slider-control-left")) {
            moveSlider(-1);
        } else if (event.target.classList.contains("slider-control-right")) {
            moveSlider(1);
        }
    });
});

// Add keyboard navigation
document.addEventListener("keydown", (event) => {
    if (event.key === "ArrowLeft") {
        moveSlider(-1);
    } else if (event.key === "ArrowRight") {
        moveSlider(1);
    }
});
