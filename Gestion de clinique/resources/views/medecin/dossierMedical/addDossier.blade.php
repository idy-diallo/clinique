<!doctype html>
<html lang="en">

<head>

<base href="/public">
    @include('medecin.includes.css')

</head>

<body>
    <!--header start-->

   @include('medecin.includes.header',['title'=>'Creer Dossier','icone'=>'bi bi-clipboard2-plus-fill'])

   <!--header end-->

<!-- **********************************************************************************************************************************************************-->

<!--sidebar start-->

    

   <!--sidebar end-->

<!-- **********************************************************************************************************************************************************-->

<!--main content start-->
   <div class="app-main__outer">
      <div class="app-main__inner"> 
         <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-9"> 
               <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                  <li class="nav-item">
                        <a role="tab" class="nav-link active" id="tab-1" data-toggle="tab" href="#tab-content-0">
                           <span><u>Traitement medicamentaux</u></span>
                        </a>
                  </li>
                  <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                           <span><u>Analyse</u></span>
                        </a>
                  </li>
                  <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                           <span><u>Vaccin</u></span>
                        </a>
                  </li>
                  <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-0" data-toggle="tab" href="#tab-content-3">
                           <span><u>Radio</u></span>
                        </a>
                  </li>
                  <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-0" data-toggle="tab" href="#tab-content-4">
                           <span><u>Antécédent</u></span>
                        </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
               <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-9">
                     <div class="main-card mb-3 card">
                        <div class="card-body">
                           <h5 class="card-title">Ordonnance</h5>
                           <form form methode="POST" action="{{ url('addMed') }}" enctype="multipart/form-data">
                           @csrf
                              
                                    <input type="hidden" name="numTrait" value="{{ $numTrait }}" />
                              
                              <!--
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <label for="" class="">Date de traitement</label>
                                    <input name="dateTrait" id="today" type="date" class="form-control">
                                 </div>
                              </div>
                              -->
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <label for="medicament" class="">Medicament</label>
                                    <input name="medicament" id="medicament" placeholder="Nom de medicament" type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <label for="quant" class="">Quantité</label>
                                    <input name="quant" id="quant" placeholder="quantité" type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <label for="posologie" class="">Posologie</label>
                                    <input name="posologie" id="posologie" placeholder="posologie" type="text" class="form-control">                                 
                                 </div>
                              </div>
                              
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                 <input type="submit" name="Ajouter" value="Ajouter" style="color:white; background:blue; text:center; position:relative; left:300px;" />
                                 </div>
                              </div>
                              
                           </form>

                              <table style="position:relative; width:500px; left:40px">
                                 <tr style="position:relative; padding:80px;">
                                    <td><a href="{{ url('addMed') }}"><button type="button" class="btn btn-success">Terminer</button></a></td>
                                 </tr>
                              </table>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
               <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-9">
                     <div class="main-card mb-3 card">
                        <div class="card-body">
                           <h5 class="card-title">Analyse</h5>
                           <form methode="POST" action="{{ url('storeAnalyse') }}" enctype="multipart/form-data">
                           @csrf
                              
                              <input type="hidden" name="idPres" value="{{ $idPres }}" />
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <label for="analyse" class="">Type d'analyse</label>
                                    <input name="analyse" id="analyse" placeholder="analyse" type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <label for="resultat" class="">Resultat</label>
                                    <textarea name="resultat" class="form-control" id="resultat" rows="3"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <input type="submit" name="Enregistrer" value="Enregistrer" style="color:white; background:blue; text:center; position:relative; left:250px;" />
                                 </div>
                              </div>
                              
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
               <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-9">
                     <div class="main-card mb-3 card">
                        <div class="card-body">
                           <h5 class="card-title">Vaccin</h5>
                           <form methode="POST" action="{{ url('storeVaccin') }}" enctype="multipart/form-data">
                           @csrf
                              
                              <input type="hidden" name="idPres" value="{{ $idPres }}" />
                              <div class="col-md-12">
                              <div class="position-relative form-group">
                                 <label for="" class="">Date de vaccin</label>
                                 <input name="dateVac" id="today" type="date" class="form-control">
                              </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <label for="description" class="">Description</label>
                                    <textarea name="desc" class="form-control" id="description" rows="3"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <input type="submit" name="Enregistrer" value="Enregistrer" style="color:white; background:blue; text:center; position:relative; left:250px;" />
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
               <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-9">
                     <div class="main-card mb-3 card">
                        <div class="card-body">
                           <h5 class="card-title">Radio</h5>
                           <form methode="POST" action="{{ url('storeRadio') }}" enctype="multipart/form-data">
                           @csrf
                              
                              <input type="hidden" name="idPres" value="{{ $idPres }}" />
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                       <label for="radio" class="">Type de radio</label>
                                       <input name="radio" id="radio" placeholder="radio" type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                       <label for="resultat" class="">Resultat</label>
                                       <textarea name="resultat" class="form-control" id="resultat" rows="3"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <input type="submit" name="Enregistrer" value="Enregistrer" style="color:white; background:blue; text:center; position:relative; left:250px;" />
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="tab-pane tabs-animation fade" id="tab-content-4" role="tabpanel">
               <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-9">
                     <div class="main-card mb-3 card">
                        <div class="card-body">
                           <h5 class="card-title">Antécédent</h5>
                           <form methode="POST" action="{{ url('storeAnt') }}" enctype="multipart/form-data">
                           @csrf
                              
                              <input type="hidden" name="idPres" value="{{ $idPres }}" />
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                       <label for="cat" class="">Catégorie Antécédent</label>
                                       <input name="cat" id="radio" placeholder="catégorie" type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                       <label for="descrip" class="">Description</label>
                                       <textarea name="descrip" class="form-control" id="descrip" rows="3"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="position-relative form-group">
                                    <input type="submit" name="Enregistrer" value="Enregistrer" style="color:white; background:blue; text:center; position:relative; left:250px;" />
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

    <!--main content end-->
    
    @include('medecin.includes.footer')
    <script>
      let today = new Date().toISOString().substr(0, 10);
      document.querySelector("#today").value = today;
    </script>

</body>

</html>