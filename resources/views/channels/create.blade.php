@extends('layouts.app')

@if(count($errors) > 0)

@foreach($errors as $error)

{{$error}}

@endforeach

@endif

@section('content')

        
            <div class="card">
                <div class="card-header">Create a New Channel</div>

                <div class="card-body">
                    
                <form action="{{route('channels.store')}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="channel" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                        <input type="submit" name="submit" value="Save Channel" class="btn btn-primary">
                        </div>
                    </form>
                
            
    </div>
</div>

@endsection
