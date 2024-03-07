@extends('layouts.app')

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

    

    <!-- Gallery -->
    <div class="gallery-row">
        <div class="gallery-col">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" class="gallery-img" alt="Boat on Calm Water" />
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" class="gallery-img" alt="Wintry Mountain Landscape" />
        </div>
        <div class="gallery-col">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp" class="gallery-img" alt="Mountains in the Clouds" />
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" class="gallery-img" alt="Boat on Calm Water" />
        </div>
        <div class="gallery-col">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" class="gallery-img" alt="Waves at Sea" />
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" class="gallery-img" alt="Yosemite National Park" />
        </div>
    </div>
@endsection