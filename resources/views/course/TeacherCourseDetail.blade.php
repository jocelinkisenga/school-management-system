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
                                        <span class="float-right view-link"><a href="#">Ajouter une lesson</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 pb-3">
                                <div class="table-responsive lesson">
                                    <table class="table table-center">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="date">
                                                        <b>Aug 4, Tuesday</b>
                                                        <p>2.30pm - 3.30pm (60min)</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="date">
                                                        <b>Lessons 30</b>
                                                        <p>3.1 Ipsuum dolor</p>
                                                    </div>
                                                </td>
                                                <td><a href="#">Confirmed</a></td>
                                                <td><button type="submit"
                                                        class="btn btn-info">Reschedule</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="date">
                                                        <b>Aug 5, Wednesday</b>
                                                        <p>3.00pm - 4.30pm (90min)</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="date">
                                                        <b>Lessons 31</b>
                                                        <p>3.2 Ipsuum dolor</p>
                                                    </div>
                                                </td>
                                                <td><a href="#">Confirmed</a></td>
                                                <td><button type="submit"
                                                        class="btn btn-info">Reschedule</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="date">
                                                        <b>Aug 6, Thursday</b>
                                                        <p>11.00am - 12.00pm (20min)</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="date">
                                                        <b>Lessons 32</b>
                                                        <p>3.3 Ipsuum dolor</p>
                                                    </div>
                                                </td>
                                                <td><a href="#">Confirmed</a></td>
                                                <td><button type="submit"
                                                        class="btn btn-info">Reschedule</button></td>
                                            </tr>
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
                                        <span class="float-right view-link"><a href="#">Ajouter un devoir</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 pb-3">
                                <div class="table-responsive lesson">
                                    <table class="table table-center">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="date">
                                                        <b>Aug 4, Tuesday</b>
                                                        <p>2.30pm - 3.30pm (60min)</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="date">
                                                        <b>Lessons 30</b>
                                                        <p>3.1 Ipsuum dolor</p>
                                                    </div>
                                                </td>
                                                <td><a href="#">Confirmed</a></td>
                                                <td><button type="submit"
                                                        class="btn btn-info">Reschedule</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="date">
                                                        <b>Aug 5, Wednesday</b>
                                                        <p>3.00pm - 4.30pm (90min)</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="date">
                                                        <b>Lessons 31</b>
                                                        <p>3.2 Ipsuum dolor</p>
                                                    </div>
                                                </td>
                                                <td><a href="#">Confirmed</a></td>
                                                <td><button type="submit"
                                                        class="btn btn-info">Reschedule</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="date">
                                                        <b>Aug 6, Thursday</b>
                                                        <p>11.00am - 12.00pm (20min)</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="date">
                                                        <b>Lessons 32</b>
                                                        <p>3.3 Ipsuum dolor</p>
                                                    </div>
                                                </td>
                                                <td><a href="#">Confirmed</a></td>
                                                <td><button type="submit"
                                                        class="btn btn-info">Reschedule</button></td>
                                            </tr>
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