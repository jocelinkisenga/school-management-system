@extends('layouts.main')
@section('content')
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">créer une classe</h3>

</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="{{ route('store-classe') }}" method="post">
	@csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>information de la classe</span></h5>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>le numero de la classe</label>
<input type="text" class="form-control" name="class_name" placeholder="ex: 4è">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>option de la classe</label>
<select class="form-control" name="option_id">
<option>choix de l'option</option>
@foreach($options as $option)
	<option value="{{ $option->id }}">{{ $option->option }}</option>
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