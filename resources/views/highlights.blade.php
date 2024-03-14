@extends('layouts.app')
<div class="marquee">
  <div>
    <span>🏆 VNL 2024 Finals The VNL 2024 Finals will be hosted in Thailand after the conclusion of the preliminary phase on June 16.</span>
    <span>🌍 VNL 2024 Schedule The VNL 2024 schedule includes matches across different pools, rounds, and genders, with various teams competing in different venues. Follow live matches and stay updated on the results.</span>
  </div>
</div>
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="home-h1">
                    VNL 2023 Highlight Matches
                </h1>
                <a 
                    href="https://www.youtube.com/@volleyballworld" target="_blank"
                    class="readmore-button">
                    Watch More on YouTube
                </a>
            </div>
        </div>
    </div>
    <div class="news-slideshow">
      <div class="slideshow-container">
        <div class="news">
          <a class="twitter-timeline" data-width="380" data-height="500"
            href="https://twitter.com/volleyballworld?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Tweets by VNL</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>

      <div class="slideshow-container">
          <br><br>

          <div class="mySlides fade">
            <img src="https://i.ytimg.com/vi/ty_aFdftRFs/maxresdefault.jpg" style="width:100%">
          </div>

          <div class="mySlides fade">
            <img
              src="https://i.ytimg.com/vi/jXxYFu1ULis/maxresdefault.jpg"
              style="width:100%">
          </div>

          <div class="mySlides fade">
            <img
              src="https://img.olympics.com/images/image/private/t_s_pog_staticContent_hero_xl_2x/f_auto/primary/k3ky7xsynxl1tm4j0ruo"
              style="width:100%">
          </div>
          <br><br>
        </div>
      </div>
    </div>
    <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
      }
    </script>

    <div class="card-carousel">

    </div>

    <div class="profile-h2-div">
      <h2 class="profile-h2">
          WATCH US ON YOUTUBE!
      </h2>
    </div>

    <div class="card-main">

      <!--cards -->
     
      <div class="card">
     
     <div class="card-image">
        <img src="https://i.ytimg.com/vi/rFQbhQQi_h8/maxresdefault.jpg">
     </div>
     <div class="card-title">
        <h1 class="card-h1">Brazil VS Italy</h1>
     </div>
     <div class="card-des">
      <p>Men's highlights between Brazil and Italy VNL 2023 in Pasay City, Philippines.</p>
      <a href="https://www.youtube.com/watch?v=rFQbhQQi_h8&ab_channel=VolleyballWorld" target="_blank">
        <button class="card-button">Watch Now</button>
      </a>
     </div>
     </div>
     <!--cards -->
     
     
     <div class="card">
     
     <div class="card-image">
        <img src="https://i.ytimg.com/vi/KftxAxfWg2U/maxresdefault.jpg">
     </div>
     <div class="card-title">
      <h1 class="card-h1">
     Japan VS Argentina</h1>
     </div>
     <div class="card-des">
      <p>Men's highlights between Japan and Argentina VNL 2023 in Orléans, France.</p>
      <a href="https://www.youtube.com/watch?v=KftxAxfWg2U&t=1s&ab_channel=VolleyballWorld" target="_blank">
        <button class="card-button">Watch Now</button>
      </a>
     </div>
     </div>
    
     
     
    
     <!--cards -->
     
     
     <div class="card">
     
     <div class="card-image">
        <img src="https://i.ytimg.com/vi/DAT8bhj0h7k/maxresdefault.jpg">
     </div>
     <div class="card-title">
      <h1 class="card-h1">
     Slovenia VS Italy</h1>
     </div>
     <div class="card-des">
      <p>Men's highlights between Slovenia and Italy VNL 2023 in Pasay City, Philippines.</p>
      <a href="https://www.youtube.com/watch?v=DAT8bhj0h7k&ab_channel=VolleyballWorld" target="_blank">
        <button class="card-button">Watch Now</button>
      </a>
     </div>
     </div>
     <!--cards -->
     
     
     <div class="card">
     
     <div class="card-image">
        <img src="https://i.ytimg.com/vi/Fs7rA3bjRHE/maxresdefault.jpg">
     </div>
     <div class="card-title">
      <h1 class="card-h1">
     China VS Germany</h1>
     </div>
     <div class="card-des">
      <p>Men's highlights between China and Germany VNL 2023 in Rotterdam, Netherlands.</p>
      <a href="https://www.youtube.com/watch?v=Fs7rA3bjRHE&ab_channel=VolleyballWorld" target="_blank">
        <button class="card-button">Watch Now</button>
      </a>
     </div>
     </div>
     <!--cards -->
     
     <div class="card">
     
     <div class="card-image">
        <img src="https://i.ytimg.com/vi/EiXNIgiTZ3Q/maxresdefault.jpg">
     </div>
     <div class="card-title">
      <h1 class="card-h1">
     Japan VS Germany</h1>
     </div>
     <div class="card-des">
      <p>Women's highlights between Japan and Germany VNL 2023 in Brasilia.</p>
      <a href="https://www.youtube.com/watch?v=EiXNIgiTZ3Q&ab_channel=VolleyballWorld" target="_blank">
        <button class="card-button">Watch Now</button>
      </a>
     </div>
     </div>
     <!--cards -->
     
     <div class="card">
     
     <div class="card-image">
        <img src="https://i.ytimg.com/vi/g_8_h-Fpfeo/maxresdefault.jpg">
     </div>
     <div class="card-title">
      <h1 class="card-h1">
     Italy VS Thailand</h1>
     </div>
     <div class="card-des">
      <p>Women's highlights between Italy and Thailand VNL 2023 in Türkiye.</p>
      <a href="https://www.youtube.com/watch?v=g_8_h-Fpfeo&ab_channel=VolleyballWorld" target="_blank">
        <button class="card-button">Watch Now</button>
      </a>
     
     </div>
     </div>
     <!--cards -->
     
     <div class="card">
     
     <div class="card-image">
        <img src="https://i.ytimg.com/vi/01OAgyoS4X0/maxresdefault.jpg">
     </div>
     <div class="card-title">
      <h1 class="card-h1">
     Poland VS USA</h1>
     </div>
     <div class="card-des">
      <p>Women's highlights between Poland and USA VNL 2023 in Arlington, USA.</p>
      <a href="https://www.youtube.com/watch?v=01OAgyoS4X0&t=1s&ab_channel=VolleyballWorld" target="_blank">
        <button class="card-button">Watch Now</button>
      </a>
     </div>
     </div>

     <!--cards -->
     
     <div class="card">
     
      <div class="card-image">
         <img src="https://images.volleyballworld.com/image/private/t_editorial_landscape_12_desktop/fivb-prd/utxufazfo1bhd1zqvsft.jpg">
      </div>
      <div class="card-title">
       <h1 class="card-h1">
      South Korea VS Turkey</h1>
      </div>
      <div class="card-des">
       <p>Women's highlights between Korea and Türkiye VNL 2023 in Türkiye.</p>
       <a href="https://www.youtube.com/watch?v=x4BZ2LsyGZU&ab_channel=VolleyballWorld" target="_blank">
        <button class="card-button">Watch Now</button>
      </a>
      </div>
      </div>

</div>
    
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="path/to/slick.css">
<link rel="stylesheet" type="text/css" href="path/to/slick-theme.css">
<style>
    .card-carousel .slick-slide {
        margin: 0 10px;
    }
    .card-carousel .card {
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .card-carousel .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .card-carousel .card-content {
        padding: 10px;
    }
    .card-carousel .card-title {
        font-size: 18px;
        margin-bottom: 5px;
    }
    .card-carousel .card-description {
        font-size: 14px;
        color: #666;
    }
</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="path/to/slick.min.js"></script>
<script>
$(document).ready(function(){
    $('.card-carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" class="slick-prev">&#8592;</button>',
        nextArrow: '<button type="button" class="slick-next">&#8594;</button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});
</script>
@endpush