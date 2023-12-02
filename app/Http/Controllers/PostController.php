<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();

        return view('admin.post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $tag = Tag::all();
        return view('admin.post.create',compact(['category','tag']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|unique:posts,title',
                'image' =>'required|image',
                'description' =>'required',
                'category' =>'required',

            ],
            [
                'title.required' => 'Title is required',
                'image.required' => 'image is required',
                'description.required' => 'description is required',
                'category.required' => 'category name is required',
            ]
          );

          $post =Post::create([

            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,
            'image'=>'img.png',
          ]);

          $post->tags()->attach($request->tags);

         if ($request->hasfile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = time().'.'.$extension;
            $image->move('storage/post/',$image_name);
            $post->image ='/storage/post/'.$image_name;
            $post->save();

        }
          return redirect()->back()->with('post_add','Post added Successfully');
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

        $category = Category::all();
        $tag = Tag::all();
        return view('admin.post.edit',compact(['category','tag','post']));
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
        $request->validate(
            [

                'title' => [
                    'required',
                    Rule::unique('posts')->ignore($post->id)
                ],
                'description' =>'required',
                'category' =>'required',

            ],
            [
                'title.required' => 'Title is required',
                'image.required' => 'image is required',
                'description.required' => 'description is required',
                'category.required' => 'category name is required',
            ]
          );

          $post->title = $request->title;
          $post->slug = Str::slug($request->title);
          $post->description = $request->description;
          $post->category_id = $request->category;
          $post->user_id = Auth::user()->id;
          $post->save();

          $post->tags()->sync($request->tags);

          if ($request->hasfile('image')){

            $destination =$post->image;

            if (File::exists(public_path($destination))) {

                File::delete(public_path($destination));
            }

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $image_name = time().'.'.$extension;
            $image->move('storage/post/',$image_name);
            $post->image ='/storage/post/'.$image_name;
            $post->save();

        }


        return redirect()->back()->with('post_update','Post updated Successfully');
    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (File::exists(public_path($post->image))) {

            File::delete(public_path($post->image));
        }

        $post->tags()->detach($post->tags);

        $post->delete();

        return redirect()->route('post.index')->with('post_delete','Post deleted Successfully');
    }
}
