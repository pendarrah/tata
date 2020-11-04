<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::user()->type == 'admin'){
            $tickets = Ticket::all();
        }else{
            $tickets = Ticket::where('user_id', \Auth::user()->id)->get();
        }
        return view('dashboard.tickets.index', compact('tickets'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:2555',
        ]);

        $ticket = Ticket::create([
            'title' => $request->title,
            'user_id' => \Auth::user()->id,
            'status' => 'Pending',
        ]);

        $ticket->replies()->create([
            'user_id' => \Auth::user()->id,
            'body' => $request->description
        ]);

        alert()->success('درخواست باموفقیت ایجاد شد.', 'انجام شد');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('dashboard.tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'description' => 'required|min:2|max:200',
            'attachment' => 'nullable'
        ]);

        if (\Auth::user()->type == 'admin'){
            $ticket->update(['status' => 'Replied By Admin']);
        }else{
            $ticket->update(['status' => 'Replied By User']);
        }

        if($request->file('attachment') == null){
            $ticket->replies()->create(['user_id' => \Auth::user()->id, 'body' => $request->description]);
        }
        else{
            $attachment = $this->uploadFile($request->file('attachment'), false, false);
            $ticket->replies()->create(['user_id' => \Auth::user()->id, 'body' => $request->description, 'attachment' => $attachment]);
        }


        alert()->success('درخواست با موفقیت ثبت شد.', 'انجام شد');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if (\Auth::user()->type !== 'admin') {
            alert()->error('Permission Denied.', 'Permission Denied');
            return redirect()->back();
        }

        Ticket::find($request->id)->delete();
        alert()->success('درخواست باموفقیت حذف شد.', 'انجام شد');
        return redirect()->back();
    }
}
