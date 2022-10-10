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
    background-image: url('https://images.pexels.com/photos/2080544/pexels-photo-2080544.jpeg?auto=compress&cs=tinysrgb&w=1600');
    height: 400px;
  ">

    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3"> Consult us </h1>
        <h4 class="mb-3">before it's too late</h4>
        <a class="btn btn-outline-light btn-lg" href="#!" role="button">Book appoinment now!</a>
      </div>
    </div>
  </div>
</div>
<!-- Hero -->
</header>
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 ">
<div class="col">
<div class="card border-primary mb-3 mx-auto" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/9162030/pexels-photo-9162030.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>
<div class="col">
<div class="card border-danger mb-3 mx-auto" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/887349/pexels-photo-887349.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>
<div class="col">
<div class="card border-info mb-3 mx-auto" style="width: 18rem;">
  <img src="https://images.pexels.com/photos/3786166/pexels-photo-3786166.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  </div>
</div>
</div>

<div class="container" style="margin-top :40px;">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img class="card-img-bottom" src="..." alt="Card image cap">
</div>
</div>






<div class="container" style="margin-top :40px;">
    <div class="text-center"><h5>Plan your visit📍</h5></div>
    <div class="mapouter mx-auto"><div class="gmap_canvas"><iframe width="1080" height="513" id="gmap_canvas" src="https://maps.google.com/maps?q=inti%20penang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:513px;width:1080px;}</style><a href="https://www.embedgooglemap.net">embedded google search</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:513px;width:1080px;}</style>
    </div>
</div>    
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
