@extends('layout.app')

@section('content')
    <h1>Add a video</h1>

    <div>Upload your video to Youtube, then copy the video ID into the form below.</div>

    <hr/>

    <form method="post" action="{{ url('/plate') }}">
        {!! csrf_field() !!}

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="reg">Reg number</label>
            <input type="text" name="reg" id="reg" class="form-control" value="{{ old('reg', $plate) }}" required/>
        </div>

        <div class="form-group">
            <label for="video_id">Video ID</label>
            <input name="video_id" id="video_id" class="form-control" value="{{ old('video_id') }}" required/>
        </div>

        <div class="form-group">
            <label for="taken_at_date">Date taken (optional)</label>
            <input type="date" name="taken_at_date" id="taken_at_date" class="form-control" value="{{ old('taken_at_date') }}"/>
        </div>

        <div class="form-group">
            <label for="reason">Reason</label>
            <select name="reason" id="reason" class="form-control" required>
                @foreach(\App\NameAndShame\Reason::lists('reason', 'id') as $key => $value)
                    <option value="{{ $key }}" {{ (old('reason') == $key ? 'selected':'') }}>{{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Add video</button>
        </div>
    </form>
@endsection