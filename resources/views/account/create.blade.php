@extends('layouts.main')
@section('content')
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Ajouter un frais</h3>

</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="{{route('store.fees')}}" method="post">
<div class="row">
    @csrf
<div class="col-12">
<h5 class="form-title"><span>informations sur les frais</span></h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>intitulé</label>
<input type="text" class="form-control" name="name" placeholder="ex: exame 2è semestre">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>option</label>
<select class="form-control" name="option_id">
<option>choix de l'option</option>
@foreach($options as $option)
<option value="{{$option->id}}">{{$option->option}}</option>
@endforeach
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>classe</label>
<select class="form-control" name="class_id">
<option>choix d'une classe</option>
@foreach($classes as $classe)
<option value="{{$classe->id}}">{{$classe->class_name}} {{$classe->option->option}}</option>
@endforeach

</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>prix en dollars</label>
<input type="text" class="form-control" name="amount" placeholder="ex: 50">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>début</label>
<input type="date" class="form-control" name="start">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Fin</label>
<input type="date" class="form-control" name="end">
</div>
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary">ajouter</button>
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