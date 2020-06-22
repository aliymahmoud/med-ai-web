@extends('adminlte::page')

@section('title', 'Diagnosis')

@section('content_header')
    <h1 class="m-0 text-dark">Finish Diagnosis</h1>
@stop

@section('content')
    <div class="justify-content-center d-flex">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>X-ray Diagnosis</h4>
                </div>
                <form action="{{ route('next') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="col-6">
                                    <label>Upload Your X-ray</label>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-7">
                                    <img src="{{ asset('demo.png') }}" alt="">
                                </div>
                                    <div class="col-4">
                                        <h3 class="alert">NOTE!!</h3>
                                        <p>
                                            To get the best result you need to make sure that the image you upload is clear as possible, make sure to take the picture with steady hands and with a good angle, take the image shown as an example.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('home') }}" class="btn btn-primary fa">Finish</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
