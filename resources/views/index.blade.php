<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De beauté</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        transition: .2s linear;
    }

</style>

<body>

    <header>

        <a href="#" class="logo">De beauté<span>.</span></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            @auth
            <form action="/logout" method="post">
                @csrf
                <button type="submit" onclick="confirm('Apakah kamu yakin akan keluar?')"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 20px"></i>
                </button>
            </form>
            @else
            <a href="/signup" class="fas fa-user"></a>
            @endif
        </div>

    </header>

    <section class="home" id="home">

        <div class="swipper-container home-slider">
            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <h3>Barenbliss</h3>
                        <span> Feel the Beuty </span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="image">
                        <img src="images/lipstick-1.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <h3>Amuse</h3>
                        <span> Feel the Beauty </span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="image">
                        <img src="images/eyeshadow.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <h3>Kyle</h3>
                        <span> Feel the Beauty</span>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="image">
                        <img src="images/lipstick-1.png" alt="">
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="about" id="about">

        <h1 class="heading"><span>about </span>us</h1>

        <div class="row">

            <div class="video-container">
                <video src="images/lip-product.mp4" loop autoplay muted></video>
            </div>

            <div class="content">
                <h3>Why Choose Us</h3>
                <p>De Beaute hadir untuk memenuhi kebutuhan konsumen dalam bidang kecantikan. De Beaute menyediakan platform untuk berbagi pengalaman, informasi produk, saran makeup, membantu pengguna membuat keputusan yang lebih baik.</p>
            </div>
        </div>

    </section>

    <section>
    <h1 class="heading" style="display: block; margin:10px 0 0 0;">Category <span>products</span></h1>
    </section>
    <section class="icons-container" style="padding-top: 0; padding-bottom: 0;">
        @foreach ($categories as $category)
        <a href="category/{{ $category->slug }}">
            <div class="icons">
                <img src="{{  asset('storage/'. $category->image) }}" alt="{{ $category->name }}">
                <div class="info">
                    <h3>{{ $category->name }}</h3>
                    <span>{{ $category->description }}</span>
                </div>
            </div>
        </a>
        @endforeach
        {{-- 
        <div class="icons">
            <img src="images/powder.png" alt="">
            <div class="info">
                <h3>Cushion</h3>
                <span>Kulit Glowing</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/lipstick.png" alt="">
            <div class="info">
                <a href="lipstick.html" class="lipstick"><h3>Lipstick</h3></a>
                <span>Bibir berwarna</span>
            </div>
        </div> --}}

    </section>

    <section class="products" id="products">

        <h1 class="heading">recommendation<span>.</span></h1>

        <div class="box-container">
            @for ($i = 0; $i < 3; $i++) <div class="box">
                <div class="image">
                    <img src="storage/{{ $products[$i]->image }}" alt="{{ $products[$i]->name }}">
                    <div class="icons">
                        <a href="product/{{ $products[$i]->slug }}" class="cart-btn">Show</a>
                    </div>
                </div>
                <div class="content">
                    <h3>{{ $products[$i]->name }}</h3>
                    <div class="price">{{ $products[$i]->price }}</div>
                </div>
        </div>
        @endfor
        {{-- 
        <div class="box">
                <div class="image">
                    <img src="images/lip2.jpg" alt="">
                    <div class="icons">
                    <a href="show.html" class="cart-btn">Show</a>
                    </div>
                </div>
            <div class="content">
                <h3>Lip BnB</h3>
                <div class="price">$12.99 </div>
            </div>
        </div>

        <div class="box">
                <div class="image">
                    <img src="images/lip3.jpg" alt="">
                    <div class="icons">
                    <a href="show.html" class="cart-btn">Show</a>
                    </div>
                </div>
            
            <div class="content">
                <h3>Lip BnB</h3>
                <div class="price">$12.99 </div>
            </div>
        </div> --}}

        <!-- <div class="box">
                <div class="image">
                    <img src="images/lip-4.jpg" alt="">
                    <div class="icons">
                    <a href="button" class="fas fa-heart" id="tmbl_heart"></a> 
                    <a href="show.html" class="cart-btn">Show</a>
                    </div>
                </div>
            <div class="content">
                <h3>Lip BnB</h3>
                <div class="price">$12.99 </div>
            </div>
        </div>

        <div class="box">
                <div class="image">
                    <img src="images/lip-5.jpg" alt="">
                    <div class="icons">
                    <div class="fav-heart" id="heart"></div>
                    <a href="button" class="fas fa-heart" id="tmbl_heart"></a> 
                    <a href="show.html" class="cart-btn">Show</a>
                    </div>
                </div>
            <div class="content">
                <h3>Lip BnB</h3>
                <div class="price">$12.99 </div>
            </div>
        </div>

        <div class="box">
                <div class="image">
                    <img src="images/lip-6.jpg" alt="">
                    <div class="icons">
                    <a href="button" class="fas fa-heart" id="tmbl_heart"></a> 
                    <a href="show.html" class="cart-btn">Show</a>
                    </div>
                </div>
            <div class="content">
                <h3>Lip BnB</h3>
                <div class="price">$12.99 </div>
            </div>
        </div>
        </div> -->

    </section>

    <section class="review" id="review">

        <h1 class="heading"> customer <span>review</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Explicabo voluptatum officia optio velit quas sed suscipit cumque dignissimos dolorum?
                    Illum accusamus minima facilis, mollitia assumenda velit nihil placeat ratione corrupti.</p>
                <div class="user">
                    <img src="images/user-1.jpg" alt="">
                    <div class="user-info">
                        <h3>Kyo Shoma</h3>
                        <span>happy costumer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Explicabo voluptatum officia optio velit quas sed suscipit cumque dignissimos dolorum?
                    Illum accusamus minima facilis, mollitia assumenda velit nihil placeat ratione corrupti.</p>
                <div class="user">
                    <img src="images/user-2.jpg" alt="">
                    <div class="user-info">
                        <h3>Hinata Shoyo</h3>
                        <span>happy costumer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Explicabo voluptatum officia optio velit quas sed suscipit cumque dignissimos dolorum?
                    Illum accusamus minima facilis, mollitia assumenda velit nihil placeat ratione corrupti.</p>
                <div class="user">
                    <img src="images/user-3.jpg" alt="">
                    <div class="user-info">
                        <h3>Cipung</h3>
                        <span>happy costumer</span>
                    </div>
                </div>
                <span class="fas fa-qoute-right"></span>
            </div>

        </div>

    </section>

    <section class="footer" id="contact">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">products</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my favorite</a>
                <a href="#"></a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">example@gmail.com</a>
                <a href="#">Purwakarta, Jawa Barat</a>
            </div>

        </div>

        <div class="credit">created by <span> Azhar, Jasmine, Jihan</span> | all rights reserved</div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

<script>
    var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
    });

</script>

</html>