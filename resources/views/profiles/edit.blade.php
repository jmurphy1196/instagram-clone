@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method("PATCH")
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Profile</h1>
            </div>
        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label">Title</label>

                           
                                <input name="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                                name="caption" value="{{ old('title') ?? $user->profile->title}}" 
                                 autocomplete="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label">Description</label>

                           
                                <input name="description" id="description" type="text" class="form-control @error('description') is-invalid @enderror" 
                                name="caption" value="{{ old('description') ?? $user->profile->description }}" 
                                 autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label">URL</label>

                           
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" 
                                name="url" value="{{ old('url') ?? $user->profile->url }}" 
                                 autocomplete="url">

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>
        </div>
        
       
    </div>
    <div  class="form-group row">
            <div style="position: relative; right: 10px;" class="col-8 offset-2" >
                    <label for="image" class="col-md-4 col-form-label">Profile Photo</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
            </div>

            

    <div class="form-group row pt-4">
           <div style="position: relative; right: 10px;" class="col-8 offset-2">
           <button class="btn btn-primary">Edit</button>
           </div>
        </div>

    
    </form>

</div>
@endsection
