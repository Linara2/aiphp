<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Cloud Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">  
  </head>
  <body>
    
  <?php
  include_once('nav-common.php');
  ?>

      <div class="container-md" style="max-width: 500px;">
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Employee Cloud Network</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <style>
              body{
                background-color: rgb(248, 248, 248);
              }
              .bg-gradient {
                background-color: hsl(217, 73%, 84%);
                color: #ffffff;
              }
              .custom-container {
                max-width: 800px;
                margin: 30px auto;
                padding: 30px;
                border: 2px solid #020202;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                color: black;

              }
              .center-btn {
                display: flex;
                justify-content: center;
                padding: 5px 10px;
              }
              
              h1 {
                margin-bottom: 30px;
              }
              
            </style>
          </head>
          <body>
            <div class="bg-gradient">
              <div class="container custom-container">
                <h1 class="text-center" style="font-weight: 700;">Sign In</h1>
                <form action="dblogin.php" method="POST">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" style="width: 320px;" id="email" aria-describedby="emailHelp">
                    
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="pass" class="form-control" id="password">
                  </div>
                  
                  <div class="center-btn">
                    <button type="submit" class="btn btn-outline-primary"
                            style="--bs-btn-padding-y: 10px; --bs-btn-padding-x: 70px; --bs-btn-font-size: 16px; margin-top: 10px;">
                      Login
                    </button>
                  </div>
                </form>
               
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html> 