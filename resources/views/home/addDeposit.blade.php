@extends('layouts.app')

<html>
<body style="background-color:#FFC107;">

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <h1><font face = "Spectral" size = "6">DODAJ DEPOZIT</h1></font>
            <form action="" method=POST>
                @csrf
                <input type="number" name="deposit" placeholder="Upiši iznos depozita" class="form-control"> <br>
                @if ($errors->has('deposit'))
                    <p class="btn btn-danger">{{$errors->first('deposit')}}</p><br>
                @endif
                <button type="submit" class="btn btn-sm btn-dark"><b>DODAJ</b></button>
            </form><br>
            @if (session()->has('message'))
                <button class="alert alert-warning">{{session()->get('message')}}</button>
            @endif  
        </div>
    </div>
</div>
@endsection