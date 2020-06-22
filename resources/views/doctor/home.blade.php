@extends('adminlte::page')
@section('plugins.Datatables', true)

@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">Daily Report</h1>
@stop

@section('content')
    <div class="justify-content-center d-flex">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <table class="table text-center dataTable">
                        <thead>
                            <th>Date</th>
                            <th>Number of Positive cases</th>
                            <th>Certainaty</th>
                            <th>Unchecked Caeses</th>
                            <th>Total cases</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01-06-2020</td>
                                <td>143</td>
                                <td>76%</td>
                                <td>143</td>
                                <td>320</td>
                                <td>
                                    <a href="{{ route('critical','28-05-2020') }}" class="btn btn-danger fa btn-sm"> <i class="fa fa-eye"></i> show critical cases</a>
                                </td>
                            </tr>
                            <tr>
                                <td>29-05-2020</td>
                                <td>15</td>
                                <td>86%</td>
                                <td>15</td>
                                <td>150</td>
                                <td>
                                    <a href="#" class="btn btn-danger fa btn-sm"> <i class="fa fa-eye"></i> show critical cases</a>
                                </td>

                            </tr>
                            <tr>
                                <td>30-05-2020</td>
                                <td>60</td>
                                <td>95%</td>
                                <td>60</td>
                                <td>46</td>
                                <td>
                                    <a href="#" class="btn btn-danger fa btn-sm"> <i class="fa fa-eye"></i> show critical cases</a>
                                </td>
                            </tr>
                            <tr>
                                <td>28-05-2020</td>
                                <td>4</td>
                                <td>84%</td>
                                <td>4</td>
                                <td>100</td>
                                <td>
                                    <a href="{{ route('critical','28-05-2020') }}" class="btn btn-danger fa btn-sm"> <i class="fa fa-eye"></i> show critical cases</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
