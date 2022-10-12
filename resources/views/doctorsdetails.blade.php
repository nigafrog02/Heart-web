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

  <!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=1600');
    height: 400px;
  ">

    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3"> Meet our doctors! </h1>
        <h4 class="mb-3">They are very nice</h4>
        
      </div>
    </div>
  </div>
</div>
<!-- Hero -->

    <div class="container" style="margin-top: 90px;">
    <div class="card border-info">
  <div class="card-body">
    <h3 class="card-title">Dr. Hannah Esther</h3>
    <p class="card-text">Dr. Hannah Esther is U.K. certified has an experience of over 15 years in heart centre hospital</p>
    <p class="card-text">Preferred Language:English</p>
    <p class="card-text"><small class="text-muted">Specialise in Cardiology</small></p>
  </div>
  <img class="card-img-bottom" src="https://images.pexels.com/photos/5214955/pexels-photo-5214955.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Card image cap">
</div>
</div>

<div class="container" style="margin-top: 90px;">
    <div class="card border-info">
  <div class="card-body">
    <h3 class="card-title">Dr. Som Teng Wong</h3>
    <p class="card-text">Dr. Som Teng Wong is UM certified has an experience of over 25 years in heart centre hospital</p>
    <p class="card-text">Preferred Language:Chinese and English</p>
    <p class="card-text"><small class="text-muted">Specialise in Anesthesiologists</small></p>
  </div>
  <img class="card-img-bottom" src="https://images.pexels.com/photos/4173239/pexels-photo-4173239.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Card image cap">
</div>
</div>

<div class="container" style="margin-top: 90px;">
    <div class="card border-info">
  <div class="card-body">
    <h3 class="card-title">Dr. Aym Suu Tyred</h3>
    <p class="card-text">Dr. Aym Suu Tyred is UM certified has an exeprience of over 20 years in heart centre hospital </p>
    <p class="card-text">Preferred Language:English</p>
    <p class="card-text"><small class="text-muted">Specialise in Cardiology</small></p>
  </div>
  <img class="card-img-bottom" src="https://images.pexels.com/photos/2182979/pexels-photo-2182979.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Card image cap">
</div>
</div>




<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © made by:
    <a class="text-dark" href="WWW.heartcenter.com">Heart center healthcare providers</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection