@extends('layouts.app')

@section('content')

<div class="mx-auto w-4/5">
    <h1 class="text-5xl text-gray-800 font-bold pt-12 mb-8">
        Shop
    </h1>

    <hr class="border-1 border-gray-300">
</div>

<div class="grid sm:grid-cols-4 gap-8 pt-20 mx-auto w-4/5">

    @foreach ($products as $key=>$prod)
    <div class="mx-auto">
        <img
            src="{{asset($prod->image_path)}}"
            alt="{{$prod->name}}"
            style="height:200px !important;">

        <h2 class="text-xl text-gray-600 font-bold pb-8">
            {{$prod->name}}
        </h2>

        <p class="font-thin text-xs text-black pb-8">
            {{$prod->details}}
        </p>

        <p class="font-bold text-l text-black pb-8">
           Price: <span class="text-red-500">$ {{$prod->price}}</span>
        </p>

        <a  href="/shop/{{$prod->id}}"
            class="px-6 py-2 text-l uppercase text-white font-bold bg-blue-600 rounded-full w-full">
            Read more...
        </a>
    </div>

    @endforeach

</div>
@endsection
