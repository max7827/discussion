<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateDiscussionRequest;
use Illuminate\Http\Request;
use App\Discussion;
use App\Channel;
use App\Notifications\ReplyMarkedAsBestReply;
use App\Reply;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class DiscussionsController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth', 'verified'])->only(['create', 'store']);
    }

    public function backupDatabase()
    {
        $dst = dirname(public_path()) . "/storage/app";
        exec("mysqldump --user=root --password=root discussion --result-file=" . $dst . "/" . date('Y-m-d-H:i') . "-mysqlbkp.sql 2>&1");
        Session::flash('msg', 'Backup Successfully Created');
        return redirect()->back();
    }

    public function backupFiles()
    {


        function custom_copy($src, $dst)
        {

            // open the source directory 
            $dir = opendir($src);

            // Make the destination directory if not exist 
            @mkdir($dst);

            // Loop through the files in source directory 
            while ($file = readdir($dir)) {

                if (($file != '.') && ($file != '__bkpdir__') && ($file != '..')) {
                    if (is_dir($src . '/' . $file)) {

                        // Recursively calling custom copy function 
                        // for sub directory  
                        custom_copy($src . '/' . $file, $dst . '/' . $file);
                    } else {
                        copy($src . '/' . $file, $dst . '/' . $file);
                    }
                }
            }

            closedir($dir);
        }

        // $src = "/var/www/html/ad/d/vendor";

        $dst = dirname(public_path()) . "/storage/app/__bkpdir__";



        $src = dirname(public_path());

        custom_copy($src, $dst);
        // // Enter the name of directory 
        // $pathdir = $src;

        Session::flash('msg', 'Backup Successfully Created');
        return redirect()->back();
    }


    public function index(Request $req)
    {
        // dd($req->query('channel'));

        $d = Channel::where('slug', $req->query('channel'))->first();

        // dd(request()->query('channel'));
        if (!empty($req->query('channel'))) {
            return view('discussions.index', [
                'discussions' => Discussion::where('channel_id', $d->id)->latest()->paginate(3)
            ]);
        }
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
        // $exist = Discussion::where('slug', Str::slug($request->title))->first();
        // // dd($exist);
        // if ($exist) {
        //     Session::flash('msg', 'title already exists');
        //     return redirect()->back()->withInput();
        // }

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
        if ($reply->owner->id != $discussion->author->id) {

            $reply->owner->notify(new ReplyMarkedAsBestReply($reply->discussion));
        }
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
