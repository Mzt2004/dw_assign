<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="font awesome/all.css">
<script src="hge.js">
   
</script>

</head>
<body onload="chg();">
    <header class="myheader">
<img src="photos and vds/header photo.jpg" alt="working out">
        <div class="captionh">
            <p class="capborder">Stay strong, fit</p> 
            <p class="capcolor">& motivated</p>
            <P>DURING QUARANTINE<span class="exclamation">!</span></P>  
            <span class="capbtn"><a href="#">Shop Now!</a></span>
        </div>
    </header>
    
           
       
    
    <nav class="mynav">
        <div class="leftnav">
           
                <li><img src="photos and vds/gym logo.png" alt="logo" class="logo"></li>
            <li class="current">Home</li>
            <li><a href="Info.html">Info</a></li>
            <li><a href="Wanted.html">Wanted</a></li>
            <li><a href="Workshop.html">Workshop</a></li>
            <li><a href="Gallery.html">Gallery</a></li>
            <li> <a href="Featured.html">Featured</a></li>
           
        </div>
        <div class="rightnav">
            <div class="login">
                <i class="fa-solid fa-user"></i><span><a href="login.html">Sign Up</a> </span>
            </div>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass" onmouseover="homesearch();"></i>
                <input type="text" id="navsearchbar" class="hidesearchbar" placeholder="Search">
            </div>
        </div>
    </nav>
    <nav class="mobile">
        <div class="mobilenav">
            <img src="photos and vds/gym logo.png" alt="logo" class="logo">
        </div>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-bars"></i></button>
            <div id="myDropdown" class="dropdown-content">
              <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a href="Home.html"><i class="fa-solid fa-house"></i>Home</a>
              <a href="Info.html"><i class="fa-solid fa-circle-info"></i>Info</a>
              <a href="Wanted.html"><i class="fa-solid fa-basket-shopping"></i>Wanted</a>
              <a href="Contact.html"><i class="fa-solid fa-phone"></i>Contact</a>
              <a href="Workshop.html"><i class="fa-solid fa-briefcase"></i>Workshop</a>
              <a href="Gallery.html"><i class="fa-solid fa-cart-shopping"></i>Gallery</a>
              <a href="Featured.html"><i class="fa-solid fa-arrow-trend-up"></i>Featured</a>
              <a href="Booking.html"><i class="fa-solid fa-mobile"></i>Booking</a>
              <a href="login2.html"><i class="fa-solid fa-user"></i>Log In</a>
              <a href="login.html"><i class="fa-solid fa-user-plus"></i>Sign Up</a>
            </div>
    </nav>