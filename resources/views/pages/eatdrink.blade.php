@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <!-- <h1 class="display-2">Moody in the City</h1> -->
    <h2 class="lead">Your unofficial guide to Lexington, Fayette County, and beyond.</h2>
  </div>
</div>
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                Promoting our local arts, music,<br>events, places, and businesses
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Art</li>
                <li class="list-group-item">Music</li>
                <li class="list-group-item">Places</li>
                <li class="list-group-item">Eat and Drink</li>
                <li class="list-group-item">Local Business</li>
              </ul>
            </div>
            <div class="card" style="margin-top: 30px; margin-bottom: 30px;">
              <div class="card-body">
                <div class="responsiveCal">
                <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=moodyinthecity%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>

                <div class="responsiveCal">
                <iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=moodyinthecity%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card">
              <p>Entries go here</p>
            </div>
          </div>
      </div>
  </div>

</div>
@endsection
