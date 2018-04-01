@extends('layouts.custom-app')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-glyphicon/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-glyphicon/css/bootstrap-theme.min.css') }}">

@endsection

@section('content')
<!-- Index Header w/c is navbar -->
<div class="navbar navbar-inverse navbar-static-top" style="margin-bottom: 0;">
    <div class="container">
        <a href="/" class="navbar-brand"> Chirocare </a>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/home"> Home </a></li>
                <li><a href="/gallery"> Gallery </a></li>

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
                    <li class="dropdown active">
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


<div class="container">
    <div class="row">

        <h1> User Reserved </h1>

        <table class="table table-striped table-bordered table-hover" 
            style="">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Cellphone Number</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach($dates as $date)

                    <tr>
                        <td><span class="glyphicon glyphicon-user"></span> {{ $date->lname }} </td>
                        <td><span class="glyphicon glyphicon-calendar"></span> {{ $date->date }} </td>
                        <td><span class="glyphicon glyphicon-time"></span> {{ $date->time }}</td>
                        <td><span class="glyphicon glyphicon-phone"></span> {{ $date->cellphone_number }}</td>
                        <td> 
                            <a href="#" class="btn btn-info btn-sm">
                                <span class="glyphicon glyphicon-eye-open"></span>    
                            </a> 
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">
                                <span class="glyphicon glyphicon-edit"></span>    
                            </a> 
                        </td>
                        <td>
                            <a href="delete/{{ $date->id }}" class="btn btn-info btn-sm">
                                <span class="glyphicon glyphicon-remove-sign"></span>    
                            </a> 
                        </td>
                    </tr>

                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th>Last Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Cellphone Number</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>

        </table>

    </div>
</div>
@endsection


@section('scripts')
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Step by Step Form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="js/SBS-form.js"></script>

@endsection