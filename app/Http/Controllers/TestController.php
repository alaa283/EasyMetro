<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\lineCat;
use App\lines;

use App\subscat;

use App\subs;

use App\sups;
use App\dailytickets;


class TestController extends Controller
{

	public $price1=0;

	public $price2=0;

	public $total=0;

	public function linefunct(Request $req)
	{
		$line=lineCat::all();//get data from table
		if ($req->isMethod('post'))
        {
         $data = $req->all();
         //echo "<pre>"; print_r($data); die; //use this line to test that data is receviced correcttly
         $ticket = new dailytickets;
         $ticket->sup_name1 = $data['sup_name1'];
		 $ticket->num_montaka1 = $data['num_montaka1'];
		 $ticket->sup_name2 = $data['sup_name2'];
         $ticket->num_montaka2 = $data['num_montaka2'];
         $ticket->price = $data['price'];
         $ticket->_num_mobile = $data['_num_mobile'];
         $ticket->save();
 
         return redirect('/qrcode')->with('flash_message_success', 'Category added successfully');
       }
		return view('ticket',compact('line'));//sent data to view

	}

	public function findlineName(Request $request){

		
	    //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=lines::select('line_name','id')->where('line_cat_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
	}


	public function findPrice(Request $request)
	{
	
		//it will get price if its id match with product id
		$p=lines::select('price')->where('id',$request->id)->first();

		$price1=$p;
		
    	return response()->json($p);
	}

	public function findPrice2(Request $request)
	{
	
		//it will get price if its id match with product id
		$p=lines::select('price')->where('id',$request->id)->first();

		$price2=$p;
		
    	return response()->json($p);
	}

	public function linefunct1(Request $req)
	{
		$sub=subscat::all();//get data from table
		if ($req->isMethod('post'))
        {
         $data = $req->all();
         //echo "<pre>"; print_r($data); die; //use this line to test that data is receviced correcttly
         $ticket = new sups;
         $ticket->sup_name = $data['sup_name'];
         $ticket->num_montaka = $data['num_montaka'];
         $ticket->price = $data['price'];
         $ticket->name = $data['name'];
         $ticket->_num_mobile = $data['_num_mobile'];
         $ticket->save();
 
         return redirect('/qrcode')->with('flash_message_success', 'Category added successfully');
       }
		return view('subs',compact('sub'));//sent data to vie	
	}

	public function findlineName1(Request $request){

		
	    //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=subs::select('sup_name','id')->where('sub_cat_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
	}

	public function findPrice1(Request $request)
	{
	
		//it will get price if its id match with product id
		$p=subs::select('price')->where('id',$request->id)->first();
		
    	return response()->json($p);
	}
}
