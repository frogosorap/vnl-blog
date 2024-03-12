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
                    Do you want to become a volleyball player?
                </h1>
                <a 
                    href="/blog"
                    class="readmore-button">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/N3Q367IAeKw?si=4MYnhkZq-8duK_3G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to share your experiences in volleyball?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="home-bg">
        <h2 class="text-2xl pb-5 text-l"> 
            Learn from epxerts in...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Setter
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Libero
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Middle
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Outside Hitter
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Opposite Hitter
        </span>
    </div>

    <div class="profile-h2-div">
        <h2 class="profile-h2">
            Player Profiles
        </h2>
    </div>

    <div class="wrapper">
        <div class="media">
            <div class="layer">
                <p class="profile-p">Outside Hitter 1 | Yuki Ishikawa</p>
            </div>
            <img src="https://i.pinimg.com/564x/f6/80/b6/f680b68002b4f61e340c332198a75dc4.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Outside Hitter 2 | Ran Takahashi</p>
            </div>
            <img src="https://i.pinimg.com/564x/76/80/c1/7680c189a0341864728b278a2ca1fd5d.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Opposite Hitter 1 | Yuji Nishida</p>
            </div>
            
            <img src="https://i.pinimg.com/564x/1d/43/55/1d435502eab11e0643fbd149ee427832.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Opposite Hitter 2 | Kento Miyaura</p>
              </div>
            <img src="https://i.pinimg.com/564x/0d/52/58/0d525823d062a68e13af498ea7044541.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Setter | Masahiro Sekita</p>
              </div>
            <img src="https://i.pinimg.com/564x/9d/b9/f4/9db9f46302a9e3c5d2aee9824876c5fd.jpg" alt="" />
        </div>
    </div>


    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9584868.235193124!2d-1.5264132659975298!3d45.99452739134405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c2fc87ee528b7%3A0x40816cbb7c47e0f0!2sFIVB%20-%20F%C3%A9d%C3%A9ration%20Internationale%20de%20Volleyball!5e0!3m2!1sen!2sie!4v1710235761781!5m2!1sen!2sie" width="1518" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection