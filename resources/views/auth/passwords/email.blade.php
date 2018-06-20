@extends('layouts.navigation')

@section('content')
<div class="view full-page-intro" style="background-image: url('../../img/fond5.jpg'); background-repeat: no-repeat; background-size: cover; height: 100vh;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">



          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4 mx-auto">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">
                @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                @endif
                <!-- Form -->
                <!-- Material form register -->
                <form method="POST" action="{{ route('reset.pass') }}">
                  @csrf
                    <p class="h4 text-center mb-4">Saisissez votre Email</p>
                    <!-- Material input text -->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" name="email" id="materialFormRegisterEmailEx" class="form-control" required autofocus>
                        <label for="materialFormRegisterEmailEx">Email</label><br>
                    </div>

                    <!-- Material input password -->

                    <div class="text-center mt-4">
                          <p class="blue-text text-center">Validez pour réinitialisez votre mot de passe </p><button class="btn btn-primary" type="submit">Validez</button>
                    </div>
                </form>
                <!-- Material form register -->
                <!-- Form -->
                  <br><br>
              </div>
              <p class="text-center"> <strong><i class="fa fa-volume-control-phone" aria-hidden="true"></i> : +33 0 12 34 56 78</strong> <br />En cas d'utilisation hors ligne de nos services, merci contacter notre équipe de maintenance.
               </p>

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
