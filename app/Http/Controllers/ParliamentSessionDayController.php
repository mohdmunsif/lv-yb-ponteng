<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParliamentSessionDayRequest;
use App\Http\Requests\UpdateParliamentSessionDayRequest;
use App\Models\ParliamentSessionDay;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entity;
use App\Models\User;

class ParliamentSessionDayController extends Controller
{

    public function getMaxDay($year, $month)
    {
        $date = Carbon::createFromDate($year, $month, 1);
        $maxDay = $date->format('t');
        return $maxDay;
    }

    function getWeekday($date)
    {
        return date('w', strtotime($date));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $now = Carbon::now();

        return redirect(route('parliamentdays.ym', [$now->year, $now->month]));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParliamentSessionDayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ParliamentSessionDay $parliamentSessionDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(ParliamentSessionDay $parliamentSessionDay)
    // {
    //     //
    // }

    public function edit($year, $month)
    {
        $carbonYearMonth = Carbon::create($year, $month);
        $monthName = $carbonYearMonth->translatedFormat('F');

        $prevDate = Carbon::create($year, $month)->subMonth();
        $nextDate = Carbon::create($year, $month)->addMonth();

        //        get the following by passing function parameter
        $columnNum = $this->getMaxDay($year, $month);

        //        generate the period of that month
        $period = CarbonPeriod::create($year . '-' . $month . '-' . '01', $year . '-' . $month . '-' . $columnNum);


        $dateStart = Carbon::create($year . '-' . $month . '-' . '01');
        $dateEnd = Carbon::create($year . '-' . $month . '-' . $columnNum);

        // Iterate over the period
        //        foreach ($period as &$date) {
        //            $date = $date->format('Y-m-d');
        //        }

        // Convert the period to an array of dates, along with the array of Day for the date
        $dates = $period->toArray();
        $daysNameArr = array('S', 'M', 'T', 'W', 'Th', 'F', 'S'); //this is the days per week, Sunday is Day 0, Saturday is Day 6
        $daysNamePerMonth = array(); //empty array

        for ($i = 0; $i < sizeof($dates); $i++) {
            $temp = $dates[$i];
            $dates[$i] = $temp->toDateString();

            //            populate the dayname array corresponding to the array of dates
            array_push($daysNamePerMonth, $daysNameArr[$this->getWeekday($dates[$i])]);
        }

        // dd(ParliamentSessionDay::whereBetween('session_date',[$dateStart,$dateEnd])->get());

        return view(
            'calendar.edit',
            [
                'parliamentsessiondays' => ParliamentSessionDay::whereBetween('session_date',[$dateStart,$dateEnd])->get(),
                'colNum' => $columnNum,
                'dates' => $dates,
                'month' => $month,
                'monthName' => $monthName,
                'year' => $year,
                'nextyear' => $nextDate->year,
                'nextmonth' => $nextDate->month,
                'prevyear' => $prevDate->year,
                'prevmonth' => $prevDate->month,
                'daysNamePerMonth' => $daysNamePerMonth,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParliamentSessionDayRequest $request, ParliamentSessionDay $parliamentSessionDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParliamentSessionDay $parliamentSessionDay)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function entity()
    {
        return view(
            'entitygroups.index',
            [
                'entities' => Entity::all(),
                'grouplist' => User::all(),
            ]
        );
    }
}
