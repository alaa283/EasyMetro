<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Hash;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Post;
use App\suggested;
use App\contact;
use Auth;
use App\validate;
use App\dticket;
use Response;
use App\supmon;

use App\line1;

use App\line2;

use App\line3;
class UserController extends Controller
{  
  /********************************admin*****************/

public function AdminContact(){
   $item = contact::all();
      return view('Admin.viewContact')->with('item',$item);
     
}


public function AdminSuggest(){
     $item = suggested::all();
      return view('Admin.viewSugg', compact("item"));
}






/********************************/

    // to register page
    public function registerPage(){

    	return view('register');
    }
//to index page
public function indexPage(){

    	return view('layouts.EasyMetro');
    }






//to register in site
    public function registerUser(Request $request){
  $request-> validate([
       "name" => "required",
       "email" => "required",
       "password" => "required"
        ]);

    	$adduser = new User;
        $adduser ->name = request("name");
        $adduser ->email = request("email");
        $adduser ->password =Hash::make(request("password")) ;
        $adduser ->save();
       Session::flush();
        return redirect('/use')->with('flash_message_success' , 'register successfully');

    }


//to make login
    
public function loginPage( Request $request )
{
   if( $request-> isMethod ('post') ){
           $data = $request-> input();

   if( Auth::attempt([ 'email'=> $data['email'] , 'password' => $data['password'] , 'admin'=>'1' ]))
   {
            //Session::flush();
       // return view('login');//->with('flash_message_success' , 'login successfully');
     return redirect('/Admin')->with('flash_message_success' , 'login successfully');
    }
    elseif( Auth::attempt([ 'email'=> $data['email'] , 'password' => $data['password'] ]))
     {
      # code...
         return redirect('/use')->with('flash_message_success' , 'login successfully');
    }


           else{
             // return view('index');//->with('flash_message_error','Invalid Username or Password');
           return redirect('/loginP')->with('flash_message_error','Invalid Username or Password');;
           }

       }
       


}

public function showlogin(){
  return view('login');
}
/**************************************************************************************************/

//Posts Functions
//to show post
    //Posts Functions
//to show post
 public function store(Request $request){

$posts = new Post();
$posts->title=  $request->input('title');  //request("title");
$posts->description= $request->input('description');   //request("description");
$posts->name=  $request->input('name');// request("name");
$posts->mobile= $request->input('mobile');// request("mobile");

if($request->hasfile('image')){

  $file =$request->file('image');
  $extension = $file->getClientOriginalExtension();
  $filename =time() . '.' . $extension;
  $file->move('Users/posts/',$filename);
  $posts->image = $filename;
}

  else {
    return $request;
    $posts->image = '';
  }

$posts->save();
 return redirect('/showpost');
//return view('showLost')->with('posts',$posts);
    }





    public function addLostPage(){
      return view('addLost');
    }


 public function showpost()
 {
      $posts = Post::all();
      return view('showLost')->with('posts',$posts);
    }

    //to insert post
    /*
public function addPost(Request $request){

if ($request-> isMethod ('post'))
{
   $data = $request-> input();  




$item = new Post;
$item->title= $data['title'];  //request("title");
$item->description= $data['description'];   //request("description");
$item->name=  $data['name'];// request("name");
$item->mobile= $data['mobile'];// request("mobile");





//image
if($request->hasfile('image')){

  $file =$request->file('image');
  $extension = $file->getClientOriginalExtension();
  $filename =time() . '.' . $extension;
  $file->move('Users/posts/',$filename);
  $item->image = $filename;
}

  else{
    return $request;
   $item->image = '';
  }

//$item->save();

//if($item->save())
//{
//return redirect('/showpost');
  
//}
//else
//{
  //return['success'=>'operation failed'];
  
//}

}

$item->save();

return redirect('/showpost');
}

/*image
if($request->hasfile('image')){

  $file =$request->file('image');
  $extension = $file->getClientOriginalExtension();
  $filename =time() . '.' . $extension;
  $file->move('Users/posts/',$filename);
  $item->image = $filename;
}

  else{
    return $request;
   $item->image = '';
  }

$item->save();

if($item->save())
{
return redirect('/showpost');
  
}
else
{
  return['success'=>'operation failed'];
  
}
*/


    /*******************************************************************************/
    
   //to show suggest page
   public function SuggestPage(){
    
       return view('suggest');
   
   }
    
    
    
    
    //to insert sugest
    
    
  public function  InsertSuggest(Request $request){
      


$item = new suggested();
$item->text=  $request->input('text');  //request("title");
$item->email= $request->input('email');   //request("description");
$item->mobile=  $request->input('mobile');// request("name");


if($request->hasfile('image')){

  $file =$request->file('image');
  $extension = $file->getClientOriginalExtension();
  $filename =time() . '.' . $extension;
  $file->move('sugg/item/',$filename);
  $item->image = $filename;
}

  else {
    return $request;
    $item->image = '';
  }


$item->save();

return redirect('/index');

      
      
  }
    
    
    
    
    
/*******************************************************************************/
    //contact 
    

    
 public function  contactPage(){
     
     return view('contact');
 }
    
 public function insertContact(){
        
  $item = new contact;
$item->name= request("name");
$item->email=request("email");
$item->subject=request("subject");
$item->message=request("message");

$item->save();

return redirect('/index');

        
        
        
        
    }
    
    
    
    /*******************************map*****************/
  public function mapPage(){

    return view('map');


   }
    
    /****************************uses***************/


    public function usePage(){
      return view('use');
    }

    /********************talk************/

public function talkPage(){

return view('talk');




}

/*********************************************************tickets*******************************/






 public function d_ticket(Request $req)
    {
      $lines1=line1::all();
      $lines2=line2::all();
      $lines3=line3::all();
       // return view('admin.daily_tickets.add_daily_ticket');

       if ($req->isMethod('post'))
       {
        $data = $req->all();
        //echo "<pre>"; print_r($data); die; //use this line to test that data is receviced correcttly
        $ticket = new dticket;
       
        $ticket->station_start = $data['station_start'];
        $ticket->station_end = $data['station_end'];
        $ticket->price = $data['price'];

        $ticket->phone_or_credit = $data['phone_or_credit'];
        $ticket->save();
        

        return redirect('/users/d_ticket')->with('flash_message_success', 'Category added successfully');
      }
      return view('ticket',compact('lines1','lines2','lines3'));
    }

  public function useE()
  {
    $lines1=line1::all();
     return view('useE',compact('lines1'));
  }

//************************************submonthly*******************************/

   public function sup_monthly(Request $req)
    {
        if ($req->isMethod('post'))
        {
         $data = $req->all();
         //echo "<pre>"; print_r($data); die; //use this line to test that data is receviced correcttly
         $ticket = new supmon;
         $ticket->num_montaka = $data['num_montaka'];
         $ticket->name = $data['name'];
         $ticket->num_national = $data['num_national'];
 
         $ticket->_num_mobile = $data['_num_mobile'];
         $ticket->save();
 
         return redirect('/Sups/Sup_monthly')->with('flash_message_success', 'Category added successfully');
       }
       return view('sup_monthly');
    }


    
    
public function lin1P(){
   $item = line1::find('price');
      return view("ticket", compact("item"));
}


public function QrPage(){
  return view ('qrcode');
}

public function download(){

$filepath = public_path('images/')."qrcode.jpeg";
return Response::download($filepath);

}



    
}



