<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        /* 
        *  $allData =  Post::all(); 
        *for getting all the data from database
        */

        /*
        * //$allData =  Post::orderBy('id','desc')->get();
        * // for getting all data as per order by 
        */
        
        /**
         * $allData =  Post::where('id','2')->get();
         * using where clause in post model 
         */

        /**
         * using plain sql queries
         *  $allData = DB::select('Select * FROM posts');
         */
        /**
         * for picking only select number of result from large data
         * $allData =  Post::orderBy('id','desc')->take(1)->get();
         */

        /**
         * for applying pagination data for the latge data
         * $allData =  Post::orderBy('id','desc')->paginate(1);
         * where number of result is used in paginate(n)
         */
        
        $allData =  Post::all(); 
        return view('post.index')->with('allDatas', $allData);

        /* 
         * 'data in view file',variable name
         *
         */
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.createData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

            // create post value
            $saveData = new Post;
            $saveData->title = $request->input('title');
            $saveData->body = $request->input('body');
            $saveData->save();

            return redirect('/post')->with('success', 'Post Created');

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
        $view = Post::find($id);
        return view('post.show')->with('postData',$view);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update = Post::find($id);
        return view('post.editData')->with('postData',$update);

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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

            // create post value
            $saveData = Post::find($id);
            $saveData->title = $request->input('title');
            $saveData->body = $request->input('body');
            $saveData->save();

            return redirect('/post')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deletePost = Post::find($id);
        $deletePost->delete();
        return redirect('/post')->with('success', 'Post Deleted successfully');
        

    }
}
