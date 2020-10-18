<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MoneyDailyTicket;


class MoneyDailyTicketController extends Controller
{
    public function money_daily_ticket(Request $req)
    {
       // return view('admin.daily_tickets.add_daily_ticket');

       if ($req->isMethod('post'))
       {
        $data = $req->all();
        //echo "<pre>"; print_r($data); die; //use this line to test that data is receviced correcttly
        $ticket = new MoneyDailyTicket;
        $ticket->step1_9 = $data['step1_9'];
        $ticket->step1_16 = $data['step1_16'];
        $ticket->step1_37 = $data['step1_37'];

        $ticket->step3_9 = $data['step3_9'];
        $ticket->step3_16 = $data['step3_16'];
        $ticket->step3_37 = $data['step3_37'];
        $ticket->save();

        return redirect('/admin/viewDailyTicket')->with('flash_message_success', 'Category added successfully');
       }

    return view('Admin.money_daily_ticket');
    }

    public function editDailyTicket(Request $req, $id = null)
    {
     if ($req->isMethod('post'))
       {
        $data = $req->all();
        MoneyDailyTicket::where(['id'=>$id])->update(['step1_9'=>$data['step1_9'], 'step1_16'=>$data['step1_16'], 'step1_37'=>$data['step1_37'], 'step3_9'=>$data['step3_9'], 'step3_16'=>$data['step3_16'], 'step3_37'=>$data['step3_37']]);
        return redirect('/admin/money_daily_ticket')->with('flash_message_success', 'Category added successfully');
       }
     $DailyTicketDetails = MoneyDailyTicket::where(['id'=>$id])->first();
     
     return view('Admin.editDailyTicket')->with(compact('DailyTicketDetails'));
    }

    public function deleteDailyTicket($id = null)
    {
     if ( !empty($id))
       {
        MoneyDailyTicket::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Category deleted successfully');
       }
    }

public function viewDailyTicket()
    {
     $DailyTickets = MoneyDailyTicket::get(); 
     return view('Admin.viewDailyTicket')->with(compact('DailyTickets'));
    }
}
