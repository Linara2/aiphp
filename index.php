<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Cloud Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">  
    <style>
      body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
      }
      .hero {
        background-color: #fff;
        padding: 100px 0;
        text-align: center;
      }
      .display-4 {
        font-size: 48px;
      }
      .lead {
        font-size: 24px;
        margin-bottom: 5px;
      }
      .carousel-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
      }
      .carousel {
        width: 800px;
        height: 400px;
      }
      .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }
      .carousel-caption h5 {
        white-space: nowrap;
        text-align: center;
        font-weight: bold;
        text-overflow: ellipsis;
        font-size: 30px;
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }
      .carousel-caption p {
        font-size: 16px;
        color: #000000;
        font-weight: 300;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }
      .card {
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
      }
      .card-body {
        padding: 20px;
      }
      .card-title {
        font-size: 20px;
        margin-bottom: 10px;
      }
      .card-text {
        font-size: 16px;
      }
    </style>
  </head>
  <body>
  <?php
  include_once('nav-common.php');
  ?>

    <div class="mt-2 container">

      <div class="hero">
        <h1 class="display-4" style="margin-top: -55px;">Employee Cloud Network</h1>
        <p class="lead" style="margin-bottom: -37px;">Empowering your business with cloud-based employee management</p>
      </div>
      <div class="carousel-container">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/carousel/1.png" alt="Image 1">
              <div class="carousel-caption">
                <h5>Employee Directory</h5>
                <p>Access and manage employee information in one place.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carousel/2.png" alt="Image 2">
              <div class="carousel-caption" style="font-weight: 500;">
                <h5>Leave Management</h5>
                <p>Easily request and track leave, and manage leave balances.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carousel/3.png" alt="Image 3">
              <div class="carousel-caption">
                <h5>Performance Tracking</h5>
                <p>Monitor and evaluate employee performance effortlessly.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>  

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
