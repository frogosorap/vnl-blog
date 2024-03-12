@extends('layouts.app')

@section('content')
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
    <div class="w-4/5 m-auto text-left">
        <div class="py-1">
            <h1 class="text-black-700 font-bold text-6xl pb-4">
                {{ $post->title }}
            </h1>
        </div>
        <div class="py-1">
            <h2 class="text-black-700 font-bold text-3xl pb-4">
                Playing as {{ $post->position }}
            </h2>
        </div>
        <div class="py-2">
        <span class="text-gray-500">
            Member of Team <span class="font-bold italic text-gray-800">{{ $post->team }} </span>
        </span>
        </div>
        <div class="py-2">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>
        </div>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
    </div>

    <div class="w-4/5 m-auto pt-0">
        
    </div>
</div>

@endsection 