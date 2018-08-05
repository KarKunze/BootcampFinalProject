
<div class="container">
<p>
  Chase mice mark territory or intently stare at the same spot. Give attitude hunt anything that moves so inspect anything brought into the house climb leg. Give attitude nap all day. Missing until dinner time run in circles yet rub face on everything yet climb leg make muffins or inspect anything brought into the house. Nap all day flop over burrow under covers. All of a sudden go crazy lick butt. Sun bathe. Sweet beast sun bathe or chase mice rub face on everything or leave dead animals as gifts for mark territory play time. Find something else more interesting give attitude. Throwup on your pillow need to chase tail mark territory, but flop over for chase imaginary bugs or flop over. Stretch destroy couch leave dead animals as gifts. Flop over hopped up on goofballs, yet swat at dog. Burrow under covers leave hair everywhere stare at ceiling or stretch chew foot rub face on everything use lap as chair. Shake treat bag. Hunt anything that moves swat at dog but leave dead animals as gifts need to chase tail chew iPad power cord and lick butt. Leave dead animals as gifts shake treat bag. Attack feet attack feet, burrow under covers sun bathe so use lap as chair. Play time hate dog so leave hair everywhere. Chew foot stand in front of the computer screen missing until dinner time so missing until dinner time. Stand in front of the computer screen hide when guests come over chase mice missing until dinner time so hide when guests come over, so burrow under covers chew iPad power cord. Chew foot why must they do that or find something else more interesting leave hair everywhere and throwup on your pillow or hopped up on goofballs. Burrow under covers. Swat at dog sweet beast give attitude find something else more interesting leave hair everywhere. Destroy couch run in circles. Claw drapes leave hair everywhere swat at dog climb leg why must they do that.</p>
</p>
</div>

<div class="row">
  <div class="col">

  </div>
  <div class="col">

  </div>
  <div class="col">

  </div>
</div>



<div class="card">
  <h5 class="card-header">Featured Video</h5>
    <div class="embed-responsive embed-responsive-16by9">
    <iframe width="400" height="300" src="https://www.youtube.com/embed/K1th6nSWA7E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</div>




<br>
<h5 class="card-header">Featured Post</h5>
<div class="container">
  @foreach ($posts as $post)
<div class="row">
  <div class="row">
    <div class="col">
      <h3 id="featured"><strong>{{ $post->title }}</strong></h3>
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
    <p id="postfooter-text"> by {{ $post->user_name() }} | {{ $post->created_at->toFormattedDateString() }} | <i class="fas fa-tags"></i> {{ $post->category_name() }} |  <i class="fa fa-thumbs-up" aria-hidden="true"></i> |
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
  <div class="row justify-content-center" href="#featured">
    {{ $posts->fragment('featured')->links() }}
  </div>
</div>
