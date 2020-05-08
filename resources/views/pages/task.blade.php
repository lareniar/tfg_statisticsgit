@extends('layouts.app', ['activePage' => 'task', 'titlePage' => __('task')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Create Task</h4>
        <p class="card-category">Created using Roboto Font Family</p>
      </div>
      <div class="card-body">
        <div id="app">
          <tasks-form csrf="{{ csrf_token()}}"> </projects-form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection