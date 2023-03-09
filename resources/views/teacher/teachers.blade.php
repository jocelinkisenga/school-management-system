@extends('layouts.main')
@section('content')


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Teachers</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Teachers</li>
</ul>
</div>
<div class="col-auto text-right float-right ml-auto">
<a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
<a href="add-teacher.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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

<th>noms</th>
<th>telephone</th>
<th>qualification</th>
<th>experience</th>
<th>adresse</th>
<th>commune</th>
<th>ville</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
 @foreach ($teachers as $teacher)
 <tr>

        <td>
        <h2 class="table-avatar">
        <a href="teacher-details.html">{{$teacher->name}}</a>
        </h2>
        </td>
        <td>{{$teacher->phone}}</td>
        <td>{{$teacher->qualification}}</td>
        <td>{{$teacher->experience}}</td>
        <td>{{$teacher->adresse}}</td>
        <td>{{$teacher->commune}}</td>
        <td>{{$teacher->ville}}</td>
        <td class="text-right">
        <div class="actions">
        

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