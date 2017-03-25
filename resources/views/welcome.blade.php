@extends('layouts.master')

@section('title')
    Oracle Crops - Home Page
@stop

        {!! Html::style('css/login.css') !!}
        
    
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Oracle <span style= color:chartreuse;>Crops</span>
                </div>
                
                <img src="img/logo-OCrops.png" alt="Oracle Crops Logo" />
                
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                
                <div id="pipeWithPlant">
	               <div class="pixel-size carnivorousPlant"></div>
                        <div class="pixel-size pipe"></div>
                </div>
                 <br><br><br><br><br><br><br><br><br>
                <div class="login">
                    <br><br><br>
    
                    <h1><span style="font-family: 'Open Sans', sans-serif;">Login</span></h1>
                    {!! Form::open(['url' => 'data', 'method' => 'get' ]) !!}
                    <p>
                        {!! Form::label('') !!}
                        {!! Form::text('username', null, ['placeholder' => 'tu usuario']) !!}
                    
                        {!! Form::label('') !!}
                        {!! Form::password('password', ['placeholder' => 'tu contraseña']) !!}
                    
                        {!! Form::submit('Déjame Entrar!', array('class' => 'btn btn-primary btn-block btn-large')) !!}
                    </p>

                    {!! Form::close() !!}
                </div>
                    

                
                
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
@stop
