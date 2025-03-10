@extends('layouts.app')
@section('content')
  <!-- ==================== HERO SECTION (unchanged) ==================== -->
  <section class="hero-agri10">
    <div class="hero-content">
      <h1 style="font-weight: 600; color: #ffffff">Agri Shakti 10-L</h1>
      <!-- <p>Rapid Deployment | Efficient Surveillance | Swift Reconnaissance</p> -->
    </div>
  </section>

  <div class="container mt-5 hero-below-section">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="custom">
          Introducing our advanced agricultural drone, designed to revolutionize the way you manage your crops with precision and efficiency. This drone is optimized for the application of fertilizers, pesticides, and herbicides, ensuring thorough coverage and effective treatment with each flight.
        </p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/agri-skati-10l-2nd.png') }}" class="img-fluid rounded" alt="Technology Image" />
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
    <img src="{{ asset('images/agri-shkati--10.png') }}" />
  </section>

  <!-- ==================== VIDEO SECTION (unchanged) ==================== -->
  <section class="videos-section homee">
    <div class="videos-containers">
      <video id="video" class="videos" poster="images/videodroneallpage.jpg">
        <source src="{{ asset('media/video/Technology-transcode.mp4') }}" type="video/mp4" />
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
          <img src="{{ asset('images/HAL64(1).png') }}" alt="Camera 3">
          <h3>CAMERA NAME 1</h3>
          <p>SPECIFICATIONS FO CAMERA</p>
        </div>
        <div class="payload-carousel-item pp-active">
          <img src="{{ asset('images/HAL64(1).png') }}" alt="Camera 1">
          <h3 style="color: #34B88A;">CAMERA NAME 2</h3>
          <p>SPECIFICATIONS FO CAMERA</p>
        </div>
        <div class="payload-carousel-item pp-next">
          <img src="{{ asset('images/HAL64(1).png') }}" alt="Camera 2">
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

  <!-- ==================== OPTIENEST GROUND CONTROL STATION ==================== -->
  <div class="opt">
    <h1>Optienest Ground Control Station</h1>
  </div>

  <div class="container mt-5">
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
              <img src="{{ asset('images/demooo.png') }}" alt="Slide 1" class="optienest-img" />
              <img src="{{ asset('images/demooo.png') }}" alt="Slide 2" class="optienest-img" />
              <img src="{{ asset('images/demooo.png') }}" alt="Slide 3" class="optienest-img" />
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
  <style>
    /* Scope all Optienest carousel styles under #optienest-wrapper to avoid conflicts */
    #optienest-wrapper .optienest-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: #fff;
      /* Adjust as needed */
      /* padding: 20px;  */
    }

    #optienest-wrapper .optienest-carousel {
      position: relative;
      width: 300px;
      height: 400px;
      perspective: 1000px;
      /* overflow: hidden; */
      margin-bottom: 20px;
    }

    #optienest-wrapper .optienest-img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      border-radius: 10px;
      transition: transform 0.5s ease-in-out;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    #optienest-wrapper .optienest-controls {
      display: flex;
      align-items: center;
    }

    #optienest-wrapper .optienest-control-button {
      cursor: pointer;
      font-size: 18px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 2px solid #28a745;
      background: #fff;
      color: #28a745;
      margin: 0 5px;
    }

    #optienest-wrapper .optienest-dots {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 10px;
    }

    #optienest-wrapper .optienest-dots span {
      display: block;
      width: 8px;
      height: 8px;
      margin: 0 5px;
      border-radius: 50%;
      background-color: #ccc;
      transition: background-color 0.3s;
    }

    #optienest-wrapper .optienest-dots span.active {
      background-color: #28a745;
    }

    /* For WebKit browsers */
    ::-webkit-scrollbar:horizontal {
      height: 5px;
      /* Reduced scrollbar height */
    }

    ::-webkit-scrollbar-track:horizontal {
      background: #f0f0f0;
      /* Track color */
      border-radius: 20px;
      /* Rounded track edges */
    }

    ::-webkit-scrollbar-thumb:horizontal {
      background-color: #28a745;
      /* Green thumb */
      border-radius: 20px;
      /* Rounded thumb */
      border: 1px solid #28a745;
    }

    ::-webkit-scrollbar-thumb:horizontal:hover {
      background-color: #218838;
    }

    /* For Firefox */
    * {
      scrollbar-width: thin;
      /* Ensures a thinner scrollbar */
      scrollbar-color: #28a745 #f0f0f0;
      /* Thumb color, then track color */
    }
  </style>

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
        <img src="{{ asset('images/agri16-brochure.jpg') }}" alt="Tall Drone Image" style="height:300px;">
      </div>
    </section>
  </div>
  <div style="background-color: #ffffff">
    <h1>Keep Exploring Drone..</h1>
    <!-- <section class="card-container">
      <div class="card"><img src="images/100.jpg" alt="Card Image" /></div>
      <div class="card"><img src="images/100.jpg" alt="Card Image" /></div>
      <div class="card"><img src="images/100.jpg" alt="Card Image" /></div>
    </section>
  </div>
  <div class="explore-more">Explore All Drones <span>&#x2192;</span></div> -->
  <div class="explore-container">
    <div class="explore-card"><img src="{{ asset('IMAGES/100.jpg') }}" alt="Drone 1"></div>
    <div class="explore-card"><img src="{{ asset('IMAGES/100.jpg') }}" alt="Drone 2"></div>
    <div class="explore-card"><img src="{{ asset('IMAGES/100.jpg') }}" alt="Drone 3"></div>
</div>
<div class="explore-link-container">
    <a href="#" class="explore-link">Explore all Drone <span class="explore-arrow">➝</span></a>
</div>
  <!--footer start-->
@endsection