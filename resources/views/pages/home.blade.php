   
    @extends('layouts.masters.main')


    @section('page-content')

    <div class="container">
          
          @include('layouts.partials.nav')

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

@stop
    