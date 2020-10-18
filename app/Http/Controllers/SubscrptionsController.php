<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\types_sub;


class SubscrptionsController extends Controller
{
    //

    public function types_subscription(Request $req)
    {
        if ($req->isMethod('post'))
        {
         $data = $req->all();
         //echo "<pre>"; print_r($data); die; //use this line to test that data is receviced correcttly
         $ticket = new types_sub;
         $ticket->type_sub = $data['type_sub'];
         $ticket->type_line = $data['type_line'];
         $ticket->station1 = $data['station1'];
 
         $ticket->station2 = $data['station2'];
         $ticket->station3_4 = $data['station3_4'];
         $ticket->station5_6 = $data['station5_6'];
         $ticket->save();
 
         return redirect('/admin/viewSubscription');
        }
        return view('Admin.types_subscription');
    }
    
    public function editSubscription(Request $req, $id = null)
            {
             if ($req->isMethod('post'))
               {
                $data = $req->all();
                types_sub::where(['id_s'=>$id])->update(['type_sub'=>$data['type_sub'], 'type_line'=>$data['type_line'], 'station1'=>$data['station1'], 'station2'=>$data['station2'], 'station3_4'=>$data['station3_4'], 'station5_6'=>$data['station5_6']]);
                return redirect('/admin/viewSubscription')->with('flash_message_success', 'Category added successfully');
               }
             $SubscriptionDetails = types_sub::where(['id_s'=>$id])->first();
             
             return view('Admin.daily_tickets.editSubscription')->with(compact('SubscriptionDetails'));
            }

            public function deleteSubscription($id = null)
            {
             if ( !empty($id))
               {
                types_sub::where(['id_s'=>$id])->delete();
                return redirect()->back()->with('flash_message_success', 'Category deleted successfully');
               }
            }

      public function viewSubscription()
            {
             $types_subs = types_sub::get(); 
             return view('Admin.daily_tickets.viewSubscription')->with(compact('types_subs'));
            }
}
