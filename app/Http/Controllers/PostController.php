<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostImage;
use App\User;
use App\Comment; 
use DB;
use Auth;
use Illuminate\Http\Request; 

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

        $feeds = Post::orderBy('id','DESC')->get();
 
      
        // $feeds = $feeds->join('users','users.id','=','posts.posted_by')->orderBy('posts.created_at','DESC')->get(); 
        $peoples = User::All()->where('id','!=',Auth::user()->id);
     
        return view('pages.feeds',['feeds'=>$feeds,'peoples'=>$peoples]);
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
    public function store(Request $request)
    {
        
        $content = $request['post']; //Get the request data
        $posted_by = Auth::user()->id; //Get the user id

        $photo = $request['photo'];
        
        //Save the post in eloquent  
        $photo = $photo->getClientOriginalName(); 
        $request->photo->storeAs('/public/uploads',$photo);
 
        $posts = new Post; 
        $posts->post_content = $content;
        $posts->posted_by = $posted_by; 
        $posts->save();

        
        //Save the  
        
        $postImage = new PostImage;
        $post_id = DB::table('posts')->max('id'); 
        $postImage->filename = $photo;
        $postImage->post_id = $post_id; 
        $postImage->save();

        if($posts){
            return redirect('/')->with('Your post was publish');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
