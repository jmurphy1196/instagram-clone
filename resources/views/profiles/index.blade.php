@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img style="height: 150px; width: 150px; " class="rounded-circle" src="/storage/{{ $user->profile->image ?? 'profile/blank.png'   }}" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4 font-weight-bold">{{$user->username}}</div>
                    <follow-btn></follow-btn>
                </div>
                @can("update", $user->profile)
                <a href="/p/create">Add new post</a>
                @endcan
            </div>
           @can('update', $user->profile)
           <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
           @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="https://my-portfolio-jason.herokuapp.com/">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
           <a href="/p/{{ $post->id }}">
             <img style="object-fit: cover;" class="w-100 h-100" src="/storage/{{ $post->image }}" alt="">
           </a>
        </div>
        @endforeach
      
     
    </div>
</div>
@endsection
