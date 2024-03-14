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
                I was so absorbed by her negativity and I felt really bad about myself. I thought of quitting after my first day.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
            But then someone once told me that we can never get what we want if we are all quitters. So, I decided to channel the frustration from the negativity of my teammate and my zero athletic ability into something good.
            I decided to list the things I need to improve in order to know how to properly play the game.
            </p>

            <a 
                href="/blog"
                class="btn-primary">
                Find Out More On Blogs
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
                <p class="profile-p">Main Setter | Masahiro Sekita</p>
              </div>
            <img src="https://i.pinimg.com/564x/9d/b9/f4/9db9f46302a9e3c5d2aee9824876c5fd.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Outside Hitter 1 | Matt Anderson</p>
            </div>
            <img src="https://i.pinimg.com/564x/fc/d2/60/fcd260a852d0aafb5adfb085e8f587d3.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Main Setter | Micah Christenson</p>
            </div>
            <img src="https://i.pinimg.com/564x/7c/fd/a5/7cfda5c3ebff2c7b7fc255ee473c3193.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Opposite Hitter 2 | Leandro Souza</p>
            </div>
            
            <img src="https://i.pinimg.com/564x/ff/05/f7/ff05f71a0569a87b41c38a1cb596e235.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Main Setter | Bruno Rezende</p>
              </div>
            <img src="https://i.pinimg.com/564x/93/18/35/9318352f06b953d6d1a653d75ebd5f66.jpg" alt="" />
        </div>

        <div class="media">
            <div class="layer">
                <p class="profile-p">Opposite Hitter | Ivan Zaytsev</p>
              </div>
            <img src="https://i.pinimg.com/564x/b7/7e/bc/b77ebc4ce46e84d4803f481904ed599e.jpg" alt="" />
        </div>

        
    </div>


    {{-- <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
    </div> --}}

    <div class="about-container">
        <div class="about-image">
          <img src="https://i.pinimg.com/564x/6d/c0/39/6dc0399ceb8bec65812332435de29b53.jpg" class="img-fluid" alt="">
        </div>
        <div class="about-content title mb-3">
          <h2 class="about-h2">
            About Us <br>
            Our History <br>
            Mission & Vision <br>
          </h2>
          <p class="about-p">
            The FIVB Volleyball Women's Nations League is an international volleyball competition contested by the senior women's national teams of the members of the Fédération Internationale de Volleyball FIVB, the sport's global governing body. The first tournament took place between May and July 2018, with the final taking place in Nanjing, China. United States won the inaugural edition, defeating Turkey in the final.
            <br><br>
            In July 2018, the FIVB announced that China would host the next three editions of the women's Volleyball Nations League Finals, from 2019–2021‌, but on March 13, 2020, the FIVB decided to postpone the Nations League until after the 2020 Summer Olympics due to the COVID-19 pandemic. Finally, the FIVB canceled the 2020 edition and confirmed Italy as the host of the final stage of the 2021 VNL.

            
          </p>
          <a class="about-a"href="#"><button class="btn btn-black">Learn More</button></a>
        </div>
        
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9584868.235193124!2d-1.5264132659975298!3d45.99452739134405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c2fc87ee528b7%3A0x40816cbb7c47e0f0!2sFIVB%20-%20F%C3%A9d%C3%A9ration%20Internationale%20de%20Volleyball!5e0!3m2!1sen!2sie!4v1710235761781!5m2!1sen!2sie" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection