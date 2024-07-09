<?php

namespace App\Http\Controllers;

use Acaronlex\LaravelCalendar\Calendar;
use DateTime;
use Illuminate\Support\Carbon;

class FullCalendarController extends Controller
{
    public function index()
    {
        $events = [];

        $events[] = Calendar::event(
            __('Taiwan National Day'), //event title
            false, //full day event?
            Carbon::parse('2024-10-09')->startOfDay(), //start time (you can also use Carbon instead of DateTime)
            Carbon::parse('2024-10-10')->endOfDay(), //end time (you can also use Carbon instead of DateTime)
	        0 //optionally, you can specify an event ID
        );

        $calendar = new Calendar();
        $calendar->addEvents($events)
        ->setOptions([
            'locale' => str_replace('_', '-', strtolower(app()->getLocale())),
            'timeZone' => config('app.timezone'),
            'allDayText' => __('All Day'),
            'buttonText' => [
                'today' => __('Today'),
                'month' => __('Month'),
                'week' => __('Week'),
                'day' => __('Day'),
                'list' => __('List'),
            ],
            'displayEventTime' => true,
            'firstDay' => 0,
            'headerToolbar' => [
                'end' => 'today prev,next dayGridMonth timeGridWeek timeGridDay'
            ],
            'initialView' => 'timeGridWeek',
            'selectable' => true
        ]);
        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);

        return view('calendar', compact('calendar'));
    }
}
