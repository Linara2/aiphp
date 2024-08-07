<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: ../login.php');
        exit();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Cloud Network</title>
    <!--Favicons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="../img/site.webmanifest">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../img/favicon-32x32.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../dashboard.php">Dashboard</a>
              </li>
            </ul>
          <div class="d-grid gap-4 d-md-flex justify-content me-md-4">
            <?php
            if (basename($_SERVER['PHP_SELF']) === 'logout.php') {
                echo '<a class="btn btn-dark btn-logout" href="../logout.php">Logout</a>';
            }else{
                echo '<a class="btn btn-outline-dark btn-logout" href="../logout.php">Logout</a>';
            }
            ?>

          </div>
        </div>
      </nav>

            <style>
              body{
                background-color: rgb(248, 248, 248);
              }
              .bg-gradient {
                background-color: hsl(217, 73%, 84%);
                color: #ffffff;
              }
              .center-btn {
                display: flex;
                justify-content: center;
                padding: 5px 10px;
              }
              
            </style>
          </head>

          <div class="container-md text-center mt-3" style="max-width: 850px;">
            <div class="mb-5 hero-text" style="font-size: 50px;">Tasks App</div>

        <form action="dbtasks.php" method="POST" class="row g-3">
            <div class="col-4">
                <input type="text" class="form-control" id="title" name="listname" placeholder="List Name" required/>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="description" name="caption" placeholder="Caption" required></input>
            </div>
            <div class="col-1">
            <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
          </svg></button>
          </div>

            <div class="col-1">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#searchModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>

            </button>
            </div>
            </form>
            <!-- Modal -->
            <div class="modal fade " id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">

            <div class="modal-body">
              <form action="" method="GET">

            <div class="input-group mb-3">
              <input type="text" name="search" class="form-control" placeholder="Spotlight Search" aria-label="Spotlight Search" aria-describedby="basic-addon2">
              <button class="input-group-text" id="basic-addon2" type="submit">Search</button>
            </div>
                
            </form>
          </div>
        </div>
      </div>
    </div>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Date Created</th>
                    <th>List Name</th>
                    <th>Caption</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aiphp";
                $email = $_SESSION['userloggedin'];

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //Check if a search request is made
                if(isset($_GET['search'])){
                  $search=$_GET['search'];
                  if($search==''){
                      //All the records
                      $sql = "SELECT ListName, Caption, CreatedDate FROM tasklist WHERE email = '$email' ORDER BY CreatedDate DESC";
                  }
                  $sql = "SELECT ListName, Caption, CreatedDate FROM tasklist WHERE email = '$email' AND ListName LIKE '%$search%' ORDER BY CreatedDate DESC";
              }else{
                  // SQL query to select the desired columns from the "tasklist" table
                  $sql = "SELECT ListName, Caption, CreatedDate FROM tasklist WHERE email = '$email' ORDER BY CreatedDate DESC";
              }

                // Execute the query
                $result = $conn->query($sql);

                // Check if the query was successful
                if ($result) {
                    // Fetch the rows
                    while ($row = $result->fetch_assoc()) {
                        $lname=$row["ListName"];
                        $cdate=$row["CreatedDate"];
                        // Display the data in table rows
                        echo "<tr>";
                        echo "<td class='p-3'>" . $row["CreatedDate"] . "</td>";
                        echo "<td class='p-3'><a href='../items/index.php?listname=" . $lname . "&cdate=" . $cdate . "'>" . $lname . "</a></td>";
                        echo "<td class='p-3'>" . $row["Caption"] . "</td>";
                        echo "<td class='p-3'> <a class='btn btn-outline-danger' href=" . "dbtasks.php?delid=" . $row["ListName"] . ">Delete</a> </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html> 