
<div class="container">
@foreach ($posts as $post)
<div class="row">
  <div class="row">
    <div class="col">
      <h3><strong><a href="#">{{ $post->title }}</a></strong></h3>
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
    <p> by {{ $post->user_name() }} | {{ $post->created_at }} | likes | Category: {{ $post->category_name() }} | tags | <button>edit</button><button>delete</button></p>
  </div>

</div>
</div>
@endforeach

</div>
