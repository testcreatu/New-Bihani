<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\EventRepository\SaveEventRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\Event;

class EventController extends Controller
{

	protected $saveEvent = null;
	protected $deleteImage = null;

	public function __construct(SaveEventRepository $saveEvent, DeleteImageRepository $deleteImage)
	{
		$this->saveEvent = $saveEvent;
		$this->deleteImage = $deleteImage;
	}

    public function create()
    {
    	return view('cd-admin.Event.createEvent');
    }

    public function save(Request $request)
    {
    	$this->saveEvent->saveEvent($request);
    	return redirect('cd-admin/event')->with('message','Event Added Successfully');
    }

    public function view()
    {
        $finalResponse = [];
    	$events = Event::all();
        $model = 'Event';
        $finalResponse['events']=$events;
        $finalResponse['model']=$model;

    	return view('cd-admin.Event.event', compact('finalResponse'));
    }

    public function edit(Request $request, $slug)
    {
    	$event = Event::where('uuid', $request['token'])->get()->first();
    	return view('cd-admin.Event.editEvent', compact('event'));
    }

    public function update(Request $request, $slug)
    {
    	$this->saveEvent->updateEvent($request);
    	return redirect('cd-admin/event')->with('message','Event Updated Successfully');
    }

    public function delete(Request $request)
    {
        $event = Event::where('uuid', $request['token'])->get()->first();
        $this->deleteImage->deleteImage($event);
        $event->delete();
        return redirect('cd-admin/event')->with('msg','Event Deleted Successfully');
    }
}

