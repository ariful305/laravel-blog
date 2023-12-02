<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $recent_posts = Post::orderBy('created_at','DESC')->take('5')->get();
        $all_posts = Post::orderBy('created_at','ASC')->take('6')->get();

        return view('website.index',compact(['recent_posts','all_posts']));
    }

    public function about()
    {

        return view('website.about');
    }

    public function blog()

    {
        $recent_posts = Post::orderBy('created_at','DESC')->take('5')->get();
        $category = Category::all();
        $tag = Tag::all();
        $posts = Post::orderBy('created_at','DESC')->paginate(8);
        return view('website.blog',compact(['category','tag','posts','recent_posts']));
    }

    public function post_details($slug)
    {
        $post_details= Post::where('slug',$slug)->first();


       return view('website.post-details',compact('post_details'));
    }

    public function tags($slug)
        {
            $tags_posts = Tag::where('slug',$slug)->first();

            if($tags_posts){

                $posts = $tags_posts->posts()->orderBy('created_at','DESC')->paginate(8);

                return view('website.tags',compact(['posts','tags_posts']));
            }


        return view('website.tags',compact(['posts','tags_posts']));
        }

 public function categories($slug)
        {
            $categories_posts = Category::where('slug',$slug)->first();


            if($categories_posts){

                $posts = $categories_posts->posts()->orderBy('created_at','DESC')->paginate(8);


                return view('website.categories',compact(['posts','categories_posts']));
            }


        }



    public function contact()
    {

        return view('website.contact');
    }


   public function contacts(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',

            ],
            [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'subject.required' => 'Subject is required',
            ]
          );

          $contact =Contact::create([

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

          ]);
          return redirect()->route('contact')->with('contact','Message send Successfully');


    }
    public function search(Request $request)
    {

        $posts = Post::query()
        ->where('title', 'LIKE', "%{$request->search}%")
        ->orWhere('description', 'LIKE', "%{$request->search}%")
        ->get();

        return view('website.search',compact('posts'));


    }

}
