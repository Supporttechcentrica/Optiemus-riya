@extends('layouts.app')
@section('content')
  <!-- ==================== HERO SECTION (unchanged) ==================== -->
  <section class="hero-20">
    <div class="hero-content">
      <h1 style="font-weight: 600; color: #ffffff">VAJRA QC 20</h1>
      <p>Rapid Deployment | Efficient Surveillance | Swift Reconnaissance</p>
    </div>
  </section>

  <div class="container mt-5 hero-below-section">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="custom">
          Vajra QC 2.0 is custom designed for Rapid Deployment, Efficient
          Surveillance and Swift Reconnaissance. With Maximum Take-Off Weight
          of 2kg, Endurance of 40+ mins the Vajra QC 2.0 can be easily
          commanded and controlled over a distance of 5km. It is ideal for
          carrying small payloads over short distances.
        </p>
      </div>
      <div class="col-md-6">
        <img src="images/vajra-20/vajra-qc-20-second.png" class="img-fluid rounded" alt="Technology Image" />
      </div>
    </div>
  </div>

  <section class="parameters" style="background-color: #f0f0f0">
    <h1>Parameters</h1>
    <img src="images/vajra-20/vajra-parameters.png" />
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
  <!-- ==================== PAYLOAD CAROUSEL (unchanged) ==================== -->
  <div class="main-container">
    <div class="payload-container">
      <h2 class="pp-title parameters">Payloads</h2>
      <div class="payload-carousel">
        <div class="carousel-wrapper">
          <div class="payload-carousel-item pp-prev">
            <img src="images/HAL64(1).png" alt="Camera 3">
            <h3>CAMERA NAME</h3>
            <p>SPECIFICATIONS FO CAMERA</p>
          </div>
          <div class="payload-carousel-item pp-active">
            <img src="images/HAL64(1).png" alt="Camera 1">
            <h3 style="color: #34B88A;">CAMERA NAME</h3>
            <p>SPECIFICATIONS FO CAMERA</p>
          </div>
          <div class="payload-carousel-item pp-next">
            <img src="images/HAL64(1).png" alt="Camera 2">
            <h3>CAMERA NAME</h3>
            <p>SPECIFICATIONS FO CAMERA</p>
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
  <!-- ==================== Features Section (unchanged) ==================== -->
  <div class="waypoint-video parameters" style="background-color: #ffffff">
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
  <div class="section-conatiner-div">
    <section class="section-container">
      <div class="content parameters">
        <h1><strong>Brochure</strong></h1>
        <button class="contact-btn" style="text-decoration:none; color:#ffffff;">Download Brochure</button>
      </div>
      <div class="image-container">
        <img src="images/vajra-20/vajra-qc-20-second.pngimages/" alt="Tall Drone Image"
          style="height:300px;">
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