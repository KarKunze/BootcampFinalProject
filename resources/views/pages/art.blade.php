@extends('layouts.app')

@section('content')
<div class="container-fluid">

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
                <h5 class="card-title">Calendar</h5>
                <p class="card-text">xxxxx</p>
                <p class="card-text">xxxxx</p>
                <p class="card-text">xxxxx</p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Calendar </h5>
                <p class="card-text">Featured events</p>
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
