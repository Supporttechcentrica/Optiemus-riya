@extends('layouts.app')
@section('content')
<style>
    .contact-image-wrapper {
  position: relative;
  display: inline-block;
  border-radius: 10px;
  max-width: 100%;
  box-sizing: border-box;
}

.contact-image-wrapper img {
  display: block;
  width: 100%;
  height: auto;
  border-radius: 10px;
  position: relative;
  z-index: 2;
}

.contact-image-wrapper::before {
  content: "";
    position: absolute;
    top: 20px;
    left: 40px;
    right: -14px;
    bottom: -14px;
    border: 2px solid #2cb98b;
    border-radius: 10px;
    z-index: 1;
}

@media (max-width: 768px) {
  .contact-image-wrapper {
    width: 90%;
  }
}
  </style>
  <div>
    <img src="images/whyushero.png" alt="Why Us Image" class="whyusimage">
  </div>
  <!--radius section container start-->
  <div class="leading mapping contact">
    <h2>"Message us, we will be in touch shortly"</h2>
  </div>
  <div class="contact-us-containers">
    <div class="contact-info">
      <!-- <h2>"Message us, we will be in touch shortly"</h2> -->
      <!-- <img src="images/contactt.png" class="touch" alt="Customer Support" style="width: 100%; height:100%;"> -->
      <div class="contact-image-wrapper">
        <img src="images/Rectangle 2 (6).jpg" alt="Customer Support">
      </div>
      
      
    </div>
    <div class="contact-form">
      <form action="" method="POST">
        <div class="form-group">
          <div>
            <label>First Name</label>
            <input type="text" name="first_name" placeholder="Enter your First Name" required>
          </div>
          <div>
            <label>Last Name</label>
            <input type="text" name="last_name" placeholder="Enter your Last Name" required>
          </div>
        </div>
        <div class="form-group">
          <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Email Address" required>
          </div>
          <div>
            <label>Mobile Number</label>
            <input type="text" name="mobile" placeholder="Mobile Number" required>
          </div>
        </div>
        <div class="form-group">
          <div>
            <label>Company</label>
            <input type="text" name="company" placeholder="Your Company Name">
          </div>
          <div>
            <label>Industry</label>
            <input type="text" name="industry" placeholder="Industry">
          </div>
        </div>
        <div class="form-group">
          <div>
            <label>City</label>
            <input type="text" name="city" placeholder="Your City">
          </div>
          <div>
            <label>Zip Code</label>
            <input type="text" name="zip_code" placeholder="Your City Zip Code">
          </div>
        </div>
        <div>
          <label>How did you hear about us?</label>
          <select name="source">
            <option value="">Select Mode</option>
            <option value="Google">Google</option>
            <option value="Social Media">Social Media</option>
            <option value="Referral">Referral</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div>
          <label>Message Us</label>
          <textarea name="message" placeholder="Drop your message here" required></textarea>
        </div>
        <button type="submit" class="submit-btn">SEND NOW</button>
      </form>
    </div>
  </div>

  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7007.894924796147!2d77.23673499245422!3d28.571340302792528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3ad9aaaaaab%3A0x5739967320093023!2sOptiemus%20Electronics%20Limited!5e0!3m2!1sen!2sin!4v1739967022287!5m2!1sen!2sin"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
  <!--radius section container end-->
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