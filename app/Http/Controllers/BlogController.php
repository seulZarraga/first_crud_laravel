<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show data

        $blogs = Blog::all();
        return view('blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create new entry
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // form validation

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        // create new entry and save it

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();

        return redirect()->route('blog.index')->with('alert-success', 'Entry has been saved!');
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
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        //return edit view
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validating data

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();

        return redirect()->route('blog.index')->with('alert-success', 'Entry has been saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete entry

        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('alert-success', 'Entry has been saved!');
    }
}
