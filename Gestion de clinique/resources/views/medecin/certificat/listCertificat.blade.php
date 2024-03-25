@extends('layouts.app')

@section('content')

@include('layouts.acceuil')
@include('medecin.includes.header',['title'=>'Certificat','icone'=>'bi bi-file-earmark-plus-fill'])
   <h1> Bienvenu dans la page list certificat</h1>
@include('medecin.includes.footer')

@endsection 