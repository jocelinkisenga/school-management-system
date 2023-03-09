@extends('layouts.main')
@section('content')
      <div class="main-wrapper" >
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">créer un compte Eleve</h3>
                      
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form action=" {{ route('register.eleve') }} " method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>informations de l'eleve</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>nom et post-nom</label>
                                       <input type="text" name="name" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>prénom</label>
                                       <input type="text" name="suname" class="form-control">
                                    </div>
                                 </div>
                                 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Genre</label>
                                       <select class="form-control" name="gender">
                                          <option>le genre</option>
                                          <option value="f">Fille</option>
                                          <option value="m">Garçon</option>
                                          
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Date de naissance</label>
                                       <div>
                                          <input type="date" name="date_birth" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>classe</label>
                                       <select class="form-control" name="classe_id">
                                          <option>choix de la classe</option>
                                       @foreach($classes as $classe)
                                          <option value="{{ $classe->id }}">{{ $classe->class_name }} {{ $classe->option->option }}</option>
                                       @endforeach
                                          
                                       </select>
                                    </div>
                                 </div>
                                 
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>date d'inscription</label>
                                       <div>
                                          <input type="date" name="date_joined" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Telephone</label>
                                       <input type="text" name="phone" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>mots de passe</label>
                                       <input type="text" name="password" class="form-control">
                                    </div>
                                 </div>
                                   <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>section</label>
                                       <select class="form-control" name="option_id">
                                          <option>choix de l'option</option>
                                       @foreach($options as $option)
                                          <option value="{{ $option->id }}">{{ $option->option }}</option>
                                       @endforeach
                                          
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>photo</label>
                                       <input type="file" name="photo" class="form-control">
                                    </div>
                                 </div>

                                  <div class="col-12">
                                    <h5 class="form-title"><span>Ecole de provenance</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>nom de l'ecole</label>
                                       <input type="text" name="ecole_provenance" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>classe</label>
                                       <input type="text" name="classe_provenance"
                                        class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>pourcentage</label>
                                       <input type="text" name="pourcentage" class="form-control">
                                    </div>
                                 </div>
                              
                                
                                
                              


                                 <div class="col-12">
                                    <h5 class="form-title"><span>informations du tuteur</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>noms</label>
                                       <input type="text" name="nom_tuteur" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>profession</label>
                                       <input type="text" name="profession"  class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>telephone</label>
                                       <input type="text" name="tuteur_phone" class="form-control">
                                    </div>
                                 </div>
                              
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Addresse</label>
                                       <textarea name="addresse_tuteur" class="form-control"></textarea>
                                    </div>
                                 </div>
                               
                                 <div class="col-12">
                                    <button type="submit" class="btn btn-primary">enregistrer</button>
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
@endsection