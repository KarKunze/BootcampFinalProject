@extends('layouts.app')

@section('page-title', ('Local Businesses in the City'))

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
          <div class="card">
          @include('layouts.sidecolumn')
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card">
            <p>Entries go here</p>
          </div>
        </div>
    </div>
</div>

@endsection
