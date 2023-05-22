
<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar Menu | Side Navigation Bar</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Kuya J BURGER</span>
      </div>
      

      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Kuya J BURGER</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="home.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">HOME</span>
              </a>
            </li>
            <li class="list">
              <a href="brugers.php" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">BURGERS</span>
              </a>
            </li>
            <li class="list">
              <a href="mess.php" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Messages</span>
              </a>
            </li>
            <li class="list">
              <a href="./bon/index.php" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">CRUD</span>
              </a>
            </li>
          </ul>

          <div class="bottom-cotent">
            <li class="list">
              <a href="edit.php" class="nav-link">
                <i class="bx bx-cog icon"></i>
                <span class="link">Settings</span>
              </a>
            </li>
            <li class="list">
              <a href="index.php" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <div class="Back">
      <img src="/img/1600w-UadvU9OJNgc.webp">

    </div>


	<img src='burimg/5b.jpg'>
  <footer>
  <section id="clothes">
        <div class="container">
          <div class="row">
            
              <div class="section-header text-center text-darl pb-5">
                <br>
                <h2>Message Us</h2>
                <br>
              </div>
              
  
          </div>
	<div class="container">
  <div class="row">
            
              <div class="card text-center bg-white pb-2 h-100 p-4 flex-column">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="img/facebook.jpg" class="rounded" alt="" height="400px" width="320px">
                  </div>
                  <br>
                  <h3 class="card-title">Kuya J Burger</h3>
                  <br>
                  <p class="lead"> Don't Forget to Like and Follow on Facebook! s
                  </p>
                  <a href="https://www.facebook.com/markjoebert.ribon.07" class="btn btn-warning">VISIT NOW</a>
                </div>
              </div>
  
  </section>
  </footer>


    <section class="overlay"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>
  </body>
</html>
