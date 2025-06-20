<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Section - Thinkify</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .highlight-heading {
      font-size: 48px;
      font-weight: bold;
      background-color: black;
      color: white;
      padding: 10px;
      line-height: 1.2;
    }
    .tab-button {
      font-weight: 600;
      font-size: 18px;
      padding: 10px 20px;
    }
    .tab-content-box {
      border: 1px solid #dee2e6;
      padding: 25px;
      font-size: 18px;
    }
    .about-label {
      display: inline-block;
      background-color: #e7f0ff;
      color: #2563eb;
      padding: 8px 16px;
      border-radius: 8px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .scroll-up-btn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background-color: #2563eb;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 10px 15px;
      font-size: 20px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <img src="https://thinkifysoftwares.com/assets/img/images/index-img.png" alt="About Thinkify" class="img-fluid rounded"> <!-- Replace with your image -->
    </div>
    <div class="col-lg-6 mt-4 mt-lg-0">
      <div class="about-label">
        <span style="font-size: 12px; color: gold;">●</span> About Us
      </div>
      <h1 style="font-size:bold;"> Complete Managing About<br>Software Business</h1>
      
      <!-- Tab buttons -->
      <ul class="nav nav-tabs mt-4" id="aboutTab" role="tablist">
        <li class="nav-item">
          <button class="nav-link active tab-button" id="solution-tab" data-bs-toggle="tab" data-bs-target="#solution" type="button" role="tab">Our Solution</button>
        </li>
        <li class="nav-item">
          <button class="nav-link tab-button" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab">Our Mission</button>
        </li>
        <li class="nav-item">
          <button class="nav-link tab-button" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button" role="tab">Support</button>
        </li>
      </ul>

      <!-- Tab content -->
      <div class="tab-content tab-content-box" id="aboutTabContent">
        <div class="tab-pane fade show active" id="solution" role="tabpanel">
          Thinkify Software Services provide services that help improve a company's processes, enhance performance and ultimately make the company more profitable as it scales over time.
        </div>
        <div class="tab-pane fade" id="mission" role="tabpanel">
           A brief declaration of what the company does, who it serves, and why it exists.        </div>
        <div class="tab-pane fade" id="support" role="tabpanel">
          Company support, also known as business support services, can include a range of services that help a company run smoothly and efficiently.
        </div>

      </div>
      <br/>
      <h2>Rohit Kalebag</h2>
      <p>Founder</p>
    </div>
  </div>
</div>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
