<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <section class="hero container-fluid">
    <div class="row w-100 align-items-center">
      <div class="col-md-6 hero-left empty"></div>
      <div class="col-md-6 hero-right">
        <h1 class="display-4 fw-bold">Reliable Drones For<br>Today & Tomorrow</h1>
        <p class="lead">Innovating Today, Securing Tomorrow ?</p>
        <a href="#" class="btn hero-btn">Get Started</a>
      </div>
    </div>
  </section>
  <div class="container innovation">
    <div class="row overlap-section">
      <div class="col-md-3">
        <img src="{{ asset('images/innovation.png') }}" style="width:50px;height:50px;">
        <h3>INNOVATION</h3>
        <p>Custom Designed for a Purpose</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('images/insourced.png') }}" style="width:50px;height:50px;">
        <h3>INSOURCED</h3>
        <p>Designed & Developed In-house</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('images/manufacturing.png') }}" style="width:50px;height:50px;">
        <h3>MANUFACTURING</h3>
        <p>State of the Art Facilities</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('images/quality.png') }}" style="width:50px;height:50px;"></i>
        <h3>QUALITY</h3>
        <p>Custom Designed for a Purpose</p>
      </div>
    </div>
  </div>
  </div>
  <section class="leading home">
    <h1>Leading The Way In Unmanned Aerial Vehicles</h1>
  </section>
  <!-- <hr class="divider"> -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 image-wrapper">
        <img src="{{ asset('images/home-img.jpg') }}" alt="Team">
      </div>
      <div class="col-md-6">
        <!-- <h2>Heading Text</h2> -->
        <p class="since">Since the dawn of Industrial Age, the Technology
          Revolutions have reshaped the world. Industries
          vis-a-vis Defence, Healthcare, Agriculture, Mining,
          Oil & Gas, Renewable Energies, and Logistics are
          transforming their operations using remotely
          operated machines i.e. UAV’s</p>

        <button class="knoww" style="justify-content: center;">Know More</button>
      </div>
    </div>
  </div>
  <section class="videos-section homee">
    <div class="videos-containers">
      <video id="video" class="videos" poster="{{ asset('images/videodroneallpage.jpg') }}">
        <source src="{{ asset('media/video/Technology-transcode.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <button class="play-button" id="playButton">
        <i class="fas fa-play"></i> <!-- Play icon -->
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
  <section class="product range">
    <h1>OUR PRODUCT RANGE</h1>
  </section>
  <!-- <hr class="divider"> -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 image-container">
        <img class="rad" src="{{ asset('images/ous-dronehome.jpg') }}" class="img-fluid" alt="Placeholder Image"
          style="height:400px;width:auto;">
        <div class="overlay">
          <h2>Vajra Range</h2>
          <button class="know">Know More</button>
        </div>
      </div>
      <div class="col-md-6 image-container">
        <img class="rad" src="{{ asset('images/graddrone.jpg') }}" class="img-fluid" alt="Placeholder Image"
          style="height:400px;width:auto;">
        <div class="overlay">
          <h2>Darsh</h2>
          <button class="know">Know More</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="padding:40px 0px 0px 0px;">
    <div class="row">
      <div class="col-md-12 image-containers">
        <img src="{{ asset('images/marak123.jpg') }}" class="img-fluid rad" alt="Placeholder Image">
        <div class="overlay">
          <h2>Ajeya</h2>
          <button class="know">Know More</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="padding:40px 0px 0px 0px;">
    <div class="row">
      <div class="col-md-6 image-container">
        <img class="rad" src="{{ asset('images/graddrone.jpg') }}" class="img-fluid" alt="Placeholder Image"
          style="height:400px;width:auto;">
        <div class="overlay">
          <h2>Marak</h2>
          <button class="know">Know More</button>
        </div>
      </div>
      <div class="col-md-6 image-container">
        <img class="rad" src="{{ asset('images/graddrone.jpg') }}" class="img-fluid" alt="Placeholder Image"
          style="height:400px;width:auto;">
        <div class="overlay">
          <h2>Argiculture Range</h2>
          <button class="know">Know More</button>
        </div>
      </div>
    </div>
  </div>
  <div class="whyusss home" style="  background: linear-gradient(90deg,#0E4D78, #0A1F31);">
    <div class="row mt-5">
      <h1 class="text-center mb-4 headywhy" style="color:#ffffff;">Explore Our Best Services</h1>
      <div class="container service">
        <div class="row service">
          <div class="service-card home">
            <!-- <i>🔧</i> -->
            <img class="hover-img" src="{{ asset('images/innovation.png') }}" alt="Icon">
            <h3>Agriculture Inspection and Spraying</h3>
            <p>Targeted application of fertilizers and pesticides, agricultural condition surveillance, and vegetation
              health inspection through field surveying enhance precision and efficiency in farming.</p>
          </div>
          <div class="service-card home">
            <img class="hover-img" src="{{ asset('images/innovation.png') }}" alt="Icon">
            <h3>Solar PV Planning and Inspection</h3>
            <p>Thermographic scanning and hotspot recognition, detailed orthomosaic visualization, and accurate,
              consistent data capture ensure precise and reliable analysis.</p>
          </div>
          <div class="service-card home">
            <img class="hover-img" src="{{ asset('images/innovation.png') }}" alt="Icon">
            <h3>Railways and Roadways Planning and Monitoring</h3>
            <p>Infrastructure and project oversight, asset and bridge surveying, and highway monitoring ensure
              comprehensive assessment and management.</p>
          </div>
          <div class="service-card home">
            <img class="hover-img" src="{{ asset('images/innovation.png') }}" alt="Icon">
            <h3>Oil and Gas</h3>
            <p>Site analysis and mapping, comprehensive inspection and leak spotting, and remote dangerous area
              monitoring ensure thorough assessment and safety.</p>
          </div>
        </div>
        <div class="row service xttrraa">
          <div class="service-card home">
            <img class="hover-img" src="{{ asset('images/innovation.png') }}" alt="Icon">
            <h3>Mining</h3>
            <p>Aerial monitoring of mines, stockpile volume assessment, and cost and resource utilization ensure
              efficient operations and resource management.</p>
          </div>
          <div class="service-card home">
            <img class="hover-img" src="{{ asset('images/innovation.png') }}" alt="Icon">
            <h3>Land Survey</h3>
            <p>Terrain and surface digital modeling, topographic contouring, and orthographic mapping with 3D
              visualization ensure precise geographic analysis and representation.</p>
          </div>
          <div class="service-card home">
            <img class="hover-img" src="{{ asset('images/innovation.png') }}" alt="Icon">
            <h3>Transmission and Communication Tower Inspection</h3>
            <p>Intrusion monitoring, geotagged issue logging, and visual and infrared fault inspection ensure enhanced
              security and precise fault detection.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="blogsss">
    <h1>OUR LATEST UPDATES</h1>
    <!-- <hr class="divider"> -->
    <div class="blog-container">
      <!-- Left Blog - Large -->
      <div class="left-blog">
        <div class="blog-card">
          <img
            src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&w=600"
            alt="Main Blog">
          <div class="blog-overlay">
            <h3>Main Blog Title</h3>
            <button>Read More</button>
          </div>
        </div>
      </div>

      <!-- Right Blogs - 2x2 Grid -->
      <div class="right-blogs">
        <div class="blog-card">
          <img src="{{ asset('images/blogs.jpg') }}" alt="Blog 1">
          <div class="blog-overlay">
            <h3>Blog 1</h3>
            <button>Read More</button>
          </div>
        </div>
        <div class="blog-card">
          <img src="{{ asset('images/blogs.jpg') }}" alt="Blog 2">
          <div class="blog-overlay">
            <h3>Blog 2</h3>
            <button>Read More</button>
          </div>
        </div>
        <div class="blog-card">
          <img src="{{ asset('images/blogs.jpg') }}" alt="Blog 3">
          <div class="blog-overlay">
            <h3>Blog 3</h3>
            <button>Read More</button>
          </div>
        </div>
        <div class="blog-card">
          <img src="{{ asset('images/blogs.jpg') }}" alt="Blog 4">
          <div class="blog-overlay">
            <h3>Blog 4</h3>
            <button>Read More</button>
          </div>
        </div>
      </div>
    </div>
    <div class="explore-link-container home">
    <a href="#" class="explore-link">Explore all Drone <span class="explore-arrow">➝</span></a>
</div>
  </section>
  <!-- <section class="getintouch">
    <h1>Let's Get In <span>Touch</span></h1>
    <button style="margin-top:20px;">Contact Us</button>
  </section> -->
  <div class="letusknow">
    <h1 style="color:#ffffff;">Let's Get In Touch</h1>
    <p style="text-align: center;color:#ffffff;">Follow news in Drone, get latest products announcements and stay
      inspired</p>
    <div class="cts-contact">
      <!-- <form action="#" method="POST"> -->
      <input type="email" name="email" placeholder="Enter your email ID" required>
      <button type="submit">Subscribe</button>
      </form>
    </div>
  </div>
@endsection
