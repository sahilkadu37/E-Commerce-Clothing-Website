<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <!--=============== FLATICON ===============-->
 <link 
 rel='stylesheet' 
 href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'
 />

 <!--=============== SWIPER CSS ===============-->
 <link
 rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
   />

 <!--=============== CSS ===============-->
 <link rel="stylesheet" href="styles.css" />

    <title>Ecommerce Website</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header">
      <div class="header__top">
        <div class="header__container container">
          <div class="header__container">
            <span>(+01) - 2345 - 6789</span>

            <span>our location</span>
          </div>

          <p class="header__alert-news">
            Super Value Deals - Save more with coupons
          </p>

          <a href="Login-register.html" class="header__top">
            Log In / Sign up
          </a>
        </div>
      </div>

      <nav class="nav container">
        <a href="index.html" class="nav__logo">
          <img src="C:\Users\hp\Downloads\images.jpg" alt="Log" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.html" class="nav__link ">Home</a>
            </li>

            <li class="nav__item">
              <a href="Shop.html" class="nav__link">Shop</a>
            </li>

            <li class="nav__item">
              <a href="accounts.html" class="nav__link">My Accounts</a>
            </li>

            <li class="nav__item">
              <a href="Compare.html" class="nav__link">Compare</a>
            </li>

            <li class="nav__item">
              <a href="Login-register,html" class="nav__link">Login</a>
            </li>
          </ul>

        <div class="header__search">
          <input 
          type="text" 
          placeholder="Search for items..." 
          class="form__input"
          />

          <button class="Search__btn">

          </button>
         </div>
        </div>

        <div class="header__user-actions">
          <a href="wishlist.html" class="header__action-btn">
            <img src="C:\Users\hp\Downloads\icon-heart.svg" alt="logo"/>
            <span class="count">3</span>
          </a>

          <a href="cart.html" class="header__action-btn">
            <img src="C:\Users\hp\Downloads\icon-cart.svg" alt="logo"/>
            <span class="count">3</span>
          </a>
        </div>
      </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.html" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Shop</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">cart</span></li>

        </ul>
      </section>

      <!--=============== WISHLIST ===============-->
      <section class="wishlist"></section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section ">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img
            src="C:\Users\hp\Downloads\icon-email.svg" 
             alt="logo" 
             class="newsletter__icon"
             />
             sign up to newsletter
          </h3>

          <p class="newsletter__description">... and receive $25 coupon for 
            first shopping..
          </p>
          
          <form action="" class="newsletter__form">
            <input
             type="text" 
             placeholder="Enter your email"
             class="newsletter__input"
             />
             <button type="sumbit" class="newletter__btn">Subscribe</button>
          </form>
        </div>
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer container">
      <div class="footer__container grid">
        <div class="footer__content">
          <a href="index.html" class="footer__logo">
            <img src="C:\Users\hp\Downloads\images.jpg" alt="image" class="footer__logo-img">
          </a>

          <h4 class="footer__subtitle">Contact</h4>

          <p class="footer__description">
            <span>Address:</span> 241 Lavasa pune maharashtra
          </p>

          <p class="footer__description">
            <span>Phone:</span> 77378241xx
          </p>

          <p class="footer__description">
            <span>Hours:</span> 10.00 - 18.00, mon - sat
            </p>
            <div class="footer__social">
              <h4 class="footer__subtitle">Follow me</h4>

              <div class="footer__social-links flex">
                <a href="">
                  <img 
                  src="C:\Users\hp\Downloads\icon-facebook.svg" 
                  alt="logo" class="footer__social-icon"
                  />
                </a>

                <a href="">
                  <img 
                  src="C:\Users\hp\Downloads\icon-twitter.svg"
                  alt="logo" class="footer__social-icon"
                  />
                </a>


                <a href="">
                  <img 
                  src="C:\Users\hp\Downloads\icon-instagram.svg"
                  alt="logo" class="footer__social-icon"
                  />
                </a>

                

                <a href="">
                  <img 
                  src="C:\Users\hp\Downloads\icon-pinterest.svg"
                  alt="logo" class="footer__social-icon"
                  />
                </a>


                <a href="">
                  <img 
                  src="C:\Users\hp\Downloads\icon-youtube.svg"
                  alt="logo" class="footer__social-icon"
                  />
                </a>
              </div>
            </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Address</h3>

          <ul class="footer__links">
            <li><a href="" class="footer__link">About us</a></li>
            <li><a href="" class="footer__link">Delivery Information</a></li>
            <li><a href="" class="footer__link">privacy Policy</a></li>
            <li><a href="" class="footer__link">Terms & conditions</a></li>
            <li><a href="" class="footer__link">Contact us</a></li>
            <li><a href="" class="footer__link">support center</a></li>
          </ul>
        </div>

        
        <div class="footer__content">
          <h3 class="footer__title">My Account</h3>

          <ul class="footer__links">
            <li><a href="" class="footer__link">Sign In</a></li>
            <li><a href="" class="footer__link">View Cart</a></li>
            <li><a href="" class="footer__link">My Wishlist</a></li>
            <li><a href="" class="footer__link">Track My Order</a></li>
            <li><a href="" class="footer__link">Help</a></li>
            <li><a href="" class="footer__link">order</a></li>
          </ul>
        </div>
          <h3 class="footer__title">Secured Payment Gateways</h3>

          <img
           src="C:\Users\hp\Downloads\payment-method.png"    
           alt="image" 
          class="payment__img">
        </div>

        <div class="footer__bottom">
          <p class="copyright">copy; 2024 Evara. All right reserved</p>
          <span class="designer">Designed by Sahil kadu</span>
        </div>
        </div>
      </div>
    </footer>

    <!--=============== SWIPER JS ===============-->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!--=============== MAIN JS ===============-->
 <script src="C:\Users\hp\Downloads\main.js"></script>
  </body>
</html>
