@extends('layouts.app')
@section('content')
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="/home">Home🏠   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/patientbookapp"> Book appointment📅   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/doctorsdetails"> Doctors on-call🧑‍⚕️   |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> My appointment🗓️   |</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
    <div class="container" style="margin-top: 90px;">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> name</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection