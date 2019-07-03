@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">Create a new Discussion</div>

                <div class="card-body">
                <form action ="{{route('discussion.store')}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Channel</label>

                            <select name="channel_id" id="channel_id" class="form-control">
                            @foreach($channels as $channel)

                            <option value="{{$channel->id}}">{{$channel->title}}</option>
                            @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="content">Ask Question</label>
                            <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" value="save discussion" class="btn btn-primary">
                        </div>

                    </form>
                </div>
    </div>

@endsection
