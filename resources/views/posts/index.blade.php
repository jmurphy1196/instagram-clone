@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
             <a style="text-decoration: none; color: black;" href="/p/{{ $post->id }}"><img class="w-100" src="/storage/{{ $post->image }}" alt=""></a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p>
                       <a style="text-decoration: none; color: black;" href="/profile/{{ $post->user->id }}"><span class="font-weight-bold">{{$post->user->username}} </span></a>
                        {{$post->caption}}
                </p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
