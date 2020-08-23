@extends('layouts.app')

@section('content')



<div class="card mb-2">
    @include('partials.discussion-header')

    <a href="{{route('discussions.index') }}" class="btn btn-secondary btn-sm float-right"><i class="fa fa-chevron-left" aria-hidden="true"></i> back</a>
</div>

<div class="card-body">
    <strong>{{ $discussion->title}}</strong>
    {!! $discussion->content!!}



    @if($discussion->bestReply)

    <div class="card">
        <div class="card-header-sm bg-success">
            <span>
                <img class="mx-1" src="{{Gravatar::src($discussion->bestReply->owner->email)}}" width="20px" style="border-radius:50%;" alt="">

                <strong> {{strtoupper($discussion->bestReply->owner->name)}}</strong>

            </span> <span style="color:aliceblue" class="float-right font-italic text-dark mr-3">Best Reply</span>
        </div>
        <div class="card-body">
            {!!$discussion->bestReply->content!!}
        </div>
    </div>
    @endif

</div>


</div>

@foreach($discussion->replies()->paginate(3) as $reply)
<div class="card mb-2 float-right " style="width: 90%;">
    <div class="card-header">
        <span>
            <img src="{{Gravatar::src($reply->owner->email)}}" width="40px" style="border-radius:50%" alt="">

            <small> {{strtoupper($reply->owner->name)}}</small>

        </span>

        @auth
        @if(auth()->user()->id == $discussion->user_id)
        <form method="POST" action="{{route('best-reply',['discussion'=>$discussion->slug,'reply'=>$reply->id])}}">
            @csrf
            <button type="submit" class="btn float-right btn-warning btn-sm">Mark as best reply</button>

        </form>
        @endif
        @endauth
    </div>

    <div class="card-body">

        {!! $reply->content!!}
    </div>
</div>
@endforeach
<div class="my-2 float-right">{{$discussion->replies()->paginate(3)->links()}}</div>


<div class="card mb-2 float-right" style="width:100%">
    <div class="card-header">
        <strong>Add a reply </strong>
    </div>



    @auth
    <div class="card-body float-right">
        <form method="POST" action="{{route('replies.store',$discussion->slug)}}">
            @csrf
            <div class="form-group">
                <textarea class="ckeditor  " name="content" id="" cols="30" rows="6"></textarea>
                @error('content')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">submit reply</button>

            </div>
        </form>
    </div>
    @else
    <div class="card-body">
        <a href="{{route('login')}}" class="btn btn-primary">Sign in to reply</a>
    </div>
    @endauth

</div>







@endsection