@extends('layouts.app')



@section('content')
        
            <div class="card">
                <div class="card-header">Edit Channel</div>

                <div class="card-body">
                    
                <form action="{{route('channels.update', ['id'=>$channels->id])}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name">Title</label>
                        <input type="text" name="channel" class="form-control" id="name" value="{{$channels->title}}">
                        </div>
                        <div class="form-group">
                        <input type="submit" name="submit" value="Update Channel" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            
       
</div>

@endsection
