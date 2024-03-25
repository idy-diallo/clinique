@extends('layouts.home')


@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
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
      
      <!-- partial -->
      
        @include('admin.navbar')
      
      <!-- partial -->
            
      <div class="card-body" style="background-color:black;">

              @if(session()->has('message'))

                <div class="alert alert-sucess" style="color:blue">

                  <button type="button" class="close" data-dismiss="alert" style="color:blue">
                    x
                  </button>
                  
                  {{session()->get('message')}}

                </div>

              @endif

              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><u>Liste des Agents</u></h4>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> Prenom </th>
                            <th> Nom </th>
                            <th> Role </th>
                            <th> E-mail </th>
                            <th colspan="2" style="text-align:center"> Action </th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $agent)

                          <tr class="table-info">
                            <td> {{$agent->prenom}} </td>
                            <td> {{$agent->nom}} </td>
                            <td> {{$agent->role}} </td>
                            <td> {{$agent->email}} </td>
                            <td> 
                                <a onclick="return confirm('Ëtes-vous sûre de vouloir supprimer cet agent')" 
                                    class="btn btn-danger" href="{{ url('destroyAgent',$agent->id) }}"> 
                                    Delete 
                                </a> 
                            </td>
                            <td> <a class="btn btn-primary" href="{{ url('editAgent',$agent->id) }}"> Update </a> </td>
                          </tr>

                        @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
      <!-- container-scroller -->

    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>

@endsection
