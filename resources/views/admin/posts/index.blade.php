@extends('layouts.admin')

@section('content')

<div class="container my-3">
    <h1 class="text-center pb-3">Posts List</h1>
    <div class="row g-4">
        {{-- <div>
            <a href="{{route("comics.create")}}" class="btn btn-primary">Create Comic Book</a>
        </div> --}}
        <div class="d-flex flex-wrap">
            @foreach ($posts as $post)
                <div class="w-50 p-3 border border-2 rounded">
                    {{-- <h4 class="text-center"><a href="{{route("comics.show",$comic->id)}}">{{$comic->title}}</a></h4> --}}
                    <h4 class="text-center">{{$post->title}}</h4>
                    <div class="py-3 text-center imgBox">
                        <img class="w-75" src="{{$post->image}}" alt="">
                    </div>
                    <p class="pt-3 text-center">{{$post->content}}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>


@endsection