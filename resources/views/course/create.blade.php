@extends('layouts.main')
@section('content')

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Ajouter un cours</h3>

</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="{{ route('store.course') }}" method="post">
	@csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>informations sur le cours</span></h5>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>intitulé du cours</label>
<input type="text" class="form-control" name="name" placeholder="ex: anatomie">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>option du cours </label>
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
<label>classe du cours</label>
<select class="form-control" name="class_id">
<option>choix de l'option</option>
@foreach($classes as $classe)
	<option value="{{ $classe->id }}">{{ $classe->class_name }}</option>
@endforeach
</select>
</div>
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary">Submit</button>
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