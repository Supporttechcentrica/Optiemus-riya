@extends('layouts.app')
@section('content')
<style>
    .hero .btn {
      padding: 10px 60px;
      background: #2cb98b;
      color: #fff;
      text-decoration: none;
      font-size: 1rem;
      border-radius: 100px;
      border: none;
      transition: 0.3s;
      /* margin-left:80px; */
    }

    .hero-content .btn:hover {
      background: #2cb98b;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: url("images/Slice\ 1\ \(8\).jpg") center/cover no-repeat;
    }

    .hero-left {
      min-height: 50vh;
    }

    .hero-right {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 2rem;
      /* background: rgba(255, 255, 255, 0.8); */
      align-items: flex-start;
    }

    .hero-content {
      color: #fff;
      padding: 450px 0px 60px 60px;
      border-radius: 10px;
    }

    /* p.lead{
  margin-left:90px;
} */
    .hero p {
      font-size: 30px;
      margin-bottom: 1.5rem;
      color: #000000;
      font-weight: 600;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        text-align: center;
        padding: 2rem 1rem;
      }

      .hero-left {
        min-height: 30vh;
        width: 100%;
      }

      .hero-right {
        align-items: center;
        text-align: center;
        padding: 1.5rem;
      }

      .hero-right button {
        width: 100%;
      }
    }
  </style>
  <div>
    <img src="images/whyushero.png" alt="Why Us Image" class="whyusimage">

  </div>
  <section class="leading">
    <h1></h1>
  </section>
  <!--first container start-->
  <div class="container disaster-heading">
    <div class="row">
      <div class="col-md-6 image-wrapper">
        <img class="rad" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
      <div class="col-md-6 left">
        <h2>Elevate Your Operations: Precision Drones for Industry-Leading Insights and Efficiency</h2>
        <p class="service-optiemus">Optiemus Unmanned Systems (OUS) offers advanced drone solutions tailored to various industries,
            including defence, agriculture, mining, oil and gas, railways, highways, and solar farms. Our cutting-edge
            drones are designed to meet specific industry needs, ensuring high efficiency and
            precision.</p>
            <p class="service-second">Optiemus Unmanned Systems (OUS) offers a diverse range of drone services tailored
          to meet the needs of various industries. Below are the detailed services provided in each sector.</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--first container end-->
  <section class="videos-section homee service">
    <div class="videos-containers">
      <video id="video" class="videos" poster="images/videodroneallpage.jpg">
        <source src="media/video/Technology-transcode.mp4" type="video/mp4" />
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
  <div class="whyusss" style="  background: linear-gradient(90deg,#0E4D78, #0A1F31);">
    <div class="row mt-5">
      <h1 class="text-center mb-4 headywhy" style="color:#ffffff;">Provide Best Services</h1>
      <div class="container service">
        <div class="row service">
          <div class="service-card">
            <!-- <i>🔧</i> -->
            <img class="hover-img" src="images/art.png" alt="Icon">
            <h3>Agriculture Inspection and Spraying</h3>
            <p>Targeted application of fertilizers and pesticides, agricultural condition surveillance, and vegetation
              health inspection through field surveying enhance precision and efficiency in farming.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="images/art.png" alt="Icon">
            <h3>Solar PV Planning and Inspection</h3>
            <p>Thermographic scanning and hotspot recognition, detailed orthomosaic visualization, and accurate,
              consistent data capture ensure precise and reliable analysis.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="images/art.png" alt="Icon">
            <h3>Railways and Roadways Planning and Monitoring</h3>
            <p>Infrastructure and project oversight, asset and bridge surveying, and highway monitoring ensure
              comprehensive assessment and management.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="images/art.png" alt="Icon">
            <h3>Oil and Gas</h3>
            <p>Site analysis and mapping, comprehensive inspection and leak spotting, and remote dangerous area
              monitoring ensure thorough assessment and safety.</p>
          </div>
        </div>
        <div class="row service xttrraa">
          <div class="service-card">
            <img class="hover-img" src="images/art.png" alt="Icon">
            <h3>Mining</h3>
            <p>Aerial monitoring of mines, stockpile volume assessment, and cost and resource utilization ensure
              efficient operations and resource management.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="images/art.png" alt="Icon">
            <h3>Land Survey</h3>
            <p>Terrain and surface digital modeling, topographic contouring, and orthographic mapping with 3D
              visualization ensure precise geographic analysis and representation.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="images/art.png" alt="Icon">
            <h3>Transmission and Communication Tower Inspection</h3>
            <p>Intrusion monitoring, geotagged issue logging, and visual and infrared fault inspection ensure enhanced
              security and precise fault detection.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="daas">
    <h2>Why Choose Drone as a Service (DaSS)?</h2>
    <p>All-in-one service for your digital appearance from Content Strategy, User Experience, Interface Design, Content
      Design, Information Architecture, User Flow Mapping, Wireframing and Prototyping, Visual Design, Responsive
      Design, UI Kits and Pattern Libraries.</p>
  </div>
  <div class="row ffi-container">
    <!-- First Container -->
    <div class="col-md-4 container container-xxttrra">
      <div class="daas-serr-card-container">
        <div class="daas-cont-new">
          <img class="hover-img cc-image" src="images/innovation.png" alt="Icon">
          <div class="xtra-card-content">
            <h3>Expertise & Innovation</h3>
            <p>Leverage our extensive knowledge in drone technology for efficient, reliable, and precise services.</p>
          </div>
        </div>
        <div class="daas-cont-new">
          <img class="hover-img cc-image" src="images/innovation.png" alt="Icon">
          <div class="xtra-card-content">
            <h3>Cost-Effective</h3>
            <p>Avoid hefty investments with our scalable, budget-friendly solutions that deliver advanced drone
              capabilities.</p>
          </div>
        </div>
        <div class="daas-cont-new">
          <img class="hover-img cc-image" src="images/innovation.png" alt="Icon">
          <div class="xtra-card-content">
            <h3>Advanced Technologies</h3>
            <p>Benefit from state-of-the-art developed drone and software to meet your specific needs.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Second Container (Image) -->
    <div class=" col-md-4 container image-container">
      <img class="second-container" src="images/serice-daas.jpg" alt="Main Image">
    </div>

    <!-- Third Container (Same as First) -->
    <div class="col-md-4 container container-xxttrra">
      <div class="daas-serr-card-container">
        <div class="daas-cont-new">
          <img class="hover-img cc-image" src="images/innovation.png" alt="Icon">
          <div class="xtra-card-content">
            <h3>Customized Services</h3>
            <p>Whether for agriculture, surveillance, or mapping, our flexible packages ensure the perfect fit for your
              operations.</p>
          </div>
        </div>
        <div class="daas-cont-new">
          <img class="hover-img cc-image" src="images/innovation.png" alt="Icon">
          <div class="xtra-card-content">
            <h3>Regulatory Compliance</h3>
            <p>We handle all the permits and regulations, ensuring safe and legal operations every time.</p>
          </div>
        </div>
        <div class="daas-cont-new">
          <img class="hover-img cc-image" src="images/art.png" alt="Icon">
          <div class="xtra-card-content">
            <h3>End to End Customer Support</h3>
            <p>From setup to ongoing maintenance, our team provides continuous support, ensuring smooth DaSS operations.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="nextwhy" style="background-color: #F0F0F0;">
    <div class="row mt-5">
      <h3>Choose OUS’s DaSS to unlock<br> new possibilities with precision, reliability, and cost-efficiency.</h3>
    </div>
  </div>
  <div class="quote-container">
    <div class="image-container">
      <img src="images/contactt.png" alt="Customer Support Representative">
    </div>
    <div class="text-container">
      <p>'At Optiemus Unmanned Systems, we are committed to empowering industries with innovative drone technology that
        drives efficiency, enhances safety, and delivers unparalleled precision. Whether it’s detailed mapping,
        comprehensive monitoring, or targeted inspections, our advanced drone solutions are designed to meet the unique
        needs of each sector we serve. Partner with us to elevate your operations and achieve new heights in performance
        and reliability.'</p>
    </div>
  </div>
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