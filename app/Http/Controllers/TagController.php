<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();
        return view('admin.tag.index',compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
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
                'name' => 'required|unique:tags,name',
                'description' =>'nullable|min:20|max:350',
            ],
            [
                'name.required' => 'Tag name is required',
            ]
          );

          $tag =Tag::create([

            'name' => $request->name,
            'slug' => Str::slug($request->name,'-'),
            'description' => $request->description,
          ]);
          return redirect()->back()->with('tag_add','Tag added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('tags')->ignore($tag->id)
                ],
                'description' =>'nullable|min:20|max:350',
            ],
            [
                'name.required' => 'Tag name is required',
                'name.unique' => 'This tag name has already been taken',
            ]
          );

          $tag->name = $request->name;
          $tag->slug = Str::slug($request->name,'-');
          $tag->description = $request->description;
          $tag->save();

          return redirect()->back()->with('tag_update','Tag Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if ($tag) {

            $tag->delete();

            return redirect()->route('tag.index')->with('tag_delete','Tag deleted Successfully');

        }
    }
}
