<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../public/img/favicon/favicon.ico" type="image/x-icon">

    <!--=============== BO  1XICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="../public/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../public/css/styles.css">

    <title>JCLothes || Make Your Ideas Into Reality <?= $data ?></title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <!-- headerrrrr -->
    <?php
        $datas = $_SESSION['datas'];
        // for ($i=0; $i < count($datas['pesanan_image']); $i++) { 
            // var_dump($datas);
        // }

    ?>
    <header class="header" id="header">
        <nav class="nav container primary-navigation">
            <a href="#" class="nav__logo "><img src="../public/img/logoBlackMode.png" alt="">JCLothes</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../public/home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="../public/design/" class="nav__link">Design Own &dtrif;</a>
                        <ul class="dropdown ">
                            <li><a href="../design/">T-Shirt</a></li>
                            <li><a href="../design/">Long Sleeves</a></li>
                            <li><a href="../design/">Hoodie</a></li>
                            <li><a href="../design/">Sweater</a></li>
                            <li><a href="../design/">Crewneck</a></li>
                            <li><a href="../design/">Jacket</a></li>
                            <li><a href="public/design/">Varsity</a></li>
                        </ul>
                    <li class="nav__item">
                        <a href="../public/product" class="nav__link">Our Product</a>
                    </li>
                    <!-- <li class="nav__item">
                                <a href="contact/index.html" class="nav__link">Login</a>
                            </li> -->
                </ul>

                <!-- close tab navbar responsive -->

                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>
            <!-- navButton dark mode dan chart -->
            <div class="nav__btns">
                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <div class="nav__shop" id="cart-shop">
                    <i class='bx bx-shopping-bag'></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </div>

            <div>
                <?php
                if (isset($_SESSION["login_status"])) { ?>
                    <span><?= $_SESSION["name"]; ?></span>
                    <span><a href="../public/auth/logout">LOGOUT</a></span>
                <?php } else { ?>
                    <ul>
                        <li><a href="auth/login">Login</a></li>
                        <li><a href="auth/register">Register</a></li>
                    </ul>
                <?php
                }
                ?>
            </div>
        </nav>
    </header>

    <!--==================== CART ====================-->
    <div class="cart" id="cart">
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">Keranjang saya</h2>

        <div class="cart__container">
            <article class="cart__card">
                <?php if (isset($datas['pesanan_utama'])) : ?>
                    <?php for ($i = 0; $i < count($datas['pesanan_image']); $i++) : ?>
                        <article class="cart__card">
                            <div class="cart__box">
                                <img src=<?= "../public/img/product/" . $datas['pesanan_image'][$i]['gambar'] ?> alt="" class="cart__img">
                            </div>

                            <div class="cart__details">
                                <h3 class="cart__title">T-Shirt</h3>
                                <span class="cart__price"><?= $datas['pesanan_detail'][$i]['jumlah_harga'] ?></span>

                                <div class="cart__amount">
                                    <div class="cart__amount-content">
                                        <span class="cart__amount-box">
                                            <i class='bx bx-minus'></i>
                                        </span>

                                        <span class="cart__amount-number"><?= $datas['pesanan_detail'][$i]['jumlah'] ?></span>

                                        <span class="cart__amount-box">
                                            <i class='bx bx-plus'></i>
                                        </span>
                                    </div>

                                    <i class='bx bx-trash-alt cart__amount-trash'></i>
                                </div>
                            </div>
                        </article>
                    <?php endfor; ?>
                <?php endif; ?>
            </article>
        </div>
        <div class="cart__prices">
            <?php if (isset($datas['pesanan_utama'])) : ?>
                <span class="cart__prices-item"><?= count($datas['pesanan_image']) ?></span>
                <span class="cart__prices-total">Rp. <?= number_format($datas['pesanan_utama'][0]['jumlah_harga'], 2, ',', '.'); ?></span>
                <?php else : ?>
                    <span class="cart__prices-item">Kosong</span>
                    <span class="cart__prices-total">Kosong</span>                    
            <?php endif; ?>
        </div>
    </div>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__img-bg">
                    <img src="../public/img/product/satoru.png" alt="PageHome" class="home__img">
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        Facebook
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        Twitter
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        Instagram
                    </a>
                </div>

                <div class="home__data">
                    <h1 class="home__title">JCLothes<br> We Bring Your Ideas <br> Into Life</h1>

                    <p class="home__description">
                        Pakai pakaian sesuai keinginan <br>
                        Ciptakan StyleMu sendiri

                    </p>

                    <div class="home__btns">
                        <a href="#" class="button button--gray button--small">
                            Desain Sekarang
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <!--==================== FEATURED ====================-->
        <section class="featured section container" id="Design">
            <h2 class="section__title">
                Design Now
            </h2>

            <div class="featured__container grid">
                <article class="featured__card">
                    <span class="featured__tag">Design It</span>

                    <img src="../public/img/product/tshirtDesign.png" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">T-Shirt</h3>
                        <span class="featured__price">Rp.55.000,00</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>


                <article class="featured__card">
                    <span class="featured__tag">Design It</span>

                    <img src="../public/img/product/Longsleeves.png" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Long Sleeves</h3>
                        <span class="featured__price">Rp.70.000,00</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>

                </article>
                <article class="featured__card">
                    <span class="featured__tag">Design It</span>

                    <img src="../public/img/product/hoodieDesign.png" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Hoodie</h3>
                        <span class="featured__price">Rp.150.000,00</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>
            </div>
        </section>

        <!--==================== Template design ====================-->
        <section class="story section container">
            <div class="story__container grid">
                <div class="story__data">
                    <h2 class="section__title story__section-title">
                        Our Design
                    </h2>

                    <h1 class="story__title">
                        Bingung mau nyetak design apa?
                    </h1>

                    <p class="story__description">
                        Santai aja, kita udah nyiapin design yang bisa kalian pakai juga yak
                    </p>

                    <a href="#" class="button button--small">Cek Disini</a>
                </div>

                <div class="story__images">
                    <img src="../public/img/product/satoru.png" alt="" class="story__img">
                    <div class="story__square"></div>
                </div>
            </div>
        </section>

        <!--==================== PRODUCTS template design====================-->
        <section class="products section container" id="products">
            <h2 class="section__title">
                See Our Design
            </h2>

            <div class="products__container grid">
                <?php foreach ($data['barangs'] as $barang) :  ?>
                    <article class="products__card">
                        <img src=<?= "../public/img/product/" . $barang["gambar"] ?> alt="" class="products__img">

                        <h3 class="products__title"><?= $barang["nama_barang"] ?></h3>
                        <span class="products__price"><?= "Rp " . number_format($barang["harga"], 0, ',', '.') ?></span>
                        <a href="Pesanan/<?= $barang["id"] ?>" class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </a>
                    </article>
                <?php endforeach; ?>
                <!-- <article class="products__card">
                    <img src="../public/img/product/satoru.png" alt="" class="products__img">

                    <h3 class="products__title">Satoru</h3>
                    <span class="products__price">Rp.50.000,00</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="../public/img/product/hoodieGojo.png" alt="" class="products__img">

                    <h3 class="products__title">Gojo Design</h3>
                    <span class="products__price">Rp.150.000,00</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="../public/img/product/varsity.png" alt="" class="products__img">

                    <h3 class="products__title">Varsity Custom</h3>
                    <span class="products__price">Rp.450.000,00</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="../public/img/product/MOON1.png" alt="" class="products__img">

                    <h3 class="products__title">Moon Tshirt</h3>
                    <span class="products__price">Rp.55.000,00</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="../public/img/product/ghostrideHoodie.png" alt="" class="products__img">

                    <h3 class="products__title">Ghost Ride Hoodie</h3>
                    <span class="products__price">Rp.150.000,00</span>

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article> -->
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section container">
            <div class="testimonial__container grid">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left'></i>
                            </div>
                            <p class="testimonial__description">
                                Kimi Ga areda ora ora
                            </p>
                            <h3 class="testimonial__date">Sep 2 23</h3>

                            <div class="testimonial__perfil">
                                <img src="../public/img/testimonial1.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Ikhsan D Saktiawan</span>
                                    <span class="testimonial__perfil-detail">Eko Ceo</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left'></i>
                            </div>
                            <p class="testimonial__description">
                                Nazeda Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempora, nihil
                                deserunt hic aperiam assumenda eveniet iusto voluptatibus enim pariatur, sequi ipsa
                                nulla aliquam, perferendis quasi. Iste numquam voluptatum praesentium!
                            </p>
                            <h3 class="testimonial__date">Sep 2 23</h3>

                            <div class="testimonial__perfil">
                                <img src="../public/img/testimonial1.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Joko Jondo</span>
                                    <span class="testimonial__perfil-detail">Guru Informatika</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left'></i>
                            </div>
                            <p class="testimonial__description">
                                Kaizokuoni ore wa naru
                            </p>
                            <h3 class="testimonial__date">Sep 2 23</h3>

                            <div class="testimonial__perfil">
                                <img src="../public/img/testimonial1.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Jamaludin</span>
                                    <span class="testimonial__perfil-detail">Director of a company</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next">
                        <i class='bx bx-right-arrow-alt'></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bx-left-arrow-alt'></i>
                    </div>
                </div>

                <div class="testimonial__images">
                    <div class="testimonial__square">
                        <div class="testimonial_comment_container">
                            <div class="testimonial_comment_head">
                                <img src="../public/img/testimonial1.jpg" alt="">
                                <div class="rating-container">
                                    <h3>Add a comment</h3>
                                    <div class="rating">
                                        <i class='bx bxs-star star' onclick=""></i>
                                        <i class='bx bxs-star star'></i>
                                        <i class='bx bxs-star star'></i>
                                        <i class='bx bxs-star star'></i>
                                        <i class='bx bxs-star star'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <form action="" method="post">
                                    <textarea name="comment" id="comment" placeholder="Comment"></textarea>
                                    <div class="button-container">
                                        <button type="submit" name="submit" class="kirim">Kirim</button>
                                        <button type="submit" name="cancel" class="cancel">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <img src="../public/img/testimonial.png" alt="" class="testimonial__img">
                </div>
            </div>
        </section>

        <!--==================== NEW ====================-->
        <section class="new section container" id="new">
            <h2 class="section__title">
                Our Best Design
            </h2>

            <div class="new__container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <article class="new__card swiper-slide">
                            <span class="new__tag">The Best Of The Week</span>

                            <img src="../public/img/product/satoru.png" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Satoru</h3>
                                <span class="new__price">Rp,55.000,00</span>
                            </div>

                            <button class="button new__button">ADD TO CART</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="../public/img/product/EARTH1.png" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Earth 001</h3>
                                <span class="new__price">Rp.50.000,00</span>
                            </div>

                            <button class="button new__button">ADD TO CART</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="../public/img/product/hoodieTampakBelakang.png" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Gojo Hoodie</h3>
                                <span class="new__price">Rp.150.000,00</span>
                            </div>

                            <button class="button new__button">ADD TO CART</button>
                        </article>

                    </div>
                </div>
            </div>
        </section>

        <!--==================== NEWSLETTER ====================-->
        <section class="newsletter section container">
            <div class="newsletter__bg grid">
                <div>
                    <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                    <p class="newsletter__description">
                        Don't miss out on your discounts. Subscribe to our email
                        newsletter to get the best offers, discounts, coupons,
                        gifts and much more.
                    </p>
                </div>

                <form action="" class="newsletter__subscribe">
                    <input type="email" placeholder="Enter your email" class="newsletter__input">
                    <button class="button">
                        SUBSCRIBE
                    </button>
                </form>
            </div>
        </section>
    </main>