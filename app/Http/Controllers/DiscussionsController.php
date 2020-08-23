<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiscussionRequest;
use Illuminate\Http\Request;
use App\Discussion;
use App\Notifications\ReplyMarkedAsBestReply;
use App\Reply;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class DiscussionsController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index()
    {
        return view('discussions.index', [
            'discussions' => Discussion::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('discussions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiscussionRequest $request)
    {

        Discussion::create([
            'title' => $request->title,
            'content' => $request->content,
            'channel_id' => $request->channel,
            'slug' => Str::slug($request->title),
            'user_id' => auth()->user()->id
        ]);
        Session::flash('msg', 'discussion created');
        return redirect()->route('discussions.index');
    }

    public function reply(Discussion $discussion, Reply $reply)
    {
        Discussion::where('slug', $discussion->slug)->update(['reply_id' => $reply->id]);
        $reply->owner->notify(new ReplyMarkedAsBestReply($reply->discussion));
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Discussion $discussion)
    {

        return view('discussions.show', ['discussion' => $discussion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
