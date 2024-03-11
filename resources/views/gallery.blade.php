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
                    Featured: Japan Team
                </h1>
                <a 
                    href="https://volleytimes.com/2023/07/22/vnl-2023-photogallery-of-japan-poland/" target="_blank"
                    class="readmore-button">
                    View More Photos
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

    <div class="grid-container">
        <div>
          <img class='grid-item grid-item-1' src='https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"I'm so happy today!"</p>
        </div>
        <div>
          <img class='grid-item grid-item-2' src='https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"I see those nugs."</p>
        </div>
        <div>
          <img class='grid-item grid-item-3' src='https://images.unsplash.com/photo-1510771463146-e89e6e86560e?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"I love you so much!"</p>
        </div>
        <div>
          <img class='grid-item grid-item-4' src='https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"I'm the baby of the house!"</p>
        </div>
        <div>
          <img class='grid-item grid-item-5' src='https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"Are you gunna throw the ball?"</p>
        </div>
        <div>
          <img class='grid-item grid-item-6' src='https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"C'mon friend!"</p>
        </div>
        <div>
          <img class='grid-item grid-item-7' src='https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"A rose for mommy!"</p>
        </div>
        <div>
          <img class='grid-item grid-item-8' src='https://images.unsplash.com/photo-1518717758536-85ae29035b6d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"You gunna finish that?"</p>
        </div>
        <div>
          <img class='grid-item grid-item-9' src='https://images.unsplash.com/photo-1535930891776-0c2dfb7fda1a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"We can't afford a cat!"</p>
        </div>
        <div>
          <img class='grid-item grid-item-10' src='https://images.unsplash.com/photo-1504595403659-9088ce801e29?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
          <p>"Dis my fren!"</p>
        </div>
      </div>
@endsection