<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products - Express Store</title>

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
    .suitimg {
      background-color: aqua;
      width: 100%;
      height: auto;
    }

    h2 {
      margin: 0;
    }

    .accordion h2 button {
      font-size: 18px;
      color: #000;
    }

    .accordion-item {
      background-color: #fff;
      border: none;
      border-bottom: 2px solid rgba(0, 0, 0, .125) !important;
    }

    .accordion-button:focus {
      z-index: 3;
      outline: 0;
      box-shadow: 0 0 0 0 rgb(13 110 253 / 25%);
    }

    .accordion-button:not(.collapsed) {
      color: #000;
      background-color: transparent;
      box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
    }

    .accordion a {
      text-decoration: none;
      margin-bottom: 20px;
      color: #000;
    }

    .accordion a:hover {
      color: #b8b6b6;
    }

    .accordion-body {
      padding: 10px 25px;
    }
  </style>

</head>

<body>
  <!-- ======================
   Search
  ======================= -->
  <div class="search">
    <div class="row">
      <div class="">
        <form action="">
          <input type="search" class="" name="search1" autofocus id=""><button type="submit">Search</button>
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
            <a href="productlist.php"><b>MEN</b></a>
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
        <a href="index.html"><img class="exp-logo" src="./img/express-logo.svg" alt=""></a>
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

  <nav id="filterS">
    <div class="col-sm-3">

      <div class="mt-3 d-flex justify-content-between">
        <h4 style="padding: 0px 13px;font-weight: bold;">Browse By:</h4>
        <div class="mt-3">
          <i class="fa fa-filter d-xs-block d-sm-none" id="MenuBtn2"></i>
        </div>

      </div>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Category
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="mt-2">
                <a href="">All Suits and Suit Separates</a>
              </div>
              <div class="mt-2">
                <a href="">Full Suits</a>
              </div>
              <div class="mt-2">
                <a href="">Full Suits</a>
              </div>
              <div class="mt-2">
                <a href="">Blazers and Vests</a>
              </div>
              <div class="mt-2">
                <a href="">Dress Pants</a>
              </div>
              <div class="mt-2">
                <a href="">Slim Suit Separates</a>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <div class="mt-0">
            <h4 style="padding: 0px 13px;font-weight: bold;">Filter By:</h4>
          </div>
          <hr style="margin: 0;">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Size
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="mt-2">
                <a href="">32</a>
              </div>
              <div class="mt-2">
                <a href="">34</a>
              </div>
              <div class="mt-2">
                <a href="">36</a>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Color
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="mt-2">
                <a href="">Black</a>
              </div>
              <div class="mt-2">
                <a href="">Blue</a>
              </div>
              <div class="mt-2">
                <a href="">Green</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
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
            <a class="menuitem4" class="menuitem4" href="./productlist.php">NEW</a>
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
          <img src="./img/m4.webp" alt="">
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

  <!-- ============ Product List ============ -->
  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-3 d-none d-sm-block">

        <div class="mt-3 ">
          <h4 style="padding: 0px 13px;font-weight: bold;">Browse By:</h4>

        </div>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Category
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="mt-2">
                  <a href="">All Suits and Suit Separates</a>
                </div>
                <div class="mt-2">
                  <a href="">Full Suits</a>
                </div>
                <div class="mt-2">
                  <a href="">Full Suits</a>
                </div>
                <div class="mt-2">
                  <a href="">Blazers and Vests</a>
                </div>
                <div class="mt-2">
                  <a href="">Dress Pants</a>
                </div>
                <div class="mt-2">
                  <a href="">Slim Suit Separates</a>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <div class="mt-0">
              <h4 style="padding: 0px 13px;font-weight: bold;">Filter By:</h4>
            </div>
            <hr style="margin: 0;">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Size
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="mt-2">
                  <a href="">32</a>
                </div>
                <div class="mt-2">
                  <a href="">34</a>
                </div>
                <div class="mt-2">
                  <a href="">36</a>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Color
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="mt-2">
                  <a href="">Black</a>
                </div>
                <div class="mt-2">
                  <a href="">Blue</a>
                </div>
                <div class="mt-2">
                  <a href="">Green</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="row">
          <div class="col-md-12">
            <div class="mt-1 d-flex justify-content-between">
              <h1>Men's Full Suits</h1>
              <div class="mt-5">
                <i class="fa fa-filter d-xs-block d-sm-none" id="MenuBtn1"></i>
              </div>
            </div>
          </div>
          <?php
          $conn = mysqli_connect("localhost", "root", "", "express_store");
          $res = mysqli_query($conn, "SELECT * FROM product");
          while ($row = mysqli_fetch_assoc($res)) {
            echo '<div class="col-sm-4 mt-5">
                   <img src="' . $row['image'] . '" class="suitimg image-fluid">
                   <div class="mt-3">
                     <p class="prod-n" style="font-weight: bold;margin: 0;">New</p>
                     <p class="prod-name"><a href="productdesc.php?id=' . $row['id'] . '" style="color: #000;text-decoration: underline;">' . $row['name'] . '</a></p>
                   </div>
                   <div class="mt-1"></div>
                   <p class="prod-price">$' . $row['price'] . '</p>
                </div>';
          }
          ?>
          <!-- <div class="col-sm-4 mt-5">
                    <img src="./img/img2.webp" class="suitimg image-fluid">
                    <div class="mt-3">
                      <p class="prod-n" style="font-weight: bold;margin: 0;">New</p>
                      <p class="prod-name"><a href="productdesc.html" style="color: #000;text-decoration: underline;">Slim Natural Herringbone Linen Suit</a></p>
                    </div>
                    <div class="mt-1"></div>
                    <p class="prod-price">$443</p>
                 </div>
                <div class="col-sm-4 mt-5">
                    <img src="./img/img4.jpg" class="suitimg image-fluid">
                    <div class="mt-3">
                      <p class="prod-n" style="font-weight: bold;margin: 0;">New</p>
                      <p class="prod-name"><a href="productdesc.html" style="color: #000;text-decoration: underline;">Slim Natural Herringbone Linen Suit</a></p>
                    </div>
                    <div class="mt-1"></div>
                    <p class="prod-price">$404</p>
                 </div>
                <div class="col-sm-4 mt-5">
                    <img src="./img/img6.webp" class="suitimg image-fluid">
                    <div class="mt-3">
                      <p class="prod-n" style="font-weight: bold;margin: 0;">New</p>
                      <p class="prod-name"><a href="productdesc.html" style="color: #000;text-decoration: underline;">Slim Natural Herringbone Linen Suit</a></p>
                    </div>
                    <div class="mt-1"></div>
                    <p class="prod-price">$334</p>
                 </div>
                <div class="col-sm-4 mt-5">
                    <img src="./img/img7.webp" class="suitimg image-fluid">
                    <div class="mt-3">
                      <p class="prod-n" style="font-weight: bold;margin: 0;">New</p>
                      <p class="prod-name"><a href="productdesc.html" style="color: #000;text-decoration: underline;">Slim Natural Herringbone Linen Suit</a></p>
                    </div>
                    <div class="mt-1"></div>
                    <p class="prod-price">$550</p>
                 </div>
                <div class="col-sm-4 mt-5">
                    <img src="./img/img12.webp" class="suitimg image-fluid">
                    <div class="mt-3">
                      <p class="prod-n" style="font-weight: bold;margin: 0;">New</p>
                      <p class="prod-name"><a href="productdesc.html" style="color: #000;text-decoration: underline;">Slim Natural Herringbone Linen Suit</a></p>
                    </div>
                    <div class="mt-1"></div>
                    <p class="prod-price">$281</p>
                 </div>
                <div class="col-sm-4 mt-5">
                    <img src="./img/img8.jpg" class="suitimg image-fluid">
                    <div class="mt-3">
                      <p class="prod-n" style="font-weight: bold;margin: 0;">New</p>
                      <p class="prod-name"><a href="productdesc.html" style="color: #000;text-decoration: underline;">Slim Natural Herringbone Linen Suit</a></p>
                    </div>
                    <div class="mt-1"></div>
                    <p class="prod-price">$393</p>
                 </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- ======x====== Product List ======x====== -->


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
  <a class="back-to-top" href="#home"><i class="fa fa-comments"></i></a>
  <!--=========================
       end of footer
===========================---->

  <div class="fixed-img"><img src="./img/fed.PNG" alt=""></div>

  <script>
    var fil = document.getElementById("filterS");
    var filM = document.getElementById("MenuBtn1");
    var fil2 = document.getElementById("MenuBtn2");
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
    fil.style.right = "-290px";
    filM.onclick = function() {
      if (fil.style.right == "-290px") {
        fil.style.right = "0";
      } else {
        fil.style.right = "-290px";
      }
    }
    fil2.onclick = function() {
      if (fil.style.right == "-290px") {
        fil.style.right = "0";
      } else {
        fil.style.right = "-290px";
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