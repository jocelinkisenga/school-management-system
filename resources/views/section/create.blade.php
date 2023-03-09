@extends('layouts.main')
@section('content')
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">créer une option</h3>

</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="{{route('store-option')}}" method="post">
	@csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>information sur l'option</span></h5>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>nom de l'option</label>
<input type="text" name="option" class="form-control">
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