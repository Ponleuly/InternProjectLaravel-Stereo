<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        return view('admin.pages.category', $this->show());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_category()
    {
        return view('admin.pages.subPages.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        //$input = new Category($input);
        //$input->save(); 
        Category::create($input);
        return redirect('/admin_stereo/category'); // After inputed -> go back to category page
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$category = Category::all();
        //$category = $category->orderBy("id_category", "desc")->get();
        $categories = Category::orderByDesc('id_category')->get();
        $count = 1;
        return compact('categories', 'count');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_category($name_category)
    {
        $category = Category::where('name_category', $name_category)->first();
        return view('admin.pages.subPages.edit_category',  compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_category(Request $request, $name)
    {
        //$new = $request->$name;

        //$new = $request->all();
        //$category = Category::where('name_category', $new)->first();
        //$category->name_category = $new('name_category');
        //$category->update();
        Category::first()->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_category($name_category)
    {
        //
    }
}
