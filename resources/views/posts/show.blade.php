@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
             <img class="w-100" src="/storage/{{ $post->image }}" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img style="max-width: 40px;" class=" rounded-circle w-100" src="/storage/{{ $post->user->profile->image ?? 'profile/blank.png' }}" alt="">
                    </div>
                    <div class="font-weight-bold">
                        <a style="text-decoration: none; color: black;" href="/profile/{{ $post->user->id }}">{{$post->user->username}}</a>
                        <a href="#" class="pl-3">Follow</a>
                    </div>
                </div>
                <hr>
                <p>
                       <a style="text-decoration: none; color: black;" href="/profile/{{ $post->user->id }}"><span class="font-weight-bold">{{$post->user->username}} </span></a>
                        {{$post->caption}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
