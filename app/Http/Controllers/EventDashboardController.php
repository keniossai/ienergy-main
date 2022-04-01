<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EventDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'date' => 'required',
            'place' => 'required',
            'event_type' => 'required',
            'status' => 'required',
        ]);

        $event = Event::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'image' => 'image.jpg',
            'date' => $request->date,
            'place' => $request->place,
            'event_type' => $request->event_type,
            'status' => $request->status,
        ]);


        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/event/', $image_new_name);
            $event->image = '/storage/event/' . $image_new_name;
            $event->save();
        }

        Session::flash('success', 'Event created successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact(['event']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'title' => "required|unique:events,title, $event->id",
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $event->title = $request->title;
        $event->slug = Str::slug($request->title);
        $event->description = $request->description;
        $event->date = $request->date;
        $event->save();


        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/event/', $image_new_name);
            $event->image = '/storage/event/' . $image_new_name;
        }
        $event->save();

        Session::flash('success', 'Event updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event){
            if(file_exists(public_path($event->image))){
                unlink(public_path($event->image));
            }

            $event->delete();
            Session::flash('success', 'Post deleted successfully');
        }

        return redirect()->back();
    }
}
