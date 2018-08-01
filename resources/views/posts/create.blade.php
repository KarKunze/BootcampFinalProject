@extends('/layouts.app')

@section ('content')

<div class="container">

  <div class="card createPost">
    <div class="card-body text-white bg-secondary">
      <h3 class="card-title text-center">Write a post to share!</h3>
      <form method="POST" action="/posts" style="padding:20px">
        @CSRF
        @method('POST')
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" class="form-control" id="FormControlInput" name="title">
        </div>
        <div class="form-group">
          <label for="FormControlSelect">Category</label>
          <select class="form-control" id="category_id" name="category_id">
            <option disabled selected value> -- select a category -- </option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            <!-- <option value=2>music</option>
            <option value=3>food & drink</option>
            <option value=4>places to go</option>
            <option value=5>local businesses</option> -->
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="FormControlInput">Tags</label>
          <input type="text" class="form-control" data-role="tagsinput" id="tagPlaces" name="tagPlaces">
        </div>
        <div class="form-group">
          <label for="FormControlTextarea">Share your experience</label>
          <textarea class="form-control" id="body" name="body" rows="8" maxlength="970"></textarea>
        </div>
        <div class="form-group">
          <label for="FormControlFile">Image</label>
          <input type="file" class="form-control-file" id="FormControlFile" name="image">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-light mt-3">Submit Post</button>
        </div>
        @if (count($errors))
          <div class="form-group">
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        @endif
      </form>
    </div>
  </div>
</div>


@endsection
