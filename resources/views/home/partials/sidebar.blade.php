<button style="font-size: 25; font-family:Spectral;" type="submit" class="btn btn-dark form-control m-2">TRENUTAN DEPOZIT: {{ (Auth::user()->deposit)? Auth::user()->deposit : 0 }}rsd  </button>
<a style="font-size: 25; font-family:Spectral;" href="{{ route ('home.addDeposit') }}" class="btn btn-dark form-control m-2">DODAJ DEPOZIT</a>
<a style="font-size: 25; font-family:Spectral;;" href="{{ route('home') }}" class="btn btn-dark form-control m-2">SVI MOJI OGLASI</a>
<a style="font-size: 25; font-family:Spectral;" href="{{ route('home.newAd') }}" class="btn btn-dark form-control m-2">NOVI OGLAS</a>
<a style="font-size: 25; font-family:Spectral;" href="{{ route('home.showMessage') }}" class="btn btn-dark form-control m-2">PORUKE ({{ Auth::user()->message->count() }})    </a>