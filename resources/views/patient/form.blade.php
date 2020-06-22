@extends('adminlte::page')

@section('title', 'Diagnosis')

@section('content_header')
    <h1 class="m-0 text-dark">New Diagnosis</h1>
@stop

@section('content')
    <div class="justify-content-center d-flex">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Diagnosis Form</h4>
                </div>
                <form action="{{ route('next') }}" method="POST">
                    @csrf
                    <div class="card-body">
                       <div class="form-group">
                           <label for="">Age</label>
                           <input type="number" class="form-control col-4" name="age">
                       </div>
                       <div class="form-group">
                           <label class="col-md-12">Are you living in or have you visited any COVID-19 affected area/city/country?</label>
                           <div class="col-12">
                                <label for="place-yes">Yes</label>
                                <input type="radio" id="place-yes" name="place-radio">
                           </div>
                           <div class="col-12">
                               <label for="place-no">No </label>
                                <input type="radio" id="place-no" name="place-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="">Do you have dry cough?</label>
                            <div class="col-12 cough-yes">
                                <label for="cough-yes">Yes</label>
                                <input type="radio" id="cough-yes" name="cough-radio">
                           </div>
                           <div class="col-12">
                               <label for="cough-no">No </label>
                                <input type="radio" id="cough-no" name="cough-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <label >Any weakness?</label>
                           <div class="col-12 weakness-yes">
                                <label for="weakness-yes">Yes</label>
                                <input type="radio" id="weakness-yes" name="weakness-radio">
                           </div>
                           
                           <div class="col-12">
                               <label for="weakness-no">No </label>
                                <input type="radio" id="weakness-no" name="weakness-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="">What about a sore throat?</label>
                           <div class="col-12 sore-yes">
                                <label for="sore-yes">Yes</label>
                                <input type="radio" id="sore-yes" name="sore-radio">
                           </div>
                           
                           <div class="col-12">
                               <label for="sore-no">No </label>
                                <input type="radio" id="sore-no" name="sore-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <label >Do you have diarrhoea?</label>
                           <div class="col-12 diarrhoea-yes">
                                <label for="diarrhoea-yes">Yes</label>
                                <input type="radio" id="diarrhoea-yes" name="diarrhoea-radio">
                           </div>
                           
                           <div class="col-12">
                               <label for="diarrhoea-no">No </label>
                                <input type="radio" id="diarrhoea-no" name="diarrhoea-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <label>Do you have fever?</label>
                           <div class="col-12 fever-yes">
                                <label for="fever-yes">Yes</label>
                                <input type="radio" id="fever-yes" name="fever-radio">
                           </div>
                           
                           <div class="col-12">
                               <label for="fever-no">No </label>
                                <input type="radio" id="fever-no" name="fever-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <h4>We Also Need to know Your medical history</h4>
                       </div>
                       <div class="form-group">
                           <label for="">Do You have any heart conditions?</label>
                           <div class="col-12 heart-yes">
                                <label for="heart-yes">Yes</label>
                                <input type="radio" id="heart-yes" name="heart-radio">
                           </div>
                           
                           <div class="col-12">
                               <label for="heart-no">No </label>
                                <input type="radio" id="heart-no" name="heart-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="">uncontrolled diabetes?</label>
                           <div class="col-12 diabetes-yes">
                                <label for="diabetes-yes">Yes</label>
                                <input type="radio" id="diabetes-yes" name="diabetes-radio">
                           </div>
                           
                           <div class="col-12">
                               <label for="diabetes-no">No </label>
                                <input type="radio" id="diabetes-no" name="diabetes-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="">How about high blood pressure?</label>
                           <div class="col-12 blood-yes">
                                <label for="blood-yes">Yes</label>
                                <input type="radio" id="blood-yes" name="blood-radio">
                           </div>
                           
                           <div class="col-12">
                               <label for="blood-no">No </label>
                                <input type="radio" id="blood-no" name="blood-radio">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="">Any lung diseases/asthma?</label>
                           <div class="col-12 asthma-yes">
                                <label for="asthma-yes">Yes</label>
                                <input type="radio" id="asthma-yes" name="asthma-radio">
                            </div>
                            
                            <div class="col-12">
                                <label for="asthma-no">No </label>
                                <input type="radio" id="asthma-no" name="asthma-radio">
                            </div>
                       </div>
                       <div class="form-group">
                           <label for="">Do you currently have or have had cancer?</label>
                           <div class="col-12 cancer-yes">
                                <label for="cancer-yes">Yes</label>
                                <input type="radio" id="cancer-yes" name="cancer-radio">
                            </div>
                            
                            <div class="col-12">
                                <label for="cancer-no">No </label>
                                <input type="radio" id="cancer-no" name="cancer-radio">
                            </div>
                       </div>
                       <div class="form-group">
                           <label for="">Do you have any history of stroke?</label>
                           <div class="col-12 stroke-yes">
                                <label for="stroke-yes">Yes</label>
                                <input type="radio" id="stroke-yes" name="stroke-radio">
                            </div>

                            <div class="col-12">
                                <label for="stroke-no">No </label>
                                <input type="radio" id="stroke-no" name="stroke-radio">
                            </div>
                       </div>
                       <div class="form-group">
                           <label for="">Any kidney diseases?</label>
                            <div class="col-12 kidney-yes">
                                <label for="kidney-yes">Yes</label>
                                <input type="radio" id="kidney-yes" name="kidney-radio">
                            </div>

                            <div class="col-12">
                                <label for="kidney-no">No </label>
                                <input type="radio" id="kidney-no" name="kidney-radio">
                            </div>
                       </div>
                       <div class="form-group">
                           <label for="">Are you taking steroids in any form?</label>
                           <div class="col-12 steroids-yes">
                                <label for="steroids-yes">Yes</label>
                                <input type="radio" id="steroids-yes" name="steroids-radio">
                            </div>

                            <div class="col-12">
                                <label for="steroids-no">No </label>
                                <input type="radio" id="steroids-no" name="steroids-radio">
                            </div>
                       </div>
                       <div class="form-group">
                           <label for="">Do you have anyone staying with you who is above the age of 60?</label>
                           <div class="col-12 above-yes">
                                <label for="above-yes">Yes</label>
                                <input type="radio" id="above-yes" name="above-radio">
                            </div>

                            <div class="col-12">
                                <label for="above-no">No </label>
                                <input type="radio" id="above-no" name="above-radio">
                            </div>
                       </div>
                       <div class="form-group">
                           <label for="">Do you have anyone staying with you who suffers from any of the chronic diseases?</label>
                           <div class="col-12 stay-yes">
                                <label for="stay-yes">Yes</label>
                                <input type="radio" id="stay-yes" name="stay-radio">
                            </div>

                            <div class="col-12">
                                <label for="stay-no">No </label>
                                <input type="radio" id="stay-no" name="stay-radio">
                            </div>
                       </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary fa">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')

    <script>
        $(document).ready(function(){
            function howHard(name){
                $("#"+name+"-yes").on('click',function(){
                    if(!$('.rate-'+name).length){
                        $('.'+name+'-yes').after(
                            `<div class="rate-`+name+`">
                                <h5>How Hard is It?</h5>
                                <div class="col-12">
                                    <label for="rate-`+name+`-low">low</label>
                                    <input type="radio" id="rate-`+name+`-low" name="rate-`+name+`-radio">
                                    <label for="rate-`+name+`-mild">mild</label>
                                    <input type="radio" id="rate-`+name+`-mild" name="rate-`+name+`-radio">
                                    <label for="rate-`+name+`-high">high</label>
                                    <input type="radio" id="rate-`+name+`-high" name="rate-`+name+`-radio">
                                </div>
                            </div>`
                        );
                    }
                });
                $("#"+name+"-no").on('click',function(){
                    $('.rate-'+name+'').remove();
                });
            }
            howHard('cough');
            howHard('weakness');
            howHard('sore');
            howHard('diarrhoea');
            howHard('fever');
        });
    </script>

@endsection
