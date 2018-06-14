@extends('layouts.navigation')

@section('content')

<div class="view full-page-intro" style="background-image: url('img/fond1f.jpg'); background-repeat: no-repeat; background-size: cover; height: 100vh; ">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-md-6 mb-4 white-text text-center text-md-left">

            <h1 class="display-4 font-weight-bold"> Odalid </h1>

            <hr class="hr-light">



            <p class="mb-4 d-none d-md-block">
              <strong>ODALID conçoit, fabrique et commercialise des équipements électroniques pour l'identification,
                la sécurisation et la traçabilité. Spécialisée dans le développement de lecteurs/encodeurs sans contact,
                 notre société propose des solutions RFID innovantes. Aujourd’hui grâce à notre avancée technologique,
                  ODALID est le partenaire qui vous garantit une solution RFID adaptée.
                Notre projet d’entreprise a été lauréat au « concours national de création d’entreprise innovantes 2008 » BPI,
                 et est soutenu par l’incubateur régional de bourgogne PREMICE et le Conseil Régional de Bourgogne.
                  ODALID est formé d’ingénieurs en électronique et informatique spécialisés dans la conception de systèmes embarqués.
                   Notre métier : « vous faire profiter et vous doter des équipements d’identification les plus innovants basés sur la RFID »</strong>
            </p>

            <a target="_blank" href="http://odalid.com/fr" class="btn btn-primary btn-lg"> Notre Site Web
              <i class="fa fa-globe" aria-hidden="true"></i>
            </a>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                <!-- Material form register -->
                  <form method="POST" action="{{ route('login') }}">
                     @csrf
                      <p class="h4 text-center mb-4">Se connecter</p>

                      <!-- Material input email -->
                      <div class="md-form">
                          <i class="fa fa-envelope prefix grey-text"></i>
                          <input type="email" id="materialFormRegisterEmailEx" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                          <label for="materialFormRegisterEmailEx">Email</label><br>

                      </div>

                      <!-- Material input password -->
                      <div class="md-form">
                          <i class="fa fa-lock prefix grey-text"></i>
                          <input type="password" id="materialFormRegisterPasswordEx" class="form-control" name="password" required>
                          <label for="materialFormRegisterPasswordEx">Mot de Passe</label><br>
                      </div>
                      <!-- Rectangular switch -->
                      <label class="switch">
                        <input type="checkbox">
                        <span class="slider"> </span>
                      </label><p class="text-right">Rester connecté</p>

                      <div class="text-center mt-4">
                          <button class="btn btn-primary" type="submit">Valider</button> <br><br>
                          <a href="email.html"><p class="font-weight-bold text-right">Mot de passe oublié?</p></a>
                      </div>
                  </form>
<!-- Material form register -->
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->



      <!--/.Copyright-->


  </div>

@endsection
