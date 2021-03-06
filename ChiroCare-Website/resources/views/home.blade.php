@extends('layouts.custom-app')

<!-- Styles -->
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/myDesign.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

<!-- Carousel Styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-glyphicon/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-glyphicon/css/bootstrap-theme.min.css') }}">

<!-- Step by Step Form -->
<link rel="stylesheet" href="{{ asset('css/SBS-form.css') }}">   
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

<!-- Datepicker -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/jqueryui/jquery-ui.css') }}">

<!-- Clock Picker -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/clockinput/jquery.clockinput.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/clockinput/jquery.clockinput.min.css') }}">

@endsection

<!-- Content -->
@section('content')
<!-- Index Header w/c is navbar -->
<div class="navbar navbar-inverse navbar-static-top" style="margin-bottom: 0;">
    <div class="container">
        <a href="/home" class="navbar-brand"> Chirocare </a>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#"> Home </a></li>
                <li><a href="#"> Gallery </a></li>
                <li><a href="#msform"> Reserve Now </a></li>

                @guest
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="login-dropdown"> Login Now <b class="caret"></b> </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('login') }}" class="dropdown-item"> Login </a></li>
                            <div class="dropdown-divider" aria-labelledby="#login-dropdown"></div>
                            <li><a href="{{ route('register') }}" class="dropdown-item"> Register </a></li>
                        </ul>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->fname }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>   
                @endguest
            </ul>
        </div>
    </div>
</div>


<!-- Index Carousel -->
<div class="container-fluid behind">
    <div class="row">
        <div class="col-sm-12">
            
            <div id="my-slider" class="carousel slide" data-ride="carousel">
                
                <!-- Indicators dot nov -->
                <ol class="carousel-indicators">
                    <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#my-slider" data-slide-to="1"></li>
                    <li data-target="#my-slider" data-slide-to="2"></li>
                    <li data-target="#my-slider" data-slide-to="3"></li>
                    <li data-target="#my-slider" data-slide-to="4"></li>
                </ol>


                <!-- wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/carousel-photo's/img1.png" alt="1.png">
                    </div>

                    <div class="item">
                        <img src="img/carousel-photo's/img2.png" alt="2.png">
                    </div>

                    <div class="item">
                        <img src="img/carousel-photo's/img3.png" alt="3.png">
                    </div>

                    <div class="item">
                        <img src="img/carousel-photo's/img4.png" alt="4.png">
                    </div>
                </div>

                <!-- controllers -->
                <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

            </div>

        </div>
    </div>
</div>

<!-- Little Information -->
<div class="f-section-container">
    <div class="header-wrapper">
        <div class="header-title"> ChiroCare </div>
        <div class="header-par">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </div>
    </div>
</div>

<!-- Reservation Form -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            
            <!-- Grid -->
            <form id="msform" method="POST" action="/reserving">
                {{ csrf_field() }}
              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active">Date and Time</li>
                <li>Personal Information Confirmation</li>
                <li>Terms and Agreement</li>
              </ul>
              <!-- fieldsets -->
              <fieldset>
                <h2 class="fs-title">Input your desired date</h2>
                <h3 class="fs-subtitle">Date and Time</h3>
                <input type="input" name="date" id="datepicker" placeholder="Date" required="true" autofocus="true">
                <input type="input" name="time" id="time" value="01:30" min="0:00" max="18:02"> <br>
                <input type="button" name="next" class="next action-button" value="Next" />
              </fieldset>
              <fieldset>
                <h2 class="fs-title">Personal Detailes</h2>
                <h3 class="fs-subtitle">How do we contact you?</h3>
                <input type="text" name="name" placeholder="Full Name" value="{{ Auth::user()->fname }} {{ Auth::user()->lname }}" disabled="true" />
                <input type="text" name="lname" value="{{ Auth::user()->lname }}" hidden="true" />
                <input type="text" name="phone" placeholder="Contact Number" value="{{ Auth::user()->contact }}" />
                <input name="address" placeholder="Address" value="{{ Auth::user()->address }}"></input>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
              </fieldset>
              <fieldset>
                <h2 class="fs-title">Attention</h2>
                <h3 class="fs-subtitle">Terms and Agreement</h3>
                <p class="guidelines" style="margin: 15px; padding: 15px;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" value="Submit" class="action-button">
              </fieldset>
            </form>

            <div class="footer">
                
            </div>

        </div>
    </div>
</div>

<!-- Index Footer -->

@endsection

<!-- Scripts -->
@section('scripts')
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Step by Step Form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="js/SBS-form.js"></script>

<!-- Date picker -->
<script type="text/javascript" src="js/jqueryui/jquery-ui.js"></script>

<!-- Time Picker -->
<script type="text/javascript" src="js/clockinput/jquery.clockinput.js"></script>
<script type="text/javascript" src="js/clockinput/jquery.clockinput.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function() {

        $("#datepicker").datepicker({

            minDate: 0, maxDate: ("2m +10d"), dateFormat: "m-d-yy"

        });

        $('#time').clockInput(false);

    });

</script>

@endsection