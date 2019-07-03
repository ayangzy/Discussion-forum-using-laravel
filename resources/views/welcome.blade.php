@extends('layouts.app')

@section('content')

        @foreach($discussions as $discussion)
            
          <div class="card card-default">
            <div class="card-header">
            
            <span class="">{{$discussion->user->name}}, <b>{{$discussion->created_at->diffForhumans()}}</b></span>

            <div class="text-right top">
            <a href="{{route('discussion',['slug' =>$discussion->slug])}}" class="btn btn-info">View</a>
            </div>
            </div>


            <div class="card-body">
            <h5 class="">{{$discussion->title}}</h5>
            <hr>
                <p class="">{{str_limit($discussion->content, 200)}}</p> 
            </div>

            
            <div class="card-footer">
              @if($discussion->replies->count() < 1)

              <p>{{$discussion->replies->count()}} Repy</p>
              @else

              <p>{{$discussion->replies->count()}} Repies</p>
              @endif

              
            
              </div>

          </div>

          
         


        @endforeach

        <div class="text-center">
          {{$discussions->links()}}
        </div>
       


@endsection
