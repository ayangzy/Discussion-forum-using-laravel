@extends('layouts.app')

@section('content')

       

          <div class="card card-default  mb-2">
            <div class="card-header">
            <img src="{{$discussions->user->avatar}}"> &nbsp;&nbsp;&nbsp;
            <span class="">{{$discussions->user->name}}, <b>{{$discussions->created_at->diffForhumans()}}</b></span>

            

            </div>


            <div class="card-body">
            <h5 class="">{{$discussions->title}}</h5>
            <hr>
                <p class="">{{($discussions->content)}} </p> 
            </div>

            
            <div class="card-footer">
              

              <p>{{$discussions->replies->count()}} Replies</p>
             
              </div>

          </div>



          @foreach($discussions->replies as $reply)

          <div class="card card-default  mb-2">
                <div class="card-header">
               
                posted by <span class="">{{$reply->user->name}}</span>
    
               
    
                </div>
    
    
                <div class="card-body">
               
                    <p class="">{{($reply->content)}}</p>
                    
                   <a href="" class="pull right">Remove reply</a>
                </div>
    
                
                <div class="card-footer">
                   @if($reply->is_liked_by_auth_user())

                  

                    <a href="{{route('reply.unlike',['id'=>$reply->id])}}" class="btn btn-danger btn-xs">Unliked <span class="badge"> {{$reply->likes()->count()}}</span></a>
                   @else

                <a href="{{route('reply.like',['id'=>$reply->id])}}" class="btn btn-success btn-xs">Liked <span class="badge"> {{$reply->likes()->count()}}</span></a>


                   @endif
                  </div>
    
              </div>

          @endforeach


          <div class="card card-default">
            <div class="card-body">
                @if(Auth::check())

                <form action="{{route('discussions.reply', ['id' =>$discussions->id])}}" method="POST">
                        {{csrf_field()}}
    
                        <div class="form-group">
                            <label>Reply to this post</label>
                       <textarea name="content" class="form-control" cols="20" rows="5"></textarea>
                        </div>
                        
    
                        <div class="form-group">
                            <input type="submit" name="submit" value="Leave a reply" class="btn btn-primary">
                    </div>
    
                    </form>

                @else
                    <div class="text-center">
                    <h1>You need to login to leave a reply</h1>
                    </div>

                @endif
            </div>
          </div>

          
         


       

        
       


@endsection
