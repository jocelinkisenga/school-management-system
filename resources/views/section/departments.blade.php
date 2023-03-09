
@extends('layouts.main')
@section('content')
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Departments</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Departments</li>
</ul>
</div>
<div class="col-auto text-right float-right ml-auto">
<a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
<a href="add-department.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
<th>date d'ajout</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
    @foreach ($options as $item)
    <tr>
    
        <td>
        <h2>
        <a>{{$item->option}}</a>
        </h2>
        </td>
        <td>{{$item->created_at}}</td>
       
        <td class="text-right">
        <div class="actions">
        <a href="edit-department.html" class="btn btn-sm bg-success-light mr-2">
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

<footer>
<p>Copyright © 2020 Dreamguys.</p>
</footer>

</div>

</div>


@endsection