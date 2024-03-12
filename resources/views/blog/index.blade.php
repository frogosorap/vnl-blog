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
                Blog Posts
            </h1>
        </div>
    </div>
</div>

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>
@endif

<form action="{{ route('blog.index') }}" method="GET" class="w-4/5 m-auto mt-5 text-right">
    <label for="sort">Sort by:</label>
    <select name="sort" id="sort" onchange="this.form.submit()">
        <option value="">Select</option>
        <option value="team_asc" @if(request('sort') == 'team_asc') selected @endif>Team (Ascending)</option>
        <option value="team_desc" @if(request('sort') == 'team_desc') selected @endif>Team (Descending)</option>
        <option value="date_asc" @if(request('sort') == 'date_asc') selected @endif>Date (Ascending)</option>
        <option value="date_desc" @if(request('sort') == 'date_desc') selected @endif>Date (Descending)</option>
    </select>

    <label for="team">Filter by team:</label>
    <select name="team" id="team" onchange="this.form.submit()">
        <option value="">All team</option>
        @foreach($teams as $team)
            <option value="{{ $team }}" @if(request('team') == $team) selected @endif>{{ $team }}</option>
        @endforeach
    </select>
</form>

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h1 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h1>
        </br>
        <h2 class="text-black-700 font-bold text-3xl pb-4">
            Position: {{ $post->position }}
        </h2>

            <span class="text-gray-500">
                Team: <span class="font-bold italic text-gray-800">{{ $post->team }}</span>
            </span>
            
        </br>
        <span class="text-gray-500">
            By: <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="btn-primary">
                KEEP READING
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection