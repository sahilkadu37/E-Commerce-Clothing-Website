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

          <a href="Login-register.php" class="header__top">
            Log In / Sign up
          </a>
        </div>
      </div>

      <nav class="nav container">
        <a href="index.php" class="nav__logo">
          <img src="images.jpg" alt="Log" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.php" class="nav__link active-link">Home</a>
            </li>

            <li class="nav__item">
              <a href="Shop.php" class="nav__link">Shop</a>
            </li>

            <li class="nav__item">
              <a href="accounts.php" class="nav__link">My Accounts</a>
            </li>

            <li class="nav__item">
              <a href="Compare.php" class="nav__link">Compare</a>
            </li>

            <li class="nav__item">
              <a href="Login-register.php" class="nav__link ">login-register</a>
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
          <a href="wishlist.php" class="header__action-btn">
            <img src="icon-heart.svg" alt="logo"/>
            <span class="count">3</span>
          </a>

          <a href="cart.php" class="header__action-btn">
            <img src="icon-cart.svg" alt="logo"/>
            <span class="count">3</span>
          </a>
        </div>
      </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== HOME ===============-->
      <section class="home section--lg">
        <div class="home__container container grid">
          <div class="home__content">
            <span class="home__subtitle">Hot promotions</span>
            <h1 class="home__title">
              Fashion Trending <span>Great Collection</span>
            </h1>
            <p class="home__description">
              Save more with coupons & upto 20% off
            </p>
            <a href="shop.php" class="btn">Shop Now</a>
          </div>

          <img src="home-img.png" alt="image" class="home__img"/>
        </div>
        </section>

      <!--=============== CATEGORIES ===============-->
      <section class="categories container section">
        <h3 class="section__title"><span>Popular</span>Categories</h3>

        <div class="categories__container swiper">
          <div class="swiper-wrapper">
            <a href="shop.php" class="category__item swiper-slide">
              <img src="category-1.jpg" alt="image" 
              class="category__img">
               <h3 class="category__title">T-Shirt</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="category-2.jpg" alt="image" 
              class="category__img">
               <h3 class="category__title">Bags</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="sandal.jpeg" alt="image" 
              class="category__img">
               <h3 class="category__title">Sandal</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="images (1).jpeg" alt="image" 
              class="category__img">
               <h3 class="category__title">mobile</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="category-5.jpg" alt="image" 
              class="category__img">
               <h3 class="category__title">shoes</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="category-6.jpg" alt="imge" 
              class="category__img">
               <h3 class="category__title">Pillowcase</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="images (2).jpeg" alt="image" 
              class="category__img">
               <h3 class="category__title">Jacket</h3>
            </a>

            <a href="shop.php" class="category__item swiper-slide">
              <img src="category-8.jpg" alt="image" 
              class="category__img">
               <h3 class="category__title">Hats</h3>
            </a>
          </div>

          <div class="swiper-button-next">
          <i class="fi fi-rs-angle-right"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="fi fi-rs-angle-left"></i>
          </div>
        </div>
       </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products section--lg container">
        <div class="tab__btns">
          <span class="tab__btn active-tab" data-traget="#featured"
          >Featured</span>
          <span class="tab__btn"  data-traget="#popular">Popular</span>
          <span class="tab__btn"  data-traget="#new-added"  >New added</span>
        </div>

        <div class="tab__items">
          <div class="tab__item active-tab" content id="Featured">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-1-1.jpg" alt="image" class="product__img default">

                    <img src="product-1-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$200.65</span>
                    <span class="old__price">$255.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-2-1.jpg" alt="image" class="product__img default">

                    <img src="product-2-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$300.65</span>
                    <span class="old__price">$350.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-3-1.jpg" alt="image" class="product__img default">
                    <img src="product-3-2.jpg" alt="image" class="product__img default">
                    
                  
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$239.65</span>
                    <span class="old__price">$250.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-4-1.jpg" alt="image" class="product__img default">

                    <img src="product-4-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$239.65</span>
                    <span class="old__price">$250.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-5-1.jpg" alt="image" class="product__img default">

                    <img src="product-5-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">-22%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$239.65</span>
                    <span class="old__price">$250.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-6-1.jpg"alt="image" class="product__img default">

                    <img src="product-6-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$239.65</span>
                    <span class="old__price">$250.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-7-1.jpg"alt="image" class="product__img default">

                    <img src="product-7-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$281.65</span>
                    <span class="old__price">$350.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-8-1.jpg"alt="image" class="product__img default">

                    <img src="t-shirt.jpeg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$211.65</span>
                    <span class="old__price">$259.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="tab__item active-tab" content id="Popular"></div>

            <div class="tab__item" content id="new-added">
            <div class="products__container grid">
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-9-1.jpg" alt="image" class="product__img default">

                    <img src="product-9-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$233.65</span>
                    <span class="old__price">$256.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-10-1.jpg" alt="image" class="product__img default">

                    <img src="product-10-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$239.65</span>
                    <span class="old__price">$255.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-11-1.jpg" class="product__img default">
                    <img src="product-11-2.jpg" alt="image" class="product__img default">
                    
                  
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$222.65</span>
                    <span class="old__price">$253.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-12-1.jpg" alt="image" class="product__img default">

                    <img src="product-12-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-pink">30%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$245.65</span>
                    <span class="old__price">$289.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-13-1.jpg" alt="image" class="product__img default">

                    <img src="product-13-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">-22%</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$290.65</span>
                    <span class="old__price">$340.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="download.jpeg" alt="image" class="product__img default">

                    <img src="images (4).jpeg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">Hot</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$245.65</span>
                    <span class="old__price">$300.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="images (2).jpeg"alt="image" class="product__img default">

                    <img src="product-7-2.jpg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>

                  <div class="product__badge light-green">24% off</div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$344.65</span>
                    <span class="old__price">$400.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>

              <div class="product__item">
                <div class="product__banner">
                  <a href="details.php" class="product__images">
                    <img src="product-8-1.jpg"alt="image" class="product__img default">

                    <img src="t-shirt.jpeg" alt="image" class="product__img hover">
                  </a>

                  <div class="product__actions">
                    <a href="#" class="action__btn" aria-label="Quick View">
                      <i class="fi fi-rs-eye"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Add to wishlist">
                      <i class="fi fi-rs-heart"></i>
                    </a>

                    <a href="#" class="action__btn" aria-label="Compare">
                      <i class="fi fi-rs-shuffle"></i>
                    </a>
                  </div>
                </div>

                <div class="product__content">
                  <span class="product__category">Clothing</span>
                  <a href="details.php">
                    <h3 class="product__title">Colorful pattern shirts</h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                     <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$239.65</span>
                    <span class="old__price">$250.65</span>
                  </div>

                  <a 
                  href="#" class="action__btn cart__btn"
                   aria-label="Add to cart">

                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== DEALS ===============-->
      <section class="deals section">
        <div class="deals__container container grid">
          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Deal of Day</h3>
              <span class="deals__category">Limited quantities.</span>
            </div>

            <h4 class="deals__title">  Collection New Morden Design</h4>

            <div class="deals__price flex">
              <span class="new__price">$139.40</span>
              <span class="old__price">$170.90</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Hurry up! offer end In:</p>

              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="units">Days</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="units">Hours</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="units">Mins</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">24</p>
                  <span class="units">sec</span>
                </div>
              </div>
            </div>

            <div class="deals__btn">
              <a href="details.php" class="btn btn--md">Shop now</a>
            </div>
          </div>

          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Women Clothing</h3>
              <span class="deals__category">Limited quantities.</span>
            </div>

            <h4 class="deals__title">Try something new on vacation </h4>

            <div class="deals__price flex">
              <span class="new__price">$139.40</span>
              <span class="old__price">$170.90</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Hurry up! offer end In:</p>

              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="units">Days</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="units">Hours</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="units">Mins</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">24</p>
                  <span class="units">sec</span>
                </div>
              </div>
            </div>

            <div class="deals__btn">
              <a href="details.php" class="btn btn--md">Shop now</a>
            </div>
          </div>
        </div>
      </section>

      <!--=============== NEW ARRIVALS ===============-->
      <section class="new__arrivals container section">
        <h3 class="section__title"><span>New</span>Arrivals</h3>

        <div class="new__container swiper">
          <div class="swiper-wrapper">
            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="product-9-1.jpg" alt="image" class="product__img default">

                  <img src="product-9-2.jpg" alt="image" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.php">
                  <h3 class="product__title">Colorful pattern shirts</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">$239.65</span>
                  <span class="old__price">$250.65</span>
                </div>

                <a 
                href="#" class="action__btn cart__btn"
                 aria-label="Add to cart">

                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item  swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="product-10-1.jpg" alt="image" class="product__img default">

                  <img src="product-10-2.jpg" alt="image" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.php">
                  <h3 class="product__title">Colorful pattern shirts</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">$239.65</span>
                  <span class="old__price">$250.65</span>
                </div>

                <a 
                href="#" class="action__btn cart__btn"
                 aria-label="Add to cart">

                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>
            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="product-11-1.jpg" class="product__img default">
                  <img src="product-11-2.jpg" alt="image" class="product__img default">
                  
                
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.php">
                  <h3 class="product__title">Colorful pattern shirts</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">$239.65</span>
                  <span class="old__price">$250.65</span>
                </div>

                <a 
                href="#" class="action__btn cart__btn"
                 aria-label="Add to cart">

                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="product-12-1.jpg" alt="image" class="product__img default">

                  <img src="product-12-2.jpg" alt="image" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-pink">30%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.php">
                  <h3 class="product__title">Colorful pattern shirts</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">$239.65</span>
                  <span class="old__price">$250.65</span>
                </div>

                <a 
                href="#" class="action__btn cart__btn"
                 aria-label="Add to cart">

                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="product-13-1.jpg" alt="image" class="product__img default">

                  <img src="product-13-2.jpg" alt="image" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">-22%</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.php">
                  <h3 class="product__title">Colorful pattern shirts</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">$239.65</span>
                  <span class="old__price">$250.65</span>
                </div>

                <a 
                href="#" class="action__btn cart__btn"
                 aria-label="Add to cart">

                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="download.jpeg" alt="image" class="product__img default">

                  <img src="images (4).jpeg" alt="image" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.php">
                  <h3 class="product__title">Colorful pattern shirts</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">$239.65</span>
                  <span class="old__price">$250.65</span>
                </div>

                <a 
                href="#" class="action__btn cart__btn"
                 aria-label="Add to cart">

                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>

            <div class="product__item swiper-slide">
              <div class="product__banner">
                <a href="details.php" class="product__images">
                  <img src="images (2).jpeg"alt="image" class="product__img default">

                  <img src="product-7-2.jpg" alt="image" class="product__img hover">
                </a>

                <div class="product__actions">
                  <a href="#" class="action__btn" aria-label="Quick View">
                    <i class="fi fi-rs-eye"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Add to wishlist">
                    <i class="fi fi-rs-heart"></i>
                  </a>

                  <a href="#" class="action__btn" aria-label="Compare">
                    <i class="fi fi-rs-shuffle"></i>
                  </a>
                </div>

                <div class="product__badge light-green">Hot</div>
              </div>

              <div class="product__content">
                <span class="product__category">Clothing</span>
                <a href="details.php">
                  <h3 class="product__title">Colorful pattern shirts</h3>
                </a>
                <div class="product__rating">
                  <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                   <i class="fi fi-rs-star"></i>
                </div>
                <div class="product__price flex">
                  <span class="new__price">$239.65</span>
                  <span class="old__price">$250.65</span>
                </div>

                <a 
                href="#" class="action__btn cart__btn"
                 aria-label="Add to cart">

                  <i class="fi fi-rs-shopping-bag-add"></i>
                </a>
              </div>
            </div>
             </div>

          <div class="swiper-button-next">
          <i class="fi fi-rs-angle-right"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="fi fi-rs-angle-left"></i>
          </div>
        </div>
       </section>
      </section>

      <!--=============== SHOWCASE ===============-->
      <section class="showcase section">
        <div class="showcase__container container grid">
          <div class="showcase__wrapper">
            <h3 class="section__title">Deals & Outlet</h3>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img
                 src="showcase-img-7.jpg"
                 alt="image" 
                 class="showcase__img"/>
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Floral Print Casual cotton </h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">$239.45</span>
                  <span class="old__price">$290.45</span>
                </div>
              </div>
            </div>

            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img
                 src="showcase-img-5.jpg"
                 alt="image" 
                 class="showcase__img"/>
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Floral Print Casual cotton </h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">$239.45</span>
                  <span class="old__price">$290.45</span>
                </div>
              </div>
            </div>

            
            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img
                 src="showcase-img-6.jpg"
                 alt="image" 
                 class="showcase__img"/>
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Floral Print Casual cotton </h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">$239.45</span>
                  <span class="old__price">$290.45</span>
                </div>
              </div>
            </div>

            
            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img
                 src= "showcase-img-1.jpg"
                 alt="image" 
                 class="showcase__img"/>
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Floral Print Casual cotton </h4>
                </a>

                <div class="showcase__price flex">
                  <span class="new__price">$239.45</span>
                  <span class="old__price">$290.45</span>
                </div>
              </div>
            </div>

            
            <div class="showcase__item">
              <a href="details.php" class="showcase__img-box">
                <img
                 src="showcase-img-8.jpg"
                 alt="image" 
                 class="showcase__img"/>
              </a>

              <div class="showcase__content">
                <a href="details.php">
                  <h4 class="showcase__title">Ruffled Solid Long Sleeve blouse</h4>
                </a>

           

                <div class="showcase__price flex">
                  <span class="new__price">$239.45</span>
                  <span class="old__price">$290.45</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section home__newsletter">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img
            src="icon-email.svg" 
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
          <a href="index.php" class="footer__logo">
            <img src="images.jpg" alt="image" class="footer__logo-img">
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
                  src="icon-facebook.svg" 
                  alt="logo" class="footer__social-icon"
                  />
                </a>

                <a href="">
                  <img 
                  src="icon-twitter.svg"
                  alt="logo" class="footer__social-icon"
                  />
                </a>


                <a href="">
                  <img 
                  src="icon-instagram.svg"
                  alt="logo" class="footer__social-icon"
                  />
                </a>

                

                <a href="">
                  <img 
                  src="icon-pinterest.svg"
                  alt="logo" class="footer__social-icon"
                  />
                </a>


                <a href="">
                  <img 
                  src="icon-youtube.svg"
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
           src="payment-method.png"    
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
    <script src="main.js"></script>
  </body>
</html>
