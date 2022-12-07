<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->body = $request['body'];
        $post->image = $request['image'];
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/images/', $filename);
            $post->image = $filename;
        }
        $request->user()->posts()->save($post);
        return redirect()->route('home')->with('success', 'Post Posted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if (!($post)) {
            abort(404, 'Invalid Request');
        }
        if ($post->user_id == auth()->id()) {
        } else {
            abort(403, 'You are not the authenticated user');
        }
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
        $post = Post::find($id);
        if ($post->user_id == Auth::id()) {
            $post->body = $request['bodycontent'];
            if ($request->hasfile('imageupload')) {
                $destination = 'uploads/images/' . $post->image;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('imageupload');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/images/', $filename);
                $post->image = $filename;
            } else {
                $post->image = $post['imageupload'];
            }
        } else {
            abort(403, 'Not Allowed Po!');
        }
        $post->update();
        return redirect('/home')->with('info', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorFail($id);
        $post->delete();

        return redirect('/home')->with('success', 'Post Deleted successfully');
    }
}
