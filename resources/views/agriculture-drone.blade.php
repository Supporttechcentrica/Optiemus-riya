@extends('layouts.app')
@section('content')
<style>
        .application-container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            max-width: 1200px;
            margin: auto;
            flex-direction: column;
        }
        .application-row {
            display: flex;
            gap: 40px;
            margin-bottom: 20px;
            width: 100%;
            justify-content: flex-start;
        }
        .application-image-wrapper {
            position: relative;
            display: inline-block;
            border-radius: 10px;
            max-width: calc((100% - 40px) / 3);
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
        }
        .application-image-wrapper img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 10px;
            position: relative;
            z-index: 2;
        }
        .application-image-wrapper::before {
            content: "";
            position: absolute;
            top: 10px;
            left: 20px;
            right: -14px;
            bottom: -14px;
            border: 2px solid #2cb98b;
            border-radius: 10px;
            z-index: 1;
        }
        .application-row.center {
            justify-content: center;
        }
        .application-row.center .application-image-wrapper {
            max-width: calc((100% - 40px) / 3); /* Match first row image width */
        }
        .application-image-wrapper h2 {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px 10px 10px 40px;
            background-color: rgba(0, 49, 77, 0.7);
            color: white;
            z-index: 3;
            margin: 0px 0px 14px 0px;
            font-size: 24px;
            text-align: left;
        }
        .application-image-wrapper:hover {
            transform: scale(1.1);
        }

        /* Tablet responsiveness */
        @media (max-width: 1024px) {
            .application-row {
                gap: 30px;
                justify-content: center;
            }
            .application-image-wrapper {
                max-width: calc((100% - 30px) / 2);
            }
            .application-row.center .application-image-wrapper {
                max-width: calc((100% - 30px) / 2); /* Match first row image width */
            }
            .application-image-wrapper::before {
                top: 15px;
                left: 25px;
                right: -8px;
                bottom: -10px;
            }
            .application-image-wrapper:hover {
                transform: none;
            }
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .application-row {
                flex-direction: column;
                gap: 20px;
                align-items: center;
            }
            .application-image-wrapper {
                max-width: 90%;
            }
            .application-image-wrapper h2 {
                font-size: 18px;
                padding: 8px;
            }
            .application-row.center .application-image-wrapper {
                max-width: 90%; /* Match first row image width */
            }
            .application-image-wrapper::before {
                top: 10px;
                left: 15px;
                right: -5px;
                bottom: -7px;
            }
            .application-image-wrapper:hover {
                transform: none;
            }
        }

        /* Small mobile screens */
        @media (max-width: 428px) {
            .application-container {
                padding: 15px;
            }
            .application-row {
                gap: 15px;
            }
            .application-image-wrapper {
                max-width: 100%;
            }
            .application-image-wrapper h2 {
                font-size: 16px;
                padding: 6px;
            }
            .application-row.center .application-image-wrapper {
                max-width: 100%; /* Match first row image width */
            }
            .application-image-wrapper::before {
                top: 8px;
                left: 10px;
                right: -4px;
                bottom: -5px;
            }
            .application-image-wrapper:hover {
                transform: none;
            }
        }
        
</style>
  <div>
    <img src="images/whyushero.png" alt="Why Us Image" class="whyusimage">
  </div>
  <!--radius section container start-->
  <div class="leading mapping">
    <h2>Agriculture Drone</h2>
  </div>
  <!--radius section container end-->
  <div class="application-container">
    <div class="application-row">
        <div class="application-image-wrapper">
            <img src="images/home-img.jpg" alt="Image 1">
            <h2><a href="{{ url('/agri-shakti-10l') }}">Agri Shakti 10L</a></h2>
        </div>
        <div class="application-image-wrapper">
            <img src="images/home-img.jpg" alt="Image 2">
            <h2><a href="{{ url('/agri-shakti-16l') }}">Agri Shakti 10L</a></h2>
        </div>
        <div class="application-image-wrapper">
            <img src="images/home-img.jpg" alt="Image 3">
            <h2><a href="{{ url('/vajra-qc-p20') }}">Vajra QC P20</a></h2>
        </div>
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
  <!--footer start-->
@endsection