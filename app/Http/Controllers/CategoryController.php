<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Hamcrest\Description;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index',compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
                'name' => 'required|unique:categories,name',
                'description' =>'nullable|min:20|max:350',
            ],
            [
                'name.required' => 'Category name is required',
            ]
          );

          $category =Category::create([

            'name' => $request->name,
            'slug' => Str::slug($request->name,'-'),
            'description' => $request->description,
          ]);
          return redirect()->back()->with('category_add','Category added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('categories')->ignore($category->id)
                ],
                'description' =>'nullable|min:20|max:350',
            ],
            [
                'name.required' => 'Category name is required',
                'name.unique' => 'This category name has already been taken',
            ]
          );

          $category->name = $request->name;
          $category->slug = Str::slug($request->name,'-');
          $category->description = $request->description;
          $category->save();

          return redirect()->back()->with('category_update','Category Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category) {

            $category->delete();

            return redirect()->route('category.index')->with('category_delete','Category deleted Successfully');

        }
    }
}
