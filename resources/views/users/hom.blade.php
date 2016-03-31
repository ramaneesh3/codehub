@extends('layouts.masters.main')


    @section('page-content')

    <div class="container">

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
              

              <li><a>welcome</a></li>
              <li>{!! link_to_route('get_post','Question?') !!}</li>
              <li>{!! link_to_route('get_logout','Logout') !!}</li>
              
              
            </ul>


          </div><!--/.nav-collapse -->
        


        </div><!--/.container-fluid -->
      </nav>
      <div class="container">
       @forelse($posts as $post)



            <div class="well">
            <div class="media">
              <div class="media-body">
                <h4 class="media-heading">{{$post->title}}</h4>
                 <p>{{$post->body}}</p>
                  <ul class="list-inline list-unstyled">
                    <li><span><i class="glyphicon glyphicon-claendar"></i>{{$post->created_at->diffForHumans()}}</span></li>
                    <li>|</li>
                    <li>Comments</li>
                  

</ul>
</div>
</div>
</div>
      @empty
      <p>No Posts Found</p>
      @endforelse

    </div> <!-- /container -->
