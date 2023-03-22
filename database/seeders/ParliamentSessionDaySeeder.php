<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ParliamentSessionDaySeeder extends Seeder
{

    public function insertForMonth(int $month)
    {

        $todayDate = Carbon::now()->addMonth($month);
        $maxDay = $todayDate->format('t');
        $month = $todayDate->format('m');
        $year = $todayDate->format('Y');

        $randStart = rand(1, 28);
        $randEnd = rand($randStart, 28);

        for ($i = $randStart; $i <= $randEnd; $i++) {
            $dateGenerated = Carbon::createFromDate($year, $month, $i);
            DB::table('parliament_session_days')->insert([
                'session_date' =>  $dateGenerated,
            ]);
        }

    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->insertForMonth(-2);
        $this->insertForMonth(-1);
        $this->insertForMonth(0);
        $this->insertForMonth(1);
        $this->insertForMonth(2);

    }
}
