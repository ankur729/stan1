<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();

      //  return $facility;
        return view('pages.admin.category.categorylist',compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.admin.category.categoryadd');
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

        Category::create([

            'name'=>$request->name,
            'sortorder'=>'0'
            ]);

           \Session::flash('message','Category Successfully Added !');
            return \Redirect::back();
    
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

     //    dd($request->all());

        $category=Category::findOrFail($request->category_id);

        return view('pages.admin.category.categoryedit',compact('category'));
       // return $id;
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

          Category::where('id', $request->category_id)
        
                              ->update(

                                [
                                'name' => $request->name,
                                
                                ]);
                                \Session::flash('message','Category Successfully Updated !');
                                return \Redirect::back();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

           Category::destroy($request->category_id);
         \Session::flash('message','Category Successfully Deleted !');
            return \Redirect::back();
        //
    }
}
