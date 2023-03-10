@extends('layouts.main')
@section('content')
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Subjects</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Subjects</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                       
                        <a href="{{route('create.course')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                      
                                       <th>nom</th>
                                       <th>option</th>
                                       <th>classe</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                              @foreach ($courses as $key => $item)
                              <tr>
                                      
                                 <td>
                                    <h2>
                                       <a>{{$key+1}}</a>
                                    </h2>
                                 </td>
                                
                                @if ($item->course_id != null)
                                <td class=" bg-primary">{{$item->name}}</td>
                                @else
                                <td class="">{{$item->name}}</td>
                                @endif
                                 <td>{{$item->option->option}}</td>
                                 <td>{{$item->classe->class_name}}</td>
                                 <td class="text-right">
                                    <div class="actions">
                                       <a href="{{route('edit.course',['id'=>$item->id])}}" class="btn btn-sm bg-success-light mr-2">
                                       <i class="fas fa-pen"></i>
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
 @endsection