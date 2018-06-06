<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Request;
use App\test;
use DB;
use View;
class testing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            return view('create');
        

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $department = new test;           
// Another Way to insert records
        $department->create($request->all());


        //test::create(Request::all());
       return redirect()->back()->withSuccess('Query saved successfully! Thank You');
        /*return '<p style="color:green;">Query saved successfully! Thank You</p><br>
        <a href="http://localhost/cms/public/create" style="border: 1px solid;
    margin: 14px 0;
    display: inline-block;
    padding: 7px 31px;
    text-decoration: none;">Add New</a>  
        ';*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = test::all(); // get all data 
        return View('views', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = DB::table('tests')->where('c_id', $id)->first();
        return view::make('edit',array('edit'=>$edit));
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

        //$request = new Request();
        $post = $request->all();
        //print_r($post);
        $data = ['fname' =>$request->fname,
                 'lname' =>$request->lname,
                 'dob' =>$request->dob,
                 'gender' =>$request->gender,
                 'phone' =>$request->phone,
                 'email' =>$request->email,   
                 'company' =>$request->company];
        DB::table('tests')->where('c_id',$request->c_id)->update($data);        
        return redirect('views')->withSuccess('Query Updated successfully!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      DB::table('tests')->where('c_id', $id)->delete();
        //return 'Deleted';
      //return redirect('views');
      return redirect()->back()->withSuccess('Query Deleted successfully!');
    }
}
