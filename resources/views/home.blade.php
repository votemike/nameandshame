@extends('layout.app')

@section('content')
    <div class="title">Name & Shame</div>
    <div class="row">
        <div class="col-lg-2 col-lg-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
            <form method="get" action="{{ url('/plate/search') }}">
                <div class="input-group">
                    <input type="search" class="form-control" name="search" placeholder="Reg Search">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div>
        <a href="{{ url('/plate/add') }}" class="btn btn-default btn-add-shame" role="button">Add a shame</a>
    </div>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            @if($plates)
                <h3>Worst Offenders</h3>
                <div class="row">
                    @foreach($plates as $key => $plate)
                        <div class="col-sm-4 worst-offender">
                            <a href="{{ url('/plate/'.$plate) }}" class="numberplate">{{ $plate }}</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <div>Be safe when recording video. Don't record and drive.</div>
    <div>Use video taken by a dash-cam or passenger.</div>
@endsection