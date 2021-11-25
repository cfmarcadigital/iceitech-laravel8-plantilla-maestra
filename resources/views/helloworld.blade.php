@extends('master')
 
@section('content')
 
    <div class="jumbotron">
        <h2>Bienvenido {{ $variableone  }}</h2>
 
        <p>{{  $variabletwo  }}</p>
 
        <p><a class="btn btn-primary btn-lg" href="#" role="button"> {{  $variablethree  }}</a></p>
    </div>
 
@endsection

@section('store')

    <div class="row text-center">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="{{ asset('storage/computer_toshiba.jpg') }}">
                    <img src="{{ asset('storage/computer_toshiba.jpg') }}" alt="Toshiba">
                    <div class="caption">
                        <p>Toshiba</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
            <a href="{{ asset('storage/computer_dell.webp') }}">
                <img src="{{ asset('storage/computer_dell.webp') }}" alt="Dell">
                <div class="caption">
                    <p>Dell</p>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
            <a href="{{ asset('storage/computer_hp.jpg') }}">
                <img src="{{ asset('storage/computer_hp.jpg') }}" alt="HP">
                <div class="caption">
                    <p>HP</p>
                </div>
            </a>
            </div>
        </div>
    </div>
    
@endsection