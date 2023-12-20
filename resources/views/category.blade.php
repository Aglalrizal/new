<!DOCTYPE html>
<html>

<head>
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

        html {
            font-size: 62.5%;
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
        }

        section {
            padding: 2rem 9%;
            margin-bottom: 40px;
        }

        .heading {
            text-align: center;
            font-size: 4rem;
            color: #333;
            padding: 1rem;
            margin: 2rem 0;
        }

        .heading span {
            color: #ff666f;
        }

        .icons a {
            font-size: 2rem;
            color: #333;
            margin-left: 1rem;
        }

        .icons-container {
            background: #eee;
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .icons-container .icons {
            background: #fff;
            border: .1rem solid rgba(0, 0, 0, .1);
            padding: 2rem;
            display: flex;
            align-items: center;
            flex: 1 1 25rem;
        }

        .icons-container .icons img {
            height: 5rem;
            margin-right: 2rem;
        }

        .icons-container .icons h3 {
            color: #333;
            padding-bottom: .5rem;
            font-size: 1.5rem;
        }

        .icons-container .icons span {
            color: #555;
            font-size: 1.3rem;
        }

        .products .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .products .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .products .box-container .box {
            flex: 1 1 30rem;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            border-radius: .5rem;
            border: .1rem solid rgba(0, 0, 0, .1);
            position: relative;
        }

        .products .box-container .box .image {
            position: relative;
            text-align: center;
            padding-top: 2rem;
            overflow: hidden;
        }

        .products .box-container .box .image img {
            height: 25rem;
        }

        .products .box-container .box:hover .image img {
            transform: scale(1.1);
        }

        .products .box-container .box .image .icons {
            position: absolute;
            bottom: -7rem;
            left: 0;
            right: 0;
            display: flex;
        }

        .products .box-container .box:hover .image .icons {
            bottom: 0;
        }

        .products .box-container .box .image .icons a {
            height: 5rem;
            line-height: 5rem;
            font-size: 2rem;
            width: 50%;
            background: #ff666f;
            color: #fff;
        }

        .products .box-container .box .image .icons .cart-btn {
            border-left: .1rem solid #fff7;
            border-right: .1rem solid #fff7;
            width: 100%;
        }

        .products .box-container .box .image .icons a:hover {
            background: #333;
        }

        .products .box-container .box .content {
            padding: 2rem;
            text-align: center;
        }

        .products .box-container .box .content h3 {
            font-size: 2.5rem;
            color: #333;
        }

        .products .box-container .box .content .price {
            font-size: 2.5rem;
            color: #ff666f;
            font-weight: bolder;
            padding-top: 1rem;
        }
    </style>
    <title>{{ $title }} Category</title>
</head>

<body>
    <section class="products" id="products">

        <h1 class="heading">Product<span>.</span> with {{ $title }} Category</h1>

        <div class="box-container">
            @if ($products->count())
            @foreach ($products as $product)
            <div class="box">
                <div class="image">
                    <img src="{{ asset('storage/'. $product->image) }}" alt="">
                    <div class="icons">
                        <a href="../product/{{ $product->slug }}" class="cart-btn">Show</a>
                    </div>
                </div>
                <div class="content">
                    <h3>{{ $product->name }}</h3>
                    <div class="price">${{ $product->price }}</div>
                </div>
            </div>
            @endforeach
            @else
            <h3>Sorry, we dont have any recommendation for this category. (males aja sih aslinya mah)</h3>
            @endif
    </section>

</body>

</html>
