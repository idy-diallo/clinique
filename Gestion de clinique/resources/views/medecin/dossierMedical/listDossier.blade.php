<!doctype html>
<html lang="en">

<head>

    @include('medecin.includes.css')

</head>

<body>
    <!--header start-->

    @include('medecin.includes.header',['title'=>'List Dossier','icone'=>'bi bi-clipboard-minus-fill'])

  <!--header end-->

  <!-- **********************************************************************************************************************************************************-->

  <!--sidebar start-->

      

  <!--sidebar end-->

  <!-- **********************************************************************************************************************************************************-->

  <!--main content start-->



  <table class="table table-bordered border-primary">
    <thead>
        <tr>
          <th>n°Fiche Patient</th>
          <th>Nom patient</th>
          <th>Prenom Patient</th>
          <th>Profession</th>
          <th> Date de creation </th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->nom}}</td>
        <td>{{$user->prenom}}</td>
        <td>Profession</td>
        <td>{{$user->created_at}}</td>
        <td>
            <a href="{{ url('detailDossier',$user->id) }}">  <button type="button" class="btn btn-outline-info">Detail</button> </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


  <!--main content end-->
      
  @include('medecin.includes.footer')

</body>

</html>