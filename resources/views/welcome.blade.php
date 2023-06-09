@extends('layouts.master')
@section('main')

<html>
<body style="background-color:#FFC107;">
<p></p>
<p></p>
</body>
</html>
<div class="container"></div>
    <div class="row">
        <div class="col-3 bg-warning">
            <ul class="list-group list-group-flush">
                @foreach ($all_cats as $cat)
                    <li class="list-group-item bg-warning">
                        <a style="text-decoration: none; font-family:Spectral;" href="{{ route('welcome') }}?cat={{ $cat->name }}" class="text-dark"><b>{{ $cat->name }}</b></a>
                    </li>
                @endforeach
                <li class="list-group-item bg-warning">
                    <form action="{{ route('welcome') }}" method="GET">
                        <select name="type" style="font-family:Spectral;" class="form-control">
                            <option value="lower"{{ (isset(request()->type) && request()->type == 'lower')? 'selected' : ''}}><b>Ceni rastuće</b></option>
                            <option value="upper"{{ (isset(request()->type) && request()->type == 'upper')? 'selected' : ''}}><b>Cani opadajuće</b></option>
                        </select>
                        <button style="font-family:Spectral;" type="submit" class="btn btn-dark form-control mt-1"><b>SORTIRAJ</b></button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-9">
            <ul class="list-group">
                @foreach ($all_ads as $ad)
                    <li class="list-group-item" style="background-color:#212529">
                        <a style="text-decoration: none; font-family:Spectral;"  href="{{ route('welcome.singleAd', ['id'=>$ad->id]) }}" class="text-light"><font size="+1"><b>{{ $ad->title }}</b></font></a><p></p>
                        <span class="badge bg-warning" style="font-family:Spectral;"><font size="+1"><b>{{ $ad->price }}rsd</b></font></span>
                        <span class="badge float-end" style="font-family:Spectral;"><font size="+1">Broj pregleda oglasa: {{ $ad->price }}</font></span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection