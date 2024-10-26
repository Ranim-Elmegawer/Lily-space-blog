<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        //id, title, description, created_at
        $postsFromDB = post::all();  //collection of objects
        dd($postsFromDB);
        return view('posts.index',['posts=' => $postsFromDB]);
    }
    public function show($postId)
    {
        $singlePost=[
           'id'=>1,'title'=>'php','description'=>'here','posted_by'=>'rimmy','created_at'=>'2022-10-10 09:00:00',
           'Name'=>'ranim','Email'=>'add@gmail.com','Created_at'=>'thursday 25th of december 1987 04:34:00 pm<',

        ];
        return view('posts.show',['post'=>$singlePost]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        //1.get user data
        $data = request()->all();
        $title = request()->title;
        $description = request()->descriptiom;
        $postcreator = request()->post_creator;
        //dd($data,$title,$description,$postcreator);
        //2.store user DB


        //3.redirection to posts.index
        return to_route('posts.index');
    }
    public function edit(){
        return view('posts.edit');
    }
    public function update(){
       
        $title = request()->title;
        $description = request()->description;
        $postcreator = request()->post_creator;

        return to_route('posts.show',1);
    }
    public function destroy(){
         //1- delete the post from database
            //select or find the post
            //delete the post from database
            //$post = Post::find($postId);
            //$post->delete();
    
            //Post::where('id', $postId)->delete();
        //redirect to posts.index
        return to_route('posts.index');
    }
}
