<!DOCTYPE HTML>
<html lang="mr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)</title>
    <link href="https://www.sra.gov.in/assets/themes/css/style.css" rel="stylesheet" type="text/css">
    <!-- Color Theme CSS -->
    <link rel="alternate stylesheet" href="https://www.sra.gov.in/assets/themes/css/change.css" media="screen" title="change" />
    <link rel="alternate stylesheet" href="https://www.sra.gov.in/assets/themes/css/green.css" media="screen" title="green" />
    <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

    <style>
      /* General styles for responsiveness */
      body {
        font-family: 'Walter Turncoat', cursive;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .whats_new {
        overflow: hidden;
        position: relative;
        height: 50px;
        background-color: #f1f1f1;
        width: 100%;
      }

      .scroll-text {
        display: inline-block;
        animation: scroll 10s linear infinite;
        white-space: nowrap;
        position: absolute;
        left: 50%;
      }

      @keyframes scroll {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(-100%);
        }
      }

      /* Making images responsive */
      .key_person img {
        width: 100%;
        height: auto;
        border-radius: 0;
      }

      /* Horizontal scrolling */
      .scrolling-wrapper {
        width: 100%;
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 10px 0;
      }

      .scrolling-content {
        display: flex;
        justify-content: space-around;
        align-items: center;
        animation: scroll 15s linear infinite;
        gap: 50px;
      }

      .company-name {
        white-space: nowrap;
        font-size: 1.5rem; /* Responsive font size */
        font-weight: bold;
      }

      /* Responsive button styling */
      .blue-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1rem; /* Adjusted for responsiveness */
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
        max-width: 300px;
      }

      .blue-button:hover {
        background-color: #0056b3;
      }

      .blue-button .link_icon img {
        margin-right: 8px;
        width: 24px; /* Adjusted size */
        height: auto;
      }

      .blue-button .link_text {
        display: inline-block;
      }

      .important_links {
        text-align: center;
        padding: 20px;
      }

      .important_links ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      .important_links li {
        margin: 10px 0;
      }

      /* Flexbox layout for responsiveness */
      .flex-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 10px;
      }

      .flex-item {
        flex: 1 1 100%; /* Full width on small screens */
        margin: 10px;
      }

      @media (min-width: 768px) {
        .flex-item {
          flex: 1 1 48%; /* Two columns on medium screens */
        }
      }

      @media (min-width: 1024px) {
        .flex-item {
          flex: 1 1 30%; /* Three columns on large screens */
        }
      }

      .column {
        width: 100%; /* Full width on small screens */
        padding: 10px;
        float: none;
      }

      @media (min-width: 768px) {
        .column {
          width: 50%; /* Two columns on medium screens */
        }
      }

      @media (min-width: 1024px) {
        .column {
          width: 25%; /* Four columns on large screens */
        }
      }
    </style>
  </head>

  <body>
    <!-- What's New Scrolling Section -->
    <div class="whats_new">
      <div class="scroll-text">
        Latest updates and news will appear here in a continuous scroll...
      </div>
    </div>

    <!-- Key Person Section -->
    <div class="flex-container">
      <div class="flex-item key_person">
        <img src="path/to/image1.jpg" alt="Key Person 1">
        <p>Key Person 1 Name</p>
      </div>
      <div class="flex-item key_person">
        <img src="path/to/image2.jpg" alt="Key Person 2">
        <p>Key Person 2 Name</p>
      </div>
    </div>

    <!-- Important Links Section -->
    <div class="important_links">
      <ul>
        <li><a href="#" class="blue-button"><span class="link_icon"><img src="path/to/icon1.png" alt=""></span><span class="link_text">Important Link 1</span></a></li>
        <li><a href="#" class="blue-button"><span class="link_icon"><img src="path/to/icon2.png" alt=""></span><span class="link_text">Important Link 2</span></a></li>
      </ul>
    </div>

    <!-- Horizontal Scrolling Section -->
    <div class="scrolling-wrapper">
      <div class="scrolling-content">
        <div class="company-name">Company 1</div>
        <div class="company-name">Company 2</div>
        <div class="company-name">Company 3</div>
      </div>
    </div>
  </body>
</html>
