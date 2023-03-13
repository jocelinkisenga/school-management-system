@extends('teacher.layouts.index')

@section("content")
    

<div class="page-wrapper">
    <div class="content container-fluid">





        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Toutes les lessons</h5>
                                    </div>
                                    <div class="col-6">
                                        <span class="float-right view-link"><a href="{{route('create-lesson',['id'=>$course->id])}}">Ajouter une lesson</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 pb-3">
                                <div class="table-responsive lesson">
                                    <table class="table table-center">
                                        <tbody>
                                            @foreach ($lessons as $item)
                                            <tr>
                                                <td>
                                                    <div class="date">
                                                        <b>{{$item->jour_j}}</b>
                                                        <p>{{$item->heure_debut}}- {{$item->heure_fin}} ()</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="date">
                                                        <b>{{$item->title}}</b>
                                                        <p></p>
                                                    </div>
                                                </td>
                                                <td><a href="#">Confirmed</a></td>
                                                <td><button type="submit"
                                                        class="btn btn-info">Reschedule</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6 d-flex ml-8">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Tous les devoirs </h5>
                                    </div>
                                    <div class="col-6">
                                        <span class="float-right view-link"><a href="{{route('create-homework',['id'=>$course->id])}}">Ajouter un devoir</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 pb-3">
                                <div class="table-responsive lesson">
                                    <table class="table table-center">
                                        <table class="table table-center">
                                            <tbody>
                                                @foreach ($homeworks as $item)
                                                <tr>
                                                    <td>
                                                        {{-- <div class="date">
                                                            <b>{{$item->jour_j}}</b>
                                                            <p>{{$item->heure_debut}}- {{$item->heure_fin}} ()</p>
                                                        </div> --}}
                                                    </td>
                                                    <td>
                                                        <div class="date">
                                                            <b>{{$item->title}}</b>
                                                            <p></p>
                                                        </div>
                                                    </td>
                                                    <td><a href="#">Confirmed</a></td>
                                                    <td><button type="submit"
                                                            class="btn btn-info">Reschedule</button></td>
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

        </div>

    </div>

    <footer>
        <p>Copyright © 2020 Dreamguys.</p>
    </footer>

</div>

@endsection