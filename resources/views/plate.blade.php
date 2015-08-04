@extends('layout.app')

@section('content')
    <div class="numberplate">{{ $plate }}</div>
    @if(is_null($numberplate))
        <div>There are no videos for this number plate at the moment.</div>
    @else
        <div class="row">
            @foreach($numberplate->shames as $shame)
                <div class="col-md-4">
                    <div class="shame">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $shame->link }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="reason">{{ $shame->reason->reason }}</div>
                        @if($shame->taken_at)
                            <div class="date">Recorded on: {{ $shame->taken_at }}</div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <div>
        <a href="{{ url('/plate/add/'.$plate) }}" class="btn btn-default btn-add-shame" role="button">Add a shame</a>
    </div>
@endsection