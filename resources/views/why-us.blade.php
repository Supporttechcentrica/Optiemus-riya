@extends('layouts.app')
@section('content')
<div>
    <img src="images/whyushero.png" alt="Why Us Image" class="whyusimage">

  </div>
  <section class="leading">
    <h1>Leading The Way In Unmanned Aerial Vehicles</h1>
  </section>
  <!-- <hr class="divider"> -->
  <div class="container">
    <div class="row first-column">
      <div class="col-md-6 image-wrapper why">
        <img src="images/home-img.jpg" alt="Team">
      </div>
      <div class="col-md-6">
        <!-- <h2>Heading Text</h2> -->
        <p class="">Since the dawn of Industrial Age, the Technology
          Revolutions have reshaped the world. Industries
          vis-a-vis Defence, Healthcare, Agriculture, Mining,
          Oil & Gas, Renewable Energies, and Logistics are
          transforming their operations using remotely
          operated machines i.e. UAV’s. <br> <br> Optiemus Unmanned Systems (OUS), a young, talented and dynamic
          team is helping these industries to achieve their business</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <section class="videos-section homee-why">
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
  <div class="whyusss" style="  background: linear-gradient(90deg,#0E4D78, #0A1F31);">
    <div class="row mt-5">
      <h1 class="text-center mb-4 headywhy" style="color:#ffffff;">Why Us</h1>
      <div class="container service">
        <div class="row service">
          <div class="service-card">
            <!-- <i>🔧</i> -->
            <img class="hover-img" src="{{ asset('images/service-icons/designed.png') }}" alt="Icon">
            <h3>Designed In-house</h3>
            <p>Complete control over quality and performance.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="{{ asset('images/service-icons/Monocoque-Structure.png') }}" alt="Icon">
            <h3>Monocoque Structure</h3>
            <p>Lightweight yet strong frame for enhanced durability and efficiency.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="{{ asset('images/service-icons/Robust-rugged.png') }}" alt="Icon">
            <h3>Robust and Rugged Design</h3>
            <p>Built to withstand challenging environments.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="{{ asset('images/service-icons/Indian-components.png') }}" alt="Icon">
            <h3>Indian Components</h3>
            <p>Commitment to supporting local industries with high-quality materials.</p>
          </div>
        </div>
        <div class="row service xttrraa">
          <div class="service-card">
            <img class="hover-img" src="{{ asset('images/service-icons/solderless.png') }}" alt="Icon">
            <h3>Solderless Assembly </h3>
            <p>Complete control over quality and performance.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="{{ asset('images/service-icons/mill-grade.png') }}" alt="Icon">
            <h3>Mil Grade Wires & Connectors</h3>
            <p>Complete control over quality and performance.</p>
          </div>
          <div class="service-card">
            <img class="hover-img" src="{{ asset('images/service-icons/Conductive-Paint.png') }}" alt="Icon">
            <h3>Conductive Paint</h3>
            <p>EMI/EMC resistance, enhancing the overall safety and reliability of our drones.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="whyusss" style="  background: linear-gradient(90deg,#0E4D78, #0A1F31);">
    <div class="row mt-5">
      <h1 class="text-center mb-4 headywhy" style="color:#ffffff;">Why Us
        <hr class="divider" style="width:120px;">
      </h1>
    </div>
    <div class="row mt-5 cardsection">
      <div class="col-md-3 mb-4 whyus">
        <div class="card text-center p-3">
          <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
            <img src="images/Group 1 (1).png" alt="Icon">
          </div>
          <h5>Designed In-house</h5>
          <p>Complete control over quality and performance.</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 whyus">
        <div class="card text-center p-3">
          <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
            <img src="images/Group 1 (1).png" alt="Icon">
          </div>
          <h5>Monocoque Structure </h5>
          <p>Lightweight yet strong frame for enhanced durability and efficiency.</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 whyus">
        <div class="card text-center p-3">
          <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
            <img src="images/Group 1 (1).png" alt="Icon">
          </div>
          <h5>Robust and Rugged Design</h5>
          <p>Built to withstand challenging environments.</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 whyus">
        <div class="card text-center p-3">
          <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
            <img src="images/Group 1 (1).png" alt="Icon">
          </div>
          <h5>Indian Components</h5>
          <p>Commitment to supporting local industries with high-quality materials.</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 whyus">
        <div class="card text-center p-3">
          <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
            <img src="images/Group 1 (1).png" alt="Icon">
          </div>
          <h5>Solderless Assembly</h5>
          <p>Complete control over quality and performance.</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 whyus">
        <div class="card text-center p-3">
          <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
            <img src="images/Group 1 (1).png" alt="Icon">
          </div>
          <h5>Mil Grade Wires & Connectors</h5>
          <p>Complete control over quality and performance.</p>
        </div>
      </div>

      <div class="col-md-3 mb-4 whyus">
        <div class="card text-center p-3">
          <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
            <img src="images/Group 1 (1).png" alt="Icon">
          </div>
          <h5>Conductive Paint</h5>
          <p> EMI/EMC resistance, enhancing the overall safety and reliability of our drones.</p>
        </div>
      </div>
    </div>
  </div> -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="gridimg">
          <img src="{{ asset('images/img-green2.jpg') }}" alt="Image 1">
          <img src="{{ asset('images/img1-green.jpg') }}" alt="Image 2">
        </div>
      </div>
      <div class="col-md-4">
        <div class="gridimg">
          <img src="{{ asset('images/img1-green.jpg') }}" alt="Image 3">
          <img src="{{ asset('images/img-green2.jpg') }}" alt="Image 4">
        </div>
      </div>
      <div class="col-md-4">
        <div class="gridimg">
          <img src="{{ asset('images/img-green2.jpg') }}" alt="Image 5">
          <img src="{{ asset('images/img1-green.jpg') }}" alt="Image 6">
        </div>
      </div>
    </div>
  </div>
  <div class="nextwhy" style="background-color: #F0F0F0;">
    <div class="row mt-5">
      <!-- <h1 class="text-center mb-4">Why Us <hr class="divider" style="width:120px;"></h1> -->
      <div class="col-md-6">
        <ul class="list-unstyled icon-list custom">
          <li><i class="fas fa-check-circle"></i>Custom built and modifiable to cater to specific requirements</li>
          <li><i class="fas fa-check-circle"></i>Prototyped In-house</li>
          <li><i class="fas fa-check-circle"></i>EMI (Electro-Magnetic Interference) / EMC (Electro-Magnetic
            Compatibility) hardened.</li>
          <li><i class="fas fa-check-circle"></i>Powered by On-Edge AI that processes up to 100 TOPS, enabling intensive
            data processing and analysis.</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-unstyled icon-list custom">
          <li><i class="fas fa-check-circle"></i>Manufactured and designed in-house</li>
          <li><i class="fas fa-check-circle"></i>Strictly adhering to International Standards.</li>
          <li><i class="fas fa-check-circle"></i>Continuous service support throughout product life cycle including
            availability of spares</li>
          <li><i class="fas fa-check-circle"></i>Remote troubleshooting and on-site training support available by
            qualified and trained in-house staff.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="makeinindia">
    <h1>Make In India</h1>

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <!-- <h2>Heading Text</h2> -->
          <p class="since">Since the dawn of Industrial Age, the Technology
            Revolutions have reshaped the world. Industries
            vis-a-vis Defence, Healthcare, Agriculture, Mining,
            Oil & Gas, Renewable Energies, and Logistics are
            transforming their operations using remotely
            operated machines i.e. UAV’s.</p>
          <!-- <button>Know More</button> -->
        </div>
        <div class="col-md-6 image-wrapper">
          <img src="{{ asset('images/Rectangle 1.jpg') }}" alt="Team">
        </div>
        <div class="col-md-3">
          <!-- <h2>Heading Text</h2> -->
          <p class="since">Since the dawn of Industrial Age, the Technology
            Revolutions have reshaped the world. Industries
            vis-a-vis Defence, Healthcare, Agriculture, Mining,
            Oil & Gas, Renewable Energies, and Logistics are
            transforming their operations using remotely
            operated machines i.e. UAV’s.</p>
          <!-- <button>Know More</button> -->
        </div>
      </div>
    </div>
  </div>
  <div class="customer">
    <h1>Customer Support</h1>
  </div>
  <div class="container customers">
    <div class="row">
      <div class="col-md-6 image-wrapper">
        <img src="{{ asset('images/home-img.jpg') }}" alt="Team">
      </div>
      <div class="col-md-6">
        <div class="customer-card">
          <img src="{{ asset('images/Group 1 (1).png') }}" alt="Icon">
          <div class="text-content">
            <h3><strong>Remote Desk Support</strong></h3>
            <p>We offer round-the-clock assistance to address any queries or concerns you may have.</p>
          </div>
        </div>

        <div class="customer-card">
          <img src="{{ asset('images/Group 1 (1).png') }}" alt="Icon">
          <div class="text-content">
            <h3><strong>Comprehensive Spare Parts Availability</strong></h3>
            <p>
              With all parts developed in-house, we guarantee access to spare parts throughout the product's lifecycle,
              ensuring uninterrupted service and support.</p>
          </div>
        </div>

        <div class="customer-card">
          <img src="{{ asset('images/Group 1 (1).png') }}" alt="Icon">
          <div class="text-content">
            <h3><strong>On-Site Training and Support</strong></h3>
            <p>We offer comprehensive on-site training for pilots, addressing all their queries on the spot.
              Additionally, our technicians are always on standby to resolve any issues promptly, ensuring minimal
              turnaround time.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="contact-cta-why">
          <button class="cta-why-contact">CONTACT NOW</button>
        </div> -->
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
  
  <!--footer start-->
@endsection