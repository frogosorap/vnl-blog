@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <input 
            type="position"
            name="position"
            placeholder="Position..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">


            <label for="team" class="text-chooseteam">Choose a team:</label>
            <select name="team" id="genre" class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

                <option value="Japan">Japan</option>
                <option value="USA">USA</option>
                <option value="Brazil">Brazil</option>
                <option value="Poland">Poland</option>
                <option value="Slovenia">Slovenia</option>
                <option value="China">China</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="France">France</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Germany">Germany</option>
                <option value="Italy">Italy</option>
                <option value="Serbia">Serbia</option>
                <option value="Canada">Canada</option>
                <option value="Cuba">Cuba</option>
                <option value="Iran">Iran</option>
                <option value="Argentina">Argentina</option>
            </select>

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

        <div class="bg-grey-lighter pt-15">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection