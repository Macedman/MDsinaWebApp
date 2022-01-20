<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MDsina</title>
    <link rel="shortcut icon"  href="<?php echo $set['logo'];?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  /*Google fonts*/
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto Slab', serif;;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 260px;
    background: #11101d;
    z-index: 100;
    transition: all 0.2s ease;
}

.sidebar.close {
    width: 78px;
}

.sidebar .logo-details {
    width: 100%;
    height: 60px;
    display: flex;
    align-items: center;
}

.sidebar .logo-details i {
    font-size: 30px;
    color: #fff;
    height: 50px;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
    cursor: pointer;
}

.sidebar .logo-details .logo_name {
    font-size: 30px;
    color: #fff;
    font-weight: 600;
    transition: 0.3s ease;
    transition-delay: 0.1s;
}

.sidebar.close .logo-details .logo_name {
    transition-delay: 0s;
    opacity: 0;
    pointer-events: none;
}

.sidebar .nav-links {
    height: 100%;
    padding: 30px 0 150px 0;
    overflow: auto;
}

.sidebar.close .nav-links {
    overflow: visible;
}

.sidebar .nav-links::-webkit-scrollbar {
    display: none;
}

.sidebar .nav-links li {
    position: relative;
    list-style: none;
    transition: all 0.4s ease;
}
.sidebar .nav-links li:hover {
    background: #1d1b31;
}

.sidebar .nav-links li .icon-link {
    display: flex;
    align-items: center;
    color: #fff;
    justify-content: space-between;
}

.sidebar.close .nav-links li .icon-link {
    display: block;
}

.sidebar .nav-links li i {
    height: 50px;
    text-align: center;
    min-width: 78px;
    line-height: 50px;
    font-size: 20px;
    color: #fff;
    transition: all 0.3 ease;
    cursor: pointer;
}

.sidebar .nav-links li.showMenu i.arrow {
    transform: rotate(-180deg);
}

.sidebar.close .nav-links i.arrow {
    display: none;
}

.sidebar .nav-links li a {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
}

.sidebar .nav-links li a .link_name {
    font-size: 18px;
    font-weight: 400;
}

.sidebar.close .nav-links li a .link_name {
    opacity: 0;
    pointer-events: none;
}

.sidebar .nav-links li .sub-menu {
    padding: 6px 6px 14px 80px;
    margin-top:  -10px; 
    background: #1d1b31;
    display: none;
}


.sidebar .nav-links li.showMenu .sub-menu {
    display: block;
}

.sidebar .nav-links li .sub-menu a {
    font-size: 15px;
    padding: 5px 0;
    white-space: nowrap;
    opacity: 0.6;
    transition: 0.3s ease;
}

.sidebar .nav-links li .sub-menu a:hover {
    opacity: 1;
}

.sidebar.close .nav-links li .sub-menu {
    position: absolute;
    left: 100%;
    top: 0;
    margin-top: 0;
    padding: 10px 20px;
    border-radius: 0 6px 6px 0;
    transition: all 0.4s ease;
    opacity: 0;
    display: block;
    pointer-events: none;
}


.sidebar.close .nav-links li:hover .sub-menu {
    top: 0;
    opacity: 1;
    pointer-events: auto;
}


.sidebar .nav-links li .sub-menu .link_name {
    display: none;
}

.sidebar.close .nav-links li .sub-menu .link_name {
    display: none;
}

.sidebar.close .nav-links li .sub-menu .link_name {
    font-size: 18px;
    opacity: 1;
    display: block;
}

.sidebar .nav-links li .sub-menu.blank {
    opacity: 1;
    pointer-events: auto;
    padding: 3px 20px 6px 16px;
    opacity: 0;
    pointer-events: none;
}

.sidebar .nav-links li:hover .sub-menu.blank {
    top: 50%;
    transform: translateY(-50%);
}

.sidebar .profile-details {
    position: fixed;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #1d1b31;
    padding: 6px 0;
    transition: all 0.4s ease;
}

.sidebar.close .profile-details {
    background: none;
}

.sidebar.close .profile-details {
    width: 78px;
}

.sidebar .profile-details img {
    height: 52px;
    width: 52px;
    object-fit: cover;
    border-radius: 16px;
    margin: 0 14px 0 12px;
    background: #1d1b31;
    transition: all 0.5s ease;
}

.sidebar.close .profile-details img {
    padding: 10px;
}

.sidebar .profile-details .profile_name, 
.sidebar .profile-details .job {
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    white-space: nowrap;
}

.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name, 
.sidebar.close .profile-details .job {
    display: none;
}

.sidebar .profile-details .job {
    font-size: 12px;
}

.sidebar .profile-details .profile-content {
    display: flex;
    align-items: center;
}

.home-section {
    position: relative;
    background: #E4E9F7;
    height: 100vh;
    left: 260px;
    width: calc(100% - 260px);
    transition: all 0.5 ease;
}

.sidebar.close ~ .home-section {
    left: 78px;
    width: calc(100% - 78px);
}

.home-section .home-content {
    height: 60px;
    display: flex;
    align-items: center;
}

.home-section .home-content .bx-menu, 
.home-section .home-content .text {
    color: #11101d;
    font-size: 35px;
}

.home-section .home-content .bx-menu {
    padding: 0 15px;
    cursor: pointer;
}

.home-section .home-content .text {
    font-size: 26px;
    font-weight: 600;
}

</style>

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
          <img src="images/profile.jpg" alt="profile">
        </div>
        
        <div class="name-job">
          <div class="profile_name">Ec Macedaa</div>
          <div class="job">Web Developer</div>
        </div>
        <i class='bx bx-log-out'></i>
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
</body>
</html>