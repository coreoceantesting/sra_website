<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> झोपडपट्टी पुनर्वसन प्राधिकरण (एसआरए)</title>

    <link href="https://www.sra.gov.in/assets/themes/css/style.css" rel="stylesheet"
    type="text/css">
    <link rel="alternate stylesheet" href="https://www.sra.gov.in/assets/themes/css/change.css"
    media="screen" title="change" />
    <link rel="alternate stylesheet" href="https://www.sra.gov.in/assets/themes/css/green.css"
    media="screen" title="green" />
    <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">


  <style>
            /* General Styles */
        * {
        box-sizing: border-box;
        }

        /* html {
        font-size: 62.5%;
        } */

        body {
        background-color: #fff;
        margin: 0;
        padding: 0;
        }

        main {
        padding: 5rem 0 10rem 0;
        }

        .heading {
        color: #333;
        font-family: 'Walter Turncoat', cursive;
        font-size: 4rem;
        text-align: center;
        }

        /* What's New Scrolling Section */
        .whats_new {
        overflow: hidden;
        position: relative;
        height: 50px;
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

        /* Key Person Image Styling */
        .key_person img {
        width: 75px;
        height: 75px;
        border-radius: 0;
        }

        /* Scrolling Wrapper */
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

        /* Company Name Styling */
        .company-name {
        white-space: nowrap;
        font-size: 2.4rem; /* Converted to rem for better scaling */
        font-weight: bold;
        }

        /* Blue Button Styling */
        .blue-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 1.6rem;
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
        width: 24px; /* Added size for consistency */
        }

        .blue-button .link_text,
        .blue-button .text {
        display: inline-block;
        }

        /* Important Links */
        .important_links {
        text-align: center;
        }

        .important_links ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        }

        .important_links li {
        margin: 10px 0;
        }

        /* Column Layout */
        .column {
        float: left;
        width: 25%;
        padding: 10px;
        height: 150px;
        }

        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive Adjustments */
        @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }
        }

        /* Snapstack Component */
        .snapstack {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        width: 20rem;
        height: 20rem;
        margin: 0 auto;
        }

        .snapstack:hover .snap:not(:hover) {
        opacity: 0.6;
        transition: opacity 0.2s ease;
        }

        .snap {
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
        overflow: hidden;
        position: absolute;
        transition: all 0.5s ease;
        }

        .snap--1 { z-index: 10; transform: rotate(-45deg); }
        snap--2 { z-index: 20; transform: rotate(-30deg); }
        snap--3 { z-index: 30; transform: rotate(-15deg); }
        snap--4 { z-index: 40; transform: rotate(0deg); }
        snap--5 { z-index: 50; transform: rotate(15deg); }
        snap--6 { z-index: 60; transform: rotate(30deg); }

        .snap:hover {
        transform: rotate(0deg) scale(1.3);
        z-index: 100;
        transition: transform 0.5s ease;
        }

        .snap__frame {
        border: 0;
        position: relative;
        text-align: center;
        width: 100%;
        height: 100%;
        }

        .snap__img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        :root {
        --color-black: #000;
        --frame-height: 22rem;
        --frame-width: 26rem;
        --snap-height: 30rem;
        --snap-width: 28rem;
        }

  </style>
</head>
<body>

    <!-- Header Section -->
    @include('partials.header')

    <!-- Main Content Section -->
    <div class="mean-container">
        @yield('content') <!-- Dynamic content will be inserted here -->
    </div>

    <!-- Footer Section -->
    @include('partials.footer')

    <script src="https://www.sra.gov.in/assets/themes/js/jquery.min.js" type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/bootstrap.min.js"
    type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/jquery.flexisel.js"
    type="text/javascript">
    </script>
    <!-- News Scroll -->
    <script src="https://www.sra.gov.in/assets/themes/js/font-size.js" type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/newsTicker.js" type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/superfish.js" type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/styleswitcher.js"
    type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/jquery.meanmenu.js"
    type="text/javascript">
    </script>

    <script src="https://www.sra.gov.in/assets/themes/js/light-box.js" type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/ace-responsive-menu.js"
    type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/jquery.popVideo.js"
    type="text/javascript">
    </script>
    <script src="https://www.sra.gov.in/assets/themes/js/custom.js" type="text/javascript">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
</body>
</html>
