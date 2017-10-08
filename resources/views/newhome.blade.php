@extends('layouts.ads-site')

@section ('content')

  <div class="block-aside-left country-selector country-arg">
    <div class="country-selector-title">Pasajeros de Argentina</div>
    <a class="button-submit" href="{{ route('contactus-ar.show') }}">Español</a>
  </div>


  <div class="block-main-right country-selector country-world">
    <div class="country-selector-title">Pasajeros del Exterior</div>

    <a class="button-submit" href="{{ route('contactus-world.show') }}">Español</a>
    <a class="button-submit" href="{{ route('contactus-world.show') }}">Ingles</a>
  </div>

@endsection