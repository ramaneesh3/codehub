@extends('layouts.masters.main')


    @section('page-content')
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">codehub</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              @if(!auth::check())
              
              <li>{!! link_to_route('get_login','Log in') !!}</li>
              <li>{!! link_to_route('get_register','Register')!!}</li>
              @else
              
                 <li><a>welcome, {{auth()->user()->name}}</a></li>
              <li>{!! link_to_route('get_post','Question?') !!}</li>
              <li>{!! link_to_route('get_logout','Logout') !!}</li>
              
              @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
