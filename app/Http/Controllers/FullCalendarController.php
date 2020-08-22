<?php

namespace App\Http\Controllers;

use Acaronlex\LaravelCalendar\Calendar;
use DateTime;

class FullCalendarController extends Controller
{
    public function index()
    {
        $events = [];

        $events[] = Calendar::event(
            '端午節', //event title
            false, //full day event?
            '2020-06-25T0900', //start time (you can also use Carbon instead of DateTime)
            '2020-06-28T1800', //end time (you can also use Carbon instead of DateTime)
	        0 //optionally, you can specify an event ID
        );

        $calendar = new Calendar();
        $calendar->addEvents($events)
        ->setOptions([
            'locale' => 'zh-tw',
            'firstDay' => 0,
            'displayEventTime' => true,
            'selectable' => true,
            'initialView' => 'timeGridWeek',
            'headerToolbar' => [
                'end' => 'today prev,next dayGridMonth timeGridWeek timeGridDay'
            ]
        ]);
        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);

        return view('calendar', compact('calendar'));
    }
}
