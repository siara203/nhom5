<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    line-height: 1.5;
}
.card-wrapper{
    max-width: 1100px;
    margin: 0 auto;
}
img{
    width: 100%;
    display: block;
}
.img-display{
    overflow: hidden;
}
.img-showcase{
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
}
.img-showcase img{
    min-width: 100%;
}
.img-select{
    display: flex;
}
.img-item{
    margin: 0.3rem;
}
.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3){
    margin-right: 0;
}
.img-item:hover{
    opacity: 0.8;
}
.product-content{
    padding: 2rem 1rem;
}
.product-title{
    font-size: 4rem;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    color: brown;
    margin: 1rem 0;
}
.product-title::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 8px;
    width: 500px;
    background: #12263a;
}
.product-link{
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 1.5rem;
    display: inline-block;
    margin-bottom: 2rem;
    background: #256eff;
    color: #fff;
    padding: 0 0.3rem;
    transition: all 0.5s ease;
}
.product-link:hover{
    opacity: 0.9;
}
.product-rating{
    color: #ffc107;
}
.product-rating span{
    font-weight: 600;
    color: #252525;
}
.product-price{
    margin: 1rem 0;
    font-size: 4rem;
    font-weight: 700;
    color: cornflowerblue;
}
.product-price span{
    font-weight: 400;
}
.last-price span{
    color: #f64749;
    text-decoration: line-through;
}
.new-price span{
    color: #256eff;
}
.product-detail h2{
    color: #12263a;
    padding-bottom: 0.6rem;
}
.product-detail p{
    font-size: 2.0rem;
    padding: 0.3rem;
    opacity: 0.8;
}
.product-detail ul{
    margin: left;
    font-size: 1.5rem;
    color: black;
}
.product-detail ul li{
    margin: 0;
    list-style: none;
    background: url(shoes_images/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.product-detail ul li span{
    font-weight: 400;
}
.purchase-info{
    margin: 1.5rem 0;
}
.purchase-info input,
.purchase-info .btn{
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;
}
.purchase-info input{
    width: 60px;
}
.purchase-info .btn{
    cursor: pointer;
    color: #fff;
}
.purchase-info .btn:first-of-type{
    background: #256eff;
}
.purchase-info .btn:last-of-type{
    background: #f64749;
}
.purchase-info .btn:hover{
    opacity: 0.9;
}
.social-links{
    display: flex;
    align-items: center;
}
.social-links a{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #000;
    border: 1px solid #000;
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}
.social-links a:hover{
    background: #000;
    border-color: transparent;
    color: #fff;
}

@media screen and (min-width: 992px){
    .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }
    .card-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-imgs{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .product-content{
        padding-top: 0;
    }
}
</style>
@extends('frontend.master')

@section('content')
<div class = "card-wrapper">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            <img src = "{{ asset('images/rooms/' . $room->picture->file_name) }}" alt = "shoe image">
            <img src = "{{ asset('images/rooms/' . $room->image2) }}" alt = "shoe image">
            <img src = "{{ asset('images/rooms/' . $room->image3) }}" alt = "shoe image">
            <img src = "{{ asset('images/rooms/' . $room->image4) }}" alt = "shoe image">
            <img src = "{{ asset('images/rooms/' . $room->image5) }}" alt = "shoe image">
          </div>
        </div>
        <div class = "img-select">
          <div class = "img-item">
            <a href = "#" data-id = "1">
              <img src = "{{ asset('images/rooms/' . $room->picture->file_name) }}" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "2">
              <img src = "{{ asset('images/rooms/' . $room->image2) }}" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "3">
              <img src = "{{ asset('images/rooms/' . $room->image3) }}" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "4">
              <img src = "{{ asset('images/rooms/' . $room->image4) }}" alt = "shoe image">
            </a>
          </div>
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title">{{ $room->name }}</h2>
        <a href = "#" class = "product-link">visit hotel</a>
        <div class = "product-rating">
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "new-price"><p style="color: #000">Price:</p> {{ $room->price }} $/h </p>
        </div>

        <div class = "product-detail">
          <h2>Room's information: </h2>
          <ul>
            <li>Room Type : {{ $room->roomType->name }}</li>
            <li>Size:  {{ $room->size }} m²</li>
            <li>Description: {{ $room->description }}</li>
          </ul>
        </div>

        <div class = "purchase-info">
          <button type = "button" class = "btn"> Booking </button>
          <button type = "button" class = "btn" href ="{{url('rooms') }}" >Back</button>
        </div>

        <div class = "social-links">
          <p>Share At: </p>
          <a href = "#">
            <i class = "fab fa-facebook-f"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-twitter"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-instagram"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-whatsapp"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

<script >
    const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);
</script>
@endsection
