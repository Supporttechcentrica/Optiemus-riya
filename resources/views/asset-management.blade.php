@extends('layouts.app')
@section('content')
<div>
    <img src="images/whyushero.png" alt="Why Us Image" class="whyusimage">
  </div>
  <!--radius section container start-->
  <div class="leading mapping">
    <h2>Optiemus Unmanned Systems Drones in Asset Management</h2>
    <p>Optiemus Unmanned Systems (OUS) is transforming asset management with its cutting-edge drone technology,
      providing companies with innovative solutions to monitor, maintain, and manage their assets more efficiently and
      accurately </p>
  </div>
  <!--radius section container end-->

  <!--first container start-->
  <div class="container disaster-heading">
    <div class="row first-column">
      <div class="col-md-6 image-wrapper">
        <img class="rad left" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
      <div class="col-md-6 right">
        <h2>Real-Time Asset Monitoring </h2>
        <p>OUS drones offer real-time surveillance of critical assets, such as infrastructure, equipment, and
          facilities. High-resolution cameras and sensors capture detailed data, allowing for continuous monitoring and
          early detection of potential issues.</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--first container end-->
  <!--second container start-->
  <div class="container disaster-heading second">
    <div class="row">
      <div class="col-md-6 left order-2 order-md-1">
        <h2>Inspection and Maintenance</h2>
        <p>OUS drones conduct routine inspections of assets, such as pipelines, power lines, and industrial machinery,
          without the need for manual intervention. This reduces downtime, enhances safety, and ensures timely
          maintenance by identifying wear and tear before they become critical.</p>
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
        <h2>Inventory and Asset Tracking</h2>
        <p>Equipped with advanced imaging and RFID scanning capabilities, OUS drones assist in inventory management and
          asset tracking across large sites. This automated process increases accuracy, reduces human error, and
          optimizes resource allocation.</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--Third container end-->
  <!--Fourth container start-->
  <div class="container disaster-heading second">
    <div class="row">
      <div class="col-md-6 left order-2 order-md-1">
        <h2>Environmental Monitoring</h2>
        <p>For assets located in environmentally sensitive areas, OUS drones provide critical data on environmental
          conditions, ensuring that operations remain compliant with regulations and minimizing ecological impact.</p>
        <!-- <button>Know More</button> -->
      </div>
      <div class="col-md-6 image-wrapper order-1 order-md-2">
        <img class="rad" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
    </div>
  </div>
  <!--Fourth container end-->
  <!--Fifth container start-->
  <div class="container disaster-heading second">
    <div class="row third-column">
      <div class="col-md-6 image-wrapper">
        <img class="rad" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
      <div class="col-md-6 right">
        <h2>Security and Surveillance</h2>
        <p>OUS drones enhance asset security by providing aerial surveillance over large areas, detecting unauthorized
          access, and monitoring perimeter security. Their ability to cover vast areas quickly makes them invaluable for
          protecting high-value assets.</p>
        <!-- <button>Know More</button> -->
      </div>
    </div>
  </div>
  <!--Fifth container end-->
  <!--sixth container start-->
  <div class="container disaster-heading second">
    <div class="row">
      <div class="col-md-6 left order-2 order-md-1">
        <h2>Data-Driven Decision Making</h2>
        <p>The detailed data collected by OUS drones is integrated into asset management systems, providing insights
          that drive informed decision-making. This data-driven approach helps in optimizing maintenance schedules,
          improving asset longevity, and reducing operational costs.</p>
        <!-- <button>Know More</button> -->
      </div>
      <div class="col-md-6 image-wrapper order-1 order-md-2">
        <img class="rad" src="images/home-img.jpg" class="img-fluid" alt="Placeholder Image">
      </div>
    </div>
  </div>
  <!--sixth container end-->
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