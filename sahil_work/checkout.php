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
    <header class="header"></header>

    <!--=============== MAIN ===============-->
    <main class="main">
   <!--=============== BREADCRUMB ===============-->
   <section class="breadcrumb">
    <ul class="breadcrumb__list flex container">
      <li><a href="index.html" class="breadcrumb__link">Home</a></li>
      <li><span class="breadcrumb__link">></span></li>
      <li><span class="breadcrumb__link">shop</span></li>
      <li><span class="breadcrumb__link">></span></li>
      <li><span class="breadcrumb__link">checkout</span></li>

    </ul>
  </section>

      <!--=============== CHECKOUT ===============-->
      <section class="checkout section--lg">
        <div class="checkout__container container grid">
          <div class="checkout__container container grid">
            <div class="checkout__group">
              <h3 class="section__title">Billing Details</h3>

              <form action="" class="form grid">
                <input type="text"  placeholder="Name" class="form__input">

                <input type="text"  placeholder="Address" class="form__input">

                <input type="text"  placeholder="City" class="form__input">

                <input type="text"  placeholder="Country" class="form__input">

                <input type="text"  placeholder="pine code" class="form__input">

                <input type="text"  placeholder="phone N" class="form__input">

                <input type="email"  placeholder="Email" class="form__input">

                <h3 class="checkout__title">Additional Information</h3>

                <textarea name="" placeholder="order note" id="" cols="30" 
                rows="10" class="form__btn textarea"></textarea>
                </form>
            </div>

            <div class="checkout__group">
              <h3 class="section__title">Cart Totals</h3>

              <table class="order__table">
                <tr>
                  <th>Products</th>
                  <th>Total</th>
                </tr>

                <tr>
                  <td>
                    <img
                    src="C:\Users\hp\Downloads\product-1-2.jpg"
                    alt="image"
                    class="order__img"
                    />
                  </td>

                  <td>
                    <h3 class="order__title"></h3>
                    <p class="table__quantity">x 2</p>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </section>

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
