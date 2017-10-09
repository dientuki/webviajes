@extends('layouts.ads-site')

@section ('content')

  <div class="block-aside-left country-selector country-arg">
    <div class="country-selector-title">Pasajeros de Argentina</div>

    <div class="b-wrapper">
      <a class="button-submit button-es" href="{{ route('contactus-ar.show') }}">Español</a>
    </div>

  </div>


  <div class="block-main-right country-selector country-world">
    <div class="country-selector-title">Pasajeros del Exterior</div>

    <div class="b-wrapper">
      <a class="button-submit button-es" href="{{ route('contactus-world.show') }}">Español</a>
      <a class="button-submit button-en" href="{{ route('contactus-world.show') }}">Ingles</a>
    </div>
  </div>

@endsection