@extends('layouts.navigation')

@section('content')
<!-- ------------------ LOGIN PAGE ------------------ -->
<div class="espace" style="height:13vh;"></div>
  <div class="card mx-auto w-75">
    <div class="card-body px-0">
      <div class="d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row align-items-center wow fadeIn">
            <div class="col-md-6 mb-4 text-center text-md-left d-none d-md-block">
              <img src="{{asset('img/Logo1.png')}}" alt="logo">
              <hr class="hr-light">
              <p class="mb-4" style="overflow: auto; max-height: 40vh;">
                <strong>ODALID conçoit, fabrique et commercialise des équipements électroniques pour l'identification,
                  la sécurisation et la traçabilité. Spécialisée dans le développement de lecteurs/encodeurs sans contact,
                   notre société propose des solutions RFID innovantes. Aujourd’hui grâce à notre avancée technologique,
                    ODALID est le partenaire qui vous garantit une solution RFID adaptée.
                  Notre projet d’entreprise a été lauréat au « concours national de création d’entreprise innovantes 2008 » BPI,
                   et est soutenu par l’incubateur régional de bourgogne PREMICE et le Conseil Régional de Bourgogne.
                    ODALID est formé d’ingénieurs en électronique et informatique spécialisés dans la conception de systèmes embarqués.
                     Notre métier : « vous faire profiter et vous doter des équipements d’identification les plus innovants basés sur la RFID »</strong>
              </p>
              <a target="_blank" href="http://odalid.com/fr" class="btn indigo darken-4 btn-lg"> Notre Site Web
                <i class="fa fa-globe" aria-hidden="true"></i>
              </a>
            </div>
            <div class="col-md-6 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                       @csrf
                        <p class="h4 text-center mb-4">Se connecter</p>
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="materialFormRegisterEmailEx" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="materialFormRegisterEmailEx">Email</label><br>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="materialFormRegisterPasswordEx" class="form-control" name="password" required>
                            <label for="materialFormRegisterPasswordEx">Mot de Passe</label><br>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn indigo darken-4" type="submit">Valider</button> <br><br>
                            <a href="{{ route('forgot.pass') }}"><p class="font-weight-bold text-right">Mot de passe oublié?</p></a>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
