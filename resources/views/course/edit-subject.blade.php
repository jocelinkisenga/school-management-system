@extends("layouts.main")
@section("content")
    

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Affecter le cours {{$course->name}}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="subjects.html"></a></li>
                        <li class="breadcrumb-item active"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('affect-course')}}" method="POST">
                            <div class="row">
                                @csrf
                                <input type="hidden" name="course_id" value="{{$course->id}}" >
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>choisissez un enseignat</label>

                                          <select class="form-control" name="teacher_id" >
                                            <option selected>choisissez un enseignant</option>
                                            @foreach ($teachers as $teacher)
                                            <option value="{{$teacher->id}}">{{$teacher->name}}</option>
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
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Subject</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="subjects.html">Subject</a></li>
                        <li class="breadcrumb-item active">Edit Subject</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Subject Information</span></h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject ID</label>
                                        <input type="text" class="form-control" value="PRE1534">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject Name</label>
                                        <input type="text" class="form-control" value="Botony">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Class</label>
                                        <input type="text" class="form-control" value="9">
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