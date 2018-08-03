
<div class="container">
@foreach ($posts as $post)
<div class="row">
  <div class="row">
    <div class="col">
      <h3><strong>{{ $post->title }}</strong></h3>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <a href="#" class="image">
           <img src="http://placehold.it/360x230" alt="">
       </a>
    </div>
    <div class="col-md">{{ $post->body }}</div>
  </div>

  <div class="row" id="post-footer">
    <p id="postfooter-text"> by {{ $post->user_name() }} | {{ $post->created_at->toFormattedDateString() }} | <strong>Category: </strong>{{ $post->category_name() }} | <i class="fas fa-tags"></i> {{ $post->tag }} | <i class="fa fa-thumbs-up" aria-hidden="true"></i> |
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

</div>
