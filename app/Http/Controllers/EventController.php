<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Null_;


class EventController extends Controller
{
    //index file shows upcoming events
    public function index(){
        $events = Event::orderBy('date', 'asc')->whereDate('date', '>=', date(now()))->limit(5)->get();

        return view('admin.layouts.adminhome')->with('events', $events);
    }

    //show all upcoming event
   public function viewAll(){

       $events = Event::orderBy('date', 'asc')->whereDate('date', '>', date(now()))->paginate(10);

       return view('admin.layouts.events.viewall')->with('events', $events);
   }

   //Show the create an event form
   public function create(){

       return view('admin.layouts.events.create');
   }

   //get and insert into event table
    public function store(Request $request){
       request()->validate([
           'venue'  => 'required',
           'date'   => 'required',
           'time'   => 'required'
       ]);

       Event::create($request->all());

       return redirect('events')->with('success', 'Event Created');

    }

    //update the event
    public function update(Request $request, $id){

       request()->validate([
            'venue' => 'required',
            'date'  => 'required',
            'time'  => 'required',
        ]);

        $event          = Event::find($id);
        $event->venue   =$request->get('venue');
        $event->date    =$request->get('date');
        $event->contact =$request->get('contact');
        $event->address =$request->get('address');
        $event->time    =$request->get('time');
        $event->save();
        return redirect('admin')->with('success', 'Event Updated');;
    }

    //find and display the event
    public function edit($id){
        $event = Event::find($id);

        return view('admin.layouts.events.edit', compact('event', 'id'));
    }

    //delete the model
    public function destroy($id){

         Event::destroy($id);

        return redirect('admin')->with('success', 'Event Removed');;

    }

    //search for record
    public function search(Request $request){

        $venue = $request->get('venue');
        $contact = $request->get('contact');
        $address = $request->get('address');
        if(empty($venue)){
            $venue = '';
            }
        if(empty($contact)){
            $contact = '';
        }
        if(empty($address)){
            $address = '';
        }

        $events = Event::where('venue', 'like', $venue)
            ->orwhere('contact', 'like', $contact)
            ->orwhere('address', 'like', $address)
            ->get();
        return view('admin.layouts.events.editSearch')->with('events', $events);
    }

    //dispaly page to search for an event
    public function lookupEvents(){

        return view('admin.layouts.events.lookupEvents');
    }

    //show the ent info in full
    public function show($id){
        $event = Event::find($id);

        return view('admin.layouts.events.show', compact('event', 'id'));
    }
}
