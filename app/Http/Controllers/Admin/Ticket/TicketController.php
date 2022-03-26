<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ticket\TicketRequest;
use App\Models\Ticket\Ticket;

class TicketController extends Controller
{
    public function newTickets()
    {
        $tickets = Ticket::where('seen', 0)->get();
        foreach ($tickets as $newTicekt) {
            $newTicekt->seen = 1;
            $result = $newTicekt->save();
        }
        return view('admin.ticket.index', compact('tickets'));
    }
    public function openTickets()
    {
        $tickets = Ticket::where('status', 1)->get();

        return view('admin.ticket.index', compact('tickets'));
    }
    public function closeTickets()
    {
        $tickets = Ticket::where('status', 1)->get();

        return view('admin.ticket.index', compact('tickets'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::orderBy('created_at', 'desc')->simplePaginate(15);
        return view('admin.ticket.index', compact('tickets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('admin.ticket.show', compact('ticket'));
    }

    public function answer(TicketRequest $request, Ticket $ticket){
            $inputs = $request->all();
            $inputs['subject'] = $ticket->subject;
            $inputs['description'] = $request->description;
            $inputs['seen'] = 1;
            $inputs['reference_id'] = $ticket->reference_id;
            $inputs['user_id'] = 1;
            $inputs['category_id'] = $ticket->category_id;
            $inputs['priority_id'] = $ticket->priority_id;
            $inputs['ticket_id'] = $ticket->id;
    
            $ticket = Ticket::create($inputs);
            return redirect()->route('admin.ticket.index')->with('swal-success', 'پاسخ نظر با موفقیت ثبت شد');
    }

    public function change(Ticket $ticket){
        $ticket->status == 0 ? 1 : 0;
        $result = $ticket->save();

        return redirect()->route('admin.ticket.index')->with('swal-success', 'وضعیت فعال بودن تیکت با موفقیت تغییر یافت');
    }
}
