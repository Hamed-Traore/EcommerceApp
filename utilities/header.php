<!-- 
<header>

    <div class=" px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            <h3 style="text-decoration-u">Lab Ecommerce 2022</h3>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <a href="view/login.php" class="btn  btn-success">Login</a>
          <a href="view/register.php" class="btn  btn-primary">Sign up</a>
          <a href="view/Contact_display.php" class="btn  btn-primary">Contact App</a>
          </ul>
        </div>
      </div>
    </div>
        
  </header>

  <div class="b-example-divider"></div>
</main>
<div><br></div>

    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

         <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/n
     -->

     
<header>

<div class=" px-3 py-2 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        <h3 style="text-decoration-u">Event Management</h3>
      </a>

      <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
        <?php
        if (isset($_SESSION["user_id"])) 
        {
        
          echo'<div class="nav-link dropdown">
                  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../images/P1.jpg" alt="" width="50" height="50" class="rounded-circle me-2">
                    <strong>'.$_SESSION['user_name'].'</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="home.php">Home</a></li>
                    <li><a class="dropdown-item" href="createEvent_form.php?user_id='.$_SESSION["user_id"].'">Create new event...</a></li>
                    <li><a class="dropdown-item" href="event_test.php">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../controllers/Logout-controller.php">Sign out</a></li>
                  </ul>
                  <a class="btn btn-danger" href="../actions/Logout.php">Sign out</a>
                </div>';
        }
        else
        {
          
          echo' <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <a href="view/login.php" class="btn  btn-success">Login</a>
                    <a href="view/register.php" class="btn  btn-primary">Sign up</a>
                    <a href="view/Contact_display.php" class="btn  btn-primary">Contact App</a>
                </ul>';
        }
        ?>
      </ul>
    </div>
  </div>
</div>
    
</header>

<div class="b-example-divider"></div>
</main>
<div><br></div>

<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

     <!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/n
