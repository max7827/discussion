@extends('layouts.app')

@section('content')


@foreach($discussions as $discussion)
<div class="card mb-2">

    @include('partials.discussion-header')
    <a href="{{route('discussions.show', $discussion->slug)}}" class="btn btn-success border border-dark font-weight-bold text-light btn-sm float-right"> View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
</div>

<div class="card-body">
    <strong>{{ $discussion->title}}</strong>
    {!! $discussion->content!!}
</div>
</div>
@endforeach

<div class="float-right">
    {{$discussions->links()}}
</div>

@endsection