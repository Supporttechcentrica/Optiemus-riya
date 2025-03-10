@extends('layouts.app')
@section('content')
<style>
    .job-list {
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .job-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
        border-radius: 5px;
        background: #fff;
    }
    .job-title {
        font-weight: bold;
    }
    .apply-btn {
        padding: 8px 12px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .career-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }
    .popup-content {
        background: white;
        padding: 20px;
        border-radius: 10px;
        width: 400px;
    }
    .close-btn {
        cursor: pointer;
        float: right;
        font-size: 20px;
    }
    .form-group {
        margin-bottom: 10px;
    }
</style>

<div>
    <img src="{{ asset('images/whyushero.png') }}" alt="Why Us Image" class="whyusimage">
</div>
<section class="leading">
    <h1>Leading The Way In Unmanned Aerial Vehicles</h1>
</section>
<div class="job-list">
    <h2>Job Openings</h2>
    <div class="job-container">
        <div class="job-title">Software Engineer</div>
        <button class="apply-btn" onclick="openPopup('Software Engineer', 'We are looking for a skilled Software Engineer to develop, test, and maintain web applications. The ideal candidate should have experience in front-end and back-end technologies, collaborate with cross-functional teams, and ensure optimal performance and security. Strong problem-solving skills and a passion for coding are essential. If you are eager to work in a dynamic environment and contribute to innovative projects, apply now!')">Apply</button>
    </div>
    <div class="job-container">
        <div class="job-title">Marketing Manager</div>
        <button class="apply-btn" onclick="openPopup('Marketing Manager', 'We are seeking an experienced Marketing Manager to lead and execute marketing campaigns. The candidate should have expertise in digital marketing, content strategy, and brand management. Responsibilities include planning, analyzing market trends, and coordinating with sales teams. A creative mindset and strong communication skills are essential. If you are passionate about driving brand growth and engagement, we encourage you to apply and be part of our dynamic team!')">Apply</button>
    </div>
</div>

<div class="career-popup" id="careerPopup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2 id="jobTitle"></h2>
        <p id="jobDescription"></p>
        <h3>Apply Now</h3>
        <form>
            <div class="form-group">
                <label>Name:</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" required>
            </div>
            <div class="form-group">
                <label>Resume:</label>
                <input type="file" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    function openPopup(title, description) {
        document.getElementById('jobTitle').innerText = title;
        document.getElementById('jobDescription').innerText = description;
        document.getElementById('careerPopup').style.display = 'flex';
    }
    function closePopup() {
        document.getElementById('careerPopup').style.display = 'none';
    }
</script>

@endsection
