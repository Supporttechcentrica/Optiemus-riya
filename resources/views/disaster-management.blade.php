@extends('layouts.app')
@section('content')
<div>
    <img src="images/whyushero.png" alt="Why Us Image" class="whyusimage">
  </div>
  <!--radius section container start-->
  <div class="leading mapping">
    <h2>Disaster Management</h2>
    <p>At Optiemus Unmanned Systems, we recognize the vital role that drones play in modern disaster management. Our
      drones are designed to be versatile, fast, and capable of reaching even the most inaccessible areas, making them
      indispensable tools during emergencies. Here’s how our advanced technology is making a difference:</p>
  </div>
  <!--radius section container end-->

  <!--first container start-->
  <div class="container disaster-heading">
    <div class="row first-column">
      <div class="col-md-6 image-wrapper">
        <img class="rad left" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>

      <div class="col-md-6 right">
        <h2>Enhancing Search and Rescue Efforts</h2>
        <p><strong>Aerial Monitoring: </strong>Our drones are equipped to swiftly scan large regions, aiding in the
          quick location of missing or stranded individuals. They provide real-time visuals and data that are crucial
          for guiding rescue teams on the ground. <br><br> <strong>Thermal Imaging Capabilities: </strong>With
          integrated thermal cameras, our drones can detect heat signatures, making it easier to identify people in
          challenging conditions such as darkness or smoke-filled environments.</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--first container end-->
  <!--second container start-->
  <div class="container disaster-heading second">
    <div class="row">
      <div class="col-md-6 left  order-2 order-md-1">
        <h2>Assessing Damage Efficiently</h2>
        <p><strong>Rapid Damage Surveys: </strong>After a disaster, Optiemus drones can be deployed to assess damage
          across infrastructure, buildings, and landscapes. This enables authorities to prioritize areas in need of
          immediate attention and resources. <br><br> <strong>High-Definition Imagery: </strong> Our drones capture
          detailed images and videos, providing valuable insights into the extent of damage and helping to formulate
          effective response strategies.</p>
        <!-- <button>Know More</button> -->
      </div>
      <div class="col-md-6 image-wrapper order-1 order-md-2">
        <img class="rad" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
    </div>
  </div>
  <!--second container end-->
  <!--Third container start-->
  <div class="container disaster-heading">
    <div class="row third-column">
      <div class="col-md-6 image-wrapper">
        <img class="rad" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
      <div class="col-md-6 right">
        <h2>Delivering Essential Supplies</h2>
        <p><strong>Targeted Supply Drops: </strong>Our drones are capable of delivering crucial supplies like food,
          water, and medical kits to areas cut off from conventional transportation routes or too dangerous for rescue
          personnel. <br><br> <strong>Medical Aid: </strong> In critical situations, our drones can transport
          life-saving medical equipment and medications directly to those in need, ensuring timely assistance.</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--Third container end-->
  <!--Fourth container start-->
  <div class="container disaster-heading second">
    <div class="row">
      <div class="col-md-6 left order-2 order-md-1">
        <h2>Monitoring Environmental Impact</h2>
        <p><strong>Disaster Prediction and Observation: </strong> Our drones monitor environmental conditions such as
          floods or wildfires, providing data that is vital for predicting and preventing further damage.<br><br>

          <strong>Post-Disaster Environmental Monitoring: </strong> They also play a key role in assessing environmental
          impacts after a disaster, such as tracking pollution spread or changes to the landscape.
        </p>
        <!-- <button>Know More</button> -->
      </div>
      <div class="col-md-6 image-wrapper order-1 order-md-2">
        <img class="rad" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
    </div>
  </div>
  <!--Fourth container end-->
  <!--fifth container start-->
  <div class="container disaster-heading second">
    <div class="row third-column">
      <div class="col-md-6 image-wrapper">
        <img class="rad" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
      <div class="col-md-6 right">
        <h2>Supporting Safe Evacuations</h2>
        <p><strong>Crowd Management: </strong> During evacuations, Optiemus drones can monitor large groups, providing
          authorities with real-time information to ensure a safe and orderly process.<br><br>

          <strong>Guidance Assistance: </strong> In situations where traditional signage is insufficient, our drones can
          help guide people to safety through visual and audio signals.
        </p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--fifth container end-->
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