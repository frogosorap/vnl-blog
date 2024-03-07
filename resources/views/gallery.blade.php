@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="home-h1">
                    Featured: Japan Team
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
            <img src="https://i.pinimg.com/736x/66/2b/2b/662b2bd2ce5d11dc6862b544ee3a6549.jpg" class="gallery-img" alt="Boat on Calm Water" />
            <img src="https://i.pinimg.com/564x/7d/a8/ae/7da8aed96cb240cdcf982a65c64acc4a.jpg" class="gallery-img" alt="Wintry Mountain Landscape" />
        </div>
        <div class="gallery-col">
            <img src="https://i.pinimg.com/564x/2e/ea/58/2eea580371c6ea2ae7483d9c82781f19.jpg" class="gallery-img" alt="Mountains in the Clouds" />
            <img src="https://i.pinimg.com/564x/f9/87/18/f98718e914cfa9cbf4e3ebb9ea776613.jpg" class="gallery-img" alt="Boat on Calm Water" />
        </div>
        <div class="gallery-col">
            <img src="https://i.pinimg.com/564x/ed/4e/53/ed4e53a1d687659dd5e71a65d63cce4a.jpg" class="gallery-img" alt="Waves at Sea" />
            <img src="https://i.pinimg.com/564x/d6/b7/82/d6b782546cfcbc99d2c4763a114bb4bf.jpg" class="gallery-img" alt="Yosemite National Park" />
        </div>
    </div>
@endsection