<div class="card-header bg-info">
    <span>
        <img src="{{Gravatar::src($discussion->author->email)}}" width="40px" style="border-radius:50%" alt="">

        <strong> {{strtoupper($discussion->author->name)}}</strong>

    </span>