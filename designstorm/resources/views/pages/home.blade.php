@extends('layouts/main')

@section('title')
 GovernmentWala
@endsection


@section('content')

  <div id="site-section">
    <div class="container">
      <div id="home">
        <div class="search-area">
          <div class="search-container">
            <form action="/results" method="POST">
              {{ csrf_field() }}
              <h1>GovernmentWala</h1>
              <input class="search" type="text" value="" placeholder="Search" name="search">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

