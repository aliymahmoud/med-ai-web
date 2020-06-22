@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">Welcome, Your Previous Diagnosis are shown with it's corresponding patient ID</h1>
@stop

@section('content')
<div class="alert alert-danger temp">
    <h5>Your last Diagnosis ID is #23 please check your home page for updates</h5>
</div>
    <div class="justify-content-center d-flex">
        <div class="col-8">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <th>#ID</th>
                            <th>Date</th>
                            <th>State</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>23</td>
                                <td>28/05/2020</td>
                                <td>Pending</td>
                            
                            </tr>
                            <tr>
                                <td>123</td>
                                <td>29/05/2020</td>
                                <td>Negative</td>
                            

                            </tr>
                            <tr>
                                <td>43</td>
                                <td>30/05/2020</td>
                                <td>Negative</td>
                              
                            </tr>
                            <tr>
                                <td>55</td>
                                <td>01/06/2020</td>
                                <td>Possitive</td>
                        
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

