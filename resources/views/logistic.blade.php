@extends('layouts.app')
@section('content')
<div>
    <img src="images/whyushero.png" alt="Why Us Image" class="whyusimage">
  </div>
  <!--radius section container start-->
  <div class="leading mapping">
    <h2>Optiemus Unmanned Systems in the Logistics</h2>
    <p>Optiemus Unmanned Systems (OUS) is at the forefront of integrating cutting-edge drone technology into the
      logistics sector, offering innovative solutions that enhance efficiency, reduce costs, and improve overall service
      delivery. Here are some of the key applications of OUS drones in logistics:</p>
  </div>
  <!--radius section container end-->

  <!--first container start-->
  <div class="container disaster-heading">
    <div class="row first-column">
      <div class="col-md-6 image-wrapper">
        <img class="rad left" src="{{ asset('images/home-img.jpg') }}" class="img-fluid" alt="Placeholder Image">
      </div>
      <div class="col-md-6 right">
        <h2>Last-Mile Delivery</h2>
        <p>OUS drones are designed to streamline the last-mile delivery process, particularly in urban and semi-urban
          areas. Equipped with advanced navigation and obstacle avoidance systems, these drones can swiftly deliver
          packages to customers’ doorsteps, reducing the time and cost associated with traditional delivery methods.</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--first container end-->
  <!--second container start-->
  <div class="container disaster-heading second">
    <div class="row">
      <div class="col-md-6 left order-2 order-md-1">
        <h2>Rural and Remote Area Delivery</h2>
        <p>One of the major challenges in logistics is reaching remote and rural areas. OUS drones can easily navigate
          difficult terrains and deliver essential goods such as medicines, food, and other supplies to these
          hard-to-reach locations, ensuring timely and efficient service.</p>
        <!-- <button>Know More</button> -->
      </div>
      <div class="col-md-6 image-wrapper order-1 order-md-2">
        <img class="rad left" src="{{ asset('images/home-img.jpg') }}" class="img-fluid" alt="Placeholder Image">
      </div>
    </div>
  </div>
  <!--second container end-->
  <!--Third container start-->
  <div class="container disaster-heading">
    <div class="row third-column">
      <div class="col-md-6 image-wrapper">
        <img class="rad" src="{{ asset('images/home-img.jpg') }}" class="img-fluid" alt="Placeholder Image">
      </div>
      <div class="col-md-6 right">
        <h2>Warehouse Management</h2>
        <p>OUS drones are equipped with high-resolution cameras and sensors that allow them to perform inventory
          management tasks within warehouses. They can quickly scan barcodes and RFID tags, conduct stock-taking, and
          monitor inventory levels, thus reducing human error and increasing operational efficiency.</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--Third container end-->
  <!--Fourth container start-->
  <div class="container disaster-heading second">
    <div class="row">
      <div class="col-md-6 left order-2 order-md-1">
        <h2>Medical Deliveries</h2>
        <p><strong>Disaster Prediction and Observation: </strong> Our drones monitor environmental conditions such as
          floods or wildfires, providing data that is vital for predicting and preventing further damage.<br><br>

          <strong>Post-Disaster Environmental Monitoring: </strong> They also play a key role in assessing environmental
          impacts after a disaster, such as tracking pollution spread or changes to the landscape.
        </p>
        <!-- <button>Know More</button> -->
      </div>
      <div class="col-md-6 image-wrapper order-1 order-md-2">
        <img class="rad" src="{{ asset('images/home-img.jpg') }}" class="img-fluid" alt="Placeholder Image">
      </div>
    </div>
  </div>
  <!--Fourth container end-->
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