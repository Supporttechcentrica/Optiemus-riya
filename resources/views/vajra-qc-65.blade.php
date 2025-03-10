@extends('layouts.app')
@section('content')

  <!-- ====================HERO SECTION (unchanged) ==================== -->
  <section class="hero-65">
    <div class="hero-content">
      <h1 style="font-weight: 600; color: #ffffff">VAJRA QC 65</h1>
      <p>Extended Range | Prolonged Endurance | Effective Reconnaissance</p>
    </div>
  </section>

  <div class="container mt-5 hero-below-section">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="custom">
          Vajra QC 6.5 is custom designed for Extended Range Operations and Prolonged Endurance. It is an Effective
          Reconnaissance drone that features Maximum Take-Off Weight of 6.5 kg and Longer Endurance over 90 minutes.
          With capability to be commanded and controlled over 90+ mins, the Vajra QC 6.5 is an ideal Quad Copter for
          carrying payload up to 2kg.
        </p>
      </div>
      <div class="col-md-6">
        <img src="images/vajra-20/vajra-qc-20-second.png" class="img-fluid rounded" alt="Technology Image" />
        <script>
          document.addEventListener("DOMContentLoaded", function () {
            const images = document.querySelectorAll(".img-fluid.rounded");

            const observer = new IntersectionObserver((entries) => {
              entries.forEach((entry) => {
                if (entry.isIntersecting) {
                  entry.target.classList.add("in-view");
                  entry.target.classList.remove("out-of-view");
                } else {
                  entry.target.classList.add("out-of-view");
                  entry.target.classList.remove("in-view");
                }
              });
            }, { threshold: 0.3 }); // Adjust threshold for earlier/later appearance

            images.forEach((img) => observer.observe(img));
          });

        </script>
      </div>
    </div>
  </div>

  <section class="parameters" style="background-color: #f0f0f0">
    <h1>Parameters</h1>
    <img src="images/vajra-65/vajra-65-parameters.png" />
  </section>

  <!-- ==================== VIDEO SECTION (unchanged) ==================== -->
  <section class="videos-section homee">
    <div class="videos-containers">
      <video id="video" class="videos" poster="images/videodroneallpage.jpg">
        <source src="media/video/Technology-transcode.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <button class="play-button" id="playButton">
        <i class="fas fa-play"></i>
      </button>
    </div>
  </section>

  <script>
    const video = document.getElementById("video");
    const playButton = document.getElementById("playButton");
    const playIcon = playButton.querySelector("i");

    playButton.addEventListener("click", function () {
      if (video.paused) {
        video.play();
        video.loop = true; // Enable looping
        playIcon.classList.remove("fa-play");
        playIcon.classList.add("fa-pause");
      } else {
        video.pause();
        video.currentTime = 0; // Reset video to start
        playIcon.classList.remove("fa-pause");
        playIcon.classList.add("fa-play");
      }
    });
  </script>
  <!-- ==================== PAYLOAD CAROUSEL (unchanged) ==================== -->
  <div class="main-container">
    <div class="payload-container">
      <h2 class="pp-title parameters">Payloads</h2>
      <div class="payload-carousel">
        <div class="carousel-wrapper">
          <div class="payload-carousel-item pp-prev">
            <img src="images/HAL64(1).png" alt="Camera 3">
            <h3>CAMERA NAME 1</h3>
            <p>SPECIFICATIONS FO CAMERA</p>
          </div>
          <div class="payload-carousel-item pp-active">
            <img src="images/HAL64(1).png" alt="Camera 1">
            <h3 style="color: #34B88A;">CAMERA NAME 2</h3>
            <p>SPECIFICATIONS FO CAMERA</p>
          </div>
          <div class="payload-carousel-item pp-next">
            <img src="images/HAL64(1).png" alt="Camera 2">
            <h3>CAMERA NAME</h3>
            <p>SPECIFICATIONS FO CAMERA 3</p>
          </div>
        </div>
      </div>
      <div class="pp-dots-container">
        <button class="pp-nav" id="prev">&#8592;</button>
        <span class="pp-dot active"></span>
        <span class="pp-dot"></span>
        <span class="pp-dot"></span>
        <button class="pp-nav" id="next">&#8594;</button>
      </div>
    </div>
  </div>
<script>
      document.addEventListener("DOMContentLoaded", function () {
        let currentIndex = 1;
        const items = document.querySelectorAll(".payload-carousel-item");
        const dots = document.querySelectorAll(".pp-dot");
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");

        function updateCarousel(newIndex) {
            items.forEach((item, i) => {
                item.classList.remove("pp-active", "pp-prev", "pp-next");
                if (i === newIndex) {
                    item.classList.add("pp-active");
                } else if (i === (newIndex - 1 + items.length) % items.length) {
                    item.classList.add("pp-prev");
                } else if (i === (newIndex + 1) % items.length) {
                    item.classList.add("pp-next");
                }
            });
            currentIndex = newIndex;
            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === newIndex);
            });
        }

        prevButton.addEventListener("click", function () {
            let newIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
            updateCarousel(newIndex);
        });

        nextButton.addEventListener("click", function () {
            let newIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
            updateCarousel(newIndex);
        });

        dots.forEach((dot, index) => {
            dot.addEventListener("click", function () {
                updateCarousel(index);
            });
        });
    });
</script>
  <!-- ==================== 360 Degree Section (unchanged) ==================== -->
  <div class="page-wrapper" id="pageWrapper">
    <div class="threecontainer" onclick="openPopup()">
      <div class="image-container">
        <img class="threeimage" src="images/360dronearrow.png" alt="Three View Image" style="width:200px;height:200px;">
      </div>
    </div>
  </div>

  <div class="overlay" id="overlay"></div>

  <div class="popup" id="threepopup">
    <div class="popup-content">
      <button class="threeclose-btn" id="closePopup">X</button>
      <div class="viewer" id="viewer"></div>
      <div class="zoom-controls">
        <button class="zoom-btn" id="zoomIn">+</button>
        <button class="zoom-btn" id="zoomOut">-</button>
      </div>
    </div>
  </div>
  <script>
       const images = [
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00001.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00002.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00003.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00004.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00005.jpg",
        "https://advantechfiles.blob.core.windows.net/web/Images/products/ProductView/aim35charger_00006.jpg"
    ];
    
    let currentIndex = 0;
    let scale = 1;
    let isDragging = false;
    let startX = 0;
    
    const popup = document.getElementById("threepopup");
    const closeBtn = document.getElementById("closePopup");
    const viewer = document.getElementById("viewer");
    const overlay = document.getElementById("overlay");
    
    function openPopup() {
        popup.style.display = "flex";
        overlay.style.display = "block";
        loadImages();
    }
    
    function closePopup() {
        popup.style.display = "none";
        overlay.style.display = "none";
        viewer.innerHTML = "";
    }
    
    closeBtn.addEventListener("click", closePopup);
    overlay.addEventListener("click", closePopup);
    
    function loadImages() {
        viewer.innerHTML = "";
        images.forEach((src, index) => {
            const img = document.createElement("img");
            img.src = src;
            img.dataset.index = index;
            if (index === 0) img.style.display = "block";
            viewer.appendChild(img);
        });
    }

    // Enable image scrolling and zooming via buttons
    viewer.addEventListener("mousedown", (e) => {
        isDragging = true;
        startX = e.clientX;
    });

    viewer.addEventListener("mouseup", () => {
        isDragging = false;
    });

    viewer.addEventListener("mousemove", (e) => {
        if (!isDragging) return;
        const delta = e.clientX - startX;
        startX = e.clientX;
        currentIndex = (currentIndex + (delta > 0 ? -1 : 1) + images.length) % images.length;
        updateImage();
    });

    function updateImage() {
        document.querySelectorAll(".viewer img").forEach((img, index) => {
            img.style.display = index === currentIndex ? "block" : "none";
        });
    }

    document.getElementById("zoomIn").addEventListener("click", () => {
        scale += 0.1;
        viewer.style.transform = `scale(${scale})`;
    });

    document.getElementById("zoomOut").addEventListener("click", () => {
        scale = Math.max(1, scale - 0.1);
        viewer.style.transform = `scale(${scale})`;
    });
    </script>
  <!-- ==================== Features Section (unchanged) ==================== -->
  <div class="waypoint-video" style="background-color: #ffffff">
    <h1 style="padding-top: 30px">Features</h1>
    <div class="news">
      <div class="gallery">
        <section class="gallery_items active">
          <video autoplay muted src="media/video/Waypoint Based Navigation.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/Terrain Avoidance.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/Target Tracking.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/Target Indicator.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/Swarm Attack.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/Remote Video Terminal.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/Kamikaze Attack.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/High Wind Resistance.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/Be on Track.mp4"></video>
        </section>
        <section class="gallery_items">
          <video muted src="media/video/Anti Jamming.mp4"></video>
        </section>
      </div>
    </div>

    <div class="tabs">
      <div class="tab active" data-index="0">Waypoint Based Navigation</div>
      <div class="tab" data-index="1">Terrain Avoidance</div>
      <div class="tab" data-index="2">Target Tracking</div>
      <div class="tab" data-index="3">Target Indicator</div>
      <div class="tab" data-index="4">Swarm Attack</div>
      <div class="tab" data-index="5">Remote Video Terminal</div>
      <div class="tab" data-index="6">Kamikaze Attack</div>
      <div class="tab" data-index="7">High Wind Resistance</div>
      <div class="tab" data-index="8">Be on Track</div>
      <div class="tab" data-index="9">Anti Jamming</div>
    </div>
  </div>

  <script>
    const tabs = document.querySelectorAll(".tab");
    const videos = document.querySelectorAll(".gallery_items");
    let currentTabIndex = 0;

    function switchTab(index) {
      document.querySelector(".tab.active").classList.remove("active");
      document.querySelector(".gallery_items.active").classList.remove("active");

      tabs[index].classList.add("active");
      videos[index].classList.add("active");

      let newVideo = videos[index].querySelector("video");
      newVideo.currentTime = 0;
      newVideo.play();
      currentTabIndex = index;
      autoSwitchTab();
    }

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        switchTab(parseInt(tab.dataset.index));
      });
    });

    function autoSwitchTab() {
      let activeVideo = videos[currentTabIndex].querySelector("video");
      activeVideo.onended = () => {
        let nextIndex = (currentTabIndex + 1) % videos.length;
        switchTab(nextIndex);
      };
    }

    autoSwitchTab();
  </script>

   <!-- ==================== OPTIENEST GROUND CONTROL STATION ==================== -->
   <div class="opt parameters">
    <h1 class="parameters">Optienest Ground Control Station</h1>
  </div>

  <div class="container mt-5 takeoff">
    <div class="row align-items-center">
      <div class="col-md-4 take-off">
        <h3>Take Off Area<br>Control Features</h3>
      </div>
      <div class="col-md-8">
        <!-- Wrapper to isolate the OPTIENEST carousel code -->
        <div id="optienest-wrapper">
          <div class="optienest-container">
            <!-- Carousel -->
            <div class="optienest-carousel">
              <img src="images/demooo.png" alt="Slide 1" class="optienest-img" />
              <img src="images/demooo.png" alt="Slide 2" class="optienest-img" />
              <img src="images/demooo.png" alt="Slide 3" class="optienest-img" />
            </div>

            <!-- Navigation controls -->
            <div class="optienest-controls">
              <button class="optienest-control-button" onclick="prevSlide()">&#8592;</button>
              <div class="optienest-dots">
                <!-- Create a dot for each image above -->
                <span></span>
                <span></span>
                <span></span>
              </div>
              <button class="optienest-control-button" onclick="nextSlide()">&#8594;</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="oopptt"></div>
  <!-- ==================== OPTIENEST CAROUSEL STYLES & SCRIPT ==================== -->
  <script>
    // Query elements only within #optienest-wrapper to avoid collisions
    const optienestImages = document.querySelectorAll('#optienest-wrapper .optienest-img');
    const optienestDots = document.querySelectorAll('#optienest-wrapper .optienest-dots span');
    let optienestIndex = 0;

    function updateSlides() {
      optienestImages.forEach((img, i) => {
        // offset = distance from the current (active) slide
        const offset = (i - optienestIndex + optienestImages.length) % optienestImages.length;

        if (offset === 0) {
          // Active slide
          img.style.zIndex = optienestImages.length;
          img.style.transform = 'translateX(0) rotateY(0) scale(1)';
        } else {
          // Stacked slides behind the active one
          const xShift = 30 * offset;     // 30% offset per step
          const rotation = -10 * offset;  // -10deg rotation per step
          const scale = 1 - offset * 0.1;

          img.style.zIndex = optienestImages.length - offset;
          img.style.transform = `translateX(${xShift}%) rotateY(${rotation}deg) scale(${scale})`;
        }
      });

      // Update dots to reflect the active slide
      optienestDots.forEach((dot, idx) => {
        dot.classList.toggle('active', idx === optienestIndex);
      });
    }

    function prevSlide() {
      optienestIndex = (optienestIndex - 1 + optienestImages.length) % optienestImages.length;
      updateSlides();
    }

    function nextSlide() {
      optienestIndex = (optienestIndex + 1) % optienestImages.length;
      updateSlides();
    }

    // Initialize the Optienest carousel
    updateSlides();
  </script>
  <div class="section-conatiner-div">
    <section class="section-container">
      <div class="content">
        <h1>Brochure</h1>
        <button class="contact-btn" style="text-decoration:none; color:#ffffff;">Download Brochure</button>
      </div>
      <div class="image-container">
        <img src="images/vajra-65/Vajara-2-brochure.png" alt="Tall Drone Image" style="height:300px;">
      </div>
    </section>
  </div>
  <div style="background-color: #ffffff">
    <h1>Keep Exploring Drone..</h1>
    <div class="explore-container">
      <div class="explore-card"><img src="IMAGES/100.jpg" alt="Drone 1"></div>
      <div class="explore-card"><img src="IMAGES/100.jpg" alt="Drone 2"></div>
      <div class="explore-card"><img src="IMAGES/100.jpg" alt="Drone 3"></div>
    </div>
    <div class="explore-link-container">
      <a href="#" class="explore-link">Explore all Drone <span class="explore-arrow">➝</span></a>
    </div>
    <!--footer start-->
@endsection