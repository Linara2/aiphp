    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class=" container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/favicon-32x32.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            if (basename($_SERVER['PHP_SELF']) === 'index.php') {
            }else{
                echo '<li class="nav-item">
              <a class="nav-link active" aria-current="page" style="color: black; margin-right: 20px; font-size: 16px; font-weight: 500;" href="index.php">Home</a>
              </li>';
            }
            ?>
           
          </ul>
          <div class="d-grid gap-4 d-md-flex justify-content me-md-4">
            <?php
            if (basename($_SERVER['PHP_SELF']) === 'register.php') {
                echo '<a class="btn btn-dark btn-login" href="register.php">Register</a>';
            }else{
                echo '<a class="btn btn-outline-dark btn-register" href="register.php">Register</a>';
            }
            ?>
          
            <?php 
            if(basename($_SERVER['PHP_SELF']) === 'login.php'){
                echo '<a class="btn btn-dark btn-login" href="login.php">Login</a>';
            }else{
                echo '<a class="btn btn-outline-dark btn-register" href="login.php">Login</a>';
            }
            ?>
            
          </form>
        </div>
        <style>
        .btn-login,
        .btn-register {
            width: 140px;
        }
</style>
      </div>
</nav>
