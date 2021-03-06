@extends('layouts.app')

@section('page-title', ('Moody in the City'))

@section('page-id', ('edit'))

@section ('content')
@if ($flash = session('status'))
  <div id="flash-message" class="alert alert-success" role="alert">
    {{ $flash }}
    <br>
    <a class="btn-sm btn-secondary mt-2" href='/' role="button">Home</a>
  </div>
@endif
<div class="container">
  @if (count($errors))
    <div class="form-group">
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            <li>Please limit image uploads to 2 MB.</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif
  <div class="card editPost">
    <div class="card-body text-white bg-secondary">
      <h4 class="card-title text-center">Edit your post</h4>
      <form method="POST" action="/posts/{{ $post->id }}" enctype="multipart/form-data" style="padding:20px">
        @CSRF
        @method('PATCH')
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" class="form-control" id="FormControlInput" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
          <label for="FormControlSelect">Category</label>
          <select class="form-control" id="category_id" name="category_id" value="{{ $post->category_id }}" required>
            <option disabled selected value> -- select a category -- </option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ ($post->category_id == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="FormControlTextarea">Edit your experience</label>
          <textarea class="form-control" id="body" name="body" rows="8" maxlength="970" value="{{ $post->body }}" required>{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
          <img class="mx-auto d-block post-image" src="{{ secure_asset("https://s3.us-east-2.amazonaws.com/moodyinthecity/$post->image") }}" alt="">
          <label for="FormControlFile">Add image (optional, 2MB or less)</label>
          <input type="file" class="form-control-file" id="FormControlFile" name="image">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-light mt-3">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection
