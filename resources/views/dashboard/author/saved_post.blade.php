@extends('dashboard.layouts.app')

@section('content')

    <div class="content-body">
        <div class="container">

        <div class="card col-md-8 mx-auto">
            <div class="card-body">
                <input type="text" class="form-control form-control-lg" placeholder="Search...">
            </div>
        </div>

        <div class="col-md-12">

        <div class="card">
            <div class="card-body">
            <h6>All Post</h6>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            Maria
                            </td>
                            <td>
                                new
                            </td>
                            <td>
                                new
                            </td>
                            <td>
                                <button class="btn btn-primary shadow">view details</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                New Session
                            </td>
                            <td>
                                new
                            </td>
                            <td>
                                new
                            </td>
                            <td>
                                <button class="btn btn-primary shadow">view details</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        </div>

        </div>
    </div>


@endsection