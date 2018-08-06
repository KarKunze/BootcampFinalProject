@if ($flash = session('status'))
  <div id="flash-message" class="alert alert-success" role="alert">
    {{ $flash }}
  </div>
@endif
<div class="container" style="margin-top: 10px;">
  @foreach ($posts as $post)
<div class="row">
  <div class="row">
    <div class="col">
      <h3 style="margin-left: 20px;"><strong>{{ $post->title }}</strong></h3>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <div class="text-center">
        @if ($post->image)
        <img class="mx-auto d-block post-image" src="{{ asset("storage/$post->image") }}" alt="">
        @else
        <img class="mx-auto d-block post-image" src="/storage/walkinghorse.png" alt="">
        @endif
      </div>
    </div>
    <div class="col-lg-5">{{ $post->body }}</div>
  </div>

  <div class="row" id="post-footer">
    <p style="margin-left: 20px;" id="postfooter-text"> by {{ $post->user_name() }} | {{ $post->created_at->toFormattedDateString() }} | <i class="fas fa-tags"></i> {{ $post->category_name() }} |  <i class="fa fa-thumbs-up" aria-hidden="true"></i> |
      <button class="btn-sm btn-outline-primary ml-3"><a href= "/posts/{{ $post->id }}/edit">edit</a></button>
      <form action="/posts/{{ $post->id }}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn-sm btn-outline-danger ml-3" type="submit">delete</button></p>
      </form>
  </div>

</div>
</div>
@endforeach
  <div class="row justify-content-center" id="paginate">
    {{ $posts->links() }}
  </div>
</div>
