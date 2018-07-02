@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <!-- <h1 class="display-4">Fluid jumbotron</h1> -->
    <p class="lead">This might have pictures with links to separate pages</p>
  </div>
</div>
  <div class="container">
      <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                Featured
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
            </div>
            <div class="card" style="margin-top: 30px;">
              <div class="card-body">
                <div class="responsiveCal">
                <iframe src="https://calendar.google.com/calendar/b/1/embed?showPrint=0&amp;showTabs=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=moodyinthecity%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>
              </div>
            </div>
            <div class="card" style="margin-bottom: 30px;">
              <div class="card-body">
                <div class="responsiveCal">
                <iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=moodyinthecity%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
              Entries go here
          </div>
      </div>
  </div>

</div>
@endsection
