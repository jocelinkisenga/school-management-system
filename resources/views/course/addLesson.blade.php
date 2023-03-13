
@extends("teacher.layouts.index")

@section("content")
    
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Ajouter une lesson</h3>
                    <ul class="breadcrumb">
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('store-lesson')}}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-12">
                                    <h5 class="form-title"><span> Information sur la lesson</span></h5>
                                </div>
                                <input type="hidden" name="course_id" value=" {{$course->id}}">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>intitulé</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>heure debut</label>
                                        <input type="time" class="form-control" name="heure_debut">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>heure fin</label>
                                        <input type="time" class="form-control" name="heure_fin">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>jour de cours</label>
                                        <input type="date" class="form-control" name="jour_j">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>corps</label>
                                        <textarea type="text" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>fichier</label>
                                        <input type="file" class="form-control" name="fichier">
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


@endsection


