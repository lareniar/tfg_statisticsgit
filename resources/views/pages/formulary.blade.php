@extends('layouts.app', ['activePage' => 'formulary', 'titlePage' => __('formulary')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Creaate Project</h4>
        <p class="card-category">Created using Roboto Font Family</p>
      </div>
      <div class="card-body">
        <div id="app">
          <projects-form csrf="{{ csrf_token()}}"> </projects-form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection