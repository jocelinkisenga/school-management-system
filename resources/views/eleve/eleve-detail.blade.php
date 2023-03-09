@extends('layouts.main')
@section('content')
<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Eleve detail</h3>

</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="about-info">

<div class="media mt-3">
<img src="{{asset('storage/uploads/'.$eleve->image)}}" class="mr-3" alt="...">
<div class="media-body">
<ul>
<li>
<span class="title-span">noms : </span>
<span class="info-span">{{$eleve->name}}</span>
</li>
<li>
<span class="title-span">classe : {{$eleve->classe->class_name}} </span>
<span class="info-span">Computer Science</span>
</li>
<li>
<span class="title-span">option : </span>
<span class="info-span">{{$eleve->option->option}}</span>
</li>
<li>
<span class="title-span">telephone: </span>
<span class="info-span">{{$eleve->phone}}</span>
</li>

<li>
<span class="title-span">genre : </span>
<span class="info-span">{{$eleve->gender}}</span>
</li>
<li>
<span class="title-span">date naissance : </span>
<span class="info-span">{{$eleve->date_birth}}</span>
</li>
</ul>
</div>
</div>

        <div class="row mt-2">
                    <div class="col-md-12">
                    <h5> Addresse</h5>
                    <p>{{$eleve->addresse_tuteur}}</p>
                    </div>
        </div>


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