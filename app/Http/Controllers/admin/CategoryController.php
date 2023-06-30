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
        return view('admin.pages.subPages.category.add_category');
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

        // After inputed -> go back to category page
        return redirect('/admin_stereo/category')
            ->with(
                'alert',
                'Category ' . '"' . $request->name_category . '"' .
                    ' is added to lists !'
            );
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
        $categories = Category::orderByDesc('id')->get();
        $count = 1;
        return compact('categories', 'count');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_category($id_category)
    {
        $category = Category::where('id', $id_category)->first();

        return view(
            'admin.pages.subPages.category.edit_category',
            compact('category')
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_category(Request $request, $id_category)
    {

        //$namCategory = $request->all();
        $update_category = Category::where('id', $id_category)->first();
        $update_category->name_category = $request->input('name_category');
        $update_category->update();

        return redirect('/admin_stereo/category')
            ->with(
                'alert',
                'Category ' . '"' . $update_category->name_category . '"' .
                    ' is updated successfully !'
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_category($id_category)
    {
        $delete_category = Category::where('id', $id_category)->first();
        $delete_category->delete();

        return redirect('/admin_stereo/category')
            ->with(
                'alert',
                'Category ' . '"' . $delete_category->name_category . '"' .
                    ' is deleted successfully !'
            );
    }
    public function search_category()
    {
        $search_text = $_GET['search'];
        $search_category = Category::where('name_category', 'LIKE', '%' . $search_text . '%')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.category.search_category',
            compact(
                'count',
                'search_category',
                'search_text'
            )
        );
    }
}
