@extends('layouts.home')


@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags (css) -->
    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
        @include('admin.sidebar')
      
      <!-- partial navbar -->
      
        @include('admin.navbar')
      
      <!-- partial body -->
        
      <div class="card-body" style="background-color:black;">

        @if(session()->has('message'))

          <div class="alert alert-sucess" style="color:blue">

            <button type="button" class="close" data-dismiss="alert" style="color:blue">
              x
            </button>
            
            {{session()->get('message')}}

          </div>

        @endif

        <form method="POST" action="{{ url('storeAgent') }}" enctype="multipart/form-data">
        
        @csrf

          <div class="form-group">
            <label for="exampleInputName1">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputName1" placeholder="Prenom" style="color:white">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputName1" placeholder="Nom" style="color:white">
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Profil</label>
            <select name="role" class="form-control" id="exampleSelectGender" style="color:white">
              <option selected>medecin</option>
              <option>dentiste</option>
              <option>sagefemme</option>
              <option>secretaire</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Addresse Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email" style="color:white">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword4">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password" style="color:white">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-dark">Cancel</button>
          </div>

        </form>
      </div>
    
      <!-- container-scroller -->

    <!-- plugins:js (script) -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>

@endsection