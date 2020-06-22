@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">Critical Cases for 28-05-2020</h1>
@stop

@section('content')
    <div class="justify-content-center d-flex">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <table class="table text-center dataTable">
                        <thead>
                            <th>#</th>
                            <th>Patient ID</th>
                            <th>Place</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>124</td>
                                <td>Cairo</td>
                                <td>42</td>
                                <td>
                                    <a href="{{ route('details',124) }}" class="btn btn-success fa btn-sm"> <i class="fa fa-eye"></i> Show Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>114</td>
                                <td>Gize</td>
                                <td>58</td>
                                <td>
                                    <a href="#" class="btn btn-success fa btn-sm"> <i class="fa fa-eye"></i> Show Details</a>
                                </td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>172</td>
                                <td>Cairo</td>
                                <td>46</td>
                                <td>
                                    <a href="#" class="btn btn-success fa btn-sm"> <i class="fa fa-eye"></i> Show Details</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>132</td>
                                <td>Cairo</td>
                                <td>37</td>
                                <td>
                                    <a href="#" class="btn btn-success fa btn-sm"> <i class="fa fa-eye"></i> Show Details</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
