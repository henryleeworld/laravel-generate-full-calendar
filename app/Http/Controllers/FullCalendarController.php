<?php

namespace App\Http\Controllers;

use Edrisa\LaravelCalendar\Calendar;
use DateTime;

class FullCalendarController extends Controller
{
    public function index()
    {
        $events = [];

        $events[] = Calendar::event(
            '國慶日', //event title
            false, //full day event?
            '2023-10-09 00:00:00', //start time (you can also use Carbon instead of DateTime)
            '2023-10-10 23:59:59', //end time (you can also use Carbon instead of DateTime)
	        0 //optionally, you can specify an event ID
        );

        $calendar = new Calendar();
        $calendar->addEvents($events)
        ->setOptions([
            'locale' => 'zh-tw',
            'timeZone' => 'UTC',
            'allDayText' => '整天',
            'buttonText' => [
                'today' => '今天',
                'month' => '月',
                'week' => '週',
                'day' => '天',
                'list' => '清單',
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
