<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::paginate(1);
        return view('posts.index', compact('posts'));
    }
     
    public function create()
    {
        return view('posts.create');

    }

    
    public function store(Request $request)
    {
       //$post=new Post();
       //$post->title=$request->title;
       //$post->description=$request->description;
       //$post->save();

       $this->validate($request,[
           'title'=>'required|unique:posts',
           'description'=>['required'],
       ]);

       Post::create([
        'slug'=>Str::slug($request->title),
        'title'=>Str::title($request->title),
        'description'=>$request->description,
        'published_at'=>now(),
 
        
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'slug'=>Str::slug($request->title),
            'title'=>Str::title($request->title),
            'description'=>($request->description),
        ]);

        $post->slug=Str::slug($request->title);
        $post->title=Str::title($request->title);
        $post->description=$request->description;
        $post->save;

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts     .index');
    }
}
