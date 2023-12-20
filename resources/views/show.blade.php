<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Review & Rating System in PHP & Mysql using Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/rating.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --yellow: #FFBD13;
            --blue: #4383FF;
            --blue-d-1: #3278FF;
            --ligth: #F5f5F5;
            --grey: #AAA;
            --white: #FFF;
            --shadow: 8px 8px 30px rgba(0, 0, 0, .05);
        }

        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif !important;
            background-color: #fff5f5;
            box-sizing: border-box;
        }

        .c-heading {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            padding: 1rem;
            margin: 2rem 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .c-heading span {
            color: #ff666f;
        }

        .container {
            display: flex;

        }

        .right-box {
            width: 50%;
            border: 2px solid #ff979e;
            border-radius: 10px;
        }

        .main-image-box {
            padding: 30px 0px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-image {
            height: 500px;
            width: auto;
        }

        .image {
            height: 90%;
            width: auto;
        }

        .details-box {
            width: 50%;
            padding-left: 15px;
        }

        .wrapper {
            background: var(--white);
            padding: 1rem;
            max-width: 576px;
            border-radius: .30rem;
            box-shadow: var(--shadow);
            width: 100%;
            text-align: center;
        }

        textarea {
            width: 75%;
            background: var(--ligth);
            padding: 1rem;
            border-radius: .3rem;
            border: none;
            outline: none;
            resize: none;
            margin-bottom: .5rem;
        }

        .btn-group {
            display: flex;
            grid-gap: .5rem;
            align-items: center;
        }

        .btn-group .btn {
            padding: .75rem 1rem;
            border-radius: .5rem;
            border: none;
            outline: none;
        }

        .btn-group .btn.submit {
            background: var(--blue);
            color: var(--white);
        }

        .btn-group .btn.submit:hover {
            background: var(--blue-d-1);
        }

        .btn-group .btn.cancel {
            background: var(--white);
            color: var(--blue);
        }

        .btn-group .btn.cancel:hover {
            background: var(--ligth);
        }

        .rating {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rating:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rating:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rating:not(:checked)>label:before {
            content: '★ ';
        }

        .rating>input:checked~label {
            color: #ffc700;
        }

        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rating>input:checked+label:hover,
        .rating>input:checked+label:hover~label,
        .rating>input:checked~label:hover,
        .rating>input:checked~label:hover~label,
        .rating>label:hover~input:checked~label {
            color: #c59b08;
        }

        .side {
            float: left;
            width: 15%;
            margin-top: 10px;
        }

        .middle {
            float: left;
            width: 70%;
            margin-top: 10px;
        }

        /* Place text to the right */
        .right {
            text-align: right;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {
            height: 18px;
            background-color: #04AA6D;
        }

        .bar-4 {
            height: 18px;
            background-color: #2196F3;
        }

        .bar-3 {
            height: 18px;
            background-color: #00bcd4;
        }

        .bar-2 {
            height: 18px;
            background-color: #ff9800;
        }

        .bar-1 {
            height: 18px;
            background-color: #f44336;
        }

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 400px) {

            .side,
            .middle {
                width: 100%;
            }

            /* Hide the right column on small screens */
            .right {
                display: none;
            }
        }

    </style>
    <title>{{ $product->name }}</title>
</head>

<body>
    <h1 class="c-heading">Detail<span> Product</span></h1>
    <div class="container mb-4">
        <div class="right-box">
            <div class="main-image-box">
                <img src="{{ asset('storage/'.$product->image) }}" id="mainImage" class="main-image">
            </div>
        </div>
        <div class="details-box">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->category->name }}</p>
            <h2>${{ $product->price }}</h2>
            <h4>Description Product</h4>
            <p>{{ $product->description }}</p>
            @if(!$reviewed)
            <div class="col-12 border p-3">
                <form action="/review" id="review" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <h3>Please give us your review: </h3>
                    <div class="rating">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                    <textarea name="comment" class="w-100" rows="5" placeholder="Your opinion..."></textarea>
                    <div class="btn-group">
                        <button type="submit" class="btn submit" style="background-color: #ff979e">Submit</button>
                    </div>
                </form>
            </div>
            @else
            <h3>Thank you for you review!</h3>
            @endif
        </div>
    </div>

    @if($reviews->count())
    <div class="container mt-2 mb-5">
        <div class="col-6 p-3">
            <span class="heading">User Rating</span>
            @php
            $maxStars = 5;
            @endphp

            @for ($i = 1; $i <= $maxStars; $i++) @if ($i <=$avg) <span class="fa fa-star checked"></span>
                @else
                <span class="fa fa-star"></span>
                @endif
            @endfor
                <p>{{ number_format($avg,1) }} average based on {{ $product->reviews()->count() }} reviews.</p>
                <hr style="border:3px solid #f1f1f1">

                <div class="row">
                    <div class="side">
                        <div>5 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-5" style="width: {{ $ratings[5]/$total*100 }}%"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>{{ $ratings[5] }}</div>
                    </div>
                    <div class="side">
                        <div>4 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-4" style="width: {{ $ratings[4]/$total*100  }}%"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>{{ $ratings[4] }}</div>
                    </div>
                    <div class="side">
                        <div>3 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-3" style="width: {{ $ratings[3]/$total*100  }}%"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>{{ $ratings[3] }}</div>
                    </div>
                    <div class="side">
                        <div>2 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-2" style="width: {{ $ratings[2]/$total*100  }}%"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>{{ $ratings[2] }}</div>
                    </div>
                    <div class="side">
                        <div>1 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-1" style="width: {{ $ratings[1]/$total*100  }}%"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>{{ $ratings[1] }}</div>
                    </div>
                </div>
        </div>
        @if($reviews->count())
        <div class="col-6 ms-4">
            @foreach ($reviews as $r)
            <div class="card mb-2">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Anonim</li>
                    <li class="list-group-item">@php
                        $maxStars = 5;
                        @endphp
            
                        @for ($i = 1; $i <= $maxStars; $i++)
                        @if ($i <=$r->rating) <span class="fa fa-star checked"></span>
                            @else
                            <span class="fa fa-star"></span>
                            @endif
                        @endfor</li>
                    <li class="list-group-item">{{ $r->comment }}</li>
                </ul>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    @endif
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        const allStar = document.querySelectorAll('.rating .star')

        allStar.forEach((item, idx) => {
            item.addEventListener('click', function () {
                let click = 0

                allStar.forEach(i => {
                    i.classList.replace('bxs-star', 'bx-star')
                    i.classList.remove('active')
                })
                for (let i = 0; i < allStar.length; i++) {
                    if (i <= idx) {
                        allStar[i].classList.replace('bx-star', 'bxs-star')
                        allStar[i].classList.add('active')
                    }
                }
            })
        })

    </script>
</body>

</html>
{{--    
        <div class="card-header text-center" style="width: 70%">Review Product</div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <h1 class="text-warning mt-4 mb-4">
                        <b><span id="average_rating">0.0</span> / 5</b>
                    </h1>
                    <div class="col-md-6">
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                        <i class="fas fa-star star-light mr-1 main_star"></i>
                    </div>
                    <h3><span id="total_review">0</span> Review</h3>
                </div>
                <div class="col-sm-6">
                    <p>
                        <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                        <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                        </div>
                    </p>
                    <p>
                        <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                        
                        <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                        </div>               
                    </p>
                    <p>
                        <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                        
                        <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                        </div>               
                    </p>
                    <p>
                        <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                        
                        <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                        </div>               
                    </p>
                    <p>
                        <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                        
                        <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                        </div>               
                    </p>
                </div>
                <div class="col-mt-6 offset-md-3 text-center">
                    <h3 class="mt-4 mb-3">Write Review Here</h3>
                    <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                </div>
            </div>
        </div>
    <div class="mt-5" id="review_content"></div>
</div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Submit Review</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <h4 class="text-center mt-2 mb-4">
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
            </h4>
            <div class="form-group">
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
            </div>
            <div class="form-group">
                <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
            </div>
            <div class="form-group text-center mt-4">
                <button type="button" class="btn btn-primary" id="save_review">Submit</button>
            </div>
          </div>
    </div>
  </div>
</div>

</html> --}}
