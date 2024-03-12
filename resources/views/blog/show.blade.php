@extends('layouts.app')
<div class="marquee">
    <div>
      <span>🏆 VNL 2024 Finals The VNL 2024 Finals will be hosted in Thailand after the conclusion of the preliminary phase on June 16.</span>
      <span>🌍 VNL 2024 Schedule The VNL 2024 schedule includes matches across different pools, rounds, and genders, with various teams competing in different venues. Follow live matches and stay updated on the results.</span>
    </div>
  </div>
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
    <div class="comment-form">
        <h3 class="comment-heading">Please Leave A Comment!</h3>
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="space-y-4">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <input class="form-input" id="name" name="name" type="text" placeholder="Please Enter Your Name...">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <input class="form-input" id="email" name="email" type="email" placeholder="Please Enter your Email...">
                </div>
            </div>
            <div class="mb-6">
                <textarea class="form-input" id="comment" name="comment" rows="2" placeholder="Please Enter Comment..."></textarea>
            </div>
            <button type="submit" class="btn-primary hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Post Comment
            </button>
        </form>
    </div>
    <div class="comment-container">
        <div class="comment-wrapper">
            <p class="comment-title">COMMENTS</p>
            @foreach($post->comments as $comment)
                <div class="comment-box">
                    <p class="comment-author">By: {{ $comment->name }}</p>
                    <p class="comment-text">{{ $comment->comment }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>

@endsection 