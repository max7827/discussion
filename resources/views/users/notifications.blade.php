@extends('layouts.app')

@section('content')




<div class="card">
    <div class="card-header">
        Notifications <a href="{{route('discussions.index') }}" class="btn btn-secondary btn-sm float-right"><i class="fa fa-chevron-left" aria-hidden="true"></i> back</a>

    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($notifications as $notification)
            <li class="list-group-item">
                @if($notification->type == 'App\Notifications\NewReplyAdded')
                A reply was added to your discussion <i style="font-size: 1em; color: Tomato;" class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                <strong> {{$notification->data['discussion']['slug']}}</strong>
                <a href="{{route('discussions.show', $notification->data['discussion']['slug'])}}" class="btn btn-sm float-right btn-primary">View Discussion</a>
                @endif

                @if($notification->type == 'App\Notifications\ReplyMarkedAsBestReply')
                Your reply to the discussion <strong> {{$notification->data['discussion']['title']}}</strong> was marked as best reply

                <a href="{{route('discussions.show', $notification->data['discussion']['slug'])}}" class="btn btn-sm float-right btn-primary">View Discussion</a>
                @endif

            </li>
            @endforeach
        </ul>




    </div>
</div>
<div class="float-right mt-2">
    {{$notifications->links()}}

</div>







@endsection