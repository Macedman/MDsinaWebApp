<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MDsina</title>
    <link rel="shortcut icon"  href="<?php echo $set['logo'];?>">

  <!--IziToast-->
  <link rel="stylesheet" href="assets/iziToast/iziToast-master/dist/css/iziToast.min.css">

  <!-- Custom styles for this template -->
  <link href="css/sidebar.css" rel="stylesheet">

  <!--Boxicons-->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
</head>
<body>

<!--Sidebar Header-->
<div class="sidebar">
     <div class="logo-details">
      <i class='bx bxl-html5'></i> 
      <span class="logo_name">MDsina</span>
     </div>
   

   <!--Sidebar UL-->
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Dashboard</a></li>
        </ul>
      </li>

      <li>
        <div class="icon-link">
        <a href="#">
          <i class='bx bx-collection' ></i>
          <span class="link_name">Category</span>
        </a>
        <i class='bx bx-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="">Category</a></li>
          <li><a href="">Add Category</a></li>
          <li><a href="">List Category</a></li>
          <li><a href="">List Category</a></li>
        </ul>
      </li>
    

      <li>
        <div class="icon-link">
        <a href="#">
          <i class='bx bx-map-pin' ></i>
          <span class="link_name">Pincode</span>
        </a>
        <i class='bx bx-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="">Pincode</a></li>
          <li><a href="">Add Pincode</a></li>
          <li><a href="">List Pincode</a></li>
          <li><a href="">List Category</a></li>
          <li><a href="">List Category</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-store-alt'></i>
          <span class="link_name">Store</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Store</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-package'></i>
          <span class="link_name">Payment Gateway</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">List Payment Gateway</a></li>
        </ul>
      </li>

      <li>
        <div class="icon-link">
        <a href="#">
          <i class='bx bx-map-pin' ></i>
          <span class="link_name">Rider</span>
        </a>
        <i class='bx bx-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="">Rider</a></li>
          <li><a href="">Add Rider</a></li>
          <li><a href="">List Rider</a></li>
          <li><a href="">List Category</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-package'></i>
          <span class="link_name">Customers</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Customers</a></li>
        </ul>
      </li>

      <li>
        <div class="icon-link">
        <a href="#">
          <i class='bx bx-map-pin' ></i>
          <span class="link_name">Testimonial</span>
        </a>
        <i class='bx bx-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="">Testemonial</a></li>
          <li><a href="">Add Testemonial</a></li>
          <li><a href="">List Testemonial</a></li>
          <li><a href="">List Category</a></li>
          <li><a href="">List Category</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-package'></i>
          <span class="link_name">Order List</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Order List</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-package'></i>
          <span class="link_name">Update Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Update Profile</a></li>
        </ul>
      </li>
      
      <li>
        <a href="#">
          <i class='bx bx-package'></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="">Setting</a></li>
        </ul>
      </li>

    
      <li>
      <div class="profile-details">
        <div class="profile-content">
          <img src="assets/profile.jpg" alt="profile">
        </div>
        
        <div class="name-job">
          <div class="profile_name">Ec Macedaa</div>
          <div class="job">Web Developer</div>
        </div>
        <a href="logout.php"><i class='bx bx-log-out'></i></a>
      </div>
    </li>
  </ul>
  </div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Drop Down Sidebar</span>
    </div>
  </section>

<script>
    let arrow = document.querySelectorAll(".arrow");
    console.log(arrow);

    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;
        
        arrowParent.classList.toggle("showMenu");

      });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
    });

</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>