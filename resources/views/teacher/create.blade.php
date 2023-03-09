@extends('layouts.main')
@section('content')

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Ajouter un enseignant</h3>

</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form action="{{ route('store.teacher') }} " method="post">
	@csrf
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>informations de l'enseignant</span></h5>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>noms</label>
<input type="text" name="name" class="form-control" placeholder="ex: kamunia kalonda">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>genre</label>
<select class="form-control" name="gender">
	<option >choix du genre...</option>
<option value="m">Homme</option>
<option value="f">Femme</option>

</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Année de naissance</label>
<input type="date" name="date_birth" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Telephone</label>
<input type="text" class="form-control" name="phone" placeholder="0991 661 449">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Date d'ajout</label>
<input type="date" class="form-control" name="date_joined">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Qualification</label>
<input class="form-control" type="text" name="qualification" placeholder="ex : mathematique">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Experience</label>
<input class="form-control" name="experience" placeholder="5 ans" type="text">
</div>
</div>
<div class="col-12">
<h5 class="form-title"><span>detail de connexion</span></h5>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>nom d'utilisateur</label>
<input type="text" class="form-control" name="username" placeholder="ex: placide">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>mots de passe</label>
<input type="text" class="form-control" name="password">
</div>
</div>

<div class="col-12">
<h5 class="form-title"><span>Addresse</span></h5>
</div>
<div class="col-12">
<div class="form-group">
<label>Addresse</label>
<input type="text" class="form-control" name="adresse" placeholder="ex: kasenya no.16, Hewa bora">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>commune</label>
<input type="text" class="form-control" name="commune" placeholder="ex: kampemba">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>ville</label>
<input type="text" class="form-control" name="town" placeholder="ex: lubumbashi">
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