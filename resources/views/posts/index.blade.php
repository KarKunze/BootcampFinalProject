@if ($flash = session('status'))
  <div id="flash-message" class="alert alert-success" role="alert">
    {{ $flash }}
  </div>
@endif
<h5 class="card-header" style="text-right">Community Posts</h5>

<div class="container" style="margin-top: 10px;">

  @foreach ($posts as $post)
<div class="row">
  <div class="row">
    <div class="col">
      <h3 style="margin-left: 20px;"><strong>{{ $post->title }}</strong></h3>
    </div>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg">
      <div class="text-center">
        @if ($post->image)
        <img class="mx-auto d-block post-image" src="{{ secure_asset("https://s3.us-east-2.amazonaws.com/moodyinthecity/$post->image") }}" alt="">
        @else
        <img class="mx-auto d-block post-image" src="{{ asset('/images/walkinghorse.png') }}" alt="">
        @endif
      </div>
    </div>
    <div class="col-lg">{{ $post->body }}</div>
  </div>

  <div class="row" id="post-footer">
    <p style="margin-left: 20px;" id="postfooter-text"> by {{ $post->user_name() }} | {{ $post->created_at->toFormattedDateString() }} | <i class="fas fa-tags"></i> {{ $post->category_name() }} |  </p>
      @auth
      @if (\Auth::user()->role_id == 1 || $post->creator_id == \Auth::user()->id)
      <p><button class="btn-sm btn-outline-primary ml-3"><a href= "/posts/{{ $post->id }}/edit"><i class="fas fa-pencil-alt"></i></a></button>
      <form action="/posts/{{ $post->id }}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn-sm btn-outline-danger ml-3" type="submit"><i class="far fa-trash-alt"></i></button></p>
      </form>
      @endif
      @endauth
  </div>

</div>
</div>
@endforeach
  <div class="row justify-content-center" id="paginate">
    {{ $posts->links() }}
  </div>
</div>


<!-- <i class="fa fa-thumbs-up" aria-hidden="true"></i> |  -->
