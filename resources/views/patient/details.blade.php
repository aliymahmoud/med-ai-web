@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1 class="m-0 text-dark">Diagnosis For Patient #124</h1>
@stop

@section('content')
    <div class="justify-content-center d-flex">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h3>
                        Patient Information
                    </h3>
                </div>
                <div class="card-body">
                          <div class="row">
                              <div class="col-4">
                                      <div >
                                          <img src="{{ asset('demo.png') }}" alt="" class="rounded card-img-top shadow">
                                     </div> 
                              </div>
                            <div class="col-6">
                                <div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Age : 42</li>
                                        <li class="list-group-item">Are you living in or have you visited any COVID-19 affected area/city/country? : yes</li>
                                        <li class="list-group-item">Do you have dry cough? : yes | low</li>
                                        <li class="list-group-item">Any weakness? : yes | low</li>
                                        <li class="list-group-item">What about a sore throat? : yes | low</li>
                                        <li class="list-group-item">Do you have diarrhoea? : no</li>
                                        <li class="list-group-item">Do you have fever? : yes | low</li>
                                        <li class="list-group-item">Do you have any heart conditions? : no</li>
                                        <li class="list-group-item">uncontrolled diabetes? : no</li>
                                        <li class="list-group-item">How about high blood pressure? : no</li>
                                        <li class="list-group-item">Any lung diseases/asthma? : yes</li>
                                        <li class="list-group-item">Do you currently have or have had cancer? : no</li>
                                        <li class="list-group-item">Do you have any history of stroke? : no</li>
                                        <li class="list-group-item">Any kidney diseases? : no</li>
                                        <li class="list-group-item">Are you taking steroids in any form? : no</li>
                                        <li class="list-group-item">Do you have anyone staying with you who is above the age of 60? : yes</li>
                                        <li class="list-group-item">Do you have anyone staying with you who suffers from any of the chronic diseases? : no</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('critical','28-05-2020') }}" class="btn btn-primary fa ">Negative Covid</a>
                    <a href="{{ route('critical','28-05-2020') }}" class="btn btn-danger fa ">Possitive Covid</a>
                </div>
            </div>
        </div>
    </div>
@stop
