<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all();
        $tag = Tag::all();
        $post = Post::orderBy('created_at','DESC')->take('5')->get();
        return view('admin.dashboard.index',compact(['category','tag','post']));
    }

    public function contact()
    {
        $contact = Contact::all();
        return view('admin.dashboard.contact',compact('contact'));
    }


     /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
       $contact = Contact::where('id',$id)->first();

       return view('admin.dashboard.view_contact',compact('contact'));
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::where('id',$id)->first();
        if ($contact) {

           
            $contact->delete();

            return redirect()->route('admin.contacts')->with('contact_delete','Contact deleted Successfully');

        }
    }


}
