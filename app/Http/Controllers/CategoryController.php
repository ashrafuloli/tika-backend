<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $categories = Category::paginate();
        return view('categories.index', ['categories' => $categories]);
=======
        //
>>>>>>> origin/master
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
<<<<<<< HEAD
     * @param \Illuminate\Http\Request $request
=======
     * @param  \Illuminate\Http\Request  $request
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param \App\Models\Category $category
=======
     * @param  \App\Models\Category  $category
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param \App\Models\Category $category
=======
     * @param  \App\Models\Category  $category
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
<<<<<<< HEAD
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
=======
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param \App\Models\Category $category
=======
     * @param  \App\Models\Category  $category
>>>>>>> origin/master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
