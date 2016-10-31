<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable to collect all the blog posts.
        $posts = Post::orderBy('id','desc')->simplePaginate(5);
        //return a view with all the posts
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
            'title' => 'required|min:5|max:255',
            'subtitle' => 'required|min:10|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255'
            'body' => 'required'
            ));
        //store it in the database
        $post = new Post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();

        Session::flash('success','Yay! You created a new post.');
        return redirect()->route('posts.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post from the databse and save it as a variable.
        $post = Post::find($id);

        //return the view and pass it in the var we previously created.
        return view('posts.edit')->withPost($post);
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
        //validate the data before we use it

        $post = Post::find($id);
        if($request -> input('slug') == $post ->$slug);
        {
            $this->validate($request,array(
            'title' => 'required|min:5|max:255',
            'subtitle' => 'required|min:10',
            'body' => 'required'
            ));
        }
        else
        {
            $this->validate($request,array(
            'title' => 'required|min:5|max:255',
            'subtitle' => 'required|min:10',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body' => 'required'
            ));
        }
        //save the data to the database
        $post -> title = $request -> input('title');
        $post -> subtitle = $request -> input('subtitle');
        $post -> body = $request -> input('body');
        $post -> save();
        //set a flash data with success message
        Session::flash('success','Yay! You successfully updated the post.');
        //redirect with flash data to posts.show
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find the post
        $post = Post::find($id);
        $post -> delete();
        Session::flash('success','Yay! You successfully deleted the post.');
        return redirect()->route('posts.index');
    }
}
