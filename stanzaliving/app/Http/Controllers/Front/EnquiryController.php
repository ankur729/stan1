<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
	
	
	
	 public function contactenquiry(Request $request){
       
	   
	   $post_data = $_POST;
		if(isset($_POST['submit'])){
		//echo $name = $request->name;
		//dd($request);
		echo $name = $post_data['name'];die;
		$email = $post_data['email'];
		$phone = $post_data['phone'];
		$subject = $post_data['subject'];
		$content = $post_data['message'];
		
		//$title = $request->input('title');
        //$content = $request->input('content');
        /* $attach = $request->file('file');
        Mail::send('emails.send', ['title' => $name, 'content' => $content], function ($message) use ($attach){

            $message->from('me@gmail.com', 'Christian Nwamba');
            $message->to('chrisn@scotch.io');
            $message->attach($attach);
            $message->subject("Hello from Scotch");
        }); */
        return response()->json(['message' => 'Request completed']);
		
		
		

		}
		
		
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
    public function edit($id)
    {
        //
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
        //
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
    }
}
