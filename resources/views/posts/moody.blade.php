
<!-- <div class="container"> -->

  <h5 class="card-header">Welcome to Moody in the City</h5>
<div class="row" id="moodycard">
  <div class="col-md-6">
    <div class="row justify-content-center mb-2">
      <h5>Jerry Moody, your guide to Moody in the City.</h5>
    </div>
    <div class="row justify-content-center">
      <img src="/storage/moodypath.jpg" class="img" height="300" width="400">
    </div>
  </div>
  <div class="col-md-6">
    <br>
    <p>Welcome! Thanks for visiting! Here at Moody in the City, we are collaborating on a community hub meant to highlight what makes our city special. We'd like to be an online visitor's center that highlights those places either popular or not, on the beaten path or off, that you'd like to share. Not just with your friends, but with anyone that would like to discover the parts of our community with which they are not as familiar. That favorite shop, restaurant, band, artist, or event you think is awesome? Share it with us here! Just register, log in, click on create a post at the top, and start sharing!<br><br>Thanks for joining me on this new journey!</p>

  </div>
</div>

<!-- </div> -->

<div class="card" style="margin-top: 5px;">
  <h5 class="card-header" id="square">Featured Video</h5>
    <div class="embed-responsive embed-responsive-16by9">
    <iframe width="400" height="300" src="https://www.youtube.com/embed/K1th6nSWA7E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</div>


<div class="card" style="border: 0">
<h5 class="card-header" id="square">Featured Post</h5>
<div class="container" style="margin-top: 5px;">
  @foreach ($posts as $post)
<div class="row">
  <div class="row">
    <div class="col">
      <h3 style="margin-left: 10px;" id="featured"><strong>{{ $post->title }}</strong></h3>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="text-center">
        @if ($post->image)
        <img class="mx-auto d-block post-image" src="{{ asset("storage/$post->image") }}" alt="">
        @else
        <img class="mx-auto d-block post-image" src="/storage/walkinghorse.png" alt="">
        @endif
      </div>
    </div>
    <div class="col-md">{{ $post->body }}</div>
  </div>

  <div class="row" id="post-footer">
    <p id="postfooter-text"  style="margin-left: 10px;"> by {{ $post->user_name() }} | {{ $post->created_at->toFormattedDateString() }} | <i class="fas fa-tags"></i> {{ $post->category_name() }} |  <i class="fa fa-thumbs-up" aria-hidden="true"></i> |
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
  <div class="row justify-content-center" id="paginate" href="#featured">
    {{ $posts->fragment('featured')->links() }}
  </div>
</div>
</div>
