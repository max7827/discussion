@extends('layouts.app')

@section('content')



<div class="card">
    <div class="card-header"> Add Discussion</div>

    <div class="card-body">
        <form method="post" action="{{route('discussions.store')}}">
            @csrf

            <div class="form-group">
                <label for="title">Enter Title</label>
                <input type="text" name="title" class="form-control">

                @error('title')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror

            </div>

            <!-- <div class="form-group">
            <label for="content">Enter contents</label>

            <input id="content" type="hidden" name="content">
            <trix-editor input="content"></trix-editor>

            </div> -->

            <div class="form-group">
                <textarea name="content" class="ckeditor"></textarea>


                @error('content')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror


            </div>

            <div class="form-group">
                <label for="channel">Select Channel</label>
                <select name="channel" id="channel" class="form-control">
                    @foreach($channel as $channels)
                    <option value="{{$channels->id}}">{{$channels->name}}</option>
                    @endforeach
                </select>


            </div>


            <button type="submit" class=" btn btn-primary ">Submit</button>
        </form>
    </div>
</div>

@endsection