@extends('layouts.app')



@section('content')

              
            <div class="card">
                <div class="card-header">Channels</div>

                <div class="card-body">
                   
                        <table class="table table-hover">
                            <thead>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>

                            <tbody>

                                @foreach($channels as $channel)

                                <tr>
                                  
                                <td>{{$channel->title}}</td>
                                <td><a href="{{route('channels.edit', ['channel'=>$channel->id])}}" class="btn sm btn-primary">Edit</a></td>
                                <td><a href="{{route('channels.destroy', ['id' =>$channel->id])}}" class="btn sm btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>


                        
           
        </div>
    </div>
</div>

@endsection
