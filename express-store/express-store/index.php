<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Express Store - Ecommerce Store</title>

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">
  <!--Main CSS-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">

  <style>


  </style>

</head>

<body>

  <!-- ======================
   Search
  ======================= -->
  <div class="search">
    <div class="row">
      <div>
        <form action="">
          <input type="search" class="" name="search1" autofocus><button type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
  <!-- ======================
   Search
  ======================= -->
  <!--=========================
  start of header
===========================---->
  <div class="side-nav-dis"></div>
  <div id="nav-top">
    <div class="row">
      <div class="col-md-12">
        <div class="top-nav">
          <div class="top-left">
            <label for="">TONIGHT ONLY! 60% Off All Sweaters, Pajamas & More | 6 p.m.— midnight.</label><span>Online only.</span>
            <a href="">Exclusions & Details</a>
            <a href=""><b>WOMEN</b></a>
            <a href="./productlist.php"><b>MEN</b></a>
          </div>
          <a href="">Enable Accessibility</a>
        </div>
      </div>
    </div>
  </div>
  <div id="logo-div">
    <div class="row">
      <div class="col-xs-2 col-md-4"><a href="" id="hide-p">Free Shipping on Orders $50+ Details</a></div>
      <div class="col-xs-8 col-md-4" style="text-align: center;">
        <a href="index.php"><img class="exp-logo" src="./img/express-logo.svg" alt=""></a>
      </div>
      <div class="col-xs-2 col-md-4">
        <div class="icons" id="topIcons">
          <?php
          session_start();
          if (isset($_SESSION['loggedin']))
            echo '<a href="./logout.php">Logout</a>';
          ?>
          <a id="ic-1" class="log-img1" href=""><img src="./img/img32.PNG" alt=""></a>
          <?php
          if (isset($_SESSION['loggedin']))
            echo '<a><img src="./img/DP.PNG" style="width:32px;height:32px;border-radius:50%;"></a>';
          else
            echo '<a class="log-img2" href="signup.html"><img src="./img/img33.PNG"></a>';
          ?>
          <a id="ic-3" class="log-img3" href="cart.php"><img src="./img/img34.PNG" alt=""></a>
        </div>
      </div>
    </div>
    <i id="menuBtn" class="fa fa-bars"></i>
    <i id="menuClose" class="fa fa-close"></i>
  </div>
  <nav id="sideNav">
    <a href="" style="background-color: #f7f7f7; font-size: 14px; font-weight: normal;">Free Shipping on Orders $50+ <span>Details</span></a>
    <a href="">WOMEN <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
    <a href="productlist.php">MEN <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
    <a href="">JEANS <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
    <a href="">NEW <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
    <a href="">SALE <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
    <a href="">GIFTS <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
    <a href="">SERVICES <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
    <a href="">LABELS WE LOVE <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
    <a href="">EXPRESS OUTLET <span style="position: absolute; right: 20px;"><i class="fa fa-chevron-right"></i></span></a>
  </nav>
  <div id="navmenu1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="navbar1">
            <a class="menuitem1" href="">WOMEN</a>
            <a class="menuitem2" href="">MEN</a>
            <a class="menuitem3" href="">JEANS</a>
            <a class="menuitem4" href="./productlist.php">NEW</a>
            <a class="menuitem5" href="">SALE</a>
            <a class="menuitem6" href="">GIFTS</a>
            <a class="menuitem7" href="">SERVICES</a>
            <a class="menuitem8" href="">LABELS WE LOVE</a>
            <a class="menuitem9" href="">EXPRESS OUTLET</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst2" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont">
      <div class="row">
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">NEW & NOW</h3>
          <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Express x You: RSVP Edit</a></li>
            <li><a href="">Rachel Zoe's Holiday Picks</a></li>
            <li><a href="">Gifts for Her</a></li>
            <li><a href="">Holiday Outfits</a></li>
            <li><a href="">Sparkle & Shine</a></li>
            <li><a href="">FlexX Jeans</a></li>
            <li><a href="">Soft Sets</a></li>
            <li><a href="">Cozy Shop</a></li>
            <li><a href="">Pajamas</a></li>
            <li><a href="">Vacation Shop</a></li>
          </ul>
          <h3>EXPRESS ESSENTIALS</h3>
          <ul>
            <li><a href="">Body Contour</a></li>
            <li><a href="">Essential Tops</a></li>
            <li><a href="">Style Staples</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>CLOTHING</h3>
          <ul>
            <li><a href="">Tops</a></li>
            <li><a href="">Sweaters</a></li>
            <li><a href="">Dresses</a></li>
            <li><a href="">Jumpsuits & Rompers</a></li>
            <li><a href="">Matching Sets</a></li>
            <li><a href="">Jackets & Coats</a></li>
            <li><a href="">Jeans</a></li>
            <li><a href="">Pants</a></li>
            <li><a href="">Curvy Bottoms</a></li>
            <li><a href="">Leggings</a></li>
            <li><a href="">Skirts</a></li>
            <li><a href="">Suits</a></li>
            <li><a href="">Sleep Sets</a></li>
            <li><a href="">Petites</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>ACCESSORIES & SHOES</h3>
          <ul>
            <li><a href="">Shoes</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Handbags</a></li>
            <li><a href="">Winter Accessories</a></li>
            <li><a href="">Belts</a></li>
            <li><a href="">Hair Accessories</a></li>
            <li><a href="">Tights & Socks</a></li>

            <li><a href="">Fragrance</a></li>
            <li><a href="">Beauty</a></li>
            <li><a href="">Home & Tech</a></li>
            <li><a href="">All Accessories</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>FEATURED</h3>
          <ul>
            <li><a href="">#EXPRESSYOU</a></li>
            <li><a href="">Labels We Love</a></li>
            <li><a href="">Style Trial Rental</a></li>
            <li><a href="">Become A Style Editor</a></li>
            <li><a href="">Dream Big Project</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/m2.jpg" alt="">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->
  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst3" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont">
      <div class="row">
        <div class="col-md-3 offset-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">WOMEN'S JEANS</h3>
          <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Express x You: RSVP Edit</a></li>
            <li><a href="">Rachel Zoe's Holiday Picks</a></li>
            <li><a href="">Gifts for Her</a></li>
            <li><a href="">Holiday Outfits</a></li>
            <li><a href="">Sparkle & Shine</a></li>
            <li><a href="">FlexX Jeans</a></li>
            <li><a href="">Soft Sets</a></li>
            <li><a href="">Cozy Shop</a></li>
            <li><a href="">Pajamas</a></li>
            <li><a href="">Vacation Shop</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>MEN'S JEANS</h3>
          <ul>
            <li><a href="">Shoes</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Handbags</a></li>
            <li><a href="">Winter Accessories</a></li>
            <li><a href="">Belts</a></li>
            <li><a href="">Hair Accessories</a></li>
            <li><a href="">Tights & Socks</a></li>

            <li><a href="">Fragrance</a></li>
            <li><a href="">Beauty</a></li>
            <li><a href="">Home & Tech</a></li>
            <li><a href="">All Accessories</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/m3.webp" alt="">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->
  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst4" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont">
      <div class="row">
        <div class="col-md-3 offset-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">WOMEN'S NEW</h3>
          <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Express x You: RSVP Edit</a></li>
            <li><a href="">Rachel Zoe's Holiday Picks</a></li>
            <li><a href="">Gifts for Her</a></li>
            <li><a href="">Holiday Outfits</a></li>
            <li><a href="">Sparkle & Shine</a></li>
            <li><a href="">FlexX Jeans</a></li>
            <li><a href="">Soft Sets</a></li>
            <li><a href="">Cozy Shop</a></li>
            <li><a href="">Pajamas</a></li>
            <li><a href="">Vacation Shop</a></li>
          </ul>

        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>MEN'S NEW</h3>
          <ul>
            <li><a href="">Shoes</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Handbags</a></li>
            <li><a href="">Winter Accessories</a></li>
            <li><a href="">Belts</a></li>
            <li><a href="">Hair Accessories</a></li>
            <li><a href="">Tights & Socks</a></li>

            <li><a href="">Fragrance</a></li>
            <li><a href="">Beauty</a></li>
            <li><a href="">Home & Tech</a></li>
            <li><a href="">All Accessories</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/m4.webp">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->
  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst5" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont">
      <div class="row">
        <div class="col-md-3 offset-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">WOMEN'S CLEARANCE</h3>
          <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Express x You: RSVP Edit</a></li>
            <li><a href="">Rachel Zoe's Holiday Picks</a></li>
            <li><a href="">Gifts for Her</a></li>
            <li><a href="">Holiday Outfits</a></li>
            <li><a href="">Sparkle & Shine</a></li>
            <li><a href="">FlexX Jeans</a></li>
            <li><a href="">Soft Sets</a></li>
            <li><a href="">Cozy Shop</a></li>
            <li><a href="">Pajamas</a></li>
            <li><a href="">Vacation Shop</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>MEN'S CLEARANCE</h3>
          <ul>
            <li><a href="">Shoes</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Handbags</a></li>
            <li><a href="">Winter Accessories</a></li>
            <li><a href="">Belts</a></li>
            <li><a href="">Hair Accessories</a></li>
            <li><a href="">Tights & Socks</a></li>

            <li><a href="">Fragrance</a></li>
            <li><a href="">Beauty</a></li>
            <li><a href="">Home & Tech</a></li>
            <li><a href="">All Accessories</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/m5.webp" alt="">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->
  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst6" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont">
      <div class="row">
        <div class="col-md-3 offset-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">GIFTS FOR HER</h3>
          <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Express x You: RSVP Edit</a></li>
            <li><a href="">Rachel Zoe's Holiday Picks</a></li>
            <li><a href="">Gifts for Her</a></li>
            <li><a href="">Holiday Outfits</a></li>
            <li><a href="">Sparkle & Shine</a></li>
            <li><a href="">FlexX Jeans</a></li>
            <li><a href="">Soft Sets</a></li>
            <li><a href="">Cozy Shop</a></li>
            <li><a href="">Pajamas</a></li>
            <li><a href="">Vacation Shop</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>GIFTS FOR HIM</h3>
          <ul>
            <li><a href="">Shoes</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Handbags</a></li>
            <li><a href="">Winter Accessories</a></li>
            <li><a href="">Belts</a></li>
            <li><a href="">Hair Accessories</a></li>
            <li><a href="">Tights & Socks</a></li>

            <li><a href="">Fragrance</a></li>
            <li><a href="">Beauty</a></li>
            <li><a href="">Home & Tech</a></li>
            <li><a href="">All Accessories</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/m6.webp" alt="">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->
  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst7" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont">
      <div class="row">
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">CUSTOMER SERVICE</h3>
          <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Express x You: RSVP Edit</a></li>
            <li><a href="">Rachel Zoe's Holiday Picks</a></li>
            <li><a href="">Gifts for Her</a></li>
            <li><a href="">Holiday Outfits</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>EXPRESS SERVICES</h3>
          <ul>
            <li><a href="">Tops</a></li>
            <li><a href="">Sweaters</a></li>
            <li><a href="">Dresses</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>GIFT CARDS</h3>
          <ul>
            <li><a href="">Shoes</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Handbags</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>EXPRESS CREDIT CARD</h3>
          <ul>
            <li><a href="">#EXPRESSYOU</a></li>
            <li><a href="">Labels We Love</a></li>
            <li><a href="">Style Trial Rental</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/m7.webp" alt="">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->
  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst8" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont8">
      <div class="row">
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">FEATURED LABELS FOR HER</h3>
          <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Express x You: RSVP Edit</a></li>
            <li><a href="">Rachel Zoe's Holiday Picks</a></li>
            <li><a href="">Gifts for Her</a></li>
            <li><a href="">Holiday Outfits</a></li>
            <li><a href="">Sparkle & Shine</a></li>
            <li><a href="">FlexX Jeans</a></li>
            <li><a href="">Soft Sets</a></li>
            <li><a href="">Cozy Shop</a></li>
            <li><a href="">Pajamas</a></li>
            <li><a href="">Vacation Shop</a></li>
          </ul>
          <h3>FEATURED LABELS FOR HIM</h3>
          <ul>
            <li><a href="">Body Contour</a></li>
            <li><a href="">Essential Tops</a></li>
            <li><a href="">Style Staples</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>FOR WOMEN</h3>
          <ul>
            <li><a href="">Tops</a></li>
            <li><a href="">Sweaters</a></li>
            <li><a href="">Dresses</a></li>
            <li><a href="">Jumpsuits & Rompers</a></li>
            <li><a href="">Matching Sets</a></li>
            <li><a href="">Jackets & Coats</a></li>
            <li><a href="">Jeans</a></li>
            <li><a href="">Pants</a></li>
            <li><a href="">Curvy Bottoms</a></li>
            <li><a href="">Leggings</a></li>
            <li><a href="">Skirts</a></li>
            <li><a href="">Suits</a></li>
            <li><a href="">Sleep Sets</a></li>
            <li><a href="">Petites</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>FOR MEN</h3>
          <ul>
            <li><a href="">Shoes</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Handbags</a></li>
            <li><a href="">Winter Accessories</a></li>
            <li><a href="">Belts</a></li>
            <li><a href="">Hair Accessories</a></li>
            <li><a href="">Tights & Socks</a></li>

            <li><a href="">Fragrance</a></li>
            <li><a href="">Beauty</a></li>
            <li><a href="">Home & Tech</a></li>
            <li><a href="">All Accessories</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>LABELS WE LOVE</h3>
          <ul>
            <li><a href="">Style Trial Rental</a></li>
            <li><a href="">Become A Style Editor</a></li>
            <li><a href="">Dream Big Project</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/m8.webp" alt="">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->
  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst9" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont9">
      <div class="row">
        <div class="col-md-3 offset-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">WOMEN'S OUTLET</h3>
          <ul>
            <li><a href="">All Clothing
              </a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>MEN'S OUTLET</h3>
          <ul>
            <li><a href="">All Clothing
              </a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/m9.webp" alt="">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->
  <!--=========================
  Menu1
===========================---->
  <section id="footer" class="menufirst1" style="display: none;">
    <div class="container-fluid footer-container" id="menu-cont">
      <div class="row">
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade1">
          <h3 class="footfade11">NEW & NOW</h3>
          <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Express x You: RSVP Edit</a></li>
            <li><a href="">Rachel Zoe's Holiday Picks</a></li>
            <li><a href="">Gifts for Her</a></li>
            <li><a href="">Holiday Outfits</a></li>
            <li><a href="">Sparkle & Shine</a></li>
            <li><a href="">FlexX Jeans</a></li>
            <li><a href="">Soft Sets</a></li>
            <li><a href="">Cozy Shop</a></li>
            <li><a href="">Pajamas</a></li>
            <li><a href="">Vacation Shop</a></li>
          </ul>
          <h3>EXPRESS ESSENTIALS</h3>
          <ul>
            <li><a href="">Body Contour</a></li>
            <li><a href="">Essential Tops</a></li>
            <li><a href="">Style Staples</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>CLOTHING</h3>
          <ul>
            <li><a href="">Tops</a></li>
            <li><a href="">Sweaters</a></li>
            <li><a href="">Dresses</a></li>
            <li><a href="">Jumpsuits & Rompers</a></li>
            <li><a href="">Matching Sets</a></li>
            <li><a href="">Jackets & Coats</a></li>
            <li><a href="">Jeans</a></li>
            <li><a href="">Pants</a></li>
            <li><a href="">Curvy Bottoms</a></li>
            <li><a href="">Leggings</a></li>
            <li><a href="">Skirts</a></li>
            <li><a href="">Suits</a></li>
            <li><a href="">Sleep Sets</a></li>
            <li><a href="">Petites</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>ACCESSORIES & SHOES</h3>
          <ul>
            <li><a href="">Shoes</a></li>
            <li><a href="">Jewelry</a></li>
            <li><a href="">Handbags</a></li>
            <li><a href="">Winter Accessories</a></li>
            <li><a href="">Belts</a></li>
            <li><a href="">Hair Accessories</a></li>
            <li><a href="">Tights & Socks</a></li>

            <li><a href="">Fragrance</a></li>
            <li><a href="">Beauty</a></li>
            <li><a href="">Home & Tech</a></li>
            <li><a href="">All Accessories</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-footer-2 wow fadeInDown footfade">
          <h3>FEATURED</h3>
          <ul>
            <li><a href="">#EXPRESSYOU</a></li>
            <li><a href="">Labels We Love</a></li>
            <li><a href="">Style Trial Rental</a></li>
            <li><a href="">Become A Style Editor</a></li>
            <li><a href="">Dream Big Project</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-footer-2 wow fadeInDown footfade" id="menu-foot">
          <img src="./img/menuimg1.webp" alt="">
          <a class="shop" href="">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--=========================
  Menu1
===========================---->

  <div id="navmenu2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <a id="seeall" href="">SEE ALL OFFERS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="navmenu3">
    <div class="row">
      <div class="col-md-12">
        <div class="top-nav">
          <div class="top-left">
            <img src="./img/img31.PNG" alt="">&nbsp;&nbsp;<b>LAST-MINUTE GIFTS?</b> <span>Buy online and pickup your order in store before Dec. 25 and get</span> <b>$10 Express Cash</b> when you spend $50+
          </div>
          <div class="top-right">
            <p>*Select Locations. Inside members only.</p>
            <a href="">FIND A STORE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sec6top">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h5>TONIGHT ONLY! 6 P.M — MIDNIGHT</h5>
          <h2>
            60% Off Sweaters, Pajamas & More
          </h2>
        </div>
        <div class="col-md-3" style="text-align: center; padding-top: 30px">
          <label for="">
            Online only.</label><a href="" class="ex"> Exclusions & Details</a>
          <div class="text-align-left">
            <a href="">WOMEN</a>&nbsp;&nbsp;
            <a href="">MEN</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- video section start -->

  <section id="video_sec">
    <video autoplay loop muted id="myVideo" class="w-100">
      <source src="./img/vid.mp4" type="video/mp4">

      Your browser does not support the video tag.

    </video>
    <div class="vid-layer"><img src="./img/vidimg.PNG" alt=""></div>
    </div>
  </section>

  <!-- video section end -->

  <div id="sec5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h2 style="color: red;"><b>Plus, 100s of Style Steals</h2>
            <h5>Select styles. Online & in stores. Exclusions & Details</h5>
            <a href="">WOMEN</a>&nbsp;&nbsp;
            <a href="">MEN</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row bg-row">
        <div class="col-xs-12 col-md-4">
          <div class="bg-1">
            <div class="text-center" id="bg-cent">

              <a href="">SHOP NOW</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-8">
          <div class="row">
            <div class="col-xs 12 col-md-4">
              <div class="bg-2">
                <div class="text-cente" id="bg-cent">
                  <h2>$149</h2>
                  <h5>SUITS</h5>
                  <a href="">SHOP NOW</a>
                </div>
              </div>
            </div>
            <div class="col-xs 12 col-md-4">
              <div class="bg-3">
                <div class="text-center" id="bg-cent">
                  <h2>$179</h2>
                  <h5>SUITS</h5>
                  <a href="">SHOP NOW</a>
                </div>
              </div>
            </div>
            <div class="col-xs 12 col-md-4">
              <div class="bg-4">
                <div class="text-center" id="bg-cent">
                  <h2>$139</h2>
                  <h5>SUITS</h5>
                  <a href="">SHOP NOW</a>
                </div>

              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 30px;">
            <div class="col-xs 12 col-md-4">
              <div class="bg-2 bg-22">
                <div class="text-center" id="bg-cent">
                  <h2>$189</h2>
                  <h5>SUITS</h5>
                  <a href="">SHOP NOW</a>
                </div>

              </div>
            </div>
            <div class="col-xs 12 col-md-4">
              <div class="bg-3 bg-33">
                <div class="text-center" id="bg-cent">
                  <h2>$119</h2>
                  <h5>SUITS</h5>
                  <a href="">SHOP NOW</a>
                </div>

              </div>
            </div>
            <div class="col-xs 12 col-md-4">
              <div class="bg-4 bg-44">
                <div class="text-center" id="bg-cent">
                  <h2>$129</h2>
                  <h5>SUITS</h5>
                  <a href="">SHOP NOW</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row bg-row">
        <div class="col-xs 12 col-md-8">
          <div class="row">
            <div class="col-xs 12 col-md-4">
              <div class="bg-2 bg-222">
                <div class="text-center" id="bg-cent">
                  <h2>$129</h2>
                  <h5>WEAR</h5>
                  <a href="">SHOP NOW</a>
                </div>
              </div>
            </div>
            <div class="col-xs 12 col-md-4">
              <div class="bg-3  bg-333">
                <div class="text-center" id="bg-cent">
                  <h2>$145</h2>
                  <h5>SLEEP</h5>
                  <a href="">SHOP NOW</a>
                </div>
              </div>
            </div>
            <div class="col-xs 12 col-md-4">
              <div class="bg-4  bg-444">
                <div class="text-center" id="bg-cent">
                  <h2>$150</h2>
                  <h5>FLEECE</h5>
                  <a href="">SHOP NOW</a>
                </div>

              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 30px;">
            <div class="col-xs 12 col-md-4">
              <div class="bg-2  bg-2222">
                <div class="text-center" id="bg-cent">
                  <h2>$291</h2>
                  <h5>VELOUR</h5>
                  <a href="">SHOP NOW</a>
                </div>

              </div>
            </div>
            <div class="col-xs 12 col-md-4">
              <div class="bg-3  bg-3333">
                <div class="text-center" id="bg-cent">
                  <h2>$105</h2>
                  <h5>WINTER</h5>
                  <a href="">SHOP NOW</a>
                </div>

              </div>
            </div>
            <div class="col-xs 12 col-md-4">
              <div class="bg-4  bg-4444">
                <div class="text-center" id="bg-cent">
                  <h2>$202</h2>
                  <h5>GOLD</h5>
                  <a href="">SHOP NOW</a>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-1  bg-111">
            <div class="text-center" id="bg-cent">

              <a href="">SHOP NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sec6">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h5>EXTRA 50% OFF FOR</h5>
          <h2>
            Up to 70% Off Clearance
          </h2>
        </div>
        <div class="col-md-3">
          <label for="">
            Online & in stores.</label><a href="" class="ex"> Exclusions & Details</a>
          <div class="text-align-left">
            <a href="">WOMEN</a>&nbsp;&nbsp;
            <a href="">MEN</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sec7">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h2><b>UNWRAP SOMETHING AWESOME</b>&nbsp;<img src="./img/img30.PNG" alt=""></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row bg-row">
      <div class="col-md-6">
        <div class="bg-1">
          <div class="text-center">
            <h2>Gift Guide</h2>
            <a href="" class="g1">GIFTS FOR HER</a>
            <a href="" class="g2">GIFTS FOR HIM</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-2">
          <div class="text-center">
            <h2>Gift Cards</h2>
            <a href="">SHOP NOW</a>
          </div>
        </div>
      </div>
    </div>
    <div id="sec8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h2><b>HOW WILL YOU HOLIDAY?</b></h2>
            </div>
          </div>
          <div class="col-md-3" style="border-right: 2px solid;">
            <div class="sec1">
              <img src="./img/img26.PNG" alt="">
              <h3>Pay Over Time</h3>
              <h5> With 4 interest-free payments</h5>
              <a href="">LEARN MORE</a>
            </div>
          </div>
          <div class="col-md-3" style="border-right: 2px solid;">
            <div class="sec2">
              <img src="./img/img27.PNG" alt="">
              <h3>Express Credit Card</h3>
              <h5>Open and use for exclusive perks</h5>
              <a href="">APPLY NOW</a>
            </div>
          </div>
          <div class="col-md-3" style="border-right: 2px solid;">
            <div class="sec3">
              <img src="./img/img28.PNG" alt="">
              <h3>Buy Online, Pick Up in Store</h3>
              <h5>Curbside available at select locations.</h5>
              <a href="">LEARN MORE</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sec4">
              <img src="./img/img29.PNG" alt="">
              <h3>Free Style Advice</h3>
              <h5>Connect with a digital stylist</h5>
              <a href="">CHAT NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div id="sec9">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h2><b>#EXPRESS</b>YOU <b>THIS HOLIDAY</b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--=========================
  start of team
===========================---->
    <section id="team" class="teams">
      <div class="container-fluid team-container">
        <div class="container">
          <div class="row owl-carousel owl-theme">
            <div class="wow fadeInUp">
              <div class="team-img-1">
                <img class="img-responsive" src="img/team/team-1.webp">
                <div class="overlay">
                  <div class="fs">
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>
                  </div>
                </div>
              </div>

            </div>
            <div class=" wow fadeInUp">
              <div class="team-img-2">
                <img class="img-responsive time-img" src="img/team/team-2.jpg">
                <div class="overlay">
                  <div class="icons">
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>
                  </div>
                </div>
              </div>

            </div>
            <div class=" wow fadeInUp ">
              <div class="team-img-3">
                <img class="img-responsive" src="img/team/team-3.jpg">
                <div class="overlay">
                  <div class="icons">
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>
                  </div>
                </div>
              </div>

            </div>
            <div class=" ">
              <div class="team-img-4">
                <img class="img-responsive" src="img/team/team-4.jpg">
                <div class="overlay">
                  <div class="icons">
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>




    <!--=========================
  end of team
===========================---->

    <div id="sec10">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <a href="">SHOP MORE LOOKS</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!--=========================
  start of team
===========================---->
    <section id="team" class="team2">
      <div class="container-fluid team-container">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-2 wow fadeInLeft">
              <div class="team-img-1" id="team111">
                <h2>
                  Labels<br>We<br>Love</h2>
                <a href="" class="team-shop">SEE MORE</a>
              </div>

            </div>
            <div class="col-sm-4 col-md-2 wow fadeInUp">
              <div class="team-img-2" id="team112">
                <img class="img-responsive time-img" src="img/img21.webp">
                <a href="" class="alala">ALALA</a>
              </div>

            </div>
            <div class="col-sm-4 col-md-2 wow fadeInUp">
              <div class="team-img-3" id="team113">
                <img class="img-responsive" src="img/img22.webp">
                <a href="" class="alala">STATE OF MATTER</a>
              </div>

            </div>
            <div class="col-sm-4 col-md-2 wow fadeInRight">
              <div class="team-img-4" id="team114">
                <img class="img-responsive" src="img/img23.webp">
                <a href="" class="alala">CRESCENT</a>
              </div>

            </div>
            <div class="col-sm-4 col-md-2 wow fadeInRight">
              <div class="team-img-4" id="team115">
                <img class="img-responsive" src="img/img24.webp">
                <a href="" class="alala">VINCERO</a>
              </div>

            </div>
            <div class="col-sm-4 col-md-2 wow fadeInRight">
              <div class="team-img-4">
                <img class="img-responsive" src="img/img25.jpg">

                <a href="" class="alala">UPWEST</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


    <!--=========================
   end of team
 ===========================---->

    <hr style="margin-top: 120px;">
    <!--=========================
  Start of Footer
===========================---->
    <section id="footer">
      <div class="container-fluid footer-container">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-footer-1">
              <a href=""><i class="fa fa-instagram"></i></a>&nbsp;
              <a href=""><i class="fa fa-snapchat"></i></a>&nbsp;
              <a href=""><i class="fa fa-pinterest"></i></a>&nbsp;
              <a href=""><i class="fa fa-facebook"></i></a>&nbsp;
              <a href=""><i class="fa fa-twitter"></i></a>&nbsp;
              <a href=""><i class="fa fa-youtube"></i></a>&nbsp;
              <a href=""><i class="fa fa-spotify"></i></a>&nbsp;
              <ul>
                <li><a href="">Sign Up For Mobile Alerts</a></li>
                <li><a href="">Sign up for email</a></li>
              </ul>
              <img src="./img/app-store.png" alt="">
              <img src="./img/play-store.png" alt="">

            </div>
            <div class="col-md-2 col-footer-2">
              <h3>Store Locator</h3>
              <ul>
                <li><a href="">Find a store</a></li>
                <li><a href="">Express Factory Outlet</a></li>
              </ul>
              <h3>Express Insider</h3>
              <ul>
                <li><a href="">Express Insider Rewards</a></li>
                <li><a href="">Frequently Asked Questions</a></li>
                <li><a href="">Terms and Conditions</a></li>
              </ul>
              <h3>Express Credit Card</h3>
              <ul>
                <li><a href="">Benefits</a></li>
                <li><a href="">Apply</a></li>
                <li><a href="">Pay/View Account</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-footer-2">
              <h3>Gift Cards</h3>
              <ul>
                <li><a href="">Buy Gift Cards</a></li>
                <li><a href="">Check Your Balance</a></li>
              </ul>
              <h3>About Express</h3>
              <ul>
                <li><a href="">Overview</a></li>
                <li><a href="">Investor Relations</a></li>
                <li><a href="">ESG</a></li>
                <li><a href="">Careers</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-footer-2">
              <h3>Popular Pages</h3>
              <ul>
                <li><a href="">Women's Clothing</a></li>
                <li><a href="">Men's Clothing</a></li>
                <li><a href="">Men's & Women's Jeans</a></li>
                <li><a href="">Women's Outerwear</a></li>
                <li><a href="">Women's Tops</a></li>
                <li><a href="">Women's Sweaters</a></li>
                <li><a href="">Women's Dresses</a></li>
                <li><a href="">Men's Outerwear</a></li>
                <li><a href="">Men's Shirts</a></li>
                <li><a href="">Men's Sweaters</a></li>
                <li><a href="">Men's Suits</a></li>
                <li><a href="">Dream Big Project</a></li>
                <li><a href="">Express Events</a></li>
                <li><a href="">Women's Style Trial Rental</a></li>
                <li><a href="">Men's Style Trial Rental</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-footer-2">
              <h3>Customer ServiceInfo</h3>
              <ul>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">Express Coupons</a></li>
                <li><a href="">Returns Policy</a></li>
                <li><a href="">Student Discount</a></li>
                <li><a href="">Feedback</a></li>
                <li><a href="">Express Marketplace FAQ</a></li>
                <li><a href="">Klarna Payments</a></li>
                <li><a href="">Google Ad Price Policy</a></li>

              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid last-footer">
        <div class="container">
          <a href="">Terms & Conditions</a>
          <a href="">| &nbsp;&nbsp;Accessibility</a>
          <a href="">| &nbsp;&nbsp;About Ads</a>
          <a href="">| &nbsp;&nbsp;Privacy Policy</a>
          <a href="">| &nbsp;&nbsp;Do Not Sell My Personal Information</a>
          <a href="">| &nbsp;&nbsp;Site Map</a>
          <a href="">| &nbsp;&nbsp;© 2021 Express. All rights reserved.</a>
        </div>
      </div>
    </section>
    <a class="back-to-top" href="#"><i class="fa fa-comments"></i></a>
    <!--=========================
       end of footer
===========================---->

    <div class="fixed-img"><img src="./img/fed.PNG" alt=""></div>

    <script>
      var sideNav = document.getElementById("sideNav");
      var menuBtn = document.getElementById("menuBtn");
      var menuClose = document.getElementById("menuClose");

      sideNav.style.left = "-290px";
      menuBtn.onclick = function() {
        if (sideNav.style.left == "-290px") {
          sideNav.style.left = "0";
          menuBtn.style.display = "none";
          menuClose.style.display = "initial";
        } else {
          sideNav.style.left = "-290px";
          menuBtn.style.display = "initial";
          menuClose.style.display = "none";
        }
      }
      menuClose.onclick = function() {
        if (sideNav.style.left == "-290px") {
          sideNav.style.left = "0";
          menuBtn.style.display = "none";
          menuClose.style.display = "initial";
        } else {
          sideNav.style.left = "-290px";
          menuBtn.style.display = "initial";
          menuClose.style.display = "none";
        }
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>