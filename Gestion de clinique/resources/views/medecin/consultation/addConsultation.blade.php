<!doctype html>
<html lang="en">

<head>

      <base href="/public">
      
      @include('medecin.includes.css')

</head>

<body>
      <!--header start-->

      @include('medecin.includes.header', ['title' => "Ajout consultation",'icone'=>'bi bi-clipboard2-plus'])

      <!--header end-->

<!-- **********************************************************************************************************************************************************-->

    <!--sidebar start-->

        

    <!--sidebar end-->

<!-- **********************************************************************************************************************************************************-->

    <!--main content start-->

      <div class="tab-content">
         <div>
            <h1 style="background-color: #DCE5F5 ; text-align:center">Consultation</h1>
         </div>
         <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
               <div class="card-body">
                     <h5 class="card-title">Etat civil</h5>
                     <form method="Post" action="{{ url('storeConsult') }}" enctype="multipart/form-data">

                     @csrf

                        <input type="hidden" name="idPat" value="{{ $id }}"/>
                        @foreach($rv as $rvv)
                        <input type="hidden" name="motifRv" value="{{ $rvv->motifRV }}"/>
                        @endforeach

                        <div class="form-row">
                           <div class="col-md-6">
                                 <div class="position-relative form-group">
                                       <label for="id" class="">N° Patient</label>
                                       <input name="id" id="id" placeholder="{{ $id }}" type="number" class="form-control" readonly>
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="position-relative form-group">
                                       <label for="id" class="">Prénom</label>
                                       <input name="prenom" class="form-control " type="text" placeholder="{{$prenom}}" readonly>
                                 </div>
                           </div>
                        </div>
                        
                        <div class="form-row">
                           @foreach($rv as $r)
                           <div class="col-md-6">
                                 <div class="position-relative form-group">
                                       <label for="motif" class="">Motif</label>
                                       <input name="motif" id="motif" placeholder="{{ $r->motifRV }}" type="text" class="form-control" readonly>
                                 </div>
                           </div>
                           @endforeach
                           <div class="col-md-6">
                                 <div class="position-relative form-group">
                                       <label for="diagnostique" class="">diagnostique</label>
                                       <textarea name="diag" class="form-control" id="diagnostique" rows="3" placeholder="taper du texte ici"></textarea>
                                 </div>
                           </div>
                        </div>
                        <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="taille" class="">Taille</label>
                                          <input name="taille" id="taille" placeholder="taille" type="decimal" class="form-control">
                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="poids" class=""> Poids </label>
                                          <input name="poids" id="poids" placeholder="poids" type="decimal" class="form-control">
                                    </div>
                              </div>
                        </div>
                        <div class="form-row">
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="tension" class="">Tension</label>
                                          <input name="tens" id="tension" placeholder="tension" type="decimal" class="form-control">
                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="temperature" class=""> Temperature </label>
                                          <input name="temp" id="temperature" placeholder="temperature" type="decimal" class="form-control">
                                    </div>
                              </div>
                        </div>
                        <div class="form-row">
                              <!--<div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="diagnostique" class="">Diagnostique</label>
                                          <input name="diag" id="diagnostique" placeholder="diagnostique" type="text" class="form-control">
                                    </div>
                              </div>-->
                              <div class="col-md-6">
                                    <div class="position-relative form-group">
                                          <label for="evolution" class=""> Evolution </label>
                                          <input name="evol" id="evolution" placeholder="evolution" type="text" class="form-control">
                                    </div>
                              </div>
                        </div>
                        
                        <div class="form-group">
                              <div class="col-md-6">
                                    <button type="submit">Save</button>
                                    <button type="button">Cancel</button>
                              </div>
                        </div>

                     </form>
               </div>
            </div>
         </div>
      </div>
      @include('medecin.includes.footer')

      <!--main content end-->

</body>
</html>