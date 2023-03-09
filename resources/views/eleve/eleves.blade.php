@extends('layouts.main')
   @section('content')
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">tous les élèves</h3>
                       
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                        <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card card-table">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0 datatable">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>noms</th>
                                       <th>Classe</th>
                                       <th>Naissance</th>
                                       <th>Tuteur</th>
                                       <th>telephone</th>
                                       <th>option</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                              @foreach($eleves as $eleve)
                                    <tr>
                                       <td>PRE2153</td>
                                       <td>
                                          <h2 class="table-avatar">
                                             <a href="student-details.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('storage/uploads/'.$eleve->image)}}" alt="User Image"></a>
                                             <a href="student-details.html">{{$eleve->name}}</a>
                                          </h2>
                                       </td>
                                       <td>{{$eleve->classe->class_name}}</td>
                                       <td>{{$eleve->date_birth}}</td>
                                       <td>{{$eleve->nom_tuteur}}</td>
                                       <td>{{$eleve->phone}}</td>
                                       <td>{{$eleve->option->option}}</td>
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="{{ route('show.eleve',['id'=>$eleve->id]) }}" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-eye"></i>
                                             </a>
                                             <a href="#" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                   
                              @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer>
               <p>Copyright © 2020 Dreamguys.</p>
            </footer>
         </div>
      </div>
 @endsection